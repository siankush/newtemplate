<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rating $rating
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $cars
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Ratings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ratings form content">
            <?= $this->Form->create($rating) ?>
            <fieldset>
                <legend><?= __('Add Rating') ?></legend>
                <?php
                    // echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    // echo $this->Form->control('car_id', ['options' => $cars, 'empty' => true]);
                    echo $this->Form->select('rating', [
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                    ],
                    ['class'=>'form-control p-2']
                );
                    echo $this->Form->control('review',['type'=>'textarea']);
                    // echo $this->Form->control('status');
                    // echo $this->Form->control('created_at');
                    // echo $this->Form->control('modified_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
