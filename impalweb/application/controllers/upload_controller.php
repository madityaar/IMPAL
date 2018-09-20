<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class upload_Controller extends CI_Controller {
public function __construct() {
parent::__construct();
}
public function custom_view(){
$this->load->view('custom_view', array('error' => ' ' ));
}
public function do_upload(){
$config = array(
'upload_path' => "./uploads/",
'allowed_types' => "rar|zip|pdf|doc|docx",
);
$this->load->library('upload', $config);
if($this->upload->do_upload())
{
$data = array('upload_data' => $this->upload->data());
$this->load->view('upload_success',$data);
}
else
{
$error = array('error' => $this->upload->display_errors());
$this->load->view('custom_view', $error);
}
}
}
?>