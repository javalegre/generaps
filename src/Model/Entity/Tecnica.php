<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tecnica Entity
 *
 * @property int $id
 * @property int $campania_id
 * @property int $lote_id
 * @property int $sistema_laboreo_id
 * @property int $arroz_variedade_id
 * @property int $arroz_tipo_curado_id
 * @property float $hectareas_sembradas
 * @property \Cake\I18n\FrozenDate $fecha_siembra
 * @property float $densidad_siembra
 * @property \Cake\I18n\FrozenDate $fecha_emergencia
 * @property int $densidad_planta
 * @property \Cake\I18n\FrozenDate $fecha_diferenciacion
 * @property \Cake\I18n\FrozenDate $fecha_inicioriego
 * @property \Cake\I18n\FrozenDate $fecha_chacracompleta
 * @property \Cake\I18n\FrozenDate $fecha_finriego
 * @property \Cake\I18n\FrozenDate $fecha_floracion
 * @property int $panojas
 * @property int $grano_lleno
 * @property int $grano_vano
 * @property \Cake\I18n\FrozenDate $fecha_cosecha
 * @property float $hectareas_cosechadas
 * @property float $humedad_cosecha
 * @property int $total_kgsecos
 * @property float $factor
 * @property string $observacion
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\Campania $campania
 * @property \App\Model\Entity\Lote $lote
 * @property \App\Model\Entity\SistemaLaboreo $sistema_laboreo
 * @property \App\Model\Entity\ArrozVariedade $arroz_variedade
 * @property \App\Model\Entity\ArrozTipoCurado $arroz_tipo_curado
 * @property \App\Model\Entity\TecnicaResponsable[] $tecnica_responsables
 */
class Tecnica extends Entity
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
        'sistema_laboreo_id' => true,
        'arroz_variedade_id' => true,
        'arroz_tipo_curado_id' => true,
        'hectareas_sembradas' => true,
        'fecha_siembra' => true,
        'densidad_siembra' => true,
        'fecha_emergencia' => true,
        'densidad_planta' => true,
        'fecha_diferenciacion' => true,
        'fecha_inicioriego' => true,
        'fecha_chacracompleta' => true,
        'fecha_finriego' => true,
        'fecha_floracion' => true,
        'panojas' => true,
        'grano_lleno' => true,
        'grano_vano' => true,
        'fecha_cosecha' => true,
        'hectareas_cosechadas' => true,
        'humedad_cosecha' => true,
        'total_kgsecos' => true,
        'factor' => true,
        'observacion' => true,
        'created' => true,
        'modified' => true,
        'campania' => true,
        'lote' => true,
        'sistema_laboreo' => true,
        'arroz_variedade' => true,
        'arroz_tipo_curado' => true,
        'tecnica_responsables' => true
    ];
}
