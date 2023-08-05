<?php
$this->loadHelper('PhpInfo.Info');
$this->Html->css('PhpInfo.styles', ['block' => 'css']);
?>

<?= $this->Info->display(); ?>