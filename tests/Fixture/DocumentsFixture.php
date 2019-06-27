<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DocumentsFixture
 */
class DocumentsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'uri' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'date_time' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'documents_type_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'demands_id' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'demands_services_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'demands_people_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_documents_documents_type1_idx' => ['type' => 'index', 'columns' => ['documents_type_id'], 'length' => []],
            'fk_documents_demands1_idx' => ['type' => 'index', 'columns' => ['demands_id', 'demands_services_id', 'demands_people_id'], 'length' => []],
            'idx_uri' => ['type' => 'index', 'columns' => ['uri'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_documents_documents_type1' => ['type' => 'foreign', 'columns' => ['documents_type_id'], 'references' => ['documents_type', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_documents_demands1' => ['type' => 'foreign', 'columns' => ['demands_id', 'demands_services_id', 'demands_people_id'], 'references' => ['demands', '1' => ['id', 'services_id', 'people_id']], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
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
                'id' => 1,
                'uri' => 'Lorem ipsum dolor sit amet',
                'date_time' => '2019-06-27 22:47:08',
                'documents_type_id' => 1,
                'demands_id' => 'Lorem ipsum dolor sit amet',
                'demands_services_id' => 1,
                'demands_people_id' => 1
            ],
        ];
        parent::init();
    }
}
