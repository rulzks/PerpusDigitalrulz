<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
			   <div class="col-sm-6">
			   	   <h1>Edit Data User</h1>
			   </div>
			   <div class="col-sm-6">
			   	  <ol class="breadcrumb float-sm-right">
			   	  	<li class="breadcrumb-item"><a href="#">Home</a></li>
			   	  	<li class="breadcrumb-item active">Data User</li>
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
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Edit User</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form method="post" action="<?php echo base_url('user/update/'.$user->id); ?>" enctype="multipart/form-data">
							<div class="card-body">
                			<div class="form-group">
						 		<label for="nama">Nama Lengkap</label>
						 		<input type="text" class="form-control" name="nama" id="nama" 
						 			value="<?php echo $user->nama; ?>" placeholder="Masukkan Nama Lengkap">
						 		<?=form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?> 
						 	</div>
						
                			<div class="form-group">
						 		<label for="username">Username</label>
						 		<input type="text" class="form-control" name="username" id="username"
						 			 value="<?php echo $user->username; ?>" placeholder="Masukkan Username" required>
						 		<?=form_error('username', '<small class="text-danger pl-3">', '</small>'); ?> 
						 	</div>

                				<div class="form-group">
						 		<label for="password">Password</label>
						 		<input type="password" class="form-control" id="password" name="password" placeholder="Biarkan Kosong Jika Tidak Ingin di ganti">
						 		<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
						 	</div>

                				<div class="form-group">
						 		<label for="email">Email</label>
						 		<input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan Email" required> value="<?php echo $user->email; ?>">
						 		<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?> 
						 	</div>

						 	<div class="form-group">
						 		<label for="user_level">User Level</label>
						 		<select id="user_level" name="user_level" class="form-control select2bs4" style="width: 100%;" required>
						 			<option value="" disabled selected>Silahkan Pilih User Level...
                                    <option value="Admin" <?php echo ($user->user_level == 'Admin') ? 'selected' : ''; ?>>
                                    	Admin
                                    </option>
                                    <option value="User" <?php echo ($user->user_level == 'User') ? 'selected' : ''; ?>>
                                        User
					 			</option>
					 		</select>
					 	</div>			

                			<div class="form-group">
						 		<label for="photo">Photo</label>
						 		<input type="file" class="form-control" name="photo" id="photo" accept="image/*">
						 	</div>

						 	<div class="form-group">
						 		<?php if (!empty($user->photo)): ?>
						 			<div>
						 				<img src="<?php echo base_url('uploads/' . $user->photo); ?>" alt="User Photo" width="200">
						 			</div>
						 		<?php else: ?>
						 			<p>No photo available</p>
						 		<?php endif; ?>
						 	</div>
						 </div>


						 <div class="card-footer">
						 	<button type="submit" class="btn btn-primary">Simpan</button>
						 	<a href="<?php echo base_url('user/index'); ?>"class="btn btn-danger">Batal</a>
                			 </div>
                		  </form>
                      </div>
			      </div>
		      </div>
		  </div>
	</section>
</div>