<style>
    .width-50-px{
        width:50px !important;}
        .width-272-px{
            width:272px !important;;}

        </style>

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Apply with Resume</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="jobId" value="<?php echo $jobId; ?>" />
                    <input type="hidden" id="urgentJob" value="<?php echo $urgentJob; ?>" />

                    <div class="row">
                        <div class="col-xs-12 margin-top-15">
                            <?php
                            echo $this->Form->create('JsLogin', array(
                                'action' => 'registration', 
                                'method' => 'POST', 
                                'role' => 'form', 
                                'novalidate',
                                'class' => (isset($fClass)) ? $fclass : "",
                                'enctype' => 'multipart/form-data'
                                ));
                                ?>
                                <div id="hh_signup">

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user font-17"></i></div>
                                            <?php
                                            echo $this->Form->input('first_name', array(
                                                'placeholder' => 'Name',
                                                'class' => 'form-control no-border-radius',
                                                'label' => false,
                                                'required' => false,
                                                'div' => false
                                                ));
                                                ?>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-envelope font-15"></i></div>
                                                <?php
                                                echo $this->Form->input('emailid', array(
                                                    'type' => 'text',
                                                    'class' => 'form-control no-border-radius',
                                                    'placeholder' => 'Email',
                                                    'label' => false,
                                                    'required' => false,
                                                    'div' => false
                                                    ));
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group">
                                               <div class="input-group">

                                                   <div class="input-group-addon">
                                                       <i class="fa fa-phone font-17"></i></div>
                                                       <div class="mobile-input-box" id="mNumber">

                                                        <?php
                                                        echo $this->Form->input('JsLogin.country_code', array(
                                                            'type' => 'text',
                                                            'class' => 'form-control no-border-radius width-50-px pull-left',
                                                            'placeholder' => '',
                                                            'id' => 'country-code',
                                                            'maxlength' => '4',
                                                            'label' => false,
                                                            'required' => false,
                                                            'div' => false,
                                                            'default' => "+91",
                                                            ));
                                                            ?> 

                                                            <?php
                                                            echo $this->Form->input('JsLogin.mobile_number', array(
                                                                'type' => 'text',
                                                                'class' => 'form-control no-border-radius width-272-px ',
                                                                'placeholder' => 'Mobile number',
                                                                'id' => 'mobile-number',
                                                                'maxlength' => '20',
                                                                'label' => false,
                                                                'required' => false,
                                                                'div' => false
                                                                ));
                                                                ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>

                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <label  class="form_label pull-left" for="resume">Upload your resume &nbsp;(.doc, .docx or .pdf file of upto 1MB)</label>
                                                            <input id="resume"  placeholder="Upload your resume"  name="resume" type="file" class="input" class="form-control" onclick="ga('send', 'event', 'Registration', 'Apply - Upload Resume');" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <input class="membershipPlan hidden" value="1" checked type="radio"  name="data[promotions][plan]" value="basic" checked="checked">
                                                    </div>
                                                    <div class="clearfix"></div>

                                                    <div class="form-group">
                                                        <input type="hidden" id="JsLoginRegisterVal" value="1" name="data[JsLogin][register_val]" />
                                                        <input type="hidden" id="jobseeker_id" name="data[JsLogin][jobseeker_id]" />
                                                        <input type="hidden" value="<?php if (isset($this->request->data['JsLogin']['RID']) && $this->request->data['JsLogin']['RID'] != null) { echo $this->request->data['JsLogin']['RID']; } else { echo 0; } ?>" id="RID" name="data[JsLogin][RID]" />
                                                        <?php
                                                        echo $this->Form->input('JsLogin.registered_from', array('type' => 'hidden', 'value' => 'apply_guest', 'error' => false));
                                                        echo $this->Form->button('Apply', array('class' => 'btn btn-primary', 'title' => 'Apply', 'type' => 'submit', 'onclick' => "setGA();"));
                                                        ?>
                                                    </div>

                                                    <div class="clearfix"></div>
                                                </div>
                                                <?php
                                                echo $this->Form->end();
                                                ?>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>

    /*
     * @author Sumit Kumar
     * @param {String} cCode
     * @returns {bool} true if valid country code
     */
     function isCountryCode(cCode){
        var isValid = false;
        var fChar = cCode.charAt(0);

        if(fChar==='+') {
            var mNumber = cCode.substring(1,cCode.length);
            if(mNumber.length<=3 && parseInt(mNumber)) {
             var reg = new RegExp('^[0-9]+$');
             isValid = reg.test(mNumber);
         }
     }

     return isValid;
 }

 $(document).ready(function () {

var JsLoginRegistrationForm = $("#JsLoginRegistrationForm");

$(JsLoginRegistrationForm).find("[name='data[JsLogin][mobile_number]']").on('change', function () {
    $(JsLoginRegistrationForm).bootstrapValidator("revalidateField", "data[JsLogin][country_code]")
}).end().
find("[name='data[JsLogin][country_code]']").on('change', function () {
    $(JsLoginRegistrationForm).bootstrapValidator("revalidateField", "data[JsLogin][mobile_number]")
}).end().bootstrapValidator({
    live: false,
    trigger: 'blur',
    fields: {
        "data[JsLogin][first_name]": {
            selector: "#JsLoginFirstName",
            validators: {
                notEmpty: {
                    enabled: true,
                    message: "Please enter your complete name"
                },
                regexp: {
                    regexp: /^[a-z\s]+$/i,
                    message: 'Please enter your name in valid characters'
                },
                stringLength: {
                    enabled: true,
                    min: 1,
                    max: 40,
                    message: 'Please enter your complete name'
                }
            }
        },
        "data[JsLogin][emailid]": {
            message: "Please Enter emailid",
            selector: "#JsLoginEmailid",
            validators: {
                notEmpty: {
                    enabled: true,
                    message: 'Please enter an E-mail address'
                },
                emailAddress: {
                    message: 'Please enter a valid E-mail address'
                },
                remote: {
                    url: ABSOLUTE_URL+"/js_logins/checkMemberShipByEmail/applyWoLogin/<?php echo $jobId.'/'.$urgentJob; ?>",
                    trigger: 'blur'
                }
            }
        },
        "data[JsLogin][mobile_number]": {
         message: "Enter 10 digit phone number",
         validators: {
            notEmpty: {
                message: 'Enter mobile number'
            },
            remote: {
                message: "This mobile number is already registered",
                url: ABSOLUTE_URL + "/js_logins/checkMemberShipByMobile",
                trigger: 'blur'
            },
            callback: {
                message: 'Enter a valid mobile number',
                callback: function (value, validator, $field) {

                    if (value === '') {
                     return true;
                 }

                 var country_code = $("#country-code").val();
                 country_code = country_code.replace(/\s/g, '');
                 country_code = country_code.replace('+', '');
                 if (country_code != "")
                    $("#country-code").val("+" + country_code);
                else{
                    return{ 
                        valid: false,
                        message: 'Enter country code'
                    }
                }
                myString = value.replace(/ /g, '');
                if (((myString.length == 10) && (country_code == "91"))) {
                    return {
                        valid: true,
                    };
                } else if ((country_code != "91" && country_code != "") && myString.length >= 3) {
                    return {
                        valid: true,
                    };
                } else {
                    return {
                        valid: false,
                        message: 'Enter a valid mobile number'
                    };
                }
                return(true)



            }
        }
    }
},
                //country_code validation//
                "data[JsLogin][country-code]": {
                    message: "Enter a valid country code",
                    validators: {
                        notEmpty: {
                            message: 'Enter a country code'
                        }
                        , callback: {
                            message: 'Enter a valid country code',
                            callback: function (value, validator, $field) {

                                if (value === '') {
                                    return(true);
                                }

                                var country_code = value;
                                country_code = country_code.replace(/\s/g, '');
                                if (isNaN(country_code) || country_code.length == 0) {
                                    return {
                                        valid: false,
                                        message: 'Enter a valid country code'
                                    };
                                }
                                country_code = country_code.replace('+', '');
                                $("#country-code").val("+" + country_code);
                                return {
                                    valid: true,
                                };
                            }
                        }
                    }
                    }, //end country code validation
                    "resume": {
                        selector: "#resume",
                        validators: {
                            notEmpty: {
                                message: 'Please upload your resume'
                            },
                            file: {
                                extension: 'doc,docx,pdf',
                            maxSize: 1 * 1024 * 1024, // 1 MB
                            message: 'The selected file is not valid,'
                        }
                    }
                }
            }
        }).ajaxForm({
            dataType: 'JSON',
            success: function (data) {
                if (!data.hasError) {
                    var valResume = $('#resume').val();
                    if(valResume != "") {
                        var calledUrl =ABSOLUTE_URL+'/js_my_pages/popup_resume_upload/quickapply/' + $('#jobId').val();
                        $.ajaxFileUpload({
                            url:calledUrl,
                            secureuri:false,
                            fileElementId:'resume',
                            dataType: 'json',
                            success:function(data){
                                var membershipPlan = $(".membershipPlan:checked").val();
                                if(membershipPlan==1) {
                                    if ($('#jobId')) {
                                        window.location.href = ABSOLUTE_URL + '/js_my_pages/myPageR2/r2/' + $('#jobId').val();
                                      // jobApply($('#jobId').val());
                                  } else {
                                    window.location.href = ABSOLUTE_URL + '/js_my_pages/myPageR2';
                                }
                            } else {
                                alert("in outer else");
                                    //window.location.href = ABSOLUTE_URL+'/shopping_carts/buyNow/'+membershipPlan;
                                }
                            }
                        });
}
}
},
error: function () {
}
});

});

function setGA() {
    var membershipPlan = $(".membershipPlan:checked").val();
    ga('send', 'event', 'Registration', 'R1 - Join Now', membershipPlan);
}

    /*$("#mobile-number").intlTelInput({
        defaultCountry: "in",
        nationalMode: true,
        responsiveDropdown: true,
        utilsScript: ABSOLUTE_URL+"/lib/libphonenumber/build/utils.js"
    });*/
$(document).ready(function () {
    $("#mobile-number").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== - 1 ||
                    // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                            // Allow: Ctrl+C
                            (e.keyCode == 67 && e.ctrlKey === true) ||
                                    // Allow: Ctrl+X
                                    (e.keyCode == 88 && e.ctrlKey === true) ||
                                            // Allow: home, end, left, right
                                            (e.keyCode >= 35 && e.keyCode <= 39)) {
                                    // let it happen, don't do anything
                                return;
                            }
                                    // Ensure that it is
                                    //  a number and stop the keypress
                                    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {

                                    //alert(e.keyCode);
                                    e.preventDefault();
                                }
                            });
});
</script>