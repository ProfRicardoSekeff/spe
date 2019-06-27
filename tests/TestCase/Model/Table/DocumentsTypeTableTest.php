<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DocumentsTypeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DocumentsTypeTable Test Case
 */
class DocumentsTypeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DocumentsTypeTable
     */
    public $DocumentsType;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.DocumentsType',
        'app.Documents',
        'app.Requirements'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DocumentsType') ? [] : ['className' => DocumentsTypeTable::class];
        $this->DocumentsType = TableRegistry::getTableLocator()->get('DocumentsType', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DocumentsType);

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
