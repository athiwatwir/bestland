<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserImage Entity
 *
 * @property string $id
 * @property string $image_id
 * @property string $user_id
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Image $image
 * @property \App\Model\Entity\User $user
 */
class UserImage extends Entity
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
        'image_id' => true,
        'user_id' => true,
        'created' => true,
        'image' => true,
        'user' => true
    ];
}
