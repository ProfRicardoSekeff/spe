<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Payments Model
 *
 * @property \App\Model\Table\DemandsTable|\Cake\ORM\Association\BelongsTo $Demands
 * @property \App\Model\Table\DemandsTable|\Cake\ORM\Association\BelongsTo $Demands
 * @property \App\Model\Table\DemandsTable|\Cake\ORM\Association\BelongsTo $Demands
 *
 * @method \App\Model\Entity\Payment get($primaryKey, $options = [])
 * @method \App\Model\Entity\Payment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Payment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Payment|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Payment saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Payment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Payment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Payment findOrCreate($search, callable $callback = null, $options = [])
 */
class PaymentsTable extends Table
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

        $this->setTable('payments');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

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
            ->dateTime('date_time')
            ->allowEmptyDateTime('date_time');

        $validator
            ->scalar('amount')
            ->maxLength('amount', 45)
            ->allowEmptyString('amount');

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
        $rules->add($rules->existsIn(['demands_id'], 'Demands'));
        $rules->add($rules->existsIn(['demands_services_id'], 'Demands'));
        $rules->add($rules->existsIn(['demands_people_id'], 'Demands'));

        return $rules;
    }
}
