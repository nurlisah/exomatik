<?php
Class A_generate extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('M_generate');
    }
    /*function index($id){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'EXPLORASI SOLIDARITAS MAHASISWA TEHNIK INFORMATIKA',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'NIM',1,0);
        $pdf->Cell(85,6,'NAMA MAHASISWA',1,0);
        $pdf->Cell(27,6,'NO HP',1,0);
        $pdf->Cell(25,6,'TANGGAL LHR',1,1);
        $pdf->SetFont('Arial','',10);
        $daftar = $this->M_generate->ambil('table_pendaftaran',array('id_pendaftaran'=>$id))->result();
        foreach ($daftar as $row){
            $pdf->Cell(20,6,$row->id_pendaftaran,1,0);
            $pdf->Cell(85,6,$row->nama_lengkap,1,0);
            $pdf->Cell(27,6,$row->nama_panggilan,1,0);
            $pdf->Cell(25,6,$row->angkatan,1,1); 
        }
        $pdf->Output();
    }*/
    public function cobapdf($id)
    {
        // Muat library PDF
        $this->load->library('M_pdf');
        // Buat HTML atau load dari view
        $m_pdf = $this->m_pdf->load();
        // Lakukan pengerjaan PDF
        $data['daftar'] = $this->M_generate->ambil('table_pendaftaran',array('id_pendaftaran'=>$id))->result();
        $this->load->view('V_generate',$data);
        //$m_pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822));
        //$m_pdf->WriteHTML($this->load->view('V_generate',$data,true));
        //$m_pdf->Output(date('Ymd').date('hms').'.pdf', 'I');

    }
}