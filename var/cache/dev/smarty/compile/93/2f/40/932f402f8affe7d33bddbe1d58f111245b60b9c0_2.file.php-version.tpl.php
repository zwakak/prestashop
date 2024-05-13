<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:42
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/php-version.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac1228a0b1_71810119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '932f402f8affe7d33bddbe1d58f111245b60b9c0' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/php-version.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641ac1228a0b1_71810119 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'php_version' => 
  array (
    'compiled_filepath' => '/Users/yazanaakel/Sites/localhost/var/cache/dev/smarty/compile/93/2f/40/932f402f8affe7d33bddbe1d58f111245b60b9c0_2.file.php-version.tpl.php',
    'uid' => '932f402f8affe7d33bddbe1d58f111245b60b9c0',
    'call_name' => 'smarty_template_function_php_version_8536434976641ac12286e00_98926571',
  ),
));
}
/* smarty_template_function_php_version_8536434976641ac12286e00_98926571 */
if (!function_exists('smarty_template_function_php_version_8536434976641ac12286e00_98926571')) {
function smarty_template_function_php_version_8536434976641ac12286e00_98926571(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if (version_compare($_smarty_tpl->tpl_vars['version']->value,'7.1') <= 0) {?>
    <span class="danger"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 (Upgrade strongly recommended)</span>
  <?php } elseif (version_compare($_smarty_tpl->tpl_vars['version']->value,'7.4') <= 0) {?>
    <span class="warning"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 (Consider upgrading)</span>
  <?php } else { ?>
    <span class="success"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 (OK)</span>
  <?php }
}}
/*/ smarty_template_function_php_version_8536434976641ac12286e00_98926571 */
}
