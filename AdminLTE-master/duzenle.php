  <?php 
    include_once('header.php');
    include_once('sidebar.php');
    $duzenle = $baglan->prepare('SELECT * from masraflar where id=:id');
    $duzenle->execute(array('id'=>$_GET['id']));
    $cek = $duzenle->fetch(PDO::FETCH_ASSOC);
   ?>

 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
  <br>
          <div class="row">
          <div class="col-12">
            <?php if($_GET['sayfa'] =='duzenle'){ ?>
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Masraf Duzenle</h3>
                 <?php 

                if(@$_GET['durum']=='ok'){ ?>
                  <div class="alert alert-success">Masraf duzenlendi</div>
                 ?>
               <?php }elseif(@$_GET['durum']=='hata'){ ?>
                <div class="alert alert-danger">Masraf duzenlenmedi</div>
              <?php } ?>
              </div>
              
              <!-- form start -->
              <form method="post" action="islem.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Basliq</label>
                    <input type="text" name="basliq" class="form-control" value="<?php echo $cek['basliq'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Aciqlama</label>
                    <input type="text" name="aciqlama" class="form-control" value="<?php echo $cek['aciqlama'] ?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Tutar</label>
                    <input type="number" name="tutar" class="form-control" value="<?php echo $cek['tutar'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Zaman</label>
                    <input type="date" name="zaman" class="form-control" value="<?php echo $cek['zaman'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kategori</label>
                    <input type="text" name="kategori" class="form-control" value="<?php echo $cek['kategori'] ?>">
                  </div>
                </div>
                <!-- /.card-body -->
                <input type="hidden" name="id" value="<?php echo $cek['id'] ?>">

                <div class="card-footer">
                  <button type="submit" name="masrafduzenle" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        </div>
       <?php }elseif($_GET['sayfa'] =='odemeduzenle'){  ?>
          <?php 

                $odemeduzenle = $baglan->prepare('SELECT * from odemeler where id=:id');
                $odemeduzenle->execute(array('id'=>$_GET['id']));
                $odemecek = $odemeduzenle->fetch(PDO::FETCH_ASSOC);

               ?>
        <div class="card card-primary">
          <div class="card-header">
                <h3 class="card-title">Odeme Duzenle</h3>
                 <?php 

                if(@$_GET['durum']=='ok'){ ?>
                  <div class="alert alert-success">Odeme duzenlendi</div>
                 ?>
               <?php }elseif(@$_GET['durum']=='hata'){ ?>
                <div class="alert alert-danger">Masraf duzenlenmedi</div>
              <?php } ?>
              </div>
             
              <!-- form start -->
            
              <form method="post" action="islem.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Basliq</label>
                    <input type="text" name="basliq" class="form-control" value="<?php echo $odemecek['basliq'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Aciqlama</label>
                    <input type="text" name="aciqlama" class="form-control" value="<?php echo $odemecek['aciqlama'] ?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Kime</label>
                    <input type="text" name="kime" class="form-control" value="<?php echo $odemecek['kime'] ?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Tutar</label>
                    <input type="number" name="tutar" class="form-control" value="<?php echo $odemecek['tutar'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Zaman</label>
                    <input type="date" name="zaman" class="form-control" value="<?php echo $odemecek['zaman'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kategori</label>
                    <input type="date" name="para_alinan_zaman" class="form-control" value="<?php echo $odemecek['para_alinan_zaman'] ?>">
                  </div>
                </div>
                <!-- /.card-body -->
                <input type="hidden" name="id" value="<?php echo $odemecek['id'] ?>">

                <div class="card-footer">
                  <button type="submit" name="odemeduzenle" class="btn btn-primary">Submit</button>
                </div>
              </form>

     <?php  }elseif($_GET['sayfa'] =='calisanduzenle'){  ?>
          <?php 

                $calisanduzenle = $baglan->prepare('SELECT * from calisanlar where id=:id');
                $calisanduzenle->execute(array('id'=>$_GET['id']));
                $calisancek = $calisanduzenle->fetch(PDO::FETCH_ASSOC);

               ?>
        <div class="card card-primary">
          <div class="card-header">
                <h3 class="card-title">Calisan Duzenle</h3>
                 <?php 

                if(@$_GET['durum']=='ok'){ ?>
                  <div class="alert alert-success">Calisan duzenlendi</div>
                 ?>
               <?php }elseif(@$_GET['durum']=='hata'){ ?>
                <div class="alert alert-danger">Calisan duzenlenmedi</div>
              <?php } ?>
              </div>
             
              <!-- form start -->
            
              <form method="post" action="islem.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ad</label>
                    <input type="text" name="ad" class="form-control" value="<?php echo $calisancek['ad'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Bolum</label>
                    <input type="text" name="bolum" class="form-control" value="<?php echo $calisancek['bolum'] ?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Maas</label>
                    <input type="number" name="maas" class="form-control" value="<?php echo $calisancek['maas'] ?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Yas</label>
                    <input type="number" name="yas" class="form-control" value="<?php echo $calisancek['yas'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Zaman</label>
                    <input type="date" name="is_bas_vaxt" class="form-control" value="<?php echo $calisancek['is_bas_vaxt'] ?>">
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <input type="hidden" name="id" value="<?php echo $calisancek['id'] ?>">

                <div class="card-footer">
                  <button type="submit" name="calisanduzenle" class="btn btn-primary">Submit</button>
                </div>
              </form>

     <?php  }elseif($_GET['sayfa'] =='alacaqduzenle'){  ?>
          <?php 

                $alacaqduzenle = $baglan->prepare('SELECT * from alacaqlar where id=:id');
                $alacaqduzenle->execute(array('id'=>$_GET['id']));
                $alcek = $alacaqduzenle->fetch(PDO::FETCH_ASSOC);

               ?>
        <div class="card card-primary">
          <div class="card-header">
                <h3 class="card-title">Alacaq Duzenle</h3>
                 <?php 

                if(@$_GET['durum']=='ok'){ ?>
                  <div class="alert alert-success">Alacaq duzenlendi</div>
                 ?>
               <?php }elseif(@$_GET['durum']=='hata'){ ?>
                <div class="alert alert-danger">Alacaq duzenlenmedi</div>
              <?php } ?>
              </div>
             
              <!-- form start -->
            
              <form method="post" action="islem.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ad</label>
                    <input type="text" name="ad" class="form-control" value="<?php echo $alcek['ad'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Aciqlama</label>
                    <input type="text" name="aciqlama" class="form-control" value="<?php echo $alcek['aciqlama'] ?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Tutar</label>
                    <input type="number" name="tutar" class="form-control" value="<?php echo $alcek['tutar'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Zaman</label>
                    <input type="date" name="zaman" class="form-control" value="<?php echo $alcek['zaman'] ?>">
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <input type="hidden" name="id" value="<?php echo $alcek['id'] ?>">

                <div class="card-footer">
                  <button type="submit" name="alacaqduzenle" class="btn btn-primary">Submit</button>
                </div>
              </form>

     <?php  }elseif($_GET['sayfa'] =='satisduzenle'){  ?>
          <?php 

                $satisduzenle = $baglan->prepare('SELECT * from satis where id=:id');
                $satisduzenle->execute(array('id'=>$_GET['id']));
                $satcek = $satisduzenle->fetch(PDO::FETCH_ASSOC);

               ?>
        <div class="card card-primary">
          <div class="card-header">
                <h3 class="card-title">Satis Duzenle</h3>
                 <?php 

                if(@$_GET['durum']=='ok'){ ?>
                  <div class="alert alert-success">Satis duzenlendi</div>
                 ?>
               <?php }elseif(@$_GET['durum']=='hata'){ ?>
                <div class="alert alert-danger">Satis duzenlenmedi</div>
              <?php } ?>
              </div>
             
              <!-- form start -->
            
              <form method="post" action="islem.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Basliq</label>
                    <input type="text" name="basliq" class="form-control" value="<?php echo $satcek['basliq'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Aciqlama</label>
                    <input type="text" name="aciqlama" class="form-control" value="<?php echo $satcek['aciqlama'] ?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Tutar</label>
                    <input type="number" name="tutar" class="form-control" value="<?php echo $satcek['tutar'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Zaman</label>
                    <input type="date" name="zaman" class="form-control" value="<?php echo $satcek['zaman'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Odeme</label>
                    <input type="text" name="odeme" class="form-control" value="<?php echo $satcek['odeme'] ?>">
                  </div>
                </div>
                <!-- /.card-body -->
                <input type="hidden" name="id" value="<?php echo $satcek['id'] ?>">

                <div class="card-footer">
                  <button type="submit" name="satisduzenle" class="btn btn-primary">Submit</button>
                </div>
              </form>

     <?php  } ?>
       
      </div>   
       
      </div>  
       
      </div> 
       
      </div>
    </section>
    
  </div>
  <!-- /.content-wrapper -->



  <?php 

    include_once('footer.php');
   ?>