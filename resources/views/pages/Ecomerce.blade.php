@extends('welcome')
@push('css')
<style>
    .number{
        background: linear-gradient(to right, #6366f1, #8b5cf6);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .card-title{
        font-size: 20px;
    }
    .bg-success{
        font-size: 12px;
        
    }
    .revenue{
        font-size: 12px;
    }
    .month{
        font-size: 12px;
    }
    [data-bs-theme="dark"] .main2 {
        background-color:var(--bs-dark-bg);
        color:var(--bs-body-color);
        border: 1px #fff;    
        }
    .stat-card {
            background:var(--bs-body-bg);
            border: 1px solid #f0f0f5;
            border-radius: 16px;
            padding-left: 10px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .accent-bar {
            border-left: 4px solid #dee2e6;
            padding-left: 15px;
        }
        .accent-purple {
             border-left-color: #6a5af9; 
            }
        .accent-blue   {
             border-left-color: #3b82f6; }
        .accent-green  { border-left-color: #10b981;
         }
        .accent-orange { 
            border-left-color: #f97316; 
        }

        .stat-label {
            color:var(--bs-body-color);
            font-size: 0.85rem;
            font-weight: 500;
            margin-bottom: 4px;
        }

        .stat-value {
            font-size: 18px;
            font-weight: 700;
            color: var(--bs-body-col0r);
        }
        .icon-circle {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            margin-right: 5px;
        }

        .trend-badge {
            font-size: 0.75rem;
            font-weight: 600;
            padding-right: 10px;
            margin-bottom: 5px;
        }
        .trend-up { 
            color: #10b981;
        }
        .trend-down { 
            color: #ef4444; 
        }        
        .main-card {
  background: var(--bs-body-bg);
  border-radius: 20px;
  padding: 15px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.02);
  height: 100%;
  border: 1px solid #f0f0f0;
}
.dailyrevenue h5{
    font-size: 15px;
}
.dailyrevenue p{
    font-size: 10px;
    color: var(--bs-body-color);
}
.btn-group-toggle{
    background-color: #f2f3fa;
}
.graph-container {
  display: flex;
  height: 250px;
  margin-top: 20px;
}
.y-axis {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  color: #adb5bd;
  font-size: 12px;
  padding-right: 15px;
}
.text{
    font-size: 10px;
}
.graph-area {
  flex-grow: 1;
  border-bottom: 1px solid #eee;
  position: relative;
  overflow: hidden;
}
.css-line-chart {
  position: absolute;
  width: 100%;
  height: 100%;
  background: linear-gradient(to bottom, rgba(108, 92, 231, 0.2), transparent);
  clip-path: polygon(0% 40%, 15% 35%, 30% 38%, 45% 55%, 60% 65%, 75% 45%, 90% 30%, 100% 30%, 100% 100%, 0% 100%);
  border-top: 3px solid #6c5ce7;
}

.channel-item { 
    margin-bottom: 20px
}
.custom-progress {
  height: 6px;
  background: #f0f0f0;
  border-radius: 10px;
  overflow: hidden;
}

.bar { 
    height: 100%; border-radius: 10px; 
}
.bg-purple { background-color: #6c5ce7; }
.bg-blue   { background-color: #00d2d3; }
.bg-green  { background-color: #1dd1a1; }
.bg-orange { background-color: #ff9f43; }
.dot {
  height: 8px; width: 8px;
  border-radius: 50%;
  display: inline-block;
  margin-right: 8px;
}
.dot-direct { background: #6c5ce7; }
.dot-organic { background: #00d2d3; }
.dot-referral { background: #1dd1a1; }
.dot-social { background: #ff9f43; }

.main-products-wrapper {
  background-color: #f8f9fa;
  padding: 15px;
  border-radius: 20px;
  background-color: var(--bs-body-bg);
}
.products h5 {
  font-size: 16px;
}
.products p {
  font-size: 12px;
  color: #6c757d;
}
.product-card {
  background-color: var(--bs-body-bg);
  border: 1px solid #e9ecef;
  border-radius: 20px;
  padding: 15px;
  transition: all 0.3s ease;
}
.product-card h6{
    font-size: 12px;
}
.product-card:hover {
  border-color: #dee2e6;
  box-shadow: 0 4px 15px rgba(0,0,0,0.05);
}
.category-pill {
  background-color:var(--bs-secondary-bg);
  color: var(--bs-body-color);
  font-size: 11px;
  padding: 4px 10px;
  border-radius: 8px;
  font-weight: 500;
}
.trend-pill {
  font-size: 10px;
  font-weight: 600;
  padding: 1px 5px;
  border-radius: 8px;
}

.trend-pill.positive {
  background-color: #e6fcf5;
  color: #0ca678;
}

.trend-pill.negative {
  background-color: #fff5f5;
  color: #fa5252;
}
.bi-box {
  margin-right: 5px;
  font-size: 0.9rem;
}
.dashboard-card {
  background:var(--bs-body-bg);
  padding: 14px;
  border-radius: 20px;
  border: 1px solid #f0f0f0;
  box-shadow: 0 4px 15px rgba(0,0,0,0.02);
}
.salesbyregion h5{
  font-size: 15px;
}
.salesbyregion p{
  font-size: 12px;
}
.region-chart{
    text-align: end;
    color: var(--bs-body-color);
}
.region-item {
  display: flex;
  align-items: center;
  margin-bottom: 18px;
}
.region-label {
  width: 120px;
  font-size: 11px;
  margin-right: 10px;
}

.region-bar-wrapper {
  flex-grow: 1;
  height: 25px;
  background-color: transparent;
}

.region-bar {
  height: 100%;
  border-radius: 6px;
  background: linear-gradient(90deg, #6c5ce7, #00d2d3);
}
.regionchart-labels{
    font-size: 10px;
}
.transaction-item {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 12px 0;
  border-bottom: 1px solid #f8f9fa;
}

.transaction-item:last-child { border-bottom: none; }

.tiny { font-size: 11px; }

.avatar {
  width: 38px;
  height: 38px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 12px;
  font-weight: bold;
}

.avatar-purple { background-color: #f3f0ff; color: #6f42c1; }
.avatar-blue   { background-color: #e7f5ff; color: #1c7ed6; }
.avatar-green  { background-color: #ebfbee; color: #2f9e44; }
.avatar-orange { background-color: #fff4e6; color: #d9480f; }
</style>
@endpush
@section('pages')
<div class="main p-4">
    <h3 class="card-title mb-1 fw-bold">Revenue & Sales</h3>
    <span class="text-muted">Track revenue performance, product metrics, and sales channels.</span>
    <div class="pricing mt-3 border border-primary rounded-4 p-4">
        <span class="text-muted revenue">REVENUE THIS MONTH</span>
        <h2 class="fw-bold number">$124,580</h2>
        <div class="percent d-flex ">
         <small class="text-muted me-2 month">vs $108,240 last month</small>
            <div class="percent2 border border-success rounded-5 bg-success text-white"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right h-3 w-3" aria-hidden="true"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>+15.1%</div>
        </div>
    </div>
</div>

<div class="container-fluid main2">
    <div class="row g-3">
        <div class="col-12 col-md-6 col-lg-3">
            <div class="stat-card shadow-sm">
                <div class="d-flex justify-content-between align-items-start mt-2">
                    <div class="accent-bar accent-purple">
                        <div class="stat-label">Total Orders</div>
                        <div class="stat-value">1,847</div>
                    </div>
                    <div class="icon-circle text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#6d45f9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart h-4.5 w-4.5" aria-hidden="true" style="color:var(--chart-1)"><circle cx="8" cy="21" r="1"></circle><circle cx="19" cy="21" r="1"></circle><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path></svg>
                    </div>
                </div>
                <div class="trend-badge trend-up text-end ps-0 mt-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right h-3 w-3 text-success" aria-hidden="true"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg> +12.3%
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
            <div class="stat-card shadow-sm">
                <div class="d-flex justify-content-between align-items-start mt-2">
                    <div class="accent-bar accent-blue">
                        <div class="stat-label">Avg Order Value</div>
                        <div class="stat-value">$67.42</div>
                    </div>
                    <div class="icon-circle text-info">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-receipt h-4.5 w-4.5" aria-hidden="true" style="color:var(--chart-2)"><path d="M4 2v20l2-1 2 1 2-1 2 1 2-1 2 1 2-1 2 1V2l-2 1-2-1-2 1-2-1-2 1-2-1-2 1Z"></path><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"></path><path d="M12 17.5v-11"></path></svg>
                    </div>
                </div>
                <div class="trend-badge trend-up text-end ps-0 mt-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#0090df" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right h-3 w-3 text-success" aria-hidden="true"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg> +4.8%
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
            <div class="stat-card shadow-sm">
                <div class="d-flex justify-content-between align-items-start mt-2">
                    <div class="accent-bar accent-green">
                        <div class="stat-label">Conversion Rate</div>
                        <div class="stat-value">3.24%</div>
                    </div>
                    <div class="icon-circle text-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#00b388" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-percent h-4.5 w-4.5" aria-hidden="true" style="color:var(--chart-3)"><line x1="19" x2="5" y1="5" y2="19"></line><circle cx="6.5" cy="6.5" r="2.5"></circle><circle cx="17.5" cy="17.5" r="2.5"></circle></svg>
                    </div>
                </div>
                <div class="trend-badge trend-up ps-3 text-end">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right h-3 w-3 text-success" aria-hidden="true"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>+0.3%
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
            <div class="stat-card shadow-sm">
                <div class="d-flex justify-content-between align-items-start mt-2">
                    <div class="accent-bar accent-orange">
                        <div class="stat-label">Refund Rate</div>
                        <div class="stat-value">1.2%</div>
                    </div>
                    <div class="icon-circle text-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f37513" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rotate-ccw h-4.5 w-4.5" aria-hidden="true" style="color:var(--chart-4)"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path><path d="M3 3v5h5"></path></svg>
                    </div>
                </div>
                <div class="trend-badge trend-down ps-3 text-end">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#e7000f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-down-right h-3 w-3 text-destructive" aria-hidden="true"><path d="m7 7 10 10"></path><path d="M17 7v10H7"></path></svg>-0.5%
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-4">
  <div class="row g-4">
    
    <div class="col-lg-8">
      <div class="main-card">
        <div class="d-flex justify-content-between align-items-center mb-4 dailyrevenue">
          <div>
            <h5 class="fw-bold mb-1">Daily Revenue</h5>
            <p class="text-muted small">30-day revenue and cost breakdown</p>
          </div>
          <div class="btn-group-toggle rounded-pill">
            <span class="badge bg-light text-dark border p-2 px-3 rounded-pill">Revenue</span>
            <span class="text-muted small ms-1">Cost</span>
          </div>
        </div>

        <div class="graph-container">
          <div class="y-axis">
            <span>$6.0k</span><span>$4.5k</span><span>$3.0k</span><span>$1.5k</span><span>$0.0k</span>
          </div>
          <div class="graph-area">
            <div class="css-line-chart"></div>
          </div>
        </div>
        <div class="d-flex justify-content-between mt-3 text-muted small px-5 text">
          <span>Feb 1</span><span>Feb 11</span><span>Feb 21</span><span>Feb 26</span>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="main-card">
        <h5 class="fw-bold mb-1">Revenue by Channel</h5>
        <p class="text-muted small mb-4">Traffic source distribution</p>

        <div class="channel-item">
          <div class="d-flex justify-content-between mb-1">
            <span class="small"><i class="dot dot-direct"></i> Direct</span>
            <span class="fw-bold small">38%</span>
          </div>
          <div class="custom-progress"><div class="bar bg-purple" style="width: 38%"></div></div>
        </div>

        <div class="channel-item">
          <div class="d-flex justify-content-between mb-1">
            <span class="small"><i class="dot dot-organic"></i> Organic Search</span>
            <span class="fw-bold small">28%</span>
          </div>
          <div class="custom-progress"><div class="bar bg-blue" style="width: 28%"></div></div>
        </div>

        <div class="channel-item">
          <div class="d-flex justify-content-between mb-1">
            <span class="small"><i class="dot dot-referral"></i> Referral</span>
            <span class="fw-bold small">18%</span>
          </div>
          <div class="custom-progress"><div class="bar bg-green" style="width: 18%"></div></div>
        </div>

        <div class="channel-item">
          <div class="d-flex justify-content-between mb-1">
            <span class="small"><i class="dot dot-social"></i> Social Media</span>
            <span class="fw-bold small">12%</span>
          </div>
          <div class="custom-progress"><div class="bar bg-orange" style="width: 12%"></div></div>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="container">
   <div class="main-products-wrapper">
        <div class="mb-4 products">
        <h5 class="fw-bold mb-1">Top Products</h5>
        <p class="text-muted small">Best performing products this month</p>
        </div>

      <div class="row g-4">
          <div class="col-md-6 col-lg-4">
              <div class="product-card">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                        <h6 class="fw-bold mb-1">Pro Dashboard Template</h6>
                        <span class="category-pill">Templates</span>
                        </div>
                        <span class="trend-pill positive"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-3 w-3" aria-hidden="true"><path d="M16 7h6v6"></path><path d="m22 7-8.5 8.5-5-5L2 17"></path></svg>+18.4%</span>
                    </div>
                    <div class="mt-4">
                        <h3 class="fw-bold mb-0">$17,420</h3>
                        <p class="text-muted small mb-0"><i class="bi bi-box"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package mr-1 inline h-3 w-3" aria-hidden="true"><path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"></path><path d="M12 22V12"></path><polyline points="3.29 7 12 12 20.71 7"></polyline><path d="m7.5 4.27 9 5.15"></path></svg></i> 342 units sold</p>
                    </div>
             </div>
         </div>

            <div class="col-md-6 col-lg-4">
              <div class="product-card">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                        <h6 class="fw-bold mb-1">Enterprise License</h6>
                        <span class="category-pill">Licenses</span>
                        </div>
                        <span class="trend-pill positive"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-3 w-3" aria-hidden="true"><path d="M16 7h6v6"></path><path d="m22 7-8.5 8.5-5-5L2 17"></path></svg>+12.1%</span>
                    </div>
                    <div class="mt-4">
                        <h3 class="fw-bold mb-0">$14,280</h3>
                        <p class="text-muted small mb-0"><i class="bi bi-box"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package mr-1 inline h-3 w-3" aria-hidden="true"><path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"></path><path d="M12 22V12"></path><polyline points="3.29 7 12 12 20.71 7"></polyline><path d="m7.5 4.27 9 5.15"></path></svg></i> 156 units sold</p>
                    </div>
              </div>
          </div>

            <div class="col-md-6 col-lg-4">
              <div class="product-card">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                        <h6 class="fw-bold mb-1">UI Component Kit</h6>
                        <span class="category-pill">Components</span>
                        </div>
                        <span class="trend-pill positive"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-3 w-3" aria-hidden="true"><path d="M16 7h6v6"></path><path d="m22 7-8.5 8.5-5-5L2 17"></path></svg>+8.7%</span>
                    </div>
                    <div class="mt-4">
                        <h3 class="fw-bold mb-0">$9,870</h3>
                        <p class="text-muted small mb-0"><i class="bi bi-box"></i><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package mr-1 inline h-3 w-3" aria-hidden="true"><path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"></path><path d="M12 22V12"></path><polyline points="3.29 7 12 12 20.71 7"></polyline><path d="m7.5 4.27 9 5.15"></path></svg>289 units sold</p>
                    </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="product-card">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                        <h6 class="fw-bold mb-1">Admin Starter Pack</h6>
                        <span class="category-pill">Starter Kits</span>
                        </div>
                        <span class="trend-pill negative"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-3 w-3" aria-hidden="true"><path d="M16 7h6v6"></path><path d="m22 7-8.5 8.5-5-5L2 17"></path></svg>-2.3%</span>
                    </div>
                    <div class="mt-4">
                        <h3 class="fw-bold mb-0">$8,120</h3>
                        <p class="text-muted small mb-0"><i class="bi bi-box"></i><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package mr-1 inline h-3 w-3" aria-hidden="true"><path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"></path><path d="M12 22V12"></path><polyline points="3.29 7 12 12 20.71 7"></polyline><path d="m7.5 4.27 9 5.15"></path></svg> 198 units sold</p>
                    </div>
              </div>
         </div>
         <div class="col-md-6 col-lg-4">
              <div class="product-card">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                        <h6 class="fw-bold mb-1">Email Template pack</h6>
                        <span class="category-pill">Templates</span>
                        </div>
                        <span class="trend-pill positive"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-3 w-3" aria-hidden="true"><path d="M16 7h6v6"></path><path d="m22 7-8.5 8.5-5-5L2 17"></path></svg>+22.7%</span>
                    </div>
                    <div class="mt-4">
                        <h3 class="fw-bold mb-0">$4,210</h3>
                        <p class="text-muted small mb-0"><i class="bi bi-box"></i><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package mr-1 inline h-3 w-3" aria-hidden="true"><path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"></path><path d="M12 22V12"></path><polyline points="3.29 7 12 12 20.71 7"></polyline><path d="m7.5 4.27 9 5.15"></path></svg> 267 units sold</p>
                    </div>
              </div>
         </div>
         <div class="col-md-6 col-lg-4">
              <div class="product-card">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                        <h6 class="fw-bold mb-1">Analytic Module</h6>
                        <span class="category-pill">Add ons</span>
                        </div>
                        <span class="trend-pill positive"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-3 w-3" aria-hidden="true"><path d="M16 7h6v6"></path><path d="m22 7-8.5 8.5-5-5L2 17"></path></svg>+50.7%</span>
                    </div>
                    <div class="mt-4">
                        <h3 class="fw-bold mb-0">$6,550</h3>
                        <p class="text-muted small mb-0"><i class="bi bi-box"></i><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package mr-1 inline h-3 w-3" aria-hidden="true"><path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"></path><path d="M12 22V12"></path><polyline points="3.29 7 12 12 20.71 7"></polyline><path d="m7.5 4.27 9 5.15"></path></svg> 134 units sold</p>
                    </div>
              </div>
         </div>
      </div>
  </div>
</div>

<div class="container py-4 pb-0">
  <div class="row g-4">
    <div class="col-lg-6">
      <div class="dashboard-card h-100">
        <div class="mb-4 salesbyregion">
          <h5 class="fw-bold mb-1">Sales by Region</h5>
          <p class="text-muted small">Revenue distribution across regions</p>
        </div>

        <div class="region-chart mt-4">
          <div class="region-item">
            <span class="region-label">North America</span>
            <div class="region-bar-wrapper">
              <div class="region-bar" style="width: 85%;"></div>
            </div>
          </div>
          <div class="region-item">
            <span class="region-label">Europe</span>
            <div class="region-bar-wrapper">
              <div class="region-bar" style="width: 65%;"></div>
            </div>
          </div>
          <div class="region-item">
            <span class="region-label">Asia Pacific</span>
            <div class="region-bar-wrapper">
              <div class="region-bar" style="width: 45%;"></div>
            </div>
          </div>
          <div class="region-item">
            <span class="region-label">Latin America</span>
            <div class="region-bar-wrapper">
              <div class="region-bar" style="width: 25%;"></div>
            </div>
          </div>
          <div class="region-item">
            <span class="region-label">Middle East</span>
            <div class="region-bar-wrapper">
              <div class="region-bar" style="width: 15%;"></div>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-between mt-3 text-muted small ps-5 regionchart-labels">
          <span>$0k</span><span>$15k</span><span>$30k</span><span>$45k</span><span>$60k</span>
        </div>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="dashboard-card h-100">
        <div class="mb-4 salesbyregion">
          <h5 class="fw-bold mb-1">Recent Transactions</h5>
          <p class="text-muted small">Latest customer purchases</p>
        </div>

        <div class="transaction-list">
          <div class="transaction-item">
            <div class="d-flex align-items-center">
              <div class="avatar avatar-purple">SC</div>
              <div class="ms-3">
                <p class="mb-0 fw-bold small">Sarah Chen</p>
                <p class="mb-0 text-muted tiny"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-3 w-3" aria-hidden="true"><path d="M12 6v6l4 2"></path><circle cx="12" cy="12" r="10"></circle></svg> 2 min ago</p>
              </div>
            </div>
            <span class="fw-bold small">+$199.99</span>
          </div>

          <div class="transaction-item">
            <div class="d-flex align-items-center">
              <div class="avatar avatar-blue">MJ</div>
              <div class="ms-3">
                <p class="mb-0 fw-bold small">Marcus Johnson</p>
                <p class="mb-0 text-muted tiny"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-3 w-3" aria-hidden="true"><path d="M12 6v6l4 2"></path><circle cx="12" cy="12" r="10"></circle></svg> 8 min ago</p>
              </div>
            </div>
            <span class="fw-bold small">+$49.99</span>
          </div>

          <div class="transaction-item">
            <div class="d-flex align-items-center">
              <div class="avatar avatar-green">PS</div>
              <div class="ms-3">
                <p class="mb-0 fw-bold small">Priya Sharma</p>
                <p class="mb-0 text-muted tiny"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-3 w-3" aria-hidden="true"><path d="M12 6v6l4 2"></path><circle cx="12" cy="12" r="10"></circle></svg> 22 min ago</p>
              </div>
            </div>
            <span class="fw-bold small">+$149.00</span>
          </div>

          <div class="transaction-item">
            <div class="d-flex align-items-center">
              <div class="avatar avatar-orange">AR</div>
              <div class="ms-3">
                <p class="mb-0 fw-bold small">Alex Rivera</p>
                <p class="mb-0 text-muted tiny"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-3 w-3" aria-hidden="true"><path d="M12 6v6l4 2"></path><circle cx="12" cy="12" r="10"></circle></svg> 1h ago</p>
              </div>
            </div>
            <span class="fw-bold small">+$29.99</span>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection