@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')
        <div class="grid_10">
            <div style="height: 800px;background-color: #9ab6cc" class="box round first grid">
	             <a href="{{URL::to('slideradd')}}"><span class="btn btn-dark"> Add Slide</span></a>
                <h2 style="text-align: center;">Slider List</h2>
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
              <th>Image</th>
              <th>Title</th>
              <th>Sub Title</th>
              <th>Position</th>
							<th>Description</th>
              <th>Action</th>
						</tr>
					</thead>
					<tbody>
            @php $i=0; @endphp
            @foreach ($slider_list as $slide)
              @php $i++ @endphp
						<tr class="odd gradeX">
							<td>{{ $i}}</td>
              <td>
              <img src="images/slider/{{$slide->image}}" alt="IMG" style="width:100px;height:100px;">
                </td>
              <td>{{$slide->title}}</td>
              <td>{{$slide->sub_title}}</td>
							<td>{{$slide->slide_position}}</td>
              <td>{{$slide->description}}</td>

				<td><a class="btn btn-xs btn-primary" href="{{Route('slideredit')}}/{{ $slide->id }}" ><i class="fa fa-edit"></i></a> <a class="btn btn-xs btn-primary" onclick="return confirm('Are you sure to delte this row !')" href="{{Route('sliderdelete')}}/{{ $slide->id}}"><i class="fa fa-trash"></i></a></td>
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
