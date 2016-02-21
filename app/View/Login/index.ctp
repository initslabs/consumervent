
<div>
    <div>
        <div>
            <div class="parallax-window"
                 data-parallax="scroll"
                 data-bleed="10"
                 data-position="top"
                 data-speed="0.2"
                 data-image-src="<?php echo Router::url('/', true) ?>img/background2.png"></div>
            <div class="header-content" >
                <h1> Get Access </h1>
           </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2" style="padding-bottom: 0px">
            <ul class="social text-center">
                <li class="facebook"><?php echo $this->Html->link('<p class="btn login-btn"><i class="fa fa-facebook"></i>Login with Facebook</p>', array('action' => 'social_login', 'Facebook'), array('escape' => FALSE)); ?></li>
                <li class="twitter"><?php echo $this->Html->link('<p class="btn login-btn"><i class="fa fa-twitter"></i>Login with Twitter</p>', array('action' => 'social_login', 'Twitter'), array('escape' => FALSE)); ?></li>
                <li class="google"><?php echo $this->Html->link('<p class="btn login-btn"><i class="fa fa-google-plus"></i>Login with Google</p>', array('action' => 'social_login', 'Google'), array('escape' => FALSE)); ?></li>
            </ul>
        </div>
    </div>
</div>


