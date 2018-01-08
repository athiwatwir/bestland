<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Jobregister Entity
 *
 * @property string $id
 * @property string $position
 * @property string $firstname
 * @property string $lastname
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $gender
 * @property \Cake\I18n\FrozenDate $birthday
 * @property int $age
 * @property int $height
 * @property int $weight
 * @property string $nationality
 * @property string $religion
 * @property string $marital_status
 * @property string $education
 * @property string $career_history
 * @property string $talent
 * @property string $description
 * @property \Cake\I18n\FrozenTime $created
 */
class Jobregister extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'position' => true,
        'firstname' => true,
        'lastname' => true,
        'address' => true,
        'phone' => true,
        'email' => true,
        'gender' => true,
        'birthday' => true,
        'age' => true,
        'height' => true,
        'weight' => true,
        'nationality' => true,
        'religion' => true,
        'marital_status' => true,
        'education' => true,
        'career_history' => true,
        'talent' => true,
        'description' => true,
        'created' => true
    ];
}
