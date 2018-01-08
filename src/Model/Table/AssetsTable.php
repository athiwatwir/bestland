<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Assets Model
 *
 * @property \App\Model\Table\AssetTypesTable|\Cake\ORM\Association\BelongsTo $AssetTypes
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\AddressesTable|\Cake\ORM\Association\BelongsTo $Addresses
 * @property \App\Model\Table\ZonesTable|\Cake\ORM\Association\BelongsTo $Zones
 * @property \App\Model\Table\AssetImagesTable|\Cake\ORM\Association\HasMany $AssetImages
 * @property \App\Model\Table\AssetOptionsTable|\Cake\ORM\Association\HasMany $AssetOptions
 *
 * @method \App\Model\Entity\Asset get($primaryKey, $options = [])
 * @method \App\Model\Entity\Asset newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Asset[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Asset|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Asset patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Asset[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Asset findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AssetsTable extends Table
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

        $this->setTable('assets');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('AssetTypes', [
            'foreignKey' => 'asset_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Addresses', [
            'foreignKey' => 'address_id'
        ]);
        $this->belongsTo('Zones', [
            'foreignKey' => 'zone_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('AssetImages', [
            'foreignKey' => 'asset_id'
        ]);
        $this->hasMany('AssetOptions', [
            'foreignKey' => 'asset_id'
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
            ->scalar('code')
            ->requirePresence('code', 'create')
            ->notEmpty('code');

        $validator
            ->scalar('name')
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        $validator
            ->scalar('asset_type_des')
            ->allowEmpty('asset_type_des');

        $validator
            ->scalar('createdby')
            ->allowEmpty('createdby');

        $validator
            ->decimal('floor_total')
            ->allowEmpty('floor_total');

        $validator
            ->integer('bedroom')
            ->allowEmpty('bedroom');

        $validator
            ->integer('bathroom')
            ->allowEmpty('bathroom');

        $validator
            ->integer('kitchen_room')
            ->allowEmpty('kitchen_room');

        $validator
            ->integer('reception_room')
            ->allowEmpty('reception_room');

        $validator
            ->integer('dining_room')
            ->allowEmpty('dining_room');

        $validator
            ->integer('maid_room')
            ->allowEmpty('maid_room');

        $validator
            ->integer('parking')
            ->allowEmpty('parking');

        $validator
            ->decimal('area_rai')
            ->allowEmpty('area_rai');

        $validator
            ->decimal('area_ngan')
            ->allowEmpty('area_ngan');

        $validator
            ->decimal('area_wah')
            ->allowEmpty('area_wah');

        $validator
            ->decimal('area_meter')
            ->allowEmpty('area_meter');

        $validator
            ->decimal('price_per_wah')
            ->allowEmpty('price_per_wah');

        $validator
            ->decimal('price_amounnt')
            ->requirePresence('price_amounnt', 'create')
            ->notEmpty('price_amounnt');

        $validator
            ->scalar('option')
            ->allowEmpty('option');

        $validator
            ->scalar('latitude')
            ->allowEmpty('latitude');

        $validator
            ->scalar('longitude')
            ->allowEmpty('longitude');

        $validator
            ->scalar('isspecial_marketprice')
            ->allowEmpty('isspecial_marketprice');

        $validator
            ->scalar('isspecial_appraised')
            ->allowEmpty('isspecial_appraised');

        $validator
            ->decimal('area_width')
            ->allowEmpty('area_width');

        $validator
            ->decimal('area_long')
            ->allowEmpty('area_long');

        $validator
            ->scalar('iscovering')
            ->allowEmpty('iscovering');

        $validator
            ->scalar('isdweller')
            ->allowEmpty('isdweller');

        $validator
            ->scalar('direction')
            ->allowEmpty('direction');

        $validator
            ->decimal('price_amounnt_lower')
            ->allowEmpty('price_amounnt_lower');

        $validator
            ->scalar('issale')
            ->allowEmpty('issale');

        $validator
            ->scalar('isrent')
            ->allowEmpty('isrent');

        $validator
            ->scalar('issalerent')
            ->allowEmpty('issalerent');

        $validator
            ->scalar('issellout')
            ->allowEmpty('issellout');

        $validator
            ->scalar('issaledown')
            ->allowEmpty('issaledown');

        $validator
            ->decimal('floor')
            ->allowEmpty('floor');

        $validator
            ->decimal('price_rent')
            ->allowEmpty('price_rent');

        $validator
            ->date('expire_date')
            ->allowEmpty('expire_date');

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
        $rules->add($rules->existsIn(['asset_type_id'], 'AssetTypes'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['address_id'], 'Addresses'));
        $rules->add($rules->existsIn(['zone_id'], 'Zones'));

        return $rules;
    }
}
