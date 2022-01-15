<?php if(!class_exists('Rain\Tpl')){exit;}?><h2>
    Bem vindo, <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?>

</h2>

<p>
    <?php echo htmlspecialchars( $message, ENT_COMPAT, 'UTF-8', FALSE ); ?>

</p>