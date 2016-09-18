<div class="row ">
<div class="col-md-6 pull-left">
	<div class=" cards ">
		<div class=" padding-left-10 card card-block margin-bottom-10">
			<h3 class="card-title">Daily Reports</h3>
			<div class="row">
				<table class="table table-bordered c-table">
					<tr>
						<td class="">
							<b>Salse</b>
						</td>
						<td class="card-text">
							<?php echo $reports['dailyData'][0]['SUM(actual_price)'];?>
						</td>
					</tr>
					<tr>
						<td class="">
							<b>Percheses</b>
						</td>
						<td class="card-text">
							<?php echo $reports['dailyDataP'][0]['Count(id)'];?>
						</td>
					</tr>
				</table>
			</div>
			<a href="#" class="btn btn-primary">View Details</a>
		</div>
	</div>
	<div class="clearfix margin-bottom-10"></div>
	<div class=" cards ">
		<div class="padding-left-10 card card-block margin-bottom-10">
			<h3 class="card-title">Monthly Reports</h3>
			<div class="row">
				<table class="table table-bordered c-table">
					<tr>
						<td class="">
							<b>Salse</b>
						</td>
						<td class="card-text">
							<?php echo $reports['monthlyData'][0]['SUM(actual_price)'];?>
						</td>
					</tr>
					<tr>
						<td class="">
							<b>Percheses</b>
						</td>
						<td class="card-text">
							<?php echo $reports['monthlyDataP'][0]['Count(id)'];?>
						</td>
					</tr>
				</table>
			</div>
			<a href="#" class="btn btn-primary">View Details</a>
		</div>
	</div>
</div>

<div class="col-sm-6 pull-right">
	<div class=" cards ">
		<div class="padding-left-10 card card-block margin-bottom-10">
			<h3 class="card-title">Yearly Reports</h3>
			<div class="row">
				<table class="table table-bordered c-table">
					<tr>
						<td class="">
							<b>Salse</b>
						</td>
						<td class="card-text">
							<?php echo $reports['YearlyData'][0]['SUM(actual_price)'];?>
						</td>
					</tr>
					<tr>
						<td class="">
							<b>Percheses</b>
						</td>
						<td class="card-text">
							<?php echo $reports['YearlyDataP'][0]['Count(id)'];?>
						</td>
					</tr>
				</table>
			</div>
			<a href="#" class="btn btn-primary">View Details</a>
		</div>
	</div>
	<div class="clearfix margin-bottom-10"></div>
	<div class="cards ">
		<div class=" padding-left-10 card card-block margin-bottom-10">
			<h3 class="card-title">Products Going to Expaire</h3>
			<div class="row">
				<table class="table table-bordered c-table">
					<tr>
						<td class="">
						<b>Name</b>
						</td>
						<td class="card-text">
						<b>Expairy Date</b>
						</td>
					</tr>
					<?php foreach ($reports['expairy'] as $key => $value) { ?>
					<tr>
						<td class="">
							
							<?php echo $value['Product']['name'];?>
						</td>
						<td class="card-text">
							<?php echo $value['Product']['expairy_date'];?>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
			<a href="#" class="btn btn-primary">View Details</a>
		</div>
	</div>
</div>
</div>