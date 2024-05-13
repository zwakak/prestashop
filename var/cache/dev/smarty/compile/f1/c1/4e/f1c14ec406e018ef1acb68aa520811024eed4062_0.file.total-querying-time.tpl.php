<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:29
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/total-querying-time.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac053dbf22_41236523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1c14ec406e018ef1acb68aa520811024eed4062' => 
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
function content_6641ac053dbf22_41236523 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'total_querying_time' => 
  array (
    'compiled_filepath' => '/Users/yazanaakel/Sites/localhost/var/cache/dev/smarty/compile/f1/c1/4e/f1c14ec406e018ef1acb68aa520811024eed4062_0.file.total-querying-time.tpl.php',
    'uid' => 'f1c14ec406e018ef1acb68aa520811024eed4062',
    'call_name' => 'smarty_template_function_total_querying_time_15642619646641ac053d9271_89066588',
  ),
));
}
/* smarty_template_function_total_querying_time_15642619646641ac053d9271_89066588 */
if (!function_exists('smarty_template_function_total_querying_time_15642619646641ac053d9271_89066588')) {
function smarty_template_function_total_querying_time_15642619646641ac053d9271_89066588(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_total_querying_time_15642619646641ac053d9271_89066588 */
}
