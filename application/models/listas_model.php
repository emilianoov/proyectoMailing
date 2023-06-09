<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
class listas_model extends CI_Model {            
    function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
        
    private $table = 'list';
    private $primary_key = 'id_list';

    public function readData(){
        $rstQuery = $this->db->get($this->table);
        return $rstQuery->result_array();
    }
    
    public function contact($id){
        $query=$this->db->query("SELECT * FROM person WHERE list_id = $id");
        return $query->result_array();
    }

    public function insert($data){
        return ($this->db->insert($this->table, $data) == true) ? true : false;
    }

    public function delete($id){
        $this->db->where('id_list', $id);
        $isOkey = $this->db->delete($this->table);
        
       return ($isOkey == true) ? true : false;
    }
    
    public function verify($id){
        $isOkey = $this->db->get_where('person',array('list_id' => $id));
        return $isOkey->result_array();
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
}
    
    /* End of file ModelName.php */
    

?>