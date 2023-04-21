<?php

namespace App\Controllers;
use App\Models\ForumModel;

class Hello extends BaseController
{
    public function about()
    {
        $data =[
            'hasil' => '46646446'
        ];
        return view('Pages/hello_page',$data);
    }

    public function forum(){
       $forumModel = new ForumModel();
       $forum = $forumModel->getAll()->getResult();
       $data =[
        'hasil' => $forum,
        'Subject' =>'Math'
    ];
        return view('Pages/forum_page',$data);
       
    }

    public function detail($id){
        $forumModel = new ForumModel();
        $data = [
            'detail'=>$forumModel->getForum($id)->getResult(),
        ];
        
        return view('Pages/detail_page',$data);
    }

}