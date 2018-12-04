<!DOCTYPE html>
<html lang="en">




  <body>

    <?php include 'header.php'; ?>	   
      <div style="margin-top: 50px; margin-bottom: 50px;">
        <h1 style="margin-left: 100px;">Konfirmasi Pesanan</h1>
        <table class="produk">
          <tr class="headerproduk">
            <th class="namaproduk">Nama Produk</th>
            <th class="lebar">Lebar</th>
            <th class="panjang">Panjang</th>
            <th class="harga">Harga</th>
            <th class="quantity">Qty</th>
          </tr>
          
            <?php 
              foreach ($transaksi as $row){
                echo "<tr class='listProduk'>";
                echo "<td class='namaproduk'>".$row['namaProduk']."</td>";
                echo "<td class='lebar'>".$row['lebar']." m</td>";
                echo "<td class='panjang'>".$row['panjang']." m</td>";
                echo "<td class='harga'>Rp".$row['hargaSatuan']."</td>";
                echo "<td class='qty'>".$_POST['quantity']."</td>";
                echo "</tr>";
              }
            ?>
        </table>
        <div class="jumlah">Total: Rp<?php echo $jumlah; ?></div>

        <h1 style="margin-left: 100px;clear:both;"> Billing Address</h1>
        <?php if($this->session->userdata('Alamat')=='false'){
          echo "<a id='tambahalamat'class='btn btn-primary' href='".base_url()."/Alamat'>Tambahkan Alamat</a>";
        }
            elseif ($this->session->userdata('Alamat')!='false'){
                echo 
                "<div class='billingk'>
                    <div style='width:100%'>Alamat : ".$this->session->userdata('Alamat') ."</div>
                    <div style='width:100%'>Kode Pos : ".$this->session->userdata('Kodepos') . "</div>
                    <div style='width:100%'>No Telepon : ".$this->session->userdata('noTelp') ."</div>
                    <div style='width:100%'>Perusahaan : ". $this->session->userdata('Perusahaan')."</div>
                </div>
                <a class='btn btn-primary logout' href='".base_url()."Login/logout'>Logout</a>";
            }
    ?>

        <a href="<?php base_url() ?>do_upload" class="btn btn-primary btnnext"> Konfirmasi &raquo;</a>
      </div>

  
    <?php include 'footer.php';?>

      
  </body>

</html>


