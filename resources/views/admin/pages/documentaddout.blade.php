@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')
<div class="grid_10">
<div style="height: 800px" class="box round first grid">
  <a href="{{URL::to('documentlistout')}}"><span class="btn btn-dark">All Document(Outdoor)</span></a>
  <h2 style="text-align: center;">Add Document(outdoor)</h2>
   <div class="block copyblock">
  	<form action="{{Route('documentinsertout')}}" method="post" enctype="multipart/form-data">
  @csrf
  <table class="form">
    <tr>
      <td>
        <label>Patient ID</label>
      </td>
      <td>
       <select name="patient_code">
      <option>select outdoor patient</option>
      @foreach($patient_code as $code)
    <option value="{{$code->patient_code}}">{{$code->name}} ({{$code->patient_code}})</option>
    @endforeach
    </select>
      </td>
  </tr>
  <tr>
  	<td>
  		<label>Doctor</label>
  	</td>
  	<td>
  	<select name="doctor" class="form-control">
     <option>select Doctor</option>
     @foreach($dname as $name)
     <option value="{{$name->dname}}">
            {{$name->dname}}
          </option>
          @endforeach
     </select>
  </td>
  </tr>


  <tr>
  <td>
  <label>Upload Document</label>
    </td>
    <td>
    <input type="file" name="document" required="required"/>
    </td>
  </tr>
  <tr>
  <td>
      <label>Today Date</label>
    </td>
    <td>
  <input type="date" name="date" required="required">
    </td>
  </tr>
  <tr>
  <td>
    <label> Short Note </label>
  </td>
  <td>
  <textarea type="text" name="snote" placeholder="short note by document" class="" required="required"></textarea>
  </td>
  </tr>
  <tr>
  <td>
      <input type="submit" name="submit" Value="Save" class="btn btn-primary"/>
    </td>
    </tr>
		</table>
	</form>
</div>
</div>
  </div>
@include ('admin.layouts.footer')
