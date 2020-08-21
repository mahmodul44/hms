@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
  <div style="height: 900px" class="box round first grid">
    <a href="{{URL::to('laboratoristlist')}}"><span style="border-bottom: 2px solid black" class="btn btn-dark"> All Laboratorist</span></a></h2>
  <h2 style="text-align: center;"> List</h2>
<div class="block">
<form action="/" method="" enctype="multipart/form-data">
  @csrf
   <table class="form">
   <tr>
   <td>
   <label>Laboratorist Image</label>
 </td>
 <td>
   <img src="../images/employee/{{$result->emp_image}}" alt="employee Img" style="width:150px;height:120px;">
</td>
 </tr>
 <tr>
 <td>
 <label>User Role</label>
 </td>
 <td>{{ $result->user_role}}</td>
 </tr>
 <tr>
 <td>
 <label>Full Name</label>
</td>
 <td>{{ $result->emp_name}}</td>
 </tr>
 <tr>
 <td>
 <label>Email</label>
</td>
<td>{{ $result->emp_email}}</td>

<td>
 <label>Mobile</label>
 </td>
 <td>{{ $result->emp_mobile}}</td>
</tr>
<tr>
<td>
 <label>Gender</label>
 </td>
 <td>{{ $result->emp_gender}}</td>

 <td style="vertical-align: top; padding-top: 9px;">
 <label>Address</label>
 </td>
 <td>{{ $result->emp_address}}</td>
 </tr>
<tr>
 <td>
<label>Status</label>
 </td>
 <td>{{ $result->emp_status}}</td>
 </tr>
    <tr>
  <td style="float:right"><a class="btn btn-info" href="{{ Route('laboratoristlist')}}" >OK</a></td>
   
 </tr>
 </table>
 </form>
 </div>
</div>
</div>
<script type="text/javascript">
	$(document).ready(function () {
	    setupLeftMenu();
	    $('.datatable').dataTable();
	    setSidebarHeight();
	});
</script>

@include ('admin.layouts.footer')
