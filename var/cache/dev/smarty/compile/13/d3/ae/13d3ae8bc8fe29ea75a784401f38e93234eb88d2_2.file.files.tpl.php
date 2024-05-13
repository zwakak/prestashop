<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:42
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/files.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac12479369_34610124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13d3ae8bc8fe29ea75a784401f38e93234eb88d2' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/files.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641ac12479369_34610124 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
  <h2>
    <a name="includedFiles">
      Included Files
    </a>
  </h2>

  <table class="table table-condensed">
    <tr>
      <th>#</th>
      <th>Filename</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['files']->value, 'file', false, 'i');
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
?>
      <?php $_smarty_tpl->_assignInScope('file', str_replace('\\','/',str_replace(_PS_ROOT_DIR_,'',$_smarty_tpl->tpl_vars['file']->value)));?>
      <?php if ((strpos($_smarty_tpl->tpl_vars['file']->value,'/tools/profiling/') !== 0)) {?>
        <tr>
          <td>
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>

          </td>
          <td>
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['file']->value, ENT_QUOTES, 'UTF-8');?>

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
