<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DocumentsType Model
 *
 * @property \App\Model\Table\DocumentsTable|\Cake\ORM\Association\HasMany $Documents
 * @property \App\Model\Table\RequirementsTable|\Cake\ORM\Association\HasMany $Requirements
 *
 * @method \App\Model\Entity\DocumentsType get($primaryKey, $options = [])
 * @method \App\Model\Entity\DocumentsType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DocumentsType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DocumentsType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DocumentsType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DocumentsType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DocumentsType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DocumentsType findOrCreate($search, callable $callback = null, $options = [])
 */
class DocumentsTypeTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('documents_type');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Documents', [
            'foreignKey' => 'documents_type_id'
        ]);
        $this->hasMany('Requirements', [
            'foreignKey' => 'documents_type_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 45)
            ->allowEmptyString('name');

        $validator
            ->scalar('active')
            ->maxLength('active', 45)
            ->allowEmptyString('active', false);

        return $validator;
    }
}
