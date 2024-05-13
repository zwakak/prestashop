<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:42
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/load-time.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac1226c413_10774674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4645bca6fba02b4c162e48416cd4c88f92fbd3be' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/load-time.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641ac1226c413_10774674 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'load_time' => 
  array (
    'compiled_filepath' => '/Users/yazanaakel/Sites/localhost/var/cache/dev/smarty/compile/46/45/bc/4645bca6fba02b4c162e48416cd4c88f92fbd3be_2.file.load-time.tpl.php',
    'uid' => '4645bca6fba02b4c162e48416cd4c88f92fbd3be',
    'call_name' => 'smarty_template_function_load_time_18521706786641ac12267d00_96439374',
  ),
));
}
/* smarty_template_function_load_time_18521706786641ac12267d00_96439374 */
if (!function_exists('smarty_template_function_load_time_18521706786641ac12267d00_96439374')) {
function smarty_template_function_load_time_18521706786641ac12267d00_96439374(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 1.6) {?>
    <span class="danger"><?php echo htmlspecialchars((string) round($_smarty_tpl->tpl_vars['data']->value*1000), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 0.8) {?>
    <span class="warning"><?php echo htmlspecialchars((string) round($_smarty_tpl->tpl_vars['data']->value*1000), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo htmlspecialchars((string) sprintf('%01.3f',$_smarty_tpl->tpl_vars['data']->value*1000), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }?>
  ms
<?php
}}
/*/ smarty_template_function_load_time_18521706786641ac12267d00_96439374 */
}
