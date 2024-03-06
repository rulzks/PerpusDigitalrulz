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
			   	  	<li class="breadcrumb-item active">Profil User</li>
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
							<h3 class="card-title">Profil User</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<footer>
						 	<div class="card-body">

						 	<div class="form-group">
						 		<label for="nama">Nama Lengkap</label>
						 		<input type="text" class="form-control" nama="nama" id="nama"
						 		value="<?php echo $user->nama; ?>" placeholder="Masukan Nama Lengkap">
						 		<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
						 	</div>

						 	<div class="form-group">
						 		<label for="alamat">Alamat</label>
						 		<input type="text" class="form-control" nama="alamat" id="alamat"
						 		value="<?php echo $user->alamat; ?>" placeholder="Masukan Alamat">
						 		<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
						 	</div>
						 	
						 	<div class="form-group">
						 		<label for="username">Username</label>
						 		<input type="text" class="form-control" nama="username" id="username"
						 		value="<?php echo $user->username; ?>" placeholder="Masukan Username" required>
						 		<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
						 	</div>

						 	<div class="form-group">
						 		<label for="email">Email</label>
						 		<input type="text" class="form-control" nama="email" id="email"
						 		value="<?php echo $user->email; ?>" placeholder="Masukan Email" required>
						 		<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
						 	</div>
						 	
						 	<div class="form-group">
						 		<lebel for="user_level">User Level</lebel>
						 		<select id="user_level" nama="user_level" class="form-control select2bs4"
						 		style="width: 100%;" disabled>
						 		<option value="" disabled selected>Select User Level...</option>
						 		<option value="Admin" <?php echo ($user->user_level == 'Admin') ? 'selected'  : ''; ?>>
						 			Admin
						 		</option>
						 		<option value="User" <?php echo ($user->user_level == 'User') ? 'selected'  : ''; ?>>
						 			User
						 		</option>
						 		<option value="Petugas" <?php echo ($user->user_level == 'Petugas') ? 'selected'  : ''; ?>>
						 			Petugas
						 		</option>
						 	</select>
						 </div>

						 <div class="form-group">
						 		<label for="telepon">Telepon</label>
						 		<input type="text" class="form-control" nama="telepon" id="telepon"
						 		value="<?php echo $user->telepon; ?>" placeholder="Masukan Telepon">
						 		<?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
						 	</div>

						 	<div class="form-group">
						 		<label for="photo">Photo</label>
						 		<?php if (!empty($user->photo)): ?>
						 			<div>
						 				<img src="<?php echo base_url('uploads/' . $user->photo); ?>" alt="User Photo" width="250">
						 			</div>
						 		<?php else: ?>
						 			<p>No photo available</p>
						 		<?php endif; ?>
						 	</div>
						 </div>
						 <!-- /.card body -->

						 <div class="footer">
						 	<a href="<?php echo base_url('dashboard'); ?>" class="btn btn-danger">Kembali</a>
						 	</div>
						 </form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>