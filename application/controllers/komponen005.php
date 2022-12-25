<?php


defined('BASEPATH') or exit('No direct script access allowed');

class komponen005 extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('MKomponen005');
    }


    public function index()
    {
        $data['isi'] = $this->MKomponen005->getdb();
        $this->load->view('formview', $data);
    }
    public function tambah()
    {
        return  $this->load->view('tambahview');
    }
    public function prosestambah()
    {

        $merek_005 = $this->input->POST("txtmerek");
        $kapasitas_005 = $this->input->POST("txtkapasitas");
        $harga_005 = $this->input->POST("txtharga");
        $jenis_005 = $this->input->POST("txtjenis");

        $data_input = [
            'merek_005' => $merek_005,
            'kapasitas_005' => $kapasitas_005,
            'harga_005' => $harga_005,
            'jenis_005' => $jenis_005
        ];
        $simpan = $this->MKomponen005->add($data_input);
        redirect('komponen005/index');
    }
    public function hapus($id)
    {
        $this->MKomponen005->delete($id);
        redirect('komponen005/index');
    }
    public function edit($id)
    {
        $data['isi'] = $this->MKomponen005->getOne($id);
        return $this->load->view('Editview', $data);
    }
    public function proses_edit()
    {
        $id = $this->input->POST("txtid");
        $merek_005 = $this->input->POST("txtmerek");
        $kapasitas_005 = $this->input->POST("txtkapasitas");
        $harga_005 = $this->input->POST("txtharga");
        $jenis_005 = $this->input->POST("txtjenis");

        $data_edit = [
            'merek_005' => $merek_005,
            'kapasitas_005' => $kapasitas_005,
            'harga_005' => $harga_005,
            'jenis_005' => $jenis_005
        ];
        $this->MKomponen005->editData($id, $data_edit);
        redirect('komponen005/index');
    }
    public function home()
    {
        return  $this->load->view('kelasHome');
    }
}
