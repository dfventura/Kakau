<div class="photos view">
<h2><?php echo __('Photo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Conference'); ?></dt>
		<dd>
			<?php echo $this->Html->link($photo['Conference']['id'], array('controller' => 'conferences', 'action' => 'view', $photo['Conference']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ImageBase64'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['imageBase64']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Modified'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['user_modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Photo'), array('action' => 'edit', $photo['Photo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Photo'), array('action' => 'delete', $photo['Photo']['id']), array(), __('Are you sure you want to delete # %s?', $photo['Photo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conferences'), array('controller' => 'conferences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conference'), array('controller' => 'conferences', 'action' => 'add')); ?> </li>
	</ul>
</div>
