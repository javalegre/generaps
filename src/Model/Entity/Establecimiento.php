<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Establecimiento Entity
 *
 * @property int $id
 * @property int $responsable_id
 * @property int $establecimiento_tipo_id
 * @property string $nombre
 * @property string $localidad
 *
 * @property \App\Model\Entity\Responsable $responsable
 * @property \App\Model\Entity\EstablecimientoTipo $establecimiento_tipo
 * @property \App\Model\Entity\Sectore[] $sectores
 */
class Establecimiento extends Entity
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
        'responsable_id' => true,
        'establecimiento_tipo_id' => true,
        'nombre' => true,
        'localidad' => true,
        'responsable' => true,
        'establecimiento_tipo' => true,
        'sectores' => true
    ];
}
