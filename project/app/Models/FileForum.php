<?php

namespace App\Models;

use CodeIgniter\Model;

class FileForum extends Model{

    public function storeFile($file_name,$forum_id){

        $data =[
            'File_Name'=>$file_name,
            'ForumID' => $forum_id,
        ];
        $db = \Config\Database::connect();
        $builder = $db->table('FileForum');
        if ($builder->insert($data)) {
            return true;
        } else {
            return false;
        }

    }
    
}