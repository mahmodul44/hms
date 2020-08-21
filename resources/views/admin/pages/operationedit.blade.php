@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
            <div style="height: 900px" class="box round first grid">

          <h2 style="text-align: center;"> Birth Info </h2>
               <div class="block copyblock">
<form action="{{Route('operationupdate')}}/{{$operation_edit->oper_id}}" method="post">
                 @csrf
                  <table class="form">
                    <tr>
                      <td>
                        <label>Today date</label>
                      </td>
                    <td>
                      <input type="text" name="date" value="{{$operation_edit->date}}" class="medium" required="required"/>
                      </td>
                    </tr>
                      <tr>
                      <td>
                          <label>patient Id</label>
                      </td>
                      <td>
                          <input type="text" name="patient_id" value="{{$operation_edit->patient_id}}" class="medium" required="required"/>
                      </td>
                      </tr>
              <tr>
                <td>
                    <label>Title</label>
                </td>
                    <td>
                        <input type="text" name="title" value="{{$operation_edit->title}}" class="medium" required="required"/>
                    </td>
                </tr>
                <tr>
                <td>
                    <label>Description</label>
            </td>
               <td>
                  <input type="text" name="description" value="{{$operation_edit->description}}" class="medium" required="required"/>
                    </td>
                </tr> 
                <tr>
                <td>
                    <label>Doctor Name</label>
            </td>
               <td>
                  <input type="text" name="doctor_id" value="{{$operation_edit->doctor_id}}" class="medium" required="required"/>
                    </td>
                </tr>
          <tr>
                <td>
                    <label>Status</label>
            </td>
               <td>
                  <input type="text" name="status" value="{{$operation_edit->status}}" class="medium" required="required"/>
                    </td>
                </tr>

                <tr>
                   <td>
                    <input type="submit" name="submit" Value="Update" class="btn btn-success"/>
                    
                    </td>
                  </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
@include ('admin.layouts.footer')
