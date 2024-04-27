@extends('layouts.admin')

@section('title')
Admin | Create User
@stop

@section('report')
<div class="col-lg-8">
    <div class="col-12">
        <div class="card">

            <div class="card-header d-flex justify-content-between">
                <h5 class="m-0">Users</h5>
                <a href="{{ route('users.index')}}" class="btn btn-danger">Back</a>
            </div>

            <div class="card-body">
                <form action="{{route('users.store')}}" method="POST">
                    @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    @csrf
                    <div class="row">
                        <div class="mb-3 mt-3 col-lg-4">
                            <label for="name" class="fw-bold">First Name</label>
                            <input type="text" name="firstname" class="form-control">
                        </div>
                        <div class="mb-3 mt-3 col-lg-4">
                            <label for="name" class="fw-bold">Last Name</label>
                            <input type="text" name="lastname" class="form-control">
                        </div>
                        <div class="mb-3 mt-3 col-lg-4">
                            <label for="name" class="fw-bold">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="mb-3 mt-3 col-lg-4">
                            <label for="name" class="fw-bold">Employment Number</label>
                            <input type="text" name="employment_number" class="form-control">
                        </div>
                        <div class="mb-3 mt-3 col-lg-4">
                            <label for="name" class="fw-bold">Department</label>
                            <input type="text" name="department" class="form-control">
                        </div>
                        <div class="mb-3 mt-3 col-lg-4">
                            <label for="name" class="fw-bold">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="user_type_id" class="form-label">Company</label>
                            <select class="form-select" id="user_type_id" name="user_type_id" required>
                                <option value="">Select Company</option>
                                @foreach ($userTypes as $userTypeId => $userTypeName)
                                <option value="{{ $userTypeId }}">{{ $userTypeName }}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="mb-3 mt-3 col-lg-6">
                            <label for="name" class="fw-bold">Roles</label>
                            <select name="roles[]" class="form-control" multiple>
                                <option value="">Select Role</option>
                                @foreach ($roles as $role)
                                <option value="{{$role}}">{{$role}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" id="status" name="status" value="1">

                        <div class="mb-3 mt-3 col-lg-12">
                            <button type="submit" class="btn btn-primary ">Save</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

@stop

@section('recent-activity')
<div class="card">
    <div class="filter">
        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
                <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
        </ul>
    </div>

    <div class="card-body">
        <h5 class="card-title">Recent Activity <span>| Today</span></h5>

        <div class="activity">

            <div class="activity-item d-flex">
                <div class="activite-label">32 min</div>
                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                <div class="activity-content">
                    Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a>
                    beatae
                </div>
            </div><!-- End activity item-->

            <div class="activity-item d-flex">
                <div class="activite-label">56 min</div>
                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                <div class="activity-content">
                    Voluptatem blanditiis blanditiis eveniet
                </div>
            </div><!-- End activity item-->

            <div class="activity-item d-flex">
                <div class="activite-label">2 hrs</div>
                <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                <div class="activity-content">
                    Voluptates corrupti molestias voluptatem
                </div>
            </div><!-- End activity item-->

            <div class="activity-item d-flex">
                <div class="activite-label">1 day</div>
                <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                <div class="activity-content">
                    Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati
                        voluptatem</a> tempore
                </div>
            </div><!-- End activity item-->

            <div class="activity-item d-flex">
                <div class="activite-label">2 days</div>
                <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                <div class="activity-content">
                    Est sit eum reiciendis exercitationem
                </div>
            </div><!-- End activity item-->

            <div class="activity-item d-flex">
                <div class="activite-label">4 weeks</div>
                <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                <div class="activity-content">
                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                </div>
            </div><!-- End activity item-->

        </div>

    </div>
</div>
@stop