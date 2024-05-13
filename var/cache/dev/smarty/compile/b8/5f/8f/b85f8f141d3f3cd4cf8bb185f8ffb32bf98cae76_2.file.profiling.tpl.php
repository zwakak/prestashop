<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:42
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/profiling.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac1225ca09_94149380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b85f8f141d3f3cd4cf8bb185f8ffb32bf98cae76' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/profiling.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./functions.tpl' => 1,
    'file:./styles.tpl' => 1,
    'file:./links.tpl' => 1,
    'file:./summary.tpl' => 1,
    'file:./configuration.tpl' => 1,
    'file:./run.tpl' => 1,
    'file:./hooks.tpl' => 1,
    'file:./modules.tpl' => 1,
    'file:./stopwatch.tpl' => 1,
    'file:./doubles.tpl' => 1,
    'file:./table-stress.tpl' => 1,
    'file:./objectmodel.tpl' => 1,
    'file:./files.tpl' => 1,
  ),
),false)) {
function content_6641ac1225ca09_94149380 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./functions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./styles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="prestashop-profiling" class="container">
  <?php $_smarty_tpl->_subTemplateRender("file:./links.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="row">
    <?php $_smarty_tpl->_subTemplateRender("file:./summary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('summary'=>$_smarty_tpl->tpl_vars['summary']->value), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:./configuration.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('configuration'=>$_smarty_tpl->tpl_vars['configuration']->value), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:./run.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('run'=>$_smarty_tpl->tpl_vars['run']->value), 0, false);
?>
  </div>
  <div class="row">
    <?php $_smarty_tpl->_subTemplateRender("file:./hooks.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hooks'=>$_smarty_tpl->tpl_vars['hooks']->value), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:./modules.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('modules'=>$_smarty_tpl->tpl_vars['modules']->value), 0, false);
?>
  </div>

  <?php $_smarty_tpl->_subTemplateRender("file:./stopwatch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stopwatchQueries'=>$_smarty_tpl->tpl_vars['stopwatchQueries']->value), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:./doubles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('doublesQueries'=>$_smarty_tpl->tpl_vars['doublesQueries']->value), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:./table-stress.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tableStress'=>$_smarty_tpl->tpl_vars['tableStress']->value), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:./objectmodel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('objectmodel'=>$_smarty_tpl->tpl_vars['objectmodel']->value), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:./files.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('files'=>$_smarty_tpl->tpl_vars['files']->value), 0, false);
?>
</div>
<?php }
}
