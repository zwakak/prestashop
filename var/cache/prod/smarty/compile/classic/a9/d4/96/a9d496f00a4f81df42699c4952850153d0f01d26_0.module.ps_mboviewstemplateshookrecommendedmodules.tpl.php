<?php
/* Smarty version 4.3.4, created on 2024-05-13 05:22:03
  from 'module:ps_mboviewstemplateshookrecommendedmodules.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641875b90ed46_36133775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9d496f00a4f81df42699c4952850153d0f01d26' => 
    array (
      0 => 'module:ps_mboviewstemplateshookrecommendedmodules.tpl',
      1 => 1711703872,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641875b90ed46_36133775 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['recommendedModulesTitleTranslated']->value,'javascript' ));?>
',
        'Close': '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['recommendedModulesCloseTranslated']->value,'javascript' ));?>
',
      },
      recommendedModulesUrl: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['recommendedModulesUrl']->value,'javascript' ));?>
',
      shouldAttachRecommendedModulesAfterContent: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['shouldAttachRecommendedModulesAfterContent']->value ));?>
,
      shouldAttachRecommendedModulesButton: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['shouldAttachRecommendedModulesButton']->value ));?>
,
      shouldUseLegacyTheme: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['shouldUseLegacyTheme']->value ));?>
,
    });
  }
<?php echo '</script'; ?>
>
<?php }
}
