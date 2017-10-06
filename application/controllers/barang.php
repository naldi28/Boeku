<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Barang extends CI_Controller {
 
/*******
     | CRUD barang
     | controller barang view, create, update, delete
     | by g2tech
     ***********/
    public function __construct() {
        parent::__construct();
        $this->load->model('mbarang');
        $this->load->helper('form','url');
    }
//class fungsi awal ketika kita panggil controller barang
    public function index()
    {
        $data['title'] = 'CRUD CodeIgniter Studi Kasus Barang'; //judul title
        $data['qbarang'] = $this->mbarang->get_allbarang(); //model semua barang
 
        $this->load->view('vbarang',$data); //load views vbarang
 
    }
 
    public function form(){
        //ambil variabel URL
        $mau_ke                 = $this->uri->segment(3);
        $idu                    = $this->uri->segment(4);
         
 
        //ambil variabel dari form
        $id                     = addslashes($this->input->post('id'));
        $kode                   = addslashes($this->input->post('kode'));
        $nama                   = addslashes($this->input->post('nama'));
        $jenis                  = addslashes($this->input->post('jenis'));
        $keterangan             = addslashes($this->input->post('uraian'));
        $satuan                 = addslashes($this->input->post('satuan'));
        $harga                  = addslashes($this->input->post('harga'));
        $stok                   = addslashes($this->input->post('stok'));
 
//mengarahkan fungsi form sesuai dengan uri segmentnya
        if ($mau_ke == "add") {//jika uri segmentnya add
            $data['title'] = 'Tambah barang';
            $data['aksi'] = 'aksi_add';
            $this->load->view('vformbarang',$data);
        } else if ($mau_ke == "edit") {//jika uri segmentnya edit
            $data['qdata']  = $this->mbarang->get_barang_byid($idu);
            $data['title'] = 'Edit barang';
            $data['aksi'] = 'aksi_edit';
            $this->load->view('vformbarang',$data);
        } else if ($mau_ke == "aksi_add") {//jika uri segmentnya aksi_add sebagai fungsi untuk insert
            $data = array(
                'barcode'   => $kode,
                'nama_brg'  => $nama,
                'harga_brg' => $harga,
                'keterangan'=> $keterangan,
                'satuan'    => $satuan,
                'jenis'     => $jenis,
                'stok_brg'  => $stok
            );
            $this->mbarang->get_insert($data); //model insert data barang
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil di insert</div>"); //pesan yang tampil setalah berhasil di insert
            redirect('barang');
        } else if ($mau_ke == "aksi_edit") { //jika uri segmentnya aksi_edit sebagai fungsi untuk update
          $data = array(
                'barcode'   => $kode,
                'nama_brg'  => $nama,
                'harga_brg' => $harga,
                'keterangan'=> $keterangan,
                'satuan'    => $satuan,
                'jenis'     => $jenis,
                'stok_brg'  => $stok
            );
            $this->mbarang->get_update($id,$data); //modal update data barang
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil diupdate</div>"); //pesan yang tampil setelah berhasil di update
            redirect('barang');
        }
 
    }
    public function detail($id){ //fungsi detail barang
        $data['title'] = 'Detail Barang'; //judul title
        $data['qbarang'] = $this->mbarang->get_barang_byid($id); //query model barang sesuai id
 
        $this->load->view('vdetbarang',$data); //meload views detail barang
    }
    public function hapus($gid){ //fungsi hapus barang sesuai dengan id
 
        $this->mbarang->del_barang($gid);
        $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Barang berhasil dihapus</div>");
        redirect('barang');
    }
}
 

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */
?>