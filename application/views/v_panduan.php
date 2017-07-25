	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Panduan</li>
			</ol>
		</div><!--/.row tab-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Kelola Panduan</h1>
				<?php echo $this->session->flashdata('pesan');?>
			</div>
		</div><!--/.row header-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default articles">
					<div class="panel-heading">
						Latest News
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
						<a href="<?php echo base_url(); ?>index.php/tambah_panduan" class="pull-right panel-toggle panel-button-tab-left"><em class="fa fa-plus"></em></a>
					</div>
					<div class="panel-body articles-container">
					<?php
						foreach($ambil_panduan as $row){
					?>
						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-2 col-md-2 date">
										<div class="large">30</div>
										<div class="text-muted">Jun</div>
									</div>
									<div class="col-xs-10 col-md-10">
										<ul class="pull-right panel-settings panel-button-tab-right">
											<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
												<em class="fa fa-cogs"></em>
											</a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li>
														<ul class="dropdown-settings">
															<li><a href="<?php echo site_url('index.php/panduan/edit_panduan/'.$row->id_panduan);?>">
																<em class="fa fa-pencil"></em> Edit
															</a></li>
															<li class="divider"></li>

															<li>
																<a href="<?php echo site_url('index.php/panduan/hapusinfo/'.$row->id_panduan);?>" onclick="return confirm('Anda yakin akan menghapus data ?')">
																<em class="fa fa-trash"></em> Hapus
																</a>
															</li>
															<li class="divider"></li>
														</ul>
													</li>
												</ul>
											</li>
										</ul>
										<h4><a href="#"><?php echo $row->judul_panduan; ?></a></h4>
										<p><?php echo $row->isi_panduan; ?></p>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div><!--End .article-->
					<?php
					}
					?>
					</div>
				</div><!--End .articles-->
			</div><!--/.col-->

				<div class="row">
				<div class="col-md-12">
					<div class="col-xs-6 col-md-3">
						<div class="panel panel-default">
							<div class="panel-body easypiechart-panel">
								<h4>Jumlah Panduan</h4>
								<div class="easypiechart" id="easypiechart-blue" data-percent="92" ><span class="percent">92%</span></div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-3">
						<div class="panel panel-default">
							<div class="panel-body easypiechart-panel">
								<h4>Comments</h4>
								<div class="easypiechart" id="easypiechart-orange" data-percent="65" ><span class="percent">65%</span></div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-3">
						<div class="panel panel-default">
							<div class="panel-body easypiechart-panel">
								<h4>New Users</h4>
								<div class="easypiechart" id="easypiechart-teal" data-percent="56" ><span class="percent">56%</span></div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-3">
						<div class="panel panel-default">
							<div class="panel-body easypiechart-panel">
								<h4>Visitors</h4>
								<div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent">27%</span></div>
							</div>
						</div>
					</div>
				</div>
				</div><!--/.row-->
			
			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!--/.row isi-->
	</div>