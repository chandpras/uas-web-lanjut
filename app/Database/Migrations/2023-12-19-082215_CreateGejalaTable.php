<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGejalaTable extends Migration
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
            'kode_gejala' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'gejala' => [
                'type' => 'TEXT',
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('gejala');
    }

    public function down()
    {
        $this->forge->dropTable('gejala');
    }
}
