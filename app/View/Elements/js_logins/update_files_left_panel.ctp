<?php 
//echo "<pre>";
//print_r()
?>
<div class="frt wid366 marleft33"> 
               <!-- Alt Registration Step 1-->
               
         
               
               <!-- Alt Registration Step 2-->
            <?php 
            $disFile="display:block";
                $disCon="display:none";
            if(isset($HHuserDetailsData['files_page']) && $HHuserDetailsData['files_page']==2){
                
                $disFile="display:none";
                $disCon="display:block";
            } ?> 
               <div class="auto" id="upProDataDiv" style="<?php echo $disFile;?>">
                <div class="search-grad-mid wid366">
                   <div class="search-grad-left">
                    <div class="search-grad-right">
                       <div class="search-grad-mid-content">
                       <span class="cust_info1">To receive Job Recommendations, and allow employers to search your profile, enter the details below. This is optional.</span>
                        <div class="clear"></div>
                        <div class="flt padt15">
                           <div class="clear"></div>
                           <div class="spacer100"></div>
                           <div class="clear"></div>
                           
                           <div class="auto" id="first_name_div">
                          
                            <div class="auto" id="master_functional_area_id_div">
                               <div class="wid120  line_height18 ">Functional Area<span class="marun_color">*</span></div>
                               <div class="wid209">
                                <div class="wid209">
                                <?php     
                                
                                echo $this->Form->input('JsProfile.master_functional_area_id',array(
                                'type'=>'select',
                                'empty'=>'-Functional Area-',
                                'label'=>false ,
                                'div'=>false,
                                'style'=>"width:121px;",
                                'class'=>'input',
                                'style'=>"width:212px;",
                                'id'=>'master_functional_area_id',
                                'options'=>$PloginRegister['MasterFunctionalArea'],
                                'error'=>false,
                                'onchange'=>'updateFilesValidation()')); 

                                ?>
                                 </div>
                              </div>
                             </div>
                             <div class="error_msg" id="master_functional_area_id_div_img_msg" style="display:none;">
      <div class="error_msg_icon2"><img src="<?php echo $this->Html->url('/img/yellowmessage_icon.gif'); ?>" alt="" width="20" height="18" /></div>
      <span class="information_msg" id="functional_area_message"> Please enter a valid functional area.</span> </div>

                            <div class="clear"></div>
                            <div class="spacer100"></div>
                            <div class="clear"></div>
                            <div class="auto" id="master_industry_id_div">
                               <div class="wid120  line_height18 ">Current Industry<span class="marun_color">*</span></div>
                               <div class="wid209">
                                <div class="wid209">
                               <?php 
                                echo $this->Form->input('JsProfile.master_industry_id',array(
                                'type'=>'select',
                                'empty'=>'-Industry-',
                                'label'=>false ,
                                'div'=>false,
                                'style'=>"width:121px;",
                                'class'=>'input',
                                'style'=>"width:212px;",
                                'id'=>'master_industry_id',
                                'options'=>$PloginRegister['MasterIndustry'],
                                'error'=>false,
                                'onchange'=>'updateFilesValidation()'));
                                ?>
                                 </div>
                              </div>
                             </div>
                            <div class="clear"></div>
                            <div id="master_industry_id_div_img_msg" class="error_msg"  style="display:none">
                               <div class="error_msg_icon"><img height="18" width="20" alt="" src="http://static.headhonchos.com/JobSeeker/img/yellowmessage_icon.gif"></div>
                               <span class="information_msg" id="first_name_msg">Please select the industry in which you are currently employed.</span> </div>
                          </div>
                            
                           <div class="clear"></div>
                           <div class="spacer100"></div>
                           <div class="clear"></div>
                           <div class="auto" id="master_year_id_div">
                            <div class="wid120  line_height18 ">Experience<span class="marun_color">*</span></div>
                            <div class="wid209">
                               <div class="wid95">
                              <?php 

                                echo $this->Form->input('JsProfile.master_year_id',array(
                                'type'=>'select',
                                'empty'=>'-Years-',
                                'id'=>'master_year_id',
                                'style'=>"width:147px;",
                                'class'=> 'input',
                                'options'=>$PloginRegister['MasterYear'], 
                                'label'=>false ,'div'=>false,
                                'error'=>false,
                                'onchange'=>'updateFilesValidation()')); 

                                ?>
                                
                              </div>
                             
                             </div>
                            <div class="clear"></div>
                            <div id="master_year_id_div_img_msg" class="error_msg" style="display:none;">
                               <div class="error_msg_icon"><img height="18" width="20" alt="" src="http://static.headhonchos.com/JobSeeker/img/yellowmessage_icon.gif"></div>
                               <span class="information_msg">Please let us know your cumulative experience.</span> </div>
                          </div>
                           <div class="clear"></div>
                           <div class="spacer100"></div>
                           <div class="clear"></div>
                           <div class="auto" id="master_country_city_id_div">
                            <div class="wid120  line_height18 ">Current Location</div>
                            <div class="wid209">
                               <div class="education_form_right  ">
                                <div class="flt">
                                 <?php 

                                $CountryDropDown[11]='India';
                                $CountryDropDown[40]='UAE'; 
                                $CountryDropDown[41]='US';
                                $CountryDropDown[39]='UK';

                                $FirstCountries=array(11,41,40,39,44); 
                                asort($PloginRegister['MasterCountry']); 
                                foreach($PloginRegister['MasterCountry'] as $k=>$v){
                                     
                                    if(!in_array($k,$FirstCountries)){
                                       
                                           $CountryDropDown[$k]=$v;
                                     }
                                }
                                $CountryDropDown[44]='Other International';                   
                                echo $this->Form->input('JsProfile.master_country_id',array(
                                                            'type'=>'select',
                                                            'empty'=>'-Country-',
                                                            'label'=>false ,
                                                            'div'=>false,
                                                            'style'=>"width:121px;",
                                                            'class'=>'input',
                                                            'style'=>"width:212px;",
                                                            'id'=>'master_country_id',
                                                            'options'=>$CountryDropDown,
                                                            'value'=>'11',
                                                            'error'=>false,
                                                            'onchange'=>"fetch_Salary();handleCountry(this.value);country_city_validation_reg();" ));
                                echo $this->Form->input('JsLogin.came_from',array('type'=>'hidden','value'=>'vas_register'));
                                echo $this->Form->input('JsLogin.promotion_id',array('type'=>'hidden','value'=>$subscription));

                                    ?>
                                 </div>
                                <div class="clear"></div>
                                <div class="spacer100"></div>
                                <div class="clear"></div>
                                <div class="flt ">
                                   <div id="div_city">
                                 <?php                 
                                            
                                            echo $this->Form->input('JsProfile.master_city_id',array(
                                                                'type'=>'select',
                                                                'empty'=>'-City-',
                                                                'label'=>false ,
                                                                'div'=>false,
                                                                'style'=>"width:121px;",
                                                                'class'=>'input',
                                                                'style'=>"width:212px;",
                                                                'id'=>'master_city_id',
                                                                'options'=>$MasterCityAll,
                                                                'error'=>false,
                                                                'onchange'=>'country_city_validation_reg();' )); 

                                  ?>
                                  </div>
                                 </div>
                              </div>
                             </div>
                            <div class="clear"></div>
                            <div class="error_msg" id="master_country_city_id_div_img_msg" style="display:none" >
      <div class="error_msg_icon2"> <img src="<?php echo $this->Html->url('/img/yellowmessage_icon.gif'); ?>" alt="" width="20" height="18" /> </div>
      <span class="information_msg" id="country_message" > </span> </div>
                            
                            
                          </div>
                          <div class="clear"></div><div class="spacer100"></div><div class="clear"></div>
                            <div class="auto" id="mobile_number_div">
                            <div class="wid120  line_height18 ">Mobile Number</div>
                            <div class="wid209">
                            
                                    <?php 

                                    echo $this->Form->input('JsLogin.country_code',array(
                                    'id'=>'country_code',
                                    'style'=>"width:40px;",
                                    'class'=> 'input',
                                    'value'=>'+91', 
                                    'label'=>false ,
                                    'div'=>false,
                                    'error'=>false));  

                                    ?>
                               <?php if(isset($PloginRegister['mobile_number'])){
                                
                                    echo $this->Form->input('JsLogin.mobile_number',array( 
                                    'label'=>false ,
                                    'value'=>$PloginRegister['mobile_number'],
                                    'div'=>false,
                                    'maxlength' => '15',
                                    'style'=>"width:157px;",
                                    'class'=>'input',
                                    'id'=>'mobile_number',
                                    'error'=>false,
                                    'onblur'=>'mobile_number_validation(this.id)'));

                                    } else {

                                    echo $this->Form->input('JsLogin.mobile_number',array( 
                                    'label'=>false ,
                                    'div'=>false,
                                    'maxlength' => '15',
                                    'style'=>"width:157px;",
                                    'class'=>'input',
                                    'id'=>'mobile_number',
                                    'error'=>false,
                                    'onblur'=>'mobile_number_validation(this.id)'));

                                    }
                                    ?>
                             </div>
                            <div class="clear"></div>
                            <div id="mobile_number_div_img_msg" class="error_msg" style="display:none;">
                               <div class="error_msg_icon"><img height="18" width="20" alt="" src="http://static.headhonchos.com/JobSeeker/img/yellowmessage_icon.gif"></div>
                               <span class="information_msg">Please enter a valid mobile number.</span> </div>
                          </div>
                          
                          
                          
                         </div>
                        <div class="clear"></div>
                        <div class="spacer15"></div>
                        <div class="clear"></div>
                        <div class="wid120  line_height18 ">&nbsp;</div>
                        <div class="flt margin5">
                          
          <input type="button" onclick="javascript:IsSubmit=1;IsSubmitAuto=1;updateFilesValidation();" class="boxbtn onHover"  name="Update" value="Update Profile" />
           <?php echo $this->Form->input('JsLogin.register_val',array('type'=>'hidden','label'=>false ,'div'=>false,'error'=>false,'value'=>'1'));?>
       
                         </div>
                        <div class="flt margin5 padt5"> <a href="javascript:void(0);" class="bluebld" onclick="javascript:$('upProDataDiv').hide();$('success_mess_div').show();">Skip this step</a></div>
                        <div class="clear"></div>
                      </div>
                     </div>
                  </div>
                 </div>
              </div>
               
               <!-- Alt Registration Step 3-->
               <div class="auto" id="success_mess_div" style="<?php echo $disCon;?>">
                <div class="search-grad-mid wid366">
                   <div class="search-grad-left">
                    <div class="search-grad-right">
                       <div class="search-grad-mid-content">
                       <span class="cust_info1"><?php
                        
                       if($HHuserDetailsData['membership_type'] <= 1){
                        
                       echo "Your Basic Membership has been activated.";
					   
					   
					   
                        
						}else{
                       if($HHuserDetailsData['membership_type']==2){
                        echo "Premium Membership-Silver has been activated";        
                       }elseif($HHuserDetailsData['membership_type']==3){
                        echo "Premium Membership-Gold has been activated";         
                       }else{
                        echo "Premium Membership-Platinum has been activated"; 
                       }      
                       
                           
                       }?>
                       
                       
                       </span>
                        <div class="clear"></div>
                        <div class="spacer100"></div>
                        <div class="clear"></div>
                        <div class="flt border_bt_cccc99">
                           <ul id="list-style-dot-square">
                            <li>
                            <?php if($HHuserDetailsData['membership_type'] <= 1){ ?>
                            To Complete the registration, Click on the verification link sent to <?php echo $HHuserDetailsData['emailid']; ?> 
                            <?php }else{?>
                           Your Transaction ID is <?php echo $HHuserDetailsData['transaction_id'];?>.<br\>
                           Please quote this ID in all future communication about this transaction. 
                           <li>Password has been sent to <?php echo $HHuserDetailsData['emailid']; ?></li>
                            <?php }?>
                            </li>
                            <li>As soon as we review your resume, we'll confirm that you can get started.</li>
                          </ul>
                         </div>
                         <?php if($HHuserDetailsData['membership_type'] <= 1){?>
                        <div class="flt border_bt_cccc99">
                           <div class="flt padlr10"><span class="blackbld14" >Premium Membership</span> <br />
                            <br />
                            Use our <strong>Premium Plans</strong> when you want to apply for a more jobs or want assistance with your job search.</div>
                           <div class="mypage-plan-silver"> <strong>Silver Plan</strong> | INR <?php echo $OpPromotionDetails[2]['net_amount'] ?>/-*<br />
                            Get more visibility in employer searches and more applications.
                            <div class="clear"></div>
                            <span class="flt padt9"> <a href="<?php echo ABSOLUTE_URL.'/promotions_views/shopping_cart/1/vas_register/2';?>" class="strong">Buy now &raquo;</a></span> </div>
                           <div class="clear"></div>
                           <div class="mypage-plan-gold"> <strong>Gold Plan</strong> | INR <?php echo $OpPromotionDetails[103]['net_amount'] ?>/-*<br />
                            We source relevant jobs for you and hold monthly review calls.
                            <div class="clear"></div>
                            <span class="flt padt9"> <a href="<?php echo ABSOLUTE_URL.'/promotions_views/shopping_cart/1/vas_register/3';?>" class="strong">Buy now &raquo;</a></span></div>
                           <div class="clear"></div>
                           <div class="mypage-plan-platnium"> <strong>Platinum Plan</strong> | INR <?php echo $OpPromotionDetails[104]['net_amount'] ?>/-*<br />
                            Personalised assistance from a dedicated Search Advisor.
                            <div class="clear"></div>
                            <span class="flt padt9"> <a href="<?php echo ABSOLUTE_URL.'/promotions_views/shopping_cart/1/vas_register/4';?>" class="strong">Buy now &raquo;</a></span></div>
                           
						   <div class="clear"></div>
                           <div class="spacer"></div>
                           <div class="clear"></div>
                           <div class="flt margin_btm11 strong"><a href="javascript:void(0);" onclick="showComp();">Quick Compare &raquo;</a></div>
                         </div>
                       
                        <div class="clear"></div>                        
						<div class="flt margin_btml1 strong"><a href="javascript:void(0);"  onclick="showHideJobIdDiv();">Let Us Call You &raquo;</a></div>			
						
						<div id="email_now1" style="display: none;">
              <div class="email_now_main">
			  
                 <div id="email_now_cross"><a href="javascript:void(0);"><img src="<?php echo $this->Html->url('/img/compare_tab_cross.png');?>" width="38" height="21" alt=""  onclick="showHideJobIdDiv();"/></a>
				 </div>
				 
				 
                <div class="flt">I want more information on HeadHonchos Premium. Please contact me on my Mobile/Email ID.</div>
                <div class="clear"></div>
                <div class="spacer10"></div>
                <div class="clear"></div>
				 <input type="button" value="Submit" name="Submit" id="register_btn" class="boxbtn onHover" onClick="javascript:confirm_details_submit();" />
                    
                    <div id="thank_you_msg" style="display:none">
                    <div class="clear"></div>
                    <div class="spacer5"></div>
                    <div class="clear"></div>
            <strong>Thank You</strong><br/>
            Our team will be in touch shortly.
            </div>
                  <div class="clear"></div>
                  <div id="jobcodeErrorDiv" class="error_msg3"></div>
                  <div id="jobcodeErrorDiv2" class="flt"></div>                  
                </div>
                <div class="clear"></div>
              </div>
			  
                        <?php }?>
                      </div>
                     </div>
                  </div>
                 </div>
              </div>
             </div>