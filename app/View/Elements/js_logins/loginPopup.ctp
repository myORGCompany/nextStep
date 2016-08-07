<div class="wid393 sho-cart-popup1">
   
    <?php echo $this->Form->create('JsLogin',array('action'=>'login','name'=>'login_form','id'=>'login_form','autocomplete'=>'on','onsubmit'=>'return submit_login_form()')); ?>
            <div class="registration_new1">
            
                
                <div class="sho-cart-popup-heading">
                <div class="flt">Login Now</div>
                <div class="frt margintop10"><a href="#"><img width="12" height="13" alt="" onClick="popup('popUpDiv');" src="<?php echo $this->Html->url('/img/cross_icon4.png') ?>" ></a></div>
                </div>
                
                <div class="clear"></div>
                <div style="padding:0px 20px 10px;">
                <div class="flt margintop25 margin_btm20">
                  <div class="wid80 strong lineheight32">Email ID</div>
                  <div class="wid250">
                         <?php $fn = '';$cf='color:#000';
        
                         echo $this->Form->input('JsLogin.user_nameE',array('type'=>'text','label'=>false ,'maxlength'=>40,'id'=>'user_nameE','style'=>"width:236px;$cf",'class'=>'input' ,'value'=>$fn,'div'=>false)); ?>
                   
                  </div>
                </div>
                <div class="clear"></div>
                <div class="flt">
                  <div class="wid80 strong lineheight32">Password</div>
                  <div class="wid250">
                   
                      <?php 
                         echo $this->Form->input('JsLogin.password',array( 'id'=>'password','style'=>'width:236px;color:#000','type'=>'password','class'=>'input','label'=>false ,'autocomplete' => 'off','div'=>false,'maxlength' => '15' )); ?>
                  </div>
                </div>
                <div class="clear"></div>
                <div class="margintop20">
                <div class="wid150 alignright font11 margintop7" style="float:right;"><?php echo $this->Html->link('Forgot your password?', '/forgot-password.html', array('class'=>'forgot_password')); ?> </div>
                
                <div class="flt pad84">
                  <?php /*<div class="flt">
                   <?php echo $this->Form->input('remember_me',array('id'=>'remember_me','label'=>false ,'div'=>false,'class'=> 'input','value'=>'1','type'=>'checkbox','checked'=>"checked"));?>
                  </div>
                  <div class="flt font11">Stay logged in</div>
                  <div class="clear"></div>*/?>
                  <div class="flt margin_btm20">
            <input type="hidden" id="loginPage" name="data[JsLogin][loginPage]" value ="login-using-popup" />
            <input type="hidden" name="data[JsLogin][loginJobId]" id="loginJobId" value ="0" />
             <input type="button" class="blue-button-small" onclick="return submitLoginform();" name="Login" value="Login" />
                  </div>
                  
                </div>
                </div>
                <div class="clear"></div>
                <div style="padding:0px 10px 10px 85px;">New user? Register here, <a href="<?php echo ABSOLUTE_URL.'/registration.html';?>">Click here</a></div>
                 <div class="error_msg1" id="msgcontainer" style="display:none">
            <div class="error_msg_icon">
             
                <img src="<?php echo $this->Html->url('/img/exclamation.png'); ?>" alt="" width="20" height="18" />
            </div>
            <div class="information_msg wid242line_height18" id="message_area">
            
            </div>
            <div class="clear"></div>
           
          </div>
            <div class="divGap"></div>
          </div>
             <div class="clear"></div>
            </div>
    <?php echo $this->Form->end() ?>
          </div>

