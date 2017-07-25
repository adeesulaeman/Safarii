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

		<div class="panel panel-default">
					<div class="panel-heading">
						Tambah Panduan
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<form class="form-horizontal" action="<?php echo base_url(); ?>index.php/panduan/prosestambah" method="post">
							<fieldset>
								<!-- Judul-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Judul Panduan</label>
									<div class="col-md-9">
										<input id="judul_panduan" name="judul_panduan" type="text" placeholder="Judul Panduan" class="form-control">
									</div>
								</div>

								<!-- Tanggal-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tanggal Panduan</label>
									<div class="col-md-9">
										<input id="tgl_panduan" name="tgl_panduan" type="text" value="<?php date_default_timezone_set("Asia/Jakarta"); echo date(" h:i:s d/m/Y ");?>" readonly="" class="form-control">
									</div>
								</div
								
								<!-- Isi -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Isi Panduan</label>
									<div class="col-md-9">
										<textarea class="form-control" id="isi_panduan" name="isi_panduan" placeholder="Tambahkan isi Panduan disini..." rows="5"></textarea>
									</div>
								</div>
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" class="btn btn-default btn-md pull-right">Submit</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
	</div>