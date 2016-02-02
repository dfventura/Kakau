<div class="photos form">
<?php echo $this->Form->create('Photo'); ?>
	<fieldset>
		<legend><?php echo __('Add Photo'); ?></legend>
	<?php
		echo $this->Form->input('conference_id');
		echo $this->Form->input('name');
		echo $this->Form->input('imageBase64');
		echo $this->Form->input('user_modified');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Photos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Conferences'), array('controller' => 'conferences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conference'), array('controller' => 'conferences', 'action' => 'add')); ?> </li>
	</ul>
</div>
