@extends('admin.layout')
@section('content')
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-sm-7 col-md-7 col-7">
          <h2 class="card-title">All Student</h2>
        </div>
        @php
          $students=DB::table('students')->count('id');
        @endphp
        <div class="col-sm-5 col-md-5 col-5">
          <p style="font-family: cursive;font-size: 12px;">{{$students}}</p>
        </div>
      </div>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-1" class="card-float-chart"></div>
    </div>
  </div>
</div>
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-sm-7 col-md-7 col-7">
          <h2 class="card-title">All Teacher</h2>
        </div>
        @php
          $teacher=DB::table('teacher')->count('id');
        @endphp
        <div class="col-sm-5 col-md-5 col-5">
          <p style="font-family: cursive;font-size: 12px; text-align: center;">{{$teacher}}</p>
        </div>
      </div>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-2" class="card-float-chart"></div>
    </div>
  </div>
</div>
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-7"><h2 class="card-title">Semister Free</h2></div>
        <div class="col-md-5"><p style="font-size: 12px;">Mothly:$2500</p></div>
      </div>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-3" class="card-float-chart"></div>
    </div>
  </div>
</div>
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Revenue</h2>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-4" class="card-float-chart"></div>
    </div>
  </div>
</div>
</div>

<div class="row">
            <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="row">
                <div class="col-12 grid-margin d-flex align-items-stretch">
                  <div class="row">
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-facebook"><p class="mb-0">Computer Science and Technology</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-twitter"><p class="mb-0">Civil Technology</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-google"><p class="mb-0">Architectural Technology</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12">
                      <div class="social-panel bg-linkedin"><p class="mb-0">Electrical Technology</p></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 d-flex align-items-stretch">
                  <div class="card w-100">
                    <div class="card-body px-3" style="height:333px">
                      <div class="d-flex align-items-center justify-content-between">
                        <h2 class="card-title">Invites</h2>
                        <p class="mb-2 text-muted">This month</p>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-primary"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">450/900</div>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-primary"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">450/900</div>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-danger"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">450/900</div>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-success"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">450/900</div>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-warning"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">450/900</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="card task-list w-100">
                <div class="card-body">
                  <h2 class="card-title">Sit Remaining</h2>
                  <div class="task-cards selected">
                    <div class="wrapper d-flex flex-row align-items-center">
                      <div class="wrapper">
                        <p class="title">CST</p>
                      </div>
                      <p class="ticket-number ml-auto">#168</p>
                    </div>
                    <hr>
                    <div class="wrapper d-flex flex-row align-items-end justify-content-between">
                      <div class="amount d-flex flex-column">
                        <small>ET</small>
                        <small class="value">$25</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>CT</small>
                        <small class="value">60</small>
                      </div>
                      <i class="mdi mdi-delete-empty"></i>
                    </div>
                  </div>
                  <div class="task-cards">
                    <div class="wrapper d-flex flex-row align-items-center">
                      <div class="wrapper">
                        <p class="title">Stablished</p>
                      </div>
                      <p class="ticket-number ml-auto">#10 years</p>
                    </div>
                    <hr>
                    <div class="wrapper d-flex flex-row align-items-end justify-content-between">
                      <div class="amount d-flex flex-column">
                        <small>AMOUNT</small>
                        <small class="value">$2599</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>STATUS</small>
                        <small class="value">Monday, 12pm</small>
                      </div>
                      <i class="mdi mdi-delete-empty"></i>
                    </div>
                  </div>
                  <div class="task-cards">
                    <div class="wrapper d-flex flex-row align-items-center">
                      <div class="wrapper">
                        <p class="title">Sit Remaining</p>
                      </div>
                      <p class="ticket-number ml-auto">#169</p>
                    </div>
                    <hr>
                    <div class="wrapper d-flex flex-row align-items-end justify-content-between">
                      <div class="amount d-flex flex-column">
                        <small>AMOUNT</small>
                        <small class="value">$2599</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>STATUS</small>
                        <small class="value">Monday, 12pm</small>
                      </div>
                      <i class="mdi mdi-delete-empty"></i>
                    </div>
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
                      <h2>Admission Going on</h2>
                      <p>We began with intensive and in-depth session to collate the needs of stakeholders</p>
                      <a href="#" class="btn btn-outline-secondary">View Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection