<ul class="breadcrumb">
    <li><?php echo $this->Html->link(__('Conferência'), array('controller'=>'Conferences','action' => 'index')); ?> <span class="divider">/</span></li>
    <li><?php echo $this->Html->link(__('Dados do item'), array('action' => 'view', $this->data['Item']['id'])); ?> <span class="divider">/</span></li>
    <li class="active">Editar item</li>
</ul>

<div class="container-fluid">
    <div class="row-fluid">
        <?php echo $this->Session->flash(); ?>
        
        <div class="btn-toolbar">        
          <a href="#SaveModal" data-toggle="modal" class="btn btn-primary"><i class="icon-save"></i> Salvar</a>  
          <a href="#DeleteModal" data-toggle="modal" class="btn btn-danger"><i class="icon-remove"></i> Apagar</a>
          <div class="btn-group">
          </div>
        </div>    

        <div class="well">
        	   	<?php echo $this->Form->create('Item'); ?>
            	<?php echo $this->Form->input('id'); ?>
            	<?php echo $this->Form->input('product_id', array('label' => 'Produto', 'class' => 'span2')); ?>
                <?php echo $this->Form->input('unit_id', array('label' => 'Unidade', 'class' => 'span2')); ?>
                <?php echo $this->Form->input('conference_id', array('label' => 'Cliente', 'class' => 'span2')); ?>
                <?php echo $this->Form->input('checked', array('label' => 'Quantidade', 'class' => 'span2')); ?>
				<?php echo $this->Form->input('note', array('label' => 'Observações', 'class' => 'span2')); ?>
				
                    <div class="modal small hide fade" id="SaveModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 id="myModalLabel">Confirmação</h3>
                        </div>
                        <div class="modal-body">
                            <p class="error-text"><i class="icon-warning-sign modal-icon"></i>Deseja salvar as alterações?</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                            <button class="btn btn-primary"><i class="icon-save"></i> Salvar</button>
                        </div>
                    </div> 
        </div> 
            <?php echo $this->Form->end(); ?>  
        
            <?php echo $this->Form->create('Product', array('action' => 'delete', $this->data['Product']['id'])); ?>
                <div class="modal small hide fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 id="myModalLabel">Confirmação</h3>
                        </div>
                        <div class="modal-body">
                            <p class="error-text"><i class="icon-warning-sign modal-icon"></i>Deseja realmente deletar?</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                            <button class="btn btn-danger"><i class="icon-remove"></i> Deletar</button>
                        </div>
                </div>
            <?php echo $this->Form->end(); ?>      
          
        </div>
    </div>
</div>

