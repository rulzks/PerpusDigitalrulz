<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
			   <div class="col-sm-6">
			   	   <h1>Edit Profil</h1>
			   </div>
			   <div class="col-sm-6">
			   	  <ol class="breadcrumb float-sm-right">
			   	  	<li class="breadcrumb-item"><a href="#">Home</a></li>
			   	  	<li class="breadcrumb-item active">Ganti Password</li>
			   	  </ol>
			   </div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content-header -->

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- left colum -->
				<div class="col-md-12">
					<!-- general form elements -->
					<div class="card card-info">
						<div class="card-header">
							<h3 class="card-title">Ganti Password</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form method="post" action="<?php echo base_url('auth/gantipassword/'.$user->userid); ?>" enctype="multipart/form-data">
						 <div class="card-body">

						 	<div class="form-group">
						 		<lebel for="password1">Password Baru</lebel>
						 		<input type="password" class="form-control" nama="password1" id="password1" placeholder=">Masukkan Password Baru" required>
						 		<?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
						 	</div>

						 	<div class="form-group">
						 		<lebel for="password1">Ulangi Password</lebel>
						 		<input type="password" class="form-control" nama="password2" id="password2" placeholder=">Masukkan Password Baru" required>

						 	</div>

						 	</div>
						 	<!-- /.card body -->

						 <div class="card-footer">
						 <button type="submit" class="btn btn-primary">Simpan</button>
						 <a href="<?php echo base_url('dashboard'); ?>" class="btn btn-danger">Batal</a>
						 	</div>
						 </form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>


