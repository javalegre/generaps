<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lotes Model
 *
 * @property \App\Model\Table\AplicacionesTable|\Cake\ORM\Association\HasMany $Aplicaciones
 * @property \App\Model\Table\TecnicasTable|\Cake\ORM\Association\HasMany $Tecnicas
 *
 * @method \App\Model\Entity\Lote get($primaryKey, $options = [])
 * @method \App\Model\Entity\Lote newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Lote[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lote|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lote patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Lote[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lote findOrCreate($search, callable $callback = null, $options = [])
 */
class LotesTable extends Table
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

        $this->setTable('lotes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Aplicaciones', [
            'foreignKey' => 'lote_id'
        ]);
        $this->hasMany('Tecnicas', [
            'foreignKey' => 'lote_id'
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
            ->numeric('hectareas_reales')
            ->allowEmpty('hectareas_reales');

        $validator
            ->integer('id_sector')
            ->requirePresence('id_sector', 'create')
            ->notEmpty('id_sector');

        return $validator;
    }
}
