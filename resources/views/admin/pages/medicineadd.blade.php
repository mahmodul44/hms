@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
            <div style="height: 900px;background-color: #bac1dc" class="box round first grid">
      <a href="{{URL::to('medicinelist')}}"><span class="btn btn-dark">All Medicine</span></a>
          <h2 style="text-align: center;">Add Medicine</h2>
               <div class="block copyblock">
                 <form action="{{Route('medicineinsert')}}" method="post">
                   @csrf
                    <table class="form">
                  <tr>
                    <td>
                      <label>Medicine Name</label>
                    </td>
                  <td>
                      <input type="text" name="name" class="medium" required="required"/>
                  </td>
                </tr>

                    <tr>
                    <td>
                        <label>Category Type</label>
                    </td>
                    <td>
       <select  name="category" class="form-control" required="required">
     <option>select option</option>

      @foreach($categorylist as $categories)

          <option value="{{$categories->name}}">
            {{$categories->name}}
          </option>
          @endforeach
     </select>
      </td>
       </tr>

            <tr>
           <td>
            <label>Price</label>
                </td>
                <td>
                <input type="text" name="price" class="medium" required="required"/>
                </td>
                </tr>

                <tr>
                    <td>
                        <label>Select Manufacture</label>
                    </td>
                    <td>
                        <select name="manufacture">
                            <option>Select Option</option>
                            <option value="Acmi">Acmi</option>
                            <option value="AMSC">AMSC</option>
                            <option value="Extra Farma">Extra Farma</option>
                            <option value="IBN Sina">IBN Sina</option>
                            <option value="Squre group">Squre group</option>
                        </select>
                    </td>
                </tr>
                <tr>
                <td>
                    <label>status</label>
                </td>
                <td>
                    <select required="required" name="status">
                      <option> select option</option>
                      <option value="active">Active</option>
                      <option value="inactive">Inactive</option>
                    </select>
                </td>
            </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Description</label>
                            </td>
                            <td>
                                <textarea class="tinymce" style="width: 200px" name="description" required="required"></textarea>
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
