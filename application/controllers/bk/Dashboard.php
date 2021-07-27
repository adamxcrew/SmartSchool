<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model BK
        $this->load->model('bk');
       

        //cek session dan level user
        if($this->bk->is_role() != "bk"){
            redirect("loginbk");
        }
    }

    public function index()
    {
        
        
        $this->load->model('Bk');
        $data = array(
           
            'data_profil' => $this->Bk->get_profil()->result()
        );
        $data['log_login'] = $this->db->query("SELECT * FROM log_login ORDER BY id DESC LIMIT 13");
        
        $this->load->view('_partials/header');
        $this->load->view('_partials/menubk');
        $this->load->view('bk/dashboard', $data);       
        $this->load->view('_partials/footer');
    }
    




    public function datapelanggaran()
    {
        $this->load->model('Bk');

        $data = array(
            'kasus'  => $this->Bk->get_pelanggaran()->result(),
            'datasiswa'  => $this->Bk->getdatasiswa()
        );
        $this->load->view('_partials/header');
        $this->load->view('_partials/menubk');
        $this->load->view('bk/datapelanggaran', $data);
        $this->load->view('_partials/footer');
      
    }

    public function simpanpelanggaran()
    {
       $this->load->model('bk');
       {
        $data['siswa_id']  = $this->input->post('siswa_id');
        $data['nama_kasus']   = $this->input->post('nama_kasus');
        $data['poin']         = $this->input->post('poin');
    
		$this->load->view('bk/dashboard',$data);
	  }
        $this->bk->simpan_pelanggaran($data);
        redirect('bk/dashboard/datapelanggaran');
    
    } 

    public function hapuspelanggaran($id_kasus)
    {
      $this->load->model('bk');
    
       $id['id_kasus'] = $this->uri->segment(4);
       $this->bk->hapus_pelanggaran($id);
       redirect('bk/dashboard/datapelanggaran');
    }






    public function kehadiransiswa()
    {
          $this->load->model('m_master');

          $data = array(
              'datakehadiransiswa' => $this->m_master->get_datakehadiransiswa()->result()
          );
          
          $this->load->view('_partials/header');
          $this->load->view('_partials/menubk');
          $this->load->view('bk/datakehadiransiswa', $data);
          $this->load->view('_partials/footer');
    }

    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('loginbk');
    }
    
  


    public function exportpresensisiswa(){



        $this->load->model('Exportabsensiswa');
        // Load plugin PHPExcel nya
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';
        
        // Panggil class PHPExcel nya
        $excel = new PHPExcel();
        // Settingan awal fil excel
        $excel->getProperties()->setCreator('Hainur Cahya Utama')
                     ->setLastModifiedBy('Hainur Cahya Utama')
                     ->setTitle("Data Siswa")
                     ->setSubject("Siswa")
                     ->setDescription("Laporan Presensi Siswa")
                     ->setKeywords("Data Siswa");
        // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
        $style_col = array(
            'font' => array('bold' => true), // Set font nya jadi bold
            'alignment'  => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
            'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
          ),
          'borders'  => array(
            'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
          )
        );

        // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
        $style_row      = array(
            'alignment' => array(
            'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
          ),
          'borders' => array(
            'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
          )
        );
    
        // Buat header tabel nya pada baris ke 3
        $excel->setActiveSheetIndex(0)->setCellValue('A1', "Nama Siswa"); // Set kolom A3 dengan tulisan "NO"
        $excel->setActiveSheetIndex(0)->setCellValue('B1', "Tanggal Presensi");
        $excel->setActiveSheetIndex(0)->setCellValue('C1', "Masuk");
        $excel->setActiveSheetIndex(0)->setCellValue('D1', "Pulang");



        // Apply style header yang telah kita buat tadi ke masing-masing kolom header
        $excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D1')->applyFromArray($style_col);


        // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
        $siswa = $this->Exportabsensiswa->view();
        $numrow = 2; // Set baris pertama untuk isi tabel adalah baris ke 4
        foreach($siswa as $data){ // Lakukan looping pada variabel siswa
          $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $data->nama_siswa);
          $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->tanggalpresensi);
          $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->stempel_presensi);
          $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->out_presensi);

          

          
          // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
          $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);



          
          $numrow++; // Tambah 1 setiap kali looping
        }
        // Set width kolom
        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(45); // Set width kolom A
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(20); // Set width kolom B
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(20); // Set width kolom B
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom B
  

        
        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
        // Set orientasi kertas jadi LANDSCAPE
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
        // Set judul file excel nya
        $excel->getActiveSheet(0)->setTitle("Rekap Presensi");
        $excel->setActiveSheetIndex(0);
        // Proses file excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Rekap Presensi Siswa.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $write->save('php://output');
      }



}
