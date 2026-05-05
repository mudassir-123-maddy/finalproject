@extends('welcome')
@push('css')
<style>
.mail-wrapper { 
display: flex; 
gap: 0; 
min-height: 600px; 
background: var(--bs-body); 
}
.mail-title { 
font-size: 1.3rem; 
font-weight: 700; 
margin-bottom: 0.1rem;
}
.mail-sub { 
font-size: 0.82rem; 
color: #6c757d; 
margin-bottom: 1rem; 
}
.mail-sidebar { 
width: 220px; 
flex-shrink: 0; 
padding-right: 1rem; 
}
.btn-compose { 
display: flex; 
align-items: center; 
justify-content: center; 
gap: 8px; 
width: 100%; 
background: linear-gradient(to right, #7367f0, #3c96e1); 
color: #fff; 
border: none; 
border-radius: 10px; 
padding: 0.6rem 1rem; 
font-size: 0.875rem; 
font-weight: 600; 
text-decoration: none;
margin-bottom: 1rem; 
}
.nav-item-mail { 
display: flex; 
align-items: center; 
gap: 10px; 
padding: 0.45rem 0.75rem; 
border-radius: 8px; 
font-size: 0.875rem; 
color: #6c757d; 
text-decoration: none; 
margin-bottom: 2px; 
cursor: pointer; 
}
.nav-item-mail:hover { 
background: #f1f3f5; 
color: #1a1a1a; 
}
.nav-item-mail.active {
background: linear-gradient(to right, #7367f020, #3c96e120); 
color: #3c96e1; 
font-weight: 600; 
}
.nav-badge {
background: #3c96e1; 
color: #fff; 
border-radius: 20px; 
padding: 1px 8px; 
font-size: 10px; 
font-weight: 700; 
margin-left: auto; 
}
.nav-count { 
color: #6c757d; 
font-size: 12px; 
margin-left: auto; 
}
.sidebar-label { 
font-size: 10px; 
font-weight: 700; 
text-transform: uppercase; 
letter-spacing: 1px; 
color: #6c757d; 
padding: 0.75rem 0.75rem 0.3rem; 
}
.label-dot { 
width: 8px; 
height: 8px; 
border-radius: 50%; 
flex-shrink: 0; 
}
.dot-green { 
background: #3dba8c; 
}
.dot-blue { 
background: #3c96e1; 
}
.dot-red { 
background: #e05c5c; 
}
.dot-orange {
background: #f0853a; 
}
.mail-content { 
flex: 1; 
border-left: 1px solid #e9ecef; 
padding-left: 1.5rem;
}
.mail-search-bar { 
display: flex; 
align-items: center; 
gap: 10px; 
margin-bottom: 1rem; 
padding-bottom: 1rem; 
border-bottom: 1px solid #e9ecef; 
}
.search-input-wrap { 
position: relative; 
display: flex; 
align-items: center; 
flex: 1; 
}
.search-icon { 
position: absolute; 
left: 10px; 
color: #6c757d; 
}
.search-input { 
border: 1px solid #dee2e6; 
border-radius: 8px; 
padding: 7px 12px 7px 32px; 
font-size: 0.82rem; 
color: #6c757d; 
width: 100%; 
outline: none; 
background: #fff; 
}
.search-input:focus { 
border-color: #7367f0; 
}
.email-row { 
display: flex; 
align-items: flex-start; 
gap: 12px; 
padding: 0.85rem 0.5rem; 
border-bottom: 1px solid #f1f3f5; 
cursor: pointer; 
border-radius: 8px; 
}
.email-row:last-child { 
border-bottom: none; 
}
.star-btn { 
background: none; 
border: none; 
padding: 0; 
cursor: pointer; 
color: #dee2e6; 
flex-shrink: 0;
margin-top: 2px; 
text-decoration: none; }
.star-btn.starred { 
color: #f59e0b; 
}
.email-body { 
flex: 1;
min-width: 0;
}
.email-sender-row {
display: flex; 
align-items: center; 
gap: 6px;
margin-bottom: 3px;
}
.email-sender { 
font-weight: 700; 
font-size: 0.875rem; 
color: var(--bs-body-color); 
}
.email-dot { 
width: 7px; 
height: 7px;
border-radius: 50%; 
flex-shrink: 0; 
}
.email-dot-blue { 
background: #3c96e1;
}
.email-dot-red { 
background: #e05c5c; 
}
.email-dot-orange { 
background: #f0853a; 
}
.email-preview { 
font-size: 0.82rem; 
color: #6c757d; 
white-space: nowrap; 
overflow: hidden; 
text-overflow: ellipsis; 
max-width: 700px; 
}
.email-subject { 
font-weight: 600; 
color: var(--bs-body-color); 
}
.email-date { 
font-size: 0.78rem;
color: #6c757d; 
white-space: nowrap;
flex-shrink: 0;
margin-top: 2px;
}
.unread-dot { 
width: 8px; 
height: 8px; 
border-radius: 50%; 
background: #3c96e1; 
flex-shrink: 0; 
margin-top: 6px; 
}
</style>
@endpush
@section('pages')
<p class="mail-title">Mail</p>
<p class="mail-sub">Email inbox and messages.</p>
<div class="mail-wrapper">
  <div class="mail-sidebar">
    <a href="#" class="btn-compose">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
      Compose
    </a>
    <a href="#" class="nav-item-mail active">
      <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"/><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/></svg>
      Inbox <span class="nav-badge">5</span>
    </a>
    <a href="#" class="nav-item-mail">
      <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
      Starred
    </a>
    <a href="#" class="nav-item-mail">
      <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
      Sent
    </a>
    <a href="#" class="nav-item-mail">
      <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
      Drafts <span class="nav-count">2</span>
    </a>
    <a href="#" class="nav-item-mail">
      <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/><path d="M10 11v6"/><path d="M14 11v6"/><path d="M9 6V4h6v2"/></svg>
      Trash
    </a>
    <p class="sidebar-label">Labels</p>
    <a href="#" class="nav-item-mail"><span class="label-dot dot-green"></span> Personal</a>
    <a href="#" class="nav-item-mail"><span class="label-dot dot-blue"></span> Work</a>
    <a href="#" class="nav-item-mail"><span class="label-dot dot-red"></span> Important</a>
    <a href="#" class="nav-item-mail"><span class="label-dot dot-orange"></span> Updates</a>
  </div>
  <div class="mail-content">
    <div class="mail-search-bar">
      <div class="search-input-wrap">
        <svg class="search-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        <input type="search" class="search-input" placeholder="Search emails...">
      </div>
    </div>
    <div class="email-row">
      <a href="#" class="star-btn starred">★</a>
      <div class="email-body">
        <div class="email-sender-row">
          <span class="email-sender">Sarah Chen</span>
          <span class="email-dot email-dot-blue"></span>
        </div>
        <p class="email-preview mb-0"><span class="email-subject">Updated design tokens for the dashboard</span> — I've finished updating the OKLCh color tokens across all components...</p>
      </div>
      <span class="email-date">Feb 22</span>
      <div class="unread-dot"></div>
    </div>

    <div class="email-row">
      <a href="#" class="star-btn">☆</a>
      <div class="email-body">
        <div class="email-sender-row">
          <span class="email-sender">Marcus Johnson</span>
          <span class="email-dot email-dot-blue"></span>
          <span class="email-dot email-dot-red"></span>
        </div>
        <p class="email-preview mb-0"><span class="email-subject">TanStack Table v9 migration plan</span> — I've been looking into the TanStack Table v9 release notes...</p>
      </div>
      <span class="email-date">Feb 22</span>
      <div class="unread-dot"></div>
    </div>

    <div class="email-row">
      <a href="#" class="star-btn starred">★</a>
      <div class="email-body">
        <div class="email-sender-row">
          <span class="email-sender">Priya Sharma</span>
          <span class="email-dot email-dot-orange"></span>
          <span class="email-dot email-dot-red"></span>
        </div>
        <p class="email-preview mb-0"><span class="email-subject">Q1 roadmap review — action items</span> — Following up on our roadmap review yesterday. Here are the action items...</p>
      </div>
      <span class="email-date">Feb 22</span>
    </div>

    <div class="email-row">
      <a href="#" class="star-btn">☆</a>
      <div class="email-body">
        <div class="email-sender-row">
          <span class="email-sender">Alex Rivera</span>
          <span class="email-dot email-dot-blue"></span>
        </div>
        <p class="email-preview mb-0"><span class="email-subject">Re: Notification API endpoints</span> — The notification endpoints are now deployed to staging...</p>
      </div>
      <span class="email-date">Feb 22</span>
    </div>

    <div class="email-row">
      <a href="#" class="star-btn">☆</a>
      <div class="email-body">
        <div class="email-sender-row">
          <span class="email-sender">GitHub</span>
          <span class="email-dot email-dot-red"></span>
        </div>
        <p class="email-preview mb-0"><span class="email-subject">[DashboardPack/apex-dashboard] PR #245 merged</span> — Pull request #245 has been merged. Title: feat: add advanced form components...</p>
      </div>
      <span class="email-date">Feb 21</span>
    </div>

    <div class="email-row">
      <a href="#" class="star-btn">☆</a>
      <div class="email-body">
        <div class="email-sender-row">
          <span class="email-sender">Emma Taylor</span>
          <span class="email-dot email-dot-blue"></span>
        </div>
        <p class="email-preview mb-0"><span class="email-subject">QA report: Density settings regression</span> — During the latest QA pass, I found a regression with the density settings...</p>
      </div>
      <span class="email-date">Feb 21</span>
    </div>

    <div class="email-row">
      <a href="#" class="star-btn starred">★</a>
      <div class="email-body">
        <div class="email-sender-row">
          <span class="email-sender">David Park</span>
          <span class="email-dot email-dot-blue"></span>
        </div>
        <p class="email-preview mb-0"><span class="email-subject">Cloudflare Pages deployment config</span> — I've looked into the auto-deploy setup for Cloudflare Pages...</p>
      </div>
      <span class="email-date">Feb 20</span>
    </div>
  </div>
</div>
@endsection