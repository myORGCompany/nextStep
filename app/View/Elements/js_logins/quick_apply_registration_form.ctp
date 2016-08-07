<script type="text/javascript" language="javascript">

    function checkeMailId(jobId){
        //alert(jobId);
        var eamilValue=$('emailid').value;
        
        if(eamilValue !=''){
            
            new Ajax.Request(ABSOLUTE_URL+'/js_logins/unique_guest_ajax_validation/'+eamilValue+'/'+jobId, {
                onSuccess: function(transport){  
                    if(transport.responseText==0 && transport.responseText!=''){
                        
                        
                        showhideyes(1);
                        document.getElementById('user_nameE').value = document.getElementById('emailid').value;
                        document.getElementById('emailid').value='';
                        document.getElementById('confirm_emailid').value='';
                        document.getElementById('first_name').value='';
                        document.getElementById('last_name').value='';
                        document.getElementById('master_lakh_id').value='';
                        document.getElementById('resume').value='';									
                        document.getElementById('msgcontainer1').style.display="block" 
                        document.getElementById('message_area2').innerHTML ='You have already registered with this email-id. Please login & apply';
                    } else {
                        
                        var swapdata=transport.responseText;
                                                                                               
                        var arrData=swapdata.split("@@");
                        var response ='';
                        if(arrData[1]==1){												
                            var guestData = arrData[0]+ "," +arrData[3]; 
                            response = arrData[2] +'<a href="javascript:void(0)" onclick="return mailGuestUser('+guestData+');">Click Here </a> to confirm you are right user';
                        } else if(arrData[1]==2){
                            
                            response = arrData[2];
                            
                        } else if(arrData[1]==3){
                            
                            response ='You are already registered with Head Honchos, please'+'<a  href="'+ABSOLUTE_URL+'/js_logins/login/job_detail/job_detail/'+arrData[4]+'"> Login to apply</a> | '+'<a  href="'+ABSOLUTE_URL+'/forgot-password.html">Forgot Password</a>' ;	
                        
                        } else if(arrData[1]==4){
                            
                            response ='You are already registered with Head Honchos, '+'<a href="javascript:void(0)" onclick="return mailGuestUserForReg('+arrData[1]+');">click confirmation mail</a>';
                            
                        }
                        if(response == ''){
                            var domains = new Array();
                            var topLevelDomains = new Array();
<?php
for ($i = 0; $i < count($email_domain); $i++) {
    ?>    
                                domains[<?php echo $i ?>] = '<?php echo $email_domain[$i]; ?>';
<?php } ?>
<?php
for ($j = 0; $j < count($top_level_domain); $j++) {
    ?>    
                                topLevelDomains[<?php echo $j ?>] = '<?php echo $top_level_domain[$j] ?>';
<?php } ?>   
                            $jq('#emailid').mailcheck({
                                domains: domains,
                                topLevelDomains: topLevelDomains,  
                                suggested: function(element, suggestion) {
                                    var code = "<script>$jq('#copyemail').click(function(){$jq('#emailid').val($jq('#copyemail').text());$jq('#emailid_ajax_div').html(''); checkeMailId("+jobId+")})"+"</scr"+"ipt>";
                                    
                                    response = "<div class='flt word_wrap_text'>"+"Did you mean:&nbsp;<a id='copyemail' href='#' class='word_wrap_text' >" + suggestion.full + "</a>"+code+"</div>";
          
                                },
                                empty: function(element) {
    
                                    response = '';
    
                                }
                            });
                        }
                        //alert(response);
                        //document.getElementById('emailid_ajax_div').innerHTML='<span class="information_msg">'+response+'<span>';
                        $jq('#emailid_ajax_div').html('<span class="information_msg">'+response+'<span>');
                    }
                },
                                                    
                onFailure: function(){ alert('Something went wrong...') }
            });
        }
  
    }
    
    
    /* Here checking upload file extenion  */
function Checkfiles()
{
	var fup = document.getElementById('resume');
	var fileName = fup.value;
	var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
	if(ext == "doc" || ext == "docx" || ext == "pdf" || ext == "DOC" || ext == "DOCX" || ext == "PDF" )
	{
            jQuery("#update_resume_div_img_msg").hide();
            jQuery("#resume_error",jQuery("#update_resume_div_img_msg")).html("");
            return true;
	} 
	else
	{
            //alert("Upload doc or pdf file only"); resume_error
            jQuery("#update_resume_div_img_msg").show();
            jQuery("#resume_error",jQuery("#update_resume_div_img_msg")).html("Upload .doc, .docx or pdf file only");
        
            document.getElementById('resume').value='';
            fup.focus();
            return false;
	}
}


</script>






<?php
echo $this->Form->create('JsLogin', array('url' => ABSOLUTE_URL . '/js_logins/quickApply/' . $slug, 'id' => 'registration_form', 'method' => 'post', 'autocomplete' => 'off', 'onsubmit' => 'return true;', 'enctype' => 'multipart/form-data'));
echo $this->Form->input('JsLogin.is_submitted', array('type' => 'hidden', 'id' => 'is_submitted', 'value' => '0', 'error' => false));
echo $this->Form->input('JsLogin.password', array('type' => 'hidden', 'id' => 'password', 'value' => md5(rand(5)), 'error' => false));
?>

<?php   $error_msg = $this->Form->error('JsLogin.emailid');
                       
                        if(!empty($error_msg)){

                        $css_formfield_em="error_formfield1";

                        $m_email = $error_msg;

                        $visibility_em="none";

                        } else {

                        $visibility_em="none";

                        $css_formfield_em="auto";
                        }
                        ?>

<div class="bg_FFFFFF border-radius5LRB registrationForm" style="display: ;" id="registration_box">
    <div class="pad15 padt20">

        <div class="clear"></div>
        <div class="flt padt10a arial_11px"><span class="color990000">*</span>All fields are compulsory</div>
        <div class="clear "></div>
        <div class="search_LP_NEW_input_box wid350">



            <?php
            $options = array('onblur' => "return checkeMailId($jobId);javascript:if(this.value==''){this.value='E-mail ID';this.style.color='#9C9B9A'};regTracks(this.id);",'placeholder'=>'Email', 'title'=>'Email','onCopy' => 'return false', 'onDrag' => 'return false', 'onDrop' => 'return false', 'label' => false, 'div' => false, 'maxlength' => '80', 'style' => "width:340px; color:#333333; font:bold 11px/18px Arial, Helvetica, sans-serif; ", 'class' => 'input', 'id' => 'emailid', 'error' => false,  'onfocus' => "javascript:if(this.value=='E-mail ID'){this.value='';this.style.color='#000'}");
            if (isset($PloginRegister['emailid'])) {
                $options['value'] = $PloginRegister['emailid'];
            } else {
                $options['value'] = "E-mail ID";
            }

            echo $this->Form->input('JsLogin.emailid', $options);
            ?>
            <div id="emailid_ajax_div">
            <?php
            //echo $ajax->div('emailid_ajax_div');

            if ($setFlag) {
                ?> <span class="information_msg"> <?php
            if ($isGuest == 0) {
                    ?>
                    <?php
                } else if ($isGuest == 1) {
                    $guestData = "'" . $setFlag . "','" . $jobsid . "'";
                    echo $response . '&nbsp;<a href="javascript:void(0)" onclick="return mailGuestUser(' . $guestData . ');">Click Here </a> to confirm you are right  user ';
                } else if ($isGuest == 2) {
                    echo $response;
                } else if ($isGuest == 3) {
                    echo 'You are already registered with Head Honchos, please' . '<a  href="' . ABSOLUTE_URL . '/js_logins/login/job_detail/job_detail/' . $jobsid . '">     Login to apply</a> | ' . '<a  href="' . ABSOLUTE_URL . '/forgot-password.html">Forgot Password</a>';
                } else if ($isGuest == 4) {
                    $guestData = "'" . $setFlag . "'";
                    echo 'You are already registered with Head Honchos, ' . '<a href="javascript:void(0)" onclick="return mailGuestUserForReg(' . $guestData . ');">click confirmation mail</a>';
                }
                echo $this->Form->input('email_id_flag', array('type' => 'hidden', 'value' => 1, 'id' => 'email_id_flag'));
                ?> </span>
            <?php } else if ($m_email) { ?>
                <span class="information_msg"> <?php echo $m_email; ?> </span>
                <?php
            } else {
                echo $this->Form->input('email_id_flag', array('type' => 'hidden', 'value' => 0, 'id' => 'email_id_flag'));
            }
            ?>
            <?php //echo $ajax->divEnd('emailid_ajax_div'); ?>
            </div>

        </div>
        <div class="error_msg" id="emailid_div_img_msg" style="display:<?php echo $visibility_em; ?>">
      <span class="error_msg_detail">Please enter a valid Email ID.</span> </div>
        
        <div class="clear "></div>
        <div class="search_LP_NEW_input_box wid350">


            <?php
            $confirmEmailOptions = array('onCopy' => 'return false','placeholder'=>'Confirm Email ID', 'title'=>'Confirm Email ID','onDrag' => 'return false', 'onDrop' => 'return false', 'onPaste' => 'return false', 'label' => false, 'div' => false,'autocomplete'=>'off', 'value' => "Confirm Email ID", 'maxlength' => '80', 'style' => "width:340px;color:#333333; font:bold 11px/18px Arial, Helvetica, sans-serif; ", 'class' => 'input', 'id' => 'confirm_emailid', 'error' => false, 'onfocus' => "javascript:if(this.value=='Confirm Email ID'){this.value='';this.style.color='#000'}", 'onblur' => "javascript:if(this.value==''){this.value='Confirm Email ID';this.style.color='#9C9B9A'};");
            if (isset($PloginRegister['emailid'])) {
                $confirmEmailOptions['value'] = $PloginRegister['emailid'];
            }

            echo $this->Form->input('JsLogin.confirm_emailid', $confirmEmailOptions);
            ?>
        </div>
        <div class="error_msg" id="confirm_emailid_div_img_msg" style="display:<?php echo $visibility_em; ?>">
      <span class="error_msg_detail">Please enter a valid Email ID.</span> </div>
        <div class="clear"></div>
        <?php
        echo $error_msg1 = $this->Form->error('JsLogin.first_name');

        $error_msg2 = $this->Form->error('JsLogin.last_name');

        $error_msg = $error_msg1 . $error_msg2;

        if (!empty($error_msg)) {

            $css_formfield_n = "error_formfield1";

            $visibility_n = "block";
        } else {
            $visibility_n = "none";

            $css_formfield_n = "auto";
        }
        ?>
        <div class="search_LP_NEW_input_box">
            <div class="flt wid173">

                <?php
                $cf = 'color:#9C9B9A';
                $fn = 'First Name';
                if (isset($this->data['JsLogin']['first_name'])) {
                    $fn = $this->data['JsLogin']['first_name'];
                    $cf = 'color:#000';
                }
                echo $this->Form->text('JsLogin.first_name', array('label' => false,'placeholder'=>'First Name', 'title'=>'First Name','div' => false, 'maxlength' => '40', 'class' => 'input', 'style' => "width:160px; color:#333333; font:bold 11px/18px Arial, Helvetica, sans-serif;$cf", 'value' => $fn, 'id' => 'first_name', 'error' => false, 'onFocus' => 'javascript:if(this.value=="First Name"){this.value="";this.style.color="#000"}', 'onBlur' => 'javascript:if(this.value==""){this.value="First Name";this.style.color="#9C9B9A"}'));
                ?>
            </div>


            <div class="flt wid173 pad7">




                <?php
                $cl = 'color:#9C9B9A';
                $ln = 'Last Name';
                if (isset($this->data['JsLogin']['last_name'])) {
                    $ln = $this->data['JsLogin']['last_name'];
                    $cl = 'color:#000';
                }
                echo $this->Form->text('JsLogin.last_name', array('label' => false,'placeholder'=>'Last Name', 'title'=>'Last Name','div' => false, 'maxlength' => '40', 'class' => 'input', 'style' => "width:160px; color:#333333; font:bold 11px/18px Arial, Helvetica, sans-serif;$cl", 'value' => $ln, 'id' => 'last_name', 'error' => false, 'onFocus' => 'javascript:if(this.value=="Last Name"){this.value="";this.style.color="#000";this.select()}', 'onBlur' => 'javascript:if(this.value==""){this.value="Last Name";this.style.color="#9C9B9A"}'));
                ?>
            </div>
            <div class="clear"></div>
            <div style="display:none" id="first_name_msg" class="error_msg_detail line_height18 margintop6"> </div>
            <div class="error_msg" id="first_name_div_img_msg" style="display:<?php echo $visibility_n; ?>">
            <span id="first_name_msg" class="error_msg_detail">Please enter your complete name</span> </div>
        </div>
        <div class="clear "></div>
        <div id="lock_help2" style="display:none;" class="helpIcon_popUp">
            <div class="information_pup_alt">
                <div class="information_pup_topbg">&nbsp;</div>
                <div class="information_pup_mid">
                    <div class="auto">HeadHonchos is a platform for executives earning a CTC above INR 10Lakh. If you are not yet in this bracket, we will bring more value at a later stage of your career.</div>
                </div>
                <div class="information_pup_btm">&nbsp;</div>
            </div>
        </div>
        <div class="search_LP_NEW_input_box">
            <div class="flt wid140">
                <?php
                
                unset($PloginRegister['MasterLakh'][1]);
                unset($PloginRegister['MasterLakh'][4]);
                unset($PloginRegister['MasterLakh'][7]);
                
              
                echo $this->Form->input('JsProfile.master_lakh_id', array('type' => 'select','title'=>'Salary in Lakhs', 'empty' => 'Salary in INR', 'id' => 'master_lakh_id', 'onblur' => 'showLimitedAccessPopup(this);', 'style' => "width:140px;height:25px; color:#333333; font:bold 11px/18px Arial, Helvetica, sans-serif;", 'class' => 'input', 'options' => $PloginRegister['MasterLakh'], 'label' => false, 'div' => false, 'error' => false));
                ?>
                <?php
//                echo "<pre>";
//                print_r($PloginRegister['MasterLakh']);
//                echo "</pre>";
                ?>

            </div>
            <div class="flt margintop5 padlr5 ">
                <img alt="" style="cursor: pointer;"  src="<?php echo $this->Html->url('/img/help-icon.png');?>" class="salaryHelpIcon"  />
            </div>
            <div class="frt font10 margintop5 line_height15">
                <a href="#" style="cursor: auto;" >What if I earn less than 10 Lakh?</a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear "></div>
        
        <div class="error_msg" id="master_lakh_id_div_img_msg" style="display:none" >
      <span class="error_msg_detail"> Please enter your current or last drawn salary.</span> </div>
    <div class="clear"></div>
        <div class="search_LP_NEW_input_box">
            <div class="pad_top3">

                <?php echo $this->Form->input('JsLogin.resume', array('type' => 'file','title'=>'Upload Resume', 'id' => 'resume', 'style' => "width:185px; color:#333333; font:bold 11px/18px Arial, Helvetica, sans-serif; ", 'onchange' => 'return Checkfiles();', 'label' => false, 'div' => false, 'class' => 'input', 'size' => "34")); ?>
            </div>
            <div class="clear"></div>
            <div class="password_txt2 padt5 margin_btm11">Supports .doc, .docx, .pdf files; upto 500 KB.</div>

            <div class="spacer100"></div>
            <div class="clear"></div>

            <div class="padtl120" id="checkbox_id_div" style="display:none;">
                <div class="reg_memb_radio"> <?php echo $this->Form->input('JsLogin.profile_status', array('id' => 'update_resume', 'type' => 'checkbox', 'default' => '', 'label' => false, 'div' => false, 'onclick' => 'if(!$("resume").value) $("update_resume").checked=false;$("resume_error").hide()')); ?> </div>
                <div class="line_height18">Update my profile based on this resume. </div>
                <div class="clear"></div>
                <div class="spacer7"></div>
            </div>
            <div class="clear"></div>
            <?php if (!empty($resumeuplodeError)) { ?>
                <div class="error_msg" id="update_resume_div_img_msg" >
                    <span class="error_msg_detail line_height18" id="resume_error"> <?php echo $resumeuplodeError; ?> </span> </div>	 
            <?php } ?>
            <?php
            $resumeErrorDiv = "display:none;";
            if ($resumeError != 1) {
                $resumeErrorDiv = "display:block;";
            }
            ?>
            <div class="error_msg" id="update_resume_div_img_msg" style="<?php echo $resumeErrorDiv; ?>;">
                <span class="error_msg_detail line_height18" id="resume_error"> <?php echo $resumeError; ?> </span> 
            </div>
            



        </div>
        <div class="clear"></div>
        <div class="flt greybdrtp padt10a" >
            <?php
            $error_msg = $this->Form->error('JsLogin.recapcha');

            if (!empty($error_msg)) {

                $css_formfield = "formfield_error wid400";

                $visibility = "block";
            } else {

                $visibility = "none";

                $css_formfield = "auto";
            }
            ?>
            <div id="recaptcha_container" class="<?php
            if ($css_formfield != "auto") {
                echo $css_formfield;
            };
            ?> flt" style="border:thick;" >
                <!--            <div  class="flt" id="recaptcha_container">-->
                <div class="wid297 arial_12px"><strong>Please complete this security validation.</strong></div>
                <div class="clear"></div>
                <div class="spacer5"></div>
                <div class="clear"></div>
                <div class="label_right">
                    <div class="wid297">
                        <?php
                        $img1 = $ramdomRecapcha['first_number'] . ".gif";
                        $img2 = $ramdomRecapcha['second_number'] . ".gif";
                        $img3 = $ramdomRecapcha['img_sign'] . ".gif";
                        ?>
                        <div class="wid50"> <img src="<?php echo $this->Html->url('/img/' . $img1); ?>" alt="" /> </div>
                        <div class="wid50"> <img src="<?php echo $this->Html->url('/img/' . $img3); ?>" alt="" /> </div>
                        <div class="wid50"> <img src="<?php echo $this->Html->url('/img/' . $img2); ?>" alt="" /> </div>
                        <div class="wid50"> <img src="<?php echo $this->Html->url('/img/equal.gif'); ?>" alt="" /> </div>
                        <div style="margin-top:5px;" class="auto">
                            <?php
                            $crc = 'color:#000000';
                            $cfn = '';
                            if (isset($this->data['JsLogin']['recapcha'])) {
                                $cfn = $this->data['JsLogin']['recapcha'];
                                $crc = 'color:#000000';
                            }
                            ?>
                            <input name="data[JsLogin][recapcha]" id="recapcha" type="text" class="input" value="" style="width:60px;<?php echo $crc; ?>;height:35px;font-size:24px;"  onBlur="javascript:recaptcha_validation('alt');"/>

                            <input type="hidden" id="recaptchav" />
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div style="display:<?php echo $visibility; ?> ; " id="recap_error" class="error_msg_detail line_height18 margintop6">Please enter the correct solution. </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="spacer10"></div>
        <div class="clear"></div>
        <div class="wid100perc" id="checkbox_id_div">
            <div class="flt">
                <input type="checkbox" id="checkbox_id" name="checkbox" />
            </div>
            <div class="line_height18 arial_12px  color_333">I agree &amp; accept HeadHonchos' <a class="refresh" href="<?php echo ABSOLUTE_URL_CRON;?>/JobSeeker/js_logins/terms_of_use" target="_blank">Terms of Use </a> </div>
            <div class="clear"></div>
            <div class="spacer7"></div>
            <div class="clear"></div>
            <div class="error_msg_detail line_height18 margintop6" id="terms_message" style="display:none"> Please accept HeadHonchos' Terms of Use. </div>
        </div>
        <div class="clear"></div>
        <div class="spacer10"></div>
        <div class="clear"></div>
        
        
        <div  id="any_error" style="background: none repeat scroll 0% 0% rgb(255, 255, 204);padding-bottom: 7px;width:370px;display:<?php echo $visibility; ?>;">
          <div class=""   >
            <div id="error_msg_1" class="error_msg_detail" ><?php echo "Please provide information as per the messages above."; ?> </div>
          </div>
        </div>
        
        
    </div>
    <div class="clear"></div>
    <div class="border-radius5LRB  bg_e8e8e8 padtb20 margintop5">
        <div class="flt padt9 pad22"><input type="button" onclick="apply_registration_validation();" class="button2 blue2"  name="Apply" value="Apply" /> </div>
        <div class="clear"></div>
        <div class="spacer10"></div>
        <div class="clear"></div>
    </div>
</div><input type="hidden"  name="data[JsLogin][jobID]" value="<?php echo $jobId; ?>" />
<?php echo $this->Form->end(); ?>