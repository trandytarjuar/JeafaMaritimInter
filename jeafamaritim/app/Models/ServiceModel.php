<?php
namespace App\Models;
use CodeIgniter\Model;

class ServiceModel extends Model 
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('service');
    }

    public function all()
    {
        $this->select('title,description');
        $builder = $this->builder->get();
        return $builder;
        $builder->getResult();
    }
}