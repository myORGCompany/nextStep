<?php echo $this->element("/HH_EMAIL_ELEMENTS/ops_new_header_email"); ?>

<body style="background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;margin-top:0 !important;margin-bottom:0 !important;margin-right:0 !important;margin-left:0 !important;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;font-family:Arial, sans-serif;font-size:16px;line-height:21px;color:#607D8B;">
    <center class="wrapper" style="width:100%;table-layout:fixed;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;">
        <div class="webkit" style="max-width:602px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;">
           
            <!--[if (gte mso 9)|(IE)]>
            <table width="600" align="center" style="border-spacing:0;font-family:Arial, sans-serif;color:#607D8B;" >
            <tr>
            <td style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
            <![endif]-->
             <?php echo $this->element("/HH_EMAIL_ELEMENTS/ops_app_icon_header"); ?>

            <table class="outer" align="center" style="border-spacing:0;color:#607D8B;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;width:100%;max-width:602px;background-color:#fff;border-left-width:1px;border-left-style:solid;border-left-color:#dddddd;border-right-width:1px;border-right-style:solid;border-right-color:#dddddd;border-top-width:1px;border-top-style:solid;border-top-color:#dddddd;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#dddddd;font-family:Arial, sans-serif;">
                <tr>
                    <td style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;">
                        <tr>
                            <td background="<?php echo ABSOLUTE_URL_CRON;?>/img/header-img.gif" bgcolor="#144186" height="120" valign="top" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;">
                                <!--[if gte mso 9]>
                            <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:600px;height:120px;" >
                            <v:fill type="tile" src="img/mailer-hh.gif" color="#144186" />
                            <v:textbox inset="0,0,0,0">
                            <![endif]-->    
                                <div style="padding-top:20px;text-align:center;width:100%;">

                                    <table style="width:100%;border-spacing:0;font-family:Arial, sans-serif;color:#607D8B;">
                                        <tr>
                                            <td style="height:20px;width:100%; margin:0px; padding:0px;"></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center;width:100%;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;">
                                                <img src="<?php echo ABSOLUTE_URL_CRON;?>/img/hh-logo.png" alt="HeadHonchos" style="border-width:0;" />
                                                <br />
                                                <span align="center" style="border-top-width:1px;border-top-style:solid;border-top-color:#9EB5D7;width:130px;margin-top:13px;display:inline-block;margin-left:-5px; height:13px;    ">&nbsp;</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color:#ffffff;font-weight:500;font-size:17px;padding-bottom:0;padding-right:0;padding-left:0;padding-top:0; text-align:center;">
                                                <?php echo  $message['main_heading'] ?>
                                            </td>
                                        </tr>
                                    </table>
                                    <br />
                                </div>
                                <!--[if gte mso 9]>
                            </v:textbox>
                            </v:rect>
                            <![endif]-->
                            </td>
                        </tr>
                        <!-- Adding a Single Column Layout -->
                        <tr>
                            <td class="one-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;">
                                <table width="100%" style="border-spacing:0;font-family:Arial, sans-serif;color:#607D8B;">
                                    <tr>
                                        <td class="inner contents" style="padding-top:10px;padding-bottom:10px;padding-right:10px;padding-left:10px;width:100%;text-align:left;">
                                            <p class="h1" style="margin-top:0;margin-right:0;margin-left:0;line-height:21px;font-weight:bold;font-size:16px;margin-bottom:10px;">Dear&nbsp;<?php echo $message['js_name'] ?>,</p>
                                            <p style="margin-top:0;margin-right:0;margin-left:0;line-height:28px;font-size:16px;margin-bottom:10px;">
                                                A new job was just posted for you! <br />
                                                <?php echo $message['headingLine']; ?>
                                            </p>
                                        </td>

                                        <?php 
                                            $job = $message['jobs'];
                                            $url = '';
                                            $url = "/jobs/".$job['job_id']."?siteid=premium_mail";
                                            $message['emailid'] = $message['js_email'];
                                            $message['autologin'] = HOME_PAGE_URL;
                                        ?>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <?php if( $message['activate_gold'] == 1) {?>
                        <tr>
                          <td valign="bottom" style="height:3opx">
                            <a href = "<?php echo $message['url'] ?>"> <img  src = "http://offers.headhonchos.com/offer-banner.jpg"  width="100%" height="150px" /></a>
                          </td>
                        </tr>
                        <?php } ?>
                        <!-- Adding a Single Column Layout -->
                        
                        <tr>
                            <td class="inner contents" style="border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#ddd; padding-top:0px;padding-right:10px;padding-left:10px;width:100%;text-align:left;">
                                <table style="width:100%;padding-bottom:20px;border-spacing:0;font-family:Arial, sans-serif;color:#607D8B;">
                                    <!--title-->
                                    <tr>
                                        <td align="left" valign="top" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;">
                                            <strong>
                                            <a href="<?php echo $message['url']; ?>" style="word-break:break-all;line-height:17px;text-decoration:none;color:#2779E2;" ><?php echo $message['job_title'] ?> </a>
                                            </strong>
                                        </td>
                                    </tr>
                                    <!--content-->
                                    <tr>
                                      <td align="left" valign="top" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;"> 
                                      <strong>Industries</strong>: <?php echo $message['industry'] ?> &nbsp; |&nbsp;<?php if(!empty($message['exp'] ))  ?>
                                         <strong>Exp</strong>: <?php echo $message['exp'] ?> yrs &nbsp; |&nbsp;<br/><?php if(!empty($message['job_location'] ))  ?>
                                          <strong>Location</strong>: <?php echo $message['job_location'] ?>&nbsp; |&nbsp;<?php if(!empty($message['salary'] ))  ?>
                                         <strong>Salary</strong>: <?php echo $message['salary'] ?><br/>
                                          <?php if(!empty($message['posted_by'] ))  ?>
                                           <strong>Posted By</strong>: <?php echo $message['posted_by'] ?><br/> 
                                      </td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0; height:15px;"> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top" style="padding-top:0;padding-bottom:10;padding-right:0;padding-left:0;">

                                            <table width="170" height="32" border="0" cellspacing="0" cellpadding="0" bgcolor="#2779E2" style="border-radius:3px; font-family: arial, sans-serif;">
                                                    <tr>
                                                      <td width="170" height="32" align="center" valign="middle" style="border-bottom-color:#2779E2; border-bottom-style: solid; border-bottom-width:2px; border-right-color:#2779E2; border-right-style: solid; border-right-width:2px; border-left-color:#2779E2; border-left-style: solid; border-left-width:2px; border-top-color:#2779E2; border-top-style: solid; border-top-width:2px; border-radius:3px; font-family: arial, sans-serif;">
                                                      <a href="<?php echo $message['url'] ?>" target="_blank" style="font-weight:500; font-size:17px; color:#FFFFFF; text-decoration:none; padding-left:15px;padding-right:15px; line-height:25px; border-radius:3px; font-family: arial, sans-serif;">Apply Now →</a></td>
                                                    </tr>
                                              </table>    
                                        </td>
                                    </tr>
                                    <!--end content-->
                                </table>
                            </td>
                        </tr>
                        
                        <!-- Adding a Single Column Layout -->
                        <tr>
                            <td class="one-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;">
                                <table width="100%" style="border-spacing:0;font-family:Arial, sans-serif;color:#607D8B;">
                                    <tr>
                                        <td class="inner contents" style="padding-top:10px;padding-bottom:10px;padding-right:10px;padding-left:10px;width:100%;text-align:left; border-bottom-width:0px; border-bottom-style:solid; border-bottom-color:#ddd;">
                                            
                                            <p style="margin-top:0;margin-right:0;margin-left:0;line-height:21px;font-size:16px;margin-bottom:10px;">
                                                These Job Alerts come to you as soon as a new job is posted, to give you the advantage of applying early.
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        
                        <tr>
                            <td class="one-column" style="border-top-width:2px;border-top-style:solid;border-top-color:#dddddd;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
                                <table width="100%" style="border-spacing:0;font-family:Arial, sans-serif;color:#607D8B;" >
                                    <tr>
                                        <td class="inner contents" style="padding-top:10px;padding-bottom:10px;padding-right:10px;padding-left:10px;width:100%;text-align:left;" >
                                            <p style="font-size:16px;color:#9EA8AB;margin-top:0;margin-right:0;margin-left:0;line-height:20px;margin-bottom:10px;" >
                                               The HeadHonchos Team<br />
                                               Phone: +91 11 66197000<br /> 
                                               Email: <a href="mailto:helpdesk@headhonchos.com" style="word-break:break-all;color:#2779E2;text-decoration:underline;">helpdesk@headhonchos.com</a></p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
            <table class="footer" style="border-spacing:0;font-family:Arial, sans-serif;color:#607D8B;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;width:100%;max-width:600px;">
                <tr>
                    <td style="border-collapse:collapse;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;">
                        <table width="100%" class="content_wrapper" align="center" cellspacing="0" cellpadding="0" border="0" style="border-collapse:collapse;font-family:Arial, sans-serif;font-weight:normal;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;max-width:600px;mso-table-lspace:0;mso-table-rspace:0;width:100%;border-spacing:0;color:#607D8B;">
                            <!-- <tr>
                                    <td class="footer_wrapper_td"  align="center"= style="border-collapse:collapse;color:#757575;font-family:Roboto, arial;font-size:12px;line-height:16px;padding-top:36px;padding-bottom:0;padding-right:40px;padding-left:40px;text-align:center;" >
                                        <img src="http://services.google.com/fh/files/emails/gcp_newsletter_email_cloud_footer_logo_new.png" alt="Google" width="77" style="-ms-interpolation-mode:bicubic;outline-style:none;text-decoration:none;border-width:0;" >
                                    </td>
                                </tr> -->
                           <tr>
                                <td class="footer_wrapper_td" align="center" style="border-collapse:collapse;color:#757575;font-family:Roboto, arial;font-size:12px;line-height:16px;padding-top:10px;padding-bottom:10px;padding-right:40px;padding-left:40px;text-align:center;">
                                    <p style="margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;line-height:21px;">You are receiving this email because you've registered with HeadHonchos.com with the Email ID <a href="mailto:<?php echo $message['js_email'];?>" style="color:#2779E2;text-decoration:underline;"><?php echo $message['js_email'];?></a>. Please do not reply to this e-mail as it has been sent from an e-mail account that is not monitored. To manage emails you receive from us, <a style="color:#757575;text-decoration:underline;" href="<?php echo $message['autologin'].HOME_PAGE_URL;?>js_settings/index">edit your email preferences</a>.
                                    </p>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align:center;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;">
                                    <a target='_blank' href="https://www.facebook.com/HeadHonchos.India" style="color:#2779E2;text-decoration:none;">
                                        <img src="<?php echo HOME_PAGE_URL; ?>/img/fb-icon.png" style="text-decoration:none;border-width:0;">
                                    </a>
                                    <a target='_blank' href="https://www.linkedin.com/company/headhonchos" style="color:#2779E2;text-decoration:none;">
                                        <img src="<?php echo HOME_PAGE_URL; ?>/img/linkedin-icon.png" style="text-decoration:none;border-width:0;">
                                    </a>
                                    <a target='_blank' href="https://twitter.com/theHeadHonchos" style="color:#2779E2;text-decoration:none;">
                                        <img src="<?php echo HOME_PAGE_URL; ?>/img/twitter-icon.png" style="text-decoration:none;border-width:0;">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align:center;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
                                    <a target='_blank' href="<?php echo APP_DOWNLOAD_LINK;?>"  style="color:#2779E2;text-decoration:underline;" >
                                        <img src="<?php echo HOME_PAGE_URL; ?>/img/play-store.png" style="text-decoration:none;border-width:0; width:160px; margin-top:10px;"  >
                                    </a>
                                </td>
                            </tr>   
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </center>
</body>

</html>
