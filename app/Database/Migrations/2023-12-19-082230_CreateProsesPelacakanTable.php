<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProsesPelacakanTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'gejala' => [
                'type' => 'TEXT',
            ],
            'kode_penyakit' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('proses_pelacakan');
    }

    public function down()
    {
        $this->forge->dropTable('proses_pelacakan');
    }
}
