<?php 

    class auth_model extends CI_Model{
        function __construct()
        {
            parent::__construct();
        }

        public function user_check($user_email, $user_pass){
            $query=$this->db->where('usu_correo',$user_email)->where('password', $user_pass)->get('usuarios');
            return $query->result();
        }
    }

?>