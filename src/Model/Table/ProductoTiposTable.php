<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductoTipos Model
 *
 * @property \App\Model\Table\ProductosTable|\Cake\ORM\Association\HasMany $Productos
 *
 * @method \App\Model\Entity\ProductoTipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductoTipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProductoTipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductoTipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductoTipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductoTipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductoTipo findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductoTiposTable extends Table
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

        $this->setTable('producto_tipos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Productos', [
            'foreignKey' => 'producto_tipo_id'
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
