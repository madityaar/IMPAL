<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class delivery extends CI_Model{
public function get_data()
  {
    $query = $this->db->order_by('idDelivery','DESC')->get('delivery');
    return $query->result();
  }
  public function save_data($data)
  {
    $no_resi=$data['no_resi'];
    $kurir=$data['kurir'];
    $tgl_kirim=$data['tgl_kirim'];
    $this->db->query("Insert into delivery (no_resi,kurir,tgl_kirim) values('$no_resi','$kurir','$tgl_kirim')");
      header('Location: http://localhost/impalweb/index.php/controldelivery/');

  }
  public function getdelivery(){
    return $this->db->query("select * from delivery")->result();
  }
  public function delete_data($idDelivery){
     $delete=$this->db->query("delete from delivery where idDelivery=$idDelivery");
        if ($delete){
          header('Location: http://localhost/impalweb/index.php/controldelivery/');
            return TRUE;
        }else{
              header('Location: http://localhost/impalweb/index.php/controldelivery/');
            return FALSE;
        }
    }
    public function edit_data($data,$hafis){
    $no_resi=$data['no_resi'];
    $kurir=$data['kurir'];
    $tgl_kirim=$data['tgl_kirim'];
        //$this->db->where('judul', $data['judul']);
        $update = $this->db->query("Update delivery set no_resi='$no_resi',kurir='$kurir', tgl_kirim='$tgl_kirim' where idDelivery=$hafis ;");
        if ($update){
                 header('Location: http://localhost/impalweb/index.php/controldelivery/');
            return TRUE;
        }else{
                   header('Location: http://localhost/impalweb/index.php/controldelivery/');
            return FALSE;
        }
  }
}
?>