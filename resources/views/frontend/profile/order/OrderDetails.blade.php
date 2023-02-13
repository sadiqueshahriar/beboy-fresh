<style>
  
@media (min-width: 576px){
.modal-dialog {
    max-width: 65rem !important;
}

</style>

<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Your Order Details</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">

      <table class="table table-striped fz-small">
        <thead>
        <tr>
          <th>Product Serial #</th>
          <th>Product</th>
          <th class="text-end">Unit Price</th>
          <th class="text-end">Qty</th>
          <!-- <th class="text-nowrap">Your Choise</th> -->
          <th class="text-end">Subtotal</th>
        </tr>
        </thead>
        <tbody>
        @foreach($order_details as $details)
        <tr>
          <td>{{$details->product_id ?? ''}}</td>

          <td>{{$details->product->name ?? ''}}</td>

          <td class="text-end">{{$details->product_price}}</td>
          <td class="text-end">{{$details->qty}}</td>
          <td class="text-end">৳ {{$details->qty_total_amount}}</td>
          <td></td>
        </tr>
        @endforeach
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td class="text-nowrap">Total Qty: {{$order->total_qty}}</td>
          <td class="text-nowrap">Total : {{$order->total_cost}}</td>

        </tr>
        </tbody>
      </table>



  </div>

</div>