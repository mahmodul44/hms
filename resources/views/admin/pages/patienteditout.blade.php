@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Patient Info(outdoor)</h2>
        <div class="block">
          <form action="{{Route('patientupdateout')}}/{{ $patientout->id}}" method="post" name="id" >
            @csrf
             <table class="form">
              <tr>
                <td>
                 <label>Full Name</label>
             </td>
               <td>
                 <input type="text" name="name" value="{{ $patientout->name}}"  class="medium"/>
             </td>
        
            <td>
               <label>Email</label>
             </td>
            <td>
               <input type="text" name="email" value="{{ $patientout->email}}" class="medium"/>
             </td>
            </tr>
              <tr>
                <td>
                 <label>Mobile</label>
             </td>
             <td>
               <input type="text" name="mobile" value="{{ $patientout->mobile }}" class="medium"/>
             </td>
         
              <td>
                <label>Address</label>
              </td>
             <td>
               <input type="text" name="address" value="{{ $patientout->address }}" class="medium"/>
             </td>
           </tr>
            <tr>
             <td>
               <label>Gender</label>
             </td>
             <td>
               <input Type="text" name="gender" value="{{ $patientout->gender}}"/>
             </td>
        
             <td>
                 <label>Date of Birth</label>
             </td>
             <td>
                 <input type="date" name="dob" value="{{ $patientout->dob}}"/>
             </td>
         </tr>
         <tr>
             <td>
                 <label>Blood Group</label>
             </td>
             <td>
              <input type="text" name="bloodGroup" value="{{ $patientout->bloodGroup}}"/>
             </td>
       
             <td>
                 <label>Reference Type</label>
             </td>
             <td>
                <input type="text" name="referencetype" value="{{ $patientout->referencetype}}"/>
             </td>
         </tr>
         <tr>
             <td>
                 <label>Reference</label>
             </td>
             <td>
                <input name="reference" value="{{ $patientout->reference}}"/>
             </td>
         
             <td>
                 <label>Type</label>
             </td>
             <td>
                <input type="text" name="type" value="{{ $patientout->type}}"/>
             </td>
         </tr>
        <tr>
           <td>
             <input type="submit" name="submit" Value="Update" class="btn btn-info"/>
           </td>
       </tr>
           </table>
             </form>
        </div>
    </div>
</div>

@include ('admin.layouts.footer')
