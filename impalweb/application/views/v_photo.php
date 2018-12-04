<!DOCTYPE html>
<html lang="en">




  <body>

  <?php include 'header.php'; ?>	

    <div class="container fotoproduk">

      <div class="row centered-form center-block">
        <div class="container col-sm-6 my-4 col-md-offset-5">
          <div class="card">
            <img class="card-img-top" src="<?php echo base_url() ?>img/2.jpg" alt="">
            <div class="card-body">
              <h2 class="card-title" align="center">Photo</h4>
              
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

    <table class="produk">
      <tr class="headerproduk">
        <th class="namaproduk">Nama Produk</th>
        <th class="lebar">Lebar</th>
        <th class="panjang">Panjang</th>
        <th class="harga">Harga</th>
        <th class="beli">Beli Sekarang</th>
      </tr>
      
        <?php 
          foreach ($photo as $row){
            echo "<tr class='listProduk'>";
            echo "<td class='namaproduk'>".$row['namaProduk']."</td>";
            echo "<td class='lebar'>".$row['lebar']." cm</td>";
            echo "<td class='panjang'>".$row['panjang']." cm</td>";
            echo "<td class='harga'>Rp".$row['hargaSatuan']."</td>";
            echo "<td class='belibtn'><a href='".base_url()."Transaksi?produk=".$row['idProduk']."'class='btn btn-primary'> Beli </a></td>";
            echo "</tr>";
          }
        ?>
    </table>
<?php include 'footer.php';?>

    
  </body>

</html>


