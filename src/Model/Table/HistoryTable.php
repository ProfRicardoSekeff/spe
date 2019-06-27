<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * History Model
 *
 * @property \App\Model\Table\DemandsTable|\Cake\ORM\Association\BelongsTo $Demands
 * @property \App\Model\Table\DemandsTable|\Cake\ORM\Association\BelongsTo $Demands
 * @property \App\Model\Table\DemandsTable|\Cake\ORM\Association\BelongsTo $Demands
 *
 * @method \App\Model\Entity\History get($primaryKey, $options = [])
 * @method \App\Model\Entity\History newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\History[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\History|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\History saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\History patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\History[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\History findOrCreate($search, callable $callback = null, $options = [])
 */
class HistoryTable extends Table
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

        $this->setTable('history');
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
            ->scalar('from')
            ->maxLength('from', 45)
            ->allowEmptyString('from');

        $validator
            ->scalar('receipt')
            ->maxLength('receipt', 45)
            ->allowEmptyString('receipt');

        $validator
            ->scalar('text')
            ->maxLength('text', 1000)
            ->requirePresence('text', 'create')
            ->allowEmptyString('text', false);

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
