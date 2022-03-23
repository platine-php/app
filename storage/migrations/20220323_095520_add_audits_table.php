<?php

declare(strict_types=1);

namespace Platine\Framework\Migration;

use Platine\Database\Schema\CreateTable;
use Platine\Framework\Migration\AbstractMigration;

class AddAuditsTable20220323095520 extends AbstractMigration
{
    public function up(): void
    {
      //Action when migrate up
        $this->create('audits', function (CreateTable $table) {
            $table->integer('id')
                  ->autoincrement()
                 ->primary();

            $table->string('event')
                 ->description('The audit event')
                 ->index()
                 ->notNull();

            $table->text('detail')
                       ->description('The audit detail');

            $table->string('url')
                 ->description('The url for this audit');

            $table->string('ip')
                 ->description('The ip address')
                 ->notNull();

            $table->string('user_agent')
                 ->description('The user agent');

            $table->string('tags')
                 ->description('The audit tags');

            $table->datetime('date')
                        ->description('audit date')
                        ->notNull();

            $table->integer('user_id')
                ->description('The audit user')
                ->notNull();

            $table->foreign('user_id')
                ->references('users', 'id')
                ->onDelete('NO ACTION');

            $table->engine('INNODB');
        });
    }

    public function down(): void
    {
      //Action when migrate down
        $this->drop('audits');
    }
}
