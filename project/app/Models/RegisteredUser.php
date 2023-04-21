<?php

namespace App\Models;

use CodeIgniter\Model;

class RegisteredUser extends Model{

    public function register($data){
        $db = \Config\Database::connect();
        $builder = $db->table('RegisteredUser');
        if ($builder->insert($data)) {
            return true;
        } else {
            return false;
        }

    }

    public function login($email)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('RegisteredUser');
        $builder->where('email', $email);
        $query = $builder->get();
        return $query;
    }
    
}