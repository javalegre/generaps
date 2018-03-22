<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Campanias Model
 *
 * @property \App\Model\Table\AplicacionesTable|\Cake\ORM\Association\HasMany $Aplicaciones
 * @property \App\Model\Table\SectoresTable|\Cake\ORM\Association\HasMany $Sectores
 * @property \App\Model\Table\TecnicasTable|\Cake\ORM\Association\HasMany $Tecnicas
 *
 * @method \App\Model\Entity\Campania get($primaryKey, $options = [])
 * @method \App\Model\Entity\Campania newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Campania[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Campania|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Campania patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Campania[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Campania findOrCreate($search, callable $callback = null, $options = [])
 */
class CampaniasTable extends Table
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

        $this->setTable('campanias');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Aplicaciones', [
            'foreignKey' => 'campania_id'
        ]);
        $this->hasMany('Sectores', [
            'foreignKey' => 'campania_id'
        ]);
        $this->hasMany('Tecnicas', [
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

        $validator
            ->scalar('anio')
            ->allowEmpty('anio');

        $validator
            ->scalar('detalle')
            ->allowEmpty('detalle');

        return $validator;
    }
}
