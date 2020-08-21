@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')
<div class="grid_10">
<div class="box round first grid">
<h2>Update Doctor Info</h2>
<div class="block copyblock">
<form action="{{Route('documentupdate')}}/{{ $document_edit->id}}" method="post" name="id" enctype="multipart/form-data">
@csrf
<table class="form">
<tr>
<td>
<label>Patient ID</label>
</td>
  <td>
 
    <input type="text" name="patient_code" value="{{ $document_edit->patient_code}}">
</td>
</tr>
<tr>
<td>
<label>Doctor</label>
</td>
  <td>
    <!-- <input type="text" name="doctor" value="{{$document_edit->doctor}}"> -->
   
    
<select name="doctor">
  <option value="">select doctor</option>
  @foreach($doctor as $dr)
  <option {{ $document_edit->doctor==$dr->dname?'selected':''}} value="{{$dr->dname}}">{{$dr->dname}}</option>
  @endforeach
</select>
</td>
</tr>
<tr>
  <td>
  <label>Short Note</label>
</td>
<td>
<input type="text" name="snote" value="{{ $document_edit->snote}}">
  </td>
  </tr>
<tr>
<td>
<label>Document</label>
</td>

         <td>
    <img src="../images/document/{{$document_edit->document}}" alt="IMG" style="width:100px;height:50px;">
   
    <input type="file" name="document">
    </td>

</tr>
<tr>
<td>
<label>Date</label>
  </td>
  <td>
  <input type="text" name="date" value="{{ $document_edit->date}}"  class="medium"/>
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
<!-- <script>
        $("doctor").val({{$document_edit->doctor}});
        
        </script> -->
@include ('admin.layouts.footer')
