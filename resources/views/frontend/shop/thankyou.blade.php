@extends('layouts.frontend.app')

@section('content')

<?php
    $user_id = Session::get('user_id');
?>


<section class="register-section mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 mb-5 text-center">
            	<h3 class="text-white">Thanks For Order.. We Will Contact You As Soon As Possible</h3>
            </div>
        </div>
    </div>
</section>






@endsection