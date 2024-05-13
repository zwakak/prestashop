<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:42
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/functions/memory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac12274fd9_92256980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '425344870d01b713eb9b336e3c234c450ddf0351' => 
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
function content_6641ac12274fd9_92256980 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'memory' => 
  array (
    'compiled_filepath' => '/Users/yazanaakel/Sites/localhost/var/cache/dev/smarty/compile/42/53/44/425344870d01b713eb9b336e3c234c450ddf0351_2.file.memory.tpl.php',
    'uid' => '425344870d01b713eb9b336e3c234c450ddf0351',
    'call_name' => 'smarty_template_function_memory_18066699466641ac1226e0f5_19920706',
  ),
));
}
/* smarty_template_function_memory_18066699466641ac1226e0f5_19920706 */
if (!function_exists('smarty_template_function_memory_18066699466641ac1226e0f5_19920706')) {
function smarty_template_function_memory_18066699466641ac1226e0f5_19920706(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php $_smarty_tpl->_assignInScope('data', round($_smarty_tpl->tpl_vars['data']->value/1048576,2));?>
  <?php if ($_smarty_tpl->tpl_vars['data']->value > 3) {?>
    <span class="danger"><?php echo htmlspecialchars((string) sprintf("%0.2f",$_smarty_tpl->tpl_vars['data']->value), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 1) {?>
    <span class="warning"><?php echo htmlspecialchars((string) sprintf("%0.2f",$_smarty_tpl->tpl_vars['data']->value), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } elseif (round($_smarty_tpl->tpl_vars['data']->value,2) > 0) {?>
    <span class="success"><?php echo htmlspecialchars((string) sprintf("%0.2f",$_smarty_tpl->tpl_vars['data']->value), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } else { ?>
    <span class="success">-</span>
  <?php }?>
  Mb
<?php
}}
/*/ smarty_template_function_memory_18066699466641ac1226e0f5_19920706 */
}
