        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Dashboard / Guru</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah data guru
                        </div>
                        <div class="panel-body">
                            <?php echo form_open('dashboard/tambahdataguru') ?>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label>NIP</label>
                                    <input name="nis" type="text" class="form-control" placeholder="NIP" id="nis" required="">
                                    <!-- <input name="id" type="hidden" class="form-control" value="<?php echo $record['id'] ?>"> -->
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input name="nama" type="text" class="form-control" placeholder="Nama" id="nama" required="">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control" rows="3" placeholder="Alamat" id="alamat" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <p><input type="radio" name="jk" value="pria" checked> Laki-laki
                                    <input type="radio" name="jk" value="wanita" style="margin-left:15px;"> Perempuan
                                </div>
                                <div class="form-group">
                                    <label>Agama</label>
                                    <select name="agama" class="form-control" style="width:40%;">
                                        <option>Islam</option>
                                        <option>Kristen</option>
                                        <option>Hindu</option>
                                        <option>Budha</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label>Golongan</label>
                                    <input name="golongan" type="text" class="form-control" placeholder="Golongan" id="nama" required="">
                                </div>
                                <div class="form-group">
                                    <label>Bidang Studi</label>
                                    <input name="bidangstudi" type="text" class="form-control" placeholder="Bidang studi" id="nama" required="">
                                </div>
                                <div class="form-group">
                                    <label>Kelas Yang Diajarkan</label>
                                    <input name="kelas" type="text" class="form-control" placeholder="Kelas yang diajarkan" id="nama" required="">
                                </div>
                                <div class="form-group">
                                    <label>Ijazah Terakhir</label>
                                    <input name="ijazah" type="text" class="form-control" placeholder="Ijazah terakhir" id="nama" required="">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button name="simpan" type="submit" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-ok"></i> Simpan</button> | 
                                <a href="<?php echo base_url().'dashboard/guru' ?>"> Batal</a>
                            </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>