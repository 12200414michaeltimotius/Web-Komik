<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{

    protected $table            = 'listkomik';
    protected $primaryKey       = 'id';
    protected $protectFields    = true;
    protected $useTimestamps    = true;
}