
<!-- <div class="col-xs-12 col-sm-8 col-sm-push-2 text-center padding-top-10 border-bottom-gray">
    <h4>Sign Up With</h4> 
</div> -->
<div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6 col-xs-8 col-xs-push-2 col-sm-push-0 padding-top-15">
    <a onclick="ga('send', 'event', 'Registration', 'Sign up with LinkedIn');" href="<?php echo $this->Html->url(array("controller" => "linkedins", "action" => "index" . $addParameters)); ?>" class="btn btn-block btn-social btn-linkedin smallSocialBtn" >
        <i class="fa fa-linkedin"></i>LinkedIn Signin
    </a>
</div>
<div class="col-sm-6 col-md-6 col-lg-6 col-xs-8 col-xs-push-2 col-sm-push-0 padding-top-15">
    <a onclick="ga('send', 'event', 'Registration', 'Sign in with Facebook');" href="<?php echo $this->Html->url(array("controller" => "facebookApp", "action" => "fblogin" . $addParameters)); ?>" class="btn btn-block btn-social btn-facebook smallSocialBtn" >
        <i class="fa fa-facebook"></i>Facebook Signin
    </a>
</div>
</div>

<div class="clearfix"></div>

<hr class="light-border" />
<div class="clearfix"></div>
<div class="text-center center-block text-center" style="margin-top:-32px; background:#fff; width:8%;">or</div>
<?php /*
  <a href="<?php echo $this->Html->url(array("controller" => "linkedins","action" => "index".$addParameters));?>" class="btn btn-primary col-sm-12 raise-2" onclick="changeClass()">Sign Up with LinkedIn? </a>
 */ ?>

<div class="clearfix margin-top-15"></div>


<?php
echo $this->Form->create('JsLogin', array(
    'action' => 'registration', 'method' => 'POST', 'role' => 'form', 'novalidate',
    'class' => (isset($fClass)) ? $fclass : ""
));
?>
<div id="hh_signup">

    <div class="form-group">
        <div class="input-group">
            <!-- <label class="sr-only" for="exampleInputEmail2">Email address</label> -->
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
            <!-- <label class="sr-only" for="exampleInputEmail2">Email address</label> -->
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
        <p class="pull-right email-suggestion"></p>
    </div>
    <div class="clearfix"></div>

    <div class="form-group">
        <div class="input-group">
            <!-- <label class="sr-only" for="exampleInputEmail2">Email address</label> -->
            <div class="input-group-addon"><i class="fa fa-lock font-20"></i></div>
            <?php
            echo $this->Form->password('password', array(
                'placeholder' => 'Password',
                'class' => 'form-control no-border-radius',
                'maxlength' => '20',
                'id' => 'passwordp',
                'label' => false,
                'required' => false,
                'div' => false
            ));

            echo $this->Form->input('passwordt', array(
                'id' => 'passwordt',
                'class' => 'form-control',
                'maxlength' => '15',
                'readonly' => true,
                'style' => "display:none;",
                'type' => 'text',
                'label' => false,
                'div' => false
            ));
            ?>
        </div>
    </div>



    <div class="clearfix"></div>
    <div class="form-group">
        <div class="input-group">
            <!-- <label class="sr-only" for="exampleInputEmail2">Email address</label> -->
            <div class="input-group-addon"><i class="fa fa-phone font-17"></i></div>


            <?php
            echo $this->Form->input('country_code', array(
                'type' => 'text',
                'class' => 'form-control no-border-radius width-20perc',
                'placeholder' => '',
                'id' => 'country-code',
                'maxlength' => '4',
                'label' => false,
                'required' => false,
                'div' => false,
                'default' => "+91",
            ));
            ?>
            <div class="mobile-input-box width-80perc pull-left margin-left-minus-1" id="mNumber">
                <?php
                echo $this->Form->input('mobile_number', array(
                    'type' => 'text',
                    'class' => 'form-control no-border-radius',
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
    <input class="membershipPlan hidden" value="1" checked type="radio"  name="data[promotions][plan]" value="basic" checked="checked">
    

    <!-- <div class="clearfix"></div> -->

    <!--        <div class="form-group">
                <div role="alert" class="alert alert-danger">
                    Please provide information as per the messages above.
                </div>
            </div>-->
    <div class="clearfix"></div>
    <div class="form-group">

        <input type="hidden" id="JsLoginRegisterVal" value="1" name="data[JsLogin][register_val]">
        <input type="hidden" id="jobseeker_id" name="data[JsLogin][jobseeker_id]">


        <input type="hidden" value="<?php
        if (isset($this->request->data['JsLogin']['RID']) && $this->request->data['JsLogin']['RID'] != null)
            echo $this->request->data['JsLogin']['RID'];
        else
            echo 0;
        ?>" id="RID" name="data[JsLogin][RID]">
               <?php
               if (isset($_GET['createAlert'])) {
                   $registeredFromValue = 'job_alert_signup';
               }
               else if ($this->action == 'checkEmailVerify' && $this->params['controller'] == 'js_logins') {
                   $registeredFromValue = 'apply_popup_registration';
               } else {
                   $registeredFromValue = 'main_registration';
               }
               echo $this->Form->input('JsLogin.registered_from', array('type' => 'hidden', 'value' => $registeredFromValue, 'error' => false));
               ?>




        <!--<a class="btn btn-primary" href="javascript:void(0);">Join Now</a>-->
        <?php echo $this->Form->button('Join Now', array('class' => 'btn btn-primary form-control', 'title' => 'Register', 'type' => 'submit', 'onclick' => "setGA();")) ?>
    </div>
    <div class="clearfix"></div>
    <div class="form-group font-13">
        <small class="text-muted small">
            *By joining HeadHonchos, you agree to HeadHonchos.com's</small>
        <a href="<?php echo ABSOLUTE_URL_CRON;?>/terms-of-use.html" class="text-muted small" target="_blank">Terms of Use</a>  <small class="text-muted">and</small>
        <a href="<?php echo ABSOLUTE_URL_CRON;?>/privacy-policy.html" class="text-muted small" target="_blank">Privacy Policy</a>.
        <small class="text-muted">As a registered user, you may receive communications from HeadHonchos on the status of your registration and various subscription plans.</small>
        <br />
    </div>

    <div class="clearfix"></div>
</div>
<?php
echo $this->Form->end();
?>


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
//$("#mobile-number").intlTelInput({
//        defaultCountry: "in",
//        nationalMode: true,
//        responsiveDropdown: true,
//        utilsScript: ABSOLUTE_URL+"/lib/libphonenumber/build/utils.js"
//    });
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