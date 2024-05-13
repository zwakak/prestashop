<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:42
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac12297544_58999788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2bdc4d221e9a42d0bae7f70829c20c820a0f049' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/table.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641ac12297544_58999788 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'table' => 
  array (
    'compiled_filepath' => '/Users/yazanaakel/Sites/localhost/var/cache/dev/smarty/compile/f2/bd/c4/f2bdc4d221e9a42d0bae7f70829c20c820a0f049_2.file.table.tpl.php',
    'uid' => 'f2bdc4d221e9a42d0bae7f70829c20c820a0f049',
    'call_name' => 'smarty_template_function_table_17121849076641ac12294c17_79195107',
  ),
));
}
/* smarty_template_function_table_17121849076641ac12294c17_79195107 */
if (!function_exists('smarty_template_function_table_17121849076641ac12294c17_79195107')) {
function smarty_template_function_table_17121849076641ac12294c17_79195107(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 30) {?>
    <span class="danger"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 20) {?>
    <span class="warning"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }
}}
/*/ smarty_template_function_table_17121849076641ac12294c17_79195107 */
}
