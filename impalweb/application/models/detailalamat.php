class detailalamat extends CI_Model
{
  // example of attributes
  private $idAlamat ;
  private $Alamat ;
  private $Provinsi ;
  private $KodePos ;
  private $NomerTelepon ;
  private $Perusahaan ;
  private $Email ;

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
  public function getidAlamat() { return $this->idAlamat ; }
  public function getAlamat() { return $this->Alamat ; }
  public function getProvinsi() { return $this->Provinsi ; }
  public function getKodePos() { return $this->KodePos ; }
  public function getNomerTelepon() { return $this->NomerTelepon ; }
  public function getPerusahaan() { return $this->Perusahaan ; }
  public function getEmail() { return $this->Email ; }
} // end of class

//_________________________
// in controller or view
  $this->load->model('Test') ; // if model is not loaded
  $params = 'titi' ;
  $r = new Test() ; // or $r = new Test ;
  $r->make($params) ;
