        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Dashboard / Header</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-md-12">
                        <style type="text/css">
                            #file{
                                width: 30%;
                                border: 1px solid #ddd;
                                float: left;
                                padding: 5px;
                                background-color: #FFFFFF;
                                border-radius: 5px;
                            }
                            p{
                                /*margin-top: -15px;*/
                                font-size: 12px;
                                color: red;
                            }
                            .breack{
                                border-bottom: 1px solid #ddd;
                                margin: 10px 0;
                            }
                            img{
                                border: 1px solid #000000;
                            }
                        </style>
                        <?php echo form_open_multipart('dashboard/header') ?>
                            <input id="file" type="file" name="userfile" required=""></input> | 
                            <button class="btn btn-default" name="upload" type="submit">Upload</button>
                        </form>
                        <div class="breack"></div>
                        <p>Direkomendasikan ( 1139 x 149 )</p>
                    </div>

                    <div class="col-sm-12">
                        <img src="<?php echo base_url().'assets/images/'.$record['gambar'] ?>" class="img-responsive">
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>