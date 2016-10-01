
 <script type="text/javascript" src="<?php echo ABSOLUTE_URL;?>/js/jquery.validate.js"></script>
<body>
	<div class="container  margin-top-30">
		<div class="row  padding-md-0 well">
		<div class="clearfix"></div> 
		<div class="col-md-3 col-md-offset-5 margin-bottom-20"><h3 class="text-info" ><strong>Please Fill Your Organizational Details</strong></h3></div>
		<div class="clearfix"></div> 
		
			<div class="table-responsive border-2">
				<div class="">
					<form class="form-horizontal" method="post" action="<?php echo ABSOLUTE_URL;?>/home_pages/r1" id="r1Form">
						<div class="form-group control-group controls">
							<label for="input1" class="col-sm-2 control-label margin-right-100">Name of The Firm</label>
							<div class="col-sm-7">
								<input type="text" class="form-control required" title="Please Enter the name of your firm" name="name" id="input1">
							</div>
						</div>
						<div class="form-group control-group controls " >
							<label for="input2" class="col-sm-2 control-label margin-right-100">Adderess</label>
							<div id="lab2" class="col-md-7">
								<input type="text" class="form-control required col-sm-6" title="Please enter the adderess" name="adderess" id="input2"  >
							</div> 
						</div>
					
						<div class="form-group control-group controls">
							<label for="input4" class="col-sm-2 control-label margin-right-100">City</label>
							<div class="col-sm-7">
								<select class="form-control required" title="Please select your city" name="city" id="input4">
								<option value="">Select a City</option>
								    <?php foreach ($city  as $key => $value) {
										echo '<option>'.$value.'</option>';
									} ?>
								</select>
							</div>
						</div>
						<div class="form-group control-group controls">
							<label for="input6" class="col-sm-2 control-label margin-right-100">Pin</label>
							<div class="col-sm-7">
								<input type="text" class="form-control required" title="Please Enter the pincode" name="pin" >
							</div>
						</div>
						<div class="form-group control-group controls">
							<label for="input6" class="col-sm-2 control-label margin-right-100">Nature of Bussiness</label>
							<div class="col-sm-7">
								<input type="text" class="form-control required" title="Please Enter Your Nature Of Bussiness" name="nature" id="input7" >
							</div>
						</div>
						<div class="form-group control-group controls">
							<label for="input6" class="col-sm-2 control-label margin-right-100">Phone Number</label>
							<div class="col-sm-7">
								<input type="text" class="form-control required" title="Please Enter Your Phone Number" name="phone" id="input7" >
							</div>
						</div>
						<div class="form-group control-group controls">
							<label for="input6" class="col-sm-2 control-label margin-right-100">TIN</label>
							<div class="col-sm-7">
								<input type="text" class="form-control required" title="Please Enter TIN Number" name="tin" id="input7" >
							</div>
						</div>
				       <div class="clearfix"></div> 
						<div class="form-group control-group controls col-sm-11">
							<div class="pull-right margin-right-70">
								<button type="submit" class="btn btn-default btn-lg ">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php echo $this->element('pop_element'); ?>
</body>
<script type="text/javascript">
$(document).ready(function () {
            $('#r1Form').validate({
                rules: {
                     name: {
                        minlength: 2,
                        required: true
                    },
                    adderess: {
                        required: true
                    },
                    city: {
                        required: true
                    },
                    pin: {
                        required: true,
                        number: true
                    },
					nature: {
			            required: true
			        },
			        phone: {
			            required: true
			        }, 
			        tin: {
			            required: true
			        },  
                },
                highlight: function (element) {
                    $(element).closest('.controls').removeClass('success').addClass('text-danger');
                },
                success: function (element) {
                    element.addClass('valid')
                        .closest('.controls').removeClass('error').addClass('success').removeClass('text-danger');
                }
            });
        });
        /*
         * @Function : ajax post request to post the data to backend php code and get responce
         * @param : array Form data
         * @Return : successMessage as responce
         * @Author : Vikrant Agrawal
         * @creted on : 2016-08-27
         */
        // function SubmitAndRed(){
        //     $.ajax({
        //             type: "POST",
        //             url: "<?php echo ABSOLUTE_URL;?>/home_pages/r1",
        //             data: $('#r1Form').serialize(true),
        //             success: function(data){
        //                 if (typeof data !== 'undefined' && data !== null) {
        //                      $('#r1Form')[0].reset();
        //                      console.log(data);
        //                      alert(data.redirect);
        //                      if(typeof data.redirect !== 'undefined'){
        //                      	window.location=data.redirect
        //                      }
        //                 } else {
        //                     alert("Something went wrong");
        //                 }
        //             }, error: function (request, status, error) {
        //                 alert("Something went wrong");
        //             }
        //         });
        // }
</script>