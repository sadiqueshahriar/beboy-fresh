@extends('layouts.backend.app')



@section('content')



<style>

    

    .myClass {

        background-color: #D33682;

        color: white;

        width: 120px;

        font-weight: bold;

        text-align: center;

    }

    

</style>



 <div class="content-wrapper">

<section class="content mt-5 mb-5">

    <div class="container-fluid">

        <div class="row">

          <!-- left column -->

          	<div class="col-md-12 mt-5">



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

		                <h3 class="card-title">Edit Site Info</h3>

		              </div>

		              <!-- /.card-header -->

		              <!-- form start -->

		              <form class="form-horizontal" action="{{URL::to('admin/sitesetting/'.$sitesetting->id)}}" method="post" enctype="multipart/form-data">

		              	@csrf

		              	@method('PATCH')

		                <div class="card-body">





		                  <div class="form-group row">

		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Site Name</label>

		                    <div class="col-sm-9">

		                      <input type="text" class="form-control" name="name" placeholder="Site Name" value="{{$sitesetting->name}}">

		                    </div>

		                  </div> 	





		                    <div class="form-group row">

		                    	<label for="inputEmail3" class="col-sm-3 col-form-label">Meta Title</label>

		                    	

		                    	<div class="col-sm-9">

		                      	    <input type="text" class="form-control" name="meta_title" placeholder="Meta Title" value="{{$sitesetting->meta_title}}">

		                      	</div>

		                    </div>

		                    



		                     <div class="form-group row">

		                    	<label for="inputEmail3" class="col-sm-3 col-form-label">Meta Description</label>

		                    	<div class="col-sm-9">

		                      	    <input type="text" class="form-control" name="meta_des" placeholder="Meta Description"  value="{{$sitesetting->meta_des}}" data-charcount="true" data-maxlen="160">

		                      	</div>

		                    </div>			                    

		                    

		                    

		                    <div class="form-group row">

		                    	<label for="inputEmail3" class="col-sm-3 col-form-label">Meta Keywords</label>

		                    	<div class="col-sm-9">

		                      	    <input type="text" class="form-control" name="meta_keywords" placeholder="Meta Keywords" value="{{$sitesetting->meta_keywords}}">

		                      	</div>

		                    </div>				                    

		                    <div class="form-group row">
		                    	<label for="inputEmail3" class="col-sm-3 col-form-label">Canonical ( Tag ) Link</label>
		                    	<div class="col-sm-9">
		                      	    <input type="text" class="form-control" name="canonical" placeholder="Canonical ( Tag ) Link" value="{{$sitesetting->canonical}}">
		                      	</div>

		                    </div>	
		                    <div class="form-group row">

		                    	<label for="inputEmail3" class="col-sm-3 col-form-label">Robots meta tag</label>
		                    	<div class="col-sm-9">

		                      	    <input type="text" class="form-control" name="meta_robots" placeholder=".. , ..." value="{{$sitesetting->meta_robots}}">

		                      	</div>

		                    </div>	
		                  <div class="form-group row">

		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Address</label>

		                    <div class="col-sm-9">

		                      <input type="text" class="form-control" name="address" placeholder="Address"  value="{{$sitesetting->address}}">

		                    </div>

		                  </div> 	



		                  <div class="form-group row">

		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Phone</label>

		                    <div class="col-sm-9">

		                      <input type="text" class="form-control" name="phone" placeholder="Phone"  value="{{$sitesetting->phone}}">

		                    </div>

		                  </div>		



		                  <div class="form-group row">

		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>

		                    <div class="col-sm-9">

		                      <input type="text" class="form-control" name="email" placeholder="Email"  value="{{$sitesetting->email}}">

		                    </div>

		                  </div>			



		                  <div class="form-group row">

		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Facebook</label>

		                    <div class="col-sm-9">

		                      <input type="text" class="form-control" name="facebook" placeholder="Facebook"  value="{{$sitesetting->facebook}}">

		                    </div>

		                  </div>			



		                  <div class="form-group row">

		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Twitter</label>

		                    <div class="col-sm-9">

		                      <input type="text" class="form-control" name="twitter" placeholder="Twitter"  value="{{$sitesetting->twitter}}">

		                    </div>

		                  </div>	



		                  <div class="form-group row">

		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Linkedin</label>

		                    <div class="col-sm-9">

		                      <input type="text" class="form-control" name="linkedin" placeholder="linkedin"  value="{{$sitesetting->linkedin}}">

		                    </div>

		                  </div>	



		                  <div class="form-group row">

		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Youtube</label>

		                    <div class="col-sm-9">

		                      <input type="text" class="form-control" name="youtube" placeholder="Youtube"  value="{{$sitesetting->youtube}}">

		                    </div>

		                  </div>	



		                  <div class="form-group row">

		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Intagram</label>

		                    <div class="col-sm-9">

		                      <input type="text" class="form-control" name="intagram" placeholder="Intagram"  value="{{$sitesetting->intagram}}">

		                    </div>

		                  </div>			                  





		                  	<div class="form-group row">

			                    <label for="inputEmail3" class="col-sm-3 col-form-label">Website Logo</label>

			                    <div class="col-sm-9">



			                    	@if(isset($sitesetting))

					                <div class="form-group">

					                    <img src="{{ asset($sitesetting->image) }}" alt="Image" style="width: 30%; margin-top: 8px">

					                    <input type="hidden" name="old_image" value="{{ $sitesetting->image }}">

					                </div>

				            		@endif



			                      <input type="file" class="form-control" name="image" placeholder="Fetaure Image">

			                    </div>

		                  	</div>





		                  	<div class="form-group row">

			                    <label for="inputEmail3" class="col-sm-3 col-form-label">Meta Image</label>

			                    <div class="col-sm-9">



			                    	@if(isset($sitesetting))

					                <div class="form-group">

					                    <img src="{{ asset($sitesetting->meta_image) }}" alt="Image" style="width: 30%; margin-top: 8px">

					                    <input type="hidden" name="old_meta_image" value="{{ $sitesetting->meta_image }}">

					                </div>

				            		@endif



			                      <input type="file" class="form-control" name="meta_image" placeholder="Fetaure Image">

			                      <span style="color: red; font-size: 12px">Width: 900px; Height: 350px</span>

			                    </div>

		                  	</div>



		                  <div class="form-group row">

		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Robots.Txt</label>

		                    <div class="col-sm-9">

		                      <textarea name="robots_txt" class="form-control" rows="10">{{$sitesetting->robots_txt}}</textarea>

		                    </div>

		                  </div>
						  <div class="form-group row">
		                    <label for="inputDescription" class="col-sm-3 col-form-label">Home Page Summary</label>
		                    <div class="col-sm-9">
		                      <textarea name="category_summary" id="category_summary" class="form-control" rows="5">{{$sitesetting->category_summary}}</textarea>
		                    </div>
		                  </div>
						  




		                  <div class="form-group row">

		                    <label for="inputPassword3" class="col-sm-3 col-form-label">Templete</label>

		                    <div class="col-sm-9">

								<input type="radio" id="templete1" name="templete" value="1" @php echo $sitesetting->templete==1?"checked":""; @endphp>
								<label for="templete1"> 
									Templete 1 
									<!-- <span> (Format:  www.google.com) </span> -->
								</label>

								<br>

								<input type="radio" id="templete2" name="templete" value="2" @php echo $sitesetting->templete==2?"checked":""; @endphp>
								<label for="templete2">
									Templete 2
								</label>

								<br>


		                    </div>

		                  </div>





		                  <div class="form-group row">

		                    <label for="inputPassword3" class="col-sm-3 col-form-label">Status</label>

		                    <div class="col-sm-9">

		                      <select name="status" id="" class="form-control">

                        			<option value="1" @php echo $sitesetting->status==1?"selected":""; @endphp>Active</option>

                        			<option value="0" @php echo $sitesetting->status==0?"selected":""; @endphp>Inactive</option>

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



<script>

	</div>    





    

</script>



@endsection