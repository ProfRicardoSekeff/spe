<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeopleServicesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeopleServicesTable Test Case
 */
class PeopleServicesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PeopleServicesTable
     */
    public $PeopleServices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PeopleServices',
        'app.Services',
        'app.People'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PeopleServices') ? [] : ['className' => PeopleServicesTable::class];
        $this->PeopleServices = TableRegistry::getTableLocator()->get('PeopleServices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PeopleServices);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
