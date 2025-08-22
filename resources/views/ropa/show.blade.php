@extends('layouts.app')

@section('template_title')
    {{ $ropa->name ?? __('Show') . " " . __('Ropa') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Ropa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('ropas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $ropa->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Description:</strong>
                                    {{ $ropa->description }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Price:</strong>
                                    {{ $ropa->price }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Stock:</strong>
                                    {{ $ropa->stock }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Size:</strong>
                                    {{ $ropa->size }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Color:</strong>
                                    {{ $ropa->color }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Brand:</strong>
                                    {{ $ropa->brand }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Gender:</strong>
                                    {{ $ropa->gender }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Release Date:</strong>
                                    {{ $ropa->release_date }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Is Active:</strong>
                                    {{ $ropa->is_active }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
