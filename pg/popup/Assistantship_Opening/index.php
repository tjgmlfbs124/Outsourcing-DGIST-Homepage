
<script src="assets/js/jquery-3.3.1.min.js"></script>
<style>
  p {
    font-size:13px;
  }
</style>
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="blog-details-page-content sp-y"  style="margin:10px;">
            <div class="container">
                <div class="row align-items-lg-stretch" style="align-items:stretch;">
                    <div class="col-lg-10">
                      <div class="service-details-info" style="margin:0;" >

                        <div class="about-service mt-50 mt-sm-35"  style="margin:0;">
                          <h5>Graduate Student Assistantship Opening</h5>
                          <p>The Department of Interdisplinary Engineering of DGIST has an opening for the 2021 spring semester graduate student assistantship <br>
                          with the following research focus area (Advisor: Prof. Jonghun Leen, Email: jhlee@dgist.ac.kr): </p>
                          <p>
                          1) radar processing (Deep/Mahcine Learning),<br> 2) Automotive radar,<br> 3) Vital Radar,<br> 4) Sensor Fusion <br> <br>

                          To qualify for this highly competitive scholarship, applicants must meet the following requirements: <br> <br>

                          1. Hold a bachelor’s or master’s degree as of March 1st, 2021 <br>
                          2. For master’s program (or Integrated Master’s & Doctoral program): students should hold a bachelor’s degree or a diploma that is equivalent to or higher than bachelor’s degree <br>
                          3. For doctoral program: students should hold a master’s degree or a diploma that is equivalent to or higher than master’s degree <br>
                          4. Important requirements: Official english score should be over 80 in TOEFL or 6.0 in IELTS <br> <br>

                          Listed below are some features of this research assistantship and the expected benefits of the program for successful applicants: <br> <br>

                          1. Monthly allowance of at least 1,200,000 won(KRW) for PHD student and 800,000 won for master student <br>
                          2. Tuition fees for study period <br>
                          3. Extra allowances based on research performance <br> <br>

                          Application procedure: <br>
                          Interested applicants should send the following things to the above advisor email address: <br>

                          1) Study plan (clearly stating the research topics you are interested in) <br>
                          2) Academic transcripts <br>
                          3) Brief summary of most recent thesis and the status (eg accepted, in progress, submitted, etc) <br>
                          4) CV (to include names, education, work experience, publications) <br>
                          5) Copy of official English score (TOEFL or IELTS score should be submitted) <br>
                        </p>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
      </div>
      <div class="modal-footer" style="display:block;">
        <div class="form-check" style="float:left;">
          <input type="checkbox" class="form-check-input" id="check-close-day">
          <label class="form-check-label" for="exampleCheck1">하루동안 열지않기</label>
        </div>
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal" style="float:right;">닫기</button>
      </div>
    </div>
  </div>
</div>

<script>


  function closePop(){
      if (document.frm.pop.checked){
      setCookie("popname", "done", 1);
  }

}
</script>
