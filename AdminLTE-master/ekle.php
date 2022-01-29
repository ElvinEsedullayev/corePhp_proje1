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
          <div class="card card-primary">
              <?php
              if($_GET['sayfa']=='masrafekle'){ ?>
              <div class="card-header">
                <h3 class="card-title">Masraf Ekle</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="islem.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Basliq</label>
                    <input type="text" name="basliq" class="form-control" placeholder="Basliq">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Aciqlama</label>
                    <input type="text" name="aciqlama" class="form-control" placeholder="Aciqlama">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Tutar</label>
                    <input type="number" name="tutar" class="form-control" placeholder="Tutar">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Zaman</label>
                    <input type="date" name="zaman" class="form-control" placeholder="Zaman">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kategori</label>
                    <input type="text" name="kategori" class="form-control" placeholder="Kategori">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="masrafekle" class="btn btn-primary">Submit</button>
                </div>
              </form>
            <?php }elseif ($_GET['sayfa']=='odemeekle'){ ?>
                <div class="card-header">
                <h3 class="card-title">Odeme Ekle</h3>
              </div>
               <!--ODEME EKLE start -->
               <form method="post" action="islem.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Basliq</label>
                    <input type="text" name="basliq" class="form-control" placeholder="Basliq">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Aciqlama</label>
                    <input type="text" name="aciqlama" class="form-control" placeholder="Aciqlama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kime</label>
                    <input type="text" name="kime" class="form-control" placeholder="Kime">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Tutar</label>
                    <input type="number" name="tutar" class="form-control" placeholder="Tutar">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Zaman</label>
                    <input type="date" name="zaman" class="form-control" placeholder="Zaman">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Para Alinan Zaman</label>
                    <input type="date" name="para_alinan_zaman" class="form-control" placeholder="Para Alinan Zaman">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="odemeekle" class="btn btn-primary">Submit</button>
                </div>
              </form>
               <!--ODEMELER EKLE end -->
            <?php }elseif ($_GET['sayfa']=='calisanekle'){ ?>
                <div class="card-header">
                <h3 class="card-title">Calisan Ekle</h3>
              </div>
               <!--CALISAN EKLE start -->
               <form method="post" action="islem.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ad</label>
                    <input type="text" name="ad" class="form-control" placeholder="Ad">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Bolum</label>
                    <input type="text" name="bolum" class="form-control" placeholder="Bolum">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Yas</label>
                    <input type="number" name="yas" class="form-control" placeholder="Yas">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Mass</label>
                    <input type="number" name="maas" class="form-control" placeholder="Maas">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Zaman</label>
                    <input type="date" name="is_bas_vaxt" class="form-control" placeholder="Zaman">
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="calisanekle" class="btn btn-primary">Submit</button>
                </div>
              </form>
               <!--CALISAN EKLE end -->
            <?php }elseif ($_GET['sayfa']=='alacaqekle'){ ?>
                <div class="card-header">
                <h3 class="card-title">Alacaq Ekle</h3>
              </div>
               <!--CALISAN EKLE start -->
               <form method="post" action="islem.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ad</label>
                    <input type="text" name="ad" class="form-control" placeholder="Ad">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Aciqlama</label>
                    <input type="text" name="aciqlama" class="form-control" placeholder="Aciqlama">
                  </div>
                  
                   <div class="form-group">
                    <label for="exampleInputEmail1">Tutar</label>
                    <input type="number" name="tutar" class="form-control" placeholder="Tutar">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Zaman</label>
                    <input type="date" name="zaman" class="form-control" placeholder="Zaman">
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="alacaqekle" class="btn btn-primary">Submit</button>
                </div>
              </form>
               <!--CALISAN EKLE end -->
            <?php }elseif ($_GET['sayfa']=='satisekle'){ ?>
                <div class="card-header">
                <h3 class="card-title">Satis Ekle</h3>
              </div>
               <!--SATISLAR EKLE start -->
               <form method="post" action="islem.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Basliq</label>
                    <input type="text" name="basliq" class="form-control" placeholder="Basliq">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Aciqlama</label>
                    <input type="text" name="aciqlama" class="form-control" placeholder="Aciqlama">
                  </div>
                  
                   <div class="form-group">
                    <label for="exampleInputEmail1">Tutar</label>
                    <input type="number" name="tutar" class="form-control" placeholder="Tutar">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Zaman</label>
                    <input type="date" name="zaman" class="form-control" placeholder="Zaman">
                  </div>
                 <div class="form-group">
                    <label for="exampleInputPassword1">Odeme</label>
                    <input type="text" name="odeme" class="form-control" placeholder="Odeme">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="satisekle" class="btn btn-primary">Submit</button>
                </div>
              </form>
               <!--CALISAN EKLE end -->
            <?php } ?>
            </div>
        </div>
       
       
      </div>
    </section>
    
  </div>
  <!-- /.content-wrapper -->



  <?php 

    include_once('footer.php');
   ?>