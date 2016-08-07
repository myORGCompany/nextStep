<?php     foreach($jobData['data'] as $key => $value){
 ?>
<?php   
	$salt = Configure::read('Security.salt');
	App::import('component','Utility');
	$utility =  new UtilityComponent;
	//$job_id = $utility->_encrypt($value['ClJobPosting']['id'].$salt, $salt);
	
	$job_id = $value['ClJobPosting']['id'];
		
//                                        $job_id = $utility->_encryptJobID($value['ClJobPosting']['id']);
           if(isset($is_scroller) && $is_scroller == 1){
               $args="/logo";
           }else{
               $args="/1";
           }
           ?>

<div class="single-result">
<?php if($value['ClJobPosting']['service']!='')
	  {
?>
  <div class="topheading-priority">
 <?php } else { ?>
 <div class="topheading line_height18">
 <?php } ?> 
  <!-- <a href="<?php //echo ABSOLUTE_URL."/searchs/job_detail_before_login/".$job_id.$args; ?>"  target="_blank" style="cursor:pointer" class="bluelinkbld">-->
    <?php
                 $prime_replacement = array(' ');
                    $replecement_str = array('/','_','&','-');
                                      $temVar = $value['ClJobPosting']['designation_name']." ".$value['ClJobPosting']['function_name']." ".$value['ClJobPosting']['industry_name']." ".$value['ClJobPosting']['job_location']." ".$job_id;
                                      $temVar =strtolower(str_replace(" ","-",preg_replace('/ +/', ' ', str_replace($replecement_str," ",$temVar))));
                    
					  $t1= trim(strip_tags($value['ClJobPosting']['job_title']));
                    $display_link = $t1; 
                  /*  echo "<h2>"; echo $this->Html->link($display_link, array(
					 'controller' => 'searchs',
					 'action' => 'job_detail_before_login',
					 'designation'=>str_replace($replecement_str, "-",str_replace($prime_replacement,"-",$value['ClJobPosting']['designation_name'])),
					'function'=>str_replace($replecement_str, "-",str_replace($prime_replacement,"",$value['ClJobPosting']['function_name'])),
					'industry' =>str_replace($replecement_str, "-", str_replace($prime_replacement,"",$value['ClJobPosting']['industry_name'])),
					'location'=>str_replace($replecement_str, "-",str_replace($prime_replacement,"", $value['ClJobPosting']['job_location'])),
					'id'=> $job_id,
					'fromid'=>1,
					'ext' => 'html'),array(
					'target'=>'_blank',	
				    'style'=>'cursor:pointer',
				    'class'=>'bluelinkbld'));
					echo "</h2>";             */


                     echo "<h2>"; echo $this->Html->link($display_link, array(
					 'controller' =>  'jobs/'.$temVar,
					// 'action' => 'job_detail_before_login',
					// 'designation'=>str_replace($replecement_str, "-",str_replace($prime_replacement,"-",$value['ClJobPosting']['designation_name'])),
					//'function'=>str_replace($replecement_str, "-",str_replace($prime_replacement,"",$value['ClJobPosting']['function_name'])),
					//'industry' =>str_replace($replecement_str, "-", str_replace($prime_replacement,"",$value['ClJobPosting']['industry_name'])),
					//'location'=>str_replace($replecement_str, "-",str_replace($prime_replacement,"", $value['ClJobPosting']['job_location'])),
					//'id'=> $job_id,
					//'fromid'=>1,
					'ext' => 'html'),array(
					'target'=>'_blank',
				    'style'=>'cursor:pointer',
				    'class'=>'bluelinkbld'));
					echo "</h2>";



				 /*   $replecement_str=array('/','-','&',' ');
					  $t1= trim(strip_tags($value['ClJobPosting']['job_title']));
                      $display_link= $t1;       
					echo "<h2>";  echo $this->Html->link($display_link, array(
					 'controller' => 'searchs',
					 'action' => 'job_detail_before_login',
					 'designation'=>str_replace($replecement_str,"_",$value['ClJobPosting']['designation_name']),
					'function'=>str_replace($replecement_str,"_",$value['ClJobPosting']['function_name']),
					'industry' => str_replace($replecement_str,"_",$value['ClJobPosting']['industry_name']),
					'location'=>str_replace($replecement_str,"_", $value['ClJobPosting']['job_location']),
					'id'=> $job_id,
					'fromid'=>1,
					'ext' => 'html'),array(
					'target'=>'_blank',	
				    'style'=>'cursor:pointer',
				    'class'=>'bluelinkbld'));	echo "</h2>";
					*/ 
             ?>
   <!-- </a>--> </div>
  <div class="clear"></div>
  <div class="spacer10"></div>
  <div class="clear"></div>
  <div class="flt">
    <?php
			    /* $cities    =   $value['ClJobPosting']['job_location'];
			     $citiesIds  =   explode(',',$cities);
				 if(count($citiesIds) ==1) {
                     if($area == 'function') {echo $jobData['cityList'][$citiesIds[0]];}
                     else if($area == 'industry') {echo $value['ClJobPosting']['job_location'];}
                     else{
                         if(!empty($jobData['cityList'][$citiesIds[0]])){
                            echo $jobData['cityList'][$citiesIds[0]];
                         }elseif(!empty($value['ClJobPosting']['job_location'])){
                           echo $value['ClJobPosting']['job_location'];
                         }

                     }
                 }*/
				  echo $value['ClJobPosting']['job_location'];
			 ?>
  </div>
  <div class="clear"></div>
  <div class="spacer10"></div>
  <div class="clear"></div>
  <div class="line_height18 rightInfoWrap">
    <?php
                        $t3= trim(strip_tags($value['ClJobPosting']['job_description']));
                        $t3=trim(substr($t3,0,220));
                        echo $t3."...";
                        ?>
  </div>
  <div class="clear"></div>
  <div class="spacer10"></div>
  <div class="clear"></div>

  <div class="flt"><a href="<?php echo ABSOLUTE_URL.'/js_logins/login/job_detail/job_detail/'.$job_id;?>" class="bluelinkbld">Login &amp; Apply</a> &nbsp;&nbsp; <a href="<?php echo ABSOLUTE_URL.'/jobsapply/'.$temVar.".html";?>" class="bluelinkbld">Quick Application</a></div>
  
  
  <!-- @ankit: Links added -->
  <?php echo $this->element('searchs/search_links',array('url'=>'/jobsregister','search_page'=>'home_page','title'=>$value['ClJobPosting']['job_title'],'cl_login_id'=>$value['ClJobPosting']['cl_login_id'],'company_type'=>$value['ClJobPosting']['company_type'],'min_exp'=>$value['ClJobPosting']['work_experience_min'],'max_exp'=>$value['ClJobPosting']['work_experience_max'],'industry'=>$value['ClJobPosting']['industry_name'],'function'=>$value['ClJobPosting']['function_name'],'designation'=>$value['ClJobPosting']['designation_name'],'job_id'=>$job_id,'mask_company_name'=>$value['ClJobPosting']['mask_company_name'])); ?>
  <!-- @ankit: End -->
  
</div>
<?php } ?>
<div class="paging_area"> <?php echo $this->element('searchs/search_pagination',array('per_page'=>6,'start'=>$start,'num'=>$count,'items'=>$solr_a,'search'=>'register'
                               )); ?>
  <div class="paging_nextarrow">&nbsp;</div>
</div>
