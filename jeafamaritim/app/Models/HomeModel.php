<?php
namespace App\Models;
use CodeIgniter\Model;

class HomeModel extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table("home");
    }
    public function index()
    {
        $this->builder->select("*");
        $builder = $this->builder->get();
        return $builder;
        $builder->getResult();
    }
}