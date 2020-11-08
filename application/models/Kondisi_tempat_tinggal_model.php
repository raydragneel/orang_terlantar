<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Kondisi_tempat_tinggal_model extends CI_Model
{
    protected $table = 'kondisi_tempat_tinggal';
    protected $kondisi_tempat_tinggal_nama = 'kondisi_tempat_tinggal_nama';
    function __construct()
    {
        parent::__construct();
    }
    
    public function filter($search, $limit, $start, $order_field, $order_ascdesc){
        $this->db->like($this->kondisi_tempat_tinggal_nama, $search); // Untuk menambahkan query where LIKE
        $this->db->order_by($order_field, $order_ascdesc); // Untuk menambahkan query ORDER BY
        $this->db->limit($limit, $start); // Untuk menambahkan query LIMIT
        return $this->db->get($this->table)->result_array(); // Eksekusi query sql sesuai kondisi diatas
    }
    public function count_all(){
        return $this->db->count_all($this->table); // Untuk menghitung semua data siswa
    }
    public function count_filter($search){
        $this->db->like($this->kondisi_tempat_tinggal_nama, $search); // Untuk menambahkan query where OR LIKE
        return $this->db->get($this->table)->num_rows(); // Untuk menghitung jumlah data sesuai dengan filter pada textbox pencarian
    }
    
    /*
     * Get kondisi_tempat_tinggal by kondisi_tempat_tinggal_id
     */
    function get_kondisi_tempat_tinggal($kondisi_tempat_tinggal_id)
    {
        return $this->db->get_where($this->table,array('kondisi_tempat_tinggal_id'=>$kondisi_tempat_tinggal_id))->row_array();
    }
    
    /*
     * Get all kondisi_tempat_tinggal count
     */
    function get_all_kondisi_tempat_tinggal_count()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
        
    /*
     * Get all kondisi_tempat_tinggal
     */
    function get_all_kondisi_tempat_tinggal($params = [])
    {
        $this->db->order_by('kondisi_tempat_tinggal_id', 'desc');
        if(isset($params) && !empty($params))
        {
          $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get($this->table)->result_array();
    }
        
    /*
     * function to add new kondisi_tempat_tinggal
     */
    function add_kondisi_tempat_tinggal($params)
    {
        $this->db->insert($this->table,$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update kondisi_tempat_tinggal
     */
    function update_kondisi_tempat_tinggal($kondisi_tempat_tinggal_id,$params)
    {
        $this->db->where('kondisi_tempat_tinggal_id',$kondisi_tempat_tinggal_id);
        return $this->db->update($this->table,$params);
    }
    
    /*
     * function to delete kondisi_tempat_tinggal
     */
    function delete_kondisi_tempat_tinggal($kondisi_tempat_tinggal_id)
    {
        return $this->db->delete($this->table,array('kondisi_tempat_tinggal_id'=>$kondisi_tempat_tinggal_id));
    }
    function seed()
    {
        $data = [
            ["kondisi_tempat_tinggal_nama" => "BAIK"],
            ["kondisi_tempat_tinggal_nama" => "RUSAK RINGAN"],
            ["kondisi_tempat_tinggal_nama" => "RUSAK BERAT"],
        ];

        $this->db->insert_batch($this->table, $data);
    }
}