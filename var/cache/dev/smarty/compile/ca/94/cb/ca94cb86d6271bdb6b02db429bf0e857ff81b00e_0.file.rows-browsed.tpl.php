<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:29
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/rows-browsed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac053c5c46_83858526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca94cb86d6271bdb6b02db429bf0e857ff81b00e' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/rows-browsed.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641ac053c5c46_83858526 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'rows_browsed' => 
  array (
    'compiled_filepath' => '/Users/yazanaakel/Sites/localhost/var/cache/dev/smarty/compile/ca/94/cb/ca94cb86d6271bdb6b02db429bf0e857ff81b00e_0.file.rows-browsed.tpl.php',
    'uid' => 'ca94cb86d6271bdb6b02db429bf0e857ff81b00e',
    'call_name' => 'smarty_template_function_rows_browsed_4216580236641ac053c2ee8_86216858',
  ),
));
}
/* smarty_template_function_rows_browsed_4216580236641ac053c2ee8_86216858 */
if (!function_exists('smarty_template_function_rows_browsed_4216580236641ac053c2ee8_86216858')) {
function smarty_template_function_rows_browsed_4216580236641ac053c2ee8_86216858(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 400) {?>
    <span class="danger"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 rows browsed</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 100) {?>
    <span class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 rows browsed</span>
  <?php } else { ?>
    <span class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 rows browsed</span>
  <?php }
}}
/*/ smarty_template_function_rows_browsed_4216580236641ac053c2ee8_86216858 */
}
