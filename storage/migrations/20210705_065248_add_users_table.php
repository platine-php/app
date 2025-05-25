<?php

namespace Platine\Framework\Migration;

use Platine\Database\Schema\CreateTable;
use Platine\Framework\Migration\AbstractMigration;

class AddUsersTable20210705065248 extends AbstractMigration
{
    public function up(): void
    {
      //Action when migrate up
        $this->create('users', function (CreateTable $table) {
            $table->integer('id')
                  ->autoincrement()
                 ->primary();

            $table->string('username')
                 ->description('The username')
                 ->unique()
                 ->notNull();

            $table->string('email')
                 ->description('The user email')
                 ->unique()
                 ->notNull();

            $table->string('password')
                 ->description('The user password')
                 ->notNull();

            $table->enum('status', ['A', 'D'])
                 ->description('The user status, A=Active, D=Deactive/Locked')
                 ->defaultValue('D')
                 ->notNull();

            $table->string('lastname')
                 ->description('The user lastname')
                 ->notNull();

            $table->string('firstname')
                 ->description('The user firstname')
                  ->notNull();

            $table->string('role')
                 ->description('The user role or job');

            $table->timestamps();

            $table->engine('INNODB');
        });
    }

    public function down(): void
    {
      //Action when migrate down
        $this->drop('users');
    }
}
