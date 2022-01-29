
  <?php 
    include_once('header.php');
    include_once('sidebar.php');
   ?>

 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

 


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Para islemleri</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="islem.php" method="post">
        	<div class="form-group">

        		<select name="nakit" class="form-control">
        			<option selected>Giris ve ya Cixis Sec</option>
        			<option value="1">Para Giris</option>
        			<option value="0">Para Cixis</option>
        		</select>
        	</div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Basliq:</label>
            <input type="text" name="basliq" placeholder="Basliq" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Aciqlama:</label>
            <textarea name="aciqlama" class="form-control" id="message-text"></textarea>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tutar:</label>
            <input type="number" name="tutar" placeholder="Turar" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Zaman:</label>
            <input type="date" name="zaman" placeholder="Zaman" class="form-control" id="recipient-name">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="nakitekle" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

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
                
               
                <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="float:right;">Para Ekle</button>
             
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
                  <?php $nakit=$baglan->prepare('SELECT * from nakit');
                        $nakit->execute();
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
              	<p style="float: right;">Bu ay erzinde toplam gelir: <?php echo $toplamgiris; ?></p><br><br>r
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