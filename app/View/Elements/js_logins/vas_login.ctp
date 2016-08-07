<div class="form-container wid300">
  <?php if(empty($userInfo)){ 
            echo $this->Form->create('JsLogin',array('url' =>ABSOLUTE_URL.'/js_logins/js_guest_apply/'.$slug,'id'=>'login_form','method'=>'post','autocomplete'=>'on','onsubmit'=>'')); 
            echo $this->Form->input('JsLogin.login_btn',array('type'=>'hidden','label'=>false ,'div'=>false,'error'=>false,'value'=>'1'));
                
          ?>
		   <input type="hidden" id="type" name="data[JsLogin][type]" value="1">
		    <input type="hidden" name="data[return]" value ="job_detail " />
            <input type="hidden" name="data[page]" value ="job_detail " />
            <input type="hidden" name="data[jobid]" value ="<?php echo $jobId; ?>"/>
  <div class="form-container_main2 wid285">
    <div class="pad7 margin_btm8 blackbld13">Candidate Login </div>
    <div class="clear"></div>
    <div class="spacer2"></div>
    <div class="clear"></div>
    <div class="hm_login_txt">Email ID</div>
    <div class="left">
      <?php  
                 if(isset($this->data['JsLogin']['user_nameE']) && $this->data['JsLogin']['user_nameE'] != 'E.g. saurav@gmail.com'){
                 $value = $this->data['JsLogin']['user_nameE'];
                 $class =  'input';
               }
              // echo $this->Form->input('JsLogin.user_nameE',array('id'=>'user_nameE','label'=>false ,'div'=>false,'maxlength' => '80','style'=>'width:137px;','class'=> $class,
              //'value'=>$value,'onFocus'=>'javascript:if(this.value=="E.g. "){this.value="";this.style.color="#000"}','onBlur'=>'javascript:if(this.value==""){this.value="E.g. ;this.style.color="#9C9B9A"}')); 
               echo $this->Form->input('JsLogin.user_nameE',array('id'=>'user_nameE','label'=>false ,'div'=>false,'maxlength' => '80','style'=>'width:190px;','class'=> 'input'));
               ?>
    </div>
  
    <div class="clear"></div>
    <div class="spacer15"></div>
    <div class="clear"></div>
    <div class="hm_login_txt">Password</div>
    <div class="left"> <?php echo $this->Form->input('JsLogin.password',array('id'=>'password','autocomplete' => 'off','label'=>false ,'div'=>false,'maxlength' => '15','style'=>'width:190px;','class'=> 'input','value'=>'','type'=>'password'));?> </div>
    <div class="home_submit_forgot_pass2">
      <div class="flt">
        <?php  echo $this->Html->link('Forgot Password?', '/forgot-password.html', array('class'=>'forgot_password', 'target'=>"_blank")); ?>
      </div>
    </div>
    <div class="spacer10"></div>
    <div class="clear"></div>
    <div class="auto">
      <div class="home_submit_button">
        <input type="submit" class="boxbtn onHover" onclick="return submit_gust_login_form();" name="Login" value="Login">
      </div>
    </div>
    <div class="clear"></div>
    <div class="spacer5 clear" ></div>
    <div class="clear"></div>
    
    <!--    error message container starts hare-->
    <?php
                   $display = 'none';            
                   if((isset($PloginRegister['message']) || isset($PloginRegister['linked']))){
                   $display = 'block';
                  }                         
             ?>
    <div id="msgcontainer" style="display:<?php echo $display; ?>">
      <div class="clear"></div>
      <div class="error_msg_detail margintop10">
         <div class="information_msg2" id="message_area">
          <?php        
                  if(isset($PloginRegister['message'])){
                      
                       $msg= $PloginRegister['message'];
                       echo $msg;
                  }

                  if(isset($PloginRegister['linked'])){

                         $accc = $PloginRegister['account'];?>
          <a href="<?php echo ABSOLUTE_URL.'/js_logins/send_activation_data/'.$accc;?>" class="refresh">click here</a>
          <?php  
                  }  
                    ?>
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <!--    error message container ends hare-->
    <div class="clear"></div>
    <div class="auto">
      <div class="hm_login_txt">&nbsp;</div>
      <div class="hm_login_input" style="display:none;"><?php echo $this->Form->
              submit('hm_login_btn.gif',array('type' =>'submit','name'=>'login_btn','value'=>'login_btn','onmouseout'=>'MM_swapImgRestore()','onmouseover'=>'MM_swapImage("Image22","","'. $this->Html->url('/img/hm_login_btn.gif').'",1)','name'=>'Image22', 'border'=>'0' ,'id'=>'Image22','div'=>false)); ?> </div>
    </div>
    
    <div class="clear"></div>
    <div class="spacer15"></div>
    <div class="clear"></div>
  </div>
<?php echo $this->Form->end(); }  ?>             
</div>
