@extends('templete_two.layouts.app')



@section('content')


<?php

    $siteInfo = App\Models\SiteSetting::first();
    $offices = App\Models\Office::where('status', 1)->get();

?>
<style>
  .map{
    border: 1px solid transparent;
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
  }
  @media only screen and (max-width: 767px) {
      .map{
        border: none !important;
        box-shadow: none !important;
      }
  }
</style>

<main>

    <!-- main section -->
    <section class="direction-section">
      <div class="container">
        <div class="row">

          <!-- heading -->
          <div class="direction-title">
            <h3>Sales Outlets</h3>
            <div class="direction-divider"></div>
            <p>Order Online or Buy Product From your Nearest Outlets!</p>
            </div>

          <!-- body -->
          {{-- <div class="direction-wrapper">

              <!-- item -->

            @foreach($offices as $office)

            <div class="direction-item">

              <!-- thumb -->
              <div class="direction-thumb">
                <img src="{{asset($office->image)}}" alt="{!! $office->address !!}">
              </div>

              <!-- content -->
              <div class="direction-content">
                <h2>{!! $office->branch_name !!}</h2>
                <p class="direction-address"><i class="fa fa-map-o" aria-hidden="true"></i> {!! $office->address !!}</p>

                  <div class="direction-contact">
                      
                    <li><i class="fa fa-phone-square" aria-hidden="true"></i><span class="direction-phone">Sales Support:</span> {{ $office->sales_support }} </li>
                    
                    
                    <li><i class="fa fa-phone-square" aria-hidden="true"></i><span class="direction-phone">Warranty Support:</span> {{ $office->warranty_support }} </li>
                      
                      
                    <li><i class="fa fa-phone-square" aria-hidden="true"></i><span class="direction-phone">Technical Support:</span> {{ $office->technicale_support }}</li>
                    
                    
                    
                    
                    
                    <li><i class="fa fa-envelope-square" aria-hidden="true"></i><span class="direction-phone">Email:</span> {{ $office->email }} </li>
                    
                  </div>

                  <h4><span class="direction-bh">Business Hours:</span> {{ $office->note }}</h4>

                  <div class="direction-footer-item">
                    <a href="{{ $office->map }}" target="_blank">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                      Find on map
                    </a>
                  </div>
              </div>
            </div>

            @endforeach

          </div> --}}
          {{-- @php
              @dd($offices);
          @endphp --}}

          <div class="row">
            @foreach($offices as $office)
            <div class="col-md-6">
              <div class="direction-item mb-4">
              <!-- thumb -->
              <div class="direction-thumb">
                <img src="{{asset($office->image)}}" alt="{!! $office->address !!}">
              </div>
              <!-- content -->
              <div class="direction-content">
                {{-- @php
                     @dd($office->branch_name ); 
                 @endphp --}}
                <h2>{!! $office->branch_name !!}</h2>
                <p class="direction-address"><i class="fa fa-map-o" aria-hidden="true"></i> {!! $office->address !!}</p>
                  <div class="direction-contact">   
                    <li><i class="fa fa-phone-square" aria-hidden="true"></i><span class="direction-phone">Sales Support:</span> {{ $office->sales_support }} </li>
                    <li><i class="fa fa-phone-square" aria-hidden="true"></i><span class="direction-phone">Warranty Support:</span> {{ $office->warranty_support }} </li>
                    <li><i class="fa fa-phone-square" aria-hidden="true"></i><span class="direction-phone">Technical Support:</span> {{ $office->technicale_support }}</li>
                    <li><i class="fa fa-envelope-square" aria-hidden="true"></i><span class="direction-phone">Email:</span> {{ $office->email }} </li>        
                  </div>
                  <h4><span class="direction-bh">Business Hours:</span> {{ $office->note }}</h4>
                  <div class="direction-footer-item">
                    <a href="{{ $office->map }}" target="_blank">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                      Find on map
                    </a>
                  </div>
              </div>
            </div>
            </div>
            <div class="col-md-6 col-sm-12 col-12 mb-4 map">   
                  @if ($office->branch_name == 'IDB Bhaban Branch')
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.1291195057865!2d90.379288!3d23.778415999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c74c253278f3%3A0x18bf9a66da8d515d!2sBinary%20Logic!5e0!3m2!1sen!2sbd!4v1666170394077!5m2!1sen!2sbd"width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  @elseif($office->branch_name == 'Multiplan Branch')
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29212.59358105084!2d90.3641615!3d23.762559!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8c78b74b343%3A0x734231926d025d00!2sBinary%20Logic!5e0!3m2!1sen!2sbd!4v1666171953466!5m2!1sen!2sbd" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  @elseif($office->id == 5)
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29212.59358105084!2d90.3641615!3d23.762559!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c74a79ed99e1%3A0x50fc3275b5f36bea!2zQmluYXJ5IExvZ2ljIHwg4Kas4Ka-4KaH4Kao4Ka-4Kaw4Ka_IOCmsuCmnOCmv-CmlSB8IENvcnBvcmF0ZSBPZmZpY2U!5e0!3m2!1sen!2sbd!4v1666172000120!5m2!1sen!2sbd" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  @elseif($office->branch_name == 'Sylhet Branch')
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.0569202736237!2d91.868625!3d24.896039999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375055d670c90aa3%3A0xde68c233c3bb8796!2sBinary%20Logic%20Sylhet%20Branch!5e0!3m2!1sen!2sbd!4v1666172076301!5m2!1sen!2sbd" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  @elseif($office->branch_name == 'Eastern Plus Branch')
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.0569202736237!2d91.868625!3d24.896039999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375055d670c90aa3%3A0xde68c233c3bb8796!2sBinary%20Logic%20Sylhet%20Branch!5e0!3m2!1sen!2sbd!4v1666172142343!5m2!1sen!2sbd" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  @endif
            </div>
            @endforeach
          </div>

        </div>
      </div>
    </section>

</main>



@endsection