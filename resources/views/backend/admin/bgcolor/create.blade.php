@extends('layouts.backend.app')

@section('content')

 <div class="content-wrapper">
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          	<div class="col-md-12">

	            @if ($errors->any())
	                <div class="alert alert-danger">
	                    <ul>
	                        @foreach ($errors->all() as $error)
	                            <li>{{ $error }}</li>
	                        @endforeach
	                    </ul>
	                </div>
	            @endif
          		
	            <!-- Horizontal Form -->
		            <div class="card card-info">
		              <div class="card-header">
		                <h3 class="card-title">Add Site Combinition</h3>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form class="form-horizontal" action="{{URL::to('admin/bgcolor')}}" method="post" enctype="multipart/form-data">
		              	@csrf
		                <div class="card-body">
		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Code/Size</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" name="code" placeholder="#000000 / name (samll latter) / size (10px))">
		                      <span style="font-size: 12px">Color Code: #000000 / name (samll latter) / size (10px))</span>
		                    </div>
		                  </div>			                  


		                  	<div class="form-group row">
			                    <label for="inputEmail3" class="col-sm-3 col-form-label">Section</label>
			                    <div class="col-sm-9">
			                      <select name="section" id="" class="form-control">
			                      	<option value="" disabled="" selected="">---Select Section---</option>
			                      	<option value="header_bg">Header BG Color</option>
			                      	<option value="navbar_bg">Navbar BG Color</option>
			                      	<option value="navbar_color">Navbar Font Color</option>
			                      	<option value="animated_text_bg">Animated Text BG Color</option>
			                      	<option value="animated_text_font_color">Animated Text Font Color</option>
			                      	<option value="animated_text_fontsize">Animated Text Font Size</option>


                                    <option value="latest_product_bg"> Latest Product BG </option>  
                                    <option value="top_product_bg"> Top Product BG </option>
                                    <option value="offered_product_bg"> Offered Product BG </option>
        
			                      	<!--<option value="f_f_box">First Feature Box Section</option>-->
			                      	<!--<option value="f_f_box_card"> First Feature Box Card</option>-->
			                      	<!--<option value="f_f_box_card_font_color">First Feature Box Font Color</option>-->

			                      	<!--<option value="s_f_box">Second Feature Box Section</option>-->
			                      	<!--<option value="s_f_box_card"> Second Feature Box Card</option>-->
			                      	<!--<option value="s_f_box_card_font_color">Second Feature Box Font Color</option>-->

			                      	<!--<option value="t_f_box">Third Feature Box Section</option>-->
			                      	<!--<option value="t_f_box_card"> Third Feature Box Card</option>-->
			                      	<!--<option value="t_f_box_card_font_color">Third Feature Box Font Color</option>-->

			                      	<option value="footer_bg_color"> Footer BG Color</option>
			                      </select>
			                    </div>
		                  	</div>

		                  <div class="form-group row">
		                    <label for="inputPassword3" class="col-sm-3 col-form-label">Status</label>
		                    <div class="col-sm-9">
		                      <select name="status" id="" class="form-control">
		                      	<option value="1">Active</option>
		                      	<option value="0">Inactive</option>
		                      </select>
		                    </div>
		                  </div>
		                </div>
		                <!-- /.card-body -->
		                <div class="card-footer">
		                  <button type="submit" class="btn btn-info">Save</button>
		                  <button type="reset" class="btn btn-default float-right">Cancel</button>
		                </div>
		                <!-- /.card-footer -->
		              </form>
	            </div>
	            <!-- /.card -->
			</div>
		</div>
	</div>
</section>
</div>

@endsection