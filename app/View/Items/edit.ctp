<div class="items form">
    <?php echo $this->Form->create('Item'); ?>
    <fieldset>
        <legend><?php echo __('Edit Item'); ?></legend>
        <?php
        echo $this->Form->input('id');
        echo $this->Form->input('category_id');
        echo $this->Form->input('title');
        echo $this->Form->input('total_quantity');
        echo $this->Form->input('remaining_quantity');
        echo $this->Form->input('price');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Item.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Item.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Sales'), array('controller' => 'sales', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Sale'), array('controller' => 'sales', 'action' => 'add')); ?> </li>
    </ul>
</div>
