@extends('index')
@section('content')
{{-- <div class="row mt-5 ml-4" >  
  <div class="col-md-8" id="bg">
  </div>
  <div class="col-md-4">
    <h3>Tour Guide Kabupaten Bantul</h3>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, itaque!</p>
  </div>
</div> --}}

{{-- Home --}}
<header>
  <!-- Intro settings -->
  <style>
    /* Default height for small devices */
    #intro-example {
      height: 400px;
    }

    /* Height for devices larger than 992px */
    @media (min-width: 992px) {
      #intro-example {
        height: 600px;
      }
    }
  </style>

  <!-- Background image -->
  <div
    id="intro-example"
    class="p-5 text-center bg-image"
    style="background-image: url('https://images.unsplash.com/photo-1586976162525-ebd13753bfbd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1034&q=80');background-repeat: no-repeat; background-size: cover"
  >
    <div class="mask">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3 mt-5 text-white">Mari Berkunjung Ke Bantul</h1>
          <p class="mb-4 text-white">Jelajahi indahnya Kabupaten Bantu. Cari beragam spot wisata, kuliner <br/> dan pengalaman liburan yang menyenangkan disini!</p>
          <a
            class="btn btn-outline-light btn-lg m-2 text-white"
            href="#"
            role="button"
          >Get Started</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>


<div class="container mb-3">
  <div class="text-center">
    <button class="btn btn-primary focus mt-3">
      <i class="fas fa-search"></i> Lokasi saya
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
        <div id="app" style="width: 100%; height: 400px"></div>
      </div>
    </div>
    <div class="col-lg-4 mt-3">
      <ul class="list-group" id="list">
      </ul>
    </div>
  </div>
</div>

@include('./components/Information')


@push('script')

<script>
  function lokasiWisata(){
        let data = [
            { tempatWisata : 'Pantai Parangtritis', jarak : 1.4},
            { tempatWisata : 'Pantai Parangkusumo', jarak : 2.3},
            { tempatWisata : 'Hutan Pinus Mangunan sampai Puncak Becici', jarak : 2.1 },
        ]

        let listTempat = ''
        data.map((d)=>{
            listTempat += `<li class="list-group-item d-flex justify-content-between align-items-center">${d.tempatWisata}<span class="badge badge-primary badge-pill">${d.jarak} km</span></li>`
      
        })
        $('#list').html(listTempat)
    }

    lokasiWisata()
</script>

<script>
  $(".focus").click(() => {
        $(".focus").html("...");

      navigator.geolocation.getCurrentPosition((position) => {
        const tourStops = [
          [{ lat: position.coords.latitude, lng: position.coords.longitude }, "Posisi Sekarang"],
          [{ lat: -7.782984, lng: 110.367035 }, "Tugu Yogyakkarta"],
          [{ lat: -7.750026, lng: 110.402501 }, "Jogja Amazon Green"],
          [{ lat: -7.800330, lng: 110.365970 }, "Benteng Vredeburg"],
          [{ lat: -7.810360 , lng:  110.468620 }, "Candi Abang"],
          [{ lat: -7.777930, lng: 110.493970  }, "Candi Banyunibo"],
          [{ lat:  -7.733529, lng: 110.329394  }, "Cagar Budaya Cebong"],
          [{ lat: -7.750290, lng: 110.369520  }, "Monumen Yogya Kembali"],
        ];

        let pos = position.coords;
        initMap(pos.latitude, pos.longitude, tourStops);

        $.get(
          `https://api.opencagedata.com/geocode/v1/json?q=${pos.latitude}+${pos.longitude}&key=597956fbef70415fb8801a4c13cb3493`,
          (res) => {
            const result = res.results[0].formatted;
            $(".alert").removeAttr("hidden");
            $("#kota").html(`${result}`);
            $(".focus").html("<i class='fas fa-search'></i> Lokasi saya");
          }
        );
      });
    });

    function initMap(LAT, LNG, tourStops) {
      if (LAT == null) {
        var mapProp = {
          center: new google.maps.LatLng(-7.797068, 110.370529),
          zoom: 12,
        };
      } else {
        var mapProp = {
          center: new google.maps.LatLng(LAT, LNG),
          zoom: 12,
        };
      }
      const map = new google.maps.Map(
        document.getElementById("app"),
        mapProp
      );

      if (tourStops) {
        setMarker(tourStops)
      }

      function setMarker(tourStops){
        const infoWindow = new google.maps.InfoWindow();

        tourStops.forEach(([position, title], i) => {
          const marker = new google.maps.Marker({
            position,
            map,
            title: `${title}`,
            optimized: false,
          });

          marker.addListener("click", () => {
            infoWindow.close();
            infoWindow.setContent(marker.getTitle());
            infoWindow.open(marker.getMap(), marker);
          });
        });
      }
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?&callback=initMap"></script>

@endpush
@endsection