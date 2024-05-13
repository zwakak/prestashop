<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:29
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/stopwatch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac05432999_13516548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1469f2927f4c5c27a8016f67cde273f3018cc8c2' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/stopwatch.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641ac05432999_13516548 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
  <h2>
    <a name="stopwatch">
      Stopwatch SQL - <?php echo $_smarty_tpl->tpl_vars['summary']->value['nbQueries'];?>
 queries
    </a>
  </h2>

  <table class="table table-condensed table-bordered sortable">
    <thead>
      <tr>
        <th>#</th>
        <th>Query</th>
        <th>Time (ms)</th>
        <th>Rows</th>
        <th>Filesort</th>
        <th>Group By</th>
        <th>Location</th>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stopwatchQueries']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('callstack', implode('<br>',$_smarty_tpl->tpl_vars['data']->value['stack']));?>
        <?php $_smarty_tpl->_assignInScope('callstack_md5', md5($_smarty_tpl->tpl_vars['callstack']->value));?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
</td>
          <td class="pre" style="max-width: 60vw"><pre><?php echo preg_replace("/(^[\s]*)/m",'',htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['query'],ENT_NOQUOTES,'utf-8',false));?>
</pre></td>
          <td data-value="<?php echo $_smarty_tpl->tpl_vars['data']->value['time'];?>
">
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'load_time', array('data'=>($_smarty_tpl->tpl_vars['data']->value['time'])), true);?>

          </td>

          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['rows'];?>
</td>
          <td data-value="<?php echo $_smarty_tpl->tpl_vars['data']->value['filesort'];?>
">
            <?php if ($_smarty_tpl->tpl_vars['data']->value['filesort']) {?>
              <span class="danger">Yes</span>
            <?php }?>
          </td>
          <td data-value="<?php echo $_smarty_tpl->tpl_vars['data']->value['group_by'];?>
">
            <?php if ($_smarty_tpl->tpl_vars['data']->value['group_by']) {?>
              <span class="danger"">Yes</span>
            <?php }?>
          </td>
          <td data-value="<?php echo $_smarty_tpl->tpl_vars['data']->value['location'];?>
">
            <a href="javascript:void(0);" onclick="$('#callstack_<?php echo $_smarty_tpl->tpl_vars['callstack_md5']->value;?>
').toggle();"><?php echo $_smarty_tpl->tpl_vars['data']->value['location'];?>
</a>
            <div id="callstack_<?php echo $_smarty_tpl->tpl_vars['callstack_md5']->value;?>
" style="display:none">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['stack'], 'stack');
$_smarty_tpl->tpl_vars['stack']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stack']->value) {
$_smarty_tpl->tpl_vars['stack']->do_else = false;
?>
                <?php echo $_smarty_tpl->tpl_vars['stack']->value;?>
<br/>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
          </td>
        </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table>
</div>
<?php }
}
