@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
  <div style="height: 900px" class="box round first grid">
    <h2 style="text-align: center;"> Medicine Genetic Info </h2>
    <div class="block copyblock">
<form action="{{Route('medicine_geneticupdate')}}/{{$genetic->id}}" method="post" id="name">
       @csrf
    <table class="form">
      <tr>
    <td>
    <label>Category Name</label>
    </td>
    <td>
      <input type="text" name="name" value="{{$genetic->name}}" class="medium" />
    </td>
      </tr>
  
  <tr>
      <td>
      <label>Description</label>
    </td>
    <td>
      <input type="text" name="description" value="{{$genetic->description}}" class="medium" />
    </td>
    </tr>
    <tr>
      <td>
      <label>Status</label>
    </td>
    <td>
      <input type="text" name="status" value="{{$genetic->status}}" class="medium" />
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
