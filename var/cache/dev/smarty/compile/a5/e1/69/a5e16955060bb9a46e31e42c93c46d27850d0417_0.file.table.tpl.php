<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:29
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac053cea66_42979557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5e16955060bb9a46e31e42c93c46d27850d0417' => 
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
function content_6641ac053cea66_42979557 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'table' => 
  array (
    'compiled_filepath' => '/Users/yazanaakel/Sites/localhost/var/cache/dev/smarty/compile/a5/e1/69/a5e16955060bb9a46e31e42c93c46d27850d0417_0.file.table.tpl.php',
    'uid' => 'a5e16955060bb9a46e31e42c93c46d27850d0417',
    'call_name' => 'smarty_template_function_table_10554226516641ac053cbf00_25859644',
  ),
));
}
/* smarty_template_function_table_10554226516641ac053cbf00_25859644 */
if (!function_exists('smarty_template_function_table_10554226516641ac053cbf00_25859644')) {
function smarty_template_function_table_10554226516641ac053cbf00_25859644(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 30) {?>
    <span class="danger"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 20) {?>
    <span class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php }
}}
/*/ smarty_template_function_table_10554226516641ac053cbf00_25859644 */
}
