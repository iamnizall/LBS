<div class="container mb-3">
    <div class="text-center mt-3">
        <button class="btn btn-primary"> <i class="fas fa-search"></i> My Location</button>
    </div>
    <div class="row">
        <div class="col-md-7 mt-3">
            <div class="card">
                <div id="googleMap" style="width:100%;height:400px;"></div>
            </div>
        </div>
        <div class="col-md-5 mt-3">
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pantai Parangtritis
                    <span class="badge badge-primary badge-pill">1,4 km</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pantai Parangkusumo
                    <span class="badge badge-primary badge-pill">2,3 km</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Hutan Pinus Mangunan sampai Puncak Becici
                    <span class="badge badge-primary badge-pill">5 km</span>
                </li>
            </ul>
        </div>
    </div>
</div>

@push('script')
<script>
    function myMap() {
        var mapProp= {
            center:new google.maps.LatLng(-7.750290, 110.369520),
            zoom:9,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?&callback=myMap"></script>
@endpush