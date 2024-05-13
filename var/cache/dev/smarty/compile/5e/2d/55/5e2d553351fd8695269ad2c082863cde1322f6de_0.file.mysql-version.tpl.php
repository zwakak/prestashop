<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:29
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/mysql-version.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac053afa32_86283385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e2d553351fd8695269ad2c082863cde1322f6de' => 
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
function content_6641ac053afa32_86283385 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'mysql_version' => 
  array (
    'compiled_filepath' => '/Users/yazanaakel/Sites/localhost/var/cache/dev/smarty/compile/5e/2d/55/5e2d553351fd8695269ad2c082863cde1322f6de_0.file.mysql-version.tpl.php',
    'uid' => '5e2d553351fd8695269ad2c082863cde1322f6de',
    'call_name' => 'smarty_template_function_mysql_version_12523879276641ac053ac5c5_87603500',
  ),
));
}
/* smarty_template_function_mysql_version_12523879276641ac053ac5c5_87603500 */
if (!function_exists('smarty_template_function_mysql_version_12523879276641ac053ac5c5_87603500')) {
function smarty_template_function_mysql_version_12523879276641ac053ac5c5_87603500(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if (version_compare($_smarty_tpl->tpl_vars['version']->value,'5.5') < 0) {?>
    <span class="danger"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 (Upgrade strongly recommended)</span>
  <?php } elseif (version_compare($_smarty_tpl->tpl_vars['version']->value,'5.6') < 0) {?>
    <span class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 (Consider upgrading)</span>
  <?php } else { ?>
    <span class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 (OK)</span>
  <?php }
}}
/*/ smarty_template_function_mysql_version_12523879276641ac053ac5c5_87603500 */
}
