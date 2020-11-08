<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Kebutuhan_diperlukan_model extends CI_Model
{
    protected $table = 'kebutuhan_diperlukan';
    protected $kebutuhan_diperlukan_nama = 'kebutuhan_diperlukan_nama';
    function __construct()
    {
        parent::__construct();
    }
    
    public function filter($search, $limit, $start, $order_field, $order_ascdesc){
        $this->db->like($this->kebutuhan_diperlukan_nama, $search); // Untuk menambahkan query where LIKE
        $this->db->order_by($order_field, $order_ascdesc); // Untuk menambahkan query ORDER BY
        $this->db->limit($limit, $start); // Untuk menambahkan query LIMIT
        return $this->db->get($this->table)->result_array(); // Eksekusi query sql sesuai kondisi diatas
    }
    public function count_all(){
        return $this->db->count_all($this->table); // Untuk menghitung semua data siswa
    }
    public function count_filter($search){
        $this->db->like($this->kebutuhan_diperlukan_nama, $search); // Untuk menambahkan query where OR LIKE
        return $this->db->get($this->table)->num_rows(); // Untuk menghitung jumlah data sesuai dengan filter pada textbox pencarian
    }
    
    /*
     * Get kebutuhan_diperlukan by kebutuhan_diperlukan_id
     */
    function get_kebutuhan_diperlukan($kebutuhan_diperlukan_id)
    {
        return $this->db->get_where($this->table,array('kebutuhan_diperlukan_id'=>$kebutuhan_diperlukan_id))->row_array();
    }
    
    /*
     * Get all kebutuhan_diperlukan count
     */
    function get_all_kebutuhan_diperlukan_count()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
        
    /*
     * Get all kebutuhan_diperlukan
     */
    function get_all_kebutuhan_diperlukan($params = [])
    {
        $this->db->order_by('kebutuhan_diperlukan_id', 'desc');
        if(isset($params) && !empty($params))
        {
          $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get($this->table)->result_array();
    }
        
    /*
     * function to add new kebutuhan_diperlukan
     */
    function add_kebutuhan_diperlukan($params)
    {
        $this->db->insert($this->table,$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update kebutuhan_diperlukan
     */
    function update_kebutuhan_diperlukan($kebutuhan_diperlukan_id,$params)
    {
        $this->db->where('kebutuhan_diperlukan_id',$kebutuhan_diperlukan_id);
        return $this->db->update($this->table,$params);
    }
    
    /*
     * function to delete kebutuhan_diperlukan
     */
    function delete_kebutuhan_diperlukan($kebutuhan_diperlukan_id)
    {
        return $this->db->delete($this->table,array('kebutuhan_diperlukan_id'=>$kebutuhan_diperlukan_id));
    }
    function seed()
    {
        $data = [
            ["kebutuhan_diperlukan_nama" => "MAKAN/MINUM"],
            ["kebutuhan_diperlukan_nama" => "BIMBINGAN KONSELING"],
            ["kebutuhan_diperlukan_nama" => "HOME CARE"],
            ["kebutuhan_diperlukan_nama" => "UANG TRANSPORT"],
            ["kebutuhan_diperlukan_nama" => "OBAT OBATAN"],
            ["kebutuhan_diperlukan_nama" => "PERALATAN MEDIS"],
            ["kebutuhan_diperlukan_nama" => "ALAT BANTU KURSI RODA"],
            ["kebutuhan_diperlukan_nama" => "ALAT BANTU KRUK"],
            ["kebutuhan_diperlukan_nama" => "ALAT BANTU KAKI PALSU"],
            ["kebutuhan_diperlukan_nama" => "ALAT BANTU TONGKAT"],
            ["kebutuhan_diperlukan_nama" => "LAIN-LAIN"],
        ];

        $this->db->insert_batch($this->table, $data);
    }
}