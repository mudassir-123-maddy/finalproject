<style>
.dep-title {
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 4px;
}
.dep-sub {
  font-size: 12px;
}
.btn-deploy-now {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background: linear-gradient(to right, #7367f0, #3c96e1);
  color: #fff;
  border: none;
  border-radius: 8px;
  padding: 8px 16px;
  font-size: 13px;
  font-weight: 600;
  text-decoration: none;
  white-space: nowrap;
}
.btn-deploy-now:hover {
  opacity: 0.9;
  color: #fff;
}
.dep-stat-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
  gap: 12px;
  margin-bottom: 20px;
}
.dep-stat-card {
  border: 0.5px solid #e0e0dd;
  border-radius: 10px;
  padding: 9px 1px;
  background:var(--bs-bg-body);
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
}
.dep-stat-label {
  font-size: 11px;
  text-transform: uppercase;
  letter-spacing: 0.06em;
  margin-bottom: 6px;
  margin-left: 6px;
}
.dep-stat-value {
  font-size: 28px;
  font-weight: 700;
  margin-bottom: 2px;
  margin-left: 6px;
}
.dep-stat-hint {
  font-size: 11px;
  margin-left: 6px;
}
.dep-stat-icon {
  width: 25px;
    height: 25px;
    border-radius: 50%;
    border: 1px solid #e0e0dd;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 5px;
    margin-top: -3px;
}
.dep-progress-bar {
  height: 4px;
  border-radius: 99px;
  background: #e9ecef;
  margin-top: 6px;
  width: 80px;
  margin-left: 10px;
}
.dep-progress-fill {
  height: 4px;
  border-radius: 99px;
  background: linear-gradient(to right, #13a95b, #1fc640);
}
.dep-filters {
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
.dep-showing {
  font-size: 11px;
  text-align: right;
  margin-bottom: 8px;
}
.dep-list {
  display: flex;
  flex-direction: column;
  gap: 0;
}
.dep-row {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 12px 0;
  border-bottom: 1px solid #f1f3f5;
}
.dep-row:last-child {
  border-bottom: none;
}
.dep-status-icon {
  width: 20px;
  height: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

.dep-status-icon.error {
  border-color: #e74c3c;
  color: #e74c3c;
}
.dep-status-icon.building {
  border-color: #f0a500;
  color: #f0a500;
}
.dep-info {
  flex: 1;
  min-width: 0;
}
.dep-branch {
  font-size: 13px;
  font-weight: 600;
  display: flex;
  align-items: center;
  gap: 6px;
  flex-wrap: wrap;
  margin-bottom: 3px;
}
.dep-commit {
  font-size: 11px;
}
.dep-commit-hash {
  font-weight: 600;
  color: #7367f0;
}
.dep-meta {
  display: flex;
  align-items: center;
  gap: 16px;
  flex-shrink: 0;
  flex-wrap: wrap;
}
.dep-time {
  font-size: 11px;
  display: flex;
  align-items: center;
  gap: 4px;
}
.dep-user {
  display: flex;
  align-items: center;
  gap: 6px;
}
.dep-user-name {
  font-size: 11px;
  font-weight: 600;
}
.dep-ago {
  font-size: 11px;
}
.dep-actions {
  display: flex;
  align-items: center;
  gap: 6px;
}
.dep-action-btn {
  background: none;
  border: none;
  cursor: pointer;
  text-decoration: none;
  font-size: 12px;
  padding: 2px 6px;
  border-radius: 4px;
}
.dep-action-btn:hover {
  background: #f1f3f5;
}
.badge-env {
  font-size: 9px;
  padding: 2px 9px;
  border-radius: 99px;
  font-weight: 600;
}
.badge-production {
  background: #7367f0;
  color: #fff;
}
.badge-staging {
  background: #3c96e1;
  color: #fff;
}
.badge-preview {
  background: #6c757d;
  color: #fff;
}
.badge-ready {
  font-size: 9px;
  padding: 2px 9px;
  border-radius: 99px;
  font-weight: 600;
  background: #eaf3de;
  color: #3B6D11;
}
.badge-error {
  font-size: 9px;
  padding: 2px 9px;
  border-radius: 99px;
  font-weight: 600;
  background: #fee2e2;
  color: #991b1b;
}
.badge-building {
  font-size: 9px;
  padding: 2px 9px;
  border-radius: 99px;
  font-weight: 600;
  background: #ffedd5;
  color: #9a3412;
}
.badge-cancelled {
  font-size: 9px;
  padding: 2px 9px;
  border-radius: 99px;
  font-weight: 600;
  background: #e9ecef;
  color: #6c757d;
}
.avatar {
  width: 24px;
  height: 24px;
  border-radius: 50%;
  font-size: 9px;
  font-weight: 700;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  flex-shrink: 0;
}
.av-sc { background: #f0a500; }
.av-ar { background: #3c96e1; }
.av-mj { background: #28c76f; }
.av-pp { background: #d46bbf; }
.av-jl { background: #7367f0; }
</style>
<div class="d-flex justify-content-between align-items-start mb-3 flex-wrap gap-2">
  <div>
    <div class="dep-title">Deployments</div>
    <div class="dep-sub text-muted">Monitor and manage your deployment pipeline.</div>
  </div>
  <a href="#" class="btn-deploy-now"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rocket h-4 w-4" aria-hidden="true"><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09"></path><path d="M9 12a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.4 22.4 0 0 1-4 2z"></path><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 .05 5 .05"></path></svg>Deploy Now</a>
</div>
<div class="dep-stat-grid">
  <div class="dep-stat-card">
    <div>
      <div class="dep-stat-label text-muted">Total Deployments</div>
      <div class="dep-stat-value">17</div>
      <div class="dep-stat-hint text-muted">Last 30 days</div>
    </div>
    <div class="dep-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#6d45f9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-activity h-5 w-5 text-chart-1" aria-hidden="true"><path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2"></path></svg></div>
  </div>
  <div class="dep-stat-card">
    <div>
      <div class="dep-stat-label text-muted">Success Rate</div>
      <div class="dep-stat-value">71%</div>
      <div class="dep-progress-bar"><div class="dep-progress-fill" style="width:71%"></div></div>
    </div>
    <div class="dep-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#2f9f3d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check h-5 w-5 text-success" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg></div>
  </div>
  <div class="dep-stat-card">
    <div>
      <div class="dep-stat-label text-muted">Avg Build Time</div>
      <div class="dep-stat-value">1m 10s</div>
      <div class="dep-stat-hint text-muted">Across all envs</div>
    </div>
    <div class="dep-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#f37513
" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-timer h-5 w-5 text-chart-4" aria-hidden="true"><line x1="10" x2="14" y1="2" y2="2"></line><line x1="12" x2="15" y1="14" y2="11"></line><circle cx="12" cy="14" r="8"></circle></svg></div>
  </div>
  <div class="dep-stat-card">
    <div>
      <div class="dep-stat-label text-muted">Active Environments</div>
      <div class="dep-stat-value">3</div>
      <div class="dep-stat-hint text-muted">prod, staging, preview</div>
    </div>
    <div class="dep-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#0090df" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe h-5 w-5 text-chart-2" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path><path d="M2 12h20"></path></svg></div>
  </div>
</div>
<div class="dep-filters">
  <a href="#" class="filter-btn active">All Envs</a>
  <a href="#" class="filter-btn">Production</a>
  <a href="#" class="filter-btn">Staging</a>
  <a href="#" class="filter-btn">Preview</a>
  <a href="#" class="filter-btn">All Status</a>
  <a href="#" class="filter-btn">Success</a>
  <a href="#" class="filter-btn">Failed</a>
  <a href="#" class="filter-btn">Building</a>
  <a href="#" class="filter-btn">Cancelled</a>
</div>

<div class="dep-showing text-muted">Showing 17 of 17 deployments</div>
<div class="dep-list">
  <div class="dep-row">
    <div class="dep-status-icon success"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check h-5 w-5 text-success" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg></div>
    <div class="dep-info">
      <div class="dep-branch">
        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-branch h-3.5 w-3.5 text-muted-foreground" aria-hidden="true"><path d="M15 6a9 9 0 0 0-9 9V3"></path><circle cx="18" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle></svg> main
        <span class="badge-env badge-production">Production</span>
        <span class="badge-ready">Ready</span>
      </div>
      <div class="dep-commit text-muted">
        <span class="dep-commit-hash">a3f9c21</span> feat: add real-time notification system
      </div>
    </div>
    <div class="dep-meta">
      <div class="dep-time text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-3 w-3" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg> 48s</div>
      <div class="dep-user">
        <div class="avatar av-sc">SC</div>
        <div>
          <div class="dep-user-name">Sarah Chen</div>
          <div class="dep-ago text-muted">12 minutes ago</div>
        </div>
      </div>
      <div class="dep-actions">
        <a href="#" class="dep-action-btn text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link h-3.5 w-3.5" aria-hidden="true"><path d="M15 3h6v6"></path><path d="M10 14 21 3"></path><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path></svg></a>
        <a href="#" class="dep-action-btn text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ellipsis h-3.5 w-3.5" aria-hidden="true"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></a>
      </div>
    </div>
  </div>

  <div class="dep-row">
    <div class="dep-status-icon building"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-loader-circle h-5 w-5 text-warning animate-spin" aria-hidden="true"><path d="M21 12a9 9 0 1 1-6.219-8.56"></path></svg></div>
    <div class="dep-info">
      <div class="dep-branch">
        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-branch h-3.5 w-3.5 text-muted-foreground" aria-hidden="true"><path d="M15 6a9 9 0 0 0-9 9V3"></path><circle cx="18" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle></svg> feat/dashboard-v2
        <span class="badge-env badge-preview">Preview</span>
        <span class="badge-building">Building</span>
      </div>
      <div class="dep-commit text-muted">
        <span class="dep-commit-hash">e7b3d4</span> refactor: redesign metrics panel with new chart lib
      </div>
    </div>
    <div class="dep-meta">
      <div class="dep-time text-muted">32s</div>
      <div class="dep-user">
        <div class="avatar av-ar">AR</div>
        <div>
          <div class="dep-user-name">Alex Rivera</div>
          <div class="dep-ago text-muted">3 minutes ago</div>
        </div>
      </div>
      <div class="dep-actions">
        <a href="#" class="dep-action-btn text-muted">&#8943;</a>
      </div>
    </div>
  </div>

  <div class="dep-row">
    <div class="dep-status-icon success"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check h-5 w-5 text-success" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg></div>
    <div class="dep-info">
      <div class="dep-branch">
        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-branch h-3.5 w-3.5 text-muted-foreground" aria-hidden="true"><path d="M15 6a9 9 0 0 0-9 9V3"></path><circle cx="18" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle></svg> develop
        <span class="badge-env badge-staging">Staging</span>
        <span class="badge-ready">Ready</span>
      </div>
      <div class="dep-commit text-muted">
        <span class="dep-commit-hash">f1a6c3f</span> fix: resolve memory leak in WebSocket handler
      </div>
    </div>
    <div class="dep-meta">
      <div class="dep-time text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-3 w-3" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg> 1m 12s</div>
      <div class="dep-user">
        <div class="avatar av-mj">MJ</div>
        <div>
          <div class="dep-user-name">Marcus Johnson</div>
          <div class="dep-ago text-muted">28 minutes ago</div>
        </div>
      </div>
      <div class="dep-actions">
        <a href="#" class="dep-action-btn text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link h-3.5 w-3.5" aria-hidden="true"><path d="M15 3h6v6"></path><path d="M10 14 21 3"></path><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path></svg></a>
        <a href="#" class="dep-action-btn text-muted">&#8943;</a>
      </div>
    </div>
  </div>

  <div class="dep-row">
    <div class="dep-status-icon success"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check h-5 w-5 text-success" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg></div>
    <div class="dep-info">
      <div class="dep-branch">
      <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-branch h-3.5 w-3.5 text-muted-foreground" aria-hidden="true"><path d="M15 6a9 9 0 0 0-9 9V3"></path><circle cx="18" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle></svg> main
        <span class="badge-env badge-production">Production</span>
        <span class="badge-ready">Ready</span>
      </div>
      <div class="dep-commit text-muted">
        <span class="dep-commit-hash">b4d0e18</span> chore: upgrade dependencies to latest stable
      </div>
    </div>
    <div class="dep-meta">
      <div class="dep-time text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-3 w-3" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg> 55s</div>
      <div class="dep-user">
        <div class="avatar av-sc">SC</div>
        <div>
          <div class="dep-user-name">Sarah Chen</div>
          <div class="dep-ago text-muted">2 hours ago</div>
        </div>
      </div>
      <div class="dep-actions">
        <a href="#" class="dep-action-btn text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link h-3.5 w-3.5" aria-hidden="true"><path d="M15 3h6v6"></path><path d="M10 14 21 3"></path><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path></svg></a>
        <a href="#" class="dep-action-btn text-muted">&#8943;</a>
      </div>
    </div>
  </div>

  <div class="dep-row">
    <div class="dep-status-icon error"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-x h-5 w-5 text-destructive" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="m15 9-6 6"></path><path d="m9 9 6 6"></path></svg></div>
    <div class="dep-info">
      <div class="dep-branch">
        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-branch h-3.5 w-3.5 text-muted-foreground" aria-hidden="true"><path d="M15 6a9 9 0 0 0-9 9V3"></path><circle cx="18" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle></svg> feat/auth-oidc
        <span class="badge-env badge-preview">Preview</span>
        <span class="badge-error">Error</span>
      </div>
      <div class="dep-commit text-muted">
        <span class="dep-commit-hash">c9e3a72</span> feat: implement OIDC SSO login flow
      </div>
    </div>
    <div class="dep-meta">
      <div class="dep-time text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-3 w-3" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg> 1m 45s</div>
      <div class="dep-user">
        <div class="avatar av-pp">PP</div>
        <div>
          <div class="dep-user-name">Priya Patel</div>
          <div class="dep-ago text-muted">3 hours ago</div>
        </div>
      </div>
      <div class="dep-actions">
        <a href="#" class="dep-action-btn text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link h-3.5 w-3.5" aria-hidden="true"><path d="M15 3h6v6"></path><path d="M10 14 21 3"></path><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path></svg></a>
        <a href="#" class="dep-action-btn text-muted">&#8943;</a>
      </div>
    </div>
  </div>

  <div class="dep-row">
    <div class="dep-status-icon success"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check h-5 w-5 text-success" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg></div>
    <div class="dep-info">
      <div class="dep-branch">
        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-branch h-3.5 w-3.5 text-muted-foreground" aria-hidden="true"><path d="M15 6a9 9 0 0 0-9 9V3"></path><circle cx="18" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle></svg> develop
        <span class="badge-env badge-staging">Staging</span>
        <span class="badge-ready">Ready</span>
      </div>
      <div class="dep-commit text-muted">
        <span class="dep-commit-hash">d217654</span> test: add integration tests for billing module
      </div>
    </div>
    <div class="dep-meta">
      <div class="dep-time text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-3 w-3" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg> 2m 3s</div>
      <div class="dep-user">
        <div class="avatar av-jl">JL</div>
        <div>
          <div class="dep-user-name">Jordan Lee</div>
          <div class="dep-ago text-muted">4 hours ago</div>
        </div>
      </div>
      <div class="dep-actions">
        <a href="#" class="dep-action-btn text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link h-3.5 w-3.5" aria-hidden="true"><path d="M15 3h6v6"></path><path d="M10 14 21 3"></path><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path></svg></a>
        <a href="#" class="dep-action-btn text-muted">&#8943;</a>
      </div>
    </div>
  </div>

  <div class="dep-row">
    <div class="dep-status-icon success"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check h-5 w-5 text-success" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg></div>
    <div class="dep-info">
      <div class="dep-branch">
        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-branch h-3.5 w-3.5 text-muted-foreground" aria-hidden="true"><path d="M15 6a9 9 0 0 0-9 9V3"></path><circle cx="18" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle></svg> main
        <span class="badge-env badge-production">Production</span>
        <span class="badge-ready">Ready</span>
      </div>
      <div class="dep-commit text-muted">
        <span class="dep-commit-hash">e813df4</span> fix: correct timezone handling in scheduler
      </div>
    </div>
    <div class="dep-meta">
      <div class="dep-time text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-3 w-3" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg> 51s</div>
      <div class="dep-user">
        <div class="avatar av-mj">MJ</div>
        <div>
          <div class="dep-user-name">Marcus Johnson</div>
          <div class="dep-ago text-muted">6 hours ago</div>
        </div>
      </div>
      <div class="dep-actions">
        <a href="#" class="dep-action-btn text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link h-3.5 w-3.5" aria-hidden="true"><path d="M15 3h6v6"></path><path d="M10 14 21 3"></path><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path></svg></a>
        <a href="#" class="dep-action-btn text-muted">&#8943;</a>
      </div>
    </div>
  </div>

  <div class="dep-row">
    <div class="dep-status-icon error"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-x h-5 w-5 text-destructive" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="m15 9-6 6"></path><path d="m9 9 6 6"></path></svg></div>
    <div class="dep-info">
      <div class="dep-branch">
        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-branch h-3.5 w-3.5 text-muted-foreground" aria-hidden="true"><path d="M15 6a9 9 0 0 0-9 9V3"></path><circle cx="18" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle></svg>feat/api-v3
        <span class="badge-env badge-preview">Preview</span>
        <span class="badge-cancelled">Cancelled</span>
      </div>
      <div class="dep-commit text-muted">
        <span class="dep-commit-hash">f0c2b91</span> feat: new API versioning and deprecation headers
      </div>
    </div>
    <div class="dep-meta">
      <div class="dep-time text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-3 w-3" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg> 5m 10s</div>
      <div class="dep-user">
        <div class="avatar av-ar">AR</div>
        <div>
          <div class="dep-user-name">Alex Rivera</div>
          <div class="dep-ago text-muted">8 hours ago</div>
        </div>
      </div>
      <div class="dep-actions">
        <a href="#" class="dep-action-btn text-muted">&#8943;</a>
      </div>
    </div>
  </div>

</div>

<script>
  document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
      this.classList.add('active');
    });
  });
</script>