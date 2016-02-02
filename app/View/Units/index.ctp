<ul class="breadcrumb">
    <li class="active">Unidades</li>
</ul>

<div class="container-fluid">
    <div class="row-fluid">
        <?php echo $this->Session->flash(); ?>

        <div class="search-well">
          
            <?php echo $this->Form->create('Unit', array('action' => 'index', 'class' => 'form-inline')); ?> 
                <div class="row-fluid">
                    <?php echo $this->Html->link($this->Html->tag('i', ' Adicionar', array('class'=>'icon-plus')), array('action'=>'add'), array('escape' => false, 'class'=>'pull-left btn btn-primary')); ?>
                    <div class="pull-left" style="margin-left: 3px"><?php echo $this->Form->input('search', array('label' => '', 'placeholder' => 'Procurar...')); ?></div>
                    <div class="pull-left" style="margin-left: 3px"><button class="btn"><i class="icon-search"></i> ir</button>
                </div>
            <?php echo $this->Form->end(); ?>  
        </div>
    </div>  

        <div class="well">
                <h3><?php echo __('Unidades'); ?></h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Criado</th>
                            <th>Modificado</th>
                            <th>Modificado por</th>                                  
                            <th class="actions">Ações</th>
                        </tr>
                    <thead>
                    <tbody>                              
                        <?php foreach ($units as $unit): ?>
                            <tr>
                                <td><?php echo $this->Html->link(h($unit['Unit']['name']), array('action'=>'view', $unit['Unit']['id']), array('escape' => false)); ?>&nbsp;</td>
                                <td><?php echo h($this->Time->format('d/m/Y H:i:s', $unit['Unit']['created'])); ?>&nbsp;</td>
                                <td><?php echo h($this->Time->format('d/m/Y H:i:s', $unit['Unit']['modified'])); ?>&nbsp;</td> 
                                <td><?php echo h($this->Time->format('d/m/Y H:i:s', $unit['Unit']['user_modified'])); ?>&nbsp;</td>                                 
                                <td>
                                    <strong><?php echo $this->Html->link($this->Html->tag('i', ' Ver', array('class'=>'icon-eye-open')), array('action'=>'view', $unit['Unit']['id']), array('escape' => false)); ?></strong>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
        </div>                       
    </div>       
</div>   
