@extends('admin.layouts.app-main')

@section('template_title')
    {{ $product->name ?? "{{ __('Show') Product" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Product</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Sku:</strong>
                            {{ $product->sku }}
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $product->title }}
                        </div>
                        <div class="form-group">
                            <strong>Slug:</strong>
                            {{ $product->slug }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $product->image }}
                        </div>
                        <div class="form-group">
                            <strong>Content:</strong>
                            {{ $product->content }}
                        </div>
                        <div class="form-group">
                            <strong>Model:</strong>
                            {{ $product->model }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $product->price }}
                        </div>
                        <div class="form-group">
                            <strong>Quantity:</strong>
                            {{ $product->quantity }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $product->status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
