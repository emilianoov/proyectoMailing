<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class estadistica_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    
    private $table = 'email_stats';
    private $primary_key = 'id_email';

    public function insert($data){
        return ($this->db->insert($this->table, $data) == true) ? true : false;
    }

    public function graficas($id){
        $queryTotal=$this->db->query("SELECT COUNT(*) AS total FROM email_stats WHERE `campain_id` = $id");
        $rowTotal = $queryTotal->row();
        $Total = $rowTotal->total;

        $queryEntregados=$this->db->query("SELECT COUNT(*) AS totalEntregados FROM email_stats WHERE `delivered` = 1 AND `campain_id` = $id");
        $rowEntregados = $queryEntregados->row();
        $totalEntregados = $rowEntregados->totalEntregados;

        $queryNoEntregados = $this->db->query("SELECT COUNT(*) AS totalNoEntregados FROM email_stats WHERE delivered = 0 AND `campain_id` = $id");
        $rowNoEntregados = $queryNoEntregados->row();
        $totalNoEntregados = $rowNoEntregados->totalNoEntregados;

        $estadisticas = array(
            'entregados' => $totalEntregados,
            'no_entregados' => $totalNoEntregados,
            'total' => $Total
        );
        
        return $estadisticas;
    }
}

/* End of file ModelName.php */


?>