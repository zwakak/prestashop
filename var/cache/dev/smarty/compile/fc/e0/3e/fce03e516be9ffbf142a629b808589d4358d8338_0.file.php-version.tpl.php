<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:29
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/php-version.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac053c11d9_91465210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fce03e516be9ffbf142a629b808589d4358d8338' => 
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
function content_6641ac053c11d9_91465210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'php_version' => 
  array (
    'compiled_filepath' => '/Users/yazanaakel/Sites/localhost/var/cache/dev/smarty/compile/fc/e0/3e/fce03e516be9ffbf142a629b808589d4358d8338_0.file.php-version.tpl.php',
    'uid' => 'fce03e516be9ffbf142a629b808589d4358d8338',
    'call_name' => 'smarty_template_function_php_version_8555161026641ac053bde71_48746400',
  ),
));
}
/* smarty_template_function_php_version_8555161026641ac053bde71_48746400 */
if (!function_exists('smarty_template_function_php_version_8555161026641ac053bde71_48746400')) {
function smarty_template_function_php_version_8555161026641ac053bde71_48746400(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if (version_compare($_smarty_tpl->tpl_vars['version']->value,'7.1') <= 0) {?>
    <span class="danger"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 (Upgrade strongly recommended)</span>
  <?php } elseif (version_compare($_smarty_tpl->tpl_vars['version']->value,'7.4') <= 0) {?>
    <span class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 (Consider upgrading)</span>
  <?php } else { ?>
    <span class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 (OK)</span>
  <?php }
}}
/*/ smarty_template_function_php_version_8555161026641ac053bde71_48746400 */
}
