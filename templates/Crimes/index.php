<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Crime> $crimes
 */
?>
<div class="crimes index content">
    <?= $this->Html->link(__('New Crime'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Crimes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('case_number') ?></th>
                    <th><?= $this->Paginator->sort('location') ?></th>
                    <th><?= $this->Paginator->sort('agency') ?></th>
                    <th><?= $this->Paginator->sort('reported_date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($crimes as $crime): ?>
                <tr>
                    <td><?= $this->Number->format($crime->id) ?></td>
                    <td><?= h($crime->description) ?></td>
                    <td><?= h($crime->case_number) ?></td>
                    <td><?= h($crime->location) ?></td>
                    <td><?= h($crime->agency) ?></td>
                    <td><?= h($crime->reported_date) ?></td>
                    <td><?= h($crime->created) ?></td>
                    <td><?= h($crime->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $crime->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $crime->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $crime->id], ['confirm' => __('Are you sure you want to delete # {0}?', $crime->id)]) ?>
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