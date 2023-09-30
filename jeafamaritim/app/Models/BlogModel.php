<?php
namespace App\Models;
use CodeIgniter\Model;

class BlogModel extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table("blog");
    }
    public function index()
    {
        $this->builder->select("*");
        $this->builder->orderBy("id","desc");
        $this->builder->limit(3);
        $builder = $this->builder->get();
        return $builder;
        $builder->getResult();
    }
    public function all()
    {
        $this->builder->select("*");
        $builder = $this->builder->get();
        return $builder;
        $builder->getResult();
    }
}