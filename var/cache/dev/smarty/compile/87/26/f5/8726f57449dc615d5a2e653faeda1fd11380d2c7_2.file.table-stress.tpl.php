<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:42
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/table-stress.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac12467cc9_46153314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8726f57449dc615d5a2e653faeda1fd11380d2c7' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/table-stress.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641ac12467cc9_46153314 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
	<h2><a name="tables">Tables stress</a></h2>
	<table class="table table-condensed">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tableStress']->value, 'nb', false, 'table');
$_smarty_tpl->tpl_vars['nb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['table']->value => $_smarty_tpl->tpl_vars['nb']->value) {
$_smarty_tpl->tpl_vars['nb']->do_else = false;
?>
      <tr>
        <td>
          <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'table', array('data'=>$_smarty_tpl->tpl_vars['nb']->value), true);?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['table']->value, ENT_QUOTES, 'UTF-8');?>

        </td>
      </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </table>
</div>
<?php }
}
