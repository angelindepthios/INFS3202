<?php

namespace App\Models;

use CodeIgniter\Model;

class ForumModel extends Model{
    public function postForum($fid,$Title,$Description,$Category,$time,$createdBy){

        $data =[
            'ForumID' =>$fid,
            'Title'=>$Title,
            'Description'=>$Description,
            'Category'=>$Category,
            'CreatedBy' => $createdBy,
            'DateCreated' => $time
        ];
        $db = \Config\Database::connect();
        $builder = $db->table('Forum');
        if ($builder->insert($data)) {
            return true;
        } else {
            return false;
        }

    }
    public function getAll(){
        $db = \Config\Database::connect();
        $builder = $db->table('Forum');
        $query = $builder->get();
        return $query;
    }
    public function getForum($id){
        $db = \Config\Database::connect();
        $builder = $db->table('Forum');
        $query = $builder->get();
        return $query;
    }
    
}