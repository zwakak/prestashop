<?php
/* Smarty version 4.3.4, created on 2024-05-13 08:04:35
  from '/Users/yazanaakel/Sites/localhost/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ad738db2a7_90849125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e64f720d35fcf69afb7687bbd505c3e00a034758' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/themes/classic/templates/index.tpl',
      1 => 1708959642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641ad738db2a7_90849125 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3253848556641ad738d0577_46482602', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_19438362836641ad738d1df4_68807119 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_4058342126641ad738d5875_05857830 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_10139099716641ad738d41f0_26083789 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4058342126641ad738d5875_05857830', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_3253848556641ad738d0577_46482602 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_3253848556641ad738d0577_46482602',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_19438362836641ad738d1df4_68807119',
  ),
  'page_content' => 
  array (
    0 => 'Block_10139099716641ad738d41f0_26083789',
  ),
  'hook_home' => 
  array (
    0 => 'Block_4058342126641ad738d5875_05857830',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19438362836641ad738d1df4_68807119', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10139099716641ad738d41f0_26083789', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
