
  <?php 
    include_once('header.php');
    include_once('sidebar.php');
   ?>

 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

 




    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      	<br>
        <!-- Info boxes -->
        <div class="row">
   
      	    <div class="col-12">
            <div class="card">
         
              <div class="card-header">
                <h3 class="card-title">Masraf</h3>
                <?php 

                if(@$_GET['durum']=='ok'){ ?>
                  <div class="alert alert-success">Islem Basarili</div>
                
               <?php }elseif(@$_GET['durum']=='hata'){ ?>
                <div class="alert alert-danger">Islem basarisiz</div>
              <?php } ?>
                
               
  <form action="" method="post">
  <div class="alert alert-info" role="alert">
    Listelemek istediyiniz zaman araligini secin ve filtirle buttonuna basin
  </div>
  <div class="form-group row">
    <label >Baslangic tarix</label>
    <div class="col-md-4">
      <input type="date" name="bastarix" class="form-control">
    </div>
    <label >Bitme tarix</label>
    <div class="col-md-4">
      <input type="date" name="bittarix" class="form-control">
    </div>
    <div class="col-md-2">
      <button name="filtrle" type="submit" class="btn btn-outline-info">Filtirle</button>
    </div>
  </div>
</form>
<br>
<?php 
      $bastarix = $_POST['bastarix'];
      $bittarix = $_POST['bittarix'];

  ?>
<br>

<br> 
            
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Basliq</th>
                      <th>Aciqlama</th>
                      <th>Para Gelen</th>
                      <th>Para Giden</th>
                      <th>Zaman</th>
                      <th>Sil</th>
                    </tr>
                  </thead>
                  <?php $nakit=$baglan->prepare('SELECT * from nakit where zaman between ? and ?');
                        $nakit->execute([$bastarix,$bittarix]);
                        while ($nakitcek = $nakit->fetch(PDO::FETCH_ASSOC)) {
                      $toplamgiris += $nakitcek['para_gelen'];  
                      $toplamcixis -= $nakitcek['para_giden']; 
                   ?>

                  <tbody>
                    <tr>
                      <td><?php echo $nakitcek['id'] ?></td>
                      <td><?php echo $nakitcek['basliq'] ?></td>
                      <td><?php echo $nakitcek['aciqlama'] ?></td>
                      <td><?php echo $nakitcek['para_gelen'] ?></td>
                      <td><?php echo $nakitcek['para_giden'] ?></td>
                      <td><?php echo $nakitcek['zaman'] ?></td>
                      <td>
                        <form method="post" action="islem.php">
                        <button name="nakitsil" type="submit" class="btn btn-danger">Sil</button>
                        <input type="hidden" name="id" value="<?php echo $nakitcek['id'] ?>">
                        </form>
                      </td>
                    </tr>
                  </tbody>
                <?php } ?>
                </table>
              </div>
              <div>
              	<p style="float: right;">Bu ay erzinde toplam gelir: <?php echo $toplamgiris; ?></p><br><br>
              	<p style="float: right;">Bu ay erzinde toplam cixis: <?php echo $toplamcixis; ?></p>
              </div>
       	</div>
          </div>
       </div>
        </div>
      </div><!--/. container-fluid -->
    </section>
    
  </div>
  <!-- /.content-wrapper -->



  <?php 

    include_once('footer.php');
   ?>