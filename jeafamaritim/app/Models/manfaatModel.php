<?php

namespace App\Models;

use CodeIgniter\Model;

class ManfaatModel extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table("manfaat_kerja_sama");
    }
    public function index()
    {
        $this->builder->select("*");
        $builder = $this->builder->get();
        return $builder;
        $builder->getResult();
    }
}
