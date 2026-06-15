<?php
namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table         = 'dosen';
    protected $primaryKey    = 'id';
    protected $allowedFields = ['nip', 'nama', 'matkul', 'email'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
}