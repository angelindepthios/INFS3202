<?php

namespace App\Models;

use CodeIgniter\Model;

class RatingForum extends Model{

    public function rate($data){
        $db = \Config\Database::connect();
        $builder = $db->table('RatingForum');
        if ($builder->insert($data)) {
            return true;
        } else {
            return false;
        }

    }
    
}