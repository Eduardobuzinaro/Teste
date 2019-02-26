<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SchoolTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SchoolTable Test Case
 */
class SchoolTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SchoolTable
     */
    public $School;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.School',
        'app.Teachers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('School') ? [] : ['className' => SchoolTable::class];
        $this->School = TableRegistry::getTableLocator()->get('School', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->School);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
