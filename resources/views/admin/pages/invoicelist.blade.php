@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')
        <div class="grid_10">
            <div style="height: 800px;background-color: #bac1dc" class="box round first grid">
                @if(Session::get('user_role') !== 'patient')
	             <a href="{{URL::to('invoiceadd')}}"><span class="btn btn-dark"> Add Invoic</span></a>

                <h2 style="text-align: center;">Invoice List</h2>
                @endif
                <div class="block">

                  <table class="data display datatable" id="example">

                      <thead>
            @if(Session::has('message'))
  <div data-alert class="alert-box">
       {{Session::get('message')}}
  </div>
  @endif
						<tr>
							<th>SL.NO</th>
              <th>Patient ID</th>
              <th>Patient Name</th>
              <th>Total</th>
              <th>Vat</th>
              <th>Discount</th>
              <th>Grand Total</th>
              <th>Paid</th>
              <th>Due</th>
			  <th>Action</th>
						</tr>
					</thead>
					<tbody>

           @php $i=0; @endphp
            @foreach ($invoicelist as $invoice)
              @php $i++ @endphp
			<tr class="odd gradeX">
         @php
                $patient_name = DB::table('patient')
            ->join('m_invoice', 'patient.patient_code', '=', 'm_invoice.patient_id')->where('m_invoice.patient_id', $invoice->patient_id)
            ->select('patient.*')
            ->get();
            @endphp
            @foreach($patient_name as $p_name)

			<td>{{ $i}}</td>
              <td>{{$invoice->patient_id}}</td>
              <td>{{$p_name->name}}</td>
              @endforeach
              <td>{{$invoice->total}}</td>
			  <td>{{$invoice->vat}}</td>
			  <td>{{$invoice->discount}}</td>
			  <td>{{$invoice->grand_total}}</td>
			  <td>{{$invoice->paid}}</td>
			  <td>{{$invoice->due}}</td>
	<td>

        <a class="btn btn-xs btn-success" href="{{Route('invoiceview')}}/{{$invoice->id}}"><i class="fa fa-eye"></i></a>
        @if(Session::get('user_role') !== 'patient')
        <a href="{{Route('invoiceedit')}}/{{$invoice->id}}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
            <a class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delte this row !')" href="{{Route('invoicedelete')}}/{{ $invoice->id}}"><i class="fa fa-trash"></i></a>
            @endif
            </td>
						</tr>
@endforeach
					</tbody>
				</table>
               </div>
            </div>
        </div>
<script type="text/javascript">
	$(document).ready(function () {
	    setupLeftMenu();
	    $('.datatable').dataTable();
	    setSidebarHeight();
	});
</script>

@include ('admin.layouts.footer')
