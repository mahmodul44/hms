@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
            <div style="height: 900px" class="box round first grid">

          <h2 style="text-align: center;"> Category Info </h2>
               <div class="block copyblock">
   <form action="{{Route('categoryupdate')}}/{{ $category->id}}" method="post">
                 @csrf
                  <table class="form">
                    <tr>
                      <td>
                        <label>Category Type</label>
                      </td>
                    <td>
                          <input type="text" name="cat_name" value="{{ $category->cat_name}}" class="medium"/>
                      </td>
                    </tr>
                      <tr>
                      <td>
                          <label>Lab Type</label>
                      </td>
                      <td>
                          <input type="text" name="lab_type" value="{{ $category->lab_type}}" class="medium"/>
                      </td>
                      </tr>
              <tr>
                <td>
                    <label>Description</label>
                </td>
                    <td>
                        <input type="text" name="cat_description" value="{{ $category->cat_description}}" class="medium"/>
                    </td>
                </tr>
          <tr>
        <td>
       <label>Status</label>
       </td>
        <td>
              <input type="text" name="status" value="{{ $category->status}}" class="medium"/>
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
