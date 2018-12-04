<html>
	<?php include "header.php"?>
	<body>

		
        <div class="sidenav">
		  <a href="<?php echo base_url()?>Myaccountr">My Account</a>
  		  <a href="<?php echo base_url()?>Myaccount/Order">My Order</a>
		</div>

		<div class="main container">
		    
		    
		    <h1 style="margin-left: 90px;">My Detail Order</h1>
		    <table class="transaksi">
	          <tr class="headerdetail">
	            <th class="idtransaksi">idTransaksi</th>
	            <th class="namaproduk">Nama Produk</th>
	            <th class="namafile">Nama File</th>
	            <th class="quantity">Qty</th>
	            
	          </tr>
	          
	            <?php 
	              
	                echo "<tr class='listorder'>";
	                echo "<td class='idtransaksi'>".$_GET['idTransaksi']."</td>";
	                echo "<td class='namaproduk'>".$namaproduk."</td>";
	                echo "<td class='namafile'>".$namafile." </td>";
	                echo "<td class='quantity'>".$qty."</td>";
	                echo "</tr>";
	              

	            ?>
	        </table>

	        <table class="delivery">
	          <tr class="headerdelivery">
	            <th class="noresi">No Resi</th>
	            <th class="kurir">Kurir</th>
	            <th class="tglkirim">Tanggal Kirim</th>
	          </tr>
	          
	            <?php 
	              
	                echo "<tr class='listdeliv'>";
	                echo "<td class='noresi'>".$noresi."</td>";
	                echo "<td class='kurir'>".$kurir."</td>";
	                echo "<td class='tglkirim'>".$tglkirim." </td>";
	                echo "</tr>";
	            ?>
	        </table>
		</div>

	</body>
	<?php include "footer.php"?>
</html>