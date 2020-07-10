# import the necessary packages
import argparse
import cv2
import sys
import matplotlib.pyplot as plt
import matplotlib.image as mpimg
from matplotlib.backends.backend_wxagg import FigureCanvasWxAgg as FigureCanvas
from matplotlib.patches import Rectangle

import numpy as np
import pyautogui
import time

# initialize the list of reference points and boolean indicating
# whether cropping is being performed or not
refPt = []
drawing = False

def click_and_crop(event, x, y, flags, param):
	# grab references to the global variables
	global refPt, drawing
	# if the left mouse button was clicked, record the starting
	# (x, y) coordinates and indicate that cropping is being
	# performed
	if event == cv2.EVENT_LBUTTONDOWN:
		refPt = [(x, y)]
		drawing = True

	elif event == cv2.EVENT_MOUSEMOVE:
		if drawing == True:
			cv2.rectangle(image,refPt[0],(x,y),(0,255,0),-1)

	# check to see if the left mouse button was released
	elif event == cv2.EVENT_LBUTTONUP:
		# record the ending (x, y) coordinates and indicate that
		# the cropping operation is finished
		refPt.append((x, y))
		drawing = False
		# draw a rectangle around the region of interest
		cv2.rectangle(image, refPt[0], refPt[1], cv2.COLOR_RGB2BGR, 2)
		cv2.imshow("image", image)


def detect_greenLine(img):
	lower_green = (30, 80, 80)
	upper_green = (70, 255, 240)

	# BGR to HSV 변환
	img_hsv = cv2.cvtColor(img, cv2.COLOR_BGR2HSV)
	img_mask = cv2.inRange(img_hsv, lower_green, upper_green)
	img_result = cv2.bitwise_and(img, img, mask=img_mask)
	imgplot = plt.imshow(img_result)
	#plt.show()

	cv2.imshow("ROI", img_result)
	cv2.waitKey(0)

while True:
	image = pyautogui.screenshot()
	image = cv2.cvtColor(np.array(image), cv2.COLOR_BGR2RGB)
	print("image : " , image)
	opacity = 0.4
	clone = image.copy()
	cv2.namedWindow("image")
	cv2.setMouseCallback("image", click_and_crop)
	# keep looping until the 'q' key is pressed

	while True:
		# display the image and wait for a keypress
		cv2.imshow("image", image)
		key = cv2.waitKey(1) & 0xFF
		# if the 'r' key is pressed, reset the cropping region
		if key == ord("r"):
			image = clone.copy()

		# if the 'c' key is pressed, break from the loop
		elif key == ord("c"):
			break
		elif key == ord("x"):
			refPt=[]
			sys.exit()
			break

	# if there are two reference points, then crop the region of interest
	# from teh image and display it
	if len(refPt) == 2:
		print("@@@@")
		roi = clone[refPt[0][1]:refPt[1][1], refPt[0][0]:refPt[1][0]]
		cv2.imwrite('images/temp.jpg', roi)
		img = mpimg.imread('images/temp.jpg', cv2.IMREAD_COLOR)
		detect_greenLine(img)
	cv2.destroyAllWindows()
	time.sleep(0.3)



# close all open windows
