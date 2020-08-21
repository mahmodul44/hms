@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
            <div style="height: 900px;background-color: #bac1dc" class="box round first grid">
      <a href="{{URL::to('patientlistout')}}"><span class="btn btn-dark">All Patient</span></a>
          <h2 style="text-align: center;">Add Patient Info (Outdoor)</h2>
               <div class="block">
                 <form action="{{Route('patientinsertout')}}" method="post">
                   @csrf
                    <table class="form">
                  <tr>
                    <td>
                      <label>Full Name</label>
                    </td>
                  <td>
                      <input type="text" name="name" class="medium" required="required"/>
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
                        <label>Phone Number</label>
                    </td>
                    <td>
                      <input type="text" name="mobile" class="medium" required="required"/>
                    </td>

                    <td>
                        <label>Gender</label>
                    </td>
                    <td>
                        <select required="required" name="gender">
                          <option>Select patient Gender</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                          <option value="Others">Others</option>
                        </select>
                    </td>
                </tr>
                <tr>

                    <td>
                        <label>Email</label>
                    </td>
                    <td>
                        <input type="text" name="email" class="medium"/>
                    </td>


          <td>
              <label>Blood Group</label>
          </td>
          <td>
              <select id="blood" name="bloodGroup">
                  <option>Select Blood</option>
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
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Address</label>
                    </td>
                    <td>
                        <textarea style="width: 300px;height: 50px" class="tinymce" name="address" required="required"></textarea>
                    </td>
                    <td>
                        <label>Reference Type</label>
                    </td>
                    <td>
                        <select name="referencetype">
                            <option>Select Option</option>
                            <option value="Doctor">Doctor</option>
                            <option value="Dalal">Dalal</option>
                            <option value="others">Others</option>
                            <option value="No">No Reference</option>

                        </select>
                    </td>

                        </tr>
                       <tr>
                           <td>
                               <label>Reference Details</label>
                           </td>
                           <td>
                               <textarea style="width: 300px;height: 50px" name="reference"  class=""></textarea>
                           </td>
                    <td>
                      <label>TYPE</label>
                    </td>
                    <td>
                        <select required="required" name="type">
                          <option value="0">Outdoor</option>
                        </select>
                    </td>
                </tr>
                    <tr>
                      <td>
                    <input type="submit" name="submit" Value="submit" class="btn btn-success"/>
                    <input type="submit" name="reset" Value="Reset" class="btn btn-info" style="color:red"/>

                    </td>
                  </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
@include ('admin.layouts.footer')
