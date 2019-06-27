<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payment Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $date_time
 * @property string|null $amount
 * @property string $demands_id
 * @property int $demands_services_id
 * @property int $demands_people_id
 *
 * @property \App\Model\Entity\Demand $demand
 */
class Payment extends Entity
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
        'date_time' => true,
        'amount' => true,
        'demands_id' => true,
        'demands_services_id' => true,
        'demands_people_id' => true,
        'demand' => true
    ];
}
