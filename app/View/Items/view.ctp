<div class="items view">
<h2><?php echo __('Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($item['Product']['name'], array('controller' => 'products', 'action' => 'view', $item['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit'); ?></dt>
		<dd>
			<?php echo $this->Html->link($item['Unit']['name'], array('controller' => 'units', 'action' => 'view', $item['Unit']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Conference'); ?></dt>
		<dd>
			<?php echo $this->Html->link($item['Conference']['id'], array('controller' => 'conferences', 'action' => 'view', $item['Conference']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Checked'); ?></dt>
		<dd>
			<?php echo h($item['Item']['checked']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($item['Item']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($item['Item']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($item['Item']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Modified'); ?></dt>
		<dd>
			<?php echo h($item['Item']['user_modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item'), array('action' => 'edit', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item'), array('action' => 'delete', $item['Item']['id']), array(), __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conferences'), array('controller' => 'conferences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conference'), array('controller' => 'conferences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Units'), array('controller' => 'units', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unit'), array('controller' => 'units', 'action' => 'add')); ?> </li>
	</ul>
</div>
