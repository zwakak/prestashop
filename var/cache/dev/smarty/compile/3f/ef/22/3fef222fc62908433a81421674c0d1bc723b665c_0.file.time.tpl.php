<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:29
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/time.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac053d2eb9_88495259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fef222fc62908433a81421674c0d1bc723b665c' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/time.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641ac053d2eb9_88495259 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'time' => 
  array (
    'compiled_filepath' => '/Users/yazanaakel/Sites/localhost/var/cache/dev/smarty/compile/3f/ef/22/3fef222fc62908433a81421674c0d1bc723b665c_0.file.time.tpl.php',
    'uid' => '3fef222fc62908433a81421674c0d1bc723b665c',
    'call_name' => 'smarty_template_function_time_10834565236641ac053d05d8_34364994',
  ),
));
}
/* smarty_template_function_time_10834565236641ac053d05d8_34364994 */
if (!function_exists('smarty_template_function_time_10834565236641ac053d05d8_34364994')) {
function smarty_template_function_time_10834565236641ac053d05d8_34364994(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 4) {?>
    <span class="danger"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 2) {?>
    <span class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php }
}}
/*/ smarty_template_function_time_10834565236641ac053d05d8_34364994 */
}
