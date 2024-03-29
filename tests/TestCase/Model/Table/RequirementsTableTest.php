<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RequirementsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RequirementsTable Test Case
 */
class RequirementsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RequirementsTable
     */
    public $Requirements;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Requirements',
        'app.Services',
        'app.DocumentsType'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Requirements') ? [] : ['className' => RequirementsTable::class];
        $this->Requirements = TableRegistry::getTableLocator()->get('Requirements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Requirements);

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
