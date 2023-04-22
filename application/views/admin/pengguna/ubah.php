<!-- ======= Start Content wrapper ====== -->
<div class="d-flex flex-column flex-column-fluid">

	<!-- ====== Start Content ====== -->
	<div id="kt_app_content" class="app-content flex-column-fluid">
		<!-- ======= Start Content container ======== -->
		<div id="kt_app_content_container" class="app-container container-fluid">
			
			<!-- ======= Start Row Content Canva JS ====== -->
			<div class="row">
                <!-- ====== Start Ubah Pengguna  ====== -->
                <div class="card mt-10">
                    <?php if (isset($_SESSION["message"])){?>
                    <div class="alert alert-warning"><?=$_SESSION["message"]?></div>
                    <?php } ?>
                    <div class="card-content">
                        <form id="form_input" method="post" action="<?=base_url()?>admin/pengguna/updateData">
                            <div class="col-lg-6">
                                <div class="card-body">
                                <div class="form-group row my-3">
                                    <label class="col-sm-3 col-form-label">Username</label>
                                    <div class="col-sm-7">
                                    <input type="text" class="form-control" id="username" name="username" maxlength="10" value="<?=$detail['username']?>" readonly>
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
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?=$detail['nama']?>"  maxlength="50">
                                    </div>
                                </div>
                                <?php if ($_SESSION["logged_status"]["role"]!="Staff"){?>
                                <div class="form-group row my-3">
                                    <label class="col-sm-3 col-form-label">Role</label>
                                    <div class="col-sm-7">
                                        <select name="role" id="role" class="form-control">
                                            <option value="Owner" <?php echo ($detail[0]->role=="Owner") ? "selected": "" ?>>Owner</option>
                                            <option value="Store Manager" <?php echo ($detail[0]->role=="Store Manager") ? "selected": "" ?>>Store Manager</option>
                                            <option value="Office Manager" <?php echo ($detail[0]->role=="Office Manager") ? "selected": "" ?>>Office Manager</option>
                                            <option value="Office Staff" <?php echo ($detail[0]->role=="Office Staff") ? "selected": "" ?>>Office Staff</option>                						<option value="Staff" <?php echo ($detail[0]->role=="Staff") ? "selected": "" ?>>Staff</option>
                                            <option value="Admin" <?php echo ($detail[0]->role=="Admin") ? "selected": "" ?>>Admin</option>
                                        </select>
                                    </div>
                                </div>
                                <?php }?>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-between">
                                <div class="col-lg-6 ps-5 text-right">
                                    <a name="btnBack" href="<?=base_url()?>admin/pengguna" class="btn btn-warning">
                                        <i class="material-icons">reply</i>
                                        Back</a>
                                </div>
                                <div class="col-lg-6 pe-14 d-flex justify-content-end">
                                    <button id="btnSimpan" name="btnSimpan"  class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-10" style="margin-bottom: 15px;">
                                <font color="red">Note: Kosongkan password jika tidak ingin mengubah</font>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ====== End Ubah Pengguna  ===== -->
			</div>
			<!-- ======= End Row Content Canva JS ====== -->

		</div>
		<!-- ====== End Content container ====== -->
	</div>
	<!--====== End Content ====== -->
</div>
<!--======= End Content wrapper ====== -->