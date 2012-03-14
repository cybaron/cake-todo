<h1>Add Posts</h1>
<?php
echo $form->create('Post');
echo $form->input('title');
echo $form->input('body', array('rows' => '3'));
echo $form->end('Save Post');
?>
