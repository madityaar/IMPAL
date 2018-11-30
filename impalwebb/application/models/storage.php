class storage extends CI_Model
{
  // example of attributes
  private $idStorage ;
  private $file ;
  private $idUser ;

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
  public function getidStorage() { return $this->idStorage ; }
  public function getfile() { return $this->file ; }
  public function getidUser() { return $this->idUser ; }
} // end of class

//_________________________
// in controller or view
  $this->load->model('Test') ; // if model is not loaded
  $params = 'titi' ;
  $r = new Test() ; // or $r = new Test ;
  $r->make($params) ;
