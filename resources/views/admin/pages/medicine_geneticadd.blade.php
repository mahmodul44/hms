@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
            <div style="height: 900px" class="box round first grid">
      <a href="{{Route('medicine_geneticlist')}}"><span class="btn btn-dark">All Medicine Genetic</span></a>
          <h2 style="text-align: center;"> Medicine Genetic List </h2>
               <div class="block copyblock">
                 <form action="{{Route('medicine_geneticinsert')}}" method="post">
                   @csrf
                    <table class="form">
                      <tr>
                        <td>
                          <label>Category Name</label>
                        </td>
                      <td>
                          <input type="text" name="name" class="medium" required="required"/>
                      </td>
                    </tr>
                      
              <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Description</label>
                    </td>
                    <td>
                        <textarea class="tinymce" name="description" required="required"></textarea>
                    </td>
                </tr>
              <tr>
                <td>
                  <label>Status</label>
                </td>
                <td>
                  <select name="status">
                    <option>select option</option>
                    <option>Active</option>
                    <option>Inactive</option>
                  </select>
                </td>
              </tr>

                    <tr>
                      <td>
                    <input type="submit" name="submit" Value="submit" class="btn btn-success"/>
                    <input type="reset" name="reset" Value="Reset" class="btn btn-success"/>
                    </td>
                  </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
@include ('admin.layouts.footer')
