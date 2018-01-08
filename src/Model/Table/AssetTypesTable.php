<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AssetTypes Model
 *
 * @property \App\Model\Table\AssetsTable|\Cake\ORM\Association\HasMany $Assets
 * @property \App\Model\Table\CustomerAssetsTable|\Cake\ORM\Association\HasMany $CustomerAssets
 *
 * @method \App\Model\Entity\AssetType get($primaryKey, $options = [])
 * @method \App\Model\Entity\AssetType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AssetType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AssetType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AssetType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AssetType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AssetType findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AssetTypesTable extends Table
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

        $this->setTable('asset_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Assets', [
            'foreignKey' => 'asset_type_id'
        ]);
        $this->hasMany('CustomerAssets', [
            'foreignKey' => 'asset_type_id'
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
            ->scalar('name')
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('pic')
            ->allowEmpty('pic');

        $validator
            ->scalar('breatedby')
            ->allowEmpty('breatedby');

        $validator
            ->integer('seq')
            ->requirePresence('seq', 'create')
            ->notEmpty('seq');

        return $validator;
    }
}
