<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AplicacionTipos Model
 *
 * @property \App\Model\Table\AplicacionesTable|\Cake\ORM\Association\HasMany $Aplicaciones
 *
 * @method \App\Model\Entity\AplicacionTipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\AplicacionTipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AplicacionTipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AplicacionTipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AplicacionTipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AplicacionTipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AplicacionTipo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AplicacionTiposTable extends Table
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

        $this->setTable('aplicacion_tipos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Aplicaciones', [
            'foreignKey' => 'aplicacion_tipo_id'
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
            ->requirePresence('detalle', 'create')
            ->notEmpty('detalle');

        return $validator;
    }
}
