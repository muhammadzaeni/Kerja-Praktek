<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"> Dashboard </h4> 
            </div>
                
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <!--  <div class="x_panel" style="box-shadow: 5px 5px 5px #999; background-color:"> -->
                <?php    
                if($this->session->flashdata('info')){
                    echo '<div class="alert myalert" style="background-color: #0288D1;">
                        <h2 style="font-size: 20px; text-align: center; color: white; font-family: verdana"> Selamat Datang '.$_SESSION["authenticated"].' Di Aplikasi Pelaporan Beban Kerja Dosen Fakultas Teknik </h2>
                    </div>';
                }
                ?>
                <img src="<?= base_url()?>assets/images/login2.png" alt="">
                </div>
            </div>
    </div>
 </div>
 <script type="text/javascript">
      $(".myalert").show('slow').delay(5000).hide('slow');
    
</script>
 