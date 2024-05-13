<?php
/* Smarty version 4.3.4, created on 2024-05-13 05:08:50
  from '/Users/yazanaakel/Sites/localhost/backoffice/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_664184426e0d89_88740226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ef94ce8feb4d506c2f3c2536275078088b3817d' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/backoffice/themes/new-theme/template/content.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664184426e0d89_88740226 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
