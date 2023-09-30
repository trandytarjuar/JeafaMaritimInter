<?php
namespace App\Models;
use CodeIgniter\Model;

class JobModel extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table("loker");
    }
    public function index()
    {
        $this->builder->select("*");
        $this->builder->orderBy("id","desc");
        $builder = $this->builder->get();
        return $builder;
        $builder->getResult();
    }
    public function saveJob($data)
    {
        return $this->builder->insert($data);
    }
    
}