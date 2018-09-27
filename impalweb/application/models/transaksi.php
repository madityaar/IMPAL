class transaksi extends CI_Model
{
  // example of attributes
  private $idTransaksi ;
  private $idUser ;
  private $idDelivery ;
  private $tagihan ;
  private $payment ;
  private $status ;

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
  public function getidUser() { return $this->idUser ; }
  public function getidDelivery() { return $this->idDelivery ; }
  public function gettagihan() { return $this->tagihan ; }
  public function getpayment() { return $this->payment ; }
  public function getstatus() { return $this->status ; }
} // end of class

//_________________________
// in controller or view
  $this->load->model('Test') ; // if model is not loaded
  $params = 'titi' ;
  $r = new Test() ; // or $r = new Test ;
  $r->make($params) ;
