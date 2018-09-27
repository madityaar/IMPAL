class produk extends CI_Model
{
  // example of attributes
  private $idProduk ;
  private $namaProduk ;
  private $lebar ;
  private $panjang ;
  private $hargaSatuan ;


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
  public function getidProduk() { return $this->idProduk ; }
  public function namaProduk() { return $this->namaProduk ; }
  public function getlebar() { return $this->lebar ; }
  public function getpanjang() { return $this->panjang ; }
  public function gethargaSatuan() { return $this->hargaSatuan ; }
} // end of class

//_________________________
// in controller or view
  $this->load->model('Test') ; // if model is not loaded
  $params = 'titi' ;
  $r = new Test() ; // or $r = new Test ;
  $r->make($params) ;
