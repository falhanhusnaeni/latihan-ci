<?php

class Hobby extends CI_Controller{

  function Sepakbola(){
      $this->load->view('v_data_hobby');

  }

  function Volly(){
      $this->load->view('v_data_olahraga');
  }

   function Index(){
       echo "Index";
   }

   function biodata($nama,$alamat,$no_hp,$email,$sekolah){
    $data = [
                'nm'    => $nama,   
                'alt'   => $alamat,   
                'no_hp' => $no_hp,   
                'email' => $email,   
                'skl'   => $sekolah,   
            ];
   
    $this->load->view('biodata',$data);
}
function tambah_data(){
    $this->load->view('form_tambah_data');
}
function action_tambah_data(){
    $data['nm']      = $this->input->post('nama');
    $data['alt']     = $this->input->post('alamat');
    $data['no_hp']   = $this->input->post('no_hp');
    $data['email']   = $this->input->post('email');
    $data['skl']     = $this->input->post('sekolah');

    $this->load->view('biodata',$data);

}
}
?>