<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SchoolFixture
 *
 */
class SchoolFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'school';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'school_id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'name' => ['type' => 'string', 'length' => 50, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'phone' => ['type' => 'string', 'length' => 50, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 355, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'created_on' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['school_id'], 'length' => []],
            'school_name_key' => ['type' => 'unique', 'columns' => ['name'], 'length' => []],
            'school_email_key' => ['type' => 'unique', 'columns' => ['email'], 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'school_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'created_on' => 1551146583
            ],
        ];
        parent::init();
    }
}
