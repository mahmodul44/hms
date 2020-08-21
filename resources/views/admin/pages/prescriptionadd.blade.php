@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')
    <div class="grid_10">
    <div style="height:900px;background-color: #bac1dc" class="box round first grid">

     <a href="{{URL::to('prescriptionlist')}}"><span class="btn btn-dark">All Prescription</span></a>

    <h2 style="text-align: center;">Add Prescription</h2>

   <span id="patient_area" style="background-color: blue;color: white;">name here</span>

    <div class="block">

     <form action="{{Route('prescriptioninsert')}}" method="post">
       @csrf
   <table class="form">


<tr>
  <td>
     <label>Patient ID</label>
  </td>
  <td>
   <select id="obj_patient" name="patient_id">
          <option>Select patient name</option>
  @foreach($patient_code as $patient_id)

          <option value="{{$patient_id->patient_code}}">
            {{$patient_id->patient_code}} ( {{$patient_id->name}} )
          </option>

          @endforeach
        </select>
   </td>

     <td>
        <label>Observation</label>
     </td>
     <td>
       <input type="text" name="pr_observation" placeholder="Observation" required="required">
      </td>
      </tr>
      <tr>
        <td>
           <label>Test Name</label>
        </td>
      <td>
          <select id="obj_test" name="test_name">
          <option>Select test name</option>
  @foreach($t_name as $name)

          <option value="{{$name->id}}">
            {{$name->test_name}}
          </option>
          @endforeach
        </select>
      </td>


           <td>
              <label>Medicine Name</label>
           </td>
           <td>
          <select id="obj_medicine" name="medicine_name">
            <option>select option</option>
  @foreach($m_name as $name)
          <option value="{{$name->id}}">
            {{$name->name}}
          </option>
          @endforeach
        </select>
      </td>
      </tr>


 </table>



<div style="width: 100%">
<div style="width: 35%;float: left;border-right: 1px solid #435">
  <table id="test_area" class="table table-striped">
    <thead>
      <tr class="primary">
        <th width="10%"></th>
        <th width="20%">Test Name</th>
      </tr>
    </thead>
    <tbody>

    </tbody>

  </table>
</div>

<div style="width: 65%;float: left;border-left: 1px solid #435">
  <table id="medicine_area" class="table table-striped">
    <thead>
      <tr class="primary">
    <th width="20%" style="text-align: center;" colspan="5">Medicine Name</th>
      </tr>
    </thead>
    <tbody>

    </tbody>
    <tfoot>

    </tfoot>
  </table>
</div>

  </div>
 <hr>
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

<script>
  //for patient
  /*
$( document ).ready(function(){
    $('#obj_patient').change(function(){
      var id = $(this).val();
      var name = $(this).find(':selected').text();
      var tr = "<tr>"+


  "<td>"+name+"</td>"+
      "</tr>";
   $('#patient_area').append(name);

});
    $('.remove_patient').click(function(){
  $(this).parent().parent().remove();
})
});
*/
$(document).ready(function(){
$("#obj_patient").change(function () {
              var name = $(this).val();
              $('#patient_area').html(name);
});
});
//for test

$( document ).ready(function(){
    $('#obj_test').change(function(){
      var id = $(this).val();
      var test_name = $(this).find(':selected').text();
      var tr = "<tr>"+
  "<td><button type='button' class='remove_test btn btn-danger'>X</button></td>"+
  "<td>"+test_name+" <input class='form-control' type='hidden'  name='test_id[]' value='"+id+"'/></td>"+
      "</tr>";
   $('#test_area').append(tr);
 $('.remove_test').click(function(){
  $(this).parent().parent().remove();
})
});

});

//for medicine

$( document ).ready(function(){
    $('#obj_medicine').change(function(){
      var id = $(this).val();
      var name = $(this).find(':selected').text();

      var tr = "<tr>"+

     "<td><button type='button' class='remove_medicine btn btn-danger'>X</button></td>"+
     "<td>"+name+" <input class='form-control' type='hidden'  name='medicine_id[]' value='"+id+"'/></td>"+
     "<td><input class='form-control' placeholder='douse' name='douse[]'/></td>"+
     "<td><input class='form-control' placeholder='day' name='douse_day[]'/></td>"+
     "<td><input class='form-control' placeholder='instruction' name='instruction[]'/></td>"+
   "</tr>";


   $('#medicine_area').append(tr);
$('.remove_medicine').click(function(){
  $(this).parent().parent().remove();
})
});

});


</script>
@include ('admin.layouts.footer')
