<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Kondisi_ot_model extends CI_Model
{
    protected $table = 'kondisi_ot';
    protected $kondisi_ot_nama = 'kondisi_ot_nama';
    function __construct()
    {
        parent::__construct();
    }
    
    public function filter($search, $limit, $start, $order_field, $order_ascdesc){
        $this->db->like($this->kondisi_ot_nama, $search); // Untuk menambahkan query where LIKE
        $this->db->order_by($order_field, $order_ascdesc); // Untuk menambahkan query ORDER BY
        $this->db->limit($limit, $start); // Untuk menambahkan query LIMIT
        return $this->db->get($this->table)->result_array(); // Eksekusi query sql sesuai kondisi diatas
    }
    public function count_all(){
        return $this->db->count_all($this->table); // Untuk menghitung semua data siswa
    }
    public function count_filter($search){
        $this->db->like($this->kondisi_ot_nama, $search); // Untuk menambahkan query where OR LIKE
        return $this->db->get($this->table)->num_rows(); // Untuk menghitung jumlah data sesuai dengan filter pada textbox pencarian
    }
    
    /*
     * Get kondisi_ot by kondisi_ot_id
     */
    function get_kondisi_ot($kondisi_ot_id)
    {
        return $this->db->get_where($this->table,array('kondisi_ot_id'=>$kondisi_ot_id))->row_array();
    }
    
    /*
     * Get all kondisi_ot count
     */
    function get_all_kondisi_ot_count()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
        
    /*
     * Get all kondisi_ot
     */
    function get_all_kondisi_ot($params = [])
    {
        $this->db->order_by('kondisi_ot_id', 'desc');
        if(isset($params) && !empty($params))
        {
          $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get($this->table)->result_array();
    }
        
    /*
     * function to add new kondisi_ot
     */
    function add_kondisi_ot($params)
    {
        $this->db->insert($this->table,$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update kondisi_ot
     */
    function update_kondisi_ot($kondisi_ot_id,$params)
    {
        $this->db->where('kondisi_ot_id',$kondisi_ot_id);
        return $this->db->update($this->table,$params);
    }
    
    /*
     * function to delete kondisi_ot
     */
    function delete_kondisi_ot($kondisi_ot_id)
    {
        return $this->db->delete($this->table,array('kondisi_ot_id'=>$kondisi_ot_id));
    }
    function seed()
    {
        $data = [
            ["kondisi_ot_nama" => "BISA MANDIRI"],
            ["kondisi_ot_nama" => "TIDAK BISA MANDIRI"],
            ["kondisi_ot_nama" => "BED RIDDEN"],
        ];

        $this->db->insert_batch($this->table, $data);
    }
}