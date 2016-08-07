<div style="width:190px; float:left; margin-left:23px;">
        <div class="recruiter_hotline" style="float: left;">
          <div class="recruiter_topleft"><img src="<?php echo $this->Html->url('/img/hm_loginleft.gif'); ?>" alt="" /> </div>
          <div class="recruiter_topmid">Summary</div>
          <div class="recruiter_topleft"><img src="<?php echo $this->Html->url('/img/hm_loginright.gif'); ?>" alt="" /></div>
          <div class="clear"></div>
          <div class="recruiter_midbg">
            <div class="acountsetting_block">
              <div style="height:12px;">&nbsp;</div>
              <div class="sm_position">Position</div>
              <div class="sm_designation">
                <?php  echo $this->Custom->textwrapp($designation,26, '<br/>'); ?>
              </div>
              <div class="spacer7"></div>
              <div class="sm_position">INDUSTRY</div>
              <div class="sm_designation"><?php echo $this->Custom->textwrapp($industry,26, '<br/>'); ?></div>
              <div class="spacer7"></div>
              <div class="sm_position">FUNCTION</div>
              <div class="sm_designation"><?php echo $this->Custom->textwrapp($function,26, '<br/>'); ?></div>
              <div class="spacer7"></div>
              <?php
                   if(!empty($subfunction)){?>
              <div class="sm_position">SUB-FUNCTION</div>
              <div class="sm_designation"><?php echo $this->Custom->textwrapp($subfunction,26, '<br/>'); ?></div>
              <div class="spacer7"></div>
              <?php }?>
              <div class="sm_midline"><img src="<?php echo $this->Html->url('/img/js_sm_line.jpg'); ?>" alt="" /></div>
              <div class="sm_position">EXPERIENCE</div>
              <div class="sm_designation"><?php echo $exp_temp; ?></div>
              <div class="spacer7"></div>
              <?php
                   if(!empty($postGraduation)){    ?>
              <div class="sm_position">EDUCATION</div>
              <div class="sm_designation">
                <?php
                  $highestEducation  = $postGraduation;
                  if($level2Id > $level1Id){
                        if($level2Id==4 && $level1Id==3){
                            $highestEducation  = $postGraduation;
                        }else{
                            $highestEducation  = $graduation;
                        }
                   }
                   if(!empty($highestEducation)){

                       echo '<div class="summaryDesignation">'.$highestEducation.'</div>';
                       echo '<div class="spacer7_new">&nbsp;</div>';
                   }
               ?>
              </div>
              <div class="spacer7"></div>
              <?php }?>
              <div class="sm_midline"><img src="<?php echo $this->Html->url('/img/js_sm_line.jpg'); ?>" alt="" /></div>
              <div class="sm_position">LOCATION</div>
              <div class="sm_designation">
                <?php if($city_counts >1 ) echo "Multiple Locations"; else echo $this->Custom->textwrapp($locations,23, '<br/>');  ?>
              </div>
              <div class="spacer7"></div>
              <div class="sm_position">POSTED ON</div>
              <div class="sm_designation"><?php echo $postedOn; ?> </div>
              <div class="spacer7"></div>
              <div class="sm_position">VALID TILL</div>
              <div class="sm_designation"><?php echo $expiredOn; ?></div>
              <div class="sm_designation">&nbsp;</div>
            </div>
          </div>
          <div class="recruiter_btmleft"><img src="<?php echo $this->Html->url('/img/recruiter_btmleft.jpg'); ?>" alt="" /></div>
          <div class="recruiter_btmbg"><img src="<?php echo $this->Html->url('/img/recruiter_btmmid.jpg'); ?>" alt="" /></div>
          <div class="recruiter_btmleft"><img src="<?php echo $this->Html->url('/img/recruiter_btmright.jpg'); ?>" alt="" /></div>
        </div>
      </div>