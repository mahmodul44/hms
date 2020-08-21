@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Notice Board</h2>
                <div class="block">

              <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Notice Board</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

						<tr class="odd gradeX">
							<td></td>
							<td></td>
				<td><a href="/notice_edit">Edit</a> || <a onclick="return confirm('Are you sure to delte !')" href="">Delete</a></td>
						</tr>

					</tbody>
				</table>
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
@include('admin.layouts.footer')
