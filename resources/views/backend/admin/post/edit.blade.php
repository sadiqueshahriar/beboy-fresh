@extends('layouts.backend.app')

@section('content')

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
		                <h3 class="card-title">Edit Post</h3>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form class="form-horizontal" action="{{URL::to('admin/post/'.$post->id)}}" method="post" enctype="multipart/form-data">
		              	@csrf
                          @method('PATCH')
		                <div class="card-body">
		                  <div class="form-group row">

		                    <div class="col-sm-6">
		                    	<label for="inputEmail3" class="col-form-label">Post Title</label>
		                      <input type="text" class="form-control" id="title" name="title" placeholder="Post Title"  value="{{$post->title}}">
		                    </div>		

		                    <div class="col-sm-6">
		                    	<label for="inputEmail3" class="col-form-label">Slug</label>
		                      <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{$post->slug}}">
		                    </div>		                    

		                    <div class="col-sm-6">
		                    	<label for="inputEmail3" class="col-form-label">Meta Title</label>
		                      	<input type="text" class="form-control" name="meta_title" placeholder="Meta Title"  value="{{$post->meta_title}}">
		                    </div>

		                    <div class="col-sm-6">
		                    	<label for="inputEmail3" class="col-form-label">Meta Description</label>
		                      	<textarea name="meta_description" class="form-control" id="" cols="30" rows="2">{{$post->meta_description}}</textarea>
		                    </div>
		                    <div class="col-sm-12 mb-4">
								<label for="video" class="col-form-label">Blog Video [youtube embed link only]</label>
								<input type="text" class="form-control" name="video" value="{{ $post->video }}">
							 </div>

		                    <div class="col-sm-4">
		                    	<label for="inputEmail3" class="col-form-label">Category</label>
		                      	<select name="category_id"  class="form-control" required="">
                                    @foreach($categories as $category)
			                            <option value="{{$category->id}}"  @php echo $category->id==$post->category_id?"selected":""; @endphp>{{$category->name}}</option>
                                    @endforeach
		                      	</select>
		                    </div>	
		                    
		                    <div class="col-sm-4">
		                    	<label for="inputEmail3" class="col-form-label">Tag</label>
		                      	<select name="tag_id[]" id="tag_id" class="form-control" multiple="multiple" >
                                    @foreach($post_tags as $post_tag)
			                            <option value="{{$post_tag->tag_id}}" selected>{{$post_tag->tag->name ?? ''}}</option>
                                    @endforeach
		                      	</select>
		                    </div>	


		                    <div class="col-sm-4">
		                    	<label for="inputEmail3" class="col-form-label">Keywords</label>
		                      	<input type="text" class="form-control" name="key_words" placeholder="Keywords" value="{{$post->key_words}}"> 
		                    </div>

		                    <div class="col-sm-12">
		                    	<label for="inputEmail3" class="col-form-label">Post Description</label>
								<textarea name="description" class="textarea" id="" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{!!$post->description!!}</textarea>
		                    </div>

			                <div class="col-sm-4">
			                    <label for="inputEmail3" class="col-form-label">Fetaure Image</label>
                                    @if(isset($post))
					                <div class="form-group">
					                    <img src="{{ asset($post->image) }}" alt="Image" style="width: 30%; margin-top: 8px">
					                    <input type="hidden" name="old_image" value="{{ $post->image }}">
					                </div>
				            		@endif

			                    <input type="file" class="form-control" name="image" placeholder="Fetaure Image">
		                  	</div>		  

							<div class="col-sm-4">
		                    	<label for="inputEmail3" class="col-form-label">Date</label>
		                      	<input type="date" class="form-control" name="date" value="{{$post->date}}">
		                    </div>

							<div class="col-sm-4">
		                    	<label for="inputEmail3" class="col-form-label">Time</label>
		                      	<input type="time" class="form-control" name="time" value="{{$post->time}}">
		                    </div>
		                    
		                    <div class="col-sm-12">
								<label for="inputPassword3" class="col-sm-2 col-form-label">Status</label>
		                      	<select name="status" id="" class="form-control">
                                    <option value="1" @php echo $post->status==1?"selected":""; @endphp>Active</option>
                        			<option value="0" @php echo $post->status==0?"selected":""; @endphp>Inactive</option>
		                      	</select>
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

