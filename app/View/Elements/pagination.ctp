<div class="pagination">
    <div class="row-fluid">
        <div class="span3" style="text-align: left">
            <?php
                echo $this->Paginator->counter(array(
                'format' => __('Encontrado: {:start} - {:end} de {:count}')
                ));
            ?> 
        </div>
        <div class="span6" style="text-align: center">
            <ul>                        	
                <?php
                    echo $this->Paginator->prev(' « ', array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                    echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                    echo $this->Paginator->next(' » ', array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                ?>
            </ul>
        </div>
        <div class="span3" style="text-align: right">   
            <?php echo $this->Form->create($model, array('action' => 'index/page:')); ?> 
                Página
                <?php echo $this->Form->input('name', array(
                    'label' => false, 
                    'div' => false,
                    'class' => 'input-micro', 
                    'value' => $this->Paginator->counter(array('format' => '{:page}')), 
                    'onchange' => 'GoToPage()')); 
                ?>                           
                <?php echo $this->Paginator->counter(array('format' => __('de {:pages}'))); ?>
            <?php echo $this->Form->end(); ?>  
        </div>
        <script>
            function GoToPage(){
                document.getElementById('ProfessionIndexForm').action += document.getElementById('ProfessionName').value;
                //alert(document.getElementById('ProfessionName').value);
            }
        </script>
    </div>
</div>  
