<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Rating> $ratings
 */
?>
<div class="ratings index content">
    <?= $this->Html->link(__('New Rating'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ratings') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('car_id') ?></th>
                    <th><?= $this->Paginator->sort('rating') ?></th>
                    <th><?= $this->Paginator->sort('review') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('modified_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ratings as $rating): ?>
                <tr>
                    <td><?= $this->Number->format($rating->id) ?></td>
                    <td><?= $rating->has('user') ? $this->Html->link($rating->user->name, ['controller' => 'Users', 'action' => 'view', $rating->user->id]) : '' ?></td>
                    <td><?= $rating->has('car') ? $this->Html->link($rating->car->name, ['controller' => 'Cars', 'action' => 'view', $rating->car->id]) : '' ?></td>
                    <td><?= h($rating->rating) ?></td>
                    <td><?= h($rating->review) ?></td>
                    <td><?= h($rating->status) ?></td>
                    <td><?= h($rating->created_at) ?></td>
                    <td><?= h($rating->modified_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $rating->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rating->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rating->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rating->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
