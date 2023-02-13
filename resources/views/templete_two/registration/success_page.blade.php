@extends('templete_two.layouts.app')
@section('head')
    <title>{{$SiteSetting->meta_title ?? 'Binary Logic'}}</title>

@endsection


@section('content')


    
<section class="register-section mt-5 mb-5">

    <div class="container">

        <div class="row" style=" background: #0063d1;color: white;">

            <div class="col-md-12 mt-5 mb-5 text-center">

                <h3 class="">Thanks For Registration</h3>
                <a href="{{ URL::to('/profile') }}"><button class="btn btn-danger">Go to Profile</button></a>

            </div>

        </div>

    </div>

</section>




@stop