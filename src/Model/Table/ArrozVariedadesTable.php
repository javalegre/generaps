<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ArrozVariedades Model
 *
 * @property \App\Model\Table\TecnicasTable|\Cake\ORM\Association\HasMany $Tecnicas
 *
 * @method \App\Model\Entity\ArrozVariedade get($primaryKey, $options = [])
 * @method \App\Model\Entity\ArrozVariedade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ArrozVariedade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ArrozVariedade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ArrozVariedade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ArrozVariedade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ArrozVariedade findOrCreate($search, callable $callback = null, $options = [])
 */
class ArrozVariedadesTable extends Table
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

        $this->setTable('arroz_variedades');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Tecnicas', [
            'foreignKey' => 'arroz_variedade_id'
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
            ->boolean('is_largoancho')
            ->allowEmpty('is_largoancho');

        return $validator;
    }
}
