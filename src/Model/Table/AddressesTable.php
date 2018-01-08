<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Addresses Model
 *
 * @property \App\Model\Table\ProvincesTable|\Cake\ORM\Association\BelongsTo $Provinces
 * @property \App\Model\Table\AssetsTable|\Cake\ORM\Association\HasMany $Assets
 * @property \App\Model\Table\CustomerAssetsTable|\Cake\ORM\Association\HasMany $CustomerAssets
 * @property \App\Model\Table\UserAddressesTable|\Cake\ORM\Association\HasMany $UserAddresses
 *
 * @method \App\Model\Entity\Address get($primaryKey, $options = [])
 * @method \App\Model\Entity\Address newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Address[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Address|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Address patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Address[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Address findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AddressesTable extends Table
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

        $this->setTable('addresses');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Provinces', [
            'foreignKey' => 'province_id'
        ]);
        $this->hasMany('Assets', [
            'foreignKey' => 'address_id'
        ]);
        $this->hasMany('CustomerAssets', [
            'foreignKey' => 'address_id'
        ]);
        $this->hasMany('UserAddresses', [
            'foreignKey' => 'address_id'
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
            ->scalar('address1')
            ->allowEmpty('address1');

        $validator
            ->scalar('address2')
            ->allowEmpty('address2');

        $validator
            ->scalar('moo')
            ->allowEmpty('moo');

        $validator
            ->scalar('soi')
            ->allowEmpty('soi');

        $validator
            ->scalar('district')
            ->allowEmpty('district');

        $validator
            ->scalar('amphur')
            ->allowEmpty('amphur');

        $validator
            ->scalar('street')
            ->allowEmpty('street');

        $validator
            ->scalar('zipcode')
            ->allowEmpty('zipcode');

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
        $rules->add($rules->existsIn(['province_id'], 'Provinces'));

        return $rules;
    }
}
