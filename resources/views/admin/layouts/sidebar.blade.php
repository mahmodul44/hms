<div class="grid_2">
    <div class="box sidemenu">
        <div class="block" id="section-menu">
            <ul class="section menu">
               <li><a class="menuitem">Site Option</a>
                </li>
                @if(Session::get('user_role') == 'admin')
                <li><a class="menuitem">Appointment </a>
                <ul class="submenu">

                <li><a href="{{URL::to('appointmentadd')}}" >Add Appointment</a></li>
                <li><a href="{{URL::to('appointmentlist')}}" >Appointment List</a></li>
              </ul>
            </li>

				<li><a class="menuitem">Doctor</a>
                    <ul class="submenu">
                        <li><a href="{{ URL::to('doctoradd')}}">Add Doctor</a> </li>
                        <li><a href="{{ URL::to('doctorlist')}}">All Doctors</a> </li>
                    </ul>
                </li>

                <li><a class="menuitem">Department</a>
                    <ul class="submenu">
                         <li><a href="{{ URL::to('departmentadd')}}">Add Department</a> </li>
                        <li><a href="{{URL::to('departmentlist')}}">All Department</a> </li>
                    </ul>
                </li>
                <li><a class="menuitem">Indoor</a>
                    <ul class="submenu">
                        <li><a href="{{URL::to('patientadd')}}">Add Patient</a> </li>
                        <li><a href="{{ URL::to('patientlist')}}">All Patients</a> </li>
                        <li><a href="{{ URL::to('documentadd')}}">Add Document</a> </li>
                        <li><a href="{{ URL::to('documentlist')}}">Documents List</a> </li>
                    </ul>
                </li>

    <li><a class="menuitem">Outdoor</a>
      <ul class="submenu">
          <li><a href="{{URL::to('patientaddout')}}">Add Patient</a> </li>
          <li><a href="{{URL::to('patientlistout')}}">All Patients</a> </li>
          <li><a href="{{URL::to('documentaddout')}}">Add Document</a> </li>
          <li><a href="{{URL::to('documentlistout')}}">Documents List</a> </li>
      </ul>
    </li>
    <li><a class="menuitem">Schedule</a>
<ul class="submenu">
<li><a href="{{URL::to('scheduleadd')}}">Add Schedule</a> </li>
<li><a href="{{URL::to('schedulelist')}}">All Schedule</a> </li>
</ul>
    </li>
                @endif
    <li><a class="menuitem">Prescription</a>
<ul class="submenu">
    @if(Session::get('user_role') !== 'patient')

    <li><a href="{{URL::to('prescriptionadd')}}">Add Prescription</a></li>
    @endif
     <li><a href="{{URL::to('prescriptionlist')}}">All Prescription</a>
    </li>
 </ul>
    </li>

                <li><a class="menuitem">Hospital Activites</a>
                    <ul class="submenu">
                        @if(Session::get('user_role') == !'patient')
                        <li><a href="{{URL::to('birthadd')}}">Add Birth Report</a> </li>
                        @endif
                            <li><a href="{{URL::to('birthlist')}}">Birth Report</a> </li>
                            @if(Session::get('user_role') == !'patient')
                        <li><a href="{{URL::to('deathadd')}}">Add Death Report</a> </li>
                            @endif
                        <li><a href="{{URL::to('deathlist')}}">Death Report</a> </li>
                                @if(Session::get('user_role') == !'patient')
                        <li><a href="{{URL::to('operationadd')}}">Add Operation </a> </li>
                            @endif
                        <li><a href="{{URL::to('operationlist')}}">Operation Report</a> </li>
                    </ul>
                </li>
                <li>
                    <a class="menuitem">Bed Manager</a>
                    <ul class="submenu">
                        @if(Session::get('user_role') !== 'patient')
                            <li><a href="{{URL::to('bedadd')}}">Add Bed</a> </li>
                            <li><a href="{{URL::to('bedlist')}}">Bed List</a> </li>
                            <li><a href="{{URL::to('bedassignadd')}}">Bed Assign</a></li>
                        @endif
                        <li><a href="{{URL::to('bedassignlist')}}">Bed Assign List</a></li>

                    </ul>
                </li>
    <!-- <li><a class="menuitem">Account Manager</a>
        <ul class="submenu">
            <li><a href="/accountadd">Add Account</a> </li>
            <li><a href="/accountlist">Account List</a> </li>
            <li><a href="/addinvoice">Add Invoice</a> </li>
            <li><a href="/invoicelist">Invoice List</a> </li>
            <li><a href="/addpayment">Add Payment</a> </li>
            <li><a href="/paymentlist">Payment List</a> </li>
            <li><a href="/report">Report</a> </li>
            <li><a href="/debitreport">Debit Report</a> </li>
            <li><a href="/creditreport">Credit Report</a> </li>
        </ul>
    </li> -->
                @if(Session::get('user_role') == 'admin')

<li>
    <a class="menuitem">Humman Resources</a>
    <ul class="submenu">
        <li><a href="{{URL::to('employeeadd')}}">Add Employee</a> </li>
        <li><a href="{{URL::to('accountantlist')}}">Accountant List</a> </li>
         <li><a href="{{URL::to('laboratoristlist')}}">Laboratorist List</a></li>
        <li><a href="{{URL::to('nurselist')}}">Nurse List</a></li>
         <li><a href="{{URL::to('pharmacylist')}}">Pharmacist List</a> </li>
        <li><a href="{{URL::to('receptionistlist')}}">Receptionist List</a> </li><li><a href="{{URL::to('case_managerlist')}}">Case Manager List</a> </li>
    </ul>
</li>



    <!--  <li><a class="menuitem">Notice Board</a>
        <ul class="submenu">
            <li><a href="/noticeadd">Add Notice</a></li>
            <li><a href="/noticelist">Notice List</a></li>
        </ul>
    </li> -->

                @endif
    <li><a class="menuitem">Medichine</a>
        <ul class="submenu">
            @if(Session::get('user_role') !== 'patient')
            <li><a href="{{URL::to('medicine_geneticadd')}}">Add Medicine Genetic</a></li>
            <li><a href="{{Route('medicine_geneticlist')}}">Medicine Genetic List</a></li>
            <li><a href="{{URL::to('medicineadd')}}">Add Medicine</a> </li>
            <li><a href="{{URL::to('medicinelist')}}">Medicine List</a> </li>
            <li><a href="{{URL::to('invoiceadd')}}">Add Invoice</a> </li>
            @endif
            <li><a href="{{URL::to('invoicelist')}}">Invoice List</a> </li>
        </ul>
    </li>

    <li><a class="menuitem">Lab Manager</a>
    <ul class="submenu">
        @if(Session::get('user_role') !== 'patient')
        <li><a href="{{URL::to('categoryadd')}}">Add Categories</a> </li>
        <li><a href="{{URL::to('categorylist')}}">Category List</a> </li>
        <li><a href="{{URL::to('testadd')}}">Add Test</a> </li>
        <li><a href="{{URL::to('testlist')}}">Test List</a> </li>

        <li><a href="{{URL::to('lab_invoiceadd')}}">Add Invoice</a> </li>
        @endif
        <li><a href="{{URL::to('lab_invoicelist')}}">Invoice List</a> </li>
    </ul>
    </li>
                @if(Session::get('user_role') == 'admin')
	<li><a class="menuitem">Slider</a>
            <ul class="submenu">
                <li><a href="{{URL::to('slideradd')}}">Add Slider</a></li>
                <li><a href="{{URL::to('sliderlist')}}">All Slider</a></li>
            </ul>
        </li>
        <li><a class="menuitem">Authentication</a>
            <ul class="submenu">
                <li><a href="{{Route('users.create')}}">Add Admin</a></li>
                <li><a href="{{Route('users')}}">Users List</a></li>

            </ul>
        </li>
                    @endif
    </ul>
        </div>
    </div>
</div>
