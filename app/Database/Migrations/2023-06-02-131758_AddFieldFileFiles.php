<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddFieldFileFiles extends Migration
{
    public function up()
    {
        $alterFields = [
            'file' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ]
        ];
        $this->forge->addColumn('files', $alterFields);
    }

    public function down()
    {
        $this->forge->dropColumn('files', 'file');
    }
}
