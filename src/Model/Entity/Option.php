<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Option Entity
 *
 * @property string $id
 * @property string $name
 * @property string $type
 * @property \Cake\I18n\FrozenTime $created
 * @property int $seq
 *
 * @property \App\Model\Entity\AssetOption[] $asset_options
 */
class Option extends Entity
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
        'name' => true,
        'type' => true,
        'created' => true,
        'seq' => true,
        'asset_options' => true
    ];
}
