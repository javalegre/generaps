<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tecnicas Model
 *
 * @property \App\Model\Table\CampaniasTable|\Cake\ORM\Association\BelongsTo $Campanias
 * @property \App\Model\Table\LotesTable|\Cake\ORM\Association\BelongsTo $Lotes
 * @property \App\Model\Table\SistemaLaboreosTable|\Cake\ORM\Association\BelongsTo $SistemaLaboreos
 * @property \App\Model\Table\ArrozVariedadesTable|\Cake\ORM\Association\BelongsTo $ArrozVariedades
 * @property \App\Model\Table\ArrozTipoCuradosTable|\Cake\ORM\Association\BelongsTo $ArrozTipoCurados
 * @property \App\Model\Table\TecnicaResponsablesTable|\Cake\ORM\Association\HasMany $TecnicaResponsables
 *
 * @method \App\Model\Entity\Tecnica get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tecnica newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tecnica[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tecnica|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tecnica patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tecnica[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tecnica findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TecnicasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('tecnicas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Campanias', [
            'foreignKey' => 'campania_id'
        ]);
        $this->belongsTo('Lotes', [
            'foreignKey' => 'lote_id'
        ]);
        $this->belongsTo('SistemaLaboreos', [
            'foreignKey' => 'sistema_laboreo_id'
        ]);
        $this->belongsTo('ArrozVariedades', [
            'foreignKey' => 'arroz_variedade_id'
        ]);
        $this->belongsTo('ArrozTipoCurados', [
            'foreignKey' => 'arroz_tipo_curado_id'
        ]);
        $this->hasMany('TecnicaResponsables', [
            'foreignKey' => 'tecnica_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->numeric('hectareas_sembradas')
            ->allowEmpty('hectareas_sembradas');

        $validator
            ->date('fecha_siembra')
            ->allowEmpty('fecha_siembra');

        $validator
            ->numeric('densidad_siembra')
            ->allowEmpty('densidad_siembra');

        $validator
            ->date('fecha_emergencia')
            ->allowEmpty('fecha_emergencia');

        $validator
            ->integer('densidad_planta')
            ->allowEmpty('densidad_planta');

        $validator
            ->date('fecha_diferenciacion')
            ->allowEmpty('fecha_diferenciacion');

        $validator
            ->date('fecha_inicioriego')
            ->allowEmpty('fecha_inicioriego');

        $validator
            ->date('fecha_chacracompleta')
            ->allowEmpty('fecha_chacracompleta');

        $validator
            ->date('fecha_finriego')
            ->allowEmpty('fecha_finriego');

        $validator
            ->date('fecha_floracion')
            ->allowEmpty('fecha_floracion');

        $validator
            ->integer('panojas')
            ->allowEmpty('panojas');

        $validator
            ->integer('grano_lleno')
            ->allowEmpty('grano_lleno');

        $validator
            ->integer('grano_vano')
            ->allowEmpty('grano_vano');

        $validator
            ->date('fecha_cosecha')
            ->allowEmpty('fecha_cosecha');

        $validator
            ->numeric('hectareas_cosechadas')
            ->allowEmpty('hectareas_cosechadas');

        $validator
            ->numeric('humedad_cosecha')
            ->allowEmpty('humedad_cosecha');

        $validator
            ->integer('total_kgsecos')
            ->allowEmpty('total_kgsecos');

        $validator
            ->numeric('factor')
            ->allowEmpty('factor');

        $validator
            ->scalar('observacion')
            ->allowEmpty('observacion');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['campania_id'], 'Campanias'));
        $rules->add($rules->existsIn(['lote_id'], 'Lotes'));
        $rules->add($rules->existsIn(['sistema_laboreo_id'], 'SistemaLaboreos'));
        $rules->add($rules->existsIn(['arroz_variedade_id'], 'ArrozVariedades'));
        $rules->add($rules->existsIn(['arroz_tipo_curado_id'], 'ArrozTipoCurados'));

        return $rules;
    }
}
