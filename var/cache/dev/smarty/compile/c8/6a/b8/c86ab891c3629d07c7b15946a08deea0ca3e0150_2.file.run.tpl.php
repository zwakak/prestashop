<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:42
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/run.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac122c91a7_19767310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c86ab891c3629d07c7b15946a08deea0ca3e0150' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/run.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641ac122c91a7_19767310 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-4">
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>&nbsp;</th>
        <th>Time</th>
        <th>Cumulated Time</th>
        <th>Memory Usage</th>
        <th>Memory Peak Usage</th>
      </tr>
    </thead>

    <tbody>
      <?php $_smarty_tpl->_assignInScope('last', array('time'=>$_smarty_tpl->tpl_vars['run']->value['startTime'],'memory_usage'=>0));?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['run']->value['profiler'], 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['row']->value['block'] == 'checkAccess' && $_smarty_tpl->tpl_vars['row']->value['time'] == $_smarty_tpl->tpl_vars['last']->value['time']) {?>
          <?php continue 1;?>
        <?php }?>

        <tr>
          <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['row']->value['block'], ENT_QUOTES, 'UTF-8');?>
</td>
          <td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'load_time', array('data'=>($_smarty_tpl->tpl_vars['row']->value['time']-$_smarty_tpl->tpl_vars['last']->value['time'])), true);?>
</td>
          <td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'load_time', array('data'=>($_smarty_tpl->tpl_vars['row']->value['time']-$_smarty_tpl->tpl_vars['run']->value['startTime'])), true);?>
</td>
          <td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'memory', array('data'=>($_smarty_tpl->tpl_vars['row']->value['memory_usage']-$_smarty_tpl->tpl_vars['last']->value['memory_usage'])), true);?>
</td>
          <td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'peak_memory', array('data'=>($_smarty_tpl->tpl_vars['row']->value['peak_memory_usage'])), true);?>
</td>
        </tr>

        <?php $_smarty_tpl->_assignInScope('last', $_smarty_tpl->tpl_vars['row']->value);?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table>
</div>
<?php }
}
