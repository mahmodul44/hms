@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')
  <div class="grid_10">
  <div style="height:900px;background-color: #bac1dc" class="box round first grid">
  <h2 style="text-align: center;background-color:white">Add Bed Info</h2>
  <a href="{{URL::to('bedlist')}}"><span class="btn btn-dark">All Bed</span></a>
    @if(Session::has('message'))
     <div data-alert class="alert-box">
     {{Session::get('message')}}
     </div>
     @endif
   <div class="block copyblock">

    <form action="{{Route('bedinsert')}}" method="post" enctype="multipart/form-data">
       @csrf
    <table class="form">

        <tr>
        <td>
        <label>Bed Type</label>
    </td>
      <td>
    <input type="text" name="bed_type" class="" required="required"/>
      </td>
        </tr>

        <tr>
        <td style="vertical-align: top; padding-top: 9px;">
      <label>Description</label>
        </td>
        <td>
          <textarea class="tinymce" style="width:250px;height:50px" name="description" required="required" ></textarea>
        </td>
      </tr>
<tr>
  <td>
    <label> Bed Capacity</label>
  </td>
  <td>
    <input type="number" name="limit">
  </td>
</tr>
<tr>
  <td>
    <label> Charge</label>
  </td>
  <td>
    <input type="text" name="charge">
  </td>
</tr>

   </table>
  <div class="form-check-inline">
 <label>Status</label>
 </div>
 <div class="form-check-inline">
   <label class="form-check-label" for="radio1">
     <input type="radio" class="form-check-input" id="radio1" name="status" value="1" checked>Complete
   </label>
 </div>

 <div class="form-check-inline">
 <label class="form-check-label" for="radio2">
 <input type="radio" class="form-check-input" id="radio2" name="status" value="0">Incompelete
 </label>
 </div>
 <div style="float:right" class="">
 <input type="submit" name="submit" Value="submit" class="btn btn-success"/>
 <input type="reset" name="reset" Value="Reset" class="btn btn-danger"/>
 </div>
   </form>
   </div>
  </div>
 </div>


@include ('admin.layouts.footer')
