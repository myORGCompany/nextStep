<?php 

echo $this->Form->create('JsLogin',array('url' =>ABSOLUTE_URL.'/js_logins/quickApply/'.$slug,'id'=>'login_form','method'=>'post','autocomplete'=>'off','onsubmit'=>''));

            echo $this->Form->input('JsLogin.login_btn',array('type'=>'hidden','label'=>false ,'div'=>false,'error'=>false,'value'=>'1'));
            
            

?>
<input type="hidden" id="type" name="data[JsLogin][type]" value="1">
		    <input type="hidden" name="data[return]" value ="job_detail " />
            <input type="hidden" name="data[page]" value ="job_detail " />
            <input type="hidden" name="data[jobid]" value ="<?php echo $jobId; ?>"/>
<div class=" bg_FFFFFF paddingAll1 border-radius5LRB loginForm" style="display:none" id="login_box">
    <div class="pad15 padt20">
        
        <div class="clear"></div>
        
        
        
        <div class="search_LP_NEW_input_box wid350">
            
            
            <?php  
                 if(isset($this->data['JsLogin']['user_nameE']) && $this->data['JsLogin']['user_nameE'] != 'E.g. saurav@gmail.com'){
                 $value = $this->data['JsLogin']['user_nameE'];
                 $class =  'input';
               }
              // echo $this->Form->input('JsLogin.user_nameE',array('id'=>'user_nameE','label'=>false ,'div'=>false,'maxlength' => '80','style'=>'width:137px;','class'=> $class,
              //'value'=>$value,'onFocus'=>'javascript:if(this.value=="E.g. "){this.value="";this.style.color="#000"}','onBlur'=>'javascript:if(this.value==""){this.value="E.g. ;this.style.color="#9C9B9A"}')); 
               //echo $this->Form->input('JsLogin.user_nameE',array('id'=>'user_nameE','label'=>false ,'div'=>false,'maxlength' => '80','style'=>'width:340px; color:#333333; font:bold 11px/18px Arial, Helvetica, sans-serif;','class'=> 'input','onfocus'=>"javascript:if(this.value=='E-mail ID'){this.value='';this.style.color='#000';}"));
               
               
               echo $this->Form->input('JsLogin.user_nameE',array('id'=>'user_nameE','label'=>false ,'div'=>false,'maxlength' => '80','style'=>'width:340px; color:#333333; font:bold 11px/18px Arial, Helvetica, sans-serif;','class'=> 'input','placeholder'=>"Email ID",'value'=>'E-mail ID','title'=>"Email ID",'onfocus'=>"javascript:if(this.value=='E-mail ID'){this.value='';this.style.color='#000';}"));
               ?>
        </div>
        <div class="clear "></div>
        <div class="search_LP_NEW_input_box wid350">
            <?php echo $this->Form->input('JsLogin.password',array('id'=>'passwordE','autocomplete' => 'off','label'=>false ,'div'=>false,'maxlength' => '15','class'=> 'input','value'=>'','placeholder'=>'Password','title'=>'Password', 'type'=>'password','style'=>"background:none;height:24px;width:340px; color:#333333; font:bold 11px/18px Arial, Helvetica, sans-serif; ",'oncopy'=>"return false",'onfocus'=>"javascript:if(this.value=='Password'){this.value='';this.style.color='#000';}"));?>
            
            
        </div>
        <div class="clear"></div>
       
        <div class="clear"></div>
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
        
        
    </div>
    <div class="clear"></div>
    <div class="border-radius5LRB  bg_e8e8e8 padtb20 marginTop15">
        <div class="flt padt9 pad22">
            <input type="submit" class="button2 blue2" onclick="return submit_gust_login_form(1);" name="Login" value="LOGIN"> 
        </div>
        <div class="flt padt15 padlr8">|</div>
        <div class="flt arial_12pxBold padt15">
            <?php  echo $this->Html->link('Forgot Password?', '/forgot-password.html', array('class'=>'forgot_password', 'target'=>"_blank")); ?>
        </div>
        <div class="clear"></div>
        <div class="spacer10"></div>
        <div class="clear"></div>
    </div>
    
    
    
    
</div>

<?php echo $this->Form->end();?>