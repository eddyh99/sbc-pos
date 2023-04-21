<!-- ======= Start Content wrapper ====== -->
<div class="d-flex flex-column flex-column-fluid">

	<!-- ====== Start Content ====== -->
	<div id="kt_app_content" class="app-content flex-column-fluid">
		<!-- ======= Start Content container ======== -->
		<div id="kt_app_content_container" class="app-container container-fluid">
			
			<!-- ======= Start Row Content Canva JS ====== -->
			<div class="row">
                <!-- ====== Start Tambah Pengguna ====== -->
                <div class="card mt-10">
                    <?php if (isset($_SESSION["message"])){?>
                    <div class="alert alert-warning"><?=$_SESSION["message"]?></div>
                    <?php } ?>
                    <div class="card-content">
                        <form id="form_input" method="post" action="<?=base_url()?>admin/pengguna/AddData">
                            <div class="col-lg-6">
                                <div class="card-body">
                                <div class="form-group row my-3">
                                    <label class="col-sm-3 col-form-label">Username</label>
                                    <div class="col-sm-7">
                                    <input type="text" class="form-control" id="username" name="username" maxlength="20">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-7">
                                    <input type="password" class="form-control" id="password" name="password" maxlength="10">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-7">
                                    <input type="text" class="form-control" id="nama" name="nama" maxlength="50">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label class="col-sm-3 col-form-label">Role</label>
                                    <div class="col-sm-7">
                                        <select name="role" id="role" class="form-control">
                                            <option value="Owner">Owner</option>
                                            <option value="Store Manager">Store Manager</option>
                                            <option value="Office Manager">Office Manager</option>
                                            <option value="Office Staff">Office Staff</option>
                                            <option value="Staff">Staff</option>
                                            <option value="Admin">Admin</option>
                                        </select>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-between mb-10">
                                <div class="col-lg-6 ps-5 text-right">
                                    <a name="btnBack" href="<?=base_url()?>admin/pengguna" class="btn btn-warning">
                                        <i class="material-icons">reply</i>
                                        Back</a>
                                </div>
                                <div class="col-lg-6 pe-14 d-flex justify-content-end">
                                    <button id="btnSimpan" name="btnSimpan"  class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ====== End Tambah Pengguna ====== -->
			</div>
			<!-- ======= End Row Content Canva JS ====== -->

		</div>
		<!-- ====== End Content container ====== -->
	</div>
	<!--====== End Content ====== -->
</div>
<!--======= End Content wrapper ====== -->