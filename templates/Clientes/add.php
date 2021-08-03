<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 * @var \Cake\Collection\CollectionInterface|string[] $categorias
 * @var \Cake\Collection\CollectionInterface|string[] $produtos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Clientes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clientes form content">
            <?= $this->Form->create($cliente) ?>
            <fieldset>
                <legend><?= __('Add Cliente') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('categoria_id', ['options' => $categorias]);
                    echo $this->Form->control('produto_id', ['options' => $produtos]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
