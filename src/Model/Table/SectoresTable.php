<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sectores Model
 *
 * @property \App\Model\Table\EstablecimientosTable|\Cake\ORM\Association\BelongsTo $Establecimientos
 * @property \App\Model\Table\CampaniasTable|\Cake\ORM\Association\BelongsTo $Campanias
 *
 * @method \App\Model\Entity\Sectore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sectore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sectore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sectore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sectore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sectore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sectore findOrCreate($search, callable $callback = null, $options = [])
 */
class SectoresTable extends Table
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

        $this->setTable('sectores');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Establecimientos', [
            'foreignKey' => 'establecimiento_id'
        ]);
        $this->belongsTo('Campanias', [
            'foreignKey' => 'campania_id'
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
        $rules->add($rules->existsIn(['establecimiento_id'], 'Establecimientos'));
        $rules->add($rules->existsIn(['campania_id'], 'Campanias'));

        return $rules;
    }
}
