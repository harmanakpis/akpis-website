<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateWebinarEnquiriesTable extends Migration
{
    public function up()
    {
         $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'course_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
            ],
            'contact' => [
                'type'       => 'VARCHAR',
                'constraint' => 15,
            ],
            'qualification' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => true,
            ],
            'work_experience' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => true,
            ],
            'pursuing_course' => [
                'type'       => 'ENUM',
                'constraint' => ['Yes', 'No'],
                'null'       => true,
            ],
            'salary' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null'       => true,
            ],
            'placement_assistance' => [
                'type'       => 'ENUM',
                'constraint' => ['Yes', 'No'],
                'null'       => true,
            ],
            'state_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => true,
            ],
            'cityname' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => true,
            ],
            'preferred_time' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'comment' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('webinar_enquiries');
    }

    public function down()
    {
        $this->forge->dropTable('webinar_enquiries');
    }
    
}
