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

<?php
echo $this->Form->create('JsLogin', array(
   // 'action' => 'login',
    'name' => 'login_form',
    'id' => 'login_form_apply',
    'autocomplete' => 'on',
    'onsubmit' => ''
));
?>
<div class="form-group">
    <label for="user_nameE_apply">Email address</label>
    <?php
    $fn = ($emailId!='')?$emailId:'';
    $cf = 'color:#000';

    echo $this->Form->input('JsLogin.user_nameE', array(
        'type' => 'text',
        'label' => false,
        'maxlength' => 40,
        'id' => 'user_nameE_apply',
        'class' => 'form-control',
        'value' => ($fn=='undefined')?'':$fn, 'div' => false,
        'placeholder' => "Enter Email"
    ));
    ?>
</div>
<div class="form-group">
    <label for="password_apply">Password</label>

    <?php
    echo $this->Form->input('JsLogin.password', array(
        'id' => 'password_apply',
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





<div id="loginNotificationsApply" class="alert alert-danger hide"  role="alert"></div>
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





<script>

    $(document).ready(function () {

        var loginForm = $("#login_form_apply");

        var loginFormValidationRulesApply = {
            fields: {
                "data[JsLogin][user_nameE]": {
                    selector: '#user_nameE_apply',
                    validators: {
                        notEmpty: {
                            enabled: true,
                            message: '- The email address is required'
                        },
                        emailAddress: {
                            enabled: true,
                            message: '- This is not a valid email address'
                        },
                        remote: {
                            message: "- You are not registered with headhonchos",
                            url: ABSOLUTE_URL + "/js_logins/isRegistered",
                            trigger: 'blur'
                        }
                    }
                },
                "data[JsLogin][password]": {
                    selector: '#password_apply',
                    validators: {
                        notEmpty: {
                            enabled: true,
                            message: 'Please enter password'
                        }
                    }
                }
            },
            trigger: "blur",
            live: false
        };
        var isFormValid = false;

        /*
         * instantiate validator
         *
         */
        var validator = $(loginForm).bootstrapValidator(loginFormValidationRulesApply).on("success.form.bv", function (e, field, $field) {
            if (!isFormValid) {

                e.preventDefault();

                $.ajax({
                    dataType: "JSON",
                    url: ABSOLUTE_URL + "/js_logins/ajaxLogin",
                    data: loginForm.serialize(),
                    type: "POST",
                    success: function (res) {
                        if (res.hasError === true) {
                            $("#loginNotificationsApply").html(res.messages).show().removeClass('hide');
                        } else {
                            <?php if($jobId) {?>
                            $.ajax({
                                url: ABSOLUTE_URL+'/JsHomePages/getSiteNavigation',
                                success: function (data) {
                                    $('#siteNavigation').html(data);
                                    jobId = $('#jobId').val();
                                    urgentJob = $('#urgentJob').val();

                                    jobApply(jobId,urgentJob);
                                },
                                error: function () {
                                    alert('Something went wrong..');
                                }
                            });
                            <?php }else{ ?>
                                window.location.href = res.redirect;
                            <?php } ?>
                        }
                    }
                });

            }
        });
    });



</script>