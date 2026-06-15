<?php
// app/Models/MatKulModel.php
namespace App\Models;
use CodeIgniter\Model;
class MatKulModel extends Model
{
protected $table = 'mata_kuliah';
protected $primaryKey = 'id';
protected $allowedFields = ['kode', 'nama', 'sks', 'semester'];
}