@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')
    <div class="grid_10">
    <div style="height: 800px" class="box round first grid">
     <h2><a href="{{url::to('sliderlist')}}"><span class="btn btn-dark">Slider List</span></a>
    <h2 style="text-align: center;">Add Slider</h2>
     <div class="block copyblock">
    	<form action="{{Route('sliderupdate')}}/{{$slider_edit->id}}" method="post" enctype="multipart/form-data">
        @csrf
    <table class="form">
    <tr>
      <td>
      <label>Title</label>
     </td>
     <td>
   <input type="text" name="title" class="medium" value="{{$slider_edit->title}}">
    </td>
    </tr>
   <tr>
     <td>
       <label>Sub Title</label>
     </td>
     <td>
       <input type="text" class="medium" name="sub_title" value="{{$slider_edit->sub_title}}">
     </td>
   </tr>
    
  <tr>
  <td>
    <label>Upload Picture</label>
  </td>
  <td>
    <img src="../images/slider/{{$slider_edit->image}}" alt="IMG" style="width:100px;height:50px;">
    <input type="file" name="image" />
  </td>
  </tr>
  <tr>
  <td>
  <label>Slide Position</label>
  </td>
  <td>
  <input type="number" class="medium" name="slide_position" value="{{$slider_edit->slide_position}}">
  </td>
  </tr>
  <tr>
    <td>
    <label>Description</label>
    </td>
  <td>
  <input  name="description" value="{{$slider_edit->description}}" class="medium" />
  </td>
  </tr>
  <tr>
    <td>
    <input type="submit" name="submit" Value="Update" class="btn btn-info"/>
  </td>
    </tr>
	</table>
	</form>
</div>
       </div>
      </div>
@include ('admin.layouts.footer')
