<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jobregisters Model
 *
 * @method \App\Model\Entity\Jobregister get($primaryKey, $options = [])
 * @method \App\Model\Entity\Jobregister newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Jobregister[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Jobregister|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jobregister patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Jobregister[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Jobregister findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class JobregistersTable extends Table
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

        $this->setTable('jobregisters');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('position')
            ->allowEmpty('position');

        $validator
            ->scalar('firstname')
            ->requirePresence('firstname', 'create')
            ->notEmpty('firstname');

        $validator
            ->scalar('lastname')
            ->requirePresence('lastname', 'create')
            ->notEmpty('lastname');

        $validator
            ->scalar('address')
            ->allowEmpty('address');

        $validator
            ->scalar('phone')
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->scalar('gender')
            ->requirePresence('gender', 'create')
            ->notEmpty('gender');

        $validator
            ->date('birthday')
            ->requirePresence('birthday', 'create')
            ->notEmpty('birthday');

        $validator
            ->integer('age')
            ->requirePresence('age', 'create')
            ->notEmpty('age');

        $validator
            ->integer('height')
            ->allowEmpty('height');

        $validator
            ->integer('weight')
            ->allowEmpty('weight');

        $validator
            ->scalar('nationality')
            ->requirePresence('nationality', 'create')
            ->notEmpty('nationality');

        $validator
            ->scalar('religion')
            ->requirePresence('religion', 'create')
            ->notEmpty('religion');

        $validator
            ->scalar('marital_status')
            ->requirePresence('marital_status', 'create')
            ->notEmpty('marital_status');

        $validator
            ->scalar('education')
            ->requirePresence('education', 'create')
            ->notEmpty('education');

        $validator
            ->scalar('career_history')
            ->allowEmpty('career_history');

        $validator
            ->scalar('talent')
            ->allowEmpty('talent');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

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
        //$rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
