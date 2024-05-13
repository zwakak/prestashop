<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:29
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac053ef573_69802790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae65b84b10fba211985da9073ad96ce26022fe97' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/summary.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641ac053ef573_69802790 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-4" id="summary">
  <table class="table table-condensed">
    <tr>
      <td>
        Load Time
      </td>
      <td>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'load_time', array('data'=>$_smarty_tpl->tpl_vars['summary']->value['loadTime']), true);?>

      </td>
    </tr>
    <tr>
      <td>Querying Time</td>
      <td>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'total_querying_time', array('data'=>$_smarty_tpl->tpl_vars['summary']->value['queryTime']), true);?>
 ms
      </td>
    </tr>
    <tr>
      <td>
        Queries
      </td>
      <td>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'total_queries', array('data'=>$_smarty_tpl->tpl_vars['summary']->value['nbQueries']), true);?>

      </td>
    </tr>
    <tr>
      <td>
        Memory Peak Usage
      </td>
      <td>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'peak_memory', array('data'=>$_smarty_tpl->tpl_vars['summary']->value['peakMemoryUsage']), true);?>

      </td>
    </tr>
    <tr>
      <td>
        Included Files
      </td>
      <td>
        <?php echo $_smarty_tpl->tpl_vars['summary']->value['includedFiles'];?>
 files - <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'memory', array('data'=>$_smarty_tpl->tpl_vars['summary']->value['totalFileSize']), true);?>

      </td>
    </tr>
    <tr>
      <td>
        PrestaShop Cache
      </td>
      <td>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'memory', array('data'=>$_smarty_tpl->tpl_vars['summary']->value['totalCacheSize']), true);?>

      </td>
    </tr>
    <tr>
      <td>
        <a href="javascript:void(0);" onclick="$('.global_vars_detail').toggle();">Global vars</a>
      </td>
      <td>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'memory', array('data'=>$_smarty_tpl->tpl_vars['summary']->value['totalGlobalVarSize']), true);?>

      </td>
    </tr>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['summary']->value['globalVarSize'], 'size', false, 'global');
$_smarty_tpl->tpl_vars['size']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['global']->value => $_smarty_tpl->tpl_vars['size']->value) {
$_smarty_tpl->tpl_vars['size']->do_else = false;
?>
      <tr class="global_vars_detail" style="display:none">
        <td>
          - global $<?php echo $_smarty_tpl->tpl_vars['global']->value;?>

        </td>
        <td>
          <?php echo $_smarty_tpl->tpl_vars['size']->value;?>
k
        </td>
      </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </table>
</div>
<?php }
}
