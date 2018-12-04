<html>
	<?php include "header.php"?>
	<body>

		
        <div class="sidenav">
		  <a href="<?php echo base_url()?>Myaccount">My Account</a>
  		  <a href="<?php echo base_url()?>Myaccount/Order">My Order</a>
		</div>

		<div class="main container">
		    
		    
		    <h1 style="margin-left: 100px;">My Order</h1>
		    <table class="transaksi">
	          <tr class="headertransaksi">
	            <th class="idtransaksi">idTransaksi</th>
	            <th class="total">Total Belanja</th>
	            <th class="status">Status</th>
	            <th class="detail">Detail</th>
	            
	          </tr>
	          
	            <?php 
	              foreach ($order as $row){
	                echo "<tr class='listorder'>";
	                echo "<td class='idtransaksi'>".$row['idTransaksi']."</td>";
	                echo "<td class='total'>".$row['tagihan']."</td>";
	                echo "<td class='status'>".$row['status']." </td>";
	                echo "<td class='detail'><a href='".base_url()."Myaccount/Detail?idTransaksi=".$row['idTransaksi']."'>Lihat Detail</a></td>";
	                echo "</tr>";
	              }

	            ?>
	        </table>
		</div>

	</body>
	<?php include "footer.php"?>
</html>