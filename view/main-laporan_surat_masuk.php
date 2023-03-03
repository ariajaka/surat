<!-- START CONTENT -->
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper" style=''>
        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">
                <div class="pull-left">
                    <h1 class="title">Laporan Surat Masuk</h1>                            
                </div>
            </div>
        </div>
        <form action="sql/laporan_surat_masuk.php" method="POST" target="_blank">
        <div class="col-md-6">
            <div class="form-group">
                <label for="titikawal">Dari</label>
                <input type="text" name='tanggalawal' id="tanggalawal" class="form-control" required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="titikakhir">Hingga</label>
                <input type="text" name='tanggalakhir' id="tanggalakhir" class="form-control" required>
            </div>
        </div>
         <div class="col-md-6">
            <div class="form-group">
                        <label class="form-label" for="status_disposisi">Status Disposisi</label>
                        <select name="status_disposisi" class="form-control">
                            <option value="ALL">ALL</option>
                            <option value="Belum di disposisi">Belum di disposisi</option>
                            <option value="Sudah di disposisi">Sudah di disposisi</option>
                        </select>
            </div>
        </div>
        <div class="col-md-12">
            <input type="submit" name="cetak" class="btn btn-primary" value="Cetak Laporan"></input>
        </div>
 </form>

        <div class="clearfix"></div>

        <?php include ('function/laporan-surat_masuk-loader.php') ?>

                    <div class="row" hidden>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="r1_maingraph db_box">
                                <span class='pull-left'>
                                    <i class='icon-purple fa fa-square icon-xs'></i>&nbsp;<small>PAGE VIEWS</small>&nbsp; &nbsp;<i class='fa fa-square icon-xs icon-primary'></i>&nbsp;<small>UNIQUE VISITORS</small>
                                </span>
                                <div id="db_morris_area_graph" style="height:272px;width:100%;"></div>
                            </div>
                        </div>
                    </div> <!-- End .row -->


                    


                </div>
            </section></div>
    </section>
</section>
<!-- END CONTENT -->
