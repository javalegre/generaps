<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SistemaLaboreos Model
 *
 * @property \App\Model\Table\TecnicasTable|\Cake\ORM\Association\HasMany $Tecnicas
 *
 * @method \App\Model\Entity\SistemaLaboreo get($primaryKey, $options = [])
 * @method \App\Model\Entity\SistemaLaboreo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SistemaLaboreo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SistemaLaboreo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SistemaLaboreo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SistemaLaboreo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SistemaLaboreo findOrCreate($search, callable $callback = null, $options = [])
 */
class SistemaLaboreosTable extends Table
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

        $this->setTable('sistema_laboreos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Tecnicas', [
            'foreignKey' => 'sistema_laboreo_id'
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
}
