@extends('templete_two.layouts.app')
@section('head')
    <title>{{$SiteSetting->meta_title ?? 'Binary Logic'}}</title>

@endsection


@section('content')
 <style>
    .newpopup_design{
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
    
 </style>


    
<section class="register-section mt-5 mb-5">

    <div class="container">

        <div class="row newpopup_design" style="background: #fbffff;">

            <div class="col-md-12 mt-5 mb-5 text-center">

                <h3 style="font-size: 19px;">আপনার অর্ডারটি সফলভাবে সম্পন্ন হয়েছে । শীঘ্রই আমাদের বিক্রয় প্রতিনিধি আপনার
                    সাথে যোগাযোগ করবেন ।</h3>
                <a href="{{ URL::to('/') }}"><button class="btn btn-primary">Go Back</button></a>

            </div>

        </div>

    </div>

</section>




@stop