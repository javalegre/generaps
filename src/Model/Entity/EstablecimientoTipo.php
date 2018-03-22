<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EstablecimientoTipo Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $detalle
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\Establecimiento[] $establecimientos
 */
class EstablecimientoTipo extends Entity
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
        'detalle' => true,
        'created' => true,
        'modified' => true,
        'establecimientos' => true
    ];
}
