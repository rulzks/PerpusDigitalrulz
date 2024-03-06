<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<section class="content-header">
		<?php if ($this->session->flashdata('success')): ?>
			<div id="flash-success" class="alert alert-info">
				<?= $this->session->flashdata('success'); ?>
			</div>
		<?php endif; ?>

		<?php if ($this->session->flashdata('error')): ?>
			<div id="flash-error" class="alert alert-danger">
				<?= $this->session->flashdata('error'); ?>
			</div>
		<?php endif; ?>
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data User</h1>
		</div>
		<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">User</li>
						</ol>
					</div>
				</div>
</div><!-- /.container-fluid -->
</section>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<!-- ... (existing code) ... -->
		</div>
		<!-- /.row -->
		<!-- Main row -->
		<div class="row">
			<!-- Left col -->
			<section class="col-lg-12 connectedSorttable">
				<!-- Custom tabs (Charts with tabs)-->
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fas fa-table mr-1"></i>
							User
						</h3>
						<div class="card-tools">
							<a href="<?php echo base_url('user/create'); ?>" class="btn btn-success">
								<i class="fas fa-plus"></i> Tambah Data
							</a>
						</div>
					</div><!-- /.card-body -->
					    <div class="card-body">
						<table id="table" table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Lengkap</th>
									<th>Username</th>
									<th>Email</th>
									<th>Level</th>
									<th>Created At</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $no=1; foreach ($users as $item) : ?>
								<tr>
									<td><?= $no++;?></td>
									<td><?php echo $item->nama; ?></td>
									<td><?php echo $item->username; ?></td>
									<td><?php echo $item->email; ?></td>
									<td><?php echo $item->user_level; ?></td>
									<td><?php echo $item->created_at; ?></td>
									<td class="text-center">
										<a href="<?php echo base_url('user/edit/' . $item->id); ?>" class="btn btn-warning">
											<i class="fas fa-edit"></i> Edit
										</a>

										<a href="<?php echo base_url('user/delete/' . $item->id); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini?')">
											<i class="fas fa-trash-alt"></i> Delete
										</a>

										<a href="<?php echo base_url('user/detail/' . $item->id); ?>" class="btn btn-secondary">
											<i class="fas fa-info-circle"></i> Detail
										</a>
									</td>
								</tr>
							<?php endforeach; ?>
							</tbody>				
						<tfoot>
							<tr>
									<th>No</th>
									<th>Nama Lengkap</th>
									<th>Username</th>
									<th>Email</th>
									<th>Level</th>
									<th>Created At</th>
									<th class="text-center">Action</th>
								</tr>
							</tfoot>
							</table>
					</div><!-- /.card-body -->
				</div>
				<!-- /.card -->
			</section>
			<!-- /. Left col -->
		</div>
		<!-- /.row (main row) -->
	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>


<!-- /. content-wrapper -->

<script>
	// Automatically fade out flash messages after 5 second
	setTimeout(function() {
		document.getElementById('flash-success').style.display = 'none';
		document.getElementById('flash-error').style.display = 'none';
	}, 7000);
</script>
