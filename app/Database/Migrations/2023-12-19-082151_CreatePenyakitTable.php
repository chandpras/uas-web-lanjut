<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePenyakitTable extends Migration
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
            'kode_penyakit' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'jenis_penyakit' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('penyakit');
    }

    public function down()
    {
        $this->forge->dropTable('penyakit');
    }
}
