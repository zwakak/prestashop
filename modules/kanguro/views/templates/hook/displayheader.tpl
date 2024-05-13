<!-- Modal -->
<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          crossorigin=""/>


    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <title></title>

<body>

<div class="modal fade" id="{$map_modal_id}" tabindex="-1" role="dialog" aria-labelledby="mapModalLabel" aria-hidden="true">
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
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>




