@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')
    <div class="grid_10">
    <div style="height: 800px;background-color: #9ab6cc" class="box round first grid">
     <h2><a href="{{url::to('sliderlist')}}"><span class="btn btn-dark">Slider List</span></a>
    <h2 style="text-align: center;">Add Slider</h2>
     <div class="block copyblock">
    	<form action="{{Route('sliderinsert')}}" method="post" enctype="multipart/form-data">
        @csrf
    <table class="form">
    <tr>
      <td>
      <label>Title</label>
     </td>
     <td>
   <input type="text" name="title" class="medium" required="required">
    </td>
    </tr>
   <tr>
     <td>
       <label>Sub Title</label>
     </td>
     <td>
       <input type="text" class="medium" name="sub_title">
     </td>
   </tr>

  <tr>
  <td>
    <label>Upload Picture</label>
  </td>
  <td>
    <input class="medium" type="file" name="image" />
  </td>
  </tr>
  <tr>
  <td>
  <label>Slide Position</label>
  </td>
  <td>
  <input type="number" class="medium" name="slide_position">
  </td>
  </tr>
  <tr>
    <td>
    <label>Description</label>
    </td>
  <td>
  <textarea  name="description" style="width: 370px" placeholder="description" class="tinymac" required="required"></textarea>
  </td>
  </tr>
  <tr>
    <td>
    <input type="submit" name="submit" Value="Save" class="btn btn-info"/>
  </td>
    </tr>
	</table>
	</form>
</div>
       </div>
      </div>
@include ('admin.layouts.footer')
