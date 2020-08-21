@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')
    <div class="grid_10">
    <div style="height: 800px" class="box round first grid">
     <h2><a href="{{url::to('documentlist')}}"><span class="btn btn-dark">All Document (Indoor)</span></a>
    <h2 style="text-align: center;">Add Document(Indoor)</h2>
     <div class="block ">
    	<form action="{{Route('documentinsert')}}" method="post" enctype="multipart/form-data">
        @csrf
    <table class="form">
    <tr>
      <td>
      <label>Patient ID</label>
     </td>
     <td>
    <select name="patient_code">
      <option>select patient</option>
      @foreach($patient_code as $code)
    <option value="{{$code->patient_code}}">{{$code->name}} ({{$code->patient_code}})</option>
    @endforeach
    </select>
    </td>
    
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
    <input type="file" name="document" />
  </td>
 
  <td>
  <label>Today Date</label>
  </td>
  <td>
  <input type="date" name="date">
  </td>
  </tr>
  <tr>
    <td>
    <label> Short Note </label>
    </td>
  <td>
  <textarea style="width: 100%;height: 60px" name="snote" placeholder="short note by document" class="tinymac" required="required" class="medium"></textarea>
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
