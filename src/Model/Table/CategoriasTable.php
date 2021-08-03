<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categorias Model
 *
 * @property \App\Model\Table\ClientesTable&\Cake\ORM\Association\HasMany $Clientes
 * @property \App\Model\Table\ProdutosTable&\Cake\ORM\Association\HasMany $Produtos
 *
 * @method \App\Model\Entity\Categoria newEmptyEntity()
 * @method \App\Model\Entity\Categoria newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Categoria[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Categoria get($primaryKey, $options = [])
 * @method \App\Model\Entity\Categoria findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Categoria patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Categoria[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Categoria|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categoria saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categoria[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Categoria[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Categoria[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Categoria[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CategoriasTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('categorias');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->hasMany('Clientes', [
            'foreignKey' => 'categoria_id',
        ]);
        $this->hasMany('Produtos', [
            'foreignKey' => 'categoria_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 50)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        $validator
            ->date('criado')
            ->allowEmptyDate('criado');

        $validator
            ->date('modificado')
            ->allowEmptyDate('modificado');

        return $validator;
    }
}
