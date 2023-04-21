<?php
namespace App\Controllers;
use App\Models\ForumModel;
use App\Models\FileForum;
use App\Models\RatingForum;
class Forum extends BaseController
{

    public function upload_multiple(){
        $title = $this->request->getPost('title');
        $file = $this->request->getFiles('userfile');
        $category = $this->request->getPost('category');
        $description = $this->request->getPost('desc');
        $file_model = new FileForum();
        $forumModel = new ForumModel();
        $forum_id = uniqid();
        date_default_timezone_set("Australia/Brisbane");
        $time_created= date("Y-m-d h:i:sa");
        $forumModel->postForum($forum_id,$title,$description,$category,$time_created,"depti");
        if($file){
            foreach($file['userfile'] as $imgs){
                $file_name = $imgs->getName();
                $imgs->move(WRITEPATH . 'uploads');
                $file_model->storeFile($file_name,$forum_id);
            }
        }
        //echo var_dump($file);
        
    }

    public function displayForm(){
        return view('Pages/post_forum');
    }

    public function rateForum(){
        $forumID = $this->request->getPost("forumID");
        $mark = $this->request->getPost("ratings");
        $email = 'depthiosangelin@yahoo.co.id';
        $model = new ratingForum();
        $data = [
            'ForumID'=>$forumID,
            'email' =>$email,
            'mark' =>$mark,
        ];
        $ratingModel = new RatingForum();
        $ratingModel->rate($data);
        return $this->response->redirect(base_url('forum/'.$forumID));
    }
}