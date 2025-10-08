<!-- The Modal -->


<div class="modal fade" id="reportUserModal">
    <style>
.modal-content{
    border: 0px solid;
}
.closebtncolor{
  
    background-color: rgb(220, 53, 69); color:white;
}

.closebtn:hover{
    color: goldenrod;
    
}
.closebtncolor:hover{
    color: white;
    background-color: #A17A4E;
    
}
.reportBtn{
    color: white;
    margin-left: 16px; background-color:rgb(0, 123, 255);
}

.reportBtn:hover{
    color: white;
    background-color: #A17A4E;
}


#report-ad-form1 input{
    padding: 7px;
    position: absolute;
    width: 16px;
    margin-left: -19px;
    padding: 7px;
    z-index: 999;
}
.report-ad-form {
            width: 60rem;
            margin-left: 1px;
            margin-top: 20px;
        }
        .modal-header {
            padding: 0rem 1rem 0rem 1rem;
        }
        .modal-title_report{
            margin-left: 43px !important;
            color: blue;
            font-size: 14px;
        }
        #report-ad-form1 .form-control {
          
    margin-left: 10px;
    width: 21.5%;
        }


        #report-ad-form1 .form-check-input {
            width: 0em;
    margin-right: 12px;
    height: 0em;
    margin-top: 0em;
    vertical-align: top;
    background-color: #fff;
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
    border: 1px solid rgba(0, 0, 0, .25);
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    -webkit-print-color-adjust: exact;
        }
        .textarea{
            
            font-size: 14px;
            border: 1px solid goldenrod !important;   
            color:#000
        }
        .textarea:focus{
            border:1px solid #000fff !important;
          
        }
       
        .modal-footer {
            margin-right:22px;
            margin-top: -2.5rem;
            border-top: 0px solid transparent;
        }
        </style>
    <div class="modal-dialog modal-sm" style="border:0px solid red;width:232px;margin-top:9%;">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title_report">Report User</h4>
                <button type="button" class="close btn closebtn" data-bs-dismiss="modal" style="margin-top: -8px;font-size: 20px">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" style="position:relative;top:-20px;">
                <form class="report-ad-form" id="report-ad-form1">
                    <div class="alert-div" style="display: none;width:13rem; white-space: nowrap;"> 
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <div class="alert-text"></div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <input type="hidden" name="ad_id" class="ad-id" id="ad-id">
                    <!-- Default radio -->
                    <div class="form-check">
                        <input class="form-check-input1" type="radio" name="report_reason" id="reason1" value="Scam"/>
                        <label class="form-check-label" for="reason1"> Scam </label>
                    </div>

                    <!-- Defaul radio -->
                    <div class="form-check">
                        <input class="form-check-input1" type="radio" name="report_reason" id="reason2" value="Disturbing"/>
                        <label class="form-check-label" for="reason2"> Disturbing </label>
                    </div>

                    <!-- Defaul radio -->
                    <div class="form-check">
                        <input class="form-check-input1" type="radio" name="report_reason" id="reason3" value=" Fake Profile"/>
                        <label class="form-check-label" for="reason3"> Fake Profile </label>
                    </div>

                    <!-- Defaul radio -->
                    <div class="form-check">
                        <input class="form-check-input1" type="radio" name="report_reason" id="reason4" value="Disrespectful"/>
                        <label class="form-check-label" for="reason4"> Disrespectful </label>
                    </div>

                    <!-- Defaul radio -->
                    <div class="form-check">
                        <input class="form-check-input1" type="radio" name="report_reason" id="reason5" value="Privacy Violation"/>
                        <label class="form-check-label" for="reason5">Privacy Violation </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input1" type="radio" name="report_reason" id="reason5" value="Abusive Behavoir "/>
                        <label class="form-check-label" for="reason5">Abusive Behavoir </label>
                    </div>
                    
                    <div class="form-check" style="margin-bottom: 12px;">
                        <input class="form-check-input1" type="radio" name="report_reason" id="reason5" value="other"/>
                        <label class="form-check-label" for="reason5">Other </label>
                    </div>
                    <!-- textarea -->
                    <div class="col-md-12" style="margin-bottom: 12px;">
                        <div class="row">
                            <label for=""></label>
                            <textarea name="description"  class="form-control textarea" placeholder="Reason..."
                                       cols="12" rows="2" maxlength="80"
                                      ></textarea>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn closebtn closebtncolor " data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary  reportBtn report-ad-submit-btn" >Report</button>
            </div>

        </div>
    </div>
</div>


