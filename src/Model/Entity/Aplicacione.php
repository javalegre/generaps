<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aplicacione Entity
 *
 * @property int $id
 * @property int $campania_id
 * @property int $lote_id
 * @property \Cake\I18n\FrozenDate $fecha
 * @property int $is_aerea
 * @property int $humedad
 * @property float $viento_vel
 * @property string $viento_dir
 * @property float $temperatura
 * @property float $caudal
 * @property float $superficie
 * @property int $cantidad
 * @property string $detalle
 * @property int $aplicacion_tipo_id
 * @property string $id_usuario_cargo
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\Campania $campania
 * @property \App\Model\Entity\Lote $lote
 * @property \App\Model\Entity\AplicacionTipo $aplicacion_tipo
 * @property \App\Model\Entity\AplicacionDetalle[] $aplicacion_detalles
 */
class Aplicacione extends Entity
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
        'campania_id' => true,
        'lote_id' => true,
        'fecha' => true,
        'is_aerea' => true,
        'humedad' => true,
        'viento_vel' => true,
        'viento_dir' => true,
        'temperatura' => true,
        'caudal' => true,
        'superficie' => true,
        'cantidad' => true,
        'detalle' => true,
        'aplicacion_tipo_id' => true,
        'id_usuario_cargo' => true,
        'created' => true,
        'modified' => true,
        'campania' => true,
        'lote' => true,
        'aplicacion_tipo' => true,
        'aplicacion_detalles' => true
    ];
}
