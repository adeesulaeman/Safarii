	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Jadwal Sholat
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<table class="table table-striped">
				              <thead>
				                <tr>
				                  <th>#</th>
				                  <th>Tanggal</th>
				                  <th>Subuh</th>
				                  <th>Dhuhur</th>
				                  <th>Ashar</th>
				                  <th>Maghrib</th>
				                  <th>Isya</th>
				                </tr>
				              </thead>
				              <tbody>
				              <?php
				              		$no = 1;
									foreach($waktu_sholat as $row){
								?>
				                <tr>
				                  <td><?php echo $no; ?></td>
				                  <td><?php echo "$row->date_for"; ?></td>
				                  <td><?php echo "$row->fajr"; ?></td>
				                  <td><?php echo "$row->dhuhr"; ?></td>
				                  <td><?php echo "$row->asr"; ?></td>
				                  <td><?php echo "$row->maghrib"; ?></td>
				                  <td><?php echo "$row->isha"; ?></td>
				                </tr>

				                <?php
				                $no++;
				            		}
				            	?>
				              </tbody>
				            </table>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
	</div>	<!--/.main-->