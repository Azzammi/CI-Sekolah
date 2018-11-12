        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Dashboard / Background</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-sm-12">
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
                                margin-top: -15px;
                                font-size: 12px;
                                color: red;
                            }
                            .breack{
                                border-bottom: 1px solid #ddd;
                                margin: 10px 0;
                            }
                        </style>
                        <?php echo form_open_multipart('dashboard/background') ?>
                            <input id="file" type="file" name="userfile" required=""></input> | 
                            <button class="btn btn-default" name="upload" type="submit">Upload</button>
                        </form>
                        <!-- <p>background repeat</p> -->
                        <div class="breack"></div>

                        <div style="height: 300px;background-image: url('<?php echo base_url().'assets/images/'.$record['gambar'] ?>');border: 1px solid #000000;"></div>
                        </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>