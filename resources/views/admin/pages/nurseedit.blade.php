@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

    <div class="grid_10">
  <div class="box round first grid">
    <h2>Update Nurse Info</h2>
   <div class="block copyblock">
  <form action="{{Route('nurseupdate')}}/{{ $nurse->id}}" method="post" enctype="multipart/form-data" name="id" >
      @csrf
    <table class="form">
      <tr>
   <td>
   <label>Nurse Image</label>
 </td>
 <td>
   <img src="../images/employee/{{$nurse->emp_image}}" alt="employee Img" style="width:150px;height:120px;">
   <input type="file" name="emp_image"  />
</td>
 </tr>
 <tr>
 <td>
 <label>User Id</label>
 </td>
 <td>
 <input type="text" name="user_role" value="{{ $nurse->user_role}}" />
</td>
 </tr>
 <tr>
 <td>
 <label>Full Name</label>
</td>
 <td>
 <input type="text" name="emp_name" value="{{ $nurse->emp_name}}"  />
 </td>
 </tr>
 <tr>
 <td>
 <label>Email</label>
</td>
<td>
<input type="text" name="emp_email" value="{{ $nurse->emp_email}}" />
 </td>
</tr>
 
<tr>
<td>
 <label>Phone Number</label>
 </td>
 <td>
<input type="text" name="emp_mobile" value="{{ $nurse->emp_mobile}}" />
</td>
   </tr>
<tr>
<td>
 <label>Gender</label>
 </td>
 <td>
 <input type="text" name="emp_gender" value="{{ $nurse->emp_gender}}"/>
 </td>
</tr>
 <tr>
 <td style="vertical-align: top; padding-top: 9px;">
 <label>Address</label>
 </td>
 <td>
<input type="text" name="emp_address" value="{{ $nurse->emp_address}}" class="medium"/>
 </td>
 </tr>
<tr>
 <td>
<label>Status</label>
 </td>
 <td>
     <input type="text" name="emp_status" value="{{ $nurse->emp_status}}" class="medium">
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
