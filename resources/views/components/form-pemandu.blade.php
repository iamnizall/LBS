@extends('index') @section('content')

<div class="comtainer">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Pemandu</div>
                <div class="card-body">
                    <form id="form-pemandu">
                        <div class="mb-3">
                            <input
                                type="text"
                                autocomplete="off"
                                id="lisensi"
                                placeholder="lisensi"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-3">
                            <input
                                type="text"
                                autocomplete="off"
                                id="ktan"
                                placeholder="ktan"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-3">
                            <input
                                type="text"
                                autocomplete="off"
                                id="nama"
                                placeholder="nama"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-3">
                            <input
                                type="text"
                                autocomplete="off"
                                id="bahasa"
                                placeholder="bahasa"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-3">
                            <input
                                type="text"
                                autocomplete="off"
                                id="ttl"
                                placeholder="ttl"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-3">
                            <input
                                type="text"
                                autocomplete="off"
                                id="alamat"
                                placeholder="alamat"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-3">
                            <input
                                type="text"
                                autocomplete="off"
                                id="pendidikan"
                                placeholder="pendidikan"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-3">
                            <input
                                type="text"
                                autocomplete="off"
                                id="telp"
                                placeholder="telp"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-3">
                            <input
                                type="text"
                                autocomplete="off"
                                id="email"
                                placeholder="email"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-3">
                            <input
                                type="text"
                                autocomplete="off"
                                id="tempat"
                                placeholder="tempat"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-3">
                            <input
                                type="text"
                                autocomplete="off"
                                id="jabatan"
                                placeholder="jabatan"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-3">
                            <input
                                type="text"
                                autocomplete="off"
                                id="sertifikasi"
                                placeholder="sertifikasi"
                                class="form-control"
                            />
                        </div>

                        <button class="btn btn-danger btn-sm">submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body overflow-auto">
                    <table class="table table-stripet">
                        <thead>
                            <tr>
                                <th>Nama Pemandu</th>
                                <th>no telp</th>
                                <th>bahasa</th>
                                <th>jabatan</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
<script>
    $(document).ready(() => {
        function getData() {
            $.get("/api/v1/pemandu", (res) => {
                let data = res.data;
                console.log(data);
                let isinya;
                data.map((d) => {
                    isinya += `<tr><td>${d.nama}</td><td>${d.telp}</td><td>${d.bahasa}</td><td>${d.jabatan}</td></tr>`;
                });
            });
        }

        getData();

        $("#form-pemandu").submit((event) => {
            event.preventDefault();
            let lisensi = $("#lisensi").val();
            let ktan = $("#ktan").val();
            let nama = $("#nama").val();
            let bahasa = $("#bahasa").val();
            let ttl = $("#ttl").val();
            let alamat = $("#alamat").val();
            let telp = $("#telp").val();
            let pendidikan = $("#pendidikan").val();
            let email = $("#email").val();
            let tempat = $("#tempat").val();
            let jabatan = $("#jabatan").val();
            let sertifikasi = $("#sertifikasi").val();
            $.post(
                "/api/v1/pemandu",
                {
                    lisensi,
                    ktan,
                    nama,
                    alamat,
                    bahasa,
                    ttl,
                    telp,
                    email,
                    pendidikan,
                    tempat,
                    jabatan,
                    sertifikasi,
                },
                () => {
                    $("#lisensi").val("");
                    $("#ktan").val("");
                    $("#nama").val("");
                    $("#bahasa").val("");
                    $("#ttl").val("");
                    $("#alamat").val("");
                    $("#pendidikan").val("");
                    $("#telp").val("");
                    $("#email").val("");
                    $("#tempat").val("");
                    $("#jabatan").val("");
                    $("#sertifikasi").val("");
                }
            );
        });
    });
</script>
@endpush @endsection
