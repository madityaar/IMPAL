<?php
class M_user extends CI_Model
{
  // example of attributes
  private $idUser ;
  private $username ;
  private $password ;
  private $idAlamat ;
  private $firstName ;
  private $lastName ;
  private $email; 
  private $telepon;

  // base constructor
  public function __construct()
  {
    parent::__construct();

  }

  // my personnal "constructor"
  public function make($u, $pass, $e, $fn, $ln, $t)
  {
    $this->username =$u;
    $this->password = $pass;
    $this->firstName =$fn;
    $this->lastName = $ln;
    $this->email = $e;
	$this->telepon = $t;
  }
   // getter and setter
  public function getidUser() { return $this->idUser ; }
  public function getusername() { return $this->username ; }
  public function getpassword() { return $this->password ; }
  public function getidAlamat() { return $this->idAlamat ; }
  public function getfirstName() { return $this->firstName ; }
  public function getlastName() { return $this->lastName ; }
  public function getnoTelp() { return $this->noTelp ; }
  public function registration($data){
	  $sql = "INSERT INTO user (username,email,password,firstName,lastName,no_telp) VALUES('".$data['username']."','".$data['email']."','".$data['password']."','".$data['firstname']."','".$data['lastname']."','".$data['telepon']."')";
	  $this->db->query($sql);
  }
  
	public function isEmailExist($email) {
		$this->db->where('email', $email);
		$query = $this->db->get('user');

		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	public function isUserExist($user) {
		$this->db->where('username', $user);
		$query = $this->db->get('user');

		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
} // end of class

//_________________________
// in controller or view
  /*$this->load->model('Test') ; // if model is not loaded
  $params = 'titi' ;
  $r = new Test() ; // or $r = new Test ;
  $r->make($params) ;*/
?>