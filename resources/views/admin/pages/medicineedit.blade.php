@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Patient Info (Indoor)</h2>
        <div class="block">

          <form action="{{Route('medicineupdate')}}/{{ $medicine->id}}" method="post" name="id" >
            @csrf
             <table class="form">
                 <tr>
                 <td>
                 <label>Medicine Name</label>
             </td>
               <td>
                 <input type="text" name="name" value="{{ $medicine->name}}" class="medium"/>
             </td>
             </tr>
                 <tr>
                 <td>
                 <label>Category</label>
             </td>
             <td>
                 <input type="text" name="category" value="{{ $medicine->category}}" class="medium"/>
             </td>
                 </tr>
                 <tr>
                 <td>
                 <label>Description</label>
             </td>
             <td>
                 <input type="text" name="description" value="{{ $medicine->description }}" class="medium"/>
             </td>
                 </tr>
                 <tr>
                 <td>
                 <label>price</label>
             </td>
             <td>
                 <input type="text" name="price" value="{{ $medicine->price }}" class="medium"/>
             </td>
                 </tr>

                <tr>
             <td>
                 <label>Manufacture</label>
             </td>
             <td>
               <input Type="text" name="manufacture" value="{{ $medicine->manufacture}}"/>
             </td>
         </tr>

         <tr>
             <td>
                 <label>Status</label>
             </td>
             <td>
                 <input type="text" name="status" value="{{ $medicine->status}}"/>
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
