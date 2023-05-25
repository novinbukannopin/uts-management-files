<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableFiles extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_files' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_categories' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => true,
            ],
            'name_files' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'detail_files' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);
        $this->forge->addKey('id_files', true);
        $this->forge->addForeignKey('id_categories', 'categories', 'id_categories');
        $this->forge->createTable('files');
    }

    public function down()
    {
        $this->forge->dropTable('files');
    }
}
