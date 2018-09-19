<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>
    <table id="tablepesanan" class="table table-striped table-bordered">
    	<thead>
    		<tr>
    			<th>Id Transaksi</th>
    			<th>Id User</th>
    			<th>Id Delivery</th>
    			<th>Tagihan</th>
    			<th>Payment</th>
    			<th>Status</th>
    			<th>Pesanan</th>
    			<th>Keterangan</th>
    			<th>Action</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php
    		foreach ($data as $key):
    		?>
    		<tr>
    			<td><?php echo $key->idTransaksi; ?></td>
    			<td><?php echo $key->idUser; ?></td>
    			<td><?php echo $key->idDelivery; ?></td>
    			<td><?php echo $key->Tagihan; ?></td>
    			<td><?php echo $key->Payment; ?></td>
    			<td><?php echo $key->Status; ?></td>
    			<td><?php echo $key->Pesanan; ?></td>
    			<td><?php echo $key->Keterangan; ?></td>
    			<td>
    				<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edit<?php echo $key->idTransaksi; ?>"><i class="glyphicon glphicon-pencil"></i></button>
    				<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete<?php echo $key->$idTransaksi; ?>"></button>
    			</td>
    		</tr>
    		<div id="delete<?php echo $key->idTransaksi; ?>" class="modal fade" role="dialog">
    			<div class="modal-dialog">
    				<div class="modal-header">
    					<button type="button" class="close" data-dismiss="modal">
    					</button>
    					<h4 class="modal-tittle">
    						Anda Yakin Ingin Menghapus?
    					</h4>
    					<?php echo form_open("http://127.0.0.1/impalweb/index.php/controlpesanan/hapus?idTransaksi='$key->idTransaksi'"); ?>
    					<input type="hidden" name="hapus" class="form-control" value="<?php echo $key->idTransaksi;?>" id="hapus" required>
    				</div>
    				<div class="modal-footer">
    					<button type="button" data-dismiss="modal" class="btn btn-danger">Tidak </button>
    					<input type="submit" name="hapus" class="btn btn-primary" value="hapus">
    				</div>
    				<?php echo form_close(); ?>
    			</div>
    			
    		</div>
    		<div id="edit<?php echo $key->idTransaksi; ?>" class="modal fade" role="dialog">
    			<div class="modal-dialog">
    				<div class="modal-content">
    					<div class="modal-header">
    						<button type="button" class="close" data-dismiss="modal"></button>
    						<h4 class="modal-tittle">Edit Produk
    						</h4>
    					</div>
    					<?php echo form_open("http://127.0.0.1/impalweb/index.php/controlpesanan/edit?idTransaksi='$key->idTransaksi'"); ?>
    					<div class="modal-body">
    						<div class="form-group">
    							<label class="control-label" for="status">Status</label>
    							<input type="text" name="status" class="form-control" value="<?php echo $key->status;?>" id="status" required>
    						</div>
    						<div class="form-group">
    							<label class="control-label" for="tagihan">Tagihan</label>
    							<input type="number" name="tagihan" class="form-control" value="<?php echo $key->tagihan;?>" id="tagihan" required>
    						</div>


    						<div class="form-group">
    							<label class="control-label" for="pesenapaajaadmin">Keterangan</label>
    							<input type="textarea" name="pesenapaajaadmin" class="form-control" value="<?php echo $key->pesenapaajaadmin;?>" id="pesenapaajaadmin" required>
    						</div>
    					</div>
    					<div class="modal-footer">
    						<button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
    						<input type="submit" class="btn btn-primary" name="edit" value="edit">
    					</div>
    					<?php echo form_close(); ?>
    				</div>
    			</div>
    			
    		</div>
    		<?php
    			endforeach;
    		?>
    	</tbody>
    </table>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
  $(document).ready(function () {
      $('#tablepesanan').DataTable();
  } );
  </script>
</body>
</html>