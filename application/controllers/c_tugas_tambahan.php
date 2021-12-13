<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_tugas_tambahan extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $x['tahun'] = $this->db->query("SELECT DISTINCT YEAR(tanggal) tahun FROM opmt_tugas_tambahan")->result_array();
        $this->load->view('tugas_tambahan/v_table_skp', $x);
    }

    public function bawahan() {
        $x['tahun'] = $this->db->query("SELECT distinct year(tanggal) tahun FROM opmt_realisasi_tugas_tambahan")->result_array();
        $this->load->view('tugas_tambahan/v_table_skp_bawahan', $x);
    }

    public function ajax_list() {
        $this->load->model('M_tugas_tambahan', 'tugas_tambahan');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        //'kode_bank','nomor_rekening','nomor_akad','tgl_akad','nama','nik','nomor_sp','tgl_terbit_sp','nilai_dijamin','waktu_kirim','log_message'
        $list = $this->tugas_tambahan->get_datatables($bulan, $tahun);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $dt) {
            $no++;

            $link_edit = '<a href="javascript:void(0)" onclick="ubah_tugas_tambahan(' . $dt->id_opmt_tugas_tambahan . ')">
<i class="fa fa-pencil text-success"/>
</a>';
            $link_hapus = '<a href="javascript:void(0)" onclick="hapus_tugas_tambahan(' . $dt->id_opmt_tugas_tambahan . ')">
<i class="fa fa-trash text-danger"/>
</a>';
            $row = array();
            $row[] = $no;
            $row[] = date('d M Y', strtotime($dt->tanggal));
            $row[] = $dt->tugas_tambahan;
            $row[] = $dt->target_kuantitas . ' ' . $dt->satuan_kuantitas;
            $row[] = $link_edit;
            $row[] = $link_hapus;


            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->tugas_tambahan->count_all($bulan, $tahun),
            "recordsFiltered" => $this->tugas_tambahan->count_filtered($bulan, $tahun),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

}
