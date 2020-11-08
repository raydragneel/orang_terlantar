<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Agama_model extends CI_Model
{
    protected $table = 'agama';
    protected $agama_nama = 'agama_nama';
    function __construct()
    {
        parent::__construct();
    }
    
    public function filter($search, $limit, $start, $order_field, $order_ascdesc){
        $this->db->like($this->agama_nama, $search); // Untuk menambahkan query where LIKE
        $this->db->order_by($order_field, $order_ascdesc); // Untuk menambahkan query ORDER BY
        $this->db->limit($limit, $start); // Untuk menambahkan query LIMIT
        return $this->db->get($this->table)->result_array(); // Eksekusi query sql sesuai kondisi diatas
    }
    public function count_all(){
        return $this->db->count_all($this->table); // Untuk menghitung semua data siswa
    }
    public function count_filter($search){
        $this->db->like($this->agama_nama, $search); // Untuk menambahkan query where OR LIKE
        return $this->db->get($this->table)->num_rows(); // Untuk menghitung jumlah data sesuai dengan filter pada textbox pencarian
    }
    
    /*
     * Get agama by agama_id
     */
    function get_agama($agama_id)
    {
        return $this->db->get_where($this->table,array('agama_id'=>$agama_id))->row_array();
    }
    
    /*
     * Get all agama count
     */
    function get_all_agama_count()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
        
    /*
     * Get all agama
     */
    function get_all_agama($params = [])
    {
        $this->db->order_by('agama_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get($this->table)->result_array();
    }
        
    /*
     * function to add new agama
     */
    function add_agama($params)
    {
        $this->db->insert($this->table,$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update agama
     */
    function update_agama($agama_id,$params)
    {
        $this->db->where('agama_id',$agama_id);
        return $this->db->update($this->table,$params);
    }
    
    /*
     * function to delete agama
     */
    function delete_agama($agama_id)
    {
        return $this->db->delete($this->table,array('agama_id'=>$agama_id));
    }
    function seed()
    {
        $data = [
            ["agama_nama" => "Islam"],
            ["agama_nama" => "Protestan"],
            ["agama_nama" => "Katolik"],
            ["agama_nama" => "Hindu"],
            ["agama_nama" => "Buddha"],
            ["agama_nama" => "Konghucu"],
            ["agama_nama" => "Tidak Punya"],
        ];

        $this->db->insert_batch($this->table, $data);
    }
}