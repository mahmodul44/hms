@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Schedule List</h2>
        <div style="background-color: #bac1dc" class="block">

          <form action="{{Route('scheduleupdate')}}/{{ $schedule->id}}" method="post" name="id" >
            @csrf
             <table class="form">
                 <tr>
                 <td>
                 <label>Doctor Name</label>
             </td>
               <td>
                 <input type="text" name="dname" value="{{ $schedule->dname}}"  class="medium"/>
             </td>
             </tr>
                 <tr>
                 <td>
                 <label>Days</label>
             </td>
             <td>
                 <input type="text" name="day" value="{{ $schedule->day}}" class="medium"/>
             </td>
                 </tr>
                 <tr>
                 <td>
                 <label>Start time</label>
             </td>
             <td>
                 <input type="text" name="stime" value="{{ $schedule->stime }}" class="medium"/>
             </td>
                 </tr>
                 <tr>
                 <td>
                 <label>End Time</label>
             </td>
             <td>
                 <input type="text" name="etime" value="{{ $schedule->etime }}" class="medium"/>
             </td>
                 </tr>

                <tr>
             <td>
                 <label>Per Time</label>
             </td>
             <td>
               <input Type="text" name="ptime" value="{{ $schedule->ptime}}"/>
             </td>
         </tr>
         <tr>
             <td>
                 <label>serial Visibility</label>
             </td>
             <td>
                 <input type="text" name="svisibility" value="{{ $schedule->svisibility}}"/>
             </td>
         </tr>
         <tr>
             <td>
                 <label>status</label>
             </td>
             <td>
              <input type="text" name="status" value="{{ $schedule->status}}"/>
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
