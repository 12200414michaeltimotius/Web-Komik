<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penggunakomik extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'          =>'INT', 'constraint'=>5,
                'unsigned'      => true,
                'auto_increment'=> true
            ],
            'nama'=> [
                'type'          =>'VARCHAR','constraint'=>30,
                'null'          => false
            
            ],
            'password'=> [
                'type'          =>'VARCHAR', 'constraint'=>40,
                'null'          =>false
            ]
            ]);
            $this->forge->addKey('id', true);
            $this->forge->createTable('penggunakomik');
    }

    public function down()
    {
        $this->forge->dropTable('penggunakomik');
    }
}
