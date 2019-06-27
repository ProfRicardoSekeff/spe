<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DemandsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DemandsTable Test Case
 */
class DemandsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DemandsTable
     */
    public $Demands;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Demands',
        'app.Services',
        'app.People',
        'app.Status'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Demands') ? [] : ['className' => DemandsTable::class];
        $this->Demands = TableRegistry::getTableLocator()->get('Demands', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Demands);

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
