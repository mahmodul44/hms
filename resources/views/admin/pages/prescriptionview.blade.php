@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Prescription List</h2>
        <a href="{{Route('prescriptionlist')}}"><span class="btn btn-dark">prescription List</span> </a>
        @if(Session::get('user_role') !== 'patient')
        <a href="{{Route('prescriptionedit')}}/{{$prescription_info->pr_id}}"><span class="btn btn-dark">prescription Edit</span></a>
        @endif
            <a href="#"><span class="btn btn-dark"> print</span></a>
        <div class="block">

             <table class="form">
                <tbody style="background-color: #c3ac96">

                 <tr>
                 <td colspan="2">
                <strong style="padding-left:20px">Patient ID:    </strong>
                 <strong style="margin-left: 20px">{{$prescription_info->patient_id}}</strong>
                 </td>
                 </tr>

             </tbody>
    <tr>
    <td width="50%">
        <ul>
        <li style="font-weight: bold;">{{ Auth::user()->name }}</li>

    </ul>
    </td>
    <td width="50%" style="float: right;">
        <ul>
            <li>Demo hospital</li>
            <li>#0 mirpur,dhaka</li>
            <li style="font-weight: bold;font-style: italic;">{{ Auth::user()->email }}</li>
            <li style="font-weight: bold;">ID:{{ Auth::user()->id }}</li>
        </ul>
    </td>
</tr>
     <tbody>
                 <tr class="bg-primary" >
                 <td colspan="2">
                 <strong style="padding-left:10px">Patient name:</strong>
                 <strong>{{$prescription_info->name}}</strong>
                 <strong style="margin-left: 70px">Date of birth:  </strong>
                 <strong>{{$prescription_info->dob}}</strong>
                  </td>
                 </tr>
             </tbody>
</table>

 <div class="row">
 <div class="col-sm-12">
 <div style="width: 35%;float: left;">

<table class="table table-striped">
    <thead>
        <tr class="bg-info header-2">
            <th>#</th>
            <th>Test Name</th>
        </tr>
        </thead>
        <tbody>
          @if(!empty($test_info))
              @foreach($test_info as $i=>$test)
                <tr class="odd gradeX">
                    <td>{{($i+1)}}</td>
                    <td>{{$test->test_name}}</td>

                </tr>
              @endforeach
              @endif
        </tbody>
    </table>

</div>

<div style="width: 65%;float:right;padding-left: 10px">


<table class="table table-striped">
<thead>
<tr class="bg-info header-2">
    <th>#</th>
    <th>Medicine Name</th>
    <th>Douse</th>
    <th>Days</th>
    <th>Instruction</th>
</tr>
    </thead>
    <tbody>
              @if(!empty($medicine_info))
              @foreach($medicine_info as $i=>$medicine)
                <tr class="odd gradeX">
                    <td>{{($i+1)}}</td>
                    <td>{{$medicine->name}}</td>
                    <td>{{$medicine->douse}}</td>
                    <td>{{$medicine->douse_day}}</td>
                    <td>{{$medicine->instruction}}</td>
                </tr>
              @endforeach
              @endif
    </tbody>
    </table>

</div>
</div>
</div>
<br><br>
<table>
    <tbody>
      <tr>
    <td width="70%"></td>

    <td  style="float: right;">---------------------------------------</td>
    <td  style="float: right;">Signature</td>
</tr>
    </tbody>
</table>

</div>
</div>
</div>


@include ('admin.layouts.footer')
