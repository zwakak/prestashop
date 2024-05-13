<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:29
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/total-queries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac053d77a9_65547977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '458659a557523f418824d3b8e60d7d714b44a992' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/total-queries.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641ac053d77a9_65547977 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'total_queries' => 
  array (
    'compiled_filepath' => '/Users/yazanaakel/Sites/localhost/var/cache/dev/smarty/compile/45/86/59/458659a557523f418824d3b8e60d7d714b44a992_0.file.total-queries.tpl.php',
    'uid' => '458659a557523f418824d3b8e60d7d714b44a992',
    'call_name' => 'smarty_template_function_total_queries_14867101806641ac053d4bc3_28291342',
  ),
));
}
/* smarty_template_function_total_queries_14867101806641ac053d4bc3_28291342 */
if (!function_exists('smarty_template_function_total_queries_14867101806641ac053d4bc3_28291342')) {
function smarty_template_function_total_queries_14867101806641ac053d4bc3_28291342(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value >= 100) {?>
    <span class="danger"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value >= 50) {?>
    <span class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php }
}}
/*/ smarty_template_function_total_queries_14867101806641ac053d4bc3_28291342 */
}
