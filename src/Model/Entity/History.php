<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * History Entity
 *
 * @property int $id
 * @property string|null $from
 * @property string|null $receipt
 * @property string $text
 * @property string $demands_id
 * @property int $demands_services_id
 * @property int $demands_people_id
 *
 * @property \App\Model\Entity\Demand $demand
 */
class History extends Entity
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
        'from' => true,
        'receipt' => true,
        'text' => true,
        'demands_id' => true,
        'demands_services_id' => true,
        'demands_people_id' => true,
        'demand' => true
    ];
}
