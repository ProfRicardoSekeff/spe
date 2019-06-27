<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Messages Model
 *
 * @property \App\Model\Table\PeopleTable|\Cake\ORM\Association\BelongsTo $People
 * @property \App\Model\Table\DemandsTable|\Cake\ORM\Association\BelongsTo $Demands
 * @property \App\Model\Table\DemandsTable|\Cake\ORM\Association\BelongsTo $Demands
 * @property \App\Model\Table\DemandsTable|\Cake\ORM\Association\BelongsTo $Demands
 *
 * @method \App\Model\Entity\Message get($primaryKey, $options = [])
 * @method \App\Model\Entity\Message newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Message[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Message|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Message saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Message patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Message[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Message findOrCreate($search, callable $callback = null, $options = [])
 */
class MessagesTable extends Table
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

        $this->setTable('messages');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('People', [
            'foreignKey' => 'people_id',
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
            ->scalar('message')
            ->maxLength('message', 1000)
            ->requirePresence('message', 'create')
            ->allowEmptyString('message', false);

        $validator
            ->scalar('from')
            ->maxLength('from', 45)
            ->requirePresence('from', 'create')
            ->allowEmptyString('from', false);

        $validator
            ->dateTime('date_time')
            ->requirePresence('date_time', 'create')
            ->allowEmptyDateTime('date_time', false);

        $validator
            ->boolean('read')
            ->allowEmptyString('read', false);

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
        $rules->add($rules->existsIn(['people_id'], 'People'));
        $rules->add($rules->existsIn(['demands_id'], 'Demands'));
        $rules->add($rules->existsIn(['demands_services_id'], 'Demands'));
        $rules->add($rules->existsIn(['demands_people_id'], 'Demands'));

        return $rules;
    }
}
