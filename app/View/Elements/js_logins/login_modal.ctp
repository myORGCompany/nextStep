<!-- Login Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Login Now</h4>
            </div>
            <div class="modal-body">
                <?php echo $this->element('/js_logins/login_popup_small'); ?>
                <div class="padding-top-15">
<!--                    New user? <a href="<?php echo ABSOLUTE_URL . '/registration.html'; ?>">Register here</a>-->
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Login Modal mobile-->
<div class="modal fade" id="login-modal-mobile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Login Now</h4>
            </div>
            <div class="modal-body">
                <?php echo $this->element('js_logins/login_form_mobile');?>
                <div class="padding-top-15">

                </div>
            </div>

        </div>
    </div>
</div>