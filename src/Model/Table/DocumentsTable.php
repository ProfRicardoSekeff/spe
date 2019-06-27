<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Documents Model
 *
 * @property \App\Model\Table\DocumentsTypeTable|\Cake\ORM\Association\BelongsTo $DocumentsType
 * @property \App\Model\Table\DemandsTable|\Cake\ORM\Association\BelongsTo $Demands
 * @property \App\Model\Table\DemandsTable|\Cake\ORM\Association\BelongsTo $Demands
 * @property \App\Model\Table\DemandsTable|\Cake\ORM\Association\BelongsTo $Demands
 *
 * @method \App\Model\Entity\Document get($primaryKey, $options = [])
 * @method \App\Model\Entity\Document newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Document[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Document|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Document saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Document patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Document[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Document findOrCreate($search, callable $callback = null, $options = [])
 */
class DocumentsTable extends Table
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

        $this->setTable('documents');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('DocumentsType', [
            'foreignKey' => 'documents_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Demands', [
            'foreignKey' => 'demands_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Demands', [
            'foreignKey' => 'demands_services_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Demands', [
            'foreignKey' => 'demands_people_id',
            'joinType' => 'INNER'
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
            ->scalar('uri')
            ->maxLength('uri', 255)
            ->allowEmptyString('uri');

        $validator
            ->dateTime('date_time')
            ->allowEmptyDateTime('date_time');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['documents_type_id'], 'DocumentsType'));
        $rules->add($rules->existsIn(['demands_id'], 'Demands'));
        $rules->add($rules->existsIn(['demands_services_id'], 'Demands'));
        $rules->add($rules->existsIn(['demands_people_id'], 'Demands'));

        return $rules;
    }
}
