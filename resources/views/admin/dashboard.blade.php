<x-head>
</x-head>

<x-header>
</x-header>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Welcome, {{ $admin->name }}!</h5>
                </div>
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    <h2>Schools</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($schools as $school)
                                <tr>
                                    <td>{{ $school->id }}</td>
                                    <td>{{ $school->name }}</td>
                                    <td>{{ $school->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <h2>Students</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>School ID</th>
                                <th>Company ID</th>
                                <th>Phone Number</th>
                                <th>Level</th>
                                <th>Year</th>
                                <th>Email</th>
                                <th>Course</th>
                                <th>Department</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{ $student->matric_number}}</td>
                                    <td>{{ $student->firstname }}</td>
                                    <td>{{ $student->last_ame }}</td>
                                    <td>{{ $student->school_id }}</td>
                                    <td>{{ $student->company_id }}</td>
                                    <td>{{ $student->phone_number }}</td>
                                    <td>{{ $student->level }}</td>
                                    <td>{{ $student->year }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->course }}</td>
                                    <td>{{ $student->department }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <h2>Logbooks</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Matric Number</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Feedback</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach($logbooks as $logbook)
                                <tr>
                                    <td>{{ $logbook->id }}</td>
                                    <td>{{ $logbook->matric_number }}</td>
                                    <td>{{ $logbook->title }}</td>
                                    <td>{{ $logbook->description }}</td>
                                    <td>{{ $logbook->status }}</td>
                                    <td>{{ $logbook->feedback }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <h2>Companies</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($companies as $company)
                                <tr>
                                    <td>{{ $company->id }}</td>
                                    <td>{{ $company->name }}</td>
                                    <td>{{ $company->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <h2>Student Forms</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Matric Number</th>
                                <th>School Name</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Company ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($student_forms as $form)
                                <tr>
                                    <td>{{ $form->id }}</td>
                                    <td>{{ $form->matric_number }}</td>
                                    <td>{{ $form->school_name }}</td>
                                    <td>{{ $form->phone_number }}</td>
                                    <td>{{ $form->address }}</td>
                                    <td>{{ $form->firstname }}</td>
                                    <td>{{ $form->lastname }}</td>
                                    <td>{{ $form->company_id }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <h2>Company Forms</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Company Name</th>
                                <th>Company Email</th>
                                <th>Company Phone Number</th>
                                <th>Added by</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($company_forms as $form)
                                <tr>
                                    <td>{{ $form->id }}</td>
                                    <td>{{ $form->companyname }}</td>
                                    <td>{{ $form->Company_email }}</td>
                                    <td>{{ $form->Company_phone_number }}</td>
                                    <td>{{ $form->matric_number }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <h2>Events</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Event Name</th>
                                <th>Event Date</th>
                                <th>Event Time</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($events as $event)
                                <tr>
                                    <td>{{ $event->id }}</td>
                                    <td>{{ $event->title }}</td>
                                    <td>{{ $event->start_date }}</td>
                                    <td>{{ $event->end_date }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<x-footer>
</x-footer>
