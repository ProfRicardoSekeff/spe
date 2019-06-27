<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Demand Entity
 *
 * @property string $id
 * @property int $services_id
 * @property int $people_id
 * @property string|null $description
 * @property \Cake\I18n\FrozenTime $date_time
 * @property int $status_id
 * @property string|null $tags
 * @property bool|null $paid
 *
 * @property \App\Model\Entity\Service $service
 * @property \App\Model\Entity\Person $person
 * @property \App\Model\Entity\Status $status
 */
class Demand extends Entity
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
        'description' => true,
        'date_time' => true,
        'status_id' => true,
        'tags' => true,
        'paid' => true,
        'service' => true,
        'person' => true,
        'status' => true
    ];
}
