<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

  var $table = "usuarios";

  function __construct() {
    parent::__construct();
  }

  function GetAll($sort = 'id', $order = 'asc', $limit = null, $offset = null) {
    $this->db->order_by($sort, $order);

    if($limit)
      $this->db->limit($limit,$offset);

    $query = $this->db->get($this->table);

    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return null;
    }

  }

  function CountAll(){
    return $this->db->count_all($this->table);
  }

}

/* End of file */
