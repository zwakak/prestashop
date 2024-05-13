<?php
/* Smarty version 4.3.4, created on 2024-05-13 05:46:23
  from '/Users/yazanaakel/Sites/localhost/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66418d0f047245_20588202',
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
function content_66418d0f047245_20588202 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118597163666418d0f03b3c2_98616332', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_181596679366418d0f03d053_08585255 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_158241412266418d0f0414a1_46592699 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_141971598866418d0f03fb26_75897267 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158241412266418d0f0414a1_46592699', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_118597163666418d0f03b3c2_98616332 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_118597163666418d0f03b3c2_98616332',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_181596679366418d0f03d053_08585255',
  ),
  'page_content' => 
  array (
    0 => 'Block_141971598866418d0f03fb26_75897267',
  ),
  'hook_home' => 
  array (
    0 => 'Block_158241412266418d0f0414a1_46592699',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181596679366418d0f03d053_08585255', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141971598866418d0f03fb26_75897267', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
