<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Message Entity
 *
 * @property int $id
 * @property string $message
 * @property string $from
 * @property \Cake\I18n\FrozenTime $date_time
 * @property bool $read
 * @property int $people_id
 * @property string $demands_id
 * @property int $demands_services_id
 * @property int $demands_people_id
 *
 * @property \App\Model\Entity\Person $person
 * @property \App\Model\Entity\Demand $demand
 */
class Message extends Entity
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
        'message' => true,
        'from' => true,
        'date_time' => true,
        'read' => true,
        'people_id' => true,
        'demands_id' => true,
        'demands_services_id' => true,
        'demands_people_id' => true,
        'person' => true,
        'demand' => true
    ];
}
