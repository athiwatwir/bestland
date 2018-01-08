<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Asset Entity
 *
 * @property string $id
 * @property string $code
 * @property string $name
 * @property string $description
 * @property string $asset_type_id
 * @property string $asset_type_des
 * @property string $user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property string $createdby
 * @property float $floor_total
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
 * @property string $option
 * @property string $address_id
 * @property string $zone_id
 * @property string $latitude
 * @property string $longitude
 * @property string $isspecial_marketprice
 * @property string $isspecial_appraised
 * @property float $area_width
 * @property float $area_long
 * @property string $iscovering
 * @property string $isdweller
 * @property string $direction
 * @property float $price_amounnt_lower
 * @property string $issale
 * @property string $isrent
 * @property string $issalerent
 * @property string $issellout
 * @property string $issaledown
 * @property float $floor
 * @property float $price_rent
 * @property \Cake\I18n\FrozenDate $expire_date
 *
 * @property \App\Model\Entity\AssetType $asset_type
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Address $address
 * @property \App\Model\Entity\Zone $zone
 * @property \App\Model\Entity\AssetImage[] $asset_images
 * @property \App\Model\Entity\AssetOption[] $asset_options
 */
class Asset extends Entity
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
        'code' => true,
        'name' => true,
        'description' => true,
        'asset_type_id' => true,
        'asset_type_des' => true,
        'user_id' => true,
        'created' => true,
        'createdby' => true,
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
        'option' => true,
        'address_id' => true,
        'zone_id' => true,
        'latitude' => true,
        'longitude' => true,
        'isspecial_marketprice' => true,
        'isspecial_appraised' => true,
        'area_width' => true,
        'area_long' => true,
        'iscovering' => true,
        'isdweller' => true,
        'direction' => true,
        'price_amounnt_lower' => true,
        'issale' => true,
        'isrent' => true,
        'issalerent' => true,
        'issellout' => true,
        'issaledown' => true,
        'floor' => true,
        'price_rent' => true,
        'expire_date' => true,
        'asset_type' => true,
        'user' => true,
        'address' => true,
        'zone' => true,
        'asset_images' => true,
        'asset_options' => true
    ];
}
