<ul class="breadcrumb">
    <li class="active">Conferências</li>
</ul>

<div class="container-fluid">
    <div class="row-fluid">
        <?php echo $this->Session->flash(); ?>

        <div class="search-well">
            <div class="pull-right" class="pull-left" style="margin-left: 3px">
                <input type="date"/>
                <input type="date"/>
                <?php echo $this->Html->link($this->Html->tag('i', ' Data'), array('action'=>'add'), array('escape' => false, 'class'=>'pull-left btn btn-primary')); ?>
            </div>
            <?php echo $this->Form->create('User', array('action' => 'index', 'class' => 'form-inline')); ?> 
                <div class="row-fluid">
                  
                    <div class="pull-left" style="margin-left: 3px"><?php echo $this->Form->input('search', array('label' => '', 'placeholder' => 'Procurar...')); ?></div>
                    <div class="pull-left" style="margin-left: 3px"><button class="btn"><i class="icon-search"></i> ir</button>
                </div>
                 
            <?php echo $this->Form->end(); ?>  
        </div>
    </div>  

        <div class="well">
                <h3><?php echo __('Conferências'); ?></h3>
                <table class="table table-striped"  style="font-size:11pt">
                    <thead>
                        <tr>
                            
                            <th>Dispositivo</th>                                
                            <th>Cliente</th>
                            <th>Itens conferidos</th>
                            <th>Criado</th>
                            <th>Modificado</th>
                             <th>Modificado por</th>                               
                            <th class="actions">Ações</th>
                        </tr>
                    <thead>
                    <tbody>                              
                        <?php foreach ($conferences as $conference): ?>
                            <tr>
                                
                                <td><?php echo $this->Html->link($conference['Device']['name'], array('controller' => 'devices', 'action' => 'view', $conference['Device']['id'])); ?></td>
                                <td><?php echo h($conference['Conference']['name']); ?>&nbsp;</td>
                                <td><?php echo h($conference['Conference']['id']); ?>&nbsp;</td>
                                <td><?php echo h($this->Time->format('d/m/Y H:i:s', $conference['Conference']['created'])); ?>&nbsp;</td>
                                <td><?php echo h($this->Time->format('d/m/Y H:i:s', $conference['Conference']['modified'])); ?>&nbsp;</td> <td><?php echo h($conference['Conference']['user_modified']); ?>&nbsp;</td>                               
                                <td>
                                    <strong><?php echo $this->Html->link($this->Html->tag('i', ' Ver', array('class'=>'icon-eye-open')), array('action'=>'view', $conference['Conference']['id']), array('escape' => false)); ?></strong>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
        </div>                       
    </div>       
</div>   


