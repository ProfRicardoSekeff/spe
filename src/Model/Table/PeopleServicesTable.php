<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PeopleServices Model
 *
 * @property \App\Model\Table\ServicesTable|\Cake\ORM\Association\BelongsTo $Services
 * @property \App\Model\Table\PeopleTable|\Cake\ORM\Association\BelongsTo $People
 *
 * @method \App\Model\Entity\PeopleService get($primaryKey, $options = [])
 * @method \App\Model\Entity\PeopleService newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PeopleService[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PeopleService|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PeopleService saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PeopleService patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PeopleService[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PeopleService findOrCreate($search, callable $callback = null, $options = [])
 */
class PeopleServicesTable extends Table
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

        $this->setTable('people_services');
        $this->setDisplayField('services_id');
        $this->setPrimaryKey(['services_id', 'people_id']);

        $this->belongsTo('Services', [
            'foreignKey' => 'services_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('People', [
            'foreignKey' => 'people_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['services_id'], 'Services'));
        $rules->add($rules->existsIn(['people_id'], 'People'));

        return $rules;
    }
}
