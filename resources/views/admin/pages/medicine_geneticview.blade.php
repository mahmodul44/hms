@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
            <div style="height: 900px" class="box round first grid">
	 		<h2 style="text-align: center;"> Medicine Genetic Info </h2>
	 		<a href="{{Route('medicine_geneticlist')}}"><button class="btn-dark"> Medicine Genetic List</button></a>
<div class="block copyblock">
	 		
	 			<div class="row">
	 			
	 			<div class="container text-center">
	 				<h5>Category Name: {{$genetic_view->name}}</h5>
	 				<h5>Description: {{$genetic_view->description}}</h5>
	 				<h5>Status: {{$genetic_view->status}}</h5>
	 			</div>
	 		</div>
	 	</div>
      </div>
  </div>

@include ('admin.layouts.footer')