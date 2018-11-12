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
                            Edit data guru
                        </div>
                        <div class="panel-body">
                            <?php echo form_open('dashboard/guru_edit') ?>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label>NIP/NIS</label>
                                    <input value="<?php echo $record['nip'] ?>" name="nis" type="text" class="form-control" placeholder="NIP / NIS" id="nis" required="">
                                    <input name="id" type="hidden" value="<?php echo $record['id'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input value="<?php echo $record['nama'] ?>" name="nama" type="text" class="form-control" placeholder="Nama" id="nama" required="">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control" rows="3" placeholder="Alamat" id="alamat" required=""><?php echo $record['alamat'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <p><input type="radio" name="jk" value="pria" checked> Laki-laki
                                    <input type="radio" name="jk" value="wanita" style="margin-left:15px;"> Perempuan
                                </div>
                                <div class="form-group">
                                    <label>Agama</label>
                                    <input value="<?php echo $record['agama'] ?>" name="agama" type="text" class="form-control" placeholder="Agama" id="nama" required="">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label>Golongan</label>
                                    <input value="<?php echo $record['golongan'] ?>" name="golongan" type="text" class="form-control" placeholder="Golongan" id="nama" required="">
                                </div>
                                <div class="form-group">
                                    <label>Bidang Studi</label>
                                    <input value="<?php echo $record['bidang_studi'] ?>" name="bidangstudi" type="text" class="form-control" placeholder="Bidang studi" id="nama" required="">
                                </div>
                                <div class="form-group">
                                    <label>Kelas Yang Diajarkan</label>
                                    <input value="<?php echo $record['kelas'] ?>" name="kelas" type="text" class="form-control" placeholder="Kelas yang diajarkan" id="nama" required="">
                                </div>
                                <div class="form-group">
                                    <label>Ijazah Terakhir</label>
                                    <input value="<?php echo $record['ijazah_trakhir'] ?>" name="ijazah" type="text" class="form-control" placeholder="Ijazah terakhir" id="nama" required="">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button name="simpan" type="submit" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-ok"></i> Update</button> | 
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