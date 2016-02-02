<div class="devices view">
<h2><?php echo __('Device'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($device['Device']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($device['Device']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model'); ?></dt>
		<dd>
			<?php echo h($device['Device']['model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uuid'); ?></dt>
		<dd>
			<?php echo h($device['Device']['uuid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Platform'); ?></dt>
		<dd>
			<?php echo h($device['Device']['platform']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Version'); ?></dt>
		<dd>
			<?php echo h($device['Device']['version']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('App Version'); ?></dt>
		<dd>
			<?php echo h($device['Device']['app_version']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Path'); ?></dt>
		<dd>
			<?php echo h($device['Device']['image_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($device['Device']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($device['Device']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Modified'); ?></dt>
		<dd>
			<?php echo h($device['Device']['user_modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Device'), array('action' => 'edit', $device['Device']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Device'), array('action' => 'delete', $device['Device']['id']), array(), __('Are you sure you want to delete # %s?', $device['Device']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Devices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conferences'), array('controller' => 'conferences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conference'), array('controller' => 'conferences', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Conferences'); ?></h3>
	<?php if (!empty($device['Conference'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Device Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('User Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($device['Conference'] as $conference): ?>
		<tr>
			<td><?php echo $conference['id']; ?></td>
			<td><?php echo $conference['device_id']; ?></td>
			<td><?php echo $conference['created']; ?></td>
			<td><?php echo $conference['modified']; ?></td>
			<td><?php echo $conference['user_modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'conferences', 'action' => 'view', $conference['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'conferences', 'action' => 'edit', $conference['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'conferences', 'action' => 'delete', $conference['id']), array(), __('Are you sure you want to delete # %s?', $conference['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Conference'), array('controller' => 'conferences', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
