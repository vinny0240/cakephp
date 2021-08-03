<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 * @var \Cake\Collection\CollectionInterface|string[] $categorias
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Produtos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="produtos form content">
            <?= $this->Form->create($produto) ?>
            <fieldset>
                <legend><?= __('Add Produto') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('categoria_id', ['options' => $categorias]);
                    echo $this->Form->control('preco');
                    echo $this->Form->control('criado', ['empty' => true]);
                    echo $this->Form->control('modificado', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
