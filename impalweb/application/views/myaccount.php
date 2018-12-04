<?php include 'header.php'?>

<div class="sidenav">
    <a href="<?php echo base_url()?>Myaccount">My Account</a>
    <a href="<?php echo base_url()?>Myaccount/Order">My Order</a>
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
    <?php if($this->session->userdata('Alamat')=='false'){
    		echo "<a id='tambahalamat'class='btn btn-primary' href='".base_url()."/Alamat'>Tambahkan Alamat</a>";
        }
            elseif ($this->session->userdata('Alamat')!='false'){
                echo 
                "<div class='billing'>
                    <div>Alamat : ".$this->session->userdata('Alamat') ."</div>
                    <div>Kode Pos : ".$this->session->userdata('Kodepos') . "</div>
                    <div>No Telepon : ".$this->session->userdata('noTelp') ."</div>
                    <div>Perusahaan : ". $this->session->userdata('Perusahaan')."</div>
                </div>
                <a class='btn btn-primary logout' href='".base_url()."Login/logout'>Logout</a>";
            }
    ?>
</div>

<?php include 'footer.php'?>