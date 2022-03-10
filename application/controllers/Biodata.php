<?php

class Biodata extends CI_controller{
    function bebas($nama,$alamat,$no_hp,$email,$sekolah){
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
    $data['nm']     = $this->input->post('nama');
    $data['alt']    = $this->input->post('alamat');
    $data['no_hp']  = $this->input->post('no_hp');
    $data['email']  = $this->input->post('email');
    $data['skl']    = $this->input->post('sekolah');

    $this->load->view('biodata',$data);
}
public function tampil_data(){
    $this->load->model('M_profile');
    $data['kelas'] = $this->M_profile->tampil_data()->result();
    $this->load->view('V_tampil_data_profile',$data);
  }
  public function tampil_data_siswa(){
    $this->load->model('M_siswa');
    $data['kelas'] = $this->M_siswa->tampil_data()->result();
    $this->load->view('V_tampil_siswa',$data);
  }
}
?>