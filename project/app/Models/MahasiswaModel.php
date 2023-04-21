<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model{
    
    public function getLimit($limit,$offset){
        $db = \Config\Database::connect();
        $builder = $db->table('mahasiswa');
        $query =  $builder->limit($limit,$offset);
        
        return $query->get()->getResult();
    }
    
}