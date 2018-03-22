<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aplicaciones Model
 *
 * @property \App\Model\Table\CampaniasTable|\Cake\ORM\Association\BelongsTo $Campanias
 * @property \App\Model\Table\LotesTable|\Cake\ORM\Association\BelongsTo $Lotes
 * @property \App\Model\Table\AplicacionTiposTable|\Cake\ORM\Association\BelongsTo $AplicacionTipos
 * @property \App\Model\Table\AplicacionDetallesTable|\Cake\ORM\Association\HasMany $AplicacionDetalles
 *
 * @method \App\Model\Entity\Aplicacione get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aplicacione newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Aplicacione[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aplicacione|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aplicacione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aplicacione[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aplicacione findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AplicacionesTable extends Table
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

        $this->setTable('aplicaciones');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Campanias', [
            'foreignKey' => 'campania_id'
        ]);
        $this->belongsTo('Lotes', [
            'foreignKey' => 'lote_id'
        ]);
        $this->belongsTo('AplicacionTipos', [
            'foreignKey' => 'aplicacion_tipo_id'
        ]);
        $this->hasMany('AplicacionDetalles', [
            'foreignKey' => 'aplicacione_id'
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
            ->date('fecha')
            ->allowEmpty('fecha');

        $validator
            ->integer('is_aerea')
            ->allowEmpty('is_aerea');

        $validator
            ->integer('humedad')
            ->allowEmpty('humedad');

        $validator
            ->numeric('viento_vel')
            ->allowEmpty('viento_vel');

        $validator
            ->scalar('viento_dir')
            ->allowEmpty('viento_dir');

        $validator
            ->numeric('temperatura')
            ->allowEmpty('temperatura');

        $validator
            ->numeric('caudal')
            ->allowEmpty('caudal');

        $validator
            ->numeric('superficie')
            ->allowEmpty('superficie');

        $validator
            ->integer('cantidad')
            ->requirePresence('cantidad', 'create')
            ->notEmpty('cantidad');

        $validator
            ->scalar('detalle')
            ->allowEmpty('detalle');

        $validator
            ->scalar('id_usuario_cargo')
            ->allowEmpty('id_usuario_cargo');

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
        $rules->add($rules->existsIn(['aplicacion_tipo_id'], 'AplicacionTipos'));

        return $rules;
    }
}
