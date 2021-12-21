<?php

namespace App\Database\Seeds;

use App\Models\PenggunaModel;
use CodeIgniter\Database\Seeder;

class Penggunakomik extends Seeder
{
    public function run()
    {
        $data = [
        [
            'nama'      =>'MichaelTimotius',
            'password'  =>md5('12200414')
        ],
        [
            'nama'      =>'DesiArianti',
            'password'  =>md5('12200372')
        ],
        [
            'nama'      =>'WindaDwiSeptiani',
            'password'  =>md5('12200457')  
        ],
        [
            'nama'      =>'MaysitaUtamiFadlina',
            'password'  =>md5('12200426')
        ],
        [
            'nama'      =>'SyarifAbdurrachman',
            'passowrd'  =>md5('12200453')
        ],
        [
            'nama'      =>'admin',
            'password'  =>md5('12345')
        ]
        ];

        $p = new Penggunakomik();
        $p->insertBatch($data); 
    }
}