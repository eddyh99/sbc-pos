<div class="content">
    <div class="container-fluid">
<!-- Start -->

        <div class="row">
            <div class="card">
                <?php if (isset($_SESSION["message"])){?>
                <div class="alert alert-warning"><?=$_SESSION["message"]?></div>
                <?php } ?>
                <div class="card-content">
        	        <form id="form_input" method="post" action="<?=base_url()?>staff/kas/AddData">
        		        <div class="col-lg-6">
                			<div class="card-body">
                			  <div class="form-group row">
                				<label class="col-sm-3 col-form-label">Tanggal</label>
                				<div class="col-sm-7">
                				  <input type="text" class="form-control" readonly value="<?=date("d-m-Y")?>">
                				</div>
                			  </div>
                			  <div class="form-group row">
                				<label class="col-sm-3 col-form-label">Jenis</label>
                				<div class="col-sm-7">
                				    <select name="jenis" class="form-control" required>
                				        <option value="Kas Awal">Kas Awal</option>
                				        <option value="Keluar">Kas Keluar</option>
                				        <?php if ($_SESSION["logged_status"]["role"]=="Store Manager"){?>
                				        <option value="Masuk">Kas Masuk</option>
                				        <?php }?>
                				    </select>
                				</div>
                			  </div>
                			  <div class="form-group row">
                				<label class="col-sm-3 col-form-label">Nominal</label>
                				<div class="col-sm-7">
                				  <input type="text" class="form-control" id="nominal" name="nominal" maxlength="10" required onkeypress="return isNumber(event)">
                				</div>
                			  </div>
                			  <div class="form-group row">
                				<label class="col-sm-3 col-form-label">Keterangan</label>
                				<div class="col-sm-7">
                				  <input type="text" class="form-control" id="keterangan" name="keterangan" maxlength="100" required>
                				</div>
                			  </div>
                			</div>
        		        </div>
        		        <div class="col-lg-12">
            			    <div class="col-lg-6">
                    		    <button id="btnSimpan" name="btnSimpan"  class="btn btn-primary">Simpan</button>
                    		</div>
                    	    <div class="col-lg-6 text-right">
                				<a name="btnBack" href="<?=base_url()?>staff/kas" class="btn btn-warning">
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