@extends('welcome')
@push('css')
<style>
  *{
     font-family: 'Inter', sans-serif;
    }
 .main2{
    height: 100%;
 }   
.box-0{
    background: linear-gradient(to right, #7c3aed, #2563eb);
}
.graph{
    color: rgb(139, 236, 139);
    font-size: 12px;
    margin-left: 10px;
    margin-top: 10px;
}
.height2{
    height: 255px;
}
.svgbox{
    font-size: 12px;
    margin-left: 10px;
    margin-top: 10px;
}
.box {
    background: #fff;
    border-radius: 16px;
    padding: 20px 24px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.05);
    height: 100%;
  }

  .box-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .title {
    font-size: 16px;
    font-weight: 600;
    color:var(--bs-body-color);
  }

  .subtitle {
    font-size: 12px;
    color:var(--bs-body-color);
    margin-top: 2px;
  }

  .toggle {
    display: flex;
    gap: 6px;
  }

  .pill {
    font-size: 11px;
    padding: 4px 10px;
    border-radius: 20px;
    background: #f1f5f9;
    color: #6b7280;
  }

  .pill.active {
    background: #eef2ff;
    color: #4f46e5;
    font-weight: 600;
  }

  .chart {
    position: relative;
    height: 295px;
    margin-top: 20px;
  }
[data-bs-theme="dark"] .box {
        background-color:var(--bs-bs-bg);
        color:var(--bs-body-color);
        border: 2px solid #fff;
}
  .y-label {
    position: absolute;
    left: 0;
    font-size: 12px;
  }

  .y1 { top: 20; }
  .y2 { top: 70px; }
  .y3 { top: 130px; }
  .y4 { top: 190px; }
  .y5 { top: 250px; }

  .line {
    position: absolute;
    left: 40px;
    right: 10px;
    bottom: 20px;
    height: 140px;
    border-bottom: 2px solid transparent;
  }

  .line svg {
    width: 100%;
    height: 100%;
  }
  .x-labels {
    display: flex;
    justify-content: space-between;
    margin-left: 40px;
    margin-top: 25px;
    font-size: 12px;
  }
  .sprint{
    font-size: 12px;
  }
  .sprint-card {
    border-radius: 16px;
    border: none;
    box-shadow: 0 4px 20px rgba(0,0,0,0.05);
  }

  .progress {
    height: 11px;
    border-radius: 10px;
    background: #eef2f7;
    overflow: hidden;
  }

  .progress-bar.completed {
    background: linear-gradient(to right, #6366f1, #8b5cf6);
  }

  .progress-bar.progressing {
    background: #0090df;
  }

  .progress-bar.todo {
    background: #f97316;
  }

  .dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    display: inline-block;
    margin-right: 6px;
  }

  .dot.completed 
  { background: #6366f1; 
  }
  .dot.progressing{
     background: #38bdf8; 
    }
  .dot.todo {
     background: #f97316; 
    }

  .legend span {
    font-size: 13px;
    color: #6b7280;
  }

  .view-link {
    text-decoration: none;
    color: #6d45f9;
  }
  .activity-card {
    border-radius: 16px;
    border: none;
    box-shadow: 0 4px 20px rgba(0,0,0,0.05);
  }

  .avatar {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 13px;
    font-weight: 600;
    color: #fff;
  }

  .avatar.blue{ 
    background: linear-gradient(135deg, #7b8ff7, #6366f1); 
  }
  .avatar.green{ 
    background: linear-gradient(135deg, #2dd4bf, #10b981); 
  }
  .avatar.orange{
     background: linear-gradient(135deg, #4ade80, #f59e0b);
    }
  .avatar.pink{
     background: linear-gradient(135deg, #ef4444, #c026d3);
    }
  .avatar.purple{
    background: linear-gradient(135deg, #a855f7, #7c3aed);
  }

  .activity-item {
    padding: 10px 0;
  }

  .activity-text {
    font-size: 13px;
    color: var(--bs-body-color);
  }

  .time {
    font-size: 12px;
    color: #9ca3af;
    white-space: nowrap;
  }

  .view-link {
    font-size: 13px;
    text-decoration: none;
    color: #6366f1;
  }
  .card {
  border-radius: 12px;
}

.list-group-item {
  border: none;
  padding: 14px 0;
  border-bottom: 1px solid #f1f1f1;
}

.list-group-item:last-child {
  border-bottom: none;
}
.badge {
  font-size: 0.7rem;
  margin-right: 5px;
}
.feature-item {
  margin-bottom: 20px;
}
.feature-item span {
  display: block;
  margin-bottom: 6px;
  font-size: 14px;
  color:var(--bs-body-color);
}
.progress {
  height: 10px;
  background-color: #f1f3f5;
  border-radius: 10px;
  overflow: hidden;
}
.gradient-bar {
  background: linear-gradient(90deg, #6a5af9, #4facfe);
  border-radius: 10px;
}
.cardfeature{
  height: 100%;
  border-radius: 10px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
}
.badge-production {
  font-size: 11px;
  padding: 2px 9px;
  border-radius: 99px;
  font-weight: 600;
  background: #ede9fe;
  color: #6d45f9;
}
.badge-staging {
  font-size: 11px;
  padding: 2px 9px;
  border-radius: 99px;
  font-weight: 600;
  background: #e0f0ff;
  color: #3c8fe0;
}
.badge-preview {
  font-size: 11px;
  padding: 2px 9px;
  border-radius: 99px;
  font-weight: 600;
  background: #fff3e0;
  color: #f0820a;
}
.feature-label {
  font-size: 12px;
  min-width: 75px;
  line-height: 1.3;
}
.stats-card {
  background: rgba(255, 255, 255, 0.12);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(255, 255, 255, 0.15);
  border-radius: 12px;
}
.stats-card:hover {
  background: rgba(255, 255, 255, 0.15);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(255, 255, 255, 0.25);
  transition: all 0.3s ease;
  cursor: pointer;
}

</style>
@endpush
@section('pages')
<div class="main2">
 <div class="container-fluid mt-2 box1">
   <div class="box-0 p-md-4 height2 rounded-5 text-white shadow-lg">
        <div class="ms-2 mt-2">
            <h1 class="fw-bold display-6 fs-2">Good morning, Aigars</h1>
            <p class="text-white-70">Here's what's happening with your product today.</p>
        </div>

        <div class="row g-3">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="stats-card h-100 p-2">
                    <div class="d-flex align-items-center mb-2 svgbox">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap h-4 w-4 text-white/60" aria-hidden="true"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path></svg>
                        <span class="text-uppercase small fw-semibold opacity-75 ms-2">MRR</span>
                    </div>
                    <h2 class="fw-bold mb-1 fs-4 ms-2 mt-2">$48.2K</h2>
                    <div class="small graph">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-3 w-3 text-emerald-300" aria-hidden="true"><path d="M16 7h6v6"></path><path d="m22 7-8.5 8.5-5-5L2 17"></path></svg>
                        <i class="bi bi-graph-up-arrow me-1"></i> +12.4% <span class="text-white-50 ms-1">vs last month</span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="stats-card h-100 p-2 rounded-4 border border-white border-opacity-10">
                    <div class="d-flex align-items-center mb-2 svgbox">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users h-4 w-4 text-white/60" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><path d="M16 3.128a4 4 0 0 1 0 7.744"></path><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><circle cx="9" cy="7" r="4"></circle></svg>
                        <span class="text-uppercase small fw-semibold opacity-75 ms-2">Active Users</span>
                    </div>
                    <h2 class="fw-bold mb-1">12,847</h2>
                    <div class="small graph">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-3 w-3 text-emerald-300" aria-hidden="true"><path d="M16 7h6v6"></path><path d="m22 7-8.5 8.5-5-5L2 17"></path></svg> +8.2% <span class="text-white-50 ms-1">vs last month</span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="stats-card h-100 p-2 rounded-4 border border-white border-opacity-10 ">
                    <div class="d-flex align-items-center mb-2 svgbox">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rocket h-4 w-4 text-white/60" aria-hidden="true"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"></path><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path></svg>
                        <span class="text-uppercase small fw-semibold opacity-75 ms-2">Deployments</span>
                    </div>
                    <h2 class="fw-bold mb-1">342</h2>
                    <div class="small graph">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-3 w-3 text-emerald-300" aria-hidden="true"><path d="M16 7h6v6"></path><path d="m22 7-8.5 8.5-5-5L2 17"></path></svg> +8.2% <span class="text-white-50 ms-1">vs last month</span> 
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="stats-card h-100 p-2 rounded-4 border border-white border-opacity-10">
                    <div class="d-flex align-items-center mb-2 svgbox">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-activity h-4 w-4 text-white/60" aria-hidden="true"><path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2"></path></svg>
                        <span class="text-uppercase small fw-semibold opacity-75 ms-2">Uptime</span>
                    </div>
                    <h2 class="fw-bold mb-1">99.98%</h2>
                    <div class="small graph">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-3 w-3 text-emerald-300" aria-hidden="true"><path d="M16 7h6v6"></path><path d="m22 7-8.5 8.5-5-5L2 17"></path></svg> +8.2% <span class="text-white-50 ms-1">vs last month</span> 
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>

<div class="container-fluid py-3">
  <div class="row g-3">
    <div class="col-lg-7 col-md-12">
      <div id="box">
        
      </div>
    </div>
    <div class="col-lg-5 col-md-12">
      <div class="card sprint-card p-4 mb-3">
        <div class="d-flex justify-content-between align-items-start mb-3">
          <div>
            <h6 class="mb-1 fw-semibold">Sprint 24</h6>
            <small class="text-muted sprint">5 days remaining</small>
          </div>
          <a href="#" class="view-link mt-2">View board <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg></a>
        </div>
        <div class="progress mb-3">
          <div class="progress-bar completed" style="width: 65%"></div>
          <div class="progress-bar progressing" style="width: 25%"></div>
          <div class="progress-bar todo" style="width: 10%"></div>
        </div>
        <div class="row text-center text-md-start">
          <div class="col-12 col-md-4 mb-2 mb-md-0 legend">
            <span><span class="dot completed"></span>Completed (14)</span>
          </div>
          <div class="col-12 col-md-4 mb-2 mb-md-0 legend text-md-center">
            <span><span class="dot progressing"></span>In Progress (5)</span>
          </div>
          <div class="col-12 col-md-4 legend text-md-end">
            <span><span class="dot todo"></span>To Do (2)</span>
          </div>
        </div>
      </div>
      <div class="card activity-card p-3">
        <div class="d-flex justify-content-between align-items-start mb-3">
          <div>
            <h6 class="mb-1 fw-semibold">Team Activity</h6>
            <small class="text-muted sprint">Latest from your team</small>
          </div>
          <a href="#" class="view-link">View all <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg></a>
        </div>
        <div class="activity-list">
          <div class="d-flex justify-content-between align-items-center activity-item">
            <div class="d-flex align-items-center gap-3">
              <div class="avatar blue">SC</div>
              <div class="activity-text"><strong>Sarah C.</strong> merged PR #284</div>
            </div>
            <div class="time">3m</div>
          </div>
          <div class="d-flex justify-content-between align-items-center activity-item">
            <div class="d-flex align-items-center gap-3">
              <div class="avatar green">AM</div>
              <div class="activity-text"><strong>Alex M.</strong> deployed to production</div>
            </div>
            <div class="time">12m</div>
          </div>
          <div class="d-flex justify-content-between align-items-center activity-item">
            <div class="d-flex align-items-center gap-3">
              <div class="avatar orange">PK</div>
              <div class="activity-text"><strong>Priya K.</strong> opened issue #92</div>
            </div>
            <div class="time">28m</div>
          </div>
          <div class="d-flex justify-content-between align-items-center activity-item">
            <div class="d-flex align-items-center gap-3">
              <div class="avatar pink">ML</div>
              <div class="activity-text"><strong>Marcus L.</strong> reviewed PR #281</div>
            </div>
            <div class="time">45m</div>
          </div>
          <div class="d-flex justify-content-between align-items-center activity-item">
            <div class="d-flex align-items-center gap-3">
              <div class="avatar purple">JT</div>
              <div class="activity-text"><strong>Jen T.</strong> closed issue #88</div>
            </div>
            <div class="time">1h</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container-fluid py-4">
  <div class="row g-3">
    <div class="col-lg-7 col-md-12">
      <div class="cardfeature shadow-sm p-3 border border-light-subtle">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div>
            <h5 class="fw-bold mb-0 fs-6">Recent Deployments</h5>
            <small class="text-muted">Latest releases across environments</small>
          </div>
          <a href="#" class="text-primary text-decoration-none view-link">View all <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg></a>
        </div>

        <div class="dep-item d-flex justify-content-between align-items-center py-3 border-bottom">
          <div class="d-flex align-items-start gap-3 align-items-center">
            <div class="dep-status-icon success rounded-circle bg-success-subtle h-40 w-30"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2f9f3d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check h-3.5 w-3.5" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg></div>
            <div>
              <div class="fw-semibold" style="font-size:14px;">fix: auth token refresh</div>
              <div style="font-size:11px;">
                <span class="badge-env badge-production">Production</span>
                <span class="text-muted ms-1"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-commit-horizontal h-3 w-3" aria-hidden="true"><circle cx="12" cy="12" r="3"></circle><line x1="3" x2="9" y1="12" y2="12"></line><line x1="15" x2="21" y1="12" y2="12"></line></svg> main</span>
              </div>
            </div>
          </div>
          <div class="text-muted" style="font-size:12px;">2 min ago</div>
        </div>

        <div class="dep-item d-flex justify-content-between align-items-center py-3 border-bottom">
          <div class="d-flex align-items-start gap-3 align-items-center">
           <div class="dep-status-icon success rounded-circle bg-success-subtle h-40 w-30"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2f9f3d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check h-3.5 w-3.5" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg></div>
            <div>
              <div class="fw-semibold" style="font-size:13px;">feat: webhook retry logic</div>
              <div style="font-size:11px;">
                <span class="badge-env badge-staging">Staging</span>
                <span class="text-muted ms-1"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-commit-horizontal h-3 w-3" aria-hidden="true"><circle cx="12" cy="12" r="3"></circle><line x1="3" x2="9" y1="12" y2="12"></line><line x1="15" x2="21" y1="12" y2="12"></line></svg> feat/webhooks-v2</span>
              </div>
            </div>
          </div>
          <div class="text-muted" style="font-size:12px;">18 min ago</div>
        </div>

        <div class="dep-item d-flex justify-content-between align-items-center py-3 border-bottom">
          <div class="d-flex align-items-start gap-3 align-items-center">
           <div class="dep-status-icon success rounded-circle bg-success-subtle h-40 w-30"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2f9f3d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check h-3.5 w-3.5" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg></div>
            <div>
              <div class="fw-semibold" style="font-size:13px;">chore: bump dependencies</div>
              <div style="font-size:11px;">
                <span class="badge-env badge-production">Production</span>
                <span class="text-muted ms-1"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-commit-horizontal h-3 w-3" aria-hidden="true"><circle cx="12" cy="12" r="3"></circle><line x1="3" x2="9" y1="12" y2="12"></line><line x1="15" x2="21" y1="12" y2="12"></line></svg> main</span>
              </div>
            </div>
          </div>
          <div class="text-muted" style="font-size:12px;">1h ago</div>
        </div>

        <div class="dep-item d-flex justify-content-between align-items-center py-3 border-bottom">
          <div class="d-flex align-items-start gap-3 align-items-center">
            <div class="dep-status-icon building rounded-circle bg-warning-subtle h-40 w-30">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ed9a00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-3.5 w-3.5" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg>
            </div>
            <div>
              <div class="fw-semibold" style="font-size:13px;">feat: dark mode toggle</div>
              <div style="font-size:11px;">
                <span class="badge-env badge-preview">Preview</span>
                <span class="text-muted ms-1"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-commit-horizontal h-3 w-3" aria-hidden="true"><circle cx="12" cy="12" r="3"></circle><line x1="3" x2="9" y1="12" y2="12"></line><line x1="15" x2="21" y1="12" y2="12"></line></svg> feat/dark-mode</span>
              </div>
            </div>
          </div>
          <div class="text-muted" style="font-size:12px;">1h ago</div>
        </div>

        <div class="dep-item d-flex justify-content-between align-items-center py-3 border-bottom">
          <div class="d-flex align-items-start gap-3 align-items-center">
            <div class="dep-status-icon error rounded-circle bg-danger-subtle h-40 w-30">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#e7000f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-alert h-3.5 w-3.5" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><line x1="12" x2="12" y1="8" y2="12"></line><line x1="12" x2="12.01" y1="16" y2="16"></line></svg>
            </div>
            <div>
              <div class="fw-semibold" style="font-size:13px;">fix: websocket memory leak</div>
              <div style="font-size:11px;">
                <span class="badge-env badge-staging">Staging</span>
                <span class="text-muted ms-1"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-commit-horizontal h-3 w-3" aria-hidden="true"><circle cx="12" cy="12" r="3"></circle><line x1="3" x2="9" y1="12" y2="12"></line><line x1="15" x2="21" y1="12" y2="12"></line></svg> fix/memory-leak</span>
              </div>
            </div>
          </div>
          <div class="text-muted" style="font-size:12px;">3h ago</div>
        </div>

        <div class="dep-item d-flex justify-content-between align-items-center py-3">
          <div class="d-flex align-items-start gap-3 align-items-center">
             <div class="dep-status-icon success rounded-circle bg-success-subtle h-40 w-30"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2f9f3d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check h-3.5 w-3.5" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg></div>
            <div>
              <div class="fw-semibold" style="font-size:13px;">feat: export CSV endpoint</div>
              <div style="font-size:11px;">
                <span class="badge-env badge-production">Production</span>
                <span class="text-muted ms-1"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-commit-horizontal h-3 w-3" aria-hidden="true"><circle cx="12" cy="12" r="3"></circle><line x1="3" x2="9" y1="12" y2="12"></line><line x1="15" x2="21" y1="12" y2="12"></line></svg> main</span>
              </div>
            </div>
          </div>
          <div class="text-muted" style="font-size:12px;">5h ago</div>
        </div>

      </div>
    </div>

  
    <div class="col-lg-5 col-md-12">
  <div class="cardfeature shadow-sm p-3 pb-0 border border-light-subtle">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div>
        <h5 class="fw-bold mb-0 ms-2 mt-2 fs-5">Feature Adoption</h5>
        <small class="text-muted ms-2 mt-2">% of users using each feature</small>
      </div>
      <a href="#" class="text-primary text-decoration-none view-link">Flags <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg></a>
    </div>

    <div class="feature-item d-flex align-items-center mb-4">
      <span class="feature-label text-end text-muted me-3">Dashboard</span>
      <div class="progress flex-grow-1" style="height:20px; border-radius:99px; background:#e9ecef;">
        <div class="progress-bar" style="width:95%; height:20px; border-radius:99px; background:linear-gradient(to right, #7367f0, #3cc8f0);"></div>
      </div>
    </div>

    <div class="feature-item d-flex align-items-center mb-4">
      <span class="feature-label text-end text-muted me-3">API</span>
      <div class="progress flex-grow-1" style="height:20px; border-radius:99px; background:#e9ecef;">
        <div class="progress-bar" style="width:75%; height:20px; border-radius:99px; background:linear-gradient(to right, #7367f0, #3cc8f0);"></div>
      </div>
    </div>

    <div class="feature-item d-flex align-items-center mb-4">
      <span class="feature-label text-end text-muted me-3">Webhooks</span>
      <div class="progress flex-grow-1" style="height:20px; border-radius:99px; background:#e9ecef;">
        <div class="progress-bar" style="width:60%; height:20px; border-radius:99px; background:linear-gradient(to right, #7367f0, #3cc8f0);"></div>
      </div>
    </div>

    <div class="feature-item d-flex align-items-center mb-4">
      <span class="feature-label text-end text-muted me-3">Team<br>Mgmt</span>
      <div class="progress flex-grow-1" style="height:20px; border-radius:99px; background:#e9ecef;">
        <div class="progress-bar" style="width:50%; height:20px; border-radius:99px; background:linear-gradient(to right, #7367f0, #3cc8f0);"></div>
      </div>
    </div>

    <div class="feature-item d-flex align-items-center mb-4">
      <span class="feature-label text-end text-muted me-3">SSO</span>
      <div class="progress flex-grow-1" style="height:20px; border-radius:99px; background:#e9ecef;">
        <div class="progress-bar" style="width:40%; height:20px; border-radius:99px; background:linear-gradient(to right, #7367f0, #3cc8f0);"></div>
      </div>
    </div>

    <div class="feature-item d-flex align-items-center mb-4">
      <span class="feature-label text-end text-muted me-3">Audit Log</span>
      <div class="progress flex-grow-1" style="height:20px; border-radius:99px; background:#e9ecef;">
        <div class="progress-bar" style="width:25%; height:20px; border-radius:99px; background:linear-gradient(to right, #7367f0, #3cc8f0);"></div>
      </div>
    </div>

    <div class="d-flex justify-content-between mt-3 mb-2 small text-muted" style="padding-left:80px;">
      <span>0%</span>
      <span>25%</span>
      <span>50%</span>
      <span>75%</span>
      <span>100%</span>
    </div>

  </div>
</div>
@endsection

