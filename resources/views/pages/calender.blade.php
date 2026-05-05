@extends('welcome')
@push('css')
<style>
.cal-topbar {
display: flex;
justify-content: space-between;
align-items: flex-start;
margin-bottom: 19px;
flex-wrap: wrap;
gap: 8px;
}
.cal-title {
font-size: 22px;
font-weight: 700;
margin-bottom: 2px;
}
.btn-add-event {
display: inline-flex;
align-items: center;
gap: 6px;
background: linear-gradient(to right, #7367f0, #3c96e1);
color: #fff;
border: none;
border-radius: 8px;
padding: 8px 19px;
font-size: 14px;
font-weight: 600;
text-decoration: none;
white-space: nowrap;
}
.btn-add-event:hover {
opacity: 0.9;
color: #fff;
}
.cal-wrapper {
display: flex;
gap: 16px;
}
.cal-main {
flex: 1;
min-width: 0;
}
.cal-nav {
display: flex;
align-items: center;
gap: 10px;
margin-bottom: 16px;
flex-wrap: wrap;
}
.cal-nav-btn {
background: none;
border: 1px solid #dee2e6;
border-radius: 6px;
padding: 4px 10px;
cursor: pointer;
text-decoration: none;
display: inline-flex;
align-items: center;
color: var(--bs-body-color);
}
.cal-nav-btn:hover {
background: #f8f9fa;
}
.cal-month {
font-size: 16px;
font-weight: 700;
}
.btn-today {
background: none;
border: 1px solid #dee2e6;
border-radius: 6px;
padding: 4px 14px;
font-size: 13px;
cursor: pointer;
text-decoration: none;
margin-left: auto;
}
.btn-today:hover {
background: #f8f9fa;
}
.cal-grid {
border: 1px solid #e9ecef;
border-radius: 10px;
overflow: hidden;
background-color: var(--bs-body-bg);
}
.cal-head {
display: grid;
grid-template-columns: repeat(7, 1fr);
background: var(--var-bs-color);
border-bottom: 1px solid #e9ecef;
}
.cal-head-cell {
padding: 8px 4px;
text-align: center;
font-size: 11px;
font-weight: 600;
text-transform: uppercase;
letter-spacing: 0.5px;
}
.cal-body {
display: grid;
grid-template-columns: repeat(7, 1fr);
}
.cal-cell {
min-height: 90px;
padding: 6px 5px;
border-right: 1px solid #f1f3f5;
border-bottom: 1px solid #f1f3f5;
background-color: var(--bs-body-bg);
cursor: pointer;
}
.cal-cell.other-month {
background-color: var(--bs-body-bg);
}
.cal-cell.today {
background-color: var(--bs-body-bg);
}
.cal-date {
font-size: 12px;
font-weight: 600;
margin-bottom: 4px;
width: 22px;
height: 22px;
display: flex;
align-items: center;
justify-content: center;
border-radius: 50%;
}
.cal-cell.today .cal-date {
background: linear-gradient(to right, #7367f0, #3c96e1);
color: #fff;
}
.cal-date.other {
color: #adb5bd;
}
.cal-event {
border-radius: 4px;
padding: 2px 6px;
font-size: 10px;
font-weight: 500;
margin-bottom: 2px;
white-space: nowrap;
overflow: hidden;
text-overflow: ellipsis;
cursor: pointer;
}
.ev-purple {
background: #ede9fe;
color: #5b21b6;
}
.ev-green {
background: #dcfce7;
color: #166534;
}
.ev-red {
background: #fee2e2;
color: #991b1b;
}
.ev-blue {
background: #dbeafe;
color: #1e40af;
}
.ev-orange {
background: #ffedd5;
color: #9a3412;
}
.ev-teal {
background: #ccfbf1;
color: #134e4a;
}
.ev-yellow {
background: #fef9c3;
color: #854d0e;
}
.cal-sidebar {
width: 220px;
flex-shrink: 0;
}
.cal-sidebar-card {
border: 1px solid #e9ecef;
border-radius: 10px;
padding: 16px;
margin-bottom: 16px;
}
.cal-sidebar-icon {
display: flex;
justify-content: center;
margin-bottom: 12px;
}
.cal-sidebar-title {
font-size: 13px;
font-weight: 700;
text-align: center;
margin-bottom: 3px;
}
.cal-sidebar-sub {
font-size: 12px;
text-align: center;
}
.upcoming-title {
font-size: 14px;
font-weight: 700;
margin-bottom: 12px;
}
.upcoming-empty {
font-size: 12px;
text-align: center;
padding: 16px 0;
}

@media (max-width: 900px) {
    .cal-wrapper {
    flex-direction: column;
  }
    .cal-sidebar {
    width: 100%;
  }
    .cal-cell {
    min-height: 60px;
  }
}
@media (max-width: 600px) {
  .cal-event {
  display: none;
  }
  .cal-cell {
  min-height: 40px;
  }
}
</style>
@endpush
@section('pages')
<div class="cal-topbar">
  <div>
    <p class="cal-title">Calendar</p>
    <p class="text-muted mb-0">Schedule and manage events</p>
  </div>
  <a href="#" class="btn-add-event">+ Add Event</a>
</div>
<div class="cal-wrapper">
  <div class="cal-main">
    <div class="cal-nav">
      <a href="#" class="cal-nav-btn"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left h-4 w-4" aria-hidden="true"><path d="m15 18-6-6 6-6"></path></svg></a>
      <a href="#" class="cal-nav-btn"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right h-4 w-4" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg></a>
      <span class="cal-month">February 2026</span>
      <a href="#" class="btn-today text-muted">Today</a>
    </div>
    <div class="cal-grid">
      <div class="cal-head">
        <div class="cal-head-cell text-muted">Sun</div>
        <div class="cal-head-cell text-muted">Mon</div>
        <div class="cal-head-cell text-muted">Tue</div>
        <div class="cal-head-cell text-muted">Wed</div>
        <div class="cal-head-cell text-muted">Thu</div>
        <div class="cal-head-cell text-muted">Fri</div>
        <div class="cal-head-cell text-muted">Sat</div>
      </div>
      <div class="cal-body">
                <div class="cal-body">
                <div class="cal-cell"><div class="cal-date">1</div></div>
                <div class="cal-cell"><div class="cal-date">2</div><div class="cal-event ev-purple">Team Standup</div></div>
                <div class="cal-cell"><div class="cal-date">3</div></div>
                <div class="cal-cell"><div class="cal-date">4</div><div class="cal-event ev-green">Sprint Review</div></div>
                <div class="cal-cell"><div class="cal-date">5</div></div>
                <div class="cal-cell"><div class="cal-date">6</div><div class="cal-event ev-orange">Client Call — Acme Corp</div><div class="cal-event ev-blue">Design Review</div></div>
                <div class="cal-cell"><div class="cal-date">7</div></div>
                <div class="cal-cell"><div class="cal-date">8</div></div>
                <div class="cal-cell"><div class="cal-date">9</div></div>
                <div class="cal-cell"><div class="cal-date">10</div><div class="cal-event ev-red">Product Launch</div></div>
                <div class="cal-cell"><div class="cal-date">11</div></div>
                <div class="cal-cell"><div class="cal-date">12</div><div class="cal-event ev-teal">Lunch & Learn</div></div>
                <div class="cal-cell"><div class="cal-date">13</div><div class="cal-event ev-yellow">Budget Meeting</div></div>
                <div class="cal-cell"><div class="cal-date">14</div><div class="cal-event ev-purple">1:1 with Manager</div></div>
                <div class="cal-cell"><div class="cal-date">15</div></div>
                <div class="cal-cell"><div class="cal-date">16</div></div>
                <div class="cal-cell"><div class="cal-date">17</div><div class="cal-event ev-purple">Team Standup</div></div>
                <div class="cal-cell"><div class="cal-date">18</div><div class="cal-event ev-green">Sprint Planning</div><div class="cal-event ev-yellow">Stakeholder Demo</div></div>
                <div class="cal-cell"><div class="cal-date">19</div></div>
                <div class="cal-cell"><div class="cal-date">20</div><div class="cal-event ev-red">Security Audit</div></div>
                <div class="cal-cell"><div class="cal-date">21</div></div>
                <div class="cal-cell today"><div class="cal-date">22</div><div class="cal-event ev-blue">UX Workshop</div></div>
                <div class="cal-cell"><div class="cal-date">23</div></div>
                <div class="cal-cell"><div class="cal-date">24</div><div class="cal-event ev-orange">Client Call — Globex</div></div>
                <div class="cal-cell"><div class="cal-date">25</div></div>
                <div class="cal-cell"><div class="cal-date">26</div><div class="cal-event ev-red">Code Freeze</div></div>
                <div class="cal-cell"><div class="cal-date">27</div><div class="cal-event ev-teal">Team Retrospective</div></div>
                <div class="cal-cell"><div class="cal-date">28</div></div>
                <div class="cal-cell other-month"><div class="cal-date other">1</div></div>
                <div class="cal-cell other-month"><div class="cal-date other">2</div><div class="cal-event ev-green">Q1 Review</div></div>
                <div class="cal-cell other-month"><div class="cal-date other">3</div></div>
                <div class="cal-cell other-month"><div class="cal-date other">4</div></div>
                <div class="cal-cell other-month"><div class="cal-date other">5</div><div class="cal-event ev-orange">Conference Travel</div></div>
                <div class="cal-cell other-month"><div class="cal-date other">6</div></div>
                <div class="cal-cell other-month"><div class="cal-date other">7</div></div>
                <div class="cal-cell other-month"><div class="cal-date other">8</div></div>
                <div class="cal-cell other-month"><div class="cal-date other">9</div></div>
                <div class="cal-cell other-month"><div class="cal-date other">10</div></div>
                <div class="cal-cell other-month"><div class="cal-date other">11</div></div>
                <div class="cal-cell other-month"><div class="cal-date other">12</div></div>
                <div class="cal-cell other-month"><div class="cal-date other">13</div></div>
                <div class="cal-cell other-month"><div class="cal-date other">14</div></div>
                </div>
      </div>
                    </div>
                </div>

<div class="cal-sidebar">
  <div class="cal-sidebar-card">
    <p class="cal-sidebar-title">No date selected</p>
    <p class="cal-sidebar-sub text-muted">Click a day on the calendar to view its events</p>
  </div>
  <p class="upcoming-title">Upcoming Events</p>
  <p class="upcoming-empty text-muted">No upcoming events</p>
</div>
</div>
@endsection