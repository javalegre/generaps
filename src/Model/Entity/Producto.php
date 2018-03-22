<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Producto Entity
 *
 * @property int $id
 * @property string $nombre
 * @property float $dosis_min
 * @property float $dosis_max
 * @property int $producto_tipo_id
 *
 * @property \App\Model\Entity\ProductoTipo $producto_tipo
 * @property \App\Model\Entity\AplicacionDetalle[] $aplicacion_detalles
 */
class Producto extends Entity
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
        'dosis_min' => true,
        'dosis_max' => true,
        'producto_tipo_id' => true,
        'producto_tipo' => true,
        'aplicacion_detalles' => true
    ];
}
