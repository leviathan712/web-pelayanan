@extends('layouts.main')

@section('page-content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            <div class="card border-0 shadow-lg">
                <div
                    class="card-header bg-primary text-white text-center position-relative d-flex align-items-center justify-content-center">
                    <h2 style="font-family: 'Poppins', sans-serif; flex-grow: 1;">Selamat Datang di Dashboard Pelayanan RW.
                        09</h2>
                    <div id="status" class="status-card d-flex align-items-center justify-content-center">
                        <span class="status-indicator {{$status_online->value == 1 ? 'online' : 'offline'}}" id="status-indicator"></span>
                        <span class="status-text" id="status-text">
                            {{-- {{$status_online->value == 1 ? 'Online' : 'Offline'}} --}}
                            @if ($status_online->value == 1)
                                Online
                            @else
                                Offline
                            @endif
                        </span>
                    </div>
                </div>

                <div class="card-body">
                    <!-- Isi dari konten Anda di sini -->

                    <div class="row mt-4">
                        <div class="col-md-12 text-center">
                            <form action="{{route('set-online-status')}}" method="POST">
                                @csrf
                                <div class="custom-control custom-switch">
                                    <input {{$status_online->value == 1 ? 'checked' : ''}} name="status" id="status-toggle" type="checkbox" class="custom-control-input">
                                    <label class="custom-control-label" for="status-toggle">Status Layanan</label>
                                    <button type="submit" class="d-none" id="button-submit-status"></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-js')
    <script>
        $("#status-toggle").on('change', function () {
            if ($(this).is(':checked')) {
                $(this).val(1)
            } else {
                $(this).val(0)
            }
            $("#button-submit-status").trigger('click');
        });
    </script>

    <style>
        .status-indicator {
            display: inline-block;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            margin-right: 5px;
        }

        .online {
            background-color: green;
        }

        .offline {
            background-color: red;
        }

        .status-text {
            display: inline-block;
            vertical-align: middle;
            color: white;
        }
    </style>
@endsection
