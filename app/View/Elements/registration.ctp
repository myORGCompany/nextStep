<div id="signUpForm"  class="modal fade" role="dialog">
      <div class="modal-content modal-dialog">
          <div class="modal-header">
              <button id="close" type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Register hare........</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-12">
                  <div class="well">
                      <form id="regForm" method="POST" action="<?php echo ABSOLUTE_URL;?>/home_pages/registration" data-toggle="validator" >
                              <div class="form-group control-group">
                              <div class="form-group control-group">
                                  <label for="Name" class="control-label">Name</label>
                                  <input type="text" class="form-control" id="Name" name="Name" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>
                                  <label for="email" class="control-label" >Username</label>
                                  <input type="text" class="form-control" id="email" name="email" title="Please enter you username" placeholder="example@gmail.com" required="">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group control-group">
                                  <label for="password" class="control-label">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group control-group">
                                  <label for="mobile" class="control-label">mobile</label>
                                  <input type="integer" class="form-control" id="mobile" name="mobile" value="" required="" title="Please enter your mobile number">
                                  <span class="help-block"></span>
                              </div>
                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>
                             <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" id="remember"> Remember login
                                  </label>
                                  <p class="help-block">(if this is a private computer)</p>
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Register</button>
                          </form>
                      </div>
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