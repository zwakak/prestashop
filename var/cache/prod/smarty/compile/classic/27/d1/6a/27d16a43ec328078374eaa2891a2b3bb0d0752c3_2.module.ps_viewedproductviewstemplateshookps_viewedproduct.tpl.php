<?php
/* Smarty version 4.3.4, created on 2024-05-13 06:19:10
  from 'module:ps_viewedproductviewstemplateshookps_viewedproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_664194bebaceb6_59568760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27d16a43ec328078374eaa2891a2b3bb0d0752c3' => 
    array (
      0 => 'module:ps_viewedproductviewstemplateshookps_viewedproduct.tpl',
      1 => 1708959642,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/productlist.tpl' => 1,
  ),
),false)) {
function content_664194bebaceb6_59568760 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="featured-products clearfix mt-3">
  <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Viewed products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h2>
  <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/productlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['products']->value,'productClass'=>"col-xs-12 col-sm-6 col-lg-4 col-xl-3"), 0, false);
?>
</section>
<?php }
}
