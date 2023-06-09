<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class campana_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
        
    private $table = 'campain';
    private $primary_key = 'id_campain';

    public function readData(){
        $rstQuery = $this->db->get($this->table);
        return $rstQuery->result_array();
    }

    public function insert($data){
        return ($this->db->insert($this->table, $data) == true) ? true : false;
    }

    public function delete($id){
        $this->db->where('id_campain', $id);
        $isOkey = $this->db->delete($this->table);
        
       return ($isOkey == true) ? true : false;
    }

    public function fetch($id){
        $rstQuery = $this->db->get_where($this->table,array($this->primary_key => $id));            
        return $rstQuery->row_array();
    }

    public function update($id, $data){
        $this->db->where($this->primary_key, $id);
        $isOkey = $this->db->update($this->table, $data);
        return ($isOkey == true) ? true : false;
    }

    function email($id_camp){
        $query=$this->db->query("SELECT * FROM campain WHERE id_campain = $id_camp");
        return $query->result_array();
    }
}

/* End of file ModelName.php */


?>