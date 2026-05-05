@extends('welcome')
@push('css')
<style>
.metric-wrapper {
background: linear-gradient(90deg,rgba(198, 212, 247, 1) 0%, rgba(255, 255, 255, 1) 37%);
padding: 15px 3px;
border-radius: 10px;
}
.metric-col {
padding: 15px 15px;
}
.metric-label {
font-size: 0.7rem;
text-transform: uppercase;
color: #6b7280;
}

.metric-icon {
font-size: 0.95rem;
color: #6b7280;
}
.metric-value-blue {
font-size: 40px;
font-weight: 800;
color: #4f6ef7;
line-height: 1.15;
margin-bottom: 6px;
}

.metric-value-dark {
font-size: 40px;
font-weight: 800;
color: #1a1a2e;
line-height: 1.15;
margin-bottom: 6px;
}
.metric-trend-up {
font-size: 0.82rem;
font-weight: 500;
color: #10b981;
}

.metric-trend-muted {
font-size: 10px;
color: #6b7280;
}
body {
background-color: #ebebf0;
font-family: 'Segoe UI', sans-serif;
}

.mrr-wrapper {
padding: 14px;
}

.mrr-card {
background-color:var(--bs-body-bg);
border-radius: 14px;
padding: 15px 10px;
box-shadow: 0 1px 4px rgba(0, 0, 0, 0.07);
}

.mrr-label {
font-size: 10px;
font-weight: 600;
letter-spacing: 0.09em;
text-transform: uppercase;
color:var(--bs-color-bg);
margin-bottom: 8px;
}

.mrr-value {
font-size: 20px;
font-weight: 700;
color:var(--bs-color-bg);
margin-bottom: 6px;
}

.mrr-value-red {
font-size: 20px;
font-weight: 700;
color: #ef4444;
margin-bottom: 6px;
}
.mrr-trend-up {
font-size: 11px;
font-weight: 500;
color: #10b981;
}

.mrr-trend-down {
font-size: 0.8rem;
font-weight: 500;
color: #ef4444;
}
.section-wrapper {
padding: 32px 24px;
}

.chart-card {
background-color: #ffffff;
border-radius: 16px;
padding: 28px 24px;
box-shadow: 0 1px 6px rgba(0, 0, 0, 0.07);
height: 100%;
}

.card-title {
font-size: 1.1rem;
font-weight: 700;
color: #1a1a2e;
margin-bottom: 4px;
}

.card-subtitle {
font-size: 0.82rem;
color: #6b7280;
margin-bottom: 16px;
}

.legend-item {
font-size: 0.8rem;
color: #6b7280;
display: flex;
align-items: center;
gap: 5px;
}

.dot-red    { background-color: #ef4444; }
.dot-blue   { background-color: #38bdf8; }
.dot-purple { background-color: #818cf8; }
.dot-pink   { background-color: #c084fc; }

.chart-area {
display: flex;
align-items: flex-end;
gap: 12px;
height: 220px;
}

.y-axis {
display: flex;
flex-direction: column;
justify-content: space-between;
height: 100%;
text-align: right;
font-size: 0.75rem;
color: #9ca3af;
padding-bottom: 24px;
}

.bars-wrapper {
display: flex;
align-items: flex-end;
gap: 16px;
flex: 1;
height: 100%;
}

.bar-group {
display: flex;
flex-direction: column;
align-items: center;
flex: 1;
}

.bar-stack {
display: flex;
flex-direction: column-reverse;
align-items: center;
gap: 2px;
width: 100%;
}

.bar {
width: 100%;
border-radius: 4px 4px 0 0;
}

.bar-blue   { background-color: #38bdf8; }
.bar-purple { background-color: #818cf8; }
.bar-red    { background-color: #ef4444; }

.bar-label {
font-size: 0.75rem;
color: #9ca3af;
margin-top: 6px;
}

.plan-item {
margin-bottom: 20px;
}

.plan-name {
font-size: 0.9rem;
font-weight: 500;
color: #1a1a2e;
display: flex;
align-items: center;
gap: 6px;
}

.plan-stats {
display: flex;
align-items: center;
gap: 8px;
}

.plan-count {
font-size: 0.9rem;
font-weight: 700;
color: #1a1a2e;
}

.plan-percent {
font-size: 0.75rem;
font-weight: 600;
}

.percent-orange { color: #f97316; }
.percent-blue   { color: #38bdf8; }
.percent-purple { color: #818cf8; }
.percent-pink   { color: #c084fc; }

.plan-bar-track {
height: 6px;
background-color: #f3f4f6;
border-radius: 999px;
margin-top: 8px;
width: 100%;
}

.plan-bar-fill {
height: 100%;
border-radius: 999px;
}

.fill-red    { background-color: #ef4444; }
.fill-blue   { background-color: #38bdf8; }
.fill-purple { background-color: #818cf8; }
.fill-pink   { background-color: #c084fc; }

.fill-42 { width: 42%; }
.fill-31 { width: 31%; }
.fill-22 { width: 22%; }
.fill-4  { width: 4%;  }
.section-wrapper {
padding: 10px 25px;
}

.plan-card {
background-color:var(--bs-body-bg);
border-radius: 15px;
padding: 15px 18px;
box-shadow: 0 2px 8px rgba(0, 0, 0, 0.07);
}

.plan-title {
font-size: 1.15rem;
font-weight: 700;
color:var(--bs-color-bg);
margin-bottom: 4px;
}

.plan-subtitle {
font-size: 0.83rem;
color: var(--bs-color-bg);
margin-bottom: 24px;
}

.plan-item {
margin-bottom: 22px;
}

.plan-name {
font-size: 0.95rem;
font-weight: 500;
color: var(--bs-color-bg);
display: flex;
align-items: center;
gap: 8px;
}

.plan-count {
font-size: 0.95rem;
font-weight: 700;
color:var(--bs-color-bg);
}

.dot {
width: 11px;
height: 11px;
border-radius: 50%;
display: inline-block;
}

.dot-red    { 
background-color: #ef4444; 
}
.dot-blue   { 
background-color: #38bdf8; 
}
.dot-purple { 
background-color: #818cf8; 
}
.dot-pink   { 
background-color: #c084fc; 
}

.plan-badge {
font-size: 0.75rem;
font-weight: 600;
padding: 3px 10px;
border-radius: 999px;
}

.badge-orange { 
background-color: #fff0e6; 
color: #f97316; 
}
.badge-blue   { 
background-color: #e0f4ff; 
color: #38bdf8; 
}
.badge-purple { 
background-color: #ede9fe; 
color: #818cf8; 
}
.badge-pink   { 
background-color: #fce7f3; 
color: #c084fc; 
}

.plan-track {
height: 6px;
background-color: #f3f4f6;
border-radius: 999px;
margin-top: 10px;
width: 100%;
}

.plan-fill {
height: 100%;
border-radius: 999px;
}

.fill-red    { background-color: #ef4444; }
.fill-blue   { background-color: #38bdf8; }
.fill-purple { background-color: #818cf8; }
.fill-pink   { background-color: #c084fc; }

.fill-42 { width: 42%; }
.fill-31 { width: 31%; }
.fill-22 { width: 22%; }
.fill-4  { width: 4%;  }

.card { 
border-radius: 15px; 
border: 1px solid #eee; 
overflow: hidden; 
}
.avatar { 
width: 32px; 
height: 32px; 
display: flex; 
align-items: center; 
justify-content: center; 
border-radius: 50%; 
font-weight: bold; 
font-size: 11px;
}
.bg-nord { 
  background-color: #f0f2f9; 
  color: #7b89d8; 
}
.bg-stack { 
  background-color: #f1f1fc; 
  color: #8a8ae8; 
}
.bg-bright { background-color: #edf2ff; color: #7e8ec2; }
.bg-veloz { 
  background-color: #f2f5ff; 
  color: #8ba1e0; 
}
.bg-launch { 
  background-color: #f4f2ff; 
  color: #9c8df2;
}
.badge-status { 
padding: 3px 12px; 
border-radius: 20px; 
font-size:10px; 
display: inline-block;
}
.metric-card { 
  border-radius: 16px; 
  border: 1px solid #e9ecef; 
  background:var(--bs-body-bg); 
  padding: 2rem 1.5rem; 
  text-align: center; 
}
.icon-circle {
width: 54px;
height: 54px; 
border-radius: 50%; 
background: #f1f3f5; 
display: flex; 
align-items: center; 
justify-content: center; 
margin: 0 auto 1rem; 
}
.metric-label { 
font-size: 11px; 
letter-spacing: 1.2px; 
text-transform: uppercase; 
font-weight: 600; 
margin-bottom: 0.5rem;
}
.metric-value { 
font-size: 2.2rem; 
font-weight: 800;
  margin-bottom: 0.25rem; 
}
.metric-sub { 
font-size: 10px;  
margin-bottom: 0; 
}
.gradient-purple { 
background: linear-gradient(135deg, #7c6fcd, #a855f7);
-webkit-background-clip: text; 
-webkit-text-fill-color: transparent; 
background-clip: text;
}
.gradient-pink { 
background: linear-gradient(135deg, #b06db0, #e879a0); 
-webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; 
}
.gradient-blue { 
background: linear-gradient(135deg, #3b82f6, #06b6d4); 
-webkit-background-clip: text; -webkit-text-fill-color: 
transparent; 
background-clip: text; 
}
.badge-healthy { 
background: linear-gradient(135deg, #22c55e, #16a34a); 
color: #fff; 
font-size: 11px; 
padding: 5px 14px; 
border-radius: 50px; 
display: inline-block; 
font-weight: 600;
}
</style>
@endpush
@section('pages')
<h6 class="fw-bold fs-5 ms-3 ps-2">SaaS Metrics</h6>
<span class="text-muted ms-3 ps-2">Your SaaS command center — revenue, retention, and growth at a glance.</span>
<div class="container-fluid metric-wrapper mt-3 ms-3">
    <div class="row g-0">
      <div class="col-12 col-md-4 metric-col divider-right">
            <div class="d-flex align-items-center gap-2 mb-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#6d45f9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles h-4 w-4 text-primary/60" aria-hidden="true"><path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"></path><path d="M20 2v4"></path><path d="M22 4h-4"></path><circle cx="4" cy="20" r="2"></circle></svg>
            <span class="metric-label">Annual Recurring Revenue</span>
            </div>
            <div class="metric-value-blue">$578.4K</div>
            <div class="metric-trend-up"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-3 w-3 text-success" aria-hidden="true"><path d="M16 7h6v6"></path><path d="m22 7-8.5 8.5-5-5L2 17"></path></svg>+18.2% YoY</div>
      </div>
      <div class="col-12 col-md-4 metric-col divider-right">
            <div class="d-flex align-items-center gap-2 mb-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#6d45f9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target h-4 w-4 text-primary/60" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
            <span class="metric-label">Net Revenue Retention</span>
            </div>
            <div class="metric-value-dark">112%</div>
            <div class="metric-trend-up">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-3 w-3 text-success" aria-hidden="true"><path d="M16 7h6v6"></path><path d="m22 7-8.5 8.5-5-5L2 17"></path></svg>+3.4pp <span class="metric-trend-muted">vs last quarter</span>
            </div>
      </div>
        <div class="col-12 col-md-4 metric-col">
            <div class="d-flex align-items-center gap-2 mb-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#6d45f9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gauge h-4 w-4 text-primary/60" aria-hidden="true"><path d="m12 14 4-4"></path><path d="M3.34 19a10 10 0 1 1 17.32 0"></path></svg>
            <span class="metric-label">Months of Runway</span>
            </div>
            <div class="metric-value-dark">18.4</div>
            <div class="metric-trend-muted">months at current burn</div>
      </div>
    </div>
</div>

<div class="container-fluid mrr-wrapper mt-3">
    <div class="row g-3">
      <div class="col-12 col-sm-6 col-lg">
            <div class="mrr-card">
            <div class="mrr-label">MRR</div>
            <div class="mrr-value">$48.2K</div>
            <div class="mrr-trend-up"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-3 w-3 text-success" aria-hidden="true"><path d="M16 7h6v6"></path><path d="m22 7-8.5 8.5-5-5L2 17"></path></svg>+8.4%</div>
            </div>
      </div>
      <div class="col-12 col-sm-6 col-lg">
            <div class="mrr-card">
            <div class="mrr-label">New MRR</div>
            <div class="mrr-value">$8.4K</div>
            <div class="mrr-trend-up"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-3 w-3 text-success" aria-hidden="true"><path d="M16 7h6v6"></path><path d="m22 7-8.5 8.5-5-5L2 17"></path></svg>+12.1%</div>
            </div>
      </div>
      <div class="col-12 col-sm-6 col-lg">
            <div class="mrr-card">
            <div class="mrr-label">Expansion MRR</div>
            <div class="mrr-value">$3.2K</div>
            <div class="mrr-trend-up"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-3 w-3 text-success" aria-hidden="true"><path d="M16 7h6v6"></path><path d="m22 7-8.5 8.5-5-5L2 17"></path></svg>+5.7%</div>
            </div>
      </div>
      <div class="col-12 col-sm-6 col-lg">
            <div class="mrr-card">
            <div class="mrr-label">Churned MRR</div>
            <div class="mrr-value-red">-$2.8K</div>
            <div class="mrr-trend-down"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-down h-3 w-3 text-destructive" aria-hidden="true"><path d="M16 17h6v-6"></path><path d="m22 17-8.5-8.5-5 5L2 7"></path></svg>-0.8%</div>
            </div>
      </div>
      <div class="col-12 col-sm-6 col-lg">
            <div class="mrr-card">
            <div class="mrr-label">Net New MRR</div>
            <div class="mrr-value">$8.8K</div>
            <div class="mrr-trend-up"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-3 w-3 text-success" aria-hidden="true"><path d="M16 7h6v6"></path><path d="m22 7-8.5 8.5-5-5L2 17"></path></svg>+15.3%</div>
            </div>
      </div>
    </div>
</div>

<div class="container-fluid mt-3">
  <div class="row">
    <div class="col-7">
      <div id="chart"></div>
    </div>
    <div class="col-5">
   <div class="container-fluid section-wrapper">
        <div class="plan-card">

          <h5 class="plan-title">Plan Distribution</h5>
          <p class="plan-subtitle">6,717 total users across tiers</p>

          <div class="plan-item">
            <div class="d-flex justify-content-between align-items-center">
              <span class="plan-name">
                <span class="dot dot-red"></span> Free
              </span>
              <span class="d-flex align-items-center gap-2">
                <span class="plan-count">2,847</span>
                <span class="plan-badge badge-orange">42%</span>
              </span>
            </div>
            <div class="plan-track">
              <div class="plan-fill fill-red fill-42"></div>
            </div>
          </div>

          <div class="plan-item">
            <div class="d-flex justify-content-between align-items-center">
              <span class="plan-name">
                <span class="dot dot-blue"></span> Starter
              </span>
              <span class="d-flex align-items-center gap-2">
                <span class="plan-count">2,104</span>
                <span class="plan-badge badge-blue">31%</span>
              </span>
            </div>
            <div class="plan-track">
              <div class="plan-fill fill-blue fill-31"></div>
            </div>
          </div>

          <div class="plan-item">
            <div class="d-flex justify-content-between align-items-center">
              <span class="plan-name">
                <span class="dot dot-purple"></span> Pro
              </span>
              <span class="d-flex align-items-center gap-2">
                <span class="plan-count">1,482</span>
                <span class="plan-badge badge-purple">22%</span>
              </span>
            </div>
            <div class="plan-track">
              <div class="plan-fill fill-purple fill-22"></div>
            </div>
          </div>

          <div class="plan-item">
            <div class="d-flex justify-content-between align-items-center">
              <span class="plan-name">
                <span class="dot dot-pink"></span> Enterprise
              </span>
              <span class="d-flex align-items-center gap-2">
                <span class="plan-count">284</span>
                <span class="plan-badge badge-pink">4%</span>
              </span>
            </div>
            <div class="plan-track">
              <div class="plan-fill fill-pink fill-4"></div>
            </div>
          </div>

        </div>
      </div>
  </div>
  </div>
</div>


<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
      <div id="chart2"></div>
    </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
            <div class="card shadow-sm p-0">
                <h5 class="mt-2 ps-2">Customer Health Scores</h5>
                <p class="text-muted small m-0 ps-2">Top accounts by MRR with engagement status</p>

                <div class="table-responsive">
                    <table class="table align-middle border-0 m-0">
                        <thead class="border-bottom">
                            <tr class="text-muted small">
                                <th class="border-0 fw-normal">Company</th>
                                <th class="border-0 fw-normal">Status</th>
                                <th class="border-0 fw-normal text-end">MRR</th>
                                <th class="border-0 fw-normal text-end">Last Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-0">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar bg-nord me-2">NO</div>
                                        <span class="">NordLoop</span>
                                    </div>
                                </td>
                                <td class="border-0"><span class="badge-status bg-success"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check h-3 w-3" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>Good</span></td>
                                <td class="border-0 text-end fw-semibold">$4,200</td>
                                <td class="border-0 text-end text-muted small">Today</td>
                            </tr>
                            <tr>
                                <td class="border-0">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar bg-stack me-2">ST</div>
                                        <span class="">StackFire</span>
                                    </div>
                                </td>
                                <td class="border-0"><span class="badge-status bg-success "><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check h-3 w-3" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg> Good</span></td>
                                <td class="border-0 text-end fw-semibold">$3,800</td>
                                <td class="border-0 text-end text-muted small">Yesterday</td>
                            </tr>
                            <tr>
                                <td class="border-0">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar bg-bright me-2">BR</div>
                                        <span class="">BrightPath</span>
                                    </div>
                                </td>
                                <td class="border-0"><span class="badge-status bg-warning text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-alert h-3 w-3" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="M12 8v4"></path><path d="M12 16h.01"></path></svg>At Risk</span></td>
                                <td class="border-0 text-end fw-semibold">$2,400</td>
                                <td class="border-0 text-end text-muted small">5 days ago</td>
                            </tr>
                            <tr>
                                <td class="border-0">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar bg-veloz me-2">VE</div>
                                        <span class="">VelozTech</span>
                                    </div>
                                </td>
                                <td class="border-0"><span class="badge-status bg-danger"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-x h-3 w-3" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m14.5 9.5-5 5"></path><path d="m9.5 9.5 5 5"></path></svg>Critical</span></td>
                                <td class="border-0 text-end fw-semibold">$1,800</td>
                                <td class="border-0 text-end text-muted small">12 days ago</td>
                            </tr>
                            <tr>
                                <td class="border-0">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar bg-launch me-2">LA</div>
                                        <span class="">LaunchPad</span>
                                    </div>
                                </td>
                                <td class="border-0"><span class="badge-status bg-success"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check h-3 w-3" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>Good</span></td>
                                <td class="border-0 text-end fw-semibold">$5,100</td>
                                <td class="border-0 text-end text-muted small">Today</td>
                            </tr>
                        </tbody>
                    </table>
      </div>
    </div>
</div>
  </div>
</div>

<div class="container-fluid px-2 py-3">
  <div class="row g-3">
    <div class="col-lg-4 col-md-12 col-sm-12">
      <div class="metric-card">
        <div class="icon-circle">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#7c6fcd" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="12" y1="1" x2="12" y2="23"/>
            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
          </svg>
        </div>
        <p class="metric-label text-muted">Customer LTV</p>
        <h2 class="metric-value gradient-purple text-muted">$2,847</h2>
        <p class="metric-sub text-muted">12-month average</p>
      </div>
    </div>
    <div class="col-lg-4 col-md-12 col-sm-12">
      <div class="metric-card">
        <div class="icon-circle">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#b06db0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
            <circle cx="9" cy="7" r="4"/>
            <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
          </svg>
        </div>
        <p class="metric-label text-muted">Customer Acquisition Cost</p>
        <h2 class="metric-value gradient-pink">$412</h2>
        <p class="metric-sub text-muted">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#6c757d" stroke-width="2">
            <circle cx="12" cy="12" r="10"/>
            <polyline points="12 6 12 12 16 14"/>
          </svg>
          Payback 6 months
        </p>
      </div>
    </div>
    <div class="col-lg-4 col-md-12 col-sm-12">
      <div class="metric-card">
        <div class="icon-circle">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/>
            <polyline points="17 6 23 6 23 12"/>
          </svg>
        </div>
        <p class="metric-label text-muted">LTV:CAC Ratio</p>
        <h2 class="metric-value gradient-blue">6.9x</h2>
        <span class="badge-healthy"> Healthy ratio</span>
      </div>
    </div>

  </div>
</div>
@endsection