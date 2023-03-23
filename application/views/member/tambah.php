<div class="content">
    <div class="container-fluid">
<!-- Start -->

        <div class="row">
            <div class="card">
                <?php if (isset($_SESSION["message"])){?>
                <div class="alert alert-warning"><?=$_SESSION["message"]?></div>
                <?php } ?>
                <div class="card-content">
        	        <form id="form_input" method="post" action="<?=base_url()?>member/AddData">
        		        <div class="col-lg-6">
                			<div class="card-body">
                			  <div class="form-group row">
                				<label class="col-sm-3 col-form-label">Member ID</label>
                				<div class="col-sm-7">
                				  <input type="text" class="form-control" id="memberid" name="memberid" maxlength="13" value="AUTOGENERATED" readonly>
                				</div>
                			  </div>
                			  <div class="form-group row">
                				<label class="col-sm-3 col-form-label">Nama</label>
                				<div class="col-sm-7">
                				  <input type="text" class="form-control" id="nama" name="nama" maxlength="50" required>
                				</div>
                			  </div>
                			  <div class="form-group row">
                				<label class="col-sm-3 col-form-label">Alamat</label>
                				<div class="col-sm-7">
                				  <input type="text" class="form-control" id="alamat" name="alamat" maxlength="50" required>
                				</div>
                			  </div>
                			  <div class="form-group row">
                				<label class="col-sm-3 col-form-label">TTL</label>
                				<div class="col-sm-4">
                				  <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" maxlength="50">
                				</div>
                				<div class="col-sm-5">
                				  <input type="date" class="form-control" id="tgllahir" name="tgllahir" maxlength="10">
                				</div>
                			  </div>
                			  <div class="form-group row">
                				<label class="col-sm-3 col-form-label">No. HP</label>
                				<div class="col-sm-7">
                				  <input type="text" class="form-control" id="nope" name="nope" maxlength="20" required>
                				</div>
                			  </div>
                			  <div class="form-group row">
                				<label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                				<div class="col-sm-7">
                				  <input type="radio" id="jnskel" name="jnskel" value="laki-laki" checked> Laki-laki 
                				  <input type="radio" id="jnskel" name="jnskel" value="wanita"> Wanita 
                				</div>
                			  </div>
                			  <div class="form-group row">
                				<label class="col-sm-3 col-form-label">Email</label>
                				<div class="col-sm-7">
                				  <input type="email" class="form-control" id="email" name="email" maxlength="50">
                				</div>
                			  </div>
                			  <div class="form-group row">
                				<label class="col-sm-3 col-form-label">Soc Med</label>
                				<div class="col-sm-7">
                				  <input type="text" class="form-control" id="socmed" name="socmed" maxlength="50">
                				</div>
                			  </div>
                			  <div class="form-group row">
                				<label class="col-sm-3 col-form-label">Keterangan</label>
                				<div class="col-sm-7">
                				  <input type="text" class="form-control" id="keterangan" name="keterangan" maxlength="100">
                				</div>
                			  </div>
                			</div>
        		        </div>
        		        <div class="col-lg-12">
            			    <div class="col-lg-6">
                    		    <button id="btnSimpan" name="btnSimpan"  class="btn btn-primary">Simpan</button>
                    		</div>
                    	    <div class="col-lg-6 text-right">
                				<a name="btnBack" href="<?=base_url()?>member" class="btn btn-warning">
                				    <i class="material-icons">reply</i>
                				    Back</a>
                			</div>
        		        </div>
        	        </form>
                </div>
            </div>
        </div>


<!-- End Container -->
    </div>
</div>