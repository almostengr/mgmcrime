<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Crime $crime
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Crime'), ['action' => 'edit', $crime->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Crime'), ['action' => 'delete', $crime->id], ['confirm' => __('Are you sure you want to delete # {0}?', $crime->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Crimes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Crime'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="crimes view content">
            <h3><?= h($crime->description) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($crime->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Case Number') ?></th>
                    <td><?= h($crime->case_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Location') ?></th>
                    <td><?= h($crime->location) ?></td>
                </tr>
                <tr>
                    <th><?= __('Agency') ?></th>
                    <td><?= h($crime->agency) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($crime->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reported Date') ?></th>
                    <td><?= h($crime->reported_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($crime->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($crime->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>