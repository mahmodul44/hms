@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
            <div style="height: 900px" class="box round first grid">

          <h2 style="text-align: center;"> Category Info </h2>
               <div class="block copyblock">
   <form action="{{Route('bedassignupdate')}}/{{$bed_assignedit->id}}" method="post">
                @csrf
                  <table class="form">
                    <tr>
                      <td>
                        <label>Patient ID</label>
                      </td>
                    <td>
                 <select  name="patient_id">
          <option value="">Select patient name</option>
  @foreach($patient_id as $patient)
          
          <option {{$bed_assignedit->patient_id==$patient->patient_code?'selected':''}} value="{{$patient->patient_code}}">
            {{$patient->patient_code}} ({{$patient->name}})
          </option>
          @endforeach
        </select>
       
                      </td>
                    </tr>
                      
                      <tr>
                        <td>
                          <label>Assign Date</label>
                        </td>
                        <td>
                          <input type="date" name="assign_date" value="{{$bed_assignedit->assign_date}}">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>Discharge Date</label>
                        </td>
                        <td>
                          <input type="date" name="discharge_date" value="{{$bed_assignedit->discharge_date}}">
                        </td>
                      </tr>
              <tr>
                <td>
                    <label>Description</label>
                </td>
                    <td>
                        <input type="text" name="description" value="{{$bed_assignedit->description}}" class="medium"/>
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

                    <div>
                    <input type="submit" name="submit" Value="Update" class="btn btn-success"/>
                   </div>
                
                    
                    </form>
                </div>
            </div>
        </div>
@include ('admin.layouts.footer')
