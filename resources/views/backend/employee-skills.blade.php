@extends('layouts.backend')

@section('styles')	
<!-- Select2 CSS -->
<link rel="stylesheet" href="{{asset('assets/plugins/select2/select2.min.css')}}">

<!-- Datatable CSS -->
<link rel="stylesheet" href="{{asset('assets/css/dataTables.bootstrap4.min.css')}}">
@endsection

@section('page-header')
<div class="row align-items-center">
	<div class="col">
		<h3 class="page-title">Skills</h3>
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
			<li class="breadcrumb-item active">Skills</li>
		</ul>
	</div>
	<div class="col-auto float-right ml-auto">
		<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_company"><i class="fa fa-plus"></i> Add Skills</a>
	</div>
</div>
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped custom-table mb-0 datatable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Skill</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
</div>
<!-- /Page Content -->

<!-- Add Overtime Modal -->
<div id="add_company" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Skills</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('skills')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Skill <span class="text-danger">*</span></label>
                        <input class="form-control" name="date" type="text">
                    </div>
                    <div class="submit-section">
                        <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add Overtime Modal -->

<!-- Edit Overtime Modal -->
<!-- <div id="edit_overtime" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Overtime</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('overtime')}}" method="post">
                    @csrf
                    @method("PUT")
                    <input type="hidden" name="id" id="edit_id">
                    <div class="form-group">
                        <label>Select Employee <span class="text-danger">*</span></label>
                        <select class="select" id="edit_employee" name="employee">
                            <option>-</option>
                            @foreach (\App\Models\Employee::get() as $employee)
                                <option value="{{$employee->id}}">{{$employee->firstname.' '.$employee->lastname}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Overtime Date <span class="text-danger">*</span></label>
                        <div class="cal-icon">
                            <input class="form-control datetimepicker" name="date" id="edit_date" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Overtime Hours <span class="text-danger">*</span></label>
                        <input class="form-control" name="hours" id="edit_hours" type="text">
                    </div>
                    <div class="form-group">
                        <label>Description <span class="text-danger">*</span></label>
                        <textarea rows="4" class="form-control" id="edit_description" name="description"></textarea>
                    </div>
                    <div class="submit-section">
                        <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->
<!-- /Edit Overtime Modal -->

<x-modals.delete route="overtime" title="Tax" />

@endsection


@section('scripts')
<!-- Select2 JS -->
<script src="{{asset('assets/plugins/select2/select2.min.js')}}"></script>
<!-- Datatable JS -->
<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>
<script>
    /* $(document).ready(function(){
        $('table').on('click','.editbtn', function(){
            var id = $(this).data('id');
            var employee = $(this).data('employee');
            var date = $(this).data('date');
            var hours = $(this).data('hours');
            var description = $(this).data('description');
         
            $('#edit_overtime').modal('show');
            $('#edit_id').val(id);
            $('#edit_employee').val(employee).trigger('change');
            $('#edit_date').val(date);
            $('#edit_hours').val(hours);
            $('#edit_description').val(description);
            // check employee select
            $("#edit_employee option").each(function()
            {
                if($(this).val() == employee){
                    $(this).attr('selected','selected');
                }
            });
        });
    }); */
    </script>
@endsection