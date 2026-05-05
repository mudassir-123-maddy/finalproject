<style>
.ff-title {
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 4px;
}
.ff-sub {
  font-size: 12px;
}
.ff-topbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 16px;
  flex-wrap: wrap;
  gap: 8px;
}
.btn-create-flag {
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
.btn-create-flag:hover {
  opacity: 0.9;
  color: #fff;
}
.ff-search-wrap {
  position: relative;
  display: flex;
  align-items: center;
  margin-bottom: 12px;
}
.ff-search-icon {
  position: absolute;
  left: 10px;
}
.ff-search-input {
  border: 1px solid #dee2e6;
  border-radius: 8px;
  padding: 7px 12px 7px 32px;
  font-size: 13px;
  width: 100%;
  outline: none;
  background: #fff;
}
.ff-search-input:focus {
  border-color: #7367f0;
}
.ff-filters {
  display: flex;
  justify-content: end;
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
.ff-table {
  width: 100%;
  border-collapse: collapse;
}
.ff-table thead tr {
  border-bottom: 1px solid #e0e0dd;
}
.ff-table thead th {
  font-size: 10px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.06em;
  padding: 8px 12px;
}
.ff-table tbody tr {
  border-bottom: 1px solid #f1f3f5;
}
.ff-table tbody tr:last-child {
  border-bottom: none;
}
.ff-table tbody td {
  padding: 5px;
  vertical-align: middle;
  font-size: 13px;
}
.ff-flag-name {
  font-size: 14px;
  font-weight: 600;
  margin-bottom: 2px;
}
.ff-flag-key {
  font-size: 11px;
}
.ff-flag-desc {
  font-size: 11px;
  margin-top: 2px;
}
.badge-release {
  font-size: 9px;
  padding: 2px 9px;
  border-radius: 99px;
  background: #7367f0;
  color: #fff;
  font-weight: 600;
}
.badge-release2{
  font-size: 9px;
  padding: 2px 9px;
  border-radius: 99px;
  background: #ed9a00;
  color: #fff;
  font-weight: 600;
}
.badge-experiment {
  font-size: 9px;
  padding: 2px 9px;
  border-radius: 99px;
  background: #f0a500;
  color: #fff;
  font-weight: 600;
}
.badge-permission {
  font-size: 9px;
  padding: 2px 9px;
  border-radius: 99px;
  background: #28c76f;
  color: #fff;
  font-weight: 600;
}
.badge-ops {
  font-size: 9px;
  padding: 2px 9px;
  border-radius: 99px;
  background: #3c96e1;
  color: #fff;
  font-weight: 600;
}
.badge-rollout {
  font-size: 9px;
  padding: 2px 9px;
  border-radius: 99px;
  background: #eaf3de;
  color: #3B6D11;
  font-weight: 600;
}
.ff-env-label {
  font-size: 9px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  margin-bottom: 4px;
}
.ff-toggle {
  width: 34px;
  height: 18px;
  border-radius: 99px;
  border: none;
  cursor: pointer;
  position: relative;
  transition: background 0.2s;
}
.ff-toggle.on {
  background: linear-gradient(to right, #7367f0, #3c96e1);
}
.ff-toggle.off {
  background: #dee2e6;
}
.ff-toggle::after {
  content: '';
  position: absolute;
  width: 13px;
  height: 13px;
  border-radius: 50%;
  background: #fff;
  top: 2.5px;
  transition: left 0.2s;
}
.ff-toggle.on::after {
  left: 18px;
}
.ff-toggle.off::after {
  left: 3px;
}
.ff-rollout-bar {
  height: 4px;
  border-radius: 99px;
  background: #e9ecef;
  width: 80px;
  margin-bottom: 3px;
}
.ff-rollout-fill {
  height: 4px;
  border-radius: 99px;
  background: linear-gradient(to right, #7367f0, #3c96e1);
}
.ff-rollout-label {
  font-size: 10px;
  font-weight: 600;
}
.ff-rollout-sub {
  font-size: 10px;
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
}
.av-ak { background: #3c96e1; }
.av-mr { background: #28c76f; }
.av-sc { background: #f0a500; }
.av-jd { background: #e74c3c; }
.av-lp { background: #7367f0; }
.av-tn { background: #3dba8c; }
.ff-user-name {
  font-size: 11px;
  font-weight: 600;
}
.ff-user-time {
  font-size: 10px;
}
</style>
<div class="ff-topbar">
  <div>
    <div class="ff-title">Feature Flags</div>
    <div class="ff-sub text-muted">Manage feature rollouts across environments. 12 flags configured.</div>
  </div>
  <a href="#" class="btn-create-flag">+ Create Flag</a>
</div>

<div class="ff-search-wrap">
  <svg class="ff-search-icon" width="14" height="14" fill="none" stroke="#aaa" stroke-width="2" viewBox="0 0 24 24">
    <circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/>
  </svg>
  <input class="ff-search-input" type="text" placeholder="Search flags by name or key...">
</div>

<div class="ff-filters">
  <a href="#" class="filter-btn active">All 12</a>
  <a href="#" class="filter-btn">Release 4</a>
  <a href="#" class="filter-btn">Experiment 2</a>
  <a href="#" class="filter-btn">Ops 3</a>
  <a href="#" class="filter-btn">Permission 2</a>
</div>

<table class="ff-table">
  <thead>
    <tr>
      <th class="text-muted">Flag</th>
      <th class="text-muted text-center">DEV</th>
      <th class="text-muted text-center">STAGING</th>
      <th class="text-muted text-center">PROD</th>
      <th class="text-muted">Rollout</th>
      <th class="text-muted">Owner</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <td>
        <div class="d-flex align-items-center gap-2 mb-1">
          <div class="ff-flag-name">Dark Mode</div>
          <span class="badge-release">Release</span>
          <span class="badge-rollout">Fully Rolled Out</span>
        </div>
        <div class="ff-flag-key text-muted">enable-dark-mode</div>
        <div class="ff-flag-desc text-muted">Enable the dark theme toggle in user settings and persist preference across sessions.</div>
      </td>
      <td class="text-center"><button class="ff-toggle on"></button></td>
      <td class="text-center"><button class="ff-toggle off"></button></td>
      <td class="text-center"><button class="ff-toggle on"></button></td>
      <td>
        <div class="ff-rollout-bar"><div class="ff-rollout-fill" style="width:100%"></div></div>
        <div class="ff-rollout-label">100%</div>
        <div class="ff-rollout-sub text-muted">Rollout</div>
      </td>
      <td>
        <div class="d-flex align-items-center gap-2">
          <div class="avatar av-ak">AK</div>
          <div>
            <div class="ff-user-name">Anya Kapoor</div>
            <div class="ff-user-time text-muted">Yesterday</div>
          </div>
        </div>
      </td>
    </tr>

    <tr>
      <td>
        <div class="d-flex align-items-center gap-2 mb-1">
          <div class="ff-flag-name">AI Copilot Chat</div>
          <span class="badge-release">Release</span>
        </div>
        <div class="ff-flag-key text-muted">ai-copilot-chat</div>
        <div class="ff-flag-desc text-muted">LLM powered assistant widget in the bottom-right corner for contextual help and code generation.</div>
      </td>
      <td class="text-center"><button class="ff-toggle on"></button></td>
      <td class="text-center"><button class="ff-toggle off"></button></td>
      <td class="text-center"><button class="ff-toggle off"></button></td>
      <td>
        <div class="ff-rollout-bar"><div class="ff-rollout-fill" style="width:0%"></div></div>
        <div class="ff-rollout-label">0%</div>
        <div class="ff-rollout-sub text-muted">Rollout</div>
      </td>
      <td>
        <div class="d-flex align-items-center gap-2">
          <div class="avatar av-mr">MR</div>
          <div>
            <div class="ff-user-name">Marco Rossi</div>
            <div class="ff-user-time text-muted">2d ago</div>
          </div>
        </div>
      </td>
    </tr>

    <tr>
      <td>
        <div class="d-flex align-items-center gap-2 mb-1">
          <div class="ff-flag-name">Onboarding V2 Flow</div>
          <span class="badge-experiment">Experiment</span>
        </div>
        <div class="ff-flag-key text-muted">onboarding-v2-experiment</div>
        <div class="ff-flag-desc text-muted">A/B test comparing the current 5-step onboarding against a new 3-step streamlined flow.</div>
      </td>
      <td class="text-center"><button class="ff-toggle on"></button></td>
      <td class="text-center"><button class="ff-toggle on"></button></td>
      <td class="text-center"><button class="ff-toggle on"></button></td>
      <td>
        <div class="ff-rollout-bar"><div class="ff-rollout-fill" style="width:50%"></div></div>
        <div class="ff-rollout-label">50%</div>
        <div class="ff-rollout-sub text-muted">Rollout</div>
      </td>
      <td>
        <div class="d-flex align-items-center gap-2">
          <div class="avatar av-sc">SC</div>
          <div>
            <div class="ff-user-name">Sara Chen</div>
            <div class="ff-user-time text-muted">3d ago</div>
          </div>
        </div>
      </td>
    </tr>

    <tr>
      <td>
        <div class="d-flex align-items-center gap-2 mb-1">
          <div class="ff-flag-name">Rate Limiter v3</div>
          <span class="badge-ops">Ops</span>
        </div>
        <div class="ff-flag-key text-muted">rate-limiter-v3</div>
        <div class="ff-flag-desc text-muted">Switch to token-bucket rate limiting algorithm with per-endpoint burst allowances.</div>
      </td>
      <td class="text-center"><button class="ff-toggle off"></button></td>
      <td class="text-center"><button class="ff-toggle off"></button></td>
      <td class="text-center"><button class="ff-toggle off"></button></td>
      <td>
        <div class="ff-rollout-bar"><div class="ff-rollout-fill" style="width:0%"></div></div>
        <div class="ff-rollout-label">0%</div>
        <div class="ff-rollout-sub text-muted">Rollout</div>
      </td>
      <td>
        <div class="d-flex align-items-center gap-2">
          <div class="avatar av-jd">JD</div>
          <div>
            <div class="ff-user-name">Jake Dawson</div>
            <div class="ff-user-time text-muted">4d ago</div>
          </div>
        </div>
      </td>
    </tr>

    <tr>
      <td>
        <div class="d-flex align-items-center gap-2 mb-1">
          <div class="ff-flag-name">Team Billing Admin</div>
          <span class="badge-permission">Permission</span>
          <span class="badge-rollout">Fully Rolled Out</span>
        </div>
        <div class="ff-flag-key text-muted">team-billing-admin</div>
        <div class="ff-flag-desc text-muted">Allow users with the team-admin role to manage billing, invoices, and payment methods.</div>
      </td>
      <td class="text-center"><button class="ff-toggle on"></button></td>
      <td class="text-center"><button class="ff-toggle on"></button></td>
      <td class="text-center"><button class="ff-toggle on"></button></td>
      <td>
        <div class="ff-rollout-bar"><div class="ff-rollout-fill" style="width:100%"></div></div>
        <div class="ff-rollout-label">100%</div>
        <div class="ff-rollout-sub text-muted">Rollout</div>
      </td>
      <td>
        <div class="d-flex align-items-center gap-2">
          <div class="avatar av-lp">LP</div>
          <div>
            <div class="ff-user-name">Lina Park</div>
            <div class="ff-user-time text-muted">5d ago</div>
          </div>
        </div>
      </td>
    </tr>

    <tr>
      <td>
        <div class="d-flex align-items-center gap-2 mb-1">
          <div class="ff-flag-name">Real-time Notifications</div>
          <span class="badge-release">Release</span>
        </div>
        <div class="ff-flag-key text-muted">realtime-notifications</div>
        <div class="ff-flag-desc text-muted">Push full-featured notifications replacing the current polling system for selected billing events.</div>
      </td>
      <td class="text-center"><button class="ff-toggle on"></button></td>
      <td class="text-center"><button class="ff-toggle off"></button></td>
      <td class="text-center"><button class="ff-toggle off"></button></td>
      <td>
        <div class="ff-rollout-bar"><div class="ff-rollout-fill" style="width:0%"></div></div>
        <div class="ff-rollout-label">0%</div>
        <div class="ff-rollout-sub text-muted">Rollout</div>
      </td>
      <td>
        <div class="d-flex align-items-center gap-2">
          <div class="avatar av-tn">TN</div>
          <div>
            <div class="ff-user-name">Tomoki Nakamura</div>
            <div class="ff-user-time text-muted">6d ago</div>
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="d-flex align-items-center gap-2 mb-1">
          <div class="ff-flag-name">Pricing page Redesign</div>
          <span class="badge-release2">Experiment</span>
        </div>
        <div class="ff-flag-key text-muted">realtime-notifications</div>
        <div class="ff-flag-desc text-muted">Push full-featured notifications replacing the current polling system for selected billing events.</div>
      </td>
      <td class="text-center"><button class="ff-toggle on"></button></td>
      <td class="text-center"><button class="ff-toggle off"></button></td>
      <td class="text-center"><button class="ff-toggle off"></button></td>
      <td>
        <div class="ff-rollout-bar"><div class="ff-rollout-fill" style="width:0%"></div></div>
        <div class="ff-rollout-label">0%</div>
        <div class="ff-rollout-sub text-muted">Rollout</div>
      </td>
      <td>
        <div class="d-flex align-items-center gap-2">
          <div class="avatar av-tn">TN</div>
          <div>
            <div class="ff-user-name">Tomoki Nakamura</div>
            <div class="ff-user-time text-muted">6d ago</div>
          </div>
        </div>
      </td>
    </tr>
      <tr>
      <td>
        <div class="d-flex align-items-center gap-2 mb-1">
          <div class="ff-flag-name">Team Billing Admin</div>
          <span class="badge-permission">Permission</span>
          <span class="badge-rollout">Fully Rolled Out</span>
        </div>
        <div class="ff-flag-key text-muted">team-billing-admin</div>
        <div class="ff-flag-desc text-muted">Allow users with the team-admin role to manage billing, invoices, and payment methods.</div>
      </td>
      <td class="text-center"><button class="ff-toggle on"></button></td>
      <td class="text-center"><button class="ff-toggle on"></button></td>
      <td class="text-center"><button class="ff-toggle on"></button></td>
      <td>
        <div class="ff-rollout-bar"><div class="ff-rollout-fill" style="width:100%"></div></div>
        <div class="ff-rollout-label">100%</div>
        <div class="ff-rollout-sub text-muted">Rollout</div>
      </td>
      <td>
        <div class="d-flex align-items-center gap-2">
          <div class="avatar av-lp">LP</div>
          <div>
            <div class="ff-user-name">Lina Park</div>
            <div class="ff-user-time text-muted">5d ago</div>
          </div>
        </div>
      </td>
    </tr>

    <tr>
      <td>
        <div class="d-flex align-items-center gap-2 mb-1">
          <div class="ff-flag-name">Real-time Notifications</div>
          <span class="badge-release">Release</span>
        </div>
        <div class="ff-flag-key text-muted">realtime-notifications</div>
        <div class="ff-flag-desc text-muted">Push full-featured notifications replacing the current polling system for selected billing events.</div>
      </td>
      <td class="text-center"><button class="ff-toggle on"></button></td>
      <td class="text-center"><button class="ff-toggle off"></button></td>
      <td class="text-center"><button class="ff-toggle off"></button></td>
      <td>
        <div class="ff-rollout-bar"><div class="ff-rollout-fill" style="width:0%"></div></div>
        <div class="ff-rollout-label">0%</div>
        <div class="ff-rollout-sub text-muted">Rollout</div>
      </td>
      <td>
        <div class="d-flex align-items-center gap-2">
          <div class="avatar av-tn">TN</div>
          <div>
            <div class="ff-user-name">Tomoki Nakamura</div>
            <div class="ff-user-time text-muted">6d ago</div>
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="d-flex align-items-center gap-2 mb-1">
          <div class="ff-flag-name">Pricing page Redesign</div>
          <span class="badge-release2">Experiment</span>
        </div>
        <div class="ff-flag-key text-muted">realtime-notifications</div>
        <div class="ff-flag-desc text-muted">Push full-featured notifications replacing the current polling system for selected billing events.</div>
      </td>
      <td class="text-center"><button class="ff-toggle on"></button></td>
      <td class="text-center"><button class="ff-toggle off"></button></td>
      <td class="text-center"><button class="ff-toggle off"></button></td>
      <td>
        <div class="ff-rollout-bar"><div class="ff-rollout-fill" style="width:0%"></div></div>
        <div class="ff-rollout-label">0%</div>
        <div class="ff-rollout-sub text-muted">Rollout</div>
      </td>
      <td>
        <div class="d-flex align-items-center gap-2">
          <div class="avatar av-tn">TN</div>
          <div>
            <div class="ff-user-name">Tomoki Nakamura</div>
            <div class="ff-user-time text-muted">6d ago</div>
          </div>
        </div>
      </td>
    </tr>
  </tbody>
</table>

<script>
  document.querySelectorAll('.ff-toggle').forEach(btn => {
    btn.addEventListener('click', function() {
      this.classList.toggle('on');
      this.classList.toggle('off');
    });
  });

</script>