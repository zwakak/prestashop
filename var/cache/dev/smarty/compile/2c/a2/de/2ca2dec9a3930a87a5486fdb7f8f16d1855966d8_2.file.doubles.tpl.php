<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:42
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/doubles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac12461824_02692026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ca2dec9a3930a87a5486fdb7f8f16d1855966d8' => 
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
function content_6641ac12461824_02692026 (Smarty_Internal_Template $_smarty_tpl) {
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
            <pre><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['q']->value, ENT_QUOTES, 'UTF-8');?>
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
