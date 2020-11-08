<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Orang_terlantar_model extends CI_Model
{
    protected $table = 'orang_terlantar';
    protected $orang_terlantar_nama = 'orang_terlantar_nama';
    function __construct()
    {
        parent::__construct();
    }
    
    public function filter($search, $limit, $start, $order_field, $order_ascdesc){
        $this->db->like($this->orang_terlantar_nama, $search); // Untuk menambahkan query where LIKE
        $this->db->order_by($order_field, $order_ascdesc); // Untuk menambahkan query ORDER BY
        $this->db->limit($limit, $start); // Untuk menambahkan query LIMIT
        return $this->db->get($this->table)->result_array(); // Eksekusi query sql sesuai kondisi diatas
    }
    public function count_all(){
        return $this->db->count_all($this->table); // Untuk menghitung semua data siswa
    }
    public function count_filter($search){
        $this->db->like($this->orang_terlantar_nama, $search); // Untuk menambahkan query where OR LIKE
        return $this->db->get($this->table)->num_rows(); // Untuk menghitung jumlah data sesuai dengan filter pada textbox pencarian
    }
    
    /*
     * Get orang_terlantar by orang_terlantar_id
     */
    function get_orang_terlantar($orang_terlantar_id)
    {
        return $this->db->get_where($this->table,array('orang_terlantar_id'=>$orang_terlantar_id))->row_array();
    }
    
    /*
     * Get all orang_terlantar count
     */
    function get_all_orang_terlantar_count()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
        
    /*
     * Get all orang_terlantar
     */
    function get_all_orang_terlantar($params = [])
    {
        $this->db->order_by('orang_terlantar_id', 'desc');
        if(isset($params) && !empty($params))
        {
          $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get($this->table)->result_array();
    }
        
    /*
     * function to add new orang_terlantar
     */
    function add_orang_terlantar($params)
    {
        $this->db->insert($this->table,$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update orang_terlantar
     */
    function update_orang_terlantar($orang_terlantar_id,$params)
    {
        $this->db->where('orang_terlantar_id',$orang_terlantar_id);
        return $this->db->update($this->table,$params);
    }
    
    /*
     * function to delete orang_terlantar
     */
    function delete_orang_terlantar($orang_terlantar_id)
    {
        return $this->db->delete($this->table,array('orang_terlantar_id'=>$orang_terlantar_id));
    }
    function seed()
    {
        $data = [
            ["orang_terlantar_nama" => "DALAM DAERAH KAB BANYUMAS"],
            ["orang_terlantar_nama" => "LUAR DAERAH"],
        ];

        $this->db->insert_batch($this->table, $data);
    }
}