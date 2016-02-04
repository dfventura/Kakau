<div class="devices form">
<?php echo $this->Form->create('Device'); ?>
	<fieldset>
		<legend><?php echo __('Add Device'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('model');
		echo $this->Form->input('uuid');
		echo $this->Form->input('platform');
		echo $this->Form->input('version');
		echo $this->Form->input('app_version');
		echo $this->Form->input('image_path');
		echo $this->Form->input('user_modified');
                //testeasdfasdfasdakljflkalskdflkasjkldfjlkasjdflkajsdf;j
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Devices'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Conferences'), array('controller' => 'conferences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conference'), array('controller' => 'conferences', 'action' => 'add')); ?> </li>
	</ul>
</div>
