@if (route_is(['projects','project-list']))
    <!-- Create Project Modal -->
    <div id="create_project" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('projects')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Project Name</label>
                                    <input class="form-control" type="text" name="name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Client</label>
                                    <select class="select2" name="client">
                                        @foreach (\App\Models\Client::get() as $client)
                                        <option value="{{$client->id}}">{{$client->firstname.' '.$client->lastname}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text" name="start_date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>End Date</label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" name="end_date" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Rate</label>
                                    <input placeholder="Rate in currency: 50" name="rate" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <select class="select" name="rate_type">
                                        <option>Hourly</option>
                                        <option>Fixed</option>
                                    </select>
                                </div>
                            </div> --><div class="col-sm-6">
                                <div class="form-group">
                                    <label>Project Type</label>
                                    <select class="select" name="priority">
                                        <option value="">Select project Type</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Priority</label>
                                    <select class="select" name="priority">
                                        <option>High</option>
                                        <option>Medium</option>
                                        <option>Low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Project Managers</label>
                                    <select class="select2" name="managers" multiple>
                                        <option>Select Project Managers</option>
                                        @foreach (\App\Models\Employee::get() as $employee)
                                            <option value="{{$employee->id}}">{{$employee->firstname.' '.$employee->lastname}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Project Leaders</label>
                                    <select class="select2" name="leader" multiple>
                                        <option>Select Project Leaders</option>
                                        @foreach (\App\Models\Employee::get() as $employee)
                                            <option value="{{$employee->id}}">{{$employee->firstname.' '.$employee->lastname}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Skills</label>
                                    <select class="select2" name="skills">
                                        <option>Select Skills</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Certifications</label>
                                    <select class="select2" name="certifications">
                                        <option>Select Certifications</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="team[]" value="1">
                        <!-- <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Add Team</label>
                                    <select class="select select2" multiple name="team[]">
                                        <option>High</option>
                                        @foreach (\App\Models\Employee::get() as $employee)
                                            <option value="{{$employee->id}}">{{$employee->firstname.' '.$employee->lastname}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                        </div> -->
                        <div class="form-group">
                            <label>Location</label>
                            <input class="form-control" name="location" type="text">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" rows="4" class="form-control summernote" placeholder="Enter your message here"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Upload Files</label>
                            <input class="form-control" name="project_files[]" multiple type="file">
                        </div>
                        <p>Resources Designations</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Choose Designation</label>
                                    <select class="select2" name="">
                                        <option>Fire Safty</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>No.of Resources</label>
                                    <input class="form-control" name=""  type="text" value="2">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Choose Designation</label>
                                    <select class="select2" name="">
                                        <option>Supervisor</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>No.of Resources</label>
                                    <input class="form-control" name=""  type="text" value="1">
                                </div>
                            </div>
                        </div>
                        <input type="radio" name="matching" checked> Automated Matching &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="matching"> Manual Matching
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary btn-sm">Add More</button>
                        
                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Create Project Modal -->

    <!-- Edit Project Modal -->
    <div id="edit_project" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('projects')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <input type="hidden" name="id" id="edit_id">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Project Name</label>
                                    <input class="form-control" type="text" name="name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Client</label>
                                    <select class="select2" name="client">
                                        @foreach (\App\Models\Client::get() as $client)
                                        <option value="{{$client->id}}">{{$client->firstname.' '.$client->lastname}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text" name="start_date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>End Date</label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" name="end_date" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Rate</label>
                                    <input placeholder="Rate in currency: 50" name="rate" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <select class="select" name="rate_type">
                                        <option>Hourly</option>
                                        <option>Fixed</option>
                                    </select>
                                </div>
                            </div> --><div class="col-sm-6">
                                <div class="form-group">
                                    <label>Project Type</label>
                                    <select class="select" name="priority">
                                        <option value="">Select project Type</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Priority</label>
                                    <select class="select" name="priority">
                                        <option>High</option>
                                        <option>Medium</option>
                                        <option>Low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Project Managers</label>
                                    <select class="select2" name="managers" multiple>
                                        <option>Select Project Managers</option>
                                        @foreach (\App\Models\Employee::get() as $employee)
                                            <option value="{{$employee->id}}">{{$employee->firstname.' '.$employee->lastname}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Project Leaders</label>
                                    <select class="select2" name="leader" multiple>
                                        <option>Select Project Leaders</option>
                                        @foreach (\App\Models\Employee::get() as $employee)
                                            <option value="{{$employee->id}}">{{$employee->firstname.' '.$employee->lastname}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Skills</label>
                                    <select class="select2" name="skills">
                                        <option>Select Skills</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Certifications</label>
                                    <select class="select2" name="certifications">
                                        <option>Select Certifications</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="team[]" value="1">
                        <!-- <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Add Team</label>
                                    <select class="select select2" multiple name="team[]">
                                        <option>High</option>
                                        @foreach (\App\Models\Employee::get() as $employee)
                                            <option value="{{$employee->id}}">{{$employee->firstname.' '.$employee->lastname}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                        </div> -->
                        <div class="form-group">
                            <label>Location</label>
                            <input class="form-control" name="location" type="text">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" rows="4" class="form-control summernote" placeholder="Enter your message here"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Upload Files</label>
                            <input class="form-control" name="project_files[]" multiple type="file">
                        </div>
                        <p>Resources Designations</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Choose Designation</label>
                                    <select class="select2" name="">
                                        <option>Fire Safty</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>No.of Resources</label>
                                    <input class="form-control" name=""  type="text" value="2">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Choose Designation</label>
                                    <select class="select2" name="">
                                        <option>Supervisor</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>No.of Resources</label>
                                    <input class="form-control" name=""  type="text" value="1">
                                </div>
                            </div>
                        </div>
                        <input type="radio" name="matching" checked> Automated Matching &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="matching"> Manual Matching
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary btn-sm">Add More</button>
                        
                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Project Modal -->
@endif

@if (route_is(['employees.attendance']))
    <!-- Add Attendance Modal -->
    <div class="modal custom-modal fade" id="add_attendance" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Attendance</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('employees.attendance')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Employee</label>
                            <select name="employee" class="select2">
                                <option value="null">Select Employee</option>
                                @foreach (\App\Models\Employee::get() as $employee)
                                    <option value="{{$employee->id}}">{{$employee->firstname.' '.$employee->lastname}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Checkin Time <span class="text-danger">*</span></label>
                            <input type="time" name="checkin" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Checkout Time <span class="text-danger">*</span></label>
                            <input name="checkout" class="form-control" type="time">
                        </div>
                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Attendance Modal -->

    <!-- Edit Attendance Modal -->
    <div class="modal custom-modal fade" id="edit_attendance" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Attendance</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('employees.attendance')}}" method="post">
                        @csrf
                        @method("PUT")
                        <input type="hidden" name="id" id="edit_id">
                        <div class="form-group">
                            <label>Employee</label>
                            <select name="employee" id="edit_employee" class="select2">
                                <option value="null">Select Employee</option>
                                @foreach (\App\Models\Employee::get() as $employee)
                                    <option value="{{$employee->id}}">{{$employee->firstname.' '.$employee->lastname}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Checkin Time <span class="text-danger">*</span></label>
                            <input type="time" name="checkin" id="edit_checkin" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Checkout Time <span class="text-danger">*</span></label>
                            <input name="checkout" id="edit_checkout" class="form-control" type="time">
                        </div>
                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Attendance Modal -->
@endif