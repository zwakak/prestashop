<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:29
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/objectmodel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac053b4d53_98325495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '509ea3e4498be61e3016e094acd422bdbd0515b8' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/objectmodel.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641ac053b4d53_98325495 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'objectmodel' => 
  array (
    'compiled_filepath' => '/Users/yazanaakel/Sites/localhost/var/cache/dev/smarty/compile/50/9e/a3/509ea3e4498be61e3016e094acd422bdbd0515b8_0.file.objectmodel.tpl.php',
    'uid' => '509ea3e4498be61e3016e094acd422bdbd0515b8',
    'call_name' => 'smarty_template_function_objectmodel_3061895966641ac053b1ec0_35656788',
  ),
));
}
/* smarty_template_function_objectmodel_3061895966641ac053b1ec0_35656788 */
if (!function_exists('smarty_template_function_objectmodel_3061895966641ac053b1ec0_35656788')) {
function smarty_template_function_objectmodel_3061895966641ac053b1ec0_35656788(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 50) {?>
    <span class="danger"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 10) {?>
    <span class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php }
}}
/*/ smarty_template_function_objectmodel_3061895966641ac053b1ec0_35656788 */
}
