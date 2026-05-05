<style>
.ta-title {
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 4px;
}
.ta-sub {
  font-size: 12px;
}
.ta-topbar {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  margin-bottom: 16px;
  flex-wrap: wrap;
  gap: 8px;
}
.btn-customize {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-size: 13px;
  text-decoration: none;
  color: #666;
}
.btn-customize:hover {
  color: #7367f0;
}
.ta-stat-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
  gap: 12px;
  margin-bottom: 15px;
}
.ta-stat-card {
  border: 0.5px solid #e0e0dd;
  border-radius: 10px;
  padding: 10px 5px;
  background-color:var(--bs-bg-body);
  display: flex;
  align-items: center;
  gap: 14px;
}
.ta-stat-icon {
  width: 38px;
  height: 38px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  font-size: 16px;
}
.ta-icon-activity {
  background: #f1f0fe;
  color: #7367f0;
}
.ta-icon-members {
  background: #e6f1fb;
  color: #3c96e1;
}
.ta-icon-prs {
  background: #fdf0e6;
  color: #f0a500;
}
.ta-icon-releases {
  background: #eaf3de;
  color: #28c76f;
}
.ta-stat-value {
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 2px;
}
.ta-stat-label {
  font-size: 10px;
}
.af-filters {
  display: flex;
  gap: 6px;
  flex-wrap: wrap;
  align-items: center;
  margin-bottom: 16px;
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
.af-date-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 12px;
}
.af-date-label {
  font-size: 13px;
  font-weight: 700;
}
.af-events-count {
  font-size: 11px;
}
.af-list {
  display: flex;
  flex-direction: column;
  gap: 0;
}
.af-item {
  display: flex;
  align-items: flex-start;
  gap: 12px;
  padding: 16px 0;
  border-bottom: 1px solid #f1f3f5;
}
.af-item:last-child {
  border-bottom: none;
}
.af-type-icon {
  width: 32px;
  height: 32px;
  border-radius: 50%;
  border: 1px solid #e0e0dd;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  font-size: 13px;
}
.af-icon-commit {
  background: #f1f0fe;
  border-color: #d4d0fb;
  color: #7367f0;
}
.af-icon-deploy {
  background: #eaf3de;
  border-color: #c6e0a4;
  color: #28c76f;
}
.af-icon-review {
  background: #e6f1fb;
  border-color: #b5d4f4;
  color: #3c96e1;
}
.af-icon-release {
  background: #fdf0e6;
  border-color: #fac775;
  color: #f0a500;
}
.af-body {
  flex: 1;
  min-width: 0;
}
.af-header {
  display: flex;
  align-items: center;
  gap: 8px;
  margin-bottom: 4px;
  flex-wrap: wrap;
}
.af-user-name {
  font-size: 12px;
  font-weight: 600;
}
.af-badge {
  font-size: 9px;
  padding: 2px 9px;
  border-radius: 99px;
  font-weight: 600;
}
.af-badge-commit {
  background: #f1f0fe;
  color: #7367f0;
}
.af-badge-deploy {
  background: #eaf3de;
  color: #3B6D11;
}
.af-badge-review {
  background: #e6f1fb;
  color: #185FA5;
}
.af-badge-release {
  background: #fdf0e6;
  color: #854F0B;
}
.af-title {
  font-size: 10px;
  font-weight: 500;
  margin-bottom: 4px;
}
.af-desc {
  font-size: 11px;
  margin-bottom: 8px;
}
.af-tags {
  display: flex;
  align-items: center;
  gap: 6px;
  flex-wrap: wrap;
}
.af-tag {
  font-size: 10px;
  padding: 2px 9px;
  border-radius: 99px;
  border: 0.5px solid #e0e0dd;
  background: #f8f9fa;
  font-weight: 500;
  text-decoration: none;
}
.af-time {
  font-size: 11px;
  flex-shrink: 0;
  white-space: nowrap;
}
.avatar {
  width: 28px;
  height: 28px;
  border-radius: 50%;
  font-size: 10px;
  font-weight: 700;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  flex-shrink: 0;
}
.av-ek { background: #7367f0; }
.av-mc { background: #28c76f; }
.av-ap { background: #d46bbf; }

</style>
<div class="ta-topbar">
  <div>
    <div class="ta-title">Team Activity</div>
    <div class="ta-sub text-muted">Real-time feed of commits, deployments, reviews, and releases across your team.</div>
  </div>
  <a href="#" class="btn-customize">Customize Feed</a>
</div>

<div class="ta-stat-grid">
  <div class="ta-stat-card">
    <div class="ta-stat-icon ta-icon-activity"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-activity h-5 w-5 text-chart-1" aria-hidden="true"><path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2"></path></svg> </div>
    <div>
      <div class="ta-stat-value">9</div>
      <div class="ta-stat-label text-muted">Today's Activity</div>
    </div>
  </div>
  <div class="ta-stat-card">
    <div class="ta-stat-icon ta-icon-members"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users h-5 w-5 text-chart-2" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><path d="M16 3.128a4 4 0 0 1 0 7.744"></path><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><circle cx="9" cy="7" r="4"></circle></svg></div>
    <div>
      <div class="ta-stat-value">5</div>
      <div class="ta-stat-label text-muted">Active Members</div>
    </div>
  </div>
  <div class="ta-stat-card">
    <div class="ta-stat-icon ta-icon-prs"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-pull-request h-5 w-5 text-chart-4" aria-hidden="true"><circle cx="18" cy="18" r="3"></circle><circle cx="6" cy="6" r="3"></circle><path d="M13 6h3a2 2 0 0 1 2 2v7"></path><line x1="6" x2="6" y1="9" y2="21"></line></svg></div>
    <div>
      <div class="ta-stat-value">3</div>
      <div class="ta-stat-label text-muted">PRs Merged (week)</div>
    </div>
  </div>
  <div class="ta-stat-card">
    <div class="ta-stat-icon ta-icon-releases">
      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package h-5 w-5 text-success" aria-hidden="true"><path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"></path><path d="M12 22V12"></path><polyline points="3.29 7 12 12 20.71 7"></polyline><path d="m7.5 4.27 9 5.15"></path></svg>
    </div>
    <div>
      <div class="ta-stat-value">2</div>
      <div class="ta-stat-label text-muted">Releases (month)</div>
    </div>
  </div>
</div>
<div class="af-filters">
  <a href="#" class="filter-btn active">All</a>
  <a href="#" class="filter-btn">Commits 7</a>
  <a href="#" class="filter-btn">Deployments 3</a>
  <a href="#" class="filter-btn">Reviews 3</a>
  <a href="#" class="filter-btn">Releases 2</a>
</div>

<div class="af-date-row">
  <div class="af-date-label">Feb 25</div>
  <div class="af-events-count text-muted">9 events</div>
</div>

<div class="af-list">

  <div class="af-item">
    <div class="af-type-icon af-icon-commit"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-commit-horizontal h-4.5 w-4.5 text-chart-1" aria-hidden="true"><circle cx="12" cy="12" r="3"></circle><line x1="3" x2="9" y1="12" y2="12"></line><line x1="15" x2="21" y1="12" y2="12"></line></svg></div>
    <div class="avatar av-ek">EK</div>
    <div class="af-body">
      <div class="af-header">
        <span class="af-user-name">Elena Kowalski</span>
        <span class="af-badge af-badge-commit">Commit</span>
      </div>
      <div class="af-title">Refactor auth middleware to use edge runtime</div>
      <div class="af-desc text-muted">Moved JWT validation to edge middleware for faster cold starts.</div>
      <div class="af-tags">
        <a href="#" class="af-tag">feat/edge-auth</a>
        <a href="#" class="af-tag">a3f91c2</a>
      </div>
    </div>
    <div class="af-time text-muted">12 min ago</div>
  </div>

  <div class="af-item">
    <div class="af-type-icon af-icon-deploy"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rocket h-4.5 w-4.5 text-chart-2" aria-hidden="true"><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09"></path><path d="M9 12a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.4 22.4 0 0 1-4 2z"></path><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 .05 5 .05"></path></svg></div>
    <div class="avatar av-mc">MC</div>
    <div class="af-body">
      <div class="af-header">
        <span class="af-user-name">Marcus Chen</span>
        <span class="af-badge af-badge-deploy">Deploy</span>
      </div>
      <div class="af-title">Deployed to production</div>
      <div class="af-desc text-muted">v2.4.1 rolled out to all regions. Zero-downtime deploy.</div>
      <div class="af-tags">
        <a href="#" class="af-tag">production</a>
        <a href="#" class="af-tag">47s</a>
        <a href="#" class="af-tag">us-east-1, eu-west-1</a>
      </div>
    </div>
    <div class="af-time text-muted">26 min ago</div>
  </div>

  <div class="af-item">
    <div class="af-type-icon af-icon-review"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye h-4.5 w-4.5 text-chart-3" aria-hidden="true"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path><circle cx="12" cy="12" r="3"></circle></svg></div>
    <div class="avatar av-ap">AP</div>
    <div class="af-body">
      <div class="af-header">
        <span class="af-user-name">Aisha Patel</span>
        <span class="af-badge af-badge-review">Review</span>
      </div>
      <div class="af-title">Approved PR #287 — Dashboard metrics refactor</div>
      <div class="af-desc text-muted">LGTM. Nice cleanup of the chart rendering pipeline.</div>
      <div class="af-tags">
        <a href="#" class="af-tag">#287</a>
        <a href="#" class="af-tag">Approved</a>
      </div>
    </div>
    <div class="af-time text-muted">1 hr ago</div>
  </div>
  <div class="af-item">
    <div class="af-type-icon af-icon-commit"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-commit-horizontal h-4.5 w-4.5 text-chart-1" aria-hidden="true"><circle cx="12" cy="12" r="3"></circle><line x1="3" x2="9" y1="12" y2="12"></line><line x1="15" x2="21" y1="12" y2="12"></line></svg></div>
    <div class="avatar av-ek">EK</div>
    <div class="af-body">
      <div class="af-header">
        <span class="af-user-name">Elena Kowalski</span>
        <span class="af-badge af-badge-commit">Commit</span>
      </div>
      <div class="af-title">Refactor auth middleware to use edge runtime</div>
      <div class="af-desc text-muted">Moved JWT validation to edge middleware for faster cold starts.</div>
      <div class="af-tags">
        <a href="#" class="af-tag">feat/edge-auth</a>
        <a href="#" class="af-tag">a3f91c2</a>
      </div>
    </div>
    <div class="af-time text-muted">12 min ago</div>
  </div>

  <div class="af-item">
    <div class="af-type-icon af-icon-deploy"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rocket h-4.5 w-4.5 text-chart-2" aria-hidden="true"><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09"></path><path d="M9 12a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.4 22.4 0 0 1-4 2z"></path><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 .05 5 .05"></path></svg></div>
    <div class="avatar av-mc">MC</div>
    <div class="af-body">
      <div class="af-header">
        <span class="af-user-name">Marcus Chen</span>
        <span class="af-badge af-badge-deploy">Deploy</span>
      </div>
      <div class="af-title">Deployed to production</div>
      <div class="af-desc text-muted">v2.4.1 rolled out to all regions. Zero-downtime deploy.</div>
      <div class="af-tags">
        <a href="#" class="af-tag">production</a>
        <a href="#" class="af-tag">47s</a>
        <a href="#" class="af-tag">us-east-1, eu-west-1</a>
      </div>
    </div>
    <div class="af-time text-muted">26 min ago</div>
  </div>

  <div class="af-item">
    <div class="af-type-icon af-icon-review"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye h-4.5 w-4.5 text-chart-3" aria-hidden="true"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path><circle cx="12" cy="12" r="3"></circle></svg></div>
    <div class="avatar av-ap">AP</div>
    <div class="af-body">
      <div class="af-header">
        <span class="af-user-name">Aisha Patel</span>
        <span class="af-badge af-badge-review">Review</span>
      </div>
      <div class="af-title">Approved PR #287 — Dashboard metrics refactor</div>
      <div class="af-desc text-muted">LGTM. Nice cleanup of the chart rendering pipeline.</div>
      <div class="af-tags">
        <a href="#" class="af-tag">#287</a>
        <a href="#" class="af-tag">Approved</a>
      </div>
    </div>
    <div class="af-time text-muted">1 hr ago</div>
  </div>
   
</div>
