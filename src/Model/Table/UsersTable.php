<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\AssetsTable|\Cake\ORM\Association\HasMany $Assets
 * @property \App\Model\Table\UserAddressesTable|\Cake\ORM\Association\HasMany $UserAddresses
 * @property \App\Model\Table\UserImagesTable|\Cake\ORM\Association\HasMany $UserImages
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Assets', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('UserAddresses', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('UserImages', [
            'foreignKey' => 'user_id'
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
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('usercode')
            ->allowEmpty('usercode');

        $validator
            ->scalar('title')
            ->allowEmpty('title');

        $validator
            ->scalar('firstname')
            ->requirePresence('firstname', 'create')
            ->notEmpty('firstname');

        $validator
            ->scalar('lastname')
            ->requirePresence('lastname', 'create')
            ->notEmpty('lastname');

        $validator
            ->scalar('username')
            ->allowEmpty('username');

        $validator
            ->scalar('password')
            ->allowEmpty('password');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->scalar('phone')
            ->allowEmpty('phone');

        $validator
            ->scalar('lineid')
            ->allowEmpty('lineid');

        $validator
            ->scalar('fax')
            ->allowEmpty('fax');

        $validator
            ->scalar('isactive')
            ->allowEmpty('isactive');

        $validator
            ->scalar('isverify')
            ->allowEmpty('isverify');

        $validator
            ->scalar('islocked')
            ->allowEmpty('islocked');

        $validator
            ->scalar('iscustomer')
            ->allowEmpty('iscustomer');

        $validator
            ->scalar('isseller')
            ->allowEmpty('isseller');

        $validator
            ->scalar('gender')
            ->allowEmpty('gender');

        $validator
            ->scalar('verifycode')
            ->allowEmpty('verifycode');

        $validator
            ->scalar('position')
            ->allowEmpty('position');

        $validator
            ->integer('seq')
            ->allowEmpty('seq');

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
        //$rules->add($rules->isUnique(['username']));
        //$rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
