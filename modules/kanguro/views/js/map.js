document.addEventListener('DOMContentLoaded', async function () {
    //document.getElementById('map-modal').style.display = 'block';

    var redIcon = L.icon({
        iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
        iconSize: [25, 41], // Size of the icon
        iconAnchor: [12, 41], // Anchor point of the icon
    });

    var blueIcon = L.icon({
        iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png',
        iconSize: [25, 41], // Size of the icon
        iconAnchor: [12, 41], // Anchor point of the icon
    });

    let barcelonaLatitude = 41.3874
    let barcelonaLongitude = 2.1686
    var map = L.map('map').setView([barcelonaLatitude, barcelonaLongitude], 13,
        {
            animate: true, // Enable animation
            duration: 2, // Animation duration in seconds
            easeLinearity: 0.25, // Animation easing coefficient
        });
    setTimeout(function () {
        map.invalidateSize()
    }, 2000);
    await getKanguroPoints(barcelonaLatitude, barcelonaLongitude)

    L.tileLayer('https://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    /* L.marker([41.3874, 2.1686]).addTo(map)
         .bindPopup('A sample marker.')
        // .openPopup();*/

    L.control.scale().addTo(map);

    var searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('keyup', function (event) {
        if (event.key === 'Enter') {
            removeAllMarkers()
            var query = event.target.value;
            searchLocation(query);
        }
    });


    function searchLocation(query) {
        var apiUrl = 'https://nominatim.openstreetmap.org/search?format=json&q=' + encodeURIComponent(query);

        // Perform a GET request to the Nominatim API
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                if (data.length > 0) {
                    // Extract latitude and longitude from the first result
                    var latitude = parseFloat(data[0].lat);
                    var longitude = parseFloat(data[0].lon);

                    L.marker([latitude, longitude,], {icon: blueIcon}).addTo(map)
                        .bindPopup(data[0].display_name)

                    // Move the map to the location of the search result
                    map.setView([latitude, longitude], 13,
                        {
                            animate: true, // Enable animation
                            duration: 2, // Animation duration in seconds
                            easeLinearity: 0.25, // Animation easing coefficient
                        }); // Set zoom level as needed
                    getKanguroPoints(latitude, longitude)
                } else {
                    alert('Location not found');
                }
            })
            .catch(error => {
                console.error('Error fetching geocoding data:', error);
            });
    }



    function getKanguroPoints(latitude, longitude) {
        var apiUrl = `http://localhost:3000/points/nearest?latitude=${latitude}&longitude=${longitude}&maxDistance=10&limit=20`;
        fetch(apiUrl, {
            headers: {

                'Accept-Language': "en",
                "accept": '*/*',

            }
        })
            .then(response => response.json())
            .then(response => {
                let points = response.data.points
                if (points.length > 0) {
                    let latAvg = 0.0
                    let lngAvg = 0.0
                    for (var i = 0; i < points.length; i++) {
                        let latitude = parseFloat(points[i].latitude)
                        latAvg += latitude
                        let longitude = parseFloat(points[i].longitude)
                        lngAvg += longitude
                        const popupContent = document.createElement('div');

                        popupContent.innerHTML = `<div>
    <h3>${points[i].name}</h3>
    <p>Address: ${points[i].address}</p>
    <p>Distance: ~ ${Math.round(parseFloat(points[i].distance) * 100) / 100} KM</p>
    <button class="select-point-btn btn btn-small" data-point-id="${points[i].id}" data-point-name="${points[i].name}" data-point-address="${points[i].address}">Select Point</button>
</div>`;
                        popupContent.querySelector('.select-point-btn').addEventListener('click', function() {
                            const pointId = this.getAttribute('data-point-id');
                            const pointName = this.getAttribute('data-point-name');
                            const pointAddress = this.getAttribute('data-point-address');
                            selectPoint(pointId, pointName, pointAddress);
                        });
                        L.marker([latitude, longitude,], {icon: redIcon}).addTo(map)
                            .bindPopup(popupContent)
                    }

                    map.setView([latAvg / points.length, lngAvg / points.length], 10,
                        {
                            animate: true, // Enable animation
                            duration: 2, // Animation duration in seconds
                            easeLinearity: 0.25, // Animation easing coefficient
                        });
                }
            })
            .catch(error => {
                console.error('Error fetching points data:', error);
            });

    }

    function removeAllMarkers() {
        map.eachLayer(function (layer) {
            if (layer instanceof L.Marker) {
                map.removeLayer(layer);
            }
        });
    }
    function selectPoint(pointId, pointName, pointAddress) {
        // Add your logic to handle point selection here
        let selectedPoint = {
            id: pointId,
            name: pointName,
            address: pointAddress
        }


        // Dismiss the modal
        $('#map-modal').modal('hide');
        map.eachLayer((layer) => {
            layer.remove();
        });


        const selectedPointInfo = document.getElementById('selected-point-info');



        if (selectedPointInfo) {

            selectedPointInfo.innerHTML = ` <h6>Selected Point</h6>
                                            <p>${selectedPoint.name}</p>
                              <p>${selectedPoint.address}</p>
                             
                              `;
            var parent  = document.getElementById('js-delivery');
            var nestedDiv = document.createElement("div");

            console.log(parent)
            nestedDiv.innerHTML = ` <input type="hidden" id="selectedPointId" name="selectedPointId" value="${selectedPoint.id}">
                              <input type="hidden" id="selectedPointName" name="selectedPointName" value="${selectedPoint.name}">
<input type="hidden" id="selectedPointAddress" name="selectedPointAddress" value="${selectedPoint.address}">`

            while (nestedDiv.firstChild) {
                parent.appendChild(nestedDiv.firstChild);
            }

        }


    }
});