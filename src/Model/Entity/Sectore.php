<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sectore Entity
 *
 * @property int $id
 * @property string $nombre
 * @property int $establecimiento_id
 * @property int $campania_id
 *
 * @property \App\Model\Entity\Establecimiento $establecimiento
 * @property \App\Model\Entity\Campania $campania
 */
class Sectore extends Entity
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
        'nombre' => true,
        'establecimiento_id' => true,
        'campania_id' => true,
        'establecimiento' => true,
        'campania' => true
    ];
}
