<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Next-Step Solutions</title>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="NextStep is an easy-to-use, online management system which streamlines your Inventory, Shopers Accounts, Sales Leads, Purchase Orders, and Billing related tasks for you. Sign up for free in less than 15 seconds and start using NextStep today." />
<meta name="keywords" content="online inventory management, web based management system, cloud based inventory management, stock control, saas, cloud crm, cloud business tool, sales leads, inventory management system, online invoicing, create custom estimates" />
<meta name="copyright" content="2016, nextstep solutions pvt. ltd." />

<meta name="language" content="en-us" />


<script src="<?php echo ABSOLUTE_URL;?>/js/jquery.min.js"></script> <!-- or use local jquery -->
<script src="<?php echo ABSOLUTE_URL;?>/js/jqBootstrapValidation.js"></script>
<script src="<?php echo ABSOLUTE_URL;?>/js/bootstrap.min.js"  type="text/javascript"></script>
<link href="<?php echo ABSOLUTE_URL;?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link rel="shortcut icon" href="PUT YOUR FAVICON HERE">-->
        
        <!-- Google Web Font Embed -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        
        <!-- Bootstrap core CSS -->
        <link href="<?php echo ABSOLUTE_URL;?>/css/bootstrap.css" rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="<?php echo ABSOLUTE_URL;?>/js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
        <link href="<?php echo ABSOLUTE_URL;?>/css/style.css"  rel='stylesheet' type='text/css'>
        <link href="<?php echo ABSOLUTE_URL;?>/css/templatemo_style.css"  rel='stylesheet' type='text/css'>
        
        <script src="<?php echo ABSOLUTE_URL;?>/js/stickUp.min.js"  type="text/javascript"></script>
        <script src="<?php echo ABSOLUTE_URL;?>/js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>

    </head> 
<body>
<?php echo $this->element('top_navigation'); ?>
<?php echo $this->element('registration'); ?>

	<div id="container">
		
		<div id="content">
			<?php echo $this->fetch('content'); ?>

		</div>
		
	</div>
    <?php echo $this->element('footer'); ?>

</body>
</html>
