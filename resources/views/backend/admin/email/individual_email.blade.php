@extends('layouts.backend.app')

@section('content')
<?php
  $user_id = Auth::user()->id;
  $user = App\Models\User::where('id', $user_id)->first();
?> 

 <div class="content-wrapper">

    <section class="content" >
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Manage Email</h3>
            </div>
            <form method="post" action="{{ route('admin.send-marketing-email') }}">
                @csrf
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl.</th>
                  <th>Name</th>
                  <th>email</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
            @php $i=1 @endphp
            @foreach($customer_mail as $item)
                <tr>
                  	<td>{{$i++}}</td>
                    <td>{{$item->first_name.' '.$item->last_name}}</td>
                    <td>{{$item->email}}</td>
                    <td><a href="{{route('send-individual-mail',$item->id)}}" class="btn btn-primary btn-sm" title="Edit" style="float: left;margin-right: 10px;">
                       <i class="fa fa-share"></i>
                    </a></td>
                </tr>
				@endforeach
	
                </tfoot>
              </table>
            </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}
</script>
@endsection