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
                                id="nama"
                                placeholder="nama"
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

                        <button class="btn btn-danger">submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <table></table>
        </div>
    </div>
</div>

@push('script') @endpush @endsection
