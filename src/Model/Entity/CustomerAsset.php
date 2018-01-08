<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CustomerAsset Entity
 *
 * @property string $id
 * @property string $zone_id
 * @property string $customer_id
 * @property string $description
 * @property string $asset_type_id
 * @property string $asset_type_des
 * @property \Cake\I18n\FrozenTime $created
 * @property int $floor_total
 * @property int $bedroom
 * @property int $bathroom
 * @property int $kitchen_room
 * @property int $reception_room
 * @property int $dining_room
 * @property int $maid_room
 * @property int $parking
 * @property float $area_rai
 * @property float $area_ngan
 * @property float $area_wah
 * @property float $area_meter
 * @property float $price_per_wah
 * @property float $price_amounnt
 * @property string $isreqconsult
 * @property string $type
 * @property string $budgets
 * @property string $address_id
 *
 * @property \App\Model\Entity\Zone $zone
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\AssetType $asset_type
 * @property \App\Model\Entity\Address $address
 */
class CustomerAsset extends Entity
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
        'zone_id' => true,
        'customer_id' => true,
        'description' => true,
        'asset_type_id' => true,
        'asset_type_des' => true,
        'created' => true,
        'floor_total' => true,
        'bedroom' => true,
        'bathroom' => true,
        'kitchen_room' => true,
        'reception_room' => true,
        'dining_room' => true,
        'maid_room' => true,
        'parking' => true,
        'area_rai' => true,
        'area_ngan' => true,
        'area_wah' => true,
        'area_meter' => true,
        'price_per_wah' => true,
        'price_amounnt' => true,
        'isreqconsult' => true,
        'type' => true,
        'budgets' => true,
        'address_id' => true,
        'zone' => true,
        'customer' => true,
        'asset_type' => true,
        'address' => true
    ];
}
