@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')


    <div class="grid_10">
    <div style="height: 920px;background-color: #bac1dc" class="box round first grid">
    <a href="{{Route('birthlist')}}"><span style="border-bottom: 2px solid black" class="btn btn-dark">Birth Report</span></a>
    <h2 style="text-align: center;background-color:white">Add Birth Info</h2>
     <div class="block copyblock">
      <form action="{{Route('birthinsert')}}" method="post" enctype="multipart/form-data">
               @csrf
        <table class="form">
     @if(Session::has('message'))
     <div data-alert class="alert-box">
     {{Session::get('message')}}
     </div>
     @endif
         <tr>
             <td>
                 <label>Child Name</label>
             </td>
             <td>
                 <input type="text" name="cname"  class="medium"/>
             </td>
         </tr>
         <tr>
             <td>
                 <label>Father Name</label>
             </td>
             <td>
                 <input type="text" name="fname"  class="medium"/>
             </td>
         </tr>
         <tr>
             <td>
                 <label>Title</label>
             </td>
             <td>
                 <input type="text" name="title"  class="medium"/>
             </td>
         </tr>
         <tr>
             <td style="vertical-align: top; padding-top: 9px;">
                 <label>Description</label>
             </td>
             <td>
                 <textarea class="tinymce" style="width:250px;height:50px" name="description" required="required"></textarea>
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
            <label>Patient Id</label>
        </td>
        <td>
        <select name="patient_id">
          <option>Select patient name</option>
  @foreach($patient_list as $patient)

          <option value="{{$patient->patient_code}}">
            {{$patient->patient_code}} ({{$patient->name}})
          </option>
          @endforeach
        </select>
         </td>
          </tr>




         <tr>
            <td>
              <label>Doctor Name</label>
        </td>
         <td>
             <select  name="doctor_id" id="" class="form-control" required="required">
     <option>select Doctor</option>

      @foreach($dr_list as $doctor)

          <option value="{{$doctor->dname}}">
            {{$doctor->dname}}
          </option>
          @endforeach
     </select>
            </td>
        </tr>
        <tr>
            <td>
              <label>Status</label>
        </td>
         <td>
            <!-- <div class="custom-control custom-radio custom-control">
  <input type="radio" id="customRadioInline1" name="status" class="custom-control-input" value="0">
  <label class="custom-control-label" for="customRadioInline1">Active</label>
</div>
<div class="custom-control custom-radio custom-control">
  <input type="radio" id="customRadioInline2" name="status" class="custom-control-input" value="1">
  <label class="custom-control-label" for="customRadioInline2">Inactive</label>
</div> -->
             <select name="status">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>

                </select>
            </td>
        </tr>

			 <tr>
                 <td>
                 <input type="submit" class="btn btn-primary" name="submit" Value="Save" />
                  <input type="submit" class="btn btn-xs btn-danger" name="reset" Value="Reset" />
             </td>
                 </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>


@include ('admin.layouts.footer')
