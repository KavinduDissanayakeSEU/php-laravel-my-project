@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-title"> Welcome</h1>
            </div>
            <div class="row justify-content-conter mb-5">
                @forelse ($items as $item)
                        <div class="col-lg-4">
                        <div class="card mb-2" style="width: 18rem; height: 18rem;">
                            <img src="{{ config('images.access_path') }}/{{ $item->image->name }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Name : {{ $item->name }}</h5>
                              <p class="card-text">Price : {{ $item->price }}</p>
                              </div>
                        </div>
                    </div>
                @empty
                <div class="col-lg-12">
                    <h1 class='text-danger'>No Products Found</h1>
                </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .page-title{
            padding: 15px;
            color: rgb(42, 5, 78);
            font-size: 4rem;
        }
    </style>
@endpush
