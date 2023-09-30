<?php
namespace App\Models;
use CodeIgniter\Model;

class VisiModel extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder= $this->db->table('visi');
    }
    public function all()
    {
        $this->builder->select("*");
        $builder = $this->builder->get();
        return $builder;
        $builder->getResult();
    }
}