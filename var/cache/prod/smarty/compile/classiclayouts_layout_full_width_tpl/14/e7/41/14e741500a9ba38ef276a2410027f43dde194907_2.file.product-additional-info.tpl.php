<?php
/* Smarty version 4.3.4, created on 2024-05-13 05:46:25
  from '/Users/yazanaakel/Sites/localhost/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66418d1148a1d4_18443660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14e741500a9ba38ef276a2410027f43dde194907' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1708959642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66418d1148a1d4_18443660 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
