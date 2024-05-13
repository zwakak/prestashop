<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:41
  from '/Users/yazanaakel/Sites/localhost/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac117781f4_78714436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5ffbe7c36e7e42da210fd4f78bb606ebc119cbf' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/themes/classic/templates/_partials/helpers.tpl',
      1 => 1708959642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641ac117781f4_78714436 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/Users/yazanaakel/Sites/localhost/var/cache/dev/smarty/compile/classiclayouts_layout_full_width_tpl/c5/ff/be/c5ffbe7c36e7e42da210fd4f78bb606ebc119cbf_2.file.helpers.tpl.php',
    'uid' => 'c5ffbe7c36e7e42da210fd4f78bb606ebc119cbf',
    'call_name' => 'smarty_template_function_renderLogo_14400293596641ac11773727_37669791',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_14400293596641ac11773727_37669791 */
if (!function_exists('smarty_template_function_renderLogo_14400293596641ac11773727_37669791')) {
function smarty_template_function_renderLogo_14400293596641ac11773727_37669791(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_14400293596641ac11773727_37669791 */
}
