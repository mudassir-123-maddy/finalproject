@extends('welcome')
@push('css')
<style>
.header h1 {
font-size: 20px;
font-weight: 600;
margin-bottom: 4px;
}
.header p {
font-size: 12px;
}
.stat-grid {
display: grid;
grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
gap: 10px;
margin-bottom: 20px;
}
.stat {
background: #fff;
border: 0.5px solid #e0e0dd;
border-radius: 10px;
padding: 14px 16px;
}
.stat-label {
font-size: 11px;
color: #888;
text-transform: uppercase;
letter-spacing: 0.06em;
margin-bottom: 6px;
}
.stat-value {
font-size: 28px;
font-weight: 500;
}
.head {
font-size: 11px;
}
.size {
font-size: 9px;
}
.toolbar {
display: flex;
align-items: center;
justify-content: space-between;
margin-bottom: 16px;
flex-wrap: wrap;
gap: 8px;
}
.filters {
display: flex;
justify-content: end;
gap: 6px;
flex-wrap: wrap;
align-items: center;
}
.filter-btn {
font-size: 9px;
text-decoration: none;
padding: 4px 13px;
border-radius: 99px;
border: 0.5px solid #d4d4d0;
background: transparent;
color: #666;
cursor: pointer;
transition: all 0.15s;
}
.filter-btn.active {
background: linear-gradient(to right, #7367f0, #3c96e1);
color: #fff;
text-decoration: none;
border-color: transparent;
}
.board {
font-size: 11px;
text-transform: uppercase;
letter-spacing: 0.08em;
font-weight: 700;
}
.col-dot {
width: 7px;
height: 7px;
border-radius: 50%;
display: inline-block;
}
.dot-backlog {
background: #888;
}
.dot-inprogress {
background: #7367f0;
}
.dot-inreview {
background: #f0a500;
}
.dot-done {
background: #28c76f;
}
.col-header {
border-bottom: 1.5px solid #e0e0dd;
}
.board-card {
border: 0.5px solid #e0e0dd;
border-radius: 10px;
}
.badge-type {
font-size: 9px;
border-radius: 99px;
}
.badge-high {
background: #e74c3c;
font-size: 9px;
border-radius: 99px;
}
.badge-medium {
background: #f0a500;
font-size: 9px;
border-radius: 99px;
}
.badge-low {
background: #eaf3de;
color: #3B6D11;
font-size: 9px;
border-radius: 99px;
}
.avatar {
width: 24px;
height: 24px;
border-radius: 50%;
font-size: 9px;
}
.av-jl {
background: #7367f0;
}
.av-ak {
background: #3c96e1;
}
.av-mr {
background: #28c76f;
}
.av-sc {
background: #f0a500;
}
.av-mk {
background: #e74c3c;
}
</style>
@endpush
@section('pages')
<div class="page">
  <div class="conatiner-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="header">
                <h1>Product Roadmap</h1>
                <p class="text-muted">Plan, prioritize, and track what your team is building next</p>
         </div>
      </div>
      <div class="filters col-lg-6">
           <a href="#"class="filter-btn active" role="button">All</a>
           <a href="#"class="filter-btn" role="button">High</a>
           <a href="#"class="filter-btn" role="button">Medium</a>
           <a href="#"class="filter-btn" role="button">Low</a>
           <a href="#"class="filter-btn" role="button">Features</a>
        </div>
    </div>
  </div>
  <div class="stat-grid">
    <div class="stat">
        <div class="stat-label">Total Items</div>
        <div class="stat-value text-muted">14</div>
    </div>
    <div class="stat">
        <div class="stat-label">Total Votes</div>
        <div class="stat-value text-primary">1,114</div>
    </div>
    <div class="stat">
        <div class="stat-label">High Priority</div>
        <div class="stat-value text-danger">6</div>
    </div>
    <div class="stat">
        <div class="stat-label">Features</div>
        <div class="stat-value text-primary">7</div>
  </div>
    <div class="stat">
        <div class="stat-label">Bugs</div>
        <div class="stat-value text-danger-emphasis">3</div></div>
  </div>
</div>
<div class="d-flex align-items-center gap-2 text-muted mb-3 board">
  Board View
</div>

<div class="row g-3">
  <div class="col-lg-3 col-md-6">
    <div class="col-header d-flex justify-content-between align-items-center mb-3 pb-2">
      <div class="d-flex align-items-center gap-2 fw-semibold">
        <span class="col-dot dot-backlog"></span> Backlog
      </div>
      <span class="text-muted">5</span>
    </div>
    <div class="board-card p-3 mb-2">
      <div class="d-flex gap-1 mb-2">
        <span class="badge-type px-2 py-1 text-muted bg-primary-subtle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#6d45f9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles h-3 w-3" aria-hidden="true"><path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"></path><path d="M20 2v4"></path><path d="M22 4h-4"></path><circle cx="4" cy="20" r="2"></circle></svg>FEATURE</span>
        <span class="badge-high px-2 py-1 text-white">High</span>
      </div>
      <p class="fw-semibold mb-1 head">Custom webhook integrations</p>
      <p class="text-muted mb-2 size">Allow users to configure outgoing webhooks for events like task completion, status changes, and more.</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex gap-3 text-muted" style="font-size:11px;">
          <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-up h-3.5 w-3.5" aria-hidden="true"><path d="m18 15-6-6-6 6"></path></svg> 98</span><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square h-3 w-3" aria-hidden="true"><path d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z"></path></svg> 9</span>
        </div>
        <div class="avatar av-jl d-flex align-items-center justify-content-center text-white fw-semibold">JL</div>
      </div>
    </div>
    <div class="board-card p-3 mb-2">
      <div class="d-flex gap-1 mb-2">
        <span class="badge-type px-2 py-1 text-muted">
          <span class="badge-type px-2 py-1 text-muted bg-primary-subtle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#6d45f9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles h-3 w-3" aria-hidden="true"><path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"></path><path d="M20 2v4"></path><path d="M22 4h-4"></path><circle cx="4" cy="20" r="2"></circle></svg>FEATURE</span>
         <span class="badge-medium px-2 py-1 text-white">Medium</span>
       </span>
      </div>
      <p class="fw-semibold mb-1 head">API rate limiting dashboard</p>
      <p class="text-muted mb-2 size">Display real-time API usage metrics with rate limit status, remaining quota, and historical data.</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex gap-3 text-muted" style="font-size:11px;">
          <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-up h-3.5 w-3.5" aria-hidden="true"><path d="m18 15-6-6-6 6"></path></svg>73</span><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-up h-3.5 w-3.5" aria-hidden="true"><path d="m18 15-6-6-6 6"></path></svg> 7</span>
        </div>
        <div class="avatar av-ak d-flex align-items-center justify-content-center text-white fw-semibold">AK</div>
      </div>
    </div>
    <div class="board-card p-3 mb-2">
      <div class="d-flex gap-1 mb-2">
        <span class="badge-type px-2 py-1 text-muted bg-primary-subtle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#0090df" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap h-3 w-3" aria-hidden="true"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path></svg> IMPROVEMENT</span>
        <span class="badge-low px-2 py-1">Low</span>
      </div>
      <p class="fw-semibold mb-1 head">Notification grouping and digest</p>
      <p class="text-muted mb-2 size">Group related notifications and offer daily/weekly digest emails to reduce notification fatigue.</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex gap-3 text-muted" style="font-size:11px;">
          <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-up h-3.5 w-3.5" aria-hidden="true"><path d="m18 15-6-6-6 6"></path></svg>41</span><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square h-3 w-3" aria-hidden="true"><path d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z"></path></svg> 4</span>
        </div>
        <div class="avatar av-sc d-flex align-items-center justify-content-center text-white fw-semibold">SC</div>
      </div>
    </div>
    <div class="board-card p-3 mb-2">
      <div class="d-flex gap-1 mb-2">
        <span class="badge-type px-2 py-1 text-muted bg-primary-subtle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#0090df" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap h-3 w-3" aria-hidden="true"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path></svg> IMPROVEMENT</span>
        <span class="badge-low px-2 py-1">Low</span>
      </div>
      <p class="fw-semibold mb-1 head">Notification grouping and digest</p>
      <p class="text-muted mb-2 size">Group related notifications and offer daily/weekly digest emails to reduce notification fatigue.</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex gap-3 text-muted" style="font-size:11px;">
          <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-up h-3.5 w-3.5" aria-hidden="true"><path d="m18 15-6-6-6 6"></path></svg>41</span><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square h-3 w-3" aria-hidden="true"><path d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z"></path></svg> 4</span>
        </div>
        <div class="avatar av-sc d-flex align-items-center justify-content-center text-white fw-semibold">SC</div>
      </div>
    </div>
  </div>
 <div class="col-lg-3 col-md-6">
    <div class="col-header d-flex justify-content-between align-items-center mb-3 pb-2">
      <div class="d-flex align-items-center gap-2 fw-semibold">
        <span class="col-dot dot-inprogress"></span> In Progress
      </div>
      <span class="text-muted">3</span>
    </div>
    <div class="board-card p-3 mb-2">
      <div class="d-flex gap-1 mb-2">
         <span class="badge-type px-2 py-1 text-muted bg-primary-subtle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#6d45f9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles h-3 w-3" aria-hidden="true"><path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"></path><path d="M20 2v4"></path><path d="M22 4h-4"></path><circle cx="4" cy="20" r="2"></circle></svg>FEATURE</span>
        <span class="badge-high px-2 py-1 text-white">High</span>
      </div>
      <p class="fw-semibold mb-1 head">Real-time collaboration cursors</p>
      <p class="text-muted mb-2 size">Show live cursors and selections of other team members editing the same document in real time with the passage.</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex gap-2 text-muted" style="font-size:11px;">
          <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-up h-3.5 w-3.5" aria-hidden="true"><path d="m18 15-6-6-6 6"></path></svg>142</span><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar h-3 w-3" aria-hidden="true"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg> Mar 15</span><span>&#9707; 14</span>
        </div>
        <div class="avatar av-ak d-flex align-items-center justify-content-center text-white fw-semibold">AK</div>
      </div>
    </div>
    <div class="board-card p-3 mb-2">
      <div class="d-flex gap-1 mb-2">
        <span class="badge-type px-2 py-1 text-muted bg-danger-subtle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#e7000f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bug h-3 w-3" aria-hidden="true"><path d="M12 20v-9"></path><path d="M14 7a4 4 0 0 1 4 4v3a6 6 0 0 1-12 0v-3a4 4 0 0 1 4-4z"></path><path d="M14.12 3.88 16 2"></path><path d="M21 21a4 4 0 0 0-3.81-4"></path><path d="M21 5a4 4 0 0 1-3.55 3.97"></path><path d="M22 13h-4"></path><path d="M3 21a4 4 0 0 1 3.81-4"></path><path d="M3 5a4 4 0 0 0 3.55 3.97"></path><path d="M6 13H2"></path><path d="m8 2 1.88 1.88"></path><path d="M9 7.13V6a3 3 0 1 1 6 0v1.13"></path></svg> BUG</span>
        <span class="badge-high px-2 py-1 text-white">High</span>
      </div>
      <p class="fw-semibold mb-1 head">Fix CSV export encoding for Unicode</p>
      <p class="text-muted mb-2 size">Exported CSV files show garbled characters for non-Latin scripts. Add BOM header and UTF-8 fix with the passage.</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex gap-3 text-muted" style="font-size:11px;">
          <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-up h-3.5 w-3.5" aria-hidden="true"><path d="m18 15-6-6-6 6"></path></svg>142</span><span>&#9707; 8</span>
        </div>
        <div class="avatar av-mr d-flex align-items-center justify-content-center text-white fw-semibold">MR</div>
      </div>
    </div>
    <div class="board-card p-3 mb-2">
      <div class="d-flex gap-1 mb-2">
        <span class="badge-type px-2 py-1 text-muted bg-primary-subtle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#0090df" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap h-3 w-3" aria-hidden="true"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path></svg> IMPROVEMENT</span>
        <span class="badge-medium px-2 py-1 text-white">Medium</span>
      </div>
      <p class="fw-semibold mb-1 head">Bulk action toolbar for tables</p>
      <p class="text-muted mb-2 size">Add a floating toolbar when multiple rows are selected, supporting bulk delete, export, and tag actions.</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex gap-3 text-muted" style="font-size:11px;">
          <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-up h-3.5 w-3.5" aria-hidden="true"><path d="m18 15-6-6-6 6"></path></svg>142</span><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar h-3 w-3" aria-hidden="true"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg> Mar 22</span><span> 5</span>
        </div>
        <div class="avatar av-jl d-flex align-items-center justify-content-center text-white fw-semibold">JL</div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="col-header d-flex justify-content-between align-items-center mb-3 pb-2">
      <div class="d-flex align-items-center gap-2 fw-semibold">
        <span class="col-dot dot-inreview"></span> In Review
      </div>
      <span class="text-muted">3</span>
    </div>
    <div class="board-card p-3 mb-2">
      <div class="d-flex gap-1 mb-2">
        <span class="badge-type px-2 py-1 text-muted bg-primary-subtle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#0090df" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap h-3 w-3" aria-hidden="true"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path></svg> IMPROVEMENT</span>
        <span class="badge-medium px-2 py-1 text-white">Medium</span>
      </div>
      <p class="fw-semibold mb-1 head">Dark mode color contrast improvements</p>
      <p class="text-muted mb-2 size">Several UI elements in dark mode have insufficient contrast ratios. Audit and fix all affected components.</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex gap-3 text-muted" style="font-size:11px;">
          <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-up h-3.5 w-3.5" aria-hidden="true"><path d="m18 15-6-6-6 6"></path></svg>142</span><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square h-3 w-3" aria-hidden="true"><path d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z"></path></svg> 6</span>
        </div>
        <div class="avatar av-sc d-flex align-items-center justify-content-center text-white fw-semibold">SC</div>
      </div>
    </div>
    <div class="board-card p-3 mb-2">
      <div class="d-flex gap-1 mb-2">
        <span class="badge-type px-2 py-1 text-muted bg-primary-subtle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#6d45f9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles h-3 w-3" aria-hidden="true"><path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"></path><path d="M20 2v4"></path><path d="M22 4h-4"></path><circle cx="4" cy="20" r="2"></circle></svg>FEATURE</span>
        <span class="badge-high px-2 py-1 text-white">High</span>
      </div>
      <p class="fw-semibold mb-1 head">Two-factor authentication (TOTP)</p>
      <p class="text-muted mb-2 size">Implement TOTP-based 2FA with QR code setup, backup codes, and enforcement policies for organizations.</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex gap-2 text-muted" style="font-size:11px;">
          <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-up h-3.5 w-3.5" aria-hidden="true"><path d="m18 15-6-6-6 6"></path></svg>134</span><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar h-3 w-3" aria-hidden="true"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg> Mar 10</span><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square h-3 w-3" aria-hidden="true"><path d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z"></path></svg> 13</span>
        </div>
        <div class="avatar av-mr d-flex align-items-center justify-content-center text-white fw-semibold">MR</div>
      </div>
    </div>
    <div class="board-card p-3 mb-2">
      <div class="d-flex gap-1 mb-2">
        <span class="badge-type px-2 py-1 text-muted bg-danger-subtle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#e7000f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bug h-3 w-3" aria-hidden="true"><path d="M12 20v-9"></path><path d="M14 7a4 4 0 0 1 4 4v3a6 6 0 0 1-12 0v-3a4 4 0 0 1 4-4z"></path><path d="M14.12 3.88 16 2"></path><path d="M21 21a4 4 0 0 0-3.81-4"></path><path d="M21 5a4 4 0 0 1-3.55 3.97"></path><path d="M22 13h-4"></path><path d="M3 21a4 4 0 0 1 3.81-4"></path><path d="M3 5a4 4 0 0 0 3.55 3.97"></path><path d="M6 13H2"></path><path d="m8 2 1.88 1.88"></path><path d="M9 7.13V6a3 3 0 1 1 6 0v1.13"></path></svg> BUG</span>
        <span class="badge-low px-2 py-1">Low</span>
      </div>
      <p class="fw-semibold mb-1 head">Fix sidebar collapse animation jank</p>
      <p class="text-muted mb-2 size">Sidebar collapse animation stutters on low-end devices. Optimize transitions and reduce layout shifts.</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex gap-3 text-muted" style="font-size:11px;">
          <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-up h-3.5 w-3.5" aria-hidden="true"><path d="m18 15-6-6-6 6"></path></svg> 29</span><span>&#9707; 2</span>
        </div>
        <div class="avatar av-ak d-flex align-items-center justify-content-center text-white fw-semibold">AK</div>
      </div>
    </div>
  </div>

  <!-- Done -->
  <div class="col-lg-3 col-md-6">
    <div class="col-header d-flex justify-content-between align-items-center mb-3 pb-2">
      <div class="d-flex align-items-center gap-2 fw-semibold">
        <span class="col-dot dot-done"></span> Done
      </div>
      <span class="text-muted">3</span>
    </div>
    <div class="board-card p-3 mb-2">
      <div class="d-flex gap-1 mb-2">
        <span class="badge-type px-2 py-1 text-muted bg-danger-subtle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#e7000f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bug h-3 w-3" aria-hidden="true"><path d="M12 20v-9"></path><path d="M14 7a4 4 0 0 1 4 4v3a6 6 0 0 1-12 0v-3a4 4 0 0 1 4-4z"></path><path d="M14.12 3.88 16 2"></path><path d="M21 21a4 4 0 0 0-3.81-4"></path><path d="M21 5a4 4 0 0 1-3.55 3.97"></path><path d="M22 13h-4"></path><path d="M3 21a4 4 0 0 1 3.81-4"></path><path d="M3 5a4 4 0 0 0 3.55 3.97"></path><path d="M6 13H2"></path><path d="m8 2 1.88 1.88"></path><path d="M9 7.13V6a3 3 0 1 1 6 0v1.13"></path></svg> BUG</span>
        <span class="badge-high px-2 py-1 text-white">High</span>
      </div>
      <p class="fw-semibold mb-1 head">Fix timezone offset in scheduled reports</p>
      <p class="text-muted mb-2 size">Scheduled reports fire at UTC instead of the user's configured timezone. Apply offset before sending.</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex gap-3 text-muted" style="font-size:11px;">
          <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-up h-3.5 w-3.5" aria-hidden="true"><path d="m18 15-6-6-6 6"></path></svg> 92</span><span>9</span>
        </div>
        <div class="avatar av-mk d-flex align-items-center justify-content-center text-white fw-semibold">MK</div>
      </div>
    </div>
    <div class="board-card p-3 mb-2">
      <div class="d-flex gap-1 mb-2">
        <span class="badge-type px-2 py-1 text-muted bg-primary-subtle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#6d45f9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles h-3 w-3" aria-hidden="true"><path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"></path><path d="M20 2v4"></path><path d="M22 4h-4"></path><circle cx="4" cy="20" r="2"></circle></svg>FEATURE</span>
        <span class="badge-medium px-2 py-1 text-white">Medium</span>
      </div>
      <p class="fw-semibold mb-1 head">Keyboard shortcuts overlay</p>
      <p class="text-muted mb-2 size">Add a global keyboard shortcuts panel (Ctrl+/) with searchable command palette and customizable bindings.</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex gap-3 text-muted" style="font-size:11px;">
          <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-up h-3.5 w-3.5" aria-hidden="true"><path d="m18 15-6-6-6 6"></path></svg> 78</span><span>&#9707; 7</span>
        </div>
        <div class="avatar av-jl d-flex align-items-center justify-content-center text-white fw-semibold">JL</div>
      </div>
    </div>
    <div class="board-card p-3 mb-2">
      <div class="d-flex gap-1 mb-2">
        <span class="badge-type px-2 py-1 text-muted bg-primary-subtle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#6d45f9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles h-3 w-3" aria-hidden="true"><path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"></path><path d="M20 2v4"></path><path d="M22 4h-4"></path><circle cx="4" cy="20" r="2"></circle></svg>FEATURE</span>
        <span class="badge-medium px-2 py-1 text-white">Medium</span>
      </div>
      <p class="fw-semibold mb-1 head">Audit log with advanced filtering</p>
      <p class="text-muted mb-2 size">Comprehensive audit trail with filters for user, action type, date range, and affected resource.</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex gap-3 text-muted" style="font-size:11px;">
          <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-up h-3.5 w-3.5" aria-hidden="true"><path d="m18 15-6-6-6 6"></path></svg> 67</span><span>&#9707; 9</span>
        </div>
        <div class="avatar av-sc d-flex align-items-center justify-content-center text-white fw-semibold">SC</div>
      </div>
    </div>
  </div>
</div>
@endsection