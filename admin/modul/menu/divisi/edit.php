<div class="page-inner">
	<div class="page-header">
		<h4 class="page-title">Forms</h4>
		<ul class="breadcrumbs">
			<li class="nav-home">
				<a href="?page=&act=home">
					<i class="flaticon-home"></i>
				</a>
			</li>
			<li class="separator">
				<i class="flaticon-right-arrow"></i>
			</li>
			<li class="nav-item">
				<a href="?page=menu&act=divisi">Divisi</a>
			</li>
			<li class="separator">
				<i class="flaticon-right-arrow"></i>
			</li>
			<li class="nav-item">
				<a href="#">Edit Data Divisi</a>
			</li>
		</ul>
	</div>
	<div class="row">

		<div class="col-lg-12">
			<div class="card">
				<div class="card-header d-flex align-items-center">
					Edit Data Devisi
				</div>
				<div class="card-body">
					<form action="?page=guru&act=proses" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Nama Devisi</label>
							<input name="nama" type="text" class="form-control">
						</div>

						<div class="form-group">
							<a class="btn btn-success" href="?page=menu&act=divisi">Simpan</a>
							<a href="javascript:history.back()" class="btn btn-danger"> Batal</a>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>