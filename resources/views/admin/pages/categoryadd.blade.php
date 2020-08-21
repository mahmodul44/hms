@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
            <div style="height: 900px" class="box round first grid">
      <a href="{{Route('categorylist')}}"><span class="btn btn-dark">All category</span></a>
          <h2 style="text-align: center;"> Category </h2>
     <div class="block copyblock">
    <form action="{{Route('categoryinsert')}}" method="post">
       @csrf
       <table class="form">
     <tr>
    <td>
           <label>Category Type</label>
      </td>
    <td>
      <input type="text" name="cat_name" class="medium" required="required"/>
       </td>
     </tr>
       <tr>
     <td>
          <label>Lab Type</label>
       </td>
        <td>
          <select required="required" name="lab_type">
       <option value="Lab">Lab</option>
         <option value="Pathology">Pathology</option>
      </select>
        </td>
      </tr>
    <tr>
  <td style="vertical-align: top; padding-top: 9px;">
      <label>Description</label>
    </td>
   <td>
  <textarea class="tinymce" name="cat_description" ></textarea>
    </td>
      </tr>
<tr>
        <td>
          <label>Status</label>
        </td>
        <td>
          <input type="radio" name="status" value="Active">Active
          <input type="radio" name="status" value="Inactive">Inactive
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
