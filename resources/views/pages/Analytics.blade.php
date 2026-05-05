@extends('welcome')
@push('css')
<style>
    *{
        font-family: 'Inter', sans-serif;
    }
    .hero-card {
            background: linear-gradient(90deg, #6a5af9 0%, #4ea8de 100%);
            border-radius: 24px;
            padding: 30px;
            color: white;
            border: none;
        }

        .btn-group-toggle .btn {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.85rem;
            padding: 5px 15px;
            border-radius: 12px;
            margin: 0 2px;
        }

        .btn-group-toggle .btn.active {
            background: rgba(255, 255, 255, 0.9);
            color: #6a5af9;
            font-weight: 600;
        }

        .date-range {
            font-size: 0.9rem;
            opacity: 0.8;
        }
        .metric-card {
            background:bs var(--bs-body-bg);
            color: bs var(--bs-body-color);
            border: 1px solid #f0f0f5;
            border-radius: 20px;
            padding: 10px;
            height: 100%;
            transition: transform 0.2s ease;
            padding-left: 25px;
        }

        .metric-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }

        .metric-label {
            color: #6c757d;
            font-size: 12px;
            font-weight: 500;
            padding-top: 10px;
        }

        .metric-value {
            font-size: 25px;
            font-weight: 700;
            color: #1a1d23;
            margin: 6px 0;
        }

        .metric-trend {
            font-size: 0.85rem;
            font-weight: 600;
            color: #10b981;
            margin-top: -7px;
        }

        .metric-trend span {
            color: #6c757d;
            font-weight: 400;
        }
        .icon-box {
            width: 40px;
            height: 40px;
            background: #f8f9fa;
            border-radius: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .funnel-container {
            background: #fff;
            border-radius: 20px;
            padding: 24px;
            border: 1px solid #f0f0f5;
        }
        [data-bs-theme="dark"] .funnel-container {
        background-color:var(--bs-body-bg);
        color:var(--bs-body-color);
        border: 2px solid #fff;    
        }

        .funnel-title {
            font-weight: 600;
            color:var(--bs-body-color);
            margin-bottom: 5px;
            font-size: 19px;
        }

        .funnel-subtitle {
            color: #6c757d;
            font-size: 0.85rem;
            margin-bottom: 30px;
        }
        .funnel-row {
            align-items: center;
        }

        .step-label {
            font-weight: 500;
            color:var(--bs-body-color);
            font-size: 0.95rem;
        }
        .funnel-bar {
            height: 32px;
            border-radius: 16px;
            background: linear-gradient(to right, #5e51e8, #3cc8f0);
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding-right: 15px;
            color: white;
            font-size: 0.8rem;
            font-weight: 600;
        }
        .conversion-rate {
            font-size: 0.85rem;
            padding-left: 10px;
            margin: 3px 0px 12px 30px;
            
        }
        .footer-badge {
            background-color: #f8fafc;
            border-radius: 30px;
            padding: 8px 0px;
            display: inline-block;
            font-size: 0.85rem;
            margin-top: 20px;
        }

        .badge-blue {
            color: #6d45f9;
            background: #cfc5f5;
            padding: 2px 10px;
            border-radius: 10px;
            margin-right: 8px;
        }
    .strong{
        color: #5694f8;
    }
    .dashboard-card {
            background: #fff;
            border: 1px solid #f0f0f5;
            border-radius: 20px;
            padding-top: 20px;
            padding-left: 15px;
            height: 100%;
        }

        .card-title {
            font-weight: 700;
            font-size: 15px;
            margin-bottom: 2px;
            font-weight: 700;
        }

        .card-subtitle {
            font-size: 13px;
            color: #6c757d;
            margin-bottom: 25px;
            padding-top: 10px;
        }
        .cohort-table {
            font-size:11px;
            vertical-align: middle;
        }

        .cohort-table th {
            font-weight: 700;
            color: #5c5c60;
            border: none;
            padding-bottom: 15px;
            font-size: 13px;
        }

        .cohort-table td {
            border: none;
            padding: 12px 5px;
            color: #36383a;
            font-weight: 700;
        }

        .percentage-pill {
            display: inline-block;
            padding: 8px 12px;
            border-radius: 12px;
            background: #ddbfe3cd;
            font-weight: 600;
            min-width: 60px;
            text-align: center;
        }

        .percentage-pill.high {
            background: #a28af8b6;
            color: #6d45f9;
        }
        .action-row {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .action-label {
            font-size: 0.8rem;
            width: 100px;
            text-align:start;
            color: #64748b;
        }

        .action-bar-container {
            flex-grow: 1;
        }

        .action-bar {
            height: 27px;
            border-radius: 0px 10px 10px 0px;
            background: linear-gradient(to right, #5e51e8, #3cc8f0);
        }

        .chart-scale {
            display: flex;
            justify-content: space-evenly;
            font-size: 12px;
            color: #cbd5e1;
            margin-top: 10px;
            margin-left: 10px;
            margin-right: 10px;
        }   
        .stat-card {
        background:bs var(--bs-body-bg);
        border: 1px solid #f0f0f5;
        border-radius: 20px;
        padding: 15px;
        height: 100%;
    }
    .chart-container {
        position: relative;
        width: 100%;
        height: 150px;
        margin-top: 20px;
    }
    .line-graph {
        stroke: #6a5af9;
        stroke-width: 3;
        fill: none;
        stroke-linecap: round;
        stroke-linejoin: round;
    }
    .axis-label {
        font-size: 10px;
        fill: #94a3b8;
    }
    .countries{
     width: 30px;
    }
    .progress{
     height: 6px;
     max-width: 150px;
    }
    .progress-bar{
     width:70%;
     background: #6a5af9;
    }
    .progress-bar2{
     width:50%;
     background: #6a5af9;
    }
    .progress-bar3{
     width:40%;
     background: #6a5af9;
    }
    .progress-bar4{
     width:30%;
     background: #6a5af9;
    }
    .progress-bar5{
     width:25%;
     background: #6a5af9;
    }
    .progress-bar6{
     width:20%;
     background: #6a5af9;
    }
    .progress-bar7{
     width:30%;
     background: #6a5af9;
    }
    .smallnum{
        font-weight: 550;
        font-size: 12px;
    }
    .flex-grow-1{
        width: 10px;
    }
</style>
@endpush
@section('pages')
<div class="main">
     <div class="container-fluid">
        <div class="card hero-card shadow-sm mb-4">
            <div class="d-flex flex-column flex-md-row justify-content-between     align-items-md-center">
                
                <div>
                    <h1 class="fw-bold mb-1 fs-2">Product Analytics</h1>
                    <p class="date-range mb-0">Feb 1 – Feb 25, 2026</p>
                </div>

                <div class="btn-group btn-group-toggle mt-3 mt-md-0" role="group">
                    <button type="button" class="btn">7d</button>
                    <button type="button" class="btn active rounded-pill">30d</button>
                    <button type="button" class="btn">90d</button>
                </div>

            </div>
        </div>
  </div>



    <div class="container-fluid mb-4">
        <div class="row g-4"> 
            <div class="col-12 col-md-4">
                <div class="metric-card shadow-sm"style="style="background-color: var(--bs-body-bg)"; color: var(--bs-body-color);>
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <div class="metric-label"style="color: var(--bs-body-color);">Daily Active Users</div>
                            <div class="metric-value"style="color: var(--bs-body-color);">4,281</div>
                        </div>
                        <div class="icon-box" style="background-color: #d8d1f4;">
                            <div class="svg1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#6d45f9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users h-5 w-5 text-chart-1" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><path d="M16 3.128a4 4 0 0 1 0 7.744"></path><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><circle cx="9" cy="7" r="4"></circle></svg>
                            </div>
                        </div>
                    </div>
                    <div class="metric-trend">
                        <i class="bi bi-graph-up-arrow"style="color: var(--bs-body-color);"></i> <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#2f9f3d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-3.5 w-3.5 text-success" aria-hidden="true"><path d="M16 7h6v6"></path><path d="m22 7-8.5 8.5-5-5L2 17"></path></svg>14.2% <span>vs last period</span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="metric-card shadow-sm">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <div class="metric-label"style="color: var(--bs-body-color);">Avg Session Duration</div>
                            <div class="metric-value"style="color: var(--bs-body-color);">8m 42s</div>
                        </div>
                        <div class="icon-box" style="background-color: #bbdff2;">
                            <div class="svg2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#0090df" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-5 w-5 text-chart-2" aria-hidden="true"><path d="M12 6v6l4 2"></path><circle cx="12" cy="12" r="10"></circle></svg>
                            </div>
                        </div>
                    </div>
                    <div class="metric-trend">
                        <i class="bi bi-graph-up-arrow"style="color: var(--bs-body-color);"></i><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#2f9f3d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-3.5 w-3.5 text-success" aria-hidden="true"><path d="M16 7h6v6"></path><path d="m22 7-8.5 8.5-5-5L2 17"></path></svg>146.8% <span>vs last period</span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="metric-card shadow-sm">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <div class="metric-label"style="color: var(--bs-body-color);">Feature Activation Rate</div>
                            <div class="metric-value"style="color: var(--bs-body-color);">72.4%</div>
                        </div>
                        <div class="icon-box" style="background-color: #cef4eb;">
                            <div class="svg3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#00b388" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles h-5 w-5 text-chart-3" aria-hidden="true"><path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"></path><path d="M20 2v4"></path><path d="M22 4h-4"></path><circle cx="4" cy="20" r="2"></circle></svg>
                            </div>
                        </div>
                    </div>
                    <div class="metric-trend">
                        <i class="bi bi-graph-up-arrow"></i> <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#2f9f3d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-3.5 w-3.5 text-success" aria-hidden="true"><path d="M16 7h6v6"></path><path d="m22 7-8.5 8.5-5-5L2 17"></path></svg>143.1% <span>vs last period</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

  <div class="container-fluid mb-4">
      <div class="funnel-container shadow-sm">
            <h5 class="funnel-title">Conversion Funnel</h5>
            <p class="funnel-subtitle"style="color: var(--bs-body-color);">Visitor-to-paid pipeline — step conversion rates shown between stages</p>
            <div class="row funnel-row">
                <div class="col-3 col-md-2 step-label fw-bold">Visitors</div>
                <div class="col-9 col-md-10 p-0">
                    <div class="funnel-bar" style="width: 100%; height:38px;">28,400</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-10">
                    <p class="conversion-rate text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right h-3 w-3 text-muted-foreground" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>17% conversion</p>
                </div>
            </div>

            <div class="row funnel-row">
                <div class="col-3 col-md-2 step-label fw-bold">Sign Up</div>
                <div class="col-9 col-md-10 p-0">
                    <div class="funnel-bar" style="width: 22%; height:38px;">4,820</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-10">
                    <p class="conversion-rate"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right h-3 w-3 text-muted-foreground" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>17 75% conversion</p>
                </div>
            </div>

            <div class="row funnel-row">
                <div class="col-3 col-md-2 step-label fw-bold">Onboarding</div>
                <div class="col-9 col-md-10 p-0">
                    <div class="funnel-bar" style="width: 20%; height:38px;">3,614</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-10">
                    <p class="conversion-rate"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right h-3 w-3 text-muted-foreground" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>17 80% conversion</p>
                </div>
            </div>

            <div class="row funnel-row">
                <div class="col-3 col-md-2 step-label fw-bold">Activated</div>
                <div class="col-9 col-md-10 p-0">
                    <div class="funnel-bar" style="width: 18%; height:38px;">2,891</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-10">
                    <p class="conversion-rate"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right h-3 w-3 text-muted-foreground" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>17 35% conversion</p>
                </div>
            </div>

            <div class="row funnel-row">
                <div class="col-3 col-md-2 step-label fw-bold">Paid</div>
                <div class="col-9 col-md-10 p-0">
                    <div class="funnel-bar" style="width: 10%; height:38px;">1,012</div>
                </div>
            </div>

            <div class="footer-badge w-100 text">
                <span class="badge-blue">Overall</span>
                <span class="text-secondary">End-to-end conversion: </span>
                <strong class="strong">3.6%</strong>
                <span class="text-muted ms-1">(28,400 visitors → 1,012 paid)</span>
            </div>
     </div>
  </div>

    <div class="container-fluid">
        <div class="row g-4 mb-4">
            <div class="col-12 col-md-7">
                <div class="dashboard-card shadow-sm" style="background-color: var(--bs-body-bg)"; color: var(--bs-body-color);>
                    <h6 class="card-title">User Retention Cohort</h6>
                    <p class="card-subtitle"style="color: var(--bs-body-color);">Weekly retention rates by signup cohort</p>
                    
                    <div class="table-responsive fw-bold">
                        <table class="table cohort-table">
                            <thead>
                                <tr>
                                    <th>Cohort</th>
                                    <th>Week 0</th>
                                    <th>Week 1</th>
                                    <th>Week 2</th>
                                    <th>Week 3</th>
                                    <th>Week 4</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Feb 3</td>
                                    <td><span class="percentage-pill high">100%</span></td>
                                    <td><span class="percentage-pill">68%</span></td>
                                    <td><span class="percentage-pill">52%</span></td>
                                    <td><span class="percentage-pill">44%</span></td>
                                    <td><span class="percentage-pill">38%</span></td>
                                </tr>
                                <tr>
                                    <td>Feb 10</td>
                                    <td><span class="percentage-pill high">100%</span></td>
                                    <td><span class="percentage-pill">72%</span></td>
                                    <td><span class="percentage-pill">58%</span></td>
                                    <td><span class="percentage-pill">48%</span></td>
                                    <td><span class="percentage-pill">41%</span></td>
                                </tr>
                                <tr>
                                    <td>Feb 17</td>
                                    <td><span class="percentage-pill high">100%</span></td>
                                    <td><span class="percentage-pill">65%</span></td>
                                    <td><span class="percentage-pill">50%</span></td>
                                    <td><span class="percentage-pill">42%</span></td>
                                    <td><span class="text-muted">—</span></td>
                                </tr>
                                <tr>
                                    <td>Feb 17</td>
                                    <td><span class="percentage-pill high">100%</span></td>
                                    <td><span class="percentage-pill">65%</span></td>
                                    <td><span class="percentage-pill">50%</span></td>
                                    <td><span class="text-muted">—</span></td> 
                                    <td><span class="text-muted">—</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5">
                <div class="dashboard-card shadow-sm" style="background-color: var(--bs-body-bg)"; color: var(--bs-body-color);>
                    <h6 class="card-title">Top User Actions</h6>
                    <p class="card-subtitle"style="color: var(--bs-body-color);">Most frequent product interactions</p>

                    <div class="action-row">
                        <div class="action-label">Dashboard View</div>
                        <div class="action-bar-container">
                            <div class="action-bar" style="width: 95%;"></div>
                        </div>
                    </div>
                    <div class="action-row">
                        <div class="action-label">API Call</div>
                        <div class="action-bar-container">
                            <div class="action-bar" style="width: 75%;"></div>
                        </div>
                    </div>
                    <div class="action-row">
                        <div class="action-label">Create Project</div>
                        <div class="action-bar-container">
                            <div class="action-bar" style="width: 55%;"></div>
                        </div>
                    </div>
                    <div class="action-row">
                        <div class="action-label">Invite Member</div>
                        <div class="action-bar-container">
                            <div class="action-bar" style="width: 35%;"></div>
                        </div>
                    </div>
                    <div class="action-row">
                        <div class="action-label">Export Data</div>
                        <div class="action-bar-container">
                            <div class="action-bar" style="width: 25%;"></div>
                        </div>
                    </div>

                    <div class="chart-scale">
                        <span>0</span>
                        <span>750</span>
                        <span>1.5k</span>
                        <span>2.3k</span>
                        <span>3.0k</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <div class="container-fluid">
        <div class="row g-4">
            <div class="col-12 col-lg-6 col-md-12">
                <div class="stat-card shadow-sm">
                    <h6 class="fw-bold mb-1">Users by Region</h6>
                    <p class="text-muted small mb-4">Geographic distribution of active users</p>
                    
                    <div class="d-flex align-items-center mb-3">
                        <span class="text-muted small fw-bold countries">US</span>
                        <span class="small fw-meduin flex-grow-1 ms-2">United States</span>
                        <div class="progress flex-grow-1">
                            <div class="progress-bar"></div>
                        </div>
                        <span class="smallnum">1,284</span>
                        <span class="text-muted small ms-3 fs-lighter">30%</span>
                    </div>

                    <div class="d-flex align-items-center mb-3">
                        <span class="text-muted small fw-bold countries">DE</span>
                        <span class="small fw-medium flex-grow-1 ms-2">United States</span>
                        <div class="progress flex-grow-1 mx-3">
                            <div class="progress-bar2"></div>
                        </div>
                        <span class="smallnum">812</span>
                        <span class="text-muted small ms-2">19%</span>
                    </div>

                    <div class="d-flex align-items-center mb-3">
                        <span class="text-muted small fw-bold countries">GB</span>
                        <span class="small fw-medium flex-grow-1 ms-2">United Kingdom</span>
                        <div class="progress flex-grow-1 mx-3">
                            <div class="progress-bar3"></div>
                        </div>
                        <span class="smallnum">641</span>
                        <span class="text-muted small ms-2">20%</span>
                    </div>

                    <div class="d-flex align-items-center mb-3">
                        <span class="text-muted small fw-bold countries">CB</span>
                        <span class="small fw-medium flex-grow-1 ms-2">Canada</span>
                        <div class="progress flex-grow-1 mx-3">
                            <div class="progress-bar4"></div>
                        </div>
                        <span class="smallnum fw-bold">427</span>
                        <span class="text-muted small ms-2">15%</span>
                    </div>

                    <div class="d-flex align-items-center mb-3">
                        <span class="text-muted small fw-bold countries">BR</span>
                        <span class="small fw-medium flex-grow-1 ms-2">Brazil</span>
                        <div class="progress flex-grow-1 mx-3">
                            <div class="progress-bar5"></div>
                        </div>
                        <span class="smallnum fw-bold">384</span>
                        <span class="text-muted small ms-2">10%</span>
                    </div>

                    <div class="d-flex align-items-center mb-3">
                        <span class="text-muted small fw-bold countries">JP</span>
                        <span class="small fw-medium flex-grow-1 ms-2">Japan</span>
                        <div class="progress flex-grow-1 mx-3">
                            <div class="progress-bar6"></div>
                        </div>
                        <span class="smallnum fw-bold">342</span>
                        <span class="text-muted small ms-2">9%</span>
                    </div>

                    <div class="d-flex align-items-center mb-3">
                        <span class="text-muted small fw-bold countries">AU</span>
                        <span class="small fw-medium flex-grow-1 ms-2">AUSTRLLIA</span>
                        <div class="progress flex-grow-1 mx-3">
                            <div class="progress-bar7"></div>
                        </div>
                        <span class="smallnum fw-bold">291</span>
                        <span class="text-muted small ms-2">8%</span>
                    </div>

                    
              </div>
            </div>

            <div class="col-12 col-lg-6 col-md-12">
                <div class="stat-card shadow-sm">
                    <h6 class="fw-bold mb-1">Active Users Trend</h6>
                    <p class="text-muted small mb-0">Daily active users over the last 14 days</p>

                    <div class="chart-container">
                        <svg viewBox="0 0 400 150" width="100%" height="100%" preserveAspectRatio="none">
                            <line x1="0" y1="20" x2="400" y2="20" stroke="#f1f5f9" />
                            <line x1="0" y1="70" x2="400" y2="70" stroke="#f1f5f9" />
                            <line x1="0" y1="120" x2="400" y2="120" stroke="#f1f5f9" />

                            <path class="line-graph" d="M0,100 Q50,80 80,40 T150,110 T250,50 T350,30 L400,45" />

                            <text x="0" y="25" class="axis-label">4.5k</text>
                            <text x="0" y="75" class="axis-label">4.0k</text>
                            <text x="0" y="125" class="axis-label">3.3k</text>
                        </svg>
                    </div>

                    <div class="d-flex justify-content-between mt-2 px-2 text-muted" style="font-size: 10px;">
                        <span>12</span><span>14</span><span>16</span><span>18</span><span>20</span><span>22</span><span>24</span>
                    </div>
                </div>
            </div>
        </div>
  </div>
</div>
@endsection