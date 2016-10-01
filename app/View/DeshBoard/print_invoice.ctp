<body>
    <div class="container  ">

        <div class="row well">
        <div class="col-md-offset-1 padding-left-0 margin-bottom-minus-25 col-md-2 pull-left margin-bottom-0">
         <button class="btn btn-lg  btn-primary" onClick="window.print()"> Print </button>
         </div>
         <div class="col-md-offset-1  margin-bottom-minus-25 col-md-2 pull-right margin-bottom-0">
         <a href="<?php echo ABSOLUTE_URL;?>/desh_board/salse"class="btn btn-lg  btn-primary"> Back </a>
         </div>
         <div class="clearfix"></div>
            <div class="col-md-10 col-md-offset-1 white-bg border-radious margin-top-40">
            <h1 class="text-center margin-bottom-20"> Invoice </h1>
                <table class="table hidden-xs table-responsive table-bordered ">
                    <tr>
                        <td class="text-center">Sr No.</td>
                        <td class="text-center">Perticular</td>
                        <td class="text-center">Quantity</td>
                        <td class="text-center">Discount</td>
                        <td class="text-center">Ammount</td>
                    </tr>
                    <?php foreach ($salse as $key => $value) { 
                        if(!empty($value['name'.$key])) { ?>
                    <tr>
                        <td class="text-center"><?php echo $key;?></td>
                        <td class="text-center"><?php echo $value['name'.$key];?></td>
                        <td class="text-center"><?php echo $value['quantity'.$key];?></td>
                        <td class="text-center"><?php echo $value['discount'.$key];?></td>
                        <td class="text-center"><?php echo $value['totel'.$key];?></td>
                    </tr>
                    <?php } } ?>
                </table>
                 <table class="visible-xs table-responsive table-bordered ">
                    <tr>
                        <td class="text-center">Sr No.</td>
                        <td class="text-center">Perticular</td>
                        <td class="text-center">Quantity</td>
                        <td class="text-center">Discount</td>
                        <td class="text-center">Ammount</td>
                    </tr>
                    <?php foreach ($salse as $key => $value) { 
                        if(!empty($value['name'.$key])) { ?>
                    <tr>
                        <td class="text-center"><?php echo $key;?></td>
                        <td class="text-center"><?php echo $value['name'.$key];?></td>
                        <td class="text-center"><?php echo $value['quantity'.$key];?></td>
                        <td class="text-center"><?php echo $value['discount'.$key];?></td>
                        <td class="text-center"><?php echo $value['totel'.$key];?></td>
                    </tr>

                    <?php } } ?>
                </table>
                   
                <table class="table table-responsive table-bordered margin-top-0 white-bg">
                    <tr>
                        <td>Service Tax @ 15%</td>
                        <td><?php  echo $salse['servicetax'];?></td>
                    </tr>
                    <tr>
                        <td>Vat @ 4.5%</td>
                        <td><?php  echo $salse['vattax'];?></td>
                    </tr>
                    <tr>
                        <td>Other @ 0.5%</td>
                        <td><?php  echo $salse['otherTax'];?></td>
                    </tr>
                    <tr>
                        <td>Discount</td>
                        <td><?php  echo $salse['totalDiscount']?></td>
                    </tr>
                    <tr>
                        <td>Grand Total</td>
                        <td><?php  echo $salse['TotleAm'] * 1.20;?></td>
                    </tr>
                </table>
                 <table class="table-responsive">
                    <tr><td>
                        <strong>Note :</strong> This is system generated invoice hence it does not require signature.<br />
                        <small>*All prices quoted include taxes</small>
                    </td></tr>
                </table>
            
            </div>
            <div class="col-md-10 col-md-offset-1 " style="background-color:#e0e4ea;font-family:Arial, sans-serif;color:#607D8B; font-size:13px; line-height:20px; margin:0px! important padding:0; " >
                <p height="80" align="center"  ><strong><?php echo $firm['name'];?></strong><br />
                    Registered Office:<?php echo $firm['adderess'];?>, <?php echo $firm['city'];?> &ndash; <?php echo $firm['pin'];?>, India Tel: +91 <?php echo $firm['phone'];?> <br />
                    CIN: <?php echo $firm['tin'];?></p>
            </div>
        </div>
    </div>
</body>
<style type="text/css">
    .margin-top-0{margin-top:0px !important;}
    .padding-left-0{padding-left:0px !important;}
    .margin-bottom-minus-25{margin-bottom:-25px !important;}
    .border-radious{border-radius: 4px !important;  border: 1px solid rgba(0, 0, 0, 0.125);}
</style>
<?php  $this->data = array(); ?>
<script type="text/javascript">

window.onbeforeunload = function() { 
    window.setTimeout(function () { 
        window.location = "<?php echo ABSOLUTE_URL.'/home_pages';?>";
    }, 0); 
    window.onbeforeunload = null; // necessary to prevent infinite loop, that kills your browser 
}
</script>