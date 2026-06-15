<?php
// app/Controllers/MatKul.php
namespace App\Controllers;
use App\Models\MatKulModel;
class MatKul extends BaseController
{
public function index()
{
$model = new MatKulModel();
$data = [
'title' => 'Mata Kuliah',
'matkul' => $model->findAll(),
];
return view('pages/matkul', $data);
}
}