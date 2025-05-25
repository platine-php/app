<?php

namespace Platine\Framework\Migration;

use Platine\Database\Schema\CreateTable;
use Platine\Framework\Migration\AbstractMigration;

class AddPermissionsTable20210717094547 extends AbstractMigration
{
    public function up(): void
    {
      //Action when migrate up
        $this->create('permissions', function (CreateTable $table) {
            $table->integer('id')
                  ->autoincrement()
                 ->primary();
            
            $table->string('code')
                 ->description('The permission code')
                 ->unique()
                 ->notNull();
            
            $table->string('description')
                 ->description('The permission description')
                 ->notNull();
            
            $table->integer('parent_id')
                  ->description('The parent permission');
            
            $table->timestamps();
            
            $table->foreign('parent_id')
                 ->references('permissions', 'id')
                 ->onDelete('CASCADE');

            $table->engine('INNODB');
        });
    }

    public function down(): void
    {
      //Action when migrate down
        $this->drop('permissions');
    }
}
