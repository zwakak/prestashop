<?php
/* Smarty version 4.3.4, created on 2024-05-13 07:58:42
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/configuration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ac122bbe70_05117801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a782df399d49de37efd4d0da55a540fa1b9caf7' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/configuration.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641ac122bbe70_05117801 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-4">
  <table class="table table-condensed">
    <tr>
      <td>PrestaShop Version</td>
      <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['configuration']->value['psVersion'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <tr>
      <td>PHP Version</td>
      <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['configuration']->value['phpVersion'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <tr>
      <td>MySQL Version</td>
      <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['configuration']->value['mysqlVersion'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <tr>
      <td>Memory Limit</td>
      <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['configuration']->value['memoryLimit'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <tr>
      <td>Max Execution Time</td>
      <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['configuration']->value['maxExecutionTime'], ENT_QUOTES, 'UTF-8');?>
s</td>
    </tr>
    <tr>
      <td>Smarty Cache</td>
      <td>
        <?php if ($_smarty_tpl->tpl_vars['configuration']->value['smartyCache']) {?>
          <span class="success">enabled</span>
        <?php } else { ?>
          <span class="error">disabled</span>
        <?php }?>
      </td>
    </tr>
    <tr>
      <td>Smarty Compilation</td>
      <td>
      <?php if ($_smarty_tpl->tpl_vars['configuration']->value['smartyCompilation'] == 0) {?>
        <span class="success">never recompile</span>
      <?php } elseif ($_smarty_tpl->tpl_vars['configuration']->value['smartyCompilation'] == 1) {?>
        <span class="warning">auto</span>
      <?php } else { ?>
        <span class="red">force compile</span>
      <?php }?>
      </td>
    </tr>
  </table>
</div>
<?php }
}
