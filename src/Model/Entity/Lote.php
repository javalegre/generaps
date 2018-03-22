<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lote Entity
 *
 * @property int $id
 * @property string $nombre
 * @property float $hectareas_reales
 * @property int $id_sector
 *
 * @property \App\Model\Entity\Aplicacione[] $aplicaciones
 * @property \App\Model\Entity\Tecnica[] $tecnicas
 */
class Lote extends Entity
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
        'hectareas_reales' => true,
        'id_sector' => true,
        'aplicaciones' => true,
        'tecnicas' => true
    ];
}
