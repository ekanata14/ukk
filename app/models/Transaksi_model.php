<?php

class Transaksi_model{
    private $table = 'transaksi';
    private $pembayaran = 'pembayaran';
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getAllTransaksi(){
        $this->db->query("SELECT * FROM $this->table INNER JOIN $this->pembayaran ON $this->table.pembayaran_id = $this->pembayaran.id");
        return $this->db->resultAll();
    }

    public function getTransaksiBySiswaPembayaranId($id, $pembayaran_id){
        $this->db->query("SELECT * FROM $this->table WHERE siswa_id = :id_siswa AND pembayaran_id = :pembayaran_id");
        $this->db->bind("id_siswa", $id);
        $this->db->bind("pembayaran_id", $pembayaran_id);
        return $this->db->resultAll();
    }

    public function countTotalPembayaranSiswaById($id){
        $this->db->query("SELECT sum(nominal) AS total FROM $this->table INNER JOIN $this->pembayaran ON $this->table.pembayaran_id = $this->pembayaran.id WHERE siswa_id = :siswa_id");
        $this->db->bind("siswa_id", $id);
        return $this->db->result();
    }

    public function transaksi($data){
        $this->db->query("INSERT INTO $this->table VALUES(NULL, :tanggal_bayar, :bulan_dibayar, :tahun_dibayar, :siswa_id, :petugas_id, :pembayaran_id)");
        $this->db->bind('tanggal_bayar', date("Y-m-d h:i:s"));
        $this->db->bind('bulan_dibayar', $data['bulan_dibayar']);
        $this->db->bind('tahun_dibayar', $data['tahun_dibayar']);
        $this->db->bind('siswa_id', $data['siswa_id']);
        $this->db->bind('petugas_id', $data['petugas_id']);
        $this->db->bind('pembayaran_id', $data['pembayaran_id']);
        return $this->db->rowCount();
    }
}