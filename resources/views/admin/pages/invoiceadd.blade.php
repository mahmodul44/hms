@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
            <div style="height: 900px;background-color: #bac1dc" class="box round first grid">
      <a href="{{URL::to('invoicelist')}}"><span class="btn btn-dark">All Invoice</span></a>
          <h2 style="text-align: center;">Add Invoice</h2>
               <div class="block ">
                 <form action="{{Route('invoiceinsert')}}" method="post">
                   @csrf
                    <table class="form">
                  <tr>
                    <td>
                      <label>Patient ID</label>
                    </td>
                  <td>
          <select  name="patient_id">
          <option value="">Select patient name</option>
  @foreach($patient_code as $patient)

          <option value="{{$patient->patient_code}}">
            {{$patient->patient_code}} ({{$patient->name}})
          </option>
          @endforeach
        </select>
                  </td>

                </tr>
                <tr>
                  <td>
                  <label>Search Medicine</label>
                </td>
                <td>
                <select id="obj_medicine" name="medicine_id">
            <option>select option</option>
  @foreach($m_list as $medicine)
          <option value="{{$medicine->price}}">
            {{$medicine->name}}
          </option>
          @endforeach
        </select>
                </td>
                </tr>

                  </table>

        <div style="width: 100%;float: left;">
  <table  class="table table-striped">
    <thead>
      <tr class="bg-primary">
        <th width="10%"></th>
    <th width="20%">Medicine Name</th>
    <th width="20%" style="padding-left: 21px">price</th>
    <th width="20%">Quantity</th>

    <th width="20%" style="padding-left: 21px">Sub Total</th>
      </tr>
    </thead>
    <tbody id="medicine_area">

    </tbody>
    <tfoot>


       </tfoot>
      </table>
      <table class="table table-striped">
        <tbody>
        <tr class="bg-info">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <th class="text-right">Total</th>
        <td>
      <input type="text" class="form-control" placeholder="0" id="total_amount" name="total">
    </td>
      </tr>
      <tr>
        <td></td>
        <td></td>

        <td></td>
        <th class="text-right">vat</th>

        <td>
          <div class="input-group">
           <div class="input-group-addon">%</div>
           <input type="text" class="form-control" name="vat" value="0">
         </div>
        </td>
        <td>
      <input type="text" class="form-control tinputs" placeholder="0" id="vat" name="vat">
    </td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td></td>

        <th class="text-right">Discount</th>

        <td>
          <div class="input-group">
           <div class="input-group-addon">%</div>
           <input type="text" class="form-control" name="discount" value="0">
         </div>
        </td>
        <td>
      <input type="text" class="form-control tinputs" placeholder="0" id="discount" name="discount">
    </td>
      </tr>

      <tr class="bg-success">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <th class="text-right">Grand Total</th>

        <th>
           <input type="text" class="form-control tinputs" id="grand_total" name="grand_total" value="0">
        </th>

      </tr>
       <tr class="bg-info">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <th class="text-right">Paid</th>

        <th>
           <input type="text" class="form-control tinputs" id="paid_amount" name="paid" placeholder="0" value="">
        </th>

      </tr>
      <tr class="bg-success">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <th class="text-right">Due</th>

        <th>
           <input type="text" class="form-control" id="due" name="due" value="0">
        </th>

      </tr>
        </tbody>
      </table>
</div>


</div>
<hr>
<div class="form-check-inline">
<label>Status</label>
</div>
<div class="form-check-inline">
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="status" value="1" checked>Active
      </label>
    </div>

<div class="form-check-inline">
<label class="form-check-label" for="radio2">
<input type="radio" class="form-check-input" id="radio2" name="status" value="0">Inactive
</label>
</div>
<div style="float:right" class="">
<input type="submit" name="submit" Value="submit" class="btn btn-success"/>
<input type="submit" name="reset" Value="Reset" class="btn btn-danger"/>
</div>
                  </form>
                </div>
            </div>
        </div>

 <script>
   //for medicine

$( document ).ready(function(){
    $('#obj_medicine').change(function(){
      var medicine_id = $(this).val();
      var id = medicine_id.split(',')[0];
      var price = medicine_id.split(',')[1];
      var name = $(this).find(':selected').text();

      var tr = "<tr>"+

     "<td><input type='hidden' name='medicine_id[]' value='"+id+"'><button type='button' class='remove_medicine btn btn-danger'>X</button></td>"+
     "<td>"+name+" </td>"+
     "<td><input class='form-control price_input price' type='' name='price[]' value='"+price+"'/></td>"+
     "<td><input class='form-control price_input quantity' value='1' placeholder='0' name='quantity[]' type='number'/></td>"+
     "<td><input class='form-control sub_total' type='' name='sub_total[]' value='' disabled/></td>"+
   "</tr>";


   $('#medicine_area').append(tr);
$('.remove_medicine').click(function(){
  $(this).parent().parent().remove();
  calculation();
})
calculation();
$('.price_input').change(function (){
      var unit_price = parseFloat($(this).closest('tr').find('.price').val());
  var qty = parseFloat($(this).closest('tr').find('.quantity').val());
  $(this).closest('tr').find('.sub_total').val(unit_price*qty);
       calculation();
  });

});


function calculation(){
  var total_price = gtotal=paid=due= 0;

  $('#medicine_area tr').each(function (){

  var unit_price = parseFloat($(this).find('.price').val());
  var qty = parseFloat($(this).find('.quantity').val());
  $(this).find('.sub_total').val(unit_price*qty);
       total_price += unit_price*qty;
  });
  $('#total_amount').val(total_price);
  $('#grand_total').val(total_price);
  var paid = parseFloat($('#paid_amount').val())|| 0;
  $('#due').val(gtotal-paid);
  $('.tinputs').change(function(){
   var total = parseFloat($('#total_amount').val())|| 0;

   var vat = parseFloat($('#vat').val())|| 0;
   var discount = parseFloat($('#discount').val())|| 0;
   var paid = parseFloat($('#paid_amount').val())|| 0;

   var gtotal = (total+vat)-discount;
   $('#grand_total').val(gtotal);
   $('#due').val(gtotal-paid);
});
}


});


 </script>
@include ('admin.layouts.footer')
