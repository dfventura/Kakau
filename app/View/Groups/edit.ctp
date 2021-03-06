<ul class="breadcrumb">
    <li><?php echo $this->Html->link(__('Grupos de usuários'), array('action' => 'index')); ?> <span class="divider">/</span></li>
    <li><?php echo $this->Html->link(__('Dados do Grupo'), array('action' => 'view', $this->data['Group']['id'])); ?> <span class="divider">/</span></li>
    <li class="active">Editar Grupo</li>
</ul>

<div class="container-fluid">
    <div class="row-fluid">
        <?php echo $this->Session->flash(); ?>

        <div class="btn-toolbar">  
            <?php echo $this->Html->link($this->Html->tag('i', ' Salvar', array('class'=>'icon-save')), '#SaveModal', array('escape' => false, 'data-toggle'=>'modal', 'class'=>' btn btn-primary')); ?>
            <?php echo $this->Html->link($this->Html->tag('i', ' Deletar', array('class'=>'icon-remove')), '#DeleteModal', array('escape' => false, 'data-toggle'=>'modal', 'class'=>' btn btn-danger')); ?>
        </div>      

        <div class="well">
        <?php echo $this->Form->create('Group'); ?>
            <?php echo $this->Form->input('id'); ?>

            <div class="toc">
                <?php echo $this->Html->image($this->data['Group']['image_path'], array('class' => 'img-UserGroup')); ?>
            </div>
            <?php 
                echo $this->Form->input('name', array('label' => 'Nome', 'class' => 'span3'));
            ?>

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
            
        <?php echo $this->Form->end(); ?>  
        
        <?php echo $this->Form->create('Group', array('action' => 'delete', $this->data['Group']['id'])); ?>
            <div class="modal small hide fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">Confirmação</h3>
                    </div>
                    <div class="modal-body">
                        <p class="error-text"><i class="icon-warning-sign modal-icon"></i>Deseja realmente deletar este Grupo?</p>
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
