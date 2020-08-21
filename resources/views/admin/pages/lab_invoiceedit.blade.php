@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
    <div style="height: 900px" class="box round first grid">
        <a href="{{URL::to('lab_invoicelist')}}"><span class="btn btn-dark">All Invoice</span></a>
        <h2 style="text-align: center;">Update Invoice</h2>
        <div class="block ">
            <form action="{{Route('lab_invoiceupdate')}}/{{$patient_info->id}}" method="post">
                @csrf
                <table class="form">
                    <tr>
                        <td>
                            <label>Patient ID</label>
                        </td>
                        <td>
                            <input type="text" name="patient_id" value="{{$patient_info->patient_id}}" readonly="readonly">
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <label>Search Test Name</label>
                        </td>
                       <td>
                            <select id="obj_medicine" name="medicine_id">
                                <option>Edit Test Name</option>
                                @foreach($test_list as $test)
                                    <option value="{{$test->test_name}}">{{$test->test_name}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>

                </table>

                <div style="width: 100%;float: left;">
                    <table  class="table table-striped">
                        <thead>
                        <tr class="bg-dark text-white" >
                            <th width="10%"></th>
                            <th width="20%">Test Name</th>
                            <th width="20%" style="padding-left: 21px">Test rate</th>
                            <th width="20%">Quantity</th>

                            <th width="20%" style="padding-left: 21px">Sub Total</th>
                        </tr>
                        </thead>
                        <tbody id="medicine_area">
                        @if(!empty($test_info))
                            @foreach($test_info as $i=>$test)
                             <tr>
                               <td><input type='hidden' name='test_id[]' value='"+id+"'><button type='button' class='remove_medicine btn btn-danger'>X</button></td>
                <td> </td>
                <td><input class='form-control price_input price' type='' name='test_rate[]' value="{{$test->test_rate}}"/></td>
                <td><input class='form-control price_input quantity' value="{{$test->quantity}}" placeholder='0' name='quantity[]' type='number'/></td>
                <td><input class='form-control sub_total' type='' name='sub_total[]' value="{{$test->total_price}}" disabled/></td>
                </tr>
                            @endforeach
                            @endif
                        </tbody>
                        <tfoot>


                        </tfoot>
                    </table>
                    <table class="table table-striped">
                        <tbody>
                        <tr class="bg-light">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <th class="text-right">Total</th>
                            <td>
                                <input type="text" class="form-control" placeholder="0" id="total_amount" name="total" value="{{$patient_info->total}}">
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
                                <input type="text" class="form-control tinputs" placeholder="0" id="vat" name="vat" value="{{$patient_info->vat}}">
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
                                <input type="text" class="form-control tinputs" placeholder="0" id="discount" name="discount" value="{{$patient_info->discount}}">
                            </td>
                        </tr>

                        <tr class="bg-light">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <th class="text-right">Grand Total</th>

                            <th>
                                <input type="text" class="form-control tinputs" id="grand_total" name="grand_total" value="{{$patient_info->grand_total}}">
                            </th>

                        </tr>
                        <tr class="bg-white">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <th class="text-right">Paid</th>

                            <th>
                                <input type="text" class="form-control tinputs" id="paid_amount" name="paid" placeholder="0" value="{{$patient_info->paid}}">
                            </th>

                        </tr>
                        <tr class="bg-light">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <th class="text-right text-danger">Due</th>

                            <th>
                                <input type="text" class="form-control" id="due" name="due" value="{{$patient_info->due}}">
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
            <input type="submit" name="submit" Value="Update" class="btn btn-success"/>
            <input type="reset" name="reset" Value="Reset" class="btn btn-success"/>
        </div>
        </form>
    </div>
</div>
</div>

<script>
    //for medicine

    $( document ).ready(function(){
        $('#obj_medicine').change(function(){
            var test_id = $(this).val();
            var id = test_id.split(',')[0];
            var test_rate = test_id.split(',')[1];
            var name = $(this).find(':selected').text();

            var tr = "<tr>"+

                "<td><input type='hidden' name='test_id[]' value='"+id+"'><button type='button' class='remove_medicine btn btn-danger'>X</button></td>"+
                "<td>"+name+" </td>"+
                "<td><input class='form-control price_input price' type='' name='test_rate[]' value='"+test_rate+"'/></td>"+
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
                var unit_price = parseFloat($(this).closest('tr').find('.test_rate').val());
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
