<!DOCTYPE html>
<html>
<body>
    <div id="container">
            <div id="header">

                <?php echo $this->Html->charset(); ?>
                <!-- <meta charset="utf-8"> >
                
                <?php echo $this->Html->meta(array('content' => 'IE=edge,chrome=1', 'http-equiv' => 'X-UA-Compatible')); ?>
                <!-- <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"> -->
                
                <?php echo $this->Html->meta(array('name' => 'iewport', 'content' => 'width=device-width, initial-scale=1.0')); ?>
                <?php echo $this->Html->meta(array('name' => 'description', 'content' => '')); ?>
                <?php echo $this->Html->meta(array('name' => 'author', 'content' => '')); ?>

                <?php echo $this->Html->css(array('/lib/bootstrap/css/bootstrap', '/stylesheets/theme', '/lib/font-awesome/css/font-awesome'));  ?>
                <?php echo $this->Html->script('/lib/jquery-1.7.2.min'); ?>

            </div>
        
            <div class="navbar">
                <div class="navbar-inner">                        
                        <a class="brand" href="index.html"><span class="first">Sistema</span> <span class="second">Kakau</span></a>
                </div>
            </div>
                            
            <div id="content">
                    <?php echo $this->Session->flash(); ?>
                    <?php echo $this->Session->flash('auth'); ?>
                    <?php echo $this->fetch('content'); ?>
            </div>		
    </div>

    <?php echo $this->Html->script('/lib/bootstrap/js/bootstrap'); ?>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
   </script>       
   
</body>
</html>
