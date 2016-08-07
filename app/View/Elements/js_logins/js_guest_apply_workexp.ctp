<script type="text/javascript" language="javascript">

function showHideUplodeResume()
{
    var typeValue = Form.getInputs('registration_form','radio','data[JsLogin][flag]').find(function(radio) { return radio.checked; }).value;
	if(typeValue==1)
	{
	document.getElementById("uplodeNewResume").style.display = "block";
	}
	else
	{
	document.getElementById("uplodeNewResume").style.display = "none";
	//document.getElementById('resume_message').innerHTML='';
	}
}

function validatefrm()
{
   
    var skipVal = document.getElementById('skipid').value;		
   /* here get radio  button  value  */
	var typeValue = Form.getInputs('registration_form','radio','data[JsLogin][flag]').find(function(radio) { return radio.checked; }).value;
	if(typeValue==1)
	{
	
	if($('resume').value=='')
		  {
		 document.getElementById('resume_message').innerHTML='Please uploade resume';
		 return false ;
		  }
	  else
		{
		 document.getElementById('resume_message').innerHTML='';
		}
	  
	}
   
	  if(skipVal==1){
  
		if($('master_functional_area_id').value=='')
		{
		 document.getElementById('functional_area_message').innerHTML='Please select your current functional';
		 return false;
		}
		else
		{
		 document.getElementById('functional_area_message').innerHTML='';
		}
		
		if($('master_industry_id').value=='')
		{
		 document.getElementById('industry_message').innerHTML='Please select your current industry';
		 return false;
		}
		else
		{
		 document.getElementById('industry_message').innerHTML='';
		}
		
		if($('master_year_id').value=='')
		{
		 document.getElementById('master_year_id_div_img_msg').innerHTML='Please select your current experience';
		 return false;
		}
		else
		{
		 document.getElementById('master_year_id_div_img_msg').innerHTML='';
		}
	}
}

function showOrHide() 
    {
        var div = document.getElementById("showOrHideDiv");
		var skipdiv = document.getElementById("skiphide");
        if (div.style.display == "block") 
        {
            div.style.display = "none";
			skipdiv.innerHTML ='Show Informatiom';
			document.getElementById("skipid").value=2;
        }
        else 
        {
            div.style.display = "block";
			skipdiv.innerHTML ='Skip Infromation';
			document.getElementById("skipid").value=1;
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
	return true;
	} 
	else
	{
	alert("Upload doc or pdf file only");
	document.getElementById('resume').value='';
	fup.focus();
	return false;
	}
}

</script>




<div class="form-container wid455">
  <?php
     echo $this->Form->create('JsLogin',array('name'=>'registration_form','url' =>ABSOLUTE_URL.'/js_logins/jobs_apply_again/'.$loginid.'/'.$jobsid,'id'=>'registration_form','method'=>'post','autocomplete'=>'on','onsubmit'=>'return validatefrm();','enctype'=>'multipart/form-data'));
        ?>
		
		<div class="auto" id='master_industry_id_div'>
          <div class="reg_firstname line_height18 ">Resume </div>
          <div class="reg_nm_rightarea">
            <div class="regi_funtion_input1"><input type="radio" checked="checked" id="resumeold" name="data[JsLogin][flag]" onclick="return showHideUplodeResume();" value="0">
                <a href="<?php echo ABSOLUTE_URL."/download_resumes/downloadResume/".$resumeIdEnc; ?>">
                    <?php echo $resumeName ;?>
                </a>
			<br /><br />
			<input type="radio" id="resumenew" name="data[JsLogin][flag]" value="1" onclick="return showHideUplodeResume();">Upolde new resume 
		    <br />
			<div id='uplodeNewResume' style="display:none">
			<?php echo $this->Form->input('JsLogin.resume', array('type'=>'file','id'=>'resume','onchange'=>'return Checkfiles();','style'=>'width:185px;','label'=>false ,'div'=>false,'class'=> 'input')); ?>
			</div>
             </div>
            <span class="bluebld line_height18" style="display:none;"><a href="javascript:void(0);" onClick="handle_others('industry');" class="refresh">Other</a> &raquo;</span>
            <div class="auto" id='span_show_industry' style="display:<?php if(empty($this->data['JsProfile']['other_industry'])) echo "none";?>" >
			</div>
              <div class="clear"><span id="resume_message"></span></div>
              <div class="spacer7"></div>
              <div class="clear"></div>
             <?php if(!empty($resumeuplodeError)){ ?>
	     <div class="error_msg" id="update_resume_div_img_msg" >
        <span class="error_msg_detail line_height18" id="resume_error"> <?php echo $resumeuplodeError ;?> </span> </div>
	 
	  <?php } ?>
            </div>
          </div>
 
<a href="javascript:showOrHide();" id="skiphide">Skip Infromation </a>
<div id="showOrHideDiv" style="display:block">
    <?php //==================================current function ==========================================================?>
        <div class="clear"></div>
        <div class="spacer100"></div>
        <div class="clear"></div>
        <div class="auto" id="master_functional_area_id_div">
          <div class="reg_firstname line_height18 ">Functional Area</div>
          <div class="reg_nm_rightarea">
            <div class="regi_funtion_input1">
              <?php 
                                   echo $this->Form->input('JsProfile.master_functional_area_id',array('type'=>'select','empty'=>'-Functional Area-','label'=>false ,'div'=>false,'style'=>"width:121px;",'class'=>'input','style'=>"width:212px;",'id'=>'master_functional_area_id','options'=>$PloginRegister['MasterFunctionalArea'],'error'=>false,'value'=>$master_functional_area_id,'onchange'=>"handleFA();" )); 
                                //    echo $this->Form->input('JsProfile.auto_functional_area',array('type'=>'select','empty'=>'Functional-Area','id'=>'auto_functional_area','maxlength' =>'100','class'=>'input','style'=>"width:206px;",'div'=>false,'label'=>false));
                               //     echo $this->Form->input('JsProfile.master_functional_area_id',array('type'=>'hidden','id'=>'master_functional_area_id','error'=>false ));
                                     echo $this->Form->input('JsLogin.is_submitted',array('type'=>'hidden','value'=>0,'id'=>'is_submitted'));
                                    ?>
            </div>
            <span class="bluebld line_height18" style="display:none;"> <a href="javascript:void(0);" onClick="handle_others('functional_area');" class="refresh">Other</a> &raquo; </span>
            <div class="auto"> </div>
            <div class="clear"></div>
            <div class="spacer7"></div>
            <div class="clear"></div>
            <div class="auto" id='span_show_functional_area' style="display:<?php if(empty($this->data['JsProfile']['other_functional_area'])) echo "none";?>" > <?php echo $this->Form->input('JsProfile.other_functional_area',array( 'label'=>false ,'type'=>'text','div'=>false,'maxlength' => '100','style'=>"width:206px;",'class'=>'input','id'=>'other_functional_area','error'=>false )); ?> </div>
          </div>
          <div class="clear"></div>
        <div class=" password_txt" id="master_functional_area_id_div_img_msg" style="display:block; padding-left:156px">
          <span id="functional_area_message"></span> </div>
          </div>
        <!--Added By : Avesh-->
        <div class="clear"></div>
        <div id="alert_functional_area" style="display:none;"> <span class="information_msg pad154">
          No matches found. Please click on Other.
          </span> </div>
        <div class="clear"></div>
        <!--Added By : ends here-->
        <div class="clear"></div>
        <div class="spacer100"></div>
        <div class="clear"></div>
        <?php //=================================================Current industry================================================================?>
        <div class="auto" id='master_industry_id_div'>
          <div class="reg_firstname line_height18 ">Current industry </div>
          <div class="reg_nm_rightarea">
            <div class="regi_funtion_input1">
              <?php 
             echo $this->Form->input('JsProfile.master_industry_id',array('type'=>'select','empty'=>'-Industry-','label'=>false ,'div'=>false,'style'=>"width:121px;",'class'=>'input','style'=>"width:212px;",'id'=>'master_industry_id','options'=>$PloginRegister['MasterIndustry'],'error'=>false,'onchange'=>'handleIR();','value'=>$master_industry_id )); 
                              //      echo $this->Form->input('JsProfile.auto_industry',array('type'=>'text','id'=>'auto_industry','style'=>'width:206px','maxlength' =>'100','class'=>'input','div'=>false,'label'=>false));
                               //     echo $this->Form->input('JsProfile.master_industry_id',array('type'=>'hidden','id'=>'master_industry_id','error'=>false ));  
                                    ?>
            </div>
            <span class="bluebld line_height18" style="display:none;"><a href="javascript:void(0);" onClick="handle_others('industry');" class="refresh">Other</a> &raquo;</span>
            <div class="auto" id='span_show_industry' style="display:<?php if(empty($this->data['JsProfile']['other_industry'])) echo "none";?>" >
              <div class="clear"></div>
              <div class="spacer7"></div>
              <div class="clear"></div>
              <?php 

                                    echo $this->Form->input('JsProfile.other_industry',array( 'label'=>false ,'type'=>'text','div'=>false,'maxlength' => '100','style'=>"width:206px;",'class'=>'input','id'=>'other_industry','error'=>false ));

                                    ?>
            </div>
          </div>
          <div class="clear"></div>
        <div class=" password_txt" id="master_industry_id_div_img_msg" style="display:block; padding-left:156px" >
          <span id="industry_message"></span> </div>
          <div class="spacer7"></div>
        </div>
        <!--Added By : Avesh-->
        <div class="clear"></div>
        <div id="alert_industry" style="display:none;"> <span class="information_msg pad154">
          No matches found. Please click on Other.
          </span> </div>
        <div class="clear"></div>
        <!--Added By : ends here-->
        <div class="clear"></div>
        <div class="spacer100"></div>
        <div class="clear"></div>
        <?php //==============================================Experience ========================================================?>
        <div class="auto" id="master_year_id_div" >
          <div class="reg_firstname line_height18 ">Experience</div>
          <div class="reg_nm_rightarea">
            <div class="regist_input">
              <?php 

                    echo $this->Form->input('JsProfile.master_year_id',array('type'=>'select','empty'=>'-Years-','id'=>'master_year_id','style'=>"width:147px;",'class'=> 'input','options'=>$PloginRegister['MasterYear'], 'label'=>false ,'div'=>false,'error'=>false,'value'=>$work_experience_max)); 

                ?>
            </div>
          </div>
          <div class="clear"></div>
           <div id="master_year_id_div_img_msg" style="display:block; padding-left:156px"></div>
          
          <div class="spacer7"></div>
          
        </div>
		 <div class="clear"></div>
        <div class="spacer100"></div>
        <div class="clear"></div>
          <div class="clear"></div>
        <div class=" error_msg_detail" id="master_industry_id_div_img_msg" style="display:none" >
          <span id="industry_message" > Please select the industry in which you are currently employed. </span> </div>
          <div class="spacer7"></div>
        </div>
		
		</div>
        <div class="clear"></div>
        <div class="spacer100"></div>
        <div class="clear"></div>
		
		
     <?php 
	  echo $this->Form->input('skipid',array('id'=>'skipid','type'=>'hidden','value'=>1)); 
	 echo $this->Form->input('Jobsid',array('id'=>'Jobsid','type'=>'hidden','value'=>$jobsid)); 
	 echo $this->Form->input('jsloginid',array('id'=>'jsloginid','type'=>'hidden','value'=>$loginid)); 
	 echo $this->Form->submit('submit');?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<!-- <input type="button" onclick="return skipInfromation('<?php echo $jobId ; ?>');" name="Skip" value="Skip" />-->
	 <?php echo $this->Form->end(); ?>
</div>