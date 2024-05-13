<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:29
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/load-time.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac053a0940_78836609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4853ee06de1748db8f68cfc3ffda228ea18a01cb' => 
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
function content_6641ac053a0940_78836609 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'load_time' => 
  array (
    'compiled_filepath' => '/Users/yazanaakel/Sites/localhost/var/cache/dev/smarty/compile/48/53/ee/4853ee06de1748db8f68cfc3ffda228ea18a01cb_0.file.load-time.tpl.php',
    'uid' => '4853ee06de1748db8f68cfc3ffda228ea18a01cb',
    'call_name' => 'smarty_template_function_load_time_19539847226641ac0539bb97_29049507',
  ),
));
}
/* smarty_template_function_load_time_19539847226641ac0539bb97_29049507 */
if (!function_exists('smarty_template_function_load_time_19539847226641ac0539bb97_29049507')) {
function smarty_template_function_load_time_19539847226641ac0539bb97_29049507(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 1.6) {?>
    <span class="danger"><?php echo round($_smarty_tpl->tpl_vars['data']->value*1000);?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 0.8) {?>
    <span class="warning"><?php echo round($_smarty_tpl->tpl_vars['data']->value*1000);?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo sprintf('%01.3f',$_smarty_tpl->tpl_vars['data']->value*1000);?>
</span>
  <?php }?>
  ms
<?php
}}
/*/ smarty_template_function_load_time_19539847226641ac0539bb97_29049507 */
}
