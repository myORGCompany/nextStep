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
        <meta name="keywords" content="Online managment,Stock Managment,Invetory Managment,Innovation,Stock,Shop managment,acknowledgement,activity scheduling,advanced shipment notification,adjustment transactions,alternate product IDs,annual physical inventory,apparel inventory software,auto part inventory software,'2-way pallet','3PL','4-way pallet','Activity based costing','ABC stratification','Actual cost','ADC','Advanced planning and scheduling','Advanced shipment notification','AIDC','Allocations','APS','ASN','ASRS','ASP, Application service provider','Autodiscriminationn','Automated data collection','Automated guided vehicle system (AGVS))','Automated storage and retrieval systems','Available','Available to promise','Average cost','Backflush','Backhaul','Backorder','Batch picking','Bill of material','Blanket order','Blanks','Blind counts','Blind shipment','BOM','Bonded Warehouse','Break-bulk','Browser-based applications','Bulk','Cantilever Rack','Capacity requirements planning','Carousel','Carrying cost','Carton clamp','Case','Case picking','Casting','Catch weight','CCD','Chargeback','Charged coupled device'," />
        <meta name="description" content="'Clear height','COGS','Cold storage','Compliance labels','Commodity','Configuration processing','Consignment inventory','Consumer goods','Consumer Packaged Goods','Container','Containerization','Contract warehouse','Coproduct','Costing method','Cost of goods sold','Counting scale','CPG','Cross-belt sorter','Cross-docking','CRP','Cube','Cube logic','Cubed out','Cube utilization','Cubic velocity','Current cost','Data collection','DC','Demand','Dependent demand','Dim weight','Dimensional weight','Direct ship','Direct store delivery','Discrete manufacturing','Distribution','Distribution requirements planning','Dock leveler','Dock to stock','Double-deep rack','DRP','Drive-in rack','Drop ship','Drum-handling attachments','Dry storage','DSD','Dunnage','Duty','','Dynamic slotting','Each','Economic order quantity','EDI','Effective lead time','Electronic product code','Electronic data interchange','Enterprise resource planning','EOQ','EPC','ERP','ESFR','Event management','Excess Inventory','Explosion-proof lift trucks','Exponential smoothing','Extrusion','Fast Charging','Fast Moving Consumer Goods','Fast pick','FIFO','Fill rate','Fixed lead time','Flex conveyor','Floor load','Floor stock','Flow rack','Flue space','FMCG','Food-grade warehouse','Forecast','Forecast consumption','Forecast error','Forging','Forklift','Forklift-free plants','Fork positioner','Forward pick location','Free lift','FTZ','Fulfillment','','Gaylord','GMA pallet','GMROII','Guidance systems','Gravity conveyor','High-density storage','High-piled combustible storage','Honeycombing','Impact alarm','Inching pedal','Independent Demand','Industrial Truck','Inner pack','Intermodal','Inventory','Inventory management','Inventory Turn','Item','Item Profile','Jackpot Line','JIT','Job Shop','Just-in-sequence','Kanban','Landed Cost','Laser-guided','Laser scanner','Lead time','Lead-time demand','Lean manufacturing','Legacy system','Less-than-truckload','License Plate','LIFO, Last-in-first-out','Lift truck','Lights-out warehouse','Line item','Load','Load locks','Locator system','Lockout / Tagout','Longitudinal flue space','Lot for lot','Lot size','LTL','','','Manufacturing execution system','Master production schedule (MPS)','MES','Mezzanine','Milk run','Min-max','Motorized pallet truck','MPS','MRP/MRPII, Manufacturing resource planning','MRP generation','MRO','Multimodal','Multimodal data collection','','Narrow aisle','Negative inventory','Non-stock inventory','Normal distribution','Obsolete Inventory','Open Source','Operation','Optional replenishment','Optical-guided','Order cost','Order cycle','Order point','Order profile','Order selector','','Pick module','Pick path','Pick-to-clear','Pick-to-carton','Pick-to-light','Piece picking','Pinwheel','Pinwheeling','PLC','Planned order','Planning bill','Planning bill of material','Plugging','Pop-up sorter','Postponement','Powered industrial truck','Pro forma invoice','Process manufacturing','Production plan','Program generator','Proprietary','Psuedo bill of material','Purchase order','Push-back rack','Push sorter','Put-to-light','Put wall','Public warehouse','Quantity','Quantity on hand','Quantity on order','Quantity in transit','Inbound and outbound quantities','Quantity allocated','Quantity available','Queue time','Rack-supported building','Radio frequency','Radio frequency identification','Rail-guided','Random location storage','Reach truck','Real-time locator system','Reorder point','Replenishment cycle','Reserve storage','Reverse logistics','RFID','Roller conveyor','Rough-cut capacity','Routing','','Safety lead time','Screen mapping','Seasonality','Seasonality index','Selective pallet rack','Service factor','Shipping manifest system','Sideshift','Skatewheel conveyor','Skid','SKU, Stock keeping unit','Slap-and-ship','Slide-shoe sorter','Slip-sheet attachment','Slot','Slotting','Speech-based technology','Slotting','SSCC','Stamping','Standard cost','Standard deviation','Straddle trucks','Straight truck','Structural pallet rack','Super bill of material','Tandems','Tare Weight','Task interleaving','Terminal emulation','Third-party logistics','Tilt-tray sorter','Time buckets','Time fence','TMS','Towline Conveyor','Trailer','Trailer creep','Transportation management system','Transverse flue space','Turret truck','Tugger','Unit load','Unit of measure','Unit-of-measure conversions','Variable lead time','Vehicle restraint systems','Very narrow aisle','Vendor-managed inventory (VMI)','Voice directed','VNA','Walkie or Walkie-rider','Wave picking','Warehouse Control System','Warehouse management system','Smoothing factor','WCS','Weighted moving average','Weighted out','Wire-guided','WMS','Work-in-process (WIP)','Zone picking','Zone skipping'" />

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
