<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Establecimientos Model
 *
 * @property \App\Model\Table\ResponsablesTable|\Cake\ORM\Association\BelongsTo $Responsables
 * @property \App\Model\Table\EstablecimientoTiposTable|\Cake\ORM\Association\BelongsTo $EstablecimientoTipos
 * @property \App\Model\Table\SectoresTable|\Cake\ORM\Association\HasMany $Sectores
 *
 * @method \App\Model\Entity\Establecimiento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Establecimiento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Establecimiento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Establecimiento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Establecimiento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Establecimiento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Establecimiento findOrCreate($search, callable $callback = null, $options = [])
 */
class EstablecimientosTable extends Table
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

        $this->setTable('establecimientos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Responsables', [
            'foreignKey' => 'responsable_id'
        ]);
        $this->belongsTo('EstablecimientoTipos', [
            'foreignKey' => 'establecimiento_tipo_id'
        ]);
        $this->hasMany('Sectores', [
            'foreignKey' => 'establecimiento_id'
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
            ->scalar('nombre')
            ->allowEmpty('nombre');

        $validator
            ->scalar('localidad')
            ->allowEmpty('localidad');

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
        $rules->add($rules->existsIn(['responsable_id'], 'Responsables'));
        $rules->add($rules->existsIn(['establecimiento_tipo_id'], 'EstablecimientoTipos'));

        return $rules;
    }
}
