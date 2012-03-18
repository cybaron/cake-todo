<?php
$session->flash('auth');
echo $form->create('User', array('controller' => 'users', 'action' => 'login'));
echo $form->inputs(array(
        'legend' => __('Login', true),
        'username',
        'password'
      ));
echo $form->end('Login');
?>
