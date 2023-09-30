<?php
namespace App\Models;
use CodeIgniter\Model;

class MisiModel extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder= $this->db->table('misi');
    }
    public function all()
    {
        $this->builder->select("*");
        $builder = $this->builder->get();
        return $builder;
        $builder->getResult();
    }
}