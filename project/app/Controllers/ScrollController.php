<?php

namespace App\Controllers;
use App\Models\MahasiswaModel;

class ScrollController extends BaseController
{
    public function index()
 {
  return view('scroll_pagination');
 }

 public function fetch()
 {

    //if($request->isAJAX()){ 
    $data = [
        'id' =>'p1',
        'nama'=>'namaku angel'
    ];
    echo json_encode($data);
    //}

//   if(count($data)>0)
//   {
//    foreach($data->result() as $row)
//    {
//     $output .= '
//     <div class="post_data">
//      <h3 class="text-danger">'.$row->id.'</h3>
//      <p>'.$row->first_name.'</p>
//     </div>
//     ';
//    }
//   }
//   echo $output;

 }
}