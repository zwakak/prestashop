<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:42
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/mysql-version.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac1227a201_31167055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6167136c59608a72585946820c92ed70602c8cad' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/mysql-version.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641ac1227a201_31167055 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'mysql_version' => 
  array (
    'compiled_filepath' => '/Users/yazanaakel/Sites/localhost/var/cache/dev/smarty/compile/61/67/13/6167136c59608a72585946820c92ed70602c8cad_2.file.mysql-version.tpl.php',
    'uid' => '6167136c59608a72585946820c92ed70602c8cad',
    'call_name' => 'smarty_template_function_mysql_version_19805923356641ac12276cc8_96254972',
  ),
));
}
/* smarty_template_function_mysql_version_19805923356641ac12276cc8_96254972 */
if (!function_exists('smarty_template_function_mysql_version_19805923356641ac12276cc8_96254972')) {
function smarty_template_function_mysql_version_19805923356641ac12276cc8_96254972(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if (version_compare($_smarty_tpl->tpl_vars['version']->value,'5.5') < 0) {?>
    <span class="danger"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 (Upgrade strongly recommended)</span>
  <?php } elseif (version_compare($_smarty_tpl->tpl_vars['version']->value,'5.6') < 0) {?>
    <span class="warning"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 (Consider upgrading)</span>
  <?php } else { ?>
    <span class="success"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 (OK)</span>
  <?php }
}}
/*/ smarty_template_function_mysql_version_19805923356641ac12276cc8_96254972 */
}
