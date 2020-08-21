<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/', function () {
    return view('auth.login');
});

Route::get('index', 'FrontController@index')->name('index');
Route::get('/about_head', 'FrontController@about_head');
Route::get('/management', 'FrontController@management');
Route::get('/corporate_client', 'FrontController@corporate_client');
Route::get('appointment/{id?}', 'FrontController@appointment')->name('appointment');
Route::get('/admission', 'FrontController@admission');
Route::get('/labtest_fee', 'FrontController@labtest_fee');
Route::get('/room_rent', 'FrontController@room_rent');
Route::get('/patient_feedback', 'FrontController@patient_feedback');
Route::get('service', 'FrontController@service')->name('service');
Route::get('/visitors', 'FrontController@visitors');
Route::get('department', 'FrontController@department')->name('department');
Route::get('contact', 'FrontController@contact')->name('contact');
Route::get('dept_details/{id?}', 'FrontController@dept_details')->name('dept_details');
Route::get('drview_details/{id?}', 'FrontController@drview_details')->name('drview_details');
Route::get('dr_home', 'FrontController@dr_home')->name('dr_home');

Route::get('/test', 'FrontController@test');
Route::get('front_birth','FrontController@front_birth')->name('front_birth');
Route::post('front_birthinsert','HospitalActivitesController@front_birthinsert')->name('front_birthinsert');
Route::get('front_death','FrontController@front_death')->name('front_death');
Route::post('front_deathinsert','HospitalActivitesController@front_deathinsert')->name('front_deathinsert');
Route::post('contactinsert','FrontController@contactinsert')->name('contactinsert');
Route::get('inbox','FrontController@inbox')->name('inbox');
Route::get('inboxdelete/{id?}', 'FrontController@inboxdelete')->name('inboxdelete');


Route::get('/dashbord','AdminController@dashbord')->name('dashbord');
Route::get('home', 'AdminController@index')->name('home');
Route::get('doctoradd', 'AdminController@doctoradd');
Route::get('/doctorlist', 'AdminController@doctorlist');
Route::get('/doctoredit', 'AdminController@doctoredit');
Route::get('departmentadd', 'AdminController@departmentadd');
Route::get('departmentlist', 'AdminController@departmentlist');
Route::get('documentadd', 'AdminController@documentadd');
Route::get('documentlist', 'AdminController@documentlist');

//appointment
Route::get('appointmentadd', 'AppointmentController@appointmentadd');
Route::post('appointmentinsert', 'AppointmentController@appointmentinsert')->name('appointmentinsert');
Route::post('appointmentuserinsert','AppointmentController@appointmentuserinsert')->name('appointmentuserinsert');
Route::get('appointmentlist', 'AppointmentController@appointmentlist')->name('appointmentlist');
Route::get('appointmentview/{id?}', 'AppointmentController@appointmentview')->name('appointmentview');
Route::get('appointmentedit/{id?}', 'AppointmentController@appointmentedit')->name('appointmentedit');
Route::post('appointmentupdate/{id?}', 'AppointmentController@appointmentupdate')->name('appointmentupdate');
Route::get('/appointmentview/appointmentdelete/{id}', 'AppointmentController@appointmentdelete')->name('appointmentdelete');
Route::get('appointmentdelete/{id?}','AppointmentController@appointmentdelete')->name('appointmentdelete');
//patient controller indoor
Route::get('patientadd', 'PatientController@patientadd');
Route::get('patientlist', 'PatientController@patientlist')->name('patientlist');
Route::get('patientedit/{id?}', 'PatientController@patientedit')->name('patientedit');
Route::post('patientinsert','PatientController@patientinsert')->name('patientinsert');
Route::get('patientview/{id?}','PatientController@patientview')->name('patientview');
Route::get('patientdelete/{id?}','PatientController@patientdelete')->name('patientdelete');
Route::post('patientupdate/{id?}','PatientController@patientupdate')->name('patientupdate');

//patient controller outdoor
Route::get('patientaddout', 'PatientController@patientaddout');
Route::get('patientlistout', 'PatientController@patientlistout')->name('patientlistout');
Route::get('patienteditout/{id?}', 'PatientController@patienteditout')->name('patienteditout');
Route::get('patientviewout/{id?}', 'PatientController@patientviewout')->name('patientviewout');
Route::post('patientinsertout',   'PatientController@patientinsertout')->name('patientinsertout');
Route::get('patientoutdelete/{id?}', 'PatientController@patientoutdelete')->name('patientoutdelete');
Route::post('patientupdateout/{id?}', 'PatientController@patientupdateout')->name('patientupdateout');

//doctor controller
Route::get('doctoradd', 'DoctorController@doctoradd')->name('doctoradd');
Route::get('doctorlist', 'DoctorController@doctorlist')->name('doctorlist');
Route::get('doctoredit/{id?}', 'DoctorController@doctoredit')->name('doctoredit');
Route::post('doctorinsert','DoctorController@doctorinsert')->name('doctorinsert');
Route::get('doctorview/{id?}','DoctorController@doctorview')->name('doctorview');
Route::post('doctorupdate/{id?}','DoctorController@doctorupdate')->name('doctorupdate');
Route::get('doctordelete/{id?}','DoctorController@doctordelete')->name('doctordelete');

//department controller
Route::post('departmentinsert','DepartmentController@departmentinsert')->name('departmentinsert');
Route::get('departmentlist','DepartmentController@departmentlist')->name('departmentlist');
Route::get('departmentdelete/{id?}','DepartmentController@departmentdelete')->name('departmentdelete');
Route::get('departmentedit/{id?}','DepartmentController@departmentedit')->name('departmentedit');
Route::post('departmentupdate/{id?}','DepartmentController@departmentupdate')->name('departmentupdate');

Route::get('documentadd', 'DocumentController@documentadd');
Route::post('documentinsert', 'DocumentController@documentinsert')->name('documentinsert');
Route::get('documentlist', 'DocumentController@documentlist')->name('documentlist');
Route::get('documentedit/{id?}', 'DocumentController@documentedit')->name('documentedit');
Route::get('documentdelete/{id?}', 'DocumentController@documentdelete')->name('documentdelete');
Route::post('documentupdate/{id?}', 'DocumentController@documentupdate')->name('documentupdate');

Route::get('documentaddout', 'DocumentController@documentaddout');
Route::post('documentinsertout', 'DocumentController@documentinsertout')->name('documentinsertout');
Route::get('documentlistout', 'DocumentController@documentlistout')->name('documentlistout');
Route::get('documenteditout/{id?}', 'DocumentController@documenteditout')->name('documenteditout');
Route::get('documentdeleteout/{id?}', 'DocumentController@documentdeleteout')->name('documentdeleteout');
Route::post('documentupdateout/{id?}', 'DocumentController@documentupdateout')->name('documentupdateout');

Route::get('/noticeadd', 'AdminController@noticeadd');
Route::get('/noticelist', 'AdminController@noticelist');
Route::get('/notice_edit', 'AdminController@notice_edit');
Route::get('/accountadd', 'AdminController@accountadd');
//schedule
Route::get('scheduleadd', 'ScheduleController@scheduleadd');
Route::get('scheduleedit/{id?}', 'ScheduleController@scheduleedit')->name('scheduleedit');
Route::post('scheduleinsert', 'ScheduleController@scheduleinsert')->name('scheduleinsert');
Route::get('schedulelist', 'ScheduleController@schedulelist')->name('schedulelist');
Route::post('scheduleupdate/{id?}', 'ScheduleController@scheduleupdate')->name('scheduleupdate');
Route::get('scheduledelete/{id?}', 'ScheduleController@scheduledelete')->name('scheduledelete');


//prescription
Route::get('prescriptionadd', 'PrescriptionController@prescriptionadd');
Route::post('prescriptioninsert', 'PrescriptionController@prescriptioninsert')->name('prescriptioninsert');
Route::get('prescriptionlist', 'PrescriptionController@prescriptionlist')->name('prescriptionlist');
Route::post('prescriptionupdate/{id?}', 'PrescriptionController@prescriptionupdate')->name('prescriptionupdate');
Route::get('prescriptiondelete/{id?}', 'PrescriptionController@prescriptiondelete')->name('prescriptiondelete');
Route::get('prescriptionedit/{id?}', 'PrescriptionController@prescriptionedit')->name('prescriptionedit');
Route::get('prescriptionview/{id?}', 'PrescriptionController@prescriptionview')->name('prescriptionview');

//medicine
Route::get('medicineadd','MedicineController@medicineadd');
Route::get('medicinelist','MedicineController@medicinelist')->name('medicinelist');
Route::post('medicineinsert','MedicineController@medicineinsert')->name('medicineinsert');
Route::post('medicineupdate/{id?}','MedicineController@medicineupdate')->name('medicineupdate');
Route::get('medicineedit/{id?}','MedicineController@medicineedit')->name('medicineedit');
Route::get('medicinedelete/{id?}','MedicineController@medicinedelete')->name('medicinedelete');
Route::get('medicine_geneticadd','MedicineController@medicine_geneticadd')->name('medicine_geneticadd');
Route::get('medicine_geneticlist','MedicineController@medicine_geneticlist')->name('medicine_geneticlist');
Route::post('medicine_geneticinsert','MedicineController@medicine_geneticinsert')->name('medicine_geneticinsert');
Route::get('medicine_geneticview/{id?}','MedicineController@medicine_geneticview')->name('medicine_geneticview');
Route::get('medicine_geneticedit/{id?}','MedicineController@medicine_geneticedit')->name('medicine_geneticedit');
Route::get('medicine_geneticdelete/{id?}','MedicineController@medicine_geneticdelete')->name('medicine_geneticdelete');
Route::post('medicine_geneticupdate/{id?}','MedicineController@medicine_geneticupdate')->name('medicine_geneticupdate');

//invoice
Route::get('invoiceadd','MedicineController@invoiceadd')->name('invoiceadd');
Route::get('invoicelist','MedicineController@invoicelist')->name('invoicelist');
Route::post('invoiceinsert','MedicineController@invoiceinsert')->name('invoiceinsert');
Route::post('invoiceupdate/{id?}','MedicineController@invoiceupdate')->name('invoiceupdate');
Route::get('invoiceedit/{id?}','MedicineController@invoiceedit')->name('invoiceedit');
Route::get('invoiceview/{id?}','MedicineController@invoiceview')->name('invoiceview');
Route::get('invoicedelete/{id?}','MedicineController@invoicedelete')->name('invoicedelete');

//test
Route::get('testadd','LabController@testadd');
Route::get('testlist','LabController@testlist')->name('testlist');
Route::post('testinsert','LabController@testinsert')->name('testinsert');
Route::get('testdelete/{id?}','LabController@testdelete')->name('testupdate');
Route::get('testedit/{id?}','LabController@testedit')->name('testedit');
Route::post('testupdate/{id?}','LabController@testupdate')->name('testupdate');
Route::post('testdelete/{id?}','LabController@testdelete')->name('testdelete');

//lab_invoice
Route::get('lab_invoiceadd','LabController@lab_invoiceadd')->name('lab_invoiceadd');
Route::post('lab_invoiceinsert','LabController@lab_invoiceinsert')->name('lab_invoiceinsert');
Route::get('lab_invoicelist','LabController@lab_invoicelist')->name('lab_invoicelist');
Route::get('lab_invoiceedit/{id?}','LabController@lab_invoiceedit')->name('lab_invoiceedit');
Route::get('lab_invoiceview/{id?}','LabController@lab_invoiceview')->name('lab_invoiceview');
Route::post('lab_invoiceupdate/{id?}','LabController@lab_invoiceupdate')->name('lab_invoiceupdate');
Route::get('lab_invoicedelete/{id?}','LabController@lab_invoicedelete')->name('lab_invoicedelete');


//category
Route::get('categoryadd','LabController@categoryadd')->name('categoryadd');
Route::get('categorylist','LabController@categorylist')->name('categorylist');
Route::post('categoryinsert','LabController@categoryinsert')->name('categoryinsert');
Route::get('categoryedit/{id?}','LabController@categoryedit')->name('categoryedit');
Route::get('categorydelete/{id?}','LabController@categorydelete')->name('categorydelete');
Route::post('categoryupdate/{id?}','LabController@categoryupdate')->name('categoryupdate');
//Human
Route::get('employeeadd','HummanController@employeeadd')->name('employeeadd');
Route::post('employeeinsert','HummanController@employeeinsert')->name('employeeinsert');
Route::get('employeeedit/{id?}','HummanController@employeeedit')->name('employeeedit');
Route::get('employeedelete/{id?}','HummanController@employeedelete')->name('employeedelete');
Route::get('employeeupdate/{id?}','HummanController@employeeupdate')->name('employeeupdate');

Route::get('accountantlist', 'HummanController@accountantlist')->name('accountantlist');
Route::get('laboratoristlist', 'HummanController@laboratoristlist')->name('laboratoristlist');
Route::get('nurselist', 'HummanController@nurselist')->name('nurselist');
Route::get('pharmacylist', 'HummanController@pharmacylist')->name('pharmacylist');
Route::get('receptionistlist', 'HummanController@receptionistlist')->name('receptionistlist');
Route::get('case_managerlist', 'HummanController@case_managerlist')->name('case_managerlist');

//nurse
Route::get('nurseview/{id?}','HummanController@nurseview')->name('nurseview');
Route::get('nurseedit/{id?}','HummanController@nurseedit')->name('nurseedit');
Route::get('nursedelete/{id?}','HummanController@nursedelete')->name('nursedelete');
Route::post('nurseupdate/{id?}','HummanController@nurseupdate')->name('nurseupdate');

//accountant
Route::get('accountantview/{id?}','HummanController@accountantview')->name('accountantview');
Route::get('accountantedit/{id?}','HummanController@accountantedit')->name('accountantedit');
Route::get('accountantdelete/{id?}','HummanController@accountantdelete')->name('accountantdelete');
Route::post('accountantupdate/{id?}','HummanController@accountantupdate')->name('accountantupdate');

//laboratorist
Route::get('laboratoristview/{id?}','HummanController@laboratoristview')->name('laboratoristview');
Route::get('laboratoristedit/{id?}','HummanController@laboratoristedit')->name('laboratoristedit');
Route::get('laboratoristdelete/{id?}','HummanController@accountantdelete')->name('laboratoristdelete');
Route::post('laboratoristupdate/{id?}','HummanController@laboratoristupdate')->name('laboratoristupdate');

//pharmacy
Route::get('pharmacyview/{id?}','HummanController@pharmacyview')->name('pharmacyview');
Route::get('pharmacyedit/{id?}','HummanController@pharmacyedit')->name('pharmacyedit');
Route::get('pharmacydelete/{id?}','HummanController@pharmacydelete')->name('pharmacydelete');
Route::post('pharmacyupdate/{id?}','HummanController@pharmacyupdate')->name('pharmacyupdate');

//receptionist
Route::get('receptionistview/{id?}','HummanController@receptionistview')->name('receptionistview');
Route::get('receptionistedit/{id?}','HummanController@receptionistedit')->name('receptionistedit');
Route::get('receptionistdelete/{id?}','HummanController@receptionistdelete')->name('receptionistdelete');
Route::post('receptionistupdate/{id?}','HummanController@receptionistupdate')->name('receptionistupdate');

//case manager
Route::get('case_managerview/{id?}','HummanController@case_managerview')->name('case_managerview');
Route::get('case_manageredit/{id?}','HummanController@case_manageredit')->name('case_manageredit');
Route::get('case_managerdelete/{id?}','HummanController@case_managerdelete')->name('case_managerdelete');
Route::post('case_managerupdate/{id?}','HummanController@case_managerupdate')->name('case_managerupdate');

//bed
Route::get('bedadd','BedController@bedadd')->name('bedadd');
Route::post('bedinsert','BedController@bedinsert')->name('bedinsert');
Route::get('bedlist','BedController@bedlist')->name('bedlist');
Route::get('bededit/{id?}','BedController@bededit')->name('bededit');
ROute::get('beddelete/{id?}','BedController@beddelete')->name('beddelete');
ROute::post('bedupdate/{id?}','BedController@bedupdate')->name('bedupdate');

//bed assign
Route::get('bedassignadd','BedController@bedassignadd')->name('bedassignadd');
Route::get('bedassignlist','BedController@bedassignlist')->name('bedassignlist');
Route::post('bedassigninsert','BedController@bedassigninsert')->name('bedassigninsert');
Route::get('bedassignedit/{id?}','BedController@bedassignedit')->name('bedassignedit');
Route::post('bedassignupdate/{id?}','BedController@bedassignupdate')->name('bedassignupdate');
Route::get('bedassigndelete/{id?}','BedController@bedassigndelete')->name('bedassigndelete');

//birth Reprot
Route::get('birthadd','HospitalActivitesController@birthadd')->name('birthadd');
Route::get('birthlist','HospitalActivitesController@birthlist')->name('birthlist');
Route::post('birthinsert','HospitalActivitesController@birthinsert')->name('birthinsert');
Route::get('birthview/{id?}','HospitalActivitesController@birthview')->name('birthview');
Route::get('birthedit/{id?}','HospitalActivitesController@birthedit')->name('birthedit');
Route::get('birthdelete/{id?}','HospitalActivitesController@birthdelete')->name('birthdelete');
Route::post('birthupdate/{id?}','HospitalActivitesController@birthupdate')->name('birthupdate');

//Death Reprot
Route::get('deathadd','HospitalActivitesController@deathadd')->name('deathadd');

Route::get('deathlist','HospitalActivitesController@deathlist')->name('deathlist');
Route::post('deathinsert','HospitalActivitesController@deathinsert')->name('deathinsert');
Route::get('deathview/{id?}','HospitalActivitesController@deathview')->name('deathview');
Route::get('deathedit/{id?}','HospitalActivitesController@deathedit')->name('deathedit');
Route::get('deathdelete/{id?}','HospitalActivitesController@deathdelete')->name('deathdelete');
Route::post('deathupdate/{id?}','HospitalActivitesController@deathupdate')->name('deathupdate');
//Operation Reprot
Route::get('operationadd','HospitalActivitesController@operationadd')->name('operationadd');
Route::get('operationlist','HospitalActivitesController@operationlist')->name('operationlist');
Route::post('operationinsert','HospitalActivitesController@operationinsert')->name('operationinsert');
Route::get('operationview/{id?}','HospitalActivitesController@operationview')->name('operationview');
Route::get('operationedit/{id?}','HospitalActivitesController@operationedit')->name('operationedit');
Route::get('operationdelete/{id?}','HospitalActivitesController@operationdelete')->name('operationdelete');
Route::post('operationupdate/{id?}','HospitalActivitesController@operationupdate')->name('operationupdate');


//Slider
Route::get('slideradd','SliderController@slideradd')->name('slideradd');
Route::get('sliderlist','SliderController@sliderlist')->name('sliderlist');
Route::post('sliderinsert','SliderController@sliderinsert')->name('sliderinsert');
Route::post('sliderupdate/{id?}','SliderController@sliderupdate')->name('sliderupdate');
Route::get('slideredit/{id?}','SliderController@slideredit')->name('slideredit');
Route::get('sliderdelete/{id?}','SliderController@sliderdelete')->name('sliderdelete');


Route::get('generatePDF/{id?}','HospitalActivitesController@generatePDF')->name('generatePDF');

Route::get('generate-pdf','PDFController@generatePDF');


Route::get('emergency','ServicesController@emergency')->name('emergency');
Route::get('blood','ServicesController@blood')->name('blood');
Route::get('prayer','ServicesController@prayer')->name('prayer');
Route::get('pharmacy','ServicesController@pharmacy')->name('pharmacy');
Route::get('customer_service','ServicesController@customer_service')->name('customer_service');
Route::get('ambullence','ServicesController@ambullence')->name('ambullence');
Route::get('cafeteria','ServicesController@cafeteria')->name('cafeteria');
