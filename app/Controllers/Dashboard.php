<?php
// app/Controllers/Dashboard.php
namespace App\Controllers;
use App\Models\MahasiswaModel;
use App\Models\MatKulModel;
class Dashboard extends BaseController
{
public function index()
{
$mahasiswaModel = new MahasiswaModel();
$matKulModel = new MatKulModel();
$data = [
'title' => 'Dashboard',
'totalMhs' => $mahasiswaModel->countAll(),
'totalMatkul' => $matKulModel->countAll(),
];
return view('pages/dashboard', $data);
}
}