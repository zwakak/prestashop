<?php
/* Smarty version 4.3.4, created on 2024-05-13 05:09:04
  from '/Users/yazanaakel/Sites/localhost/modules/kanguro/views/templates/hook/displayheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6641845042e922_39541911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4d658fb6e68b2d7cca21b31333d9ed1d77071ff' => 
    array (
      0 => '/Users/yazanaakel/Sites/localhost/modules/kanguro/views/templates/hook/displayheader.tpl',
      1 => 1715561738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641845042e922_39541911 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal -->
<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          crossorigin=""/>


    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <title></title>

<body>

<div class="modal fade" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['map_modal_id']->value, ENT_QUOTES, 'UTF-8');?>
" tabindex="-1" role="dialog" aria-labelledby="mapModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mapModalLabel">Kanguro Points</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <label for="searchInput"></label>
                <input class="justify-content-center" type="text" id="searchInput" placeholder="Search..." />
                <div id="map"></div>
            </div>
        </div>
    </div>
</div>

</body>
<?php echo '<script'; ?>
 src="https://unpkg.com/leaflet/dist/leaflet.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""><?php echo '</script'; ?>
>




<?php }
}
