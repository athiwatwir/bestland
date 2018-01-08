<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AssetType Entity
 *
 * @property string $id
 * @property string $name
 * @property string $pic
 * @property \Cake\I18n\FrozenTime $created
 * @property string $breatedby
 * @property int $seq
 *
 * @property \App\Model\Entity\Asset[] $assets
 * @property \App\Model\Entity\CustomerAsset[] $customer_assets
 */
class AssetType extends Entity
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
        'pic' => true,
        'created' => true,
        'breatedby' => true,
        'seq' => true,
        'assets' => true,
        'customer_assets' => true
    ];
}
