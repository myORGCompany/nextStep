<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <?php if($jobId) {?>
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title">Login & Apply</h4>
            <?php }else {?>
            <h4 class="modal-title">Login & Create Alert</h4>
            <?php } ?>
        </div>
        <div class="modal-body">
            <?php if($jobId) {?>
            <input type="hidden" id="jobId" value="<?php echo $jobId; ?>" />
            <input type="hidden" id="urgentJob" value="<?php echo $urgentJob; ?>" />
            <?php } ?>


            <div class="row">

            <div class="col-xs-12 margin-top-15 padding-bottom-10">
                        <ul id="myTab" class="list-unstyled nav nav-tabs" role="tablist">
                            <li class="active">
                             <a href="#loggedIn" role="tab" data-toggle="tab">Existing User</a>
                            </li>
                            <li>
                                <a href="#signUp" role="tab" data-toggle="tab">New User</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane active" id="loggedIn" >
                                 <div class="col-xs-12 padding-top-15 padding-bottom-15">
                                <?php
                                        echo $this->Session->flash();
                                        echo $this->element('js_logins/login_form_apply_popup');
                                ?>
                                </div>
                            </div>
                             <div class="clearfix"></div>
                            <div class="tab-pane card" id="signUp">
                                <div class="col-xs-12 padding-top-15 padding-bottom-15">
                                   <h4 class="padding-bottom-10">Register yourself first to apply</h4>
                                   <dic class="clearfix"></dic>
                                 <?php
                                     echo $this->element('js_logins/registration_form');
                                    ?>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                         <div class="clearfix"></div>
                    </div>
            </div>



        </div>

    </div>
</div>