@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

    <div class="grid_10">
  <div class="box round first grid">
    <h2>Update Doctor Info</h2>
   <div class="block copyblock">
  <form action="{{Route('doctorupdate')}}/{{ $doctor->id}}" method="post" enctype="multipart/form-data" name="id" >
      @csrf
    <table class="form">
      <tr>
    <td>
      <label>Doctor Image</label>
    </td>
    <td>
    <img src="../images/doctor/{{$doctor->image}}" alt="IMG" style="width:100px;height:50px;">
    <input type="file" name="image" />
    </td>
    </tr>
    <tr>
  <td>
  <label>Doctor Name</label>
  </td>
  <td>
  <input type="text" name="dname" value="{{ $doctor->dname}}"  class="medium"/>
  </td>
    </tr>
    <tr>
    <td>
    <label>Email</label>
    </td>
    <td>
  <input type="text" name="email" value="{{ $doctor->email}}"  class="medium"/>
    </td>
  </tr>
  <tr>
    <td>
<label>Mobile</label>
</td>
  <td>
<input type="text" name="mobile" value="{{ $doctor->mobile}}"  class="medium"/>
  </td>
  </tr>

        <tr>
    <td>
<label>Password</label>
</td>
  <td>
<input type="text" name="password" value="{{ $doctor->password}}"  class="medium"/>
  </td>
  </tr>
<tr>
<td>
  <label>Degination</label>
  </td>
<td>
  <input type="text" name="degination" value="{{ $doctor->degination}}"  class="medium"/>
    </td>
</tr>
<tr>
  <td>
  <label>Department</label>
  </td>
  <td>


      <select name="department">
                           <option>Select option</option>
                            @foreach($dept_list as $dept)
    <option {{$doctor->department==$dept->deptname?'selected':''}} value="{{$dept->deptname}}">{{$dept->deptname}}</option>
                            @endforeach
                        </select>
  </td>
  </tr>
      <tr>
      <td>
      <label>Address</label>
      </td>
      <td>
          <input type="text" name="address" value="{{ $doctor->address}}"  class="medium"/>
                          </td>
                      </tr>
                      <tr>
                      <td>
                      <label>Death Of Birth</label>
                  </td>
                    <td>
                            <input type="date" name="dob" value="{{ $doctor->dob}}"/>
                            <!-- <input type="date" name="dob"> -->
                          </td>
                      </tr>
                      <tr>
                      <td>
                      <label>BloodGroup</label>
                  </td>
                    <td>
                      <!-- <label>{{ $doctor->bloodGroup}}</label> -->
                            <input type="text" name="bloodGroup" value="{{ $doctor->bloodGroup}}" />
                             <!--  <select  name="bloodGroup" class="medium">
                                <option>Select option</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select> -->
                          </td>
                      </tr>
                      <tr>
                      <td>
                      <label>Gender</label>
                  </td>
                    <td>
                            <input type="text" name="gender" value="{{ $doctor->gender}}"  class="medium"/>
                          </td>
                      </tr>
                      <tr>
                      <td>
                      <label>Biography</label>
                  </td>
                    <td>
                            <input type="text" name="biography" value="{{ $doctor->biography}}"  class="medium"/>
                          </td>
                      </tr>
                      <tr>
                      <td>
                      <label>Education/Degree</label>
                  </td>
                    <td>
                            <input type="text" name="education" value="{{ $doctor->education}}"  class="medium"/>
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

        <script>
        $("dept").val("{{$doctor->department}}");
        $("blood").val("{{$doctor->bloodGroup}}");
        </script>

@include ('admin.layouts.footer')
