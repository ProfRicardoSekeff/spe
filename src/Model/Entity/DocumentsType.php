<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DocumentsType Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string $active
 *
 * @property \App\Model\Entity\Document[] $documents
 * @property \App\Model\Entity\Requirement[] $requirements
 */
class DocumentsType extends Entity
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
        'active' => true,
        'documents' => true,
        'requirements' => true
    ];
}
