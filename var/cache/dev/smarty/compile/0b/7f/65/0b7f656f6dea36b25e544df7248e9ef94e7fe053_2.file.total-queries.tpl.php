<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:42
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/total-queries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac122a0149_01006028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b7f656f6dea36b25e544df7248e9ef94e7fe053' => 
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
function content_6641ac122a0149_01006028 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'total_queries' => 
  array (
    'compiled_filepath' => '/Users/yazanaakel/Sites/localhost/var/cache/dev/smarty/compile/0b/7f/65/0b7f656f6dea36b25e544df7248e9ef94e7fe053_2.file.total-queries.tpl.php',
    'uid' => '0b7f656f6dea36b25e544df7248e9ef94e7fe053',
    'call_name' => 'smarty_template_function_total_queries_6686261276641ac1229d5a7_40954166',
  ),
));
}
/* smarty_template_function_total_queries_6686261276641ac1229d5a7_40954166 */
if (!function_exists('smarty_template_function_total_queries_6686261276641ac1229d5a7_40954166')) {
function smarty_template_function_total_queries_6686261276641ac1229d5a7_40954166(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value >= 100) {?>
    <span class="danger"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value >= 50) {?>
    <span class="warning"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }
}}
/*/ smarty_template_function_total_queries_6686261276641ac1229d5a7_40954166 */
}
