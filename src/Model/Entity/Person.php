<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Person Entity
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $cellphone
 * @property string|null $cpf
 * @property int $people_type_id
 * @property int $departments_id
 *
 * @property \App\Model\Entity\PeopleType $people_type
 * @property \App\Model\Entity\Department $department
 * @property \App\Model\Entity\Service[] $services
 */
class Person extends Entity
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
        'email' => true,
        'cellphone' => true,
        'cpf' => true,
        'people_type_id' => true,
        'departments_id' => true,
        'people_type' => true,
        'department' => true,
        'services' => true
    ];
}
