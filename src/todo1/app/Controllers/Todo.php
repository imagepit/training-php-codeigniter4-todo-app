<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TodoModel;

class Todo extends BaseController
{
    public function index()
    {
        //
        $model = new TodoModel();
        $data['todos'] = $model->findAll();
        echo view('todo', $data);
    }

    public function create()
    {
        $model = new TodoModel();
        $data['todos'] = $model->findAll();
        if ($this->request->getMethod() === 'post' && $this->validate([
            'title' => 'required|min_length[3]|max_length[20]',
        ])) {
            $model->save([
                'title' => $this->request->getPost('title'),
            ]);
            echo view('todo', $data);
        } else {
            $data['validation'] = $this->validator;
            echo view('todo', $data);
        }
    }
}
