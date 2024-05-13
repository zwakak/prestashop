<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:29
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/sql-queries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac053ca2d5_81804364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed9b1b983c4e25bf46e53d36d37002f876851078' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/sql-queries.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641ac053ca2d5_81804364 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'sql_queries' => 
  array (
    'compiled_filepath' => '/Users/yazanaakel/Sites/localhost/var/cache/dev/smarty/compile/ed/9b/1b/ed9b1b983c4e25bf46e53d36d37002f876851078_0.file.sql-queries.tpl.php',
    'uid' => 'ed9b1b983c4e25bf46e53d36d37002f876851078',
    'call_name' => 'smarty_template_function_sql_queries_18527561396641ac053c7993_57386655',
  ),
));
}
/* smarty_template_function_sql_queries_18527561396641ac053c7993_57386655 */
if (!function_exists('smarty_template_function_sql_queries_18527561396641ac053c7993_57386655')) {
function smarty_template_function_sql_queries_18527561396641ac053c7993_57386655(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 150) {?>
    <span class="danger"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 queries</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 100) {?>
    <span class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 queries</span>
  <?php } else { ?>
    <span class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 queries</span>
  <?php }
}}
/*/ smarty_template_function_sql_queries_18527561396641ac053c7993_57386655 */
}
