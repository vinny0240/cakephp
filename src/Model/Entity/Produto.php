<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity
 *
 * @property int $id
 * @property string $nome
 * @property int $categoria_id
 * @property int $preco
 * @property \Cake\I18n\FrozenDate|null $criado
 * @property \Cake\I18n\FrozenDate|null $modificado
 *
 * @property \App\Model\Entity\Categoria $categoria
 * @property \App\Model\Entity\Cliente[] $clientes
 */
class Produto extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'categoria_id' => true,
        'preco' => true,
        'criado' => true,
        'modificado' => true,
        'categoria' => true,
        'clientes' => true,
    ];
}
