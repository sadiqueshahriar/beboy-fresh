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
		                <h3 class="card-title">Edit Site Combinition</h3>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form class="form-horizontal" action="{{URL::to('admin/bgcolor/'.$bgcolor->id)}}" method="post" enctype="multipart/form-data">
		              	@csrf
		              	@method('PATCH')
		                <div class="card-body">
		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Site Combinition</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" name="code" placeholder="#000000 / name (small latter)" value="{{$bgcolor->code}}">
		                    </div>
		                  </div>			                  


		                  	<div class="form-group row">
			                    <label for="inputEmail3" class="col-sm-3 col-form-label">Section</label>
			                    <div class="col-sm-9">
			                      <select name="section" id="" class="form-control">

			                      	<option value="header_bg" @php echo $bgcolor->section=='header_bg'?"selected":""; @endphp>Header BG Color</option>
			                      	<option value="navbar_bg" @php echo $bgcolor->section=='navbar_bg'?"selected":""; @endphp>Navbar BG Color</option>
			                      	<option value="navbar_color" @php echo $bgcolor->section=='navbar_color'?"selected":""; @endphp>Navbar Font Color</option>
			                      	<option value="animated_text_bg" @php echo $bgcolor->section=='animated_text_bg'?"selected":""; @endphp>Animated Text BG Color</option>
			                      	<option value="animated_text_font_color" @php echo $bgcolor->section=='animated_text_font_color'?"selected":""; @endphp>Animated Text Font Color</option>
			                     	<option value="animated_text_fontsize" @php echo $bgcolor->section=='animated_text_fontsize'?"selected":""; @endphp>Animated Text Font Size</option>
			                     	
			                     	
			                     	<option value="latest_product_bg" @php echo $bgcolor->section=='latest_product_bg'?"selected":""; @endphp> Latest Product BG </option>  
                                    <option value="top_product_bg" @php echo $bgcolor->section=='top_product_bg'?"selected":""; @endphp> Top Product BG </option>
                                    <option value="offered_product_bg" @php echo $bgcolor->section=='offered_product_bg'?"selected":""; @endphp> Offered Product BG </option>
			                     	
			                      	<!--<option value="f_f_box" @php echo $bgcolor->section=='f_f_box'?"selected":""; @endphp>First Feature Box Section</option>-->
			                      	<!--<option value="f_f_box_card" @php echo $bgcolor->section=='f_f_box_card'?"selected":""; @endphp> Feature Box Card</option>-->
			                      	<!--<option value="f_f_box_card_font_color" @php echo $bgcolor->section=='f_f_box_card_font_color'?"selected":""; @endphp> Feature Box Font Color</option>-->

			                      	<!--<option value="s_f_box" @php echo $bgcolor->section=='s_f_box'?"selected":""; @endphp>Second Feature Box Section</option>-->
			                      	<!--<option value="s_f_box_card" @php echo $bgcolor->section=='s_f_box_card'?"selected":""; @endphp> Feature Box Card</option>-->
			                      	<!--<option value="s_f_box_card_font_color" @php echo $bgcolor->section=='s_f_box_card_font_color'?"selected":""; @endphp> Feature Box Font Color</option>-->


			                      	<!--<option value="t_f_box" @php echo $bgcolor->section=='t_f_box'?"selected":""; @endphp>Third Feature Box Section</option>-->
			                      	<!--<option value="t_f_box_card" @php echo $bgcolor->section=='t_f_box_card'?"selected":""; @endphp> Feature Box Card</option>-->
			                      	<!--<option value="t_f_box_card_font_color" @php echo $bgcolor->section=='t_f_box_card_font_color'?"selected":""; @endphp> Feature Box Font Color</option>-->


			                      	<!--<option value="f_box_card" @php echo $bgcolor->section=='f_box_card'?"selected":""; @endphp> Feature Box Card</option>-->
			                      	<!--<option value="f_box_card_font_color" @php echo $bgcolor->section=='f_box_card_font_color'?"selected":""; @endphp> Feature Box Font Color</option>-->


			                      	<option value="footer_bg_color" @php echo $bgcolor->section=='footer_bg_color'?"selected":""; @endphp> Footer BG Color</option>

			                      </select>
			                    </div>
		                  	</div>

		                  <div class="form-group row">
		                    <label for="inputPassword3" class="col-sm-3 col-form-label">Status</label>
		                    <div class="col-sm-9">
		                      <select name="status" id="" class="form-control">
                        			<option value="1" @php echo $bgcolor->status==1?"selected":""; @endphp>Active</option>
                        			<option value="0" @php echo $bgcolor->status==0?"selected":""; @endphp>Inactive</option>
		                      </select>
		                    </div>
		                  </div>
		                </div>
		                <!-- /.card-body -->
		                <div class="card-footer">
		                  <button type="submit" class="btn btn-info">Update</button>
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