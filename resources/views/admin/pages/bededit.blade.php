@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
            <div style="height: 900px" class="box round first grid">

          <h2 style="text-align: center;"> Bed Info </h2>
               <div class="block copyblock">
<form action="{{Route('bedupdate')}}/{{$bed_edit->id}}" method="post">
                 @csrf
                  <table class="form">
                    <tr>
                      <td>
                        <label>Bed Type</label>
                      </td>
                    <td>
                      <input type="text" name="bed_type" value="{{$bed_edit->bed_type}}" class="medium" required="required"/>
                      </td>
                    </tr>
                      <tr>
                      <td>
                          <label>Description</label>
                      </td>
                      <td>
                          <input type="text" name="description" value="{{$bed_edit->description}}" class="medium" required="required"/>
                      </td>
                      </tr>
              <tr>
                <td>
                    <label>Capacity</label>
                </td>
                    <td>
                        <input type="text" name="limit" value="{{$bed_edit->limit}}" class="medium" required="required"/>
                    </td>
                </tr>
                <tr>
                <td>
                    <label>Charge</label>
                </td>
               <td>
                  <input type="text" name="charge" value="{{$bed_edit->charge}}" class="medium" required="required"/>
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
