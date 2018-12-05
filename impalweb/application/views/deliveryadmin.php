<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Delivery - Admin</title>

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
              <a class="nav-link" href="http://localhost/impalweb/index.php/controldelivery/">Produk
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/impalweb/index.php/controltransaksi/">Transaksi</a>
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
              Produk</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID Produk</th>
                      <th>Nama Produk</th>
                      <th>kurir</th>
                      <th>tgl_kirim</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
  <?php
  foreach ($data as $key):
  ?>
  <tr>
    <td><?php echo $key->idDelivery; ?></td>
    <td><?php echo $key->no_resi; ?></td>
    <td><?php echo $key->kurir; ?></td>
    <td><?php echo $key->tgl_kirim; ?></td>
    <td>
       <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edit<?php echo $key->idDelivery; ?>"><i class="glyphicon glyphicon-pencil"></i></button>
        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete<?php echo $key->idDelivery; ?>"><i class="glyphicon glyphicon-trash"></i></button>
    </td>

      
  </tr>
                  

                      <div id="delete<?php echo $key->idDelivery; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                    <h4 class="modal-title">Anda Ingin Menghapus?</h4>
                                    <?php echo form_open("http://localhost/impalweb/index.php/controldelivery/hapus?idDelivery='$key->idDelivery'"); ?>
                                    <input type="hidden" name="hapus" class="form-control" value="<?php echo $key->idDelivery;?>" id="hapus" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-danger">Tidak</button>
                                    <input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                    <div id="edit<?php echo $key->idDelivery; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                    <h4 class="modal-title">Edit Delivery</h4>
                                </div>
                                <?php echo form_open("http://localhost/impalweb/index.php/controldelivery/edit?idDelivery='$key->idDelivery'"); ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="control-label" for="judul">Nama Produk</label>
                                        <input type="text" name="no_resi" class="form-control" value="<?php echo $key->no_resi;?>" id="no_resi" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="kurir">kurir</label>
                                        <input type="text" name="kurir" class="form-control" value="<?php echo $key->kurir;?>" id="kurir" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="tgl_kirim">tgl_kirim</label>
                                        <input type="text" name="tgl_kirim" class="form-control" value="<?php echo $key->tgl_kirim;?>" id="tgl_kirim" required>
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



                    <div id="tambahkan" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                    <h4 class="modal-title">Tambah Produk</h4>
                                </div>
                                <?php echo form_open("http://localhost/impalweb/index.php/controldelivery/tambah"); ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="control-label" for="judul">Nama Produk</label>
                                        <input type="text" name="no_resi" class="form-control" id="no_resi" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="harga">kurir</label>
                                        <input type="text" name="kurir" class="form-control" id="kurir" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="deskripsi">tgl_kirim</label>
                                        <input type="text" name="tgl_kirim" class="form-control" id="tgl_kirim" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="hargaSatuan">Harga Satuan</label>
                                        <input type="text" name="hargaSatuan" class="form-control" id="hargaSatuan" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
                                    <input type="submit" class="btn btn-primary" name="tambah" value="tambah">
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
               <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahkan">TAMBAH</button></a>
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
