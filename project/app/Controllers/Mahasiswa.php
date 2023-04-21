<?php

namespace App\Controllers;
use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $mahasiswaModel = new MahasiswaModel();
        //$data["dataMahasiswa"]= $mahasiswaModel->getAll();
        $data["dataMahasiswa"]=$mahasiswaModel->getLimit(30,0);
        $data["offset"] = 0;
        return view('mahasiswa_view',$data);
        //echo var_dump($mahasiswaModel->getAll());
    }

    public function ajax_page(){
         $mulai = $this->request->getVar('start');
         $limit = $this->request->getVar('lim');
        $output = '';
        $mahasiswaModel = new MahasiswaModel();
        $data['dataMahasiswa'] = $mahasiswaModel->getLimit($limit,$mulai);
        $mahasiswa = $mahasiswaModel->getLimit($limit,$mulai);
        echo json_encode($mahasiswa);
        // if(count($mahasiswa)!=0){
        //     foreach($mahasiswa as $m ){
        //      $output .= '
        //      <tr>
        //      <td>'. $m->id . '</td>
        //      <td>' . $m->first_name . '</td>
        //      <td>' . $m->last_name . '</td>
        //      <td>' . $m->email . '</td>
        //      <td>' . $m->university . '</td>
        //      </tr>';
        //     }
        // echo $output;
        // }
        // else{
        //     echo "empty";
        // }
        // if($this->request->isAJAX()){
            
        // }
        // echo "<p> mulai: ".$mulai . "</p><br><br><p> limit: ". $limit . "</p><br><br>";
    }
    private function load_data($mulai,$limit){
        $mahasiswaModel = new MahasiswaModel();
         return $mahasiswa->getLimit($mulai,$limit);
    }
}