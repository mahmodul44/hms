@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

        <div class="grid_10">
            <div style="height: 800px" class="box round first grid">
          <a href="/departmentlist"><span class="btn btn-dark">All Department</span></a>
                <h2 style="text-align: center;">Update Department Info</h2>
               <div class="block copyblock">
                 <form action="{{Route('departmentupdate')}}/{{ $department->id}}" method="post" name="id" enctype="multipart/form-data" >
                   @csrf
                    <table class="form">
                        <tr>
                          <td>
                            <label>Images</label>
                          </td>
                         <td>
    <img src="../images/department/{{$department->image}}" alt="IMG" style="width:100px;height:50px;">
    <input type="file" name="image"/>
    </td>
                        </tr>
                        <tr>
                        <td>
                        <label>Department Name</label>
                    </td>
                      <td>
                  <input type="text" name="deptname" value="{{ $department->deptname}}" class="medium"/>
                    </td>
                        </tr>

                  <tr>
                    <td>
                  <label>Status</label>
                    </td>
                    <td>
              <input type="text" name="status" value="{{ $department->status}}"/>
                  </td>
                </tr>
                <tr>
                    <td>
                <label>Description</label>
                    </td>
                    <td>
           <input style="height: 60px" name="description" value="{{ $department->description }}" class="tinymce"/>
                    </td>
                </tr>
						  <tr>
                            <td>
                                <input type= "submit" name="submit" Value="update" class="btn btn-info" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
@include ('admin.layouts.footer')
