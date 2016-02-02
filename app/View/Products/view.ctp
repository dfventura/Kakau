<ul class="breadcrumb">
   <li><?php echo $this->Html->link(__('Produtos'), array('action' => 'index')); ?> <span class="divider">/</span></li>
    <li class="active">Dados do produto</li>
</ul>

<div class="container-fluid">
    <div class="row-fluid">
        <?php echo $this->Session->flash(); ?>
        <div class="btn-toolbar">     
          <a href="../edit/<?php echo h($product['Product']['id']); ?>" class="btn btn-primary"><i class="icon-edit"></i> Editar</a>                     
          <div class="btn-group">
          </div>
        </div>      

        <div class="well"> 
            <div class="row-fluid">
                <div class="pull-left" style="margin-left: 40px;">
                    <h2><?php echo h($product['Product']['name']); ?></h2>
                    <p><strong>Criado: </strong><?php echo h($this->Time->format('d/m/Y H:i:s', $product['Product']['created'])); ?></p>
                    <p><strong>Modificado: </strong><?php echo h($this->Time->format('d/m/Y H:i:s', $product['Product']['modified'])); ?></p>
                    <p><strong>Modificado por: </strong><?php echo h($product['Product']['user_modified']); ?>&nbsp;</p> 
                </div>
            </div>
        </div>
    </div>
</div>

