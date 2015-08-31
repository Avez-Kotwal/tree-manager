<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1> Jobs List </h1>

</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<!-- left column -->

		<div class="col-md-9">
			<div class="box" style="padding:20px;">
				<!-- general form elements -->
				<div class="row">
					<div class="form-group col-md-2">
						<label>Job Status</label>
						<select class="form-control">
							<option>.All.</option>
							<option>Active</option>
							<option>Complete</option>
							<option>Cancelled</option>

						</select>
					</div>
					<div class="form-group col-md-2">
						<label>Job Progress</label>
						<select class="form-control">
							<option value="">All</option>
							<option value="PM: Pay Invoice">PM: Pay Invoice</option>
							<option value="PM: Send WP Invoice">PM: Send WP Invoice</option>

						</select>
					</div>

					<div class="form-group col-md-2">
						<label>Job Number </label>
						<input name="" class="form-control" id="" value="" type="">
					</div>
					<div class="form-group col-md-2">
						<label>Risk Suburb</label>
						<input name="" class="form-control" id="" value="" type="">
					</div>
					<div class="form-group col-md-4">
						<label>Details</label>
						<input name="" class="form-control" id="" value="" type="">
					</div>
				</div>

				<div class="small-box bg-gray">
					<div class="inner">
						<div class="pull-left">
							Clear Search Criteria
						</div>
						<div class="pull-right">
							<button class="btn btn-default btn-sm">
								Search
							</button>
						</div>
						<div class="clearfix"></div>
					</div>

				</div>

				<div class="box-body table-responsive no-padding">
					<table id="example2" class="table table-bordered table-hover">
						<tbody>
							<tr>
								<th>ID</th>
								<th>Job No</th>
								<th>Date</th>
								<th>Details</th>
								<th>Job Type</th>
								<th>Manager</th>
								<th>Risk Address</th>
								<th>Risk Suburb</th>
								<th>Action</th>
								<th>Day</th>
								<th>Hrs</th>
								<th>Min</th>
							</tr>
							<tr>
								<td>
								<button class="btn btn-block btn-default btn-sm">
									Select
								</button><a href="job-details.html" class="btn btn-block btn-default btn-sm">Details</a></td>
								<td>4614</td>
								<td>20/06/2015</td>
								<td>INS- Grind tree stump but don't remove it.</td>
								<td>Make Safe</td>
								<td>Delonix</td>
								<td>11 Pitt St</td>
								<td>Paddington</td>
								<td>PM: Pay Invoice</td>
								<td class="job-green"><h2>01</h2></td>
								<td class="job-green"><h2>16</h2></td>
								<td class="job-green"><h2>:17</h2></td>
							</tr>
							<tr>
								<td>
								<button class="btn btn-block btn-default btn-sm">
									Select
								</button><a href="job-details.html" class="btn btn-block btn-default btn-sm">Details</a></td>
								<td>4614</td>
								<td>20/06/2015</td>
								<td>INS- Grind tree stump but don't remove it.</td>
								<td>Make Safe</td>
								<td>Delonix</td>
								<td>11 Pitt St</td>
								<td>Paddington</td>
								<td>PM: Pay Invoice</td>
								<td class="job-red"><h2>01</h2></td>
								<td class="job-red"><h2>16</h2></td>
								<td class="job-red"><h2>:17</h2></td>
							</tr>
						</tbody>
					</table>
				</div>

			</div>
		</div>

		<div class="col-md-3">
			<!-- general form elements -->
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Total Jobs Process Chart</h3>
				</div><!-- /.box-header -->
				<!-- form start -->
				<img class="img-responsive" src="dist/img/Pie-chart.png">
			</div><!-- /.box -->

			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">% of all Jobs</h3>
				</div><!-- /.box-header -->
				<div class="box-body">
					<div class="progress">
						<div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
							<span class="sr-only">40% Complete (success)</span>
						</div>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
							<span class="sr-only">20% Complete</span>
						</div>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
							<span class="sr-only">60% Complete (warning)</span>
						</div>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
							<span class="sr-only">80% Complete</span>
						</div>
					</div>
				</div>

			</div><!-- /.box -->

		</div>

		<!--/.col (left) -->
		<!-- right column -->
		<!--/.col (right) -->
	</div>
	<!-- /.row -->
</section>
</div><!-- /.content-wrapper -->