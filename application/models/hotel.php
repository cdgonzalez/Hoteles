<?php
class Hotel extends  CI_Model{

    function _construct(){

        parent::_construct();
    }

    function getHotel(){
        $query = $this->db->get('hotel');
        return $query->result_array();
    }

    function getHotelByFecha($fecha){
        $this->db->where('fecha',$fecha);
        $query = $this->db->get('hotel');
        return $query->row();
    }
}
