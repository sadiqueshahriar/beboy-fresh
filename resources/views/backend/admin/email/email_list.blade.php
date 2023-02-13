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
              <h3 class="card-title">Manage Brand</h3>
            </div>
            <form method="post" action="{{ route('admin.send-marketing-email') }}">
                @csrf
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="text-center pt-3">
                    <div class="custom-checkbox custom-checkbox-table custom-control">
                        <input type="checkbox" data-checkboxes="mygroup"
                               data-checkbox-role="dad"
                               class="custom-control-input" id="checkbox-all"
                               name="all_data" value="all" onclick="toggle(this);">
                        <label for="checkbox-all" class="custom-control-label"> </label>
                        <button type="submit" name="btn" class="btn btn-success"><i class="fas fa-mail-bulk"></i></Button>
  
                    </div>
                </th>
                  <th>Sl.</th>
                  <th>email</th>
                  {{-- <th>Action</th> --}}
                </tr>
                </thead>
                <tbody>
            @php $i=1 @endphp
            @foreach($customer_mail as $item)
                <tr>
                  <td class="text-center pt-2">
                    <div class="custom-checkbox custom-control">
                        <input type="checkbox" data-checkboxes="mygroup"
                               class="custom-control-input"
                               id="checkbox-{{$i}}" name="id[]"
                               value="{{$item->email}}">
                        <label for="checkbox-{{$i}}"
                               class="custom-control-label">&nbsp;</label>
                    </div>
                </td>
                  	<td>{{$i++}}</td>
                    <td>{{$item->email}}</td>
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