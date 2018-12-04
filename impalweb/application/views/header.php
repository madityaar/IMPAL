
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Percetakan!</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>css/business-frontpage.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">

  </head>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Login</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<form action="<?php echo base_url('Login/aksi_login'); ?>" method="post">
				<table>
          <?php if ($this->session->userdata("warning")==1){
              echo" <span style='color:red'> Username atau Password Salah</span> ";};
            ?>
					<tr>  
						<td>Username</td>
						<td><input type="text" name="username"></td>
					</tr>
					<tr class="password">
						<td>Password</td>
						<td ><input type="password" name="password"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Login"></td>
					</tr>
				</table>
			</form>
		  </div>
		  <div class="modal-footer">
			<div>Belum punya id? </div><a href="<?php echo base_url('Registration'); ?>">Daftar Sekarang!</a>
		  </div>
		</div>
	  </div>
	</div>
  
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">Percetakan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url(); ?>">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <?php if ($this->session->has_userdata("nama")) {
                echo '<li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    '.$this->session->userdata("nama").'
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="'.base_url().'Myaccount">My Account</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="'.base_url().'Login/logout">Logout</a>
                  </div>
				  
                </li>';
             }else{
               echo '<li class="nav-item">

                <a  class="nav-link" data-toggle="modal" data-target="#loginModal">Login</a>
               </li>';
             }?>
            </li>
          </ul>
        </div>
      </div>
    </nav>