@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

        <div class="grid_10">
            <div style="height: 900px" class="box round first grid">
    <a href="{{URL::to('patientlist')}}"><span class="btn btn-dark"> All Patient(Indoor)</span></a></h2>
                <h2 style="text-align: center;">PatientList(Indoor)</h2>
                
                <div class="block">
                  <form action="/" method="">
                
                     <table class="form">
                       <tr>
                         <td>
                           <label>Patient ID:</label>
                         </td>
                         <td>
                           {{ $result->patient_code}}
                         </td>
                       
                         <td>
                         <label>Full Name:</label>
                     </td>
                     <td>
                       {{ $result->name}}
                     </td>
               </tr>
                     <tr>
                       <td>
                         <label>Email:</label>
                   </td>
                   <td>
                        {{ $result->email}}
                     </td>
                
                         <td>
                         <label>Phone Number:</label>
                     </td>
                     <td>
                        {{ $result->mobile}}
                     </td>
                         </tr>

                 <tr>
                     <td>
                         <label>Address:</label>
                     </td>
                     <td>
                        {{ $result->address}}
                     </td>
               
                     <td>
                         <label>Date of Birth:</label>
                     </td>
                     <td>
                        {{ $result->dob}}
                     </td>
                 </tr>
                 <tr>
                     <td>
                         <label>Blood Group:</label>
                     </td>
                     <td>
                           {{ $result->bloodGroup}}
                     </td>
                 
                     <td>
                         <label>Gender:</label>
                     </td>
                     <td>
                        {{ $result->gender}}
                     </td>
   </tr>
     <tr>
       <td>
           <label>Reference Description</label>
             </td>
         <td>
        {{ $result->reference}}
          </td>
       
           <td>
             <label>Reference Type: </label>
           </td>
             <td>
             {{ $result->referencetype}}
           </td>
          </tr>
        <tr>
           <td>
             <label>Type </label>
           </td>
             <td>
             {{ $result->type}}
           </td>
         </tr>

          <tr>
            <td></td>
            <td></td>
  <td style="float: right;"><a class="btn btn-info" href="{{Route('patientlist')}}" >OK</a></td>
<td>
  </td>
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
