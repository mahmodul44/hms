@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Medicine List</h2>
        <a href="{{Route('invoicelist')}}"><span class="btn btn-dark">Invoice List</span> </a>
      
        <a href="#"><span class="btn btn-dark"> print</span></a>
        <div class="block">
          
             <table class="form">
                <tbody style="background-color: #d4bd34">
                   
                 <tr>
                 <td colspan="2">
                <strong style="padding-left:20px">Patient ID:    </strong>
                 <strong style="margin-left: 20px">{{$patient_info->patient_id}}</strong>
                 </td>
                 </tr>
                
             </tbody>
    <tr>
    <td width="50%">
        <ul>
        <li style="font-weight: bold;">{{ Auth::user()->name }}</li>
        
    </ul>
    </td>
    <td width="50%" style="float: right;">
        <ul>
            <li>Demo hospital</li>
            <li>#0 mirpur,dhaka</li>
            <li style="font-weight: bold;font-style: italic;">{{ Auth::user()->email }}</li>
            <li style="font-weight: bold;">ID:{{ Auth::user()->id }}</li>
        </ul>
    </td>
</tr>
     <tbody>
                 <tr class="bg-primary" >
                 <td colspan="2">
                 <strong style="padding-left:10px">Patient name:</strong>
                 <strong>{{$patient_info->name}}</strong>
                 <strong style="margin-left: 70px">Date of birth:  </strong>
                 <strong>{{$patient_info->dob}}</strong>
                  </td>
                 </tr>
             </tbody>
</table>
             
 <div class="row">    
 <div class="col-sm-12"> 
 <!-- <div style="width: 35%;float: left;">
         


</div> -->

<div style="width:100%;float:right;padding-left: 10px">
 
                 
<table class="table table-striped">
<thead>
<tr class="bg-info header-2">
    <th>#</th>
    <th></th>
    <th>Medicine Name</th>
    <th></th>
    <th>Price</th>
</tr>
    </thead>
    <tbody>
              @if(!empty($invoice_view))
              @foreach($invoice_view as $invoice)
               @foreach($medicine_info as $i=>$medicine)
                <tr class="odd gradeX">
                  
                 
                    <th>{{($i+1)}}</th>
                    <th>{{$medicine->name}}</th>
                    <th></th>
                    <th></th>
                    <td>{{$medicine->price}}</td>
                   
                </tr>
                 @endforeach
                <tr>
                  <td colspan="3"></td>
                    <th>Total</th>                 
                  <th class="text-center">{{$invoice->total}}</th>
                </tr> 
                <tr>
                  <td colspan="3"></td>
                    <th>Vat</th>
                  <th class="text-center">{{$invoice->vat}}</th>
                </tr> 
                <tr>
                  <td colspan="3"></td>
                    <th>Discount</th>
                  <th class="text-center">{{$invoice->discount}}</th>
                </tr>
                <tr>
                  <td colspan="3"></td>
                    <th>Grand Total</th>
                  <th class="text-center">{{$invoice->grand_total}}</th>
                </tr> 
                <tr>
                  <td colspan="3"></td>
                    <th>Due</th>
                  <th class="text-center">{{$invoice->due}}</th>
                </tr>
                <tr>
                  <td colspan="3"></td>
                    <th>Paid</th>
                  <th class="text-center">{{$invoice->paid}}</th>
                </tr>
              @endforeach
              @endif
    </tbody>
    </table>

</div>
</div>
</div>
<br><br>
<table>
    <tbody>
      <tr>
    <td width="70%"></td>
    
    <td  style="float: right;">---------------------------------------</td>
    <td  style="float: right;">Signature</td>
</tr>  
    </tbody>
</table>

</div>
</div>
</div>


@include ('admin.layouts.footer')
