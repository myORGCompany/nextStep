<script type="text/javascript" src="<?php echo ABSOLUTE_URL;?>/js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo ABSOLUTE_URL;?>/js/bootstrapValidator.min.js"></script>
<div class="templatemo-top-bar" id="templatemo-top">
            <div class="container">
                <div class="subheader">
                    <div id="phone" class="pull-left">
                            <img src="<?php echo ABSOLUTE_URL;?>/img/phone.png" alt="phone"/>
                            090-080-0110
                    </div>
                    <div id="email" class="pull-right">
                            <img src="<?php echo ABSOLUTE_URL;?>/img/email.png" alt="email"/>
                            info@company.com
                    </div>
                </div>
            </div>
        </div>
        <div class="templatemo-top-menu">
            <div class="container">
                <!-- Static navbar -->
                <div class="navbar navbar-default row" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <a href="#" class="navbar-brand"><img src="<?php echo ABSOLUTE_URL;?>/img/templatemo_logo.png" alt="Urbanic Template" title="Urbanic Template" /></a>
                        </div>
                        <div class="navbar-collapse collapse" id="templatemo-nav-bar">
                            
                            <?php if ($this->params['controller'] == 'home_pages' && $this->action != 'deshBoard') { ?> 
                              <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">
                                <li class="active"><a href="<?php echo ABSOLUTE_URL;?>/home_pages/deshBoard">HOME</a></li>
                                <li><a href="#templatemo-about">ABOUT</a></li>
                                <li><a href="#templatemo-portfolio">PORTFOLIO</a></li>
                                <li><a href="#templatemo-blog">BLOG</a></li>
                                <li><a rel="nofollow" 
                                        class="external-link" data-toggle="modal" data-target="#login">LOGIN</a></li>
                                        <li><a rel="nofollow" 
                                        class="external-link" id="register" data-toggle="modal" data-target="#signUpForm">REGISTER</a></li>
                                <li><a href="#templatemo-contact">CONTACT</a></li></ul>
                                <?php } else {  ?>
                                  <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">

                               <li class="active" ><a id="bank"  
                                        href="<?php echo ABSOLUTE_URL;?>/home_pages/deshBoard">Home</a></li>
                                        <li class="active">&nbsp;&nbsp;</li> 
                                <li class="active margin-left-10"><a href="<?php echo ABSOLUTE_URL;?>/home_pages/logout/">Logout</a></li>
                                </ul>

                               <?php } ?>
                            
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>
       
  <div id="login"  class="modal fade" role="dialog">
      <div class="modal-content modal-dialog">
          <div class="modal-header">
              <button id="close" type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Login to site.com</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
                          <form id="loginForm" method="POST" action="javascript:void(0);" data-toggle="validator" >
                              <div class="form-group control-group" id="emailid">
                                  <label for="email" class="control-label" >Email</label>
                                  <input type="text" class="form-control" id="email" name="email" title="Please enter a valid email" placeholder="example@gmail.com" required="">
                                  
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group control-group" id="pass">
                                  <label for="password" class="control-label">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required=" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>
                              <div id="loginNotifications" class="alert alert-danger hide"  role="alert"></div>
                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" id="remember"> Remember login
                                  </label>
                                  <p class="help-block">(if this is a private computer)</p>
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Login</button>
                              <a href="/forgot/" class="btn btn-default btn-block">Help to login</a>
                          </form>
                      </div>
                  </div>
                  <div class="col-xs-6">
                      <p class="lead">Register now for <span class="text-success">FREE</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> See all your orders</li>
                          <li><span class="fa fa-check text-success"></span> Fast re-order</li>
                          <li><span class="fa fa-check text-success"></span> Save your favorites</li>
                          <li><span class="fa fa-check text-success"></span> Fast checkout</li>
                          <li><span class="fa fa-check text-success"></span> Get a gift <small>(only new customers)</small></li>
                          <li><a href="/read-more/"><u>Read more</u></a></li>
                      </ul>
                      <p><a id="reg" href="" class="btn btn-info btn-block">Yes please, register now!</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <input type="hidden" id="tempLoginVar" value="0" />
<script type="text/javascript">
    // $(document).ready(function () {
    //      $("#loginForm").bootstrapValidator({
    //         live: false,
    //         trigger: 'blur',
    //         fields: {
    //             "email": {
    //                 message: "Please Enter emailid",
    //                 selector: "#email",
    //                 validators: {
    //                     notEmpty: {
    //                         enabled: true,
    //                         message: 'Please enter an E-mail address'
    //                     },
    //                     emailAddress: {
    //                         message: 'Please enter a valid E-mail address'
    //                     },
    //                     remote: {
    //                         message: "This email is already registered",
    //                         url: "<?php echo ABSOLUTE_URL;?>/users/isRegisteredEmail",
    //                         trigger: 'blur'
    //                     }
    //                 }
    //             },
    //             "password": {
    //                 message: "Please enter a password with at least 7 chars",
    //                 selector: "#password",
    //                 validators: {
    //                     notEmpty: {
    //                         enabled: true,
    //                         message: 'Please enter your password'
    //                     },
    //                     password: {
    //                         message: 'The password is not valid'
    //                     },
    //                     stringLength: {
    //                         enabled: true,
    //                         min: 7,
    //                         max: 20,
    //                         message: 'Password should be at least 7 characters'
    //                     },
    //                 }
    //             }
    //         }
    //     });
    // });
        //     $('#loginForm').validate({
        //         rules: {
        //              email: {
        //                 message: "Please Enter emailid",
        //                 selector: "#email",
        //                 validators: {
        //                     notEmpty: {
        //                         enabled: true,
        //                         message: 'Please enter an E-mail address'
        //                     },
        //                     emailAddress: {
        //                         message: 'Please enter a valid E-mail address'
        //                     },
        //                     remote: {
        //                         message: "This email is already registered",
        //                         url: "<?php echo ABSOLUTE_URL;?>/users/isRegisteredEmail",
        //                         trigger: 'blur'
        //                     }
        //                 }
        //             },
        //             Password: {
        //                 minlength: 2,
        //                 required: true,
        //             }
        //         },
        //         highlight: function (element) {
        //             $(element).closest('.controls').removeClass('success').addClass('text-danger');
        //         },
        //         success: function (element) {
        //             element.addClass('valid')
        //                 .closest('.controls').removeClass('error').addClass('success');
        //         }
        //     });
        // });
        /*
         * @Function : ajax post request to post the data to backend php code and get responce
         * @param : array Form data
         * @Return : successMessage as responce
         * @Author : Vikrant Agrawal
         * @creted on : 2016-08-27
         */
        // function isRegisteredEmail(emailid){
        //     $.ajax({
        //             type: "POST",
        //             url: "<?php echo ABSOLUTE_URL;?>/users/isRegisteredEmail",
        //             data: {email:emailid},
        //             success: function(data){
        //                 if (data == 1) {
        //                     $('#emailid').removeClass('has-error').addClass('has-success');
        //                 } else {
        //                     $('#emailid').removeClass('has-success').addClass('has-error');
        //                 }
        //             }, error: function (request, status, error) {
        //                 alert("Something went wrong");
        //             }
        //         });
        // }
        
</script>
<script type="text/javascript">
  $(document).ready(function () {
    var ABSOLUTE_URL = "<?php echo ABSOLUTE_URL;?>";
        var loginForm = $("#loginForm");

        var loginFormValidationRules = {
            fields: {
                "email": {
                    validators: {
                        notEmpty: {
                            enabled: true,
                            message: 'The email address is required'
                        },
                        emailAddress: {
                            enabled: true,
                            message: 'This is not a valid email address'
                        },
                        remote: {
                            message: "you are not registered please register first",
                            url: ABSOLUTE_URL + "/desh_board/isRegistered",
                            trigger: 'blur'
                        }
                    }
                },
                "password": {
                    validators: {
                        notEmpty: {
                            enabled: true,
                            message: 'Please enter password'
                        }
                    }
                }
            },
            trigger: "blur",
            live: false,

        };
        
        var isFormValid = false;

        /*
         * instantiate validator
         *
         */
        var validator = $(loginForm)
                .bootstrapValidator(
                    loginFormValidationRules
                )
                .on("success.form.bv", function (e, field, $field) {
                    
                    if (!isFormValid) {
                        
                        e.preventDefault();
                        
                        if ($('#tempLoginVar').val()=='0') {
                            
                            $('#tempLoginVar').val('1');
                            $.ajax({
                                dataType: "JSON",
                                url: ABSOLUTE_URL + "/desh_board/ajaxLogin",
                                data: loginForm.serialize(),
                                type: "POST",
                                success: function (res) {
                                    
                                    if (res.hasError === true) {
                                        
                                        $("#loginNotifications").html(res.messages).show().removeClass('hide');
                                        $('#tempLoginVar').val('0');
                                        
                                    } else {
                                        
                                        if (res.redirect === false) {
                                            //page reload
                                            document.location.reload(true);
                                        } else {
                                            //redirect to given url
                                            window.location.href = res.redirect;

                                        }
                                        
                                    }
                                    
                                }
                            });
                            
                        }

                    }
                });
    });

</script>
