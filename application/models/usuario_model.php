<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
class usuario_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    
    private $table = 'person';
    private $primary_key = 'id_person';

    public function readData(){
        $rstQuery = $this->db->get($this->table);
        return $rstQuery->result_array();
    }

    public function insert($datos){
        return ($this->db->insert($this->table, $datos) == true) ? true : false;
    }

    public function delete($id){
        $this->db->where('id_person', $id);
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
    function checkemail($email, $list_id){
		return ($this->db->get_where($this->table, array('person_correo' => $email , 'list_id' => $list_id))->num_rows()>0) ? true : false;
	}

    function email($id){
        $query=$this->db->query("SELECT * FROM person WHERE list_id = $id");
        return $query->result_array();
    }

}
    
    /* End of file ModelName.php */
    
    

?>