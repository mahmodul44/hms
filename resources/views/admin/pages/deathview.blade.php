@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
            <div style="height: 900px" class="box round first grid">
	 		<h2 style="text-align: center;"> Death Info </h2>
<div class="block copyblock">
	 		
	 			<div class="row">
	 			<div class="container">
	 				<h3>{{$result->title}}</h3>
	 				<p>{{$result->description}}</p>
	 			</div>
	 			<div class="container text-center">
	 				<h5>Patient ID: {{$result->patient_id}}</h5>
	 				<h5>Doctor Name: {{$result->doctor_id}}</h5>
	 				<h5>Date: {{$result->date}}</h5>
	 			</div>
	 		</div>
	 	</div>
      </div>
  </div>

@include ('admin.layouts.footer')