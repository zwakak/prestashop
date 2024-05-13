<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:29
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/doubles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac05546c14_22082317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66bb7ff4cb1d6c4d8787afafe24916ce4aa6b153' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/doubles.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641ac05546c14_22082317 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
  <h2>
    <a name="doubles">Doubles</a>
  </h2>

  <table class="table table-condensed">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doublesQueries']->value, 'nb', false, 'q');
$_smarty_tpl->tpl_vars['nb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['q']->value => $_smarty_tpl->tpl_vars['nb']->value) {
$_smarty_tpl->tpl_vars['nb']->do_else = false;
?>
      <?php if ($_smarty_tpl->tpl_vars['nb']->value > 1) {?>
        <tr>
          <td>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'sql_queries', array('data'=>$_smarty_tpl->tpl_vars['nb']->value), true);?>

          </td>
          <td class="pre">
            <pre><?php echo $_smarty_tpl->tpl_vars['q']->value;?>
</pre>
          </td>
        </tr>
      <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </table>
</div>
<?php }
}
