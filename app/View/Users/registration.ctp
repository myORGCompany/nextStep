
<!-- <div class="col-xs-12 col-sm-8 col-sm-push-2 text-center padding-top-10 border-bottom-gray">
    <h4>Sign Up With</h4> 
</div> -->



<div class="modal fade" role="dialog" id="signUpForm">
<div class="clearfix"></div>
<div class="modal-header modal-content modal-dialog">
    <div class="col-xs-6">
        <div>
            <a  class="btn btn-social btn-block btn-facebook smallSocialBtn btn-bordered-facebook">
                <i class="fa fa-facebook" style="transform: matrix(1, 0, 0, 1, 0, 0);"></i>
                <span class="hidden-xs">Facebook Login</span><span class="visible-xs">Facebook</span>
            </a>
        </div>
    </div>
    <div class="col-xs-6">
        <div>
            <a  class="btn btn-social btn-block btn-linkedin smallSocialBtn btn-bordered-linkedin">
                <i class="fa fa-linkedin" style="transform: matrix(1, 0, 0, 1, 0, 0);"></i> <span class="hidden-xs">Linkedin Login</span><span class="visible-xs">Linkedin</span>
            </a>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="col-xs-8 col-xs-offset-2 text-center padding-bottom-10 padding-top-5">
    <hr class="light-border">
    <div class="clearfix"></div>
    <div class="text-center center-block text-center" style="margin-top:-32px; background:#fff; width:8%;">or</div>
</div>
<div class="clearfix"></div>

<form action="<?php echo ABSOLUTE_URL?>/registration" method="post" role="form" novalidate="novalidate" class="bv-form" id="JsLoginRegistrationForm" accept-charset="utf-8">
    <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
    <div style="display:none;">
        <input type="hidden" name="_method" value="POST" />
    </div>
    <div id="hh_signup">
        <div class="form-group">
            <label class="form_label">Name</label>
            <input type="text" class="form-control" name="data[JsLogin][first_name]"  title="Please enter your name" id="JsLoginFirstName">
        </div>
        <div class="clearfix"></div>
        <?php  if(isset($usedEmail) && (int)$usedEmail){ $error = 'error has-error'; }  ?>
        <div class="form-group ">
            <label class="form_label">Email</label>
            <input type="text" class="form-control" name="data[JsLogin][emailid]" title="Please enter your email" id="JsLoginEmailid" onchange="hideError()" value="">
            <p class="pull-right email-suggestion"></p>
            <?php if(isset($usedEmail) && (int)$usedEmail){ ?>
            <small class="help-block" style="">An account already exists for this email. Please use a different email or <a href="<?php echo ABSOLUTE_URL?>">Login</a></small>
            <?php } ?>
        </div>
        <div class="clearfix"></div>
        <div class="form-group">
            <label class="form_label">Password</label>
            <input type="password" name="data[JsLogin][password]" class="form-control"  title="Please enter your password" id="passwordp">
        </div>
        <div class="clearfix"></div>
        <?php if(isset($usedMobile) && (int)$usedMobile){ $errorM = 'error has-error'; }  ?>
        <div class="form-group ">
            <label class="form_label">Mobile</label>
            <div class="clearfix"></div>
            <div class="width-20perc pull-left text-center">
                <input name="data[JsLogin][country_code]" class="form-control text-center"  id="country-code" maxlength="4" type="text" value="+91" data-bv-field="data[JsLogin][country_code]" onchange="hideError()" title="Country Code"> </div>
            <div class="mobile-input-box width-80perc pull-left  margin-left-minus-3" id="mNumber">
                <input name="data[JsLogin][mobile_number]" class="form-control"  id="mobile-number" maxlength="20" type="text" data-bv-field="data[JsLogin][mobile_number]" title="Your Mobile Number" onchange="hideError()" value="">
            </div> 
            <?php if(isset($usedMobile) && (int)$usedMobile){ ?>
            <small class="help-block" style="">An account already exists for this mobile number.</small>
            <?php } ?>
        </div>
        <input class="membershipPlan hidden" value="1" checked type="radio"  name="data[promotions][plan]" value="basic" checked="checked">
        <div class="clearfix"></div>
        <div class="form-group padding-bottom-10 padding-top-20">
            <div class="col-sm-12">
                <div class="row">
                    <input type="hidden" id="JsLoginRegisterVal" value="1" name="data[JsLogin][register_val]">
                    <input type="hidden" id="jobseeker_id" name="data[JsLogin][jobseeker_id]">
                    <input type="hidden" value="<?php
                    if (isset($this->request->data['JsLogin']['RID']) && $this->request->data['JsLogin']['RID'] != null)
                        echo $this->request->data['JsLogin']['RID'];
                    else
                        echo 0;
                    ?>" id="RID" name="data[JsLogin][RID]">
<?php /*
if (isset($_GET['createAlert'])) {
$registeredFromValue = 'job_alert_signup';
}
else if ($this->action == 'checkEmailVerify' && $this->params['controller'] == 'js_logins') {
$registeredFromValue = 'apply_popup_registration';
} else if(isset($content) && isset($content['email'])){
$registeredFromValue = 'resume_upload_register';
} else {
$registeredFromValue = 'main_registration';
}
echo $this->Form->input('JsLogin.registered_from', array('type' => 'hidden', 'value' => $registeredFromValue, 'error' => false)); */
?>
                    <input type="hidden" id="registered_from" name="data[JsLogin][registered_from]" value="<?php echo $registeredFromValue?>">

                    <input type="submit" value="Join Now" name="Register" id="register_btn" class="btn btn-lg btn-block primary-cta" onclick="setGA();">
                </div>
            </div>
            <div class="clearfix"></div><!-- 
            <div class="col-sm-12 padding-top-20">
                <div class="row">
                    <input type="submit" value="Login" name="Register" id="register_btn" class="btn btn-lg btn-block primary-bordered-cta">
                </div>
            </div>
            <div class="clearfix"></div> -->
            
            <div class="clearfix"></div>
            <div class="form-group font-13 padding-top-5">
                <small class="text-muted small">
                    *By joining HeadHonchos, you agree to HeadHonchos.com's</small>
                <a href="http://www.headhonchos.com/terms-of-use.html" class="text-muted small" target="_blank">Terms of Use</a> <small class="text-muted">and</small>
                <a href="http://www.headhonchos.com/privacy-policy.html" class="text-muted small" target="_blank">Privacy Policy</a>.
                <small class="text-muted">As a registered user, you may receive communications from HeadHonchos on the status of your registration and various subscription plans.</small>
                <br>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</form>
</div>
<script>



    /*
     * @author Sumit Kumar
     * @param {String} cCode
     * @returns {bool} true if valid country code
     */
    function isCountryCode(cCode) {

        var isValid = false;
        var fChar = cCode.charAt(0);
        if (fChar === '+') {
            var mNumber = cCode.substring(1, cCode.length);
            if (mNumber.length <= 3 && parseInt(mNumber)) {
                var reg = new RegExp('^[0-9]+$');
                isValid = reg.test(mNumber);
            }
        }

        return isValid;
    }
    function hideError(){
        $('.help-block').hide();
    }
    $(document).ready(function () {


        $("#viewPassword").change(function () {
            var _this = $(this);
            var isChecked = _this.is(":checked");
            if (isChecked) {
                $("#passwordp").hide();
                $("#passwordt").show();
            } else {

                $("#passwordp").show();
                $("#passwordt").hide();
            }
        });
        $("#passwordp").change(function () {
            $("#passwordt").val($(this).val());
        });/*
 * $(r2Form).find("[name='data[JsLogin][mobile_number]']").on('change', function () {
    $(r2Form).bootstrapValidator("revalidateField", "data[JsLogin][country_code]")
    }).end().
            find("[name='data[JsLogin][country_code]']").on('change', function () {
    $(r2Form).bootstrapValidator("revalidateField", "data[JsLogin][mobile_number]")
    }).
            end().
        */
        $("#JsLoginRegistrationForm").find("[name='data[JsLogin][mobile_number]']").on('change', function () {
    $("#JsLoginRegistrationForm").bootstrapValidator("revalidateField", "data[JsLogin][country_code]")
    }).end().
            find("[name='data[JsLogin][country_code]']").on('change', function () {
    $("#JsLoginRegistrationForm").bootstrapValidator("revalidateField", "data[JsLogin][mobile_number]")
    }).
            end().bootstrapValidator({
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
                            message: "This email is already registered",
                            url: ABSOLUTE_URL + "/js_logins/checkMemberShipByEmail",
                            trigger: 'blur'
                        }
                    }
                },
                "data[JsLogin][password]": {
                    message: "Please chose a password with at least 7 chars",
                    selector: "#passwordp",
                    validators: {
                        notEmpty: {
                            enabled: true,
                            message: 'Please enter your password'
                        },
                        password: {
                            message: 'The password is not valid'
                        },
                        stringLength: {
                            enabled: true,
                            min: 7,
                            max: 20,
                            message: 'Password should be at least 7 characters'
                        },
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
                                    return(true);
                                }

                                var country_code = $("#country-code").val();
                                country_code = country_code.replace(/\s/g, '');
                                country_code = country_code.replace('+', '');
                                if (country_code != "")
                                    $("#country-code").val("+" + country_code);
                                else {
                                    return{
                                        valid: false
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
                                }
                                else {
                                    return {
                                        valid: false,
                                        message: 'Enter a valid mobile number'
                                    };
                                }
                                return {
                                    valid: false,
                                    message: 'Enter a valid mobile number'
                                };
                            }
                        }//END CALL BACK
                    }
                }, //end mob vlidate
                "data[JsLogin][country_code]": {
                    message: "Enter a valid country code",
                    validators: {
                        notEmpty: {
                            message: 'Enter country code'
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
                }//end country code validation
            }

        }).ajaxForm({
            dataType: 'JSON',
            success: function (data) {

                if (!data.hasError) {
                    if(typeof(data.job_alert_id)!=undefined && data.job_alert_id){
                        window.location.href = ABSOLUTE_URL + '/JsJobAlerts/view/'+data.job_alert_id;
                    }
                    else{
                        var membershipPlan = $(".membershipPlan:checked").val();
                        if (membershipPlan = 1) {
                            if ($('#jobId')) {
                                window.location.href = ABSOLUTE_URL + '/js_my_pages/myPageR2/r2/' + $('#jobId').val();
                            } else {
                                window.location.href = ABSOLUTE_URL + '/js_my_pages/myPageR2';
                            }
                        } else {
                            window.location.href = ABSOLUTE_URL + '/shopping_carts/buyNow/' + membershipPlan;
                        }
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
    $(document).ready(function () {
        $("#mobile-number").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
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
<script type="text/javascript">
    jQuery(document).ready(function() {
        var domains = [ 'gmail.com', 'hotmail.com', 'rediffmail.com' ];
        var secondLevelDomains = [ 'hotmail', 'headhonchos' ];
        var topLevelDomains = [ "com", "net", "org" ];
            jQuery( '#JsLoginEmailid' ).on( 'blur', function() {
                jQuery(this).mailcheck({
                domains: domains,
                secondLevelDomains: secondLevelDomains,
                topLevelDomains: topLevelDomains,
                suggested: function( element, suggestion ) {
                    console.log("suggestion ", suggestion.full);
                    jQuery('.email-suggestion').html("Did you mean <a id='fill-email-suggestion'>" + suggestion.full + "</a>?");
                },
                empty: function( element ) {
                     jQuery('.email-suggestion').html('');
                }
            });
        });
        jQuery(document).on( 'click', '#fill-email-suggestion', function() {
            var suggestion = jQuery( '#fill-email-suggestion' ).text();
            jQuery( '#JsLoginEmailid' ).val( suggestion );
            jQuery('.email-suggestion').html('');
            jQuery( "#JsLoginRegistrationForm" ).bootstrapValidator( "revalidateField", "data[JsLogin][emailid]" );
        });
    });
</script>