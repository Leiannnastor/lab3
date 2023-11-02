<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentModel;

class StudentController extends BaseController
{
    public function test()
    {
        $main = new StudentModel();
        $data['main'] = $main->findAll();
        return view('main', $data);
    }
    public function save()
    {
        $id = $this->request->getPost('id');
        $data = [
            'StudName' => $this->request->getPost('StudName'),
            'StudGender' => $this->request->getPost('StudGender'),
            'StudCourse' => $this->request->getPost('StudCourse'),
            'StudSection' => $this->request->getPost('StudSection'),
            'StudYear' => $this->request->getPost('StudYear'),
        ];
        
        $main = new StudentModel();
        
        if (!empty($id)) {
            $main->update($id, $data);
        } else {
            $main->save($data);
        }
        
        return redirect()->to('/test');
    }

    public function delete($id)
    {
        $main = new StudentModel();
        $main->delete($id);
        return redirect()->to('/test');
    }

    public function update($id)
    {
        $main = new StudentModel();
        
        $data = [
            'main' => $main->findAll(),
            'lei' => $main->find($id), 
        ];
        return view('main', $data);
    }

    public function index()
    {
        
    }
}
