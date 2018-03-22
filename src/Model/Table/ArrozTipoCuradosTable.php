<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ArrozTipoCurados Model
 *
 * @property \App\Model\Table\TecnicasTable|\Cake\ORM\Association\HasMany $Tecnicas
 *
 * @method \App\Model\Entity\ArrozTipoCurado get($primaryKey, $options = [])
 * @method \App\Model\Entity\ArrozTipoCurado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ArrozTipoCurado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ArrozTipoCurado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ArrozTipoCurado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ArrozTipoCurado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ArrozTipoCurado findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ArrozTipoCuradosTable extends Table
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

        $this->setTable('arroz_tipo_curados');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Tecnicas', [
            'foreignKey' => 'arroz_tipo_curado_id'
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
