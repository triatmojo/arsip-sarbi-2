<?php

namespace App\Models;

use CodeIgniter\Model;

class FileModel extends Model
{
    protected $table = 'file';
    protected  $primaryKey = 'file_id';
    protected $useTimestamps = true;

    protected $allowedFields = ['folder_id', 'nama_file', 'file'];

    public function getFilebyFolder($folder_id)
    {
        $this->where(['folder_id' => $folder_id]);
        return $this->findAll();
    }
}