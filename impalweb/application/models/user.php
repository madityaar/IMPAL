class user extends CI_Model
{
  // example of attributes
  private $idUser ;
  private $username ;
  private $password ;
  private $idAlamat ;
  private $firstName ;
  private $lastName ;
  private $noTelp ;

  // base constructor
  public function __construct()
  {
    parent::__construct();

  }

  // my personnal "constructor"
  public function make($params)
  {

  }
   // getter and setter
  public function getidUser() { return $this->idUser ; }
  public function getusername() { return $this->username ; }
  public function getpassword() { return $this->password ; }
  public function getidAlamat() { return $this->idAlamat ; }
  public function getfirstName() { return $this->firstName ; }
  public function getlastName() { return $this->lastName ; }
  public function getnoTelp() { return $this->noTelp ; }
} // end of class

//_________________________
// in controller or view
  $this->load->model('Test') ; // if model is not loaded
  $params = 'titi' ;
  $r = new Test() ; // or $r = new Test ;
  $r->make($params) ;
