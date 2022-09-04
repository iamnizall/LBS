@extends('index') @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Lokasi</h4>
                </div>
                <div class="card-body">
                    <form id="lokasi">
                        <div class="mb-3">
                            <input class="form-control" placeholder="alamat" type="text" id="lok_alamat"
                                autocomplete="off" />
                        </div>
                        <div class="mb-3">
                            <input class="form-control" placeholder="jalan" type="text" id="lok_jalan"
                                autocomplete="off" />
                        </div>
                        <div class="mb-3">
                            <input class="form-control" placeholder="desa" type="text" id="lok_desa"
                                autocomplete="off" />
                        </div>
                        <div class="mb-3">
                            <input class="form-control" placeholder="kecamatan" type="text" id="lok_kecamatan"
                                autocomplete="off" />
                        </div>
                        <div class="mb-3">
                            <input class="form-control" placeholder="kota" type="text" id="lok_kota"
                                autocomplete="off" />
                        </div>
                        <div class="mb-3">
                            <input class="form-control" placeholder="provinsi" type="text" id="lok_provinsi"
                                autocomplete="off" />
                        </div>
                        <div class="mb-3">
                            <input class="form-control" placeholder="latitude" type="text" id="lok_lat"
                                autocomplete="off" />
                        </div>
                        <div class="mb-3">
                            <input class="form-control" placeholder="longitude" type="text" id="lok_long"
                                autocomplete="off" />
                        </div>
                        <div class="mb-3">
                            <select id="id_destinasi" class="form-control"></select>
                        </div>
                        <button class="btn btn-danger btn-sm">submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Destinasi</h4>
                </div>
                <div class="card-body">
                    <form id="destinasi">
                        <div class="mb-3">
                            <input class="form-control" placeholder="nama destinasi" type="text" id="des_nama"
                                autocomplete="off" />
                        </div>
                        <div class="mb-3">
                            <input class="form-control" placeholder="harga tiket" type="text" id="des_harga"
                                autocomplete="off" />
                        </div>
                        <div class="mb-3">
                            <input class="form-control" placeholder="detail" type="text" id="des_detail"
                                autocomplete="off" />
                        </div>
                        <div class="mb-3">
                            <input class="form-control" placeholder="link map" type="text" id="map"
                                autocomplete="off" />
                        </div>
                        <button class="btn btn-danger btn-sm">submit</button>
                    </form>
                    <div class="mb-3"></div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card mt-3">
                <table class="table table-stripet">
                    <thead>
                        <tr>
                            <th>destinasi</th>
                            <th>alamat</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@push('script')
<script>
    $(document).ready(() => {
        $("#lokasi").submit((event) => {
            event.preventDefault();
            let alamat = $("#lok_alamat").val();
            let jalan = $("#lok_jalan").val();
            let desa = $("#lok_desa").val();
            let kecamatan = $("#lok_kecamatan").val();
            let kota = $("#lok_kota").val();
            let provinsi = $("#lok_provinsi").val();
            let lat = $("#lok_lat").val();
            let long = $("#lok_long").val();
            let id_destinasi = $("#id_destinasi").val();

            $.post(
                "/api/v1/lokasi",
                {
                    alamat,
                    jalan,
                    desa,
                    kecamatan,
                    kota,
                    provinsi,
                    lat,
                    long,
                    id_destinasi,
                },
                (res) => {
                    console.log("ok lok");
                    getData();
                    $("#lok_alamat").val("");
                    $("#lok_alamat").val("");
                    $("#lok_desa").val("");
                    $("#lok_kecamatan").val("");
                    $("#lok_kota").val("");
                    $("#lok_provinsi").val("");
                    $("#lok_lat").val("");
                    $("#lok_long").val("");
                    $("#id_destinasi").val("");
                }
            );
        });

        $("#destinasi").submit((event) => {
            event.preventDefault();
            let nama = $("#des_nama").val();
            let harga = $("#des_harga").val();
            let detail = $("#des_detail").val();
            let map = $("#map").val();

            $.post(
                "/api/v1/destinasi",
                {
                    nama,
                    harga,
                    detail,
                    map,
                },
                (res) => {
                    console.log("ok des");
                    getData();
                    $("#des_nama").val("");
                    $("#des_harga").val("");
                    $("#des_detail").val("");
                    $("#map").val("");
                }
            );
        });

        function getData() {
            $.get("/api/v1/destinasi", (res) => {
                let data = res.data;
                let isinya = "<option disabled selected>pilih</option>";
                data.map((d) => {
                    isinya += `<option value="${d.id}">${d.nama}</option>`;
                });
                $("#id_destinasi").html(isinya);
            });

            $.get("/api/v1/lokasi", (res) => {
                let data = res.data;
                console.log(data);
                let isinya = "";
                data.map((d) => {
                    isinya += `<tr><td>${d.nama}</td><td>${d.alamat}</td></tr>`;
                });
                $("tbody").html(isinya);
            });
        }
        getData();
    });
</script>
@endpush @endsection