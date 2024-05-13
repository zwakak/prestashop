<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:42
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/peak-memory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac122852f6_45000660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c7d6d16bcea3c04ca3183b52ec165d14977b180' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/peak-memory.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641ac122852f6_45000660 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'peak_memory' => 
  array (
    'compiled_filepath' => '/Users/yazanaakel/Sites/localhost/var/cache/dev/smarty/compile/8c/7d/6d/8c7d6d16bcea3c04ca3183b52ec165d14977b180_2.file.peak-memory.tpl.php',
    'uid' => '8c7d6d16bcea3c04ca3183b52ec165d14977b180',
    'call_name' => 'smarty_template_function_peak_memory_18251270456641ac122800e2_88945584',
  ),
));
}
/* smarty_template_function_peak_memory_18251270456641ac122800e2_88945584 */
if (!function_exists('smarty_template_function_peak_memory_18251270456641ac122800e2_88945584')) {
function smarty_template_function_peak_memory_18251270456641ac122800e2_88945584(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php $_smarty_tpl->_assignInScope('data', round($_smarty_tpl->tpl_vars['data']->value/1048576,2));?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 16) {?>
    <span class="danger"><?php echo htmlspecialchars((string) sprintf("%0.1f",$_smarty_tpl->tpl_vars['data']->value), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 12) {?>
    <span class="warning"><?php echo htmlspecialchars((string) sprintf("%0.1f",$_smarty_tpl->tpl_vars['data']->value), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo htmlspecialchars((string) sprintf("%0.1f",$_smarty_tpl->tpl_vars['data']->value), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }?>
  Mb
<?php
}}
/*/ smarty_template_function_peak_memory_18251270456641ac122800e2_88945584 */
}
