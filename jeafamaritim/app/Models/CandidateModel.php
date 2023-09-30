<?php

namespace App\Models;

use CodeIgniter\Model;

class CandidateModel extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table("candidate");
    }
    public function saveJob($data)
    {
        return $this->builder->insert($data);
    }
}
