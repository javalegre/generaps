<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EstablecimientoTipos Model
 *
 * @property \App\Model\Table\EstablecimientosTable|\Cake\ORM\Association\HasMany $Establecimientos
 *
 * @method \App\Model\Entity\EstablecimientoTipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\EstablecimientoTipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EstablecimientoTipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EstablecimientoTipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EstablecimientoTipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EstablecimientoTipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EstablecimientoTipo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EstablecimientoTiposTable extends Table
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

        $this->setTable('establecimiento_tipos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Establecimientos', [
            'foreignKey' => 'establecimiento_tipo_id'
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
            ->scalar('detalle')
            ->allowEmpty('detalle');

        return $validator;
    }
}
