@extends('layout')
@section('content')

           <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">All Students</h2>
                  @php
                    $student = DB::table('student_tbl')
                    ->count('student_id');
                  @endphp
                  <p style="font-size: 22px; font-weight: 700; text-align: center; color: green;">{{$student}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-1" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">All Teachers</h2>
                  @php
                    $teacher = DB::table('teacher_tbl')
                    ->count('teachers_id');
                  @endphp
                  <p style="font-size: 22px; font-weight: 700; text-align: center; color: blue;">{{$teacher}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Tution Fee</h2>
                  <p style="font-size: 22px; font-weight: 700; text-align: center;">210</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-3" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Calender</h2>
                  <p style="font-size: 22px; font-weight: 700; text-align: center;">20</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-4" class="card-float-chart"></div>
                </div>
              </div>
            </div>
          
          
                
            


            <div class="row">

            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Play</h2>
                  @php
                    $student = DB::table('student_tbl')->where('student_class','1')
                    ->count('student_id');
                    $teacher = DB::table('teacher_tbl')->where('teachers_dept','1')
                    ->count('teachers_id');
                  @endphp
                  <p style="font-size: 22px; font-weight: 700; text-align: center; color: green;">All Students  {{ $student}}</p>
                  <p style="font-size: 22px; font-weight: 700; text-align: center; color: orange;">All Teachers  {{ $teacher}}</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Nursery</h2>
                  @php
                    $student = DB::table('student_tbl')->where('student_class','2')
                    ->count('student_id');
                    $teacher = DB::table('teacher_tbl')->where('teachers_dept','2')
                    ->count('teachers_id');
                  @endphp
                  <p style="font-size: 22px; font-weight: 700; text-align: center; color: green;">All Students  {{ $student}}</p>
                  <p style="font-size: 22px; font-weight: 700; text-align: center; color: orange;">All Teachers  {{ $teacher}}</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">One</h2>
                  @php
                    $student = DB::table('student_tbl')->where('student_class','3')
                    ->count('student_id');
                    $teacher = DB::table('teacher_tbl')->where('teachers_dept','3')
                    ->count('teachers_id');
                  @endphp
                  <p style="font-size: 22px; font-weight: 700; text-align: center; color: green;">All Students  {{ $student}}</p>
                  <p style="font-size: 22px; font-weight: 700; text-align: center; color: orange;">All Teachers  {{ $teacher}}</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Two</h2>
                  @php
                    $student = DB::table('student_tbl')->where('student_class','4')
                    ->count('student_id');
                    $teacher = DB::table('teacher_tbl')->where('teachers_dept','4')
                    ->count('teachers_id');
                  @endphp
                  <p style="font-size: 22px; font-weight: 700; text-align: center; color: green;">All Students  {{ $student}}</p>
                  <p style="font-size: 22px; font-weight: 700; text-align: center; color: orange;">All Teachers  {{ $teacher}}</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Three</h2>
                  @php
                    $student = DB::table('student_tbl')->where('student_class','5')
                    ->count('student_id');
                    $teacher = DB::table('teacher_tbl')->where('teachers_dept','5')
                    ->count('teachers_id');
                  @endphp
                  <p style="font-size: 22px; font-weight: 700; text-align: center; color: green;">All Students  {{ $student}}</p>
                  <p style="font-size: 22px; font-weight: 700; text-align: center; color: orange;">All Teachers  {{ $teacher}}</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Four</h2>
                  @php
                    $student = DB::table('student_tbl')->where('student_class','6')
                    ->count('student_id');
                    $teacher = DB::table('teacher_tbl')->where('teachers_dept','6')
                    ->count('teachers_id');
                  @endphp
                  <p style="font-size: 22px; font-weight: 700; text-align: center; color: green;">All Students  {{ $student}}</p>
                  <p style="font-size: 22px; font-weight: 700; text-align: center; color: orange;">All Teachers  {{ $teacher}}</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Five</h2>
                  @php
                    $student = DB::table('student_tbl')->where('student_class','7')
                    ->count('student_id');
                    $teacher = DB::table('teacher_tbl')->where('teachers_dept','7')
                    ->count('teachers_id');
                  @endphp
                  <p style="font-size: 22px; font-weight: 700; text-align: center; color: green;">All Students  {{ $student}}</p>
                  <p style="font-size: 22px; font-weight: 700; text-align: center; color: orange;">All Teachers  {{ $teacher}}</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Six</h2>
                  @php
                    $student = DB::table('student_tbl')->where('student_class','8')
                    ->count('student_id');
                    $teacher = DB::table('teacher_tbl')->where('teachers_dept','8')
                    ->count('teachers_id');
                  @endphp
                  <p style="font-size: 22px; font-weight: 700; text-align: center; color: green;">All Students  {{ $student}}</p>
                  <p style="font-size: 22px; font-weight: 700; text-align: center; color: orange;">All Teachers  {{ $teacher}}</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Seven</h2>
                  @php
                    $student = DB::table('student_tbl')->where('student_class','9')
                    ->count('student_id');
                    $teacher = DB::table('teacher_tbl')->where('teachers_dept','9')
                    ->count('teachers_id');
                  @endphp
                  <p style="font-size: 22px; font-weight: 700; text-align: center; color: green;">All Students  {{ $student}}</p>
                  <p style="font-size: 22px; font-weight: 700; text-align: center; color: orange;">All Teachers  {{ $teacher}}</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Eight</h2>
                  @php
                    $student = DB::table('student_tbl')->where('student_class','10')
                    ->count('student_id');
                    $teacher = DB::table('teacher_tbl')->where('teachers_dept','10')
                    ->count('teachers_id');
                  @endphp
                  <p style="font-size: 22px; font-weight: 700; text-align: center; color: green;">All Students  {{ $student}}</p>
                  <p style="font-size: 22px; font-weight: 700; text-align: center; color: orange;">All Teachers  {{ $teacher}}</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Nine</h2>
                  @php
                    $student = DB::table('student_tbl')->where('student_class','11')
                    ->count('student_id');
                    $teacher = DB::table('teacher_tbl')->where('teachers_dept','11')
                    ->count('teachers_id');
                  @endphp
                  <p style="font-size: 22px; font-weight: 700; text-align: center; color: green;">All Students  {{ $student}}</p>
                  <p style="font-size: 22px; font-weight: 700; text-align: center; color: orange;">All Teachers  {{ $teacher}}</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Ten</h2>
                  @php
                    $student = DB::table('student_tbl')->where('student_class','12')
                    ->count('student_id');
                    $teacher = DB::table('teacher_tbl')->where('teachers_dept','12')
                    ->count('teachers_id');
                  @endphp
                  <p style="font-size: 22px; font-weight: 700; text-align: center; color: green;">All Students  {{ $student}}</p>
                  <p style="font-size: 22px; font-weight: 700; text-align: center; color: orange;">All Teachers  {{ $teacher}}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card user-visits w-100">
                    <div class="card-body">
                      <h2 class="card-title">User Visits</h2>
                      <div class="row mt-5">
                        <div class="col-6">
                          <p class="views text-muted">Views</p>
                          <p class="section">6080 sessions</p>
                          <a href="#" class="btn btn-secondary btn-sm">More Details</a>
                        </div>
                        <div class="col-6">
                          <div id="sparkline-line-chart"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 global-card">
                  <div class="card bg-warning w-100">
                    <div class="card-body text-white d-flex flex-column align-items-center justify-content-center">
                      <h2>Batchly is a global</h2>
                      <p>We began with intensive and in-depth session to collate the needs of stakeholders</p>
                      <a href="#" class="btn btn-outline-secondary">View Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endsection