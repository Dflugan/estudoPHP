<?php if(!class_exists('Rain\Tpl')){exit;}?><h1>Hello <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
<p>Testando aplicação</p>
<p>Versão PHP <?php echo htmlspecialchars( $Version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
<small>Data atual <?php echo htmlspecialchars( $data, ENT_COMPAT, 'UTF-8', FALSE ); ?></small>