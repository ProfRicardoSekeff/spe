<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Requirement Entity
 *
 * @property int $id
 * @property int $services_id
 * @property string|null $text
 * @property int $documents_type_id
 *
 * @property \App\Model\Entity\Service $service
 * @property \App\Model\Entity\DocumentsType $documents_type
 */
class Requirement extends Entity
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
        'services_id' => true,
        'text' => true,
        'documents_type_id' => true,
        'service' => true,
        'documents_type' => true
    ];
}
