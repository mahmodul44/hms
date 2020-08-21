{{--@include ('admin.layouts.header')--}}
{{--@include ('admin.layouts.sidebar')--}}

<div class="grid_10">
            <div style="height: 900px" class="box round first grid">
	 		<h2 style="text-align: center;"> Birth Info </h2>
                <hr>
{{--                <a href="{{Route('generatePDF',$result->birth_id)}}" type="button" class="float-right bg-info text-white-50 ">Convert Into Pdf</a>--}}
{{--<div class="block copyblock">--}}
                <center>
<div style="width:80%;text-align: center">
	 			<div class="row">
	 			<div style="text-align: center" class="container">
                    <h4 style="float: right;margin-right: 2px">Date: {{$result->date}}</h4>
                    <br><br>
	 				   <h3><span style="color: red;font-weight: bold">Titile:</span> {{$result->title}}</h3>

	 			</div>
	 			<div style="text-align: center" class="container text-center">
                    @php
                        $patient_name = DB::table('patient')
                    ->join('hms_birth', 'patient.patient_code', '=', 'hms_birth.patient_id')->where('hms_birth.birth_id', $result->birth_id)
                    ->select('patient.*')
                    ->get();
                    @endphp
                    @foreach($patient_name as $p_name)
	 				<h4>Patient ID: {{$result->patient_id}}</h4>
                        <h4>Patient Name: {{$p_name->name}}</h4>
                        <h4>Child Name: {{$result->cname}}</h4>
                        <h4>Father Name: {{$result->fname}}</h4>


	 				<h4>Doctor Name: {{$result->doctor_id}}</h4>
                        <h4>{{$result->description}}</h4>

<br>
                        <br>
                        <br>
                              <h4>{{$result->doctor_id}}</h4>
                        <h5>.......................................</h5>
                        <h5>Signature</h5>
                    @endforeach
	 			</div>
	 		</div>
	 	</div>
                </center>
      </div>
  </div>

{{--@include ('admin.layouts.footer')--}}
