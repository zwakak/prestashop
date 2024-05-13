<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:42
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/sql-queries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac122930f4_66241459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24298f940cbd4f5d7f2bf6423a81eb04ce09ed00' => 
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
function content_6641ac122930f4_66241459 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'sql_queries' => 
  array (
    'compiled_filepath' => '/Users/yazanaakel/Sites/localhost/var/cache/dev/smarty/compile/24/29/8f/24298f940cbd4f5d7f2bf6423a81eb04ce09ed00_2.file.sql-queries.tpl.php',
    'uid' => '24298f940cbd4f5d7f2bf6423a81eb04ce09ed00',
    'call_name' => 'smarty_template_function_sql_queries_14928991226641ac12290707_60938075',
  ),
));
}
/* smarty_template_function_sql_queries_14928991226641ac12290707_60938075 */
if (!function_exists('smarty_template_function_sql_queries_14928991226641ac12290707_60938075')) {
function smarty_template_function_sql_queries_14928991226641ac12290707_60938075(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 150) {?>
    <span class="danger"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 queries</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 100) {?>
    <span class="warning"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 queries</span>
  <?php } else { ?>
    <span class="success"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 queries</span>
  <?php }
}}
/*/ smarty_template_function_sql_queries_14928991226641ac12290707_60938075 */
}
