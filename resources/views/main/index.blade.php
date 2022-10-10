@extends('layouts.page')

@section('content')
    <div class="container">
        <div class="my-5">
            <h1 class="display-1 fw-bold">
                Best Elementor Templates.
            </h1>

            <p class="lead fs-2 my-3">
                Inginkan sebuah Boilerplate untuk website anda? Muat turun template yang dibangunkan menggunakan Elementor
                secara percuma!
            </p>
        </div>

        {{-- Showcase --}}
        <div class="row">
            <div class="col-4">
                <div class="card shadow-sm border-0">
                    <img src="https://asia-quest.my/wp-content/uploads/2020/06/Irfigo-1-768x579.png" alt=""
                        srcset="">

                    <div class="card-body">
                        <span class="fs-3 lead fw-bold">Nippon Designer</span>

                        <div class="cta mt-4 mb-2 d-block">
                            @guest
                                <button class="btn btn-primary">Login to download</button>
                            @endguest

                            @auth
                                <button class="btn btn-primary">Download</button>
                            @endauth

                            <button class="btn btn-outline-primary">Preview</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
