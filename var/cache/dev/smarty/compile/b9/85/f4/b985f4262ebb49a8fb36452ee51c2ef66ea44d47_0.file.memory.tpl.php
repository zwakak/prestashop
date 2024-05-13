<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:29
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/memory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac053aa467_47023937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b985f4262ebb49a8fb36452ee51c2ef66ea44d47' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/memory.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641ac053aa467_47023937 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'memory' => 
  array (
    'compiled_filepath' => '/Users/yazanaakel/Sites/localhost/var/cache/dev/smarty/compile/b9/85/f4/b985f4262ebb49a8fb36452ee51c2ef66ea44d47_0.file.memory.tpl.php',
    'uid' => 'b985f4262ebb49a8fb36452ee51c2ef66ea44d47',
    'call_name' => 'smarty_template_function_memory_13001337366641ac053a2dc2_60889698',
  ),
));
}
/* smarty_template_function_memory_13001337366641ac053a2dc2_60889698 */
if (!function_exists('smarty_template_function_memory_13001337366641ac053a2dc2_60889698')) {
function smarty_template_function_memory_13001337366641ac053a2dc2_60889698(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php $_smarty_tpl->_assignInScope('data', round($_smarty_tpl->tpl_vars['data']->value/1048576,2));?>
  <?php if ($_smarty_tpl->tpl_vars['data']->value > 3) {?>
    <span class="danger"><?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['data']->value);?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 1) {?>
    <span class="warning"><?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['data']->value);?>
</span>
  <?php } elseif (round($_smarty_tpl->tpl_vars['data']->value,2) > 0) {?>
    <span class="success"><?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['data']->value);?>
</span>
  <?php } else { ?>
    <span class="success">-</span>
  <?php }?>
  Mb
<?php
}}
/*/ smarty_template_function_memory_13001337366641ac053a2dc2_60889698 */
}
