<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CEmailsettings Model
 *
 * @method \App\Model\Entity\CEmailsetting get($primaryKey, $options = [])
 * @method \App\Model\Entity\CEmailsetting newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CEmailsetting[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CEmailsetting|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CEmailsetting patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CEmailsetting[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CEmailsetting findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CEmailsettingsTable extends Table
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

        $this->setTable('c_emailsettings');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('email_isenable')
            ->allowEmpty('email_isenable');

        $validator
            ->scalar('email_server')
            ->allowEmpty('email_server');

        $validator
            ->integer('email_port')
            ->allowEmpty('email_port');

        $validator
            ->scalar('email_username')
            ->allowEmpty('email_username');

        $validator
            ->scalar('email_password')
            ->allowEmpty('email_password');

        $validator
            ->scalar('email_address')
            ->allowEmpty('email_address');

        $validator
            ->scalar('email_title')
            ->allowEmpty('email_title');

        return $validator;
    }
}
