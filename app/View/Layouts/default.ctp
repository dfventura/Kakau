<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
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
                
                <!--datepicker boostrap.-->
                <?php echo $this->Html->css(array('/lib/datepicker/css/datepicker', '/lib/select2-3.5.3/select2'));  ?>
                <?php echo $this->Html->script(array('/lib/datepicker/js/bootstrap-datepicker', '/lib/datepicker/js/datepicker', '/lib/select2-3.5.3/select2')); ?>       
            </div>
        
            <div class="navbar">
                <div class="navbar-inner">
                        <ul class="nav pull-right">
                            <li id="fat-menu" class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                                    <?php echo $this->Html->image($this->Session->read('Auth.User.image_path'), array('class' => 'img-face1')); ?>  <?php echo $this->Session->read('Auth.User.name'); ?>
                                    <i class="icon-caret-down"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1"><?php echo $this->Html->link(__('Minha conta'), array('controller' => 'Users', 'action' => 'myaccount', $this->Session->read('Auth.User.id'))); ?></a></li>
                                    <li class="divider"></li>
                                    <li><a tabindex="-1"> <?php echo $this->Html->link(__('Logout'), array('controller' => 'Users', 'action' => 'logout')); ?> </a></li>
                                </ul>
                            </li>

                        </ul>
                        <a class="brand" href="index.html"><span class="first">Sistema</span> <span class="second">Kakau</span></a>
                </div>
            </div>
        
            <div class="" id="body">
                <?php echo $this->element('menu'); ?>
                <div id="content">
                        <?php echo $this->Session->flash(); ?>
                        <?php echo $this->Session->flash('auth'); ?>
                        <?php echo $this->fetch('content'); ?>
                </div>	
            </div>	
    </div>

    <?php echo $this->Html->script('/lib/bootstrap/js/bootstrap'); ?>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
        
        function collapse_content(){
            if(document.getElementById('menu').style.display=="none") {
                    document.getElementById('menu').style.display = "inline";
                    document.getElementById('body').className = 'content';
            }
            else {
                    document.getElementById('menu').style.display = "none";
                    document.getElementById('body').className = '';
            }
        }
        
        $(document).ready(function () {
            $input = $("#select_date");
            $input.datepicker({
                format: 'dd/mm/yyyy'
            });
            $input.data('datepicker').hide = function () {};
            $input.datepicker('show');
        });
            
    </script>
   
</body>
</html>
