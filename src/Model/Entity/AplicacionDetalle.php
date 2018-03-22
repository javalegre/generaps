<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AplicacionDetalle Entity
 *
 * @property int $id
 * @property int $aplicacione_id
 * @property int $producto_id
 * @property float $dosis
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\Aplicacione $aplicacione
 * @property \App\Model\Entity\Producto $producto
 */
class AplicacionDetalle extends Entity
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
        'aplicacione_id' => true,
        'producto_id' => true,
        'dosis' => true,
        'created' => true,
        'modified' => true,
        'aplicacione' => true,
        'producto' => true
    ];
}
