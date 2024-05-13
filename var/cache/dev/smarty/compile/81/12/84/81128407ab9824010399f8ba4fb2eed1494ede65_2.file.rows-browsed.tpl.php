<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:42
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/rows-browsed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac1228eb82_06821745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81128407ab9824010399f8ba4fb2eed1494ede65' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/rows-browsed.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641ac1228eb82_06821745 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'rows_browsed' => 
  array (
    'compiled_filepath' => '/Users/yazanaakel/Sites/localhost/var/cache/dev/smarty/compile/81/12/84/81128407ab9824010399f8ba4fb2eed1494ede65_2.file.rows-browsed.tpl.php',
    'uid' => '81128407ab9824010399f8ba4fb2eed1494ede65',
    'call_name' => 'smarty_template_function_rows_browsed_5894196676641ac1228be55_39875390',
  ),
));
}
/* smarty_template_function_rows_browsed_5894196676641ac1228be55_39875390 */
if (!function_exists('smarty_template_function_rows_browsed_5894196676641ac1228be55_39875390')) {
function smarty_template_function_rows_browsed_5894196676641ac1228be55_39875390(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 400) {?>
    <span class="danger"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 rows browsed</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 100) {?>
    <span class="warning"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 rows browsed</span>
  <?php } else { ?>
    <span class="success"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 rows browsed</span>
  <?php }
}}
/*/ smarty_template_function_rows_browsed_5894196676641ac1228be55_39875390 */
}
