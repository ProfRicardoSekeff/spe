<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeopleTypeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeopleTypeTable Test Case
 */
class PeopleTypeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PeopleTypeTable
     */
    public $PeopleType;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PeopleType',
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
        $config = TableRegistry::getTableLocator()->exists('PeopleType') ? [] : ['className' => PeopleTypeTable::class];
        $this->PeopleType = TableRegistry::getTableLocator()->get('PeopleType', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PeopleType);

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
}
