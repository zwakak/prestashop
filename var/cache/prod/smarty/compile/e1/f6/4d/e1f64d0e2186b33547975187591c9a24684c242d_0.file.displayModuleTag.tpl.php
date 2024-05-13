<?php
/* Smarty version 4.3.4, created on 2024-05-13 05:22:06
  from '/Users/yazanaakel/Sites/localhost/modules/psxdesign/views/templates/hook/displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641875e52cbb0_95566544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1f64d0e2186b33547975187591c9a24684c242d' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/modules/psxdesign/views/templates/hook/displayModuleTag.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641875e52cbb0_95566544 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
