// Get Api의 url parameter을 반환하는 함수.
// @address : Current url
// @name : key값
function getParmasToObject(address, name) {
  var rtnval = '';
  var nowAddress = unescape(address);
  var parameters = (nowAddress.slice(nowAddress.indexOf('?') + 1,
          nowAddress.length)).split('&');
  for (var i = 0; i < parameters.length; i++) {
      var varName = parameters[i].split('=')[0];
      if (varName.toUpperCase() == name.toUpperCase()) {
          rtnval = parameters[i].split('=')[1];
          break;
      }
  }
  return rtnval;
}


// UTC 기준의 날짜를 현재시간에 맞게 바꿔 반환한다.
function UTC_TO_GMT(getDate){
  var date = new Date(getDate);
	return (date.getFullYear() + "/" + (date.getMonth() + 1) + "/" + date.getDate());
}

// 첫글자를 대문자로 바꾼다
function capitalize(str) {
  return str.charAt(0).toUpperCase() + str.slice(1);
}

// 클립보드에 글자를 복사한다.
function is_ie() {
  if(navigator.userAgent.toLowerCase().indexOf("chrome") != -1) return false;
  if(navigator.userAgent.toLowerCase().indexOf("msie") != -1) return true;
  if(navigator.userAgent.toLowerCase().indexOf("windows nt") != -1) return true;
  return false;
}

function copy_to_clipboard(str) {
  if( is_ie() ) {
    window.clipboardData.setData("Text", str);
    alert("복사되었습니다.");
    return;
  }
  prompt("Ctrl+C를 눌러 복사하세요.", str);
}
