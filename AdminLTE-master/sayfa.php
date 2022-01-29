  <?php 
    include_once('header.php');
    include_once('sidebar.php');
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
            <div class="card">
              <?php
              if($_GET['sayfa']=='masraflar'){ ?>
              <div class="card-header">
                <h3 class="card-title">Masraf</h3>
                <?php 

                if(@$_GET['durum']=='ok'){ ?>
                  <div class="alert alert-success">Islem Basarili</div>
                
               <?php }elseif(@$_GET['durum']=='hata'){ ?>
                <div class="alert alert-danger">Islem basarisiz</div>
              <?php } ?>
                <a href="ekle.php?sayfa=masrafekle">
               <button type="submit" class="btn btn-info" style="float:right;">Masraf Ekle</button>
             </a>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Basliq</th>
                      <th>Aciqlama</th>
                      <th>Tutar</th>
                      <th>Zaman</th>
                      <th>Kategori</th>
                      <th>Duzenle</th>
                      <th>Sil</th>
                    </tr>
                  </thead>
                  <?php $masraf=$baglan->prepare('SELECT * from masraflar');
                        $masraf->execute();
                        while ($masrafcek = $masraf->fetch(PDO::FETCH_ASSOC)) {
                          
                   ?>
                  <tbody>
                    <tr>
                      <td><?php echo $masrafcek['id'] ?></td>
                      <td><?php echo $masrafcek['basliq'] ?></td>
                      <td><?php echo $masrafcek['aciqlama'] ?></td>
                      <td><?php echo $masrafcek['tutar'] ?></td>
                      <td><?php echo $masrafcek['zaman'] ?></td>
                      <td><?php echo $masrafcek['kategori'] ?></td>
                      <td>
                        <a href="duzenle.php?sayfa=duzenle&id=<?php echo $masrafcek['id'] ?>">
                        <button type="submit" class="btn btn-primary">Duzenle</button>
                      </a>
                      </td>
                      <td>
                        <form method="post" action="islem.php">
                        <button name="masrafsil" type="submit" class="btn btn-danger">Sil</button>
                        <input type="hidden" name="id" value="<?php echo $masrafcek['id'] ?>">
                        </form>
                      </td>
                    </tr>
                  </tbody>
                <?php } ?>
                </table>
              </div>
              <!-- /.card-body -->
           <?php }elseif($_GET['sayfa']=='odemeler'){ ?>

              <!--ODEMELER start -->
              <div class="card-header">
                <h3 class="card-title">Odeme</h3>
                <?php 

                if(@$_GET['durum']=='ok'){ ?>
                  <div class="alert alert-success">Islem Basarili</div>
                
               <?php }elseif(@$_GET['durum']=='hata'){ ?>
                <div class="alert alert-danger">Islem basarisiz</div>
              <?php } ?>
                <a href="ekle.php?sayfa=odemeekle">
               <button type="submit" class="btn btn-info" style="float:right;">Odeme Ekle</button>
             </a>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Basliq</th>
                      <th>Aciqlama</th>
                      <th>Kime</th>
                      <th>Tutar</th>
                      <th>Zaman</th>
                      <th>Kategori</th>
                      <th>Duzenle</th>
                      <th>Sil</th>
                    </tr>
                  </thead>
                  <?php $odeme=$baglan->prepare("SELECT * from odemeler order by id DESC");
                        $odeme->execute();
                        while ($odemecek = $odeme->fetch(PDO::FETCH_ASSOC)) {
                        
                   ?>
                  <tbody>
                    <tr>
                      <td><?php echo $odemecek['id'] ?></td>
                      <td><?php echo $odemecek['basliq'] ?></td>
                      <td><?php echo $odemecek['aciqlama'] ?></td>
                      <td><?php echo $odemecek['kime'] ?></td>
                      <td><?php echo $odemecek['tutar'] ?></td>
                      <td><?php echo $odemecek['zaman'] ?></td>
                      <td><?php echo $odemecek['para_alinan_zaman'] ?></td>
                      <td>
                        <a href="duzenle.php?sayfa=odemeduzenle&id=<?php echo $odemecek['id'] ?>">
                        <button type="submit" class="btn btn-primary">Duzenle</button>
                      </a>
                      </td>
                      <td>
                        <form method="post" action="islem.php">
                        <button name="odemesil" type="submit" class="btn btn-danger">Sil</button>
                        <input type="hidden" name="id" value="<?php echo $odemecek['id'] ?>">
                        </form>
                      </td>
                    </tr>
                  </tbody>
                <?php } ?>
                </table>
              </div>
              <!--ODEMELER end -->
          <?php }elseif($_GET['sayfa']=='calisanlar'){ ?>

              <!--CALISANLAR start -->
              <div class="card-header">
                <h3 class="card-title">Calisan</h3>
                <?php 

                if(@$_GET['durum']=='ok'){ ?>
                  <div class="alert alert-success">Islem Basarili</div>
                
               <?php }elseif(@$_GET['durum']=='hata'){ ?>
                <div class="alert alert-danger">Islem basarisiz</div>
              <?php } ?>
                <a href="ekle.php?sayfa=calisanekle">
               <button type="submit" class="btn btn-info" style="float:right;">Calisan Ekle</button>
             </a>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Ad</th>
                      <th>Yas</th>
                      <th>Bolum</th>
                      <th>Maas</th>
                      <th>Zaman</th>

                      <th>Duzenle</th>
                      <th>Sil</th>
                    </tr>
                  </thead>
                  <?php $calisan=$baglan->prepare("SELECT * from calisanlar order by id DESC");
                        $calisan->execute();
                        while ($calisancek = $calisan->fetch(PDO::FETCH_ASSOC)) {
                        
                   ?>
                  <tbody>
                    <tr>
                      <td><?php echo $calisancek['id'] ?></td>
                      <td><?php echo $calisancek['ad'] ?></td>
                      <td><?php echo $calisancek['yas'] ?></td>
                      <td><?php echo $calisancek['bolum'] ?></td>
                      <td><?php echo $calisancek['maas'] ?></td>
                      <td><?php echo $calisancek['is_bas_vaxt'] ?></td>
                      <td>
                        <a href="duzenle.php?sayfa=calisanduzenle&id=<?php echo $calisancek['id'] ?>">
                        <button type="submit" class="btn btn-primary">Duzenle</button>
                      </a>
                      </td>
                      <td>
                        <form method="post" action="islem.php">
                        <button name="calisansil" type="submit" class="btn btn-danger">Sil</button>
                        <input type="hidden" name="id" value="<?php echo $calisancek['id'] ?>">
                        </form>
                      </td>
                    </tr>
                  </tbody>
                <?php } ?>
                </table>
              </div>
              <!--CALISANLAR end -->
             <?php }elseif($_GET['sayfa']=='alacaqlar'){ ?>

              <!--ALACAQALR start -->
              <div class="card-header">
                <h3 class="card-title">Alacaq</h3>
                <?php 

                if(@$_GET['durum']=='ok'){ ?>
                  <div class="alert alert-success">Islem Basarili</div>
                
               <?php }elseif(@$_GET['durum']=='hata'){ ?>
                <div class="alert alert-danger">Islem basarisiz</div>
              <?php } ?>
                <a href="ekle.php?sayfa=alacaqekle">
               <button type="submit" class="btn btn-info" style="float:right;">Alacaq Ekle</button>
             </a>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Ad</th>
                      <th>Aciqlama</th>
                      <th>Tutar</th>
                      <th>Zaman</th>

                      <th>Duzenle</th>
                      <th>Sil</th>
                    </tr>
                  </thead>
                  <?php $alacaqlar=$baglan->prepare("SELECT * from alacaqlar order by id DESC");
                        $alacaqlar->execute();
                        while ($alcek = $alacaqlar->fetch(PDO::FETCH_ASSOC)) {
                        
                   ?>
                  <tbody>
                    <tr>
                      <td><?php echo $alcek['id'] ?></td>
                      <td><?php echo $alcek['ad'] ?></td>
                      <td><?php echo $alcek['aciqlama'] ?></td>
                      <td><?php echo $alcek['tutar'] ?></td>
                      <td><?php echo $alcek['zaman'] ?></td>
                      <td>
                        <a href="duzenle.php?sayfa=alacaqduzenle&id=<?php echo $alcek['id'] ?>">
                        <button type="submit" class="btn btn-primary">Duzenle</button>
                      </a>
                      </td>
                      <td>
                        <form method="post" action="islem.php">
                        <button name="alacaqsil" type="submit" class="btn btn-danger">Sil</button>
                        <input type="hidden" name="id" value="<?php echo $alcek['id'] ?>">
                        </form>
                      </td>
                    </tr>
                  </tbody>
                <?php } ?>
                </table>
              </div>
              <!--ALACAQLAR end -->
             <?php }elseif($_GET['sayfa']=='satislar'){ ?>

              <!--SATISLAR start -->
              <div class="card-header">
                <h3 class="card-title">Satislar</h3>
                <?php 

                if(@$_GET['durum']=='ok'){ ?>
                  <div class="alert alert-success">Islem Basarili</div>
                
               <?php }elseif(@$_GET['durum']=='hata'){ ?>
                <div class="alert alert-danger">Islem basarisiz</div>
              <?php } ?>
                <a href="ekle.php?sayfa=satisekle">
               <button type="submit" class="btn btn-info" style="float:right;">Satis Ekle</button>
             </a>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Basliq</th>
                      <th>Aciqlama</th>
                      <th>Tutar</th>
                      <th>Zaman</th>
                      <th>Odeme</th>
                      <th>Duzenle</th>
                      <th>Sil</th>
                    </tr>
                  </thead>
                  <?php $satislar=$baglan->prepare("SELECT * from satis order by id DESC");
                        $satislar->execute();
                        while ($satiscek = $satislar->fetch(PDO::FETCH_ASSOC)) {
                        
                   ?>
                  <tbody>
                    <tr>
                      <td><?php echo $satiscek['id'] ?></td>
                      <td><?php echo $satiscek['basliq'] ?></td>
                      <td><?php echo $satiscek['aciqlama'] ?></td>
                      <td><?php echo $satiscek['tutar'] ?></td>
                      <td><?php echo $satiscek['zaman'] ?></td>
                      <td><?php echo $satiscek['odeme'] ?></td>
                      <td>
                        <a href="duzenle.php?sayfa=satisduzenle&id=<?php echo $satiscek['id'] ?>">
                        <button type="submit" class="btn btn-primary">Duzenle</button>
                      </a>
                      </td>
                      <td>
                        <form method="post" action="islem.php">
                        <button name="satissil" type="submit" class="btn btn-danger">Sil</button>
                        <input type="hidden" name="id" value="<?php echo $satiscek['id'] ?>">
                        </form>
                      </td>
                    </tr>
                  </tbody>
                <?php } ?>
                </table>
              </div>
              <!--ALACAQLAR end -->
             <?php } ?> 
            </div> 
            </div>
            <!-- /.card -->
          </div>
        </div>
       
       
      </div>
    </section>
    
  </div>
  <!-- /.content-wrapper -->



  <?php 

    include_once('footer.php');
   ?>