<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('schools')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('phone', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 355,
                'null' => false,
            ])
            ->addIndex(
                [
                    'email',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'name',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('teachers')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 256,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 256,
                'null' => true,
            ])
            ->addColumn('phone', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('school_id', 'biginteger', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->create();
    }

    public function down()
    {
        $this->table('schools')->drop()->save();
        $this->table('teachers')->drop()->save();
    }
}
