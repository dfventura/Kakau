<ul class="breadcrumb">
    <li><?php echo $this->Html->link(__('Conferências'), array('action' => 'index')); ?> <span class="divider">/</span></li>
    <li class="active">Dados da conferência</li>
</ul>

<div class="container-fluid">
        <?php echo $this->Session->flash(); ?>
        <div class="btn-toolbar">     
          <?php echo $this->Html->link($this->Html->tag('i', ' Editar', array('class'=>'icon-edit')), array('action'=>'edit', $conference['Conference']['id']), array('escape' => false, 'class'=>'btn btn-primary')); ?>     
        </div>  
        <div class="well"> 
            <div class="row-fluid">
                <div class="pull-left span4" style='position:relative;'>
                	<h2>Cliente: <?php echo h($conference['Conference']['name']); ?></h2>
                    <!-- Inivio do Carousel -->
                    <div id="myCarousel" class="carousel slide">
						  <!-- Carousel items -->
						  <div class="carousel-inner">
						    <div class="active item">
						    	<img src="/kakau/images/batata.jpeg" height="400" width="600">
						    </div>
						    <div class="item">
								<img src="/kakau/images/batata.jpeg" height="400" width="600">
						    </div>
						    <div class="item">
						    	<img src="/kakau/images/batata.jpeg" height="400" width="600">
						    </div>
						  </div>
						  <!-- Carousel nav -->
						  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
						  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
						<div class="pull-left" style='position:relative;'>
                    
                    <div style='position:relative; bottom:20px; right:1px; color:red;'>
                        <a href="#FotoModal" data-toggle="modal"><span class='label label-info'><i class="icon-camera"></i> Editar foto</span></a>
                    </div>    
                </div>
					</div>
					<!-- Fim do Carousel  -->
                </div>
                <div class="pull-left span8">
                    <h2>Itens Registrados:</h2>
					<table class="table table-striped"  style="font-size:11pt">
						<thead>
							<tr>
								<th style="width: 10px;"></th> 
								<th><?php echo ('Produto'); ?></th>
								<th><?php echo ('Und'); ?></th>
								<th><?php echo ('Qnt'); ?></th>
								<th><?php echo ('Anotação'); ?></th>
								<th><?php echo ('Ações'); ?></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($items as $item): ?>
								<tr style="height:30px">
									<th style="width: 10px;"></th> 
									<td><?php echo $item['Product']['name']; ?>&nbsp;</td>
									<td><?php echo $item['Unit']['name']; ?>&nbsp;</td>
									<td><?php echo $item['Item']['checked']; ?>&nbsp;</td>
									<td><?php echo $item['Item']['note']; ?></td>
									<td>
										<?php echo $this->Html->link($this->Html->tag('i', ' Editar', array('class'=>'icon-edit')), array('controller' =>'Items' ,'action'=>'edit', $item['Item']['id'], $conference['Conference']['id']), array('escape' => false)); ?>
									</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
				<div class="row-fluid;">
					<b> Dispositivo utilizado:</b>&nbsp;<?php echo h($conference['Device']['name']); ?>&nbsp;&nbsp;&nbsp;<b>Data: </b> &nbsp;<?php echo h($conference['Conference']['created']); ?>
				</div>
		
			
		</div>
	</div>
</div>


