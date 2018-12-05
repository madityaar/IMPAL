<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Transaksi - Admin</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url()?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url()?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url()?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Percetakan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="http://localhost/impalweb/index.php/controlproduk/">Produk
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/impalweb/index.php/controltransaksi/">Transaksi</a>
                <span class="sr-only">(current)</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/impalweb/index.php/controldelivery/">Delivery</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">Tables</li>
          </ol>

          <!-- DataTables Example -->

          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Transaksi</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID transaksi</th>
                      <th>ID User</th>
                      <th>ID Delivery</th>
                      <th>Tagihan</th>
                      <th>Status</th>
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
    <td><?php echo $key->tagihan; ?></td>
    <td><?php echo $key->status; ?></td>
    <td>
       <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edit<?php echo $key->idTransaksi; ?>"><i class="glyphicon glyphicon-pencil"></i></button>
<!--         <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete<?php echo $key->idTransaksi; ?>"><i class="glyphicon glyphicon-trash"></i></button> -->
    </td>

      
  </tr>
                  

                  <div id="delete<?php echo $key->idTransaksi; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                    <h4 class="modal-title">Anda Ingin Menghapus?</h4>
                                    <?php echo form_open("http://localhost/impalweb/index.php/controltransaksi/hapus?idTransaksi='$key->idTransaksi'"); ?>
                                    <input type="hidden" name="hapus" class="form-control" value="<?php echo $key->idTransaksi;?>" id="hapus" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-danger">Tidak</button>
                                    <input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                    <div id="edit<?php echo $key->idTransaksi; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                    <h4 class="modal-title">Edit Transaksi</h4>
                                </div>
                                <?php echo form_open("http://localhost/impalweb/index.php/controltransaksi/edit?idTransaksi='$key->idTransaksi'"); ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="control-label" for="judul">Tagihan</label>
                                        <input type="text" name="tagihan" class="form-control" value="<?php echo $key->tagihan;?>" id="tagihan" required>
                                    </div>
                                   <div class="form-group">
                                        <label class="control-label" for="judul">idDelivery</label>
                                        <input type="text" name="idDelivery" class="form-control" value="<?php echo $key->idDelivery;?>" id="idDelivery" required>
                                    </div>                                    
                                    <div class="form-group">
                                        <label class="control-label" for="panjang">Status</label>
                                        <input type="text" name="status" class="form-control" value="<?php echo $key->status;?>" id="status" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
                                    <input type="submit" class="btn btn-primary" name="edit" value="Edit">
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
              </div>
            </div>
            <div class="card-footer small text-muted">Tugas Impal</div>
          </div>

          <p class="small text-center text-muted my-5">
            <em>More tugas coming soon...</em>
          </p>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url()?>vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url()?>vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>

  </body>

</html>
