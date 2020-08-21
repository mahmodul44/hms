@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')
<div class="grid_10">
<div class="box round first grid">
<h2>Update Doctor Info</h2>
<div class="block copyblock">
<form action="{{Route('documentupdateout')}}/{{ $document->id}}" method="post" name="id" >
    @csrf
<table class="form">
<tr>
<td>
<label>Patient ID</label>
</td>
  <td>
    <input type="text" name="patient_code" value="{{ $document->patient_code}}">
  </td>
  </tr>
  <tr>
<td>
<label>Doctor</label>
</td>
  <td>
    <input type="text" name="doctor" value="{{ $document->doctor}}" readonly="readonly">

<select name="doctor">
  <option value="">select doctor</option>
  @foreach($doctor as $dr)
  <option>{{$dr->dname}}</option>
  @endforeach
</select>
</td>
</tr>
<tr>
  <td>
  <label>Short Note</label>
    </td>
<td>
    <input type="text" name="snote" value="{{ $document->snote}}">
  </td>
  </tr>
  <tr>
  <td>
    <label>Document</label>
  </td>
      <td>
    <img src="../images/document/{{$document->document}}" alt="IMG" style="width:100px;height:150px;">
      <input type="file" name="document"/>
    </td>
      </tr>
      <tr>
    <td>
    <label>Date</label>
      </td>
  <td>
      <input type="text" name="date" value="{{ $document->date}}"  class="medium"/>
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
