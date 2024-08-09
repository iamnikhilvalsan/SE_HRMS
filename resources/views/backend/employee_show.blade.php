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
		<h3 class="page-title">{{$employee->firstname.' '.$employee->lastname}}</h3>
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
			<li class="breadcrumb-item active">show employee</li>
		</ul>
	</div>
	
</div>
@endsection


@section('content')
     <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="project-title">
                            <div class="col-lg-9 col-xl-9 pull-left">
                                <h5 class="card-title">{{$employee->firstname.' '.$employee->lastname}}</h5>
                                <p class="m-0">ID: {{$employee->uuid}}</p>
                                <p class="m-0">Designation: {{$employee->designation->name}}</p>
                                <p class="m-0">Email: {{$employee->email}}</p>
                                <p class="m-0">Phone: {{$employee->phone}}</p>
                            </div>
                            <div class="col-lg-3 col-xl-3 pull-left">
                                <div class="profile-img pull-right">
                                    <a href="javascript:void(0)" class="avatar"><img alt="avatar" src="@if(!empty($employee->avatar)) {{asset('storage/employees/'.$employee->avatar)}} @else assets/img/profiles/default.jpg @endif"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-selected="false">
                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                    <span class="d-none d-sm-block">Skills</span>    
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#profile" role="tab" aria-selected="true">
                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                    <span class="d-none d-sm-block">Certifications</span>    
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="project-task">
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="qall_tasks">
                                            <div class="task-wrapper">
                                                <div class="task-list-container">
                                                    <div class="task-list-body">
                                                        <ul id="task-list">
                                                            <li class="task">
                                                                <div class="task-container">
                                                                    <span class="task-label">Skills</span>
                                                                    <span class="task-label text-right">Rating</span>
                                                                </div>
                                                            </li>
                                                            <li class="task">
                                                                <div class="task-container">
                                                                    <span class="task-action-btn task-check">
                                                                        <span class="action-circle large complete-btn" title="Mark Complete">
                                                                            <i class="material-icons">person</i>
                                                                        </span>
                                                                    </span>
                                                                    <span class="task-label" contenteditable="true">Technology</span>
                                                                    <span class="task-label text-right" contenteditable="true">4</span>
                                                                    <span class="task-action-btn task-btn-right">
                                                                        <span class="action-circle large delete-btn" title="Delete Task">
                                                                            <i class="material-icons">delete</i>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li class="task">
                                                                <div class="task-container">
                                                                    <span class="task-action-btn task-check">
                                                                        <span class="action-circle large complete-btn" title="Mark Complete">
                                                                            <i class="material-icons">person</i>
                                                                        </span>
                                                                    </span>
                                                                    <span class="task-label" contenteditable="true">Creativity</span>
                                                                    <span class="task-label text-right" contenteditable="true">5</span>
                                                                    <span class="task-action-btn task-btn-right">
                                                                        <span class="action-circle large delete-btn" title="Delete Task">
                                                                            <i class="material-icons">delete</i>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="task-list-footer">
                                                        <div class="new-task-wrapper" style="overflow: visible">
                                                            <textarea  id="new-task" placeholder="Add Skills here. . ."></textarea>
                                                            <span class="btn" id="close-task-panel"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile" role="tabpanel">
                            <button type="button" class="btn btn-primary pull-right mb-1" data-toggle="modal" data-target="#addCertificateModal">Add Certificate</button>
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Name</th>
                                            <th>Expiry</th>
                                            <th>Certification Name</th>
                                            <th>Authority</th>
                                            <th>Issue Date</th>
                                            <th>View CV</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>2025-12-31</td>
                                            <td>Certified Professional</td>
                                            <td>Certification Authority</td>
                                            <td>2023-01-01</td>
                                            <td><a href="#" class="btn btn-primary">View CV</a></td>
                                        </tr>
                                        <tr>
                                            <td>Jane Smith</td>
                                            <td>2024-06-30</td>
                                            <td>Advanced Certification</td>
                                            <td>Authority Name</td>
                                            <td>2022-02-15</td>
                                            <td><a href="#" class="btn btn-primary">View CV</a></td>
                                        </tr>
                                        <!-- Add more rows as needed -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- The Modal -->
    <div class="modal fade" id="addCertificateModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Certificate</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="expiry">Expiry:</label>
                            <input type="date" class="form-control" id="expiry">
                        </div>
                        <div class="form-group">
                            <label for="upload">Upload File:</label>
                            <input type="file" class="form-control-file" id="upload">
                        </div>
                        <div class="form-group">
                            <label for="certificationName">Certification Name:</label>
                            <input type="text" class="form-control" id="certificationName" placeholder="Enter Certification Name">
                        </div>
                        <div class="form-group">
                            <label for="authority">Authority:</label>
                            <input type="text" class="form-control" id="authority" placeholder="Enter Authority">
                        </div>
                        <div class="form-group">
                            <label for="issueDate">Issue Date:</label>
                            <input type="date" class="form-control" id="issueDate">
                        </div>
                    </form>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
@endsection


@section('scripts')
<!-- Select2 JS -->
<script src="{{asset('assets/plugins/select2/select2.min.js')}}"></script>
<!-- Datatable JS -->
<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>
@endsection