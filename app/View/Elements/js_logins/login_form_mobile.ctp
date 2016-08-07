<?php
/**
 * contains login form
 * @author Sumit Kumar
 * @uses BootstrapValidator
 */
?>

<?php
$cart = $this->Session->read('cart_session');
$vasFlag = 0;
foreach ($cart['cartItems'] as $key => $value) {
    if ($value['OpProduct']['product_group'] == 'Premium Membership') {
        $vasFlag = $value['OpPromotion'][0]['id'];
        break;
    }
}
?>
<div class="row">
    <div class=" col-xs-10 col-xs-push-1  padding-top-15">
    <a onclick="ga('send', 'event', 'Login', 'Sign in with LinkedIn');" href="<?php echo $this->Html->url(array("controller" => "linkedins", "action" => "index" . $addParameters)); ?>" class="btn btn-block btn-social btn-linkedin smallSocialBtn" >
        <i class="fa fa-linkedin"></i>Signin With LinkedIn
    </a>
</div>
<div class="col-xs-10 col-xs-push-1  padding-top-15">
    <a onclick="ga('send', 'event', 'Login', 'Sign in with Facebook');" href="<?php echo $this->Html->url(array("controller" => "facebookApp", "action" => "fblogin" . $addParameters)); ?>" class="btn btn-block btn-social btn-facebook smallSocialBtn" >
        <i class="fa fa-facebook"></i>Signin With Facebook
    </a>
</div>
</div>

<div class="clearfix"></div>

<hr class="light-border"/>
<div class="clearfix"></div>
<div class="text-center center-block text-center" style="margin-top:-32px; background:#fff; width:8%;">or</div>
<?php
echo $this->Form->create('JsLogin', array(
   // 'action' => 'login',
    'name' => 'login_form',
    'id' => 'login_form_mobile',
    'autocomplete' => 'on',
    'onsubmit' => ''
));


echo $this->Form->input('JsLogin.returnUrl', array(
        'type' => 'hidden',
        'label' => false,
        'value' => $returnUrl, 'div' => false
    ));

?>

<div class="form-group">
    <label for="user_nameE">Email address</label>
    <?php
    $fn = '';
    $cf = 'color:#000';

    echo $this->Form->input('JsLogin.user_nameE', array(
        'type' => 'text',
        'label' => false,
        'id' => 'user_nameE',
        'class' => 'form-control',
        'value' => $fn, 'div' => false,
        'placeholder' => "Enter Email"
    ));
    ?>
</div>

<div class="form-group">
    <label for="password">Password</label>

    <?php
    echo $this->Form->input('JsLogin.password', array(
        'id' => 'password',
        'type' => 'password',
        'class' => 'form-control',
        'label' => false,
        'autocomplete' => 'off',
        'div' => false,
        'maxlength' => '20',
        'placeholder' => "Password"
    ));
    ?>
</div>

<div id="loginNotifications" class="alert alert-danger hide"  role="alert"></div>
<?php
echo $this->Form->input('loginJobId', array(
    'id' => 'loginJobId',
    'label' => false,
    'div' => false,
    'class' => 'form-control',
    'value' => '0',
    'type' => 'hidden'
));

if($vasLogin) {

    echo $this->Form->hidden('vas_flag',array('value'=>$vasFlag));


}
?>

<input type="submit" value="Login" name="Register" id="register_btn" onclick="" class="btn btn-primary btn-block margin-top-7">

<?php echo $this->Form->end(); ?>

<div class="clearfix"></div>
<div class="pull-right padding-top-10"><a href="<?php echo ABSOLUTE_URL.'/forgot-password.html'?>">Forgot Password?</a></div>
<input type="hidden" id="tempLoginVar" value="0" />

<script>

    $(document).ready(function () {

        var loginForm = $("#login_form_mobile");

        var loginFormValidationRules = {
            fields: {
                "data[JsLogin][user_nameE]": {
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
                            message: "you are not registered with headhonchos",
                            url: ABSOLUTE_URL + "/js_logins/isRegistered",
                            trigger: 'blur'
                        }
                    }
                },
                "data[JsLogin][password]": {
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
                                url: ABSOLUTE_URL + "/js_logins/ajaxLogin",
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