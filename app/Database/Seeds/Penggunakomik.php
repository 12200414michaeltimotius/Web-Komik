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
                'nama'      => 'MichaelTimotius',
                'password'  => md5('12200414')
            ],
            [
                'nama'      => 'DesiArianti',
                'password'  => md5('12200375')
            ],
            [
                'nama'      => 'MaysitaUtamiFadlina',
                'password'  => md5('12200426')
            ],
            [
                'nama'      => 'WindaDwiSeptiani',
                'password'  => md5('12200457')
            ],
            [
                'nama'      => 'SyarifAbdurrachman',
                'password'  => md5('12200453')
            ],
            [
                'nama'      => 'Admin',
                'password'  => md5('123456')
            ]
        ];


        $p = new PenggunaModel();
        $p->insertBatch($data);
    }
}