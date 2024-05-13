<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:29
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/peak-memory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac053bc0a0_09507230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d67e2919743eba4b70949a4683aed93fd248684' => 
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
function content_6641ac053bc0a0_09507230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'peak_memory' => 
  array (
    'compiled_filepath' => '/Users/yazanaakel/Sites/localhost/var/cache/dev/smarty/compile/3d/67/e2/3d67e2919743eba4b70949a4683aed93fd248684_0.file.peak-memory.tpl.php',
    'uid' => '3d67e2919743eba4b70949a4683aed93fd248684',
    'call_name' => 'smarty_template_function_peak_memory_9067757956641ac053b6bf2_71927856',
  ),
));
}
/* smarty_template_function_peak_memory_9067757956641ac053b6bf2_71927856 */
if (!function_exists('smarty_template_function_peak_memory_9067757956641ac053b6bf2_71927856')) {
function smarty_template_function_peak_memory_9067757956641ac053b6bf2_71927856(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php $_smarty_tpl->_assignInScope('data', round($_smarty_tpl->tpl_vars['data']->value/1048576,2));?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 16) {?>
    <span class="danger"><?php echo sprintf("%0.1f",$_smarty_tpl->tpl_vars['data']->value);?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 12) {?>
    <span class="warning"><?php echo sprintf("%0.1f",$_smarty_tpl->tpl_vars['data']->value);?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo sprintf("%0.1f",$_smarty_tpl->tpl_vars['data']->value);?>
</span>
  <?php }?>
  Mb
<?php
}}
/*/ smarty_template_function_peak_memory_9067757956641ac053b6bf2_71927856 */
}
