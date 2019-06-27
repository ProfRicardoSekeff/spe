<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PeopleService Entity
 *
 * @property int $services_id
 * @property int $people_id
 *
 * @property \App\Model\Entity\Service $service
 * @property \App\Model\Entity\Person $person
 */
class PeopleService extends Entity
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
        'service' => true,
        'person' => true
    ];
}
