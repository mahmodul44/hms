@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')
  <div class="grid_10">
    <div style="height: 920px;background-color: #bac1dc" class="box round first grid">
    <a href="{{URL::to('accountantlist')}}"><span style="border-bottom: 2px solid black" class="btn btn-dark">AccountantList</span></a>
  <a href="{{URL::to('laboratoristlist')}}"><span style="border-bottom: 2px solid black" class="btn btn-dark">Laborotoryist List</span></a>
    <a href="{{URL::to('nurselist')}}"><span style="border-bottom: 2px solid black" class="btn btn-dark">Nurse List</span></a>
    <a href="{{URL::to('pharmacylist')}}"><span style="border-bottom: 2px solid black" class="btn btn-dark">Pharmacy List</span></a>
    <a href="{{URL::to('receptionistlist')}}"><span style="border-bottom: 2px solid black" class="btn btn-dark">Receptionist List</span></a>
    <a href="{{URL::to('case_managerlist')}}"><span style="border-bottom: 2px solid black" class="btn btn-dark">Case Manager List</span></a>
    <hr>
    <h2 style="text-align: center;background-color:white">Add Employee Info</h2>
    @if(Session::has('message'))
     <div data-alert class="alert-box">
     {{Session::get('message')}}
     </div>
     @endif
   <div class="block">

    <form action="{{Route('employeeinsert')}}" method="post" enctype="multipart/form-data">
       @csrf
    <table class="form">
      <tr>
          <td>
              <label>Full Name</label>
          </td>
          <td>
              <input type="text" name="emp_name" class="medium" required="required"/>
          </td>
    <td>
  <label>User Role</label>
      </td>
      <td>
      <select name="user_role">
          <option>Select Option</option>
          <option value="1">Accountant</option>
            <option value="2">Labratorist</option>
            <option value="3">Nurse</option>
          <option value="4">Pharmacist</option>
          <option value="5">Receptionist</option>
          <option value="6">Case Manager</option>
        </select>
        </td>


        </tr>
        <tr>
        <td>
        <label>Email</label>
        </td>
        <td>
          <input type="text" name="emp_email"  class="medium"/>
        </td>

          <!-- <td>
        <label>Password</label>
      </td>
    <td>
    <input type="password" name="emp_password"  class="" required="required"/>
        </td> -->

          <td>
        <label>Phone Number</label>
      </td>
    <td>
    <input type="text" name="emp_mobile"  class="" required="required"/>
        </td>
      </tr>
      <tr>
      <td>
      <label>Upload Image</label>
    </td>
      <td>
  <input type="file" name="emp_image" required="required"/>
        </td>

            <td>
                <label>Gender</label>
            </td>
            <td>
                <select class="" name="emp_gender">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Others">Others</option>
                </select>
            </td>
       </tr>
       <tr>
                <td style="vertical-align: top; padding-top: 9px;">
              <label>Address</label>
                </td>
                <td>
                  <textarea class="tinymce" style="width:250px;height:50px" name="emp_address" required="required" ></textarea>
                </td>

                  <td>
                      <label>Status</label>
                  </td>
                  <td>
                      <select class="" name="emp_status">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>

        </select>
      </td>
    </tr>
		  <tr>
    <td><input type="submit" class="btn btn-primary" name="submit" Value="Save" />
<input type="submit" class="btn btn-danger" name="reset" Value="Reset"/>
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>


@include ('admin.layouts.footer')
