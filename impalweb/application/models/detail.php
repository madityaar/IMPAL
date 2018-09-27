class detail extends CI_Model
{
  // example of attributes
  private $idTransaksi ;
  private $idStorage ;
  private $idProduk ;
  private $quantity ;

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
  public function getidTransaksi() { return $this->idTransaksi ; }
  public function getidStorage() { return $this->idStorage ; }
  public function getidProduk() { return $this->idProduk ; }
  public function getquantity() { return $this->quantity ; }
} // end of class

//_________________________
// in controller or view
  $this->load->model('Test') ; // if model is not loaded
  $params = 'titi' ;
  $r = new Test() ; // or $r = new Test ;
  $r->make($params) ;
