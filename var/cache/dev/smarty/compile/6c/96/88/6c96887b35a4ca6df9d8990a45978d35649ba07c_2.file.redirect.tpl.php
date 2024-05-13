<?php
/* Smarty version 4.3.4, created on 2024-05-13 08:04:46
  from '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/redirect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641ad7e60d380_92449921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c96887b35a4ca6df9d8990a45978d35649ba07c' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/tools/profiling/templates/redirect.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641ad7e60d380_92449921 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
  <head>
    <meta charset="utf-8" />
    <?php echo '<script'; ?>
 src="//code.jquery.com/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <div class="container" style="width:100%">
      <div class="row">
        <div class="col-lg-12">
          <h2>Caught redirection to <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['redirectAfter']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['redirectAfter']->value, ENT_QUOTES, 'UTF-8');?>
</a></h2>
        </div>
      </div>
    </div>
  </body>
</html>
<?php }
}
