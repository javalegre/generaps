<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ArosAcos Model
 *
 * @property \App\Model\Table\ArosTable|\Cake\ORM\Association\BelongsTo $Aros
 * @property \App\Model\Table\AcosTable|\Cake\ORM\Association\BelongsTo $Acos
 *
 * @method \App\Model\Entity\ArosAco get($primaryKey, $options = [])
 * @method \App\Model\Entity\ArosAco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ArosAco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ArosAco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ArosAco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ArosAco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ArosAco findOrCreate($search, callable $callback = null, $options = [])
 */
class ArosAcosTable extends Table
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

        $this->setTable('aros_acos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Aros', [
            'foreignKey' => 'aro_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Acos', [
            'foreignKey' => 'aco_id',
            'joinType' => 'INNER'
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
            ->scalar('_create')
            ->maxLength('_create', 2)
            ->requirePresence('_create', 'create')
            ->notEmpty('_create');

        $validator
            ->scalar('_read')
            ->maxLength('_read', 2)
            ->requirePresence('_read', 'create')
            ->notEmpty('_read');

        $validator
            ->scalar('_update')
            ->maxLength('_update', 2)
            ->requirePresence('_update', 'create')
            ->notEmpty('_update');

        $validator
            ->scalar('_delete')
            ->maxLength('_delete', 2)
            ->requirePresence('_delete', 'create')
            ->notEmpty('_delete');

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
        $rules->add($rules->existsIn(['aro_id'], 'Aros'));
        $rules->add($rules->existsIn(['aco_id'], 'Acos'));

        return $rules;
    }
}
