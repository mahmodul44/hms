@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
            <div style="height: 900px;background-color: #bac1dc" class="box round first grid">
      <a href="{{URL::to('testlist')}}"><span class="btn btn-dark">All Test</span></a>
          <h2 style="text-align: center;"> Add Test Info </h2>
<div class="block copyblock">
<form action="{{Route('testinsert')}}" method="post">
 @csrf
  <table class="form">
    <tr>
    <td>
        <label>Category Type</label>
    </td>
    <td>
        <select required="required" name="cat_name" class="medium">
          <option>select option</option>

      @foreach($categorylist as $category)

          <option value="{{$category->cat_name}}">
            {{$category->cat_name}}
          </option>
          @endforeach
        </select>
    </td>
    </tr>

<tr>
  <td>
    <label>Test Name</label>
  </td>
<td>
    <input type="text" name="test_name" class="medium" required="required"/>
</td>
</tr>
<tr>
<td>
    <label>Test Rate</label>
  </td>
<td>
    <input type="text" name="test_rate" class="medium"/>
  </td>
      </tr>
    <tr>
      <td>
      <label>Test_Ref.Fee</label>
  </td>
  <td>
    <input type="text" name="test_ref_fee" class="medium" required="required"/>
  </td>
    </tr>


<tr>
  <td style="vertical-align: top; padding-top: 9px;">
      <label>Description</label>
  </td>
  <td>
      <textarea class="tinymce" style="width: 200px" name="test_description" required="required"></textarea>
  </td>
</tr>


  <tr>
    <td>
  <input type="submit" name="submit" Value="submit" class="btn btn-success"/>
  <input type="submit" name="reset" Value="Reset" class="btn btn-danger"/>
  </td>
</tr>
  </table>
  </form>
</div>
            </div>
        </div>
@include ('admin.layouts.footer')
