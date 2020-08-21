@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

    <div class="grid_10">
  <div class="box round first grid">
    <h2>Update Accountant Info</h2>
   <div class="block copyblock">
  <form action="{{Route('receptionistupdate')}}/{{ $receptionist->id}}" method="post" enctype="multipart/form-data" name="id" >
      @csrf
    <table class="form">
      <tr>
   <td>
   <label>Accountant Image</label>
 </td>
 <td>
   <img src="../images/employee/{{$receptionist->emp_image}}" alt="employee Img" style="width:150px;height:120px;">
   <input type="file" name="emp_image"  />
</td>
 </tr>
 <tr>
 <td>
 <label>User Role</label>
 </td>
 <td>
 <input type="text" name="user_role" value="{{ $receptionist->user_role}}"  class="medium"/>
</td>
 </tr>
 <tr>
 <td>
 <label>Full Name</label>
</td>
 <td>
 <input type="text" name="emp_name" value="{{ $receptionist->emp_name}}"  class="medium"/>
 </td>
 </tr>
 <tr>
 <td>
 <label>Email</label>
</td>
<td>
<input type="text" name="emp_email" value="{{ $receptionist->emp_email}}"  class="medium"/>
 </td>
</tr>
 
<tr>
<td>
 <label>Phonme Number</label>
 </td>
 <td>
  <input type="text" name="emp_mobile" value="{{ $receptionist->emp_mobile}}" class="medium"> </td>
  </tr>
<tr>
<td>
 <label>Gender</label>
 </td>
 <td>
 <input type="text" name="emp_gender" value="{{ $receptionist->emp_gender}}" class="medium"/>
 </td>
</tr>
 <tr>
 <td style="vertical-align: top; padding-top: 9px;">
 <label>Address</label>
 </td>
 <td>
<input type="text" name="emp_address" value="{{ $receptionist->emp_address}}" class="medium"/>
 </td>
 </tr>
<tr>
 <td>
<label>Status</label>
 </td>
 <td>
     <input type="text" name="emp_status" value="{{ $receptionist->emp_status}}" class="medium">
 </td>
 </tr>
          <tr>
              <td>
                  <input type="submit" name="submit" class="btn btn-dark"  Value="Update" />
              </td>
          </tr>
      </table>
                    </form>

                </div>
            </div>
        </div>
@include ('admin.layouts.footer')
