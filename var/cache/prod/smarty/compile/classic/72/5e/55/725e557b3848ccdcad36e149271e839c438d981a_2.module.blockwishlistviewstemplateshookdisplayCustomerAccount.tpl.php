<?php
/* Smarty version 4.3.4, created on 2024-05-13 06:11:43
  from 'module:blockwishlistviewstemplateshookdisplayCustomerAccount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_664192ff6a5e23_65211262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '725e557b3848ccdcad36e149271e839c438d981a' => 
    array (
      0 => 'module:blockwishlistviewstemplateshookdisplayCustomerAccount.tpl',
      1 => 1691741314,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664192ff6a5e23_65211262 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="wishlist-link" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
">
  <span class="link-item">
    <i class="material-icons">favorite</i>
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wishlistsTitlePage']->value, ENT_QUOTES, 'UTF-8');?>

  </span>
</a>
<?php }
}
