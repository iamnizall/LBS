<div class="container mb-3">
    <div class="text-center mt-3">
        <button class="btn btn-primary focus">
            <i class="fas fa-search"></i> My Location
        </button>
        <div class="alert alert-success" hidden>
            <h5>
                <b id="kota"> Yogyakarta </b>
            </h5>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 mt-3">
            <div class="card">
                <div id="map" style="width: 100%; height: 400px"></div>
            </div>
        </div>
        <div class="col-lg-4 mt-3">
            <ul class="list-group">
                <li
                    class="list-group-item d-flex justify-content-between align-items-center"
                >
                    Pantai Parangtritis
                    <span class="badge badge-primary badge-pill">1,4 km</span>
                </li>
                <li
                    class="list-group-item d-flex justify-content-between align-items-center"
                >
                    Pantai Parangkusumo
                    <span class="badge badge-primary badge-pill">2,3 km</span>
                </li>
                <li
                    class="list-group-item d-flex justify-content-between align-items-center"
                >
                    Hutan Pinus Mangunan sampai Puncak Becici
                    <span class="badge badge-primary badge-pill">5 km</span>
                </li>
            </ul>
        </div>
    </div>
</div>

@push('script')
<script>
    $(".focus").click(() => {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
            $(".focus").html("...");
        } else {
            console.log("Geolocation is not supported by this browser.");
        }
    });

    function showPosition(position) {
        const LAT = position.coords.latitude;
        const LNG = position.coords.longitude;
        console.log(LAT, LNG);
        myMap(LAT, LNG);
        $.get(
            `https://api.opencagedata.com/geocode/v1/json?q=${LAT}+${LNG}&key=597956fbef70415fb8801a4c13cb3493`,
            (res) => {
                const result = res.results[0].formatted;
                $(".alert").removeAttr("hidden");
                $("#kota").html(`${result}`);
                $(".focus").html("<i class='fas fa-search'></i> my Location");
            }
        );
    }

    function myMap(LAT, LNG) {
        if (LAT == null) {
            var mapProp = {
                center: new google.maps.LatLng(-7.797068, 110.370529),
                zoom: 12,
            };
        } else {
            var mapProp = {
                center: new google.maps.LatLng(LAT, LNG),
                zoom: 15,
            };
        }
        var map = new google.maps.Map(document.getElementById("map"), mapProp);
    }
</script>

<script
    src="https://maps.googleapis.com/maps/api/js?callback=myMap&v=weekly"
    defer
></script>
@endpush
