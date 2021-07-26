<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('guru');
        //cek session dan level user
        if($this->guru->is_role() != "guru"){
            redirect("loginguru");
        }
    }

    public function index()
    {
        
        $this->load->model('Guru');
        $data = array(
            'data_profil' => $this->Guru->get_profil()->result()
        );
        $this->load->view('_partials/header');
        $this->load->view('_partials/menu_guru');
        $this->load->view('guru/dashboard', $data);       
        $this->load->view('_partials/footer');
    }


    public function kehadiranguru()
    {
          $this->load->model('Guru');

          $data = array(
              'datakehadiranguru' => $this->Guru->get_datakehadiranguru()->result()
          );
          
          $this->load->view('_partials/header');
          $this->load->view('_partials/menu_guru');
          $this->load->view('guru/datakehadiranguru', $data);
          $this->load->view('_partials/footer');
    }




    public function updatekehadiranguru()
    {
    $this->load->model('guru');
    
    $id_kehadiran['id_kehadiran']    = $this->input->post("id_kehadiran");
    $out_presensi                = $this->input->post('out_presensi');
    $data = array(
        'out_presensi'          =>$out_presensi
    
    );
    
    $this->guru->update_kehadiranguru($data, $id_kehadiran);
    
    redirect('guru/dashboard/kehadiranguru');
    }
    





    public function simpankehadiranguru()
    {


        $this->load->model('Guru');
  
        {
        $data['id_user']            = $this->session->userdata('user_id'); 
        $data['waktu_presensi']          = $this->input->post('waktu_presensi');
        $data['nama_guru']          = $this->input->post('nama_guru');
        $data['stempel_presensi']   = $this->input->post('stempel_presensi');
        $data['tanggalpresensi']    = $this->input->post('tanggalpresensi');
        $data['jenis_presensi']     = $this->input->post('jenis_presensi');
        $data['status_presensi']    = $this->input->post('status_presensi');
        $this->load->view('guru/dashboard',$data);
        $this->Guru->simpan_kehadiranguru($data);
        redirect('guru/dashboard/kehadiranguru');
        } 
    }








    public function guruelearning()
    {
          $this->load->model('Guru');

          $data = array(
              'dataelearningtugas' => $this->Guru->get_dataelearning()->result(),
              'datakelas'  => $this->Guru->get_rolekelas()->result()
          );
          
          $this->load->view('_partials/header');
          $this->load->view('_partials/menu_guru');
          $this->load->view('guru/elearningguru', $data);
          $this->load->view('_partials/footer');
    }



    public function simpandatatugas()
    {


        $this->load->model('Guru');
  
        {
        $data['id_user']            = $this->session->userdata('user_id'); 
        $data['nama_guru']          = $this->session->userdata('user_nama'); 
        $data['tugas_create']       = $this->input->post('tugas_create');
        $data['tugas_nama']         = $this->input->post('tugas_nama');
        $data['tugas_keterangan']   = $this->input->post('tugas_keterangan');
        $data['kelas']              = $this->input->post('kelas');
        $data['tugas_waktu']        = $this->input->post('tugas_waktu');

        $this->load->view('guru/dashboard',$data);
        $this->Guru->simpan_datatugas($data);
        redirect('guru/dashboard/guruelearning');
        } 
    }



    public function hapusdatatugas($id_elearningtugas)
    {
      $this->load->model('Guru');
       $id['id_elearningtugas'] = $this->uri->segment(4);
       $this->Guru->hapus_datatugas($id);
        echo 'Deleted successfully.';

       redirect('guru/dashboard/guruelearning');
    }


















    






    public function datasiswa()
    {
        $this->load->model('m_master');
        $data        = array(
            'datakelas' => $this->m_master->get_datasiswa()->result()
        );
        
        $this->load->view('_partials/header');
        $this->load->view('_partials/menu');
        $this->load->view('admin/datasiswa', $data);
        $this->load->view('_partials/footer');
    }












    public function logout()
    {
        
        $this->session->sess_destroy();
        redirect('loginguru');
    }
    



}

