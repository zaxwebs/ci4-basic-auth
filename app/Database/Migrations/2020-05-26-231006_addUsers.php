<?php namespace App\Database\Migrations;

class AddUsers extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],
                        'email'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],
                        'password'       => [
													'type'           => 'VARCHAR',
													'constraint'     => '100',
									],
                ]);
                $this->forge->addKey('id', TRUE);
                $this->forge->createTable('users');
        }

        public function down()
        {
                $this->forge->dropTable('users');
        }
}