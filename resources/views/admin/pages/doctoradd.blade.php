@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')


    <div class="grid_10">
    <div style="height: 920px;background-color: #bac1dc" class="box round first grid">
    <a href="{{Route('doctorlist')}}"><span style="border-bottom: 2px solid black" class="btn btn-dark">All Doctor</span></a>
    <h2 style="text-align: center;background-color:white">Add Doctor Info</h2>
     <div class="block ">
      <form action="{{Route('doctorinsert')}}" method="post" enctype="multipart/form-data">
               @csrf
        <table class="form">
        <tr>
        <td>
            <label>Full Name</label>
        </td>
        <td>
        <input type="text" name="dname" class="medium" required="required"/>
</td>

            <td>
                <label>Upload Image</label>
            </td>
            <td>

                <input type="file" name="image" required="required"/>
            </td>


</tr>
<tr>
<td>
<label>Phone Number</label>
</td>
<td>
<input type="text" class="medium" name="mobile"required="required"/>
</td>
<td>
<label>Password</label>
</td>
<td>
<input type="text" name="password"required="required"/>
</td>
</tr>
<tr>
<td>
<label>Degination</label>
</td>
<td>
<input type="text" name="degination"  class="medium" required="required"/>
</td>

  <td>
<label>Blood Group</label>
</td>
<td>
<select id="blood" name="bloodGroup" class="medium">
    <option>Select Option</option>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
</select>
</td>
</tr>
<tr>

</tr>


<tr>
    <td>
        <label>Email</label>
    </td>
    <td>
        <input type="text" name="email"  class="medium"/>
    </td>

<td>
    <label>Date of Birth</label>
</td>
<td>
    <input type="date" name="dob" required="required">
</td>
</tr>

<tr>
<td>
    <label>Short Biography</label>
</td>
<td>
    <textarea style="width:250px;height:50px" class="" name="biography" required="required"></textarea>
</td>
    <td>
        <label>Department</label>
    </td>
    <td>
        <select name="department">
            <option>Select Department</option>
            @foreach($dept_list as $dept)
                <option value="{{$dept->deptname}}">{{$dept->deptname}}</option>
            @endforeach
        </select>
    </td>

</tr>

            <td>
                <label>Education/Degree</label>
            </td>
            <td>
                <textarea style="width:250px;height:50px" class="" name="education" required="required"></textarea>
            </td>
<tr>
<td style="vertical-align: top; padding-top: 9px;">
    <label>Address</label>
</td>
<td>
<textarea class="" style="width:250px;height:50px" name="address" required="required" ></textarea>
</td>


<td>
    <label>Gender</label>
</td>
<td>
<div class="custom-control custom-radio custom-control-inline">
<input type="radio" id="customRadioInline1" value="Male" name="gender" class="custom-control-input">
<label class="custom-control-label" for="customRadioInline1" value="Male">Male</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
<input type="radio" id="customRadioInline2" value="Female" name="gender" class="custom-control-input">
<label class="custom-control-label" for="customRadioInline2">Female</label>
</div>

</td>
</tr>
     <tr>
<td>
    <input type="submit" class="btn btn-primary" name="submit" Value="Save" />
    <input type="submit" class="btn btn-info" name="reset" Value="Reset" style="color: red" />
</td>
</tr>
</table>
</form>
                </div>
            </div>
        </div>

<!-- Load TinyMCE -->
<!--
<script src="{{asset('admin/js/tiny-mce/jquery.tinymce.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
 -->
<!-- Load TinyMCE -->

@include ('admin.layouts.footer')
