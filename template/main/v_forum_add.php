			<?php echo $sidebar ?>

			<div class="col-sm-8 content">
			
				<div class="panel panel-default welcome">
				  	<div class="panel-heading"><i class="glyphicon glyphicon-list-alt"></i> Tambah Topik</div>
				  	<div class="panel-body">
				    	<?php echo form_open('forum/add_topik') ?>
						  	<!-- <div class="form-group">
						    	<label>Pilih Kategori</label>
							    <select name="kategori" class="form-control">
							    	<option>SHARE</option>
							    	<option>TANYA</option>
							    </select>
						  	</div> -->
						  	<div class="form-group">
							    <label>Oleh</label>
							    <input name="oleh" type="text" class="form-control" placeholder="Oleh" style="width: 50%;" required="">
						  	</div>
						  	<div class="form-group">
							    <label>Judul</label>
							    <input name="judul" type="text" class="form-control" placeholder="Judul" required="">
						  	</div>
						  	<div class="form-group">
							    <label>Isi Topik</label>
							    <textarea name="isitopik" class="form-control" rows="6" placeholder="Isi Topik" required=""></textarea>
						  	</div><!-- 
						  	<div class="form-group">
						    	<label>File Input</label>
						    	<input type="file">
						    	<p class="help-block">Extensi file upload ( rar | zip | doc | xml | pdf | jpg | png | gif )</p>
						  	</div> -->
						  <button name="simpan" type="submit" class="btn btn-default"><i class="glyphicon glyphicon-send"></i> Mulai Diskusi</button>
						</form>
				  	</div>
				</div>

			</div><!-- content -->