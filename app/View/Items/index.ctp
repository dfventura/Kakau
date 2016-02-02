<ul class="breadcrumb">
    <li class="active">Itens Conferidos</li>
</ul>

<div class="container-fluid">
    <div class="row-fluid">
        <?php echo $this->Session->flash(); ?>
            <div class="search-well">
           
            <?php echo $this->Form->create('User', array('action' => 'index', 'class' => 'form-inline')); ?> 
                <div class="row-fluid">
                    <?php echo $this->Html->link($this->Html->tag('i', ' Adicionar', array('class'=>'icon-plus')), array('action'=>'add'), array('escape' => false, 'class'=>'pull-left btn btn-primary')); ?>

                    <?php echo $this->Html->link($this->Html->tag('i', ' Voltar a conferência', array('class'=>'')), array('controller'=>'Conferences','action'=>'index'), array('escape' => false, 'class'=>'pull-left btn btn-primary')); ?>
                   
                </div>
                
            <?php echo $this->Form->end(); ?>  
        </div>
    </div> 


        <div class="well">
                <h3><?php echo __('Intens'); ?></h3>
                <table class="table table-striped" style="font-size:11pt">
                    <thead>
                        <tr>
                            <th style="width: 26px;"></th>
                            <th>Produto</th>                                
                            <th>Unidade</th>
                            <th>Quantidade</th>
                            <th>Observações</th>
                            <th>Criado</th>
                            <th>Modificado</th>
                            <th>Modificado por</th> 
                            <th class="actions"><?php echo('Ações'); ?></th>                             
                        </tr>
                    <thead>
                    <tbody>                              
                        <?php foreach ($items as $item): ?>
                            <tr>
                            	<th style="width: 26px;"></th>
								<td>
									<?php echo $this->Html->link($item['Product']['name'], array('controller' => 'products', 'action' => 'view', $item['Product']['id'])); ?>
								</td>
								<td>
									<?php echo $this->Html->link($item['Unit']['name'], array('controller' => 'units', 'action' => 'view', $item['Unit']['id'])); ?>
								</td>
								
								<td><?php echo h($item['Item']['checked']); ?>&nbsp;</td>
								<td><?php echo h($item['Item']['note']); ?>&nbsp;</td>
								<td><?php echo h($item['Item']['created']); ?>&nbsp;</td>
								<td><?php echo h($item['Item']['modified']); ?>&nbsp;</td>
								<td><?php echo h($item['Item']['user_modified']); ?>&nbsp;</td>
								
								<td>
										<?php echo $this->Html->link($this->Html->tag('i', ' Editar', array('class'=>'icon-edit')), array('controller' =>'Items' ,'action'=>'edit', $item['Item']['id']), array('escape' => false)); ?>
									</tr>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
        </div>                       
    </div>       
</div>   



<div class="items index">
	<h2><?php echo __('Items'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idasdas'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('unit_id'); ?></th>
			<th><?php echo $this->Paginator->sort('conference_id'); ?></th>
			<th><?php echo $this->Paginator->sort('checked'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('user_modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($items as $item): ?>
	<tr>
		<td><?php echo h($item['Item']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($item['Product']['name'], array('controller' => 'products', 'action' => 'view', $item['Product']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($item['Unit']['name'], array('controller' => 'units', 'action' => 'view', $item['Unit']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($item['Conference']['id'], array('controller' => 'conferences', 'action' => 'view', $item['Conference']['id'])); ?>
		</td>
		<td><?php echo h($item['Item']['checked']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['note']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['created']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['modified']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['user_modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $item['Item']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $item['Item']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $item['Item']['id']), array(), __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Conferences'), array('controller' => 'conferences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conference'), array('controller' => 'conferences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Units'), array('controller' => 'units', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unit'), array('controller' => 'units', 'action' => 'add')); ?> </li>
	</ul>
</div>
