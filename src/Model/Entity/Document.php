<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Document Entity
 *
 * @property int $id
 * @property string|null $uri
 * @property \Cake\I18n\FrozenTime|null $date_time
 * @property int $documents_type_id
 * @property string $demands_id
 * @property int $demands_services_id
 * @property int $demands_people_id
 *
 * @property \App\Model\Entity\DocumentsType $documents_type
 * @property \App\Model\Entity\Demand $demand
 */
class Document extends Entity
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
        'uri' => true,
        'date_time' => true,
        'documents_type_id' => true,
        'demands_id' => true,
        'demands_services_id' => true,
        'demands_people_id' => true,
        'documents_type' => true,
        'demand' => true
    ];
}
