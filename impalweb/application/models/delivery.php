class delivery extends CI_Model
{
  // example of attributes
  private $idDelivery ;
  private $noResi ;
  private $kurir ;
  private $tglKirim ;


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
  public function getidDelivery() { return $this->idDelivery ; }
  public function getnoResi() { return $this->noResi ; }
  public function getkurir() { return $this->kurir ; }
  public function gettglKirim() { return $this->tglKirim ; }
} // end of class

//_________________________
// in controller or view
  $this->load->model('Test') ; // if model is not loaded
  $params = 'titi' ;
  $r = new Test() ; // or $r = new Test ;
  $r->make($params) ;
