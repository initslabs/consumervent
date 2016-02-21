<?php
/**
 * Created by PhpStorm.
 * User: Akinsete
 * Date: 2/20/16
 * Time: 9:20 PM
 */


 echo $this->Html->link('<button class="btn1 login-btn"><i class="fa fa-facebook"></i>Login with Facebook</button>', array( 'action' => 'social_login', 'Facebook'), array('escape' => FALSE)); ?>
<?php echo $this->Html->link('<button class="btn6 login-btn"><i class="fa fa-twitter"></i>Login with Twitter</button>', array('action' => 'social_login', 'Twitter'), array('escape' => FALSE)); ?>
<?php echo $this->Html->link('<button class="btn6 login-btn"><i class="fa fa-google-plus"></i>Login with Google</button>', array('action' => 'social_login', 'Google'), array('escape' => FALSE)); ?>
