@extends('welcome')
@push('css')
<style>
.main h1 {
font-size: 20px;
font-weight: 700;
color:var(--bs-body-color);
letter-spacing: -0.5px;
}
.rounded-5{
background: var(--bs-body-bg);
}
.cards-container {
margin-top: 20px;
}
.row{
margin-left: 0; 
}
.stat-card {
background:var(--bs-body-bg);
border: 1px solid grey;
border-radius: 24px;
padding: 10px;
display: flex;
justify-content: space-between;
align-items: center;
box-shadow: 0 2px 4px rgba(0,0,0,0.02);
transition: all 0.3s ease;
}
.stat-card:hover {
border-color: #4752a9;
box-shadow: 0 4px 12px rgba(0,0,0,0.05);    
}
.border-purple {
border-color: #7158e233;
}
.stat-content{
padding-left:10px;
}
.stat-label {
color:var(--bs-body-color);
font-size: 12px;
font-weight: 500;
padding-top: 10px;
}
.stat-value {
font-size: 22px;
font-weight: 800;
color:var(--bs-body-color);
padding-top: 5px;
}
.stat-subtext {
color: #94a3b8;
font-size: 10px;
margin-top: 0.5rem;
}
.icon-box {
width: 45px;
height: 45px;
border-radius: 30%;
display: flex;
align-items: center;
justify-content: center;
}
.bg-blue-soft { 
background: linear-gradient(90deg, #0090df 0%, #6d45f9 100%);
}
.bg-teal-soft { 
background: linear-gradient(135deg, #00b388 0%, #0090df 100%);
}
.bg-purple-soft { 
background: linear-gradient(135deg, #c33dbd 0%, #6d45f9 100%); 
}
.trend-up {
color: #10b981;
font-weight: 600;
margin-right: 4px;
}
.pipeline-row {
display: flex;
align-items: center;
gap: 12px;
margin-bottom: 10px;
}
.pipeline-label {
min-width: 90px;
text-align: right;
font-size: 13px;
font-weight: 500;
color: #6c757d;
}
.pipeline-bar {
border-radius: 20px;
padding: 6px 14px;
display: flex;
justify-content: space-between;
color: #fff;
font-size: 12px;
font-weight: 500;
min-width: 80px;
}
.pipeline-footer {
display: flex;
flex-wrap: wrap;
gap: 16px;
margin-top: 20px;
padding-top: 16px;
border-top: 1px solid #e5e5e5;
}
.footer-stat {
  font-size: 12px;
  color: #6c757d;
  display: flex;
  align-items: center;
  gap: 6px;
}
.footer-stat strong {
color: #212529;
}
.dot {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  display: inline-block;
}
.crm-card {
background:var(--bs-body-bg);
color:var(--bs-body-color);
border: 1px solid #e5e7eb;
border-radius: 12px;
padding: 1.25rem;
height: 100%;
}
.card-title {
  font-size: 15px;
  margin: 0 0 4px;
}
.card-sub {
  font-size: 12px;
  margin: 0 0 14px;
}
.legend {
display: flex;
justify-content: end;
margin-right: 5px;
gap: 14px;
margin-bottom: 14px;
}
.legend-item {
font-size: 12px;
color: #6c757d;
display: flex;
align-items: center;
gap: 5px;
}
.dot {
width: 8px;
height: 8px;
border-radius: 50%;
display: inline-block;
flex-shrink: 0;
}
.chart-area {
display: flex;
align-items: flex-end;
gap: 8px;
height: 200px;
width: 100%;
padding-top: 10px;
}
.month-group {
display: flex;
align-items: flex-end;
gap: 3px;
flex: 1;
}
.bar {
border-radius: 25px 25px 0 0;
width: 100%;
}
.bar-won {
   background: #544ac2;
  }
.bar-lost { 
  background: #ED93B1; 
}
.month-labels {
  display: flex;
  gap: 8px;
  margin-top: 6px;
}
.month-label {
flex: 1;
text-align: center;
font-size: 11px;
color: #6c757d;
}
.deal-row {
display: flex;
align-items: center;
gap: 10px;
padding: 9px 0;
border-bottom: 1px solid #f0f0f0;
}
.deal-row:last-child {
border-bottom: none;
padding-bottom: 0;
}
.deal-rank {
width: 26px;
height: 26px;
border-radius: 50%;
background: #8b72e3;
font-size: 11px;
font-weight: 600;
display: flex;
align-items: center;
justify-content: center;
flex-shrink: 0;
}
.deal-info {
flex: 1;
 }
.deal-name {
font-size: 11px;
font-weight: 550;
margin: 0;
}
.deal-company {
font-size: 11px;
margin: 0;
}
.deal-right {
text-align: right;
flex-shrink: 0;
}
.deal-amount {
font-size: 13px;
display: block;
}
.dpill {
font-size: 10px;
padding: 2px 8px;
border-radius: 20px;
display: inline-block;
margin-top: 3px;
}
.neg { 
background: #dbeafe; color: #1e40af; 
}
.prop {
   background: #fef3c7; color: #92400e; 
  }
.qual { 
  background: #d1fae5; color: #065f46; 
}
.crm-card {
  border: 1px solid #e5e7eb;
  border-radius: 12px;
  padding:10px;
  height: 100%;
}
.card-title {
  font-size: 15px;
  font-weight: 500;
  margin: 0 0 4px;
}
.card-sub {
  font-size: 12px;
  color: #6c757d;
  margin: 0 0 16px;
}
.avatar {
  width: 38px;
  height: 38px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 12px;
  font-weight: 500;
  flex-shrink: 0;
}
.avatar-blue   {
  background: linear-gradient(to right, #7367f0, #3c96e1);
      color: #1e40af; 
}
.avatar-green  { 
background: #d1fae5; 
color: #065f46; 
}
.avatar-yellow { 
background: #fef3c7; 
color: #92400e; 
}
.avatar-purple { 
background: #ede9fe; 
color: #5b21b6;
}
.member-row {
display: flex;
align-items: center;
gap: 12px;
padding: 10px 0;
border-bottom: 1px solid #f0f0f0;
}
.member-row:last-child {
border-bottom: none;
padding-bottom: 0;
}
.member-info { 
flex: 1;
}
.member-name {
font-size: 13px;
font-weight: 500;
margin: 0;
}
.member-deals {
font-size: 11px;
color: #6c757d;
margin: 0;
}
.member-right {
text-align: right;
min-width: 90px;
}
.member-amount {
font-size: 13px;
font-weight: 500;
display: block;
}
.progress-track {
background: #f0f0f0;
border-radius: 4px;
height: 5px;
width: 100%;
margin-top: 4px;
}
.progress-fill {
height: 5px;
border-radius: 4px;
background: #7F77DD;
}
.w-62 { width: 62%; }
.w-55 { width: 55%; }
.w-48 { width: 48%; }
.w-44 { width: 44%; }
.w-38 { width: 38%; }
.progress-pct {
font-size: 11px;
color: #6c757d;
display: block;
margin-top: 2px;
}
.activity-row {
display: flex;
align-items: flex-start;
gap: 10px;
padding: 10px 0;
border-bottom: 1px solid #f0f0f0;
}
.activity-row:last-child {
border-bottom: none;
padding-bottom: 0;
}
.act-icon {
width: 30px;
height: 30px;
border-radius: 50%;
display: flex;
align-items: center;
justify-content: center;
flex-shrink: 0;
font-size: 13px;
}
.act-icon-blue   { 
background: #dbeafe; 
}
.act-icon-green  { 
background: #d1fae5; 
}
.act-icon-yellow { 
background: #fef3c7; 
}
.act-icon-purple { 
background: #ede9fe; 
}
.act-text {
flex: 1;
font-size: 12px;
color:var(--bs-color-bg);
margin: 0;
line-height: 1.5;
}
.act-time {
font-size: 11px;
color: #6c757d;
flex-shrink: 0;
padding-top: 1px;
}
</style>
@endpush
@section('pages')
<div class="container main pl-4">
    <h1>Pipeline & Deals</h1>
    <p class="text-secondary">Track your sales funnel, monitor deal velocity, and close faster.</p>
</div>
<div class="container cards-container p-0">
    <div class="row g-4">
        <div class="col-12 col-md-4">
            <div class="stat-card">
                <div class="stat-content">
                    <div class="stat-label">Pipeline Value</div>
                    <div class="stat-value">$842K</div>
                    <div class="stat-subtext">12 open deals</div>
                </div>
                <div class="icon-box bg-blue-soft">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap h-5 w-5" aria-hidden="true"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path></svg>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="stat-card">
                <div class="stat-content">
                    <div class="stat-label">Won This Month</div>
                    <div class="stat-value">$184K</div>
                    <div class="stat-subtext">8 deals closed</div>
                </div>
                <div class="icon-box bg-teal-soft">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trophy h-5 w-5" aria-hidden="true"><path d="M10 14.66v1.626a2 2 0 0 1-.976 1.696A5 5 0 0 0 7 21.978"></path><path d="M14 14.66v1.626a2 2 0 0 0 .976 1.696A5 5 0 0 1 17 21.978"></path><path d="M18 9h1.5a1 1 0 0 0 0-5H18"></path><path d="M4 22h16"></path><path d="M6 9a6 6 0 0 0 12 0V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1z"></path><path d="M6 9H4.5a1 1 0 0 1 0-5H6"></path></svg>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="stat-card">
                <div class="stat-content">
                    <div class="stat-label">Win Rate</div>
                    <div class="stat-value">42.8%</div>
                    <div class="stat-subtext">
                        <span class="trend-up"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-3 w-3 text-success" aria-hidden="true"><path d="M16 7h6v6"></path><path d="m22 7-8.5 8.5-5-5L2 17"></path></svg> +3.2%</span> vs last quarter
                    </div>
                </div>
                <div class="icon-box bg-purple-soft">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target h-5 w-5" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container py-3 mt-3 rounded-5 ms-3">
  <p class="fw-bold mb-1">Deal Pipeline</p>
  <p class="text-muted small mb-4">Funnel progression from Lead to Closed Won</p>
  <div class="pipeline-row">
    <span class="pipeline-label">Lead</span>
    <div class="pipeline-bar" style="width:100%; background:#4d40df;">
      <span>18 deals</span><span>$320K</span>
    </div>
  </div>
  <div class="pipeline-row">
    <span class="pipeline-label">Qualified</span>
    <div class="pipeline-bar" style="width:70%; background:#418dd9;">
      <span>12 deals</span><span>$280K</span>
    </div>
  </div>
  <div class="pipeline-row">
    <span class="pipeline-label">Proposal</span>
    <div class="pipeline-bar" style="width:66%; background:#409b45;">
      <span>8 deals</span><span>$195K</span>
    </div>
  </div>
  <div class="pipeline-row">
    <span class="pipeline-label">Negotiation</span>
    <div class="pipeline-bar" style="width:48%; background:#dd572b;">
      <span>5 deals</span><span>$142K</span>
    </div>
  </div>
  <div class="pipeline-row">
    <span class="pipeline-label">Closed Won</span>
    <div class="pipeline-bar" style="width:32%; background:#c455aa;">
      <span>3 deals</span><span>$84K</span>
    </div>
  </div>
<div class="pipeline-footer">
    <span class="footer-stat">
      <span class="dot" style="background:#7F77DD;"></span>
      Total pipeline: <strong>46 deals</strong>
    </span>
    <span class="footer-stat">
      <span class="dot" style="background:#D4537E;"></span>
      Avg. deal size: <strong>$22.2K</strong>
    </span>
    <span class="footer-stat">
      <span class="dot" style="background:#1D9E75;"></span>
      Lead-to-close: <strong>16.7%</strong>
    </span>
 </div>
</div>

<div class="row g-3 mt-2">
    <div class="col-lg-7 col-md-12">
    <div class="crm-card">
      <p class="card-title fw-bold">Monthly deal flow</p>
      <p class="card-sub text-muted">Won vs lost deals over the past 6 months</p>

      <div class="legend">
        <span class="legend-item">
          <span class="dot" style="background:#ED93B1;"></span>Lost
       </span>
        <span class="legend-item">
          <span class="dot" style="background:#7F77DD;"></span>Won
        </span>
      </div>

      <div class="chart-area">
        <div class="month-group">
          <div class="bar bar-won" style="height:100px;"></div>
          <div class="bar bar-lost" style="height:50px;"></div>
        </div>
        <div class="month-group">
          <div class="bar bar-won" style="height:130px;"></div>
          <div class="bar bar-lost" style="height:50px;"></div>
        </div>
        <div class="month-group">
          <div class="bar bar-won" style="height:150px;"></div>
          <div class="bar bar-lost" style="height:50px;"></div>
        </div>
        <div class="month-group">
          <div class="bar bar-won" style="height:110px;"></div>
          <div class="bar bar-lost" style="height:50px;"></div>
        </div>
        <div class="month-group">
          <div class="bar bar-won" style="height:100px;"></div>
          <div class="bar bar-lost" style="height:50px;"></div>
        </div>
        <div class="month-group">
          <div class="bar bar-won" style="height:75px;"></div>
          <div class="bar bar-lost" style="height:50px;"></div>
        </div>
      </div>

      <div class="month-labels">
        <span class="month-label">Sep</span>
        <span class="month-label">Oct</span>
        <span class="month-label">Nov</span>
        <span class="month-label">Dec</span>
        <span class="month-label">Jan</span>
        <span class="month-label">Feb</span>
      </div>

    </div>
  </div>
  <div class="col-lg-5 col-md-12">
    <div class="crm-card">
      <p class="card-title fw-bold">Top deals</p>
      <p class="card-sub text-muted">Highest-value opportunities in the pipeline</p>

      <div class="deal-row">
        <div class="deal-rank">#1</div>
        <div class="deal-info">
          <p class="deal-name">Platform Enterprise License</p>
          <p class="deal-company text-muted">Nexora Corp</p>
        </div>
        <div class="deal-right">
          <span class="deal-amount fw-bold">$68,000</span>
          <span class="dpill neg">Negotiation</span>
        </div>
      </div>

      <div class="deal-row">
        <div class="deal-rank">#2</div>
        <div class="deal-info">
          <p class="deal-name">Annual SaaS Bundle</p>
          <p class="deal-company">Stratus Health</p>
        </div>
        <div class="deal-right">
          <span class="deal-amount fw-bold">$52,500</span>
          <span class="dpill prop">Proposal</span>
        </div>
      </div>

      <div class="deal-row">
        <div class="deal-rank">#3</div>
        <div class="deal-info">
          <p class="deal-name">API Integration Suite</p>
          <p class="deal-company">Orion Analytics</p>
        </div>
        <div class="deal-right">
          <span class="deal-amount fw-bold">$41,200</span>
          <span class="dpill qual">Qualified</span>
        </div>
      </div>

      <div class="deal-row">
        <div class="deal-rank">#4</div>
        <div class="deal-info">
          <p class="deal-name">Team Seats x120</p>
          <p class="deal-company">Veridian Group</p>
        </div>
        <div class="deal-right">
          <span class="deal-amount fw-bold">$36,000</span>
          <span class="dpill prop">Proposal</span>
        </div>
      </div>

      <div class="deal-row">
        <div class="deal-rank">#5</div>
        <div class="deal-info">
          <p class="deal-name">Data Module Expansion</p>
          <p class="deal-company">Cascade Systems</p>
        </div>
        <div class="deal-right">
          <span class="deal-amount fw-bold">$28,400</span>
          <span class="dpill neg">Negotiation</span>
        </div>
      </div>

    </div>
  </div>

</div>
<div class="row g-3 mt-2">
  <div class="col-lg-6 col-md-12">
    <div class="crm-card">
      <p class="card-title fw-bold">Team performance</p>
      <p class="card-sub text-muted">Individual sales metrics this quarter</p>

      <div class="member-row">
        <div class="avatar avatar-blue">SC</div>
        <div class="member-info">
          <p class="member-name">Sarah Chen</p>
          <p class="member-deals">14 deals won</p>
        </div>
        <div class="member-right">
          <span class="member-amount">$94,200</span>
          <div class="progress-track"><div class="progress-fill w-62"></div></div>
          <span class="progress-pct">62%</span>
        </div>
      </div>

      <div class="member-row">
        <div class="avatar avatar-green">ML</div>
        <div class="member-info">
          <p class="member-name">Marcus Lee</p>
          <p class="member-deals">11 deals won</p>
        </div>
        <div class="member-right">
          <span class="member-amount">$78,600</span>
          <div class="progress-track"><div class="progress-fill w-55"></div></div>
          <span class="progress-pct">55%</span>
        </div>
      </div>

      <div class="member-row">
        <div class="avatar avatar-green">PN</div>
        <div class="member-info">
          <p class="member-name">Priya Nakamura</p>
          <p class="member-deals">9 deals won</p>
        </div>
        <div class="member-right">
          <span class="member-amount">$61,400</span>
          <div class="progress-track"><div class="progress-fill w-48"></div></div>
          <span class="progress-pct">48%</span>
        </div>
      </div>

      <div class="member-row">
        <div class="avatar avatar-yellow">AR</div>
        <div class="member-info">
          <p class="member-name">Alex Rivera</p>
          <p class="member-deals">8 deals won</p>
        </div>
        <div class="member-right">
          <span class="member-amount">$52,800</span>
          <div class="progress-track"><div class="progress-fill w-44"></div></div>
          <span class="progress-pct">44%</span>
        </div>
      </div>

      <div class="member-row">
        <div class="avatar avatar-purple">JM</div>
        <div class="member-info">
          <p class="member-name">Jordan Mills</p>
          <p class="member-deals">6 deals won</p>
        </div>
        <div class="member-right">
          <span class="member-amount">$38,200</span>
          <div class="progress-track"><div class="progress-fill w-38"></div></div>
          <span class="progress-pct">38%</span>
        </div>
      </div>

    </div>
  </div>
  <div class="col-lg-6 col-md-12">
    <div class="crm-card">
      <p class="card-title fw-bold">Recent activities</p>
      <p class="card-sub fs-muted">Latest pipeline updates from your team</p>

      <div class="activity-row">
        <div class="act-icon act-icon-blue">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#6d45f9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-handshake h-3.5 w-3.5 text-chart-1" aria-hidden="true"><path d="m11 17 2 2a1 1 0 1 0 3-3"></path><path d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4"></path><path d="m21 3 1 11h-2"></path><path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3"></path><path d="M3 4h8"></path></svg>
        </div>
        <p class="act-text">Sarah moved Acme Corp to Proposal</p>
        <span class="act-time">5m ago</span>
      </div>

      <div class="activity-row">
        <div class="act-icon act-icon-green">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2f9f3d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check h-3.5 w-3.5 text-success" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>
        </div>
        <p class="act-text">Deal #284 marked as Won ($42K)</p>
        <span class="act-time">22m ago</span>
      </div>

      <div class="activity-row">
        <div class="act-icon act-icon-blue">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0090df" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone h-3.5 w-3.5 text-chart-2" aria-hidden="true"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path></svg>
        </div>
        <p class="act-text">Marcus completed discovery call with Orion</p>
        <span class="act-time">1h ago</span>
      </div>

      <div class="activity-row">
        <div class="act-icon act-icon-yellow">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#f37513" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text h-3.5 w-3.5 text-chart-4" aria-hidden="true"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z"></path><path d="M14 2v5a1 1 0 0 0 1 1h5"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg>
        </div>
        <p class="act-text">Proposal sent to Veridian Group</p>
        <span class="act-time">2h ago</span>
      </div>

      <div class="activity-row">
        <div class="act-icon act-icon-green">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00b388" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail h-3.5 w-3.5 text-chart-3" aria-hidden="true"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path><rect x="2" y="4" width="20" height="16" rx="2"></rect></svg>
        </div>
        <p class="act-text">Follow-up email sent to Cascade Systems</p>
        <span class="act-time">3h ago</span>
      </div>

      <div class="activity-row">
        <div class="act-icon act-icon-purple">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#c33dbd" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target h-3.5 w-3.5 text-chart-5" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
        </div>
        <p class="act-text">New lead qualified: Bloom Studios ($18K)</p>
        <span class="act-time">4h ago</span>
      </div>

    </div>
  </div>
</div>
@endsection