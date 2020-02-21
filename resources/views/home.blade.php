@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome and see your assigned Project assignments!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="links">
                        <a href="https://github.com/Crinsane/LaravelShoppingcart#example">Group 1 - Shopping Cart</a>
                        <br>
                        <a href="https://www.techiediaries.com/php-laravel-crud-mysql-tutorial/">Group 2 - Customer Portal</a>
                        <br>
                        <a href="https://appdividend.com/2018/02/05/laravel-multiple-images-upload-tutorial/">Group 3 - Application w/ File Uploader</a>
                        <br>
                        <a href="https://www.larashout.com/laravel-e-commerce-application-development-catalog-listing">Group 4 - Product Catalog</a>
                        <br>
                        <a href="https://github.com/mobygit/AppDET---Project.git">AppDET GitHub Link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
