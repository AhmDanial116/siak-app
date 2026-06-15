<?php
// app/Controllers/Mahasiswa.php
namespace App\Controllers;
use App\Models\MahasiswaModel;
class Mahasiswa extends BaseController
{
protected $model;
public function __construct()
{
$this->model = new MahasiswaModel();
}
public function index()
{
$data = [
'title' => 'Data Mahasiswa',
'mahasiswa' => $this->model->findAll(),
];
return view('pages/mahasiswa', $data);
}
}