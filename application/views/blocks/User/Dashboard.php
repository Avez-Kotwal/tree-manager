<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Dashboard</h1>

	</section>
	<!-- Main content -->
	<section class="content">
		<div class="col-md-9">
			<div class="box box-solid">
				<div class="box-header with-border">
					<h3 class="box-title">Job Summery</h3>
					<!-- /.box-tools -->
				</div><!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						<div class="col-md-12">
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
										
											
											<?php 
											foreach ($job_details_list as $key => $value) {
												echo '<tr>';
												echo "<td>
													<button class='btn btn-block btn-default btn-sm'>
														Select
													</button><a href='job-details.html' class='btn btn-block btn-default btn-sm'>Details</a></td>";
												echo "<td>$value[job_id]</td>";
												echo "<td>$value[job_received_date_only]</td>";
												echo "<td>$value[job_description]</td>";
												echo "<td>$value[type_name]</td>";
												echo "<td>$value[manager_name]</td>";
												echo "<td>$value[job_risk_address]</td>";
												echo "<td>$value[job_risk_suburb]</td>";
												echo "<td>PM: Pay Invoice</td>";
												echo "<td class='job-green'><h2>01</h2></td>";
												echo "<td class='job-green'><h2>16</h2></td>";
												echo "<td class='job-green'><h2>:17</h2></td>";
												echo '</tr>';
											}
											?>										
									</tbody>
								</table>
							</div>

						</div><!-- /.col-lg-12 -->
					</div><!-- /.row -->
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
