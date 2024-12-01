<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateCrimes extends BaseMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/migrations/4/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('crimes');
        $table->addColumn('description', 'string', [
            'default' => null,
            'limit' => 1000,
            'null' => false,
        ]);
        $table->addColumn('case_number', 'string', [
            'default' => null,
            'limit' => 25,
            'null' => false,
        ]);
        $table->addColumn('location', 'string', [
            'default' => null,
            'limit' => 150,
            'null' => false,
        ]);
        $table->addColumn('agency', 'string', [
            'default' => null,
            'limit' => 150,
            'null' => false,
        ]);
        $table->addColumn('reported_date', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
