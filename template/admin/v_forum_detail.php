        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Dashboard / Forum</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-sm-12">
                        <div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i>
                            Diskusi
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="chat">
                                <?php foreach($komen->result() as $row){ ?>
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="<?php echo base_url().'assets/images/forum.png' ?>" class="img-circle img-responsive" width="40px">
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font"><?php echo $row->oleh ?></strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> <?php echo date('d M Y',strtotime($row->tanggal)) ?>
                                            </small>
                                        </div>
                                        <p>
                                            <?php echo $row->komen ?>
                                        </p>
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                            <?php echo form_open('dashboard/forum_detail') ?>
                              <div class="form-group">
                                <textarea name="komen" class="form-control" placeholder="Tulis masukan anda disini ....!"></textarea>
                                <input type="hidden" name="id" value="<?php echo $forum['id'] ?>">
                              </div>
                              <button name="simpan" type="submit" class="btn btn-primary">Kirim Masukan</button>
                            </form>
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>