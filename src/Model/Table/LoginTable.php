<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Login Model
 *
 * @method \App\Model\Entity\Login get($primaryKey, $options = [])
 * @method \App\Model\Entity\Login newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Login[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Login|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Login saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Login patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Login[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Login findOrCreate($search, callable $callback = null, $options = [])
 */
class LoginTable extends Table
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

        $this->setTable('login');
        $this->setDisplayField('people_id');
        $this->setPrimaryKey('people_id');
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
            ->integer('people_id')
            ->allowEmptyString('people_id', 'create');

        $validator
            ->scalar('username')
            ->maxLength('username', 45)
            ->requirePresence('username', 'create')
            ->allowEmptyString('username', false);

        $validator
            ->scalar('password')
            ->maxLength('password', 45)
            ->requirePresence('password', 'create')
            ->allowEmptyString('password', false);

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
        $rules->add($rules->isUnique(['username']));

        return $rules;
    }
}
