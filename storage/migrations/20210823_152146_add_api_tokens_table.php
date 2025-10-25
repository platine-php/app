<?php

namespace Platine\Framework\Migration;

use Platine\Database\Schema\CreateTable;
use Platine\Framework\Migration\AbstractMigration;

class AddApiTokensTable20210823152146 extends AbstractMigration
{
    public function up(): void
    {
      //Action when migrate up
        $this->create('tokens', function (CreateTable $table) {
            $table->integer('id')
                    ->autoincrement()
                    ->primary();

            $table->string('refresh_token')
                   ->unique()
                   ->notNull();

            $table->datetime('expire_at')
                  ->notNull();

            $table->integer('user_id')
                   ->description('The owner of the token')
                   ->notNull();

            $table->timestamps();
            
            $table->foreign('user_id')
                    ->references('users', 'id')
                    ->onDelete('NO ACTION');
            
            $table->engine('INNODB');
        });
    }

    public function down(): void
    {
      //Action when migrate down
        $this->drop('tokens');
    }
}
