<!DOCTYPE html>
<html lang="en">




  <body>

    <?php include 'header.php'; ?>	   
      <div style="margin-top: 50px; margin-bottom: 50px;">
        <h1 style="margin-left: 100px;">Barang Yang Akan Dibeli</h1>
        <table class="produk">
          <tr class="headerproduk">
            <th class="namaproduk">Nama Produk</th>
            <th class="lebar">Lebar</th>
            <th class="panjang">Panjang</th>
            <th class="harga">Harga</th>
            
          </tr>
          
            <?php 
              foreach ($transaksi as $row){
                echo "<tr class='listProduk'>";
                echo "<td class='namaproduk'>".$row['namaProduk']."</td>";
                echo "<td class='lebar'>".$row['lebar']." m</td>";
                echo "<td class='panjang'>".$row['panjang']." m</td>";
                echo "<td class='harga'>Rp".$row['hargaSatuan']."</td>";
                echo "</tr>";
              }

            ?>
        </table>
        <h3 style="margin-left: 100px;">Konfigurasi Produk</h3>
        <form method="post" action="<?php base_url() ?>Transaksi/Konfirmasi?produk=<?php echo $_GET['produk'] ?>">
          <div class="" style="margin: 0px auto !important; text-align: center;">
            <div style="margin: 0px auto;text-align: center;">
              <div > Quantity : </div>
              <input style="width:100px;margin: 0px auto;"type="number" name="quantity" class="form-control" min="1" max="100" size="">
              
            </div>
            
          
          <input style="margin: 25px auto !important;" type="submit" value="Next &raquo;">
          </div>
        </form>
      </div>

      
      
    <?php include 'footer.php';?>

      
  </body>

</html>


