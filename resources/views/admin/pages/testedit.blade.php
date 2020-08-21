@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
  <div style="height: 900px" class="box round first grid">
    <h2 style="text-align: center;"> Test Info </h2>
    <div class="block copyblock">
   <form action="{{Route('testupdate')}}/{{$test->id}}" method="post">
       @csrf
    <table class="form">
      <tr>
    <td>
    <label>Category Name</label>
    </td>
    <td>
      <input type="text" name="cat_name" value="{{$test->cat_name}}" class="medium" required="required"/>
    </td>
      </tr>
  <tr>
    <td>
    <label>Test Name</label>
      </td>
      <td>
      <input type="text" name="test_name" value="{{$test->test_name}}" class="medium" required="required"/>
      </td>
  </tr>
  <tr>
      <td>
    <label>Test Rate</label>
    </td>
    <td>
    <input type="text" name="test_rate" value="{{$test->test_rate}}" class="medium"/>
    </td>
      </tr>
    <tr>
      <td>
    <label>Test_Ref.Fee</label>
    </td>
    <td>
    <input type="text" name="test_ref_fee" value="{{$test->test_ref_fee}}" class="medium" required="required"/>
    </td>
      </tr>
  <tr>
      <td>
      <label>Description</label>
    </td>
    <td>
      <input type="text" name="test_description" value="{{$test->test_description}}" class="medium" required="required"/>
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
