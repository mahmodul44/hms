@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')


        <div class="grid_10">
            <div style="height: 800px;background-color:#bac1dc " class="box round first grid">
        <a href="{{URL::to('departmentlist')}}"><span class="btn btn-dark">All Department</span></a>
          <h2 style="text-align: center;">Add Department Info</h2>
        <div class="block copyblock">
        <form action="{{Route('departmentinsert')}}" method="post" enctype="multipart/form-data">
                   @csrf
                    <table class="form">
                      <tr>
                        <td>
                          <label>Department Image(if possible)</label>
                        </td>
                        <td>
                          <input type="file" name="image">
                        </td>
                      </tr>
                        <tr>
                        <td>
                        <label>Department Name</label>
                    </td>
                      <td>
                      <input type="text" name="deptname" class="" required="required"/>
                    </td>
                      </tr>
                       <tr>
                    <td>
                        <label>Status</label>
                    </td>
                    <td>
                        <select id="select" name="status" required="required">
                            <option>Select Status</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Description</label>
                    </td>
                    <td>
                       <textarea style="height: 60px;width: 250px" name="description" class="tinymce"></textarea>
                    </td>
                </tr>
						  <tr>
                  <td>
                  <input type="submit" name="submit" Value="Save" class="btn btn-primary" />
                  <input type="submit" name="reset" Value="Reset" class="btn btn-success" />
               </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
@include ('admin.layouts.footer')
