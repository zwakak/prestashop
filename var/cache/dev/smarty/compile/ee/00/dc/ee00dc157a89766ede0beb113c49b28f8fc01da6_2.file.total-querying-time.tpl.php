<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:42
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/total-querying-time.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac122a48e4_96553075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee00dc157a89766ede0beb113c49b28f8fc01da6' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/total-querying-time.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641ac122a48e4_96553075 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'total_querying_time' => 
  array (
    'compiled_filepath' => '/Users/yazanaakel/Sites/localhost/var/cache/dev/smarty/compile/ee/00/dc/ee00dc157a89766ede0beb113c49b28f8fc01da6_2.file.total-querying-time.tpl.php',
    'uid' => 'ee00dc157a89766ede0beb113c49b28f8fc01da6',
    'call_name' => 'smarty_template_function_total_querying_time_17143452996641ac122a1c34_16743227',
  ),
));
}
/* smarty_template_function_total_querying_time_17143452996641ac122a1c34_16743227 */
if (!function_exists('smarty_template_function_total_querying_time_17143452996641ac122a1c34_16743227')) {
function smarty_template_function_total_querying_time_17143452996641ac122a1c34_16743227(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_total_querying_time_17143452996641ac122a1c34_16743227 */
}
