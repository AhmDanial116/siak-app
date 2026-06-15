<?php
namespace App\Controllers;

use App\Models\DosenModel;

class Dosen extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new DosenModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Dosen',
            'dosen' => $this->model->findAll(), // ambil dari database
        ];
        return view('pages/dosen', $data);
    }
}