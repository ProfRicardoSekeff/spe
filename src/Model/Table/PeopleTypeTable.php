<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PeopleType Model
 *
 * @property \App\Model\Table\PeopleTable|\Cake\ORM\Association\HasMany $People
 *
 * @method \App\Model\Entity\PeopleType get($primaryKey, $options = [])
 * @method \App\Model\Entity\PeopleType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PeopleType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PeopleType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PeopleType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PeopleType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PeopleType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PeopleType findOrCreate($search, callable $callback = null, $options = [])
 */
class PeopleTypeTable extends Table
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

        $this->setTable('people_type');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('People', [
            'foreignKey' => 'people_type_id'
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
            ->scalar('type_name')
            ->maxLength('type_name', 45)
            ->requirePresence('type_name', 'create')
            ->allowEmptyString('type_name', false);

        return $validator;
    }
}
