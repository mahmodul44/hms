@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')
        <div class="grid_10">
            <div style="height: 800px;background-color: #bac1dc" class="box round first grid">
                @if(Session::get('user_role') !== 'patient')
	             <a href="{{URL::to('lab_invoiceadd')}}"><span class="btn btn-dark"> Add Test Invoic</span></a>
                <h2 style="text-align: center;">Test Invoice List</h2>
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
            @foreach ($invoicelist as $lab_invoice)
              @php $i++ @endphp
			<tr class="odd gradeX">
         @php
                $patient_name = DB::table('patient')
            ->join('test_lab_invoice', 'patient.patient_code', '=', 'test_lab_invoice.patient_id')->where('test_lab_invoice.patient_id', $lab_invoice->patient_id)->select('patient.*')
            ->get();
            @endphp

			<td>{{ $i}}</td>
              <td>{{$lab_invoice->patient_id}}</td>

              <td>  @foreach($patient_name as $patient)
                  {{$patient->name}}
                  @endforeach
              </td>


                <td>{{$lab_invoice->total}}</td>
			  <td>{{$lab_invoice->vat}}</td>
			  <td>{{$lab_invoice->discount}}</td>
			  <td>{{$lab_invoice->grand_total}}</td>
			  <td>{{$lab_invoice->paid}}</td>
			  <td>{{$lab_invoice->due}}</td>

	<td>
        <a class="btn btn-xs btn-success" href="{{Route('lab_invoiceview')}}/{{$lab_invoice->id}}"><i class="fa fa-eye"></i></a>
        @if(Session::get('user_role') !== 'patient')
        <a href="{{Route('lab_invoiceedit')}}/{{$lab_invoice->id}}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
        <a class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delete this row !')" href="{{Route('lab_invoicedelete')}}/{{ $lab_invoice->id}}"><i class="fa fa-trash"></i></a>
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
