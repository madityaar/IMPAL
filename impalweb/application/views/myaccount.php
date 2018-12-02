<?php include 'header.php'?>

<div class="sidenav">
  <a href="#">My Account</a>
  <a href="#">My Order</a>
</div>

<div class="main container">
    
    
    <h1>Personal Info</h1>
    <div class='datadiri'>
        <div>First Name: <?php echo $this->session->userdata('FName')?></div>
        <div>Last Name: <?php echo $this->session->userdata('LName')?></div>
        <div>No Telepon: <?php echo $this->session->userdata('noTelp')?></div>
        <div>Email: <?php echo $this->session->userdata('email')?></div>
    </div>
    <h1> Billing Address</h1>
    <?php if($this->session->userdata('alamat')==0){
    		echo "<button>Tambahkan Alamat</button>";
    }?>
</div>

<?php include 'footer.php'?>