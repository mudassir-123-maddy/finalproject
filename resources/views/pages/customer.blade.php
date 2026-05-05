@extends('welcome')
@push('css')
<style>
.orders-wrapper { background: var(--bs-body); border-radius: 12px; }
.orders-title { font-size: 15px; font-weight: 700; margin-bottom: 0.2rem; }
.orders-sub { font-size: 0.875rem; }
.orders-topbar { display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 0.75rem; margin-bottom: 1.2rem; }
.orders-info { display: flex; flex-direction: column; }
.tab-bar { display: flex; gap: 0.25rem; flex-wrap: wrap; border-bottom: 1px solid #e9ecef; padding-bottom: 0; }
.tab-btn { background: none; border: none; border-radius: 8px 8px 0 0; padding: 0.45rem 1rem; font-size: 0.875rem; font-weight: 500; color: #6c757d; cursor: pointer; text-decoration: none; border-bottom: 2px solid transparent; margin-bottom: -1px; }
.tab-btn:hover { color: #1a1a1a; background: #f8f9fa; }
.tab-btn.active { color: #1a1a1a; font-weight: 700; border: 1px solid #e9ecef; border-bottom: 2px solid #fff; background: #fff; border-radius: 8px 8px 0 0; }
.search-filter-bar { display: flex; align-items: center; gap: 10px; margin-top: 1rem; margin-bottom: 0.5rem; flex-wrap: wrap; }
.search-input-wrap { position: relative; display: flex; align-items: center; }
.search-icon { position: absolute; left: 10px; color: #6c757d; }
.search-input { border: 1px solid #dee2e6; border-radius: 8px; padding: 7px 12px 7px 32px; font-size: 0.82rem; color: #6c757d; width: 220px; outline: none; background: #fff; }
.search-input:focus { border-color: #7367f0; }
.top-right-actions { display: flex; gap: 6px; margin-left: auto; }
.btn-sm-action { display: inline-flex; align-items: center; gap: 5px; background: none; border: 1px solid #dee2e6; border-radius: 8px; padding: 6px 12px; font-size: 0.78rem; color: #6c757d; cursor: pointer; text-decoration: none; }
.btn-sm-action:hover { background: #f8f9fa; color: #1a1a1a; }
.orders-table { width: 100%; border-collapse: collapse; font-size: 0.875rem; }
.orders-table thead th { font-size: 11px; font-weight: 600; color: var(--bs-body-color); text-transform: uppercase; letter-spacing: 0.5px; padding: 0.6rem 0.75rem; border-bottom: 1px solid #e9ecef; white-space: nowrap; }
.orders-table tbody td { padding: 10px 8px; border-bottom: 1px solid #f1f3f5; vertical-align: middle; color: var(--bs-body-color); font-size: 13px; }
.orders-table tbody tr:hover { background: #f8f9fa; }
.orders-table tbody tr:last-child td { border-bottom: none; }
.avatar { width: 30px; height: 30px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: 10px; font-weight: 700; color: #fff; flex-shrink: 0; margin-right: 10px; }
.av-purple { background: #8b7fd4; } .av-blue { background: #5bc4e8; } .av-green { background: #3dba8c; }
.av-orange { background: #f0853a; } .av-pink { background: #d46bbf; } .av-teal { background: #0f9e84; }
.av-indigo { background: #5c6bc0; } .av-red { background: #e05c5c; } .av-cyan { background: #26a69a; } .av-amber { background: #f59e0b; }
.customer-cell { display: flex; align-items: center; }
.customer-name { font-weight: 600; font-size: 13px; color: var(--bs-body-color); display: block; }
.customer-email { font-size: 11px; color: #6c757d; display: block; }
.badge-active { background: #2f9f3d; color: #fff; border-radius: 20px; padding: 3px 14px; font-size: 11px; font-weight: 600; display: inline-block; }
.badge-inactive { background: #6c757d26; color: #6c757d; border-radius: 20px; padding: 3px 14px; font-size: 11px; font-weight: 600; display: inline-block; }
.date-text { color: var(--bs-body-color); font-size: 13px; white-space: nowrap; }
.orders-count { font-size: 13px; color: var(--bs-body-color); }
.spent-text { font-weight: 700; color: var(--bs-body-color); white-space: nowrap; font-size: 13px; }
.btn-action { background: none; border: 1px solid #e9ecef; border-radius: 6px; padding: 3px 8px; color: #6c757d; font-size: 0.78rem; cursor: pointer; text-decoration: none; }
.btn-action:hover { background: #f8f9fa; color: #1a1a1a; }
.table-footer { display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 0.5rem; margin-top: 1rem; padding-top: 1rem; border-top: 1px solid #f1f3f5; }
.footer-info { font-size: 0.82rem; color: #6c757d; }
.pagination-btns { display: flex; align-items: center; gap: 4px; }
.pg-btn { background: none; border: 1px solid #e9ecef; border-radius: 6px; padding: 4px 10px; font-size: 0.82rem; color: #6c757d; cursor: pointer; text-decoration: none; }
.pg-btn:hover { background: #f8f9fa; color: #1a1a1a; }
.pg-btn.active { background: linear-gradient(to right, #7367f0, #3c96e1); color: #fff; border-color: transparent; }
</style>
@endpush
@section('pages')
<div class="orders-wrapper">
  <div class="orders-topbar">
    <div class="orders-info">
      <p class="orders-title">Customers</p>
      <p class="orders-sub text-muted">View and manage your customer base.</p>
    </div>
  </div>

  <div class="tab-bar">
    <a href="#" class="tab-btn active">All</a>
    <a href="#" class="tab-btn">Active</a>
    <a href="#" class="tab-btn">Inactive</a>
  </div>

  <div class="search-filter-bar">
    <div class="search-input-wrap">
      <svg class="search-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
      <input type="search" class="search-input" placeholder="Search customers...">
    </div>
    <div class="top-right-actions">
      <a href="#" class="btn-sm-action">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg>
        Columns
      </a>
      <a href="#" class="btn-sm-action">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="8 17 12 21 16 17"/><line x1="12" y1="12" x2="12" y2="21"/><path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"/></svg>
        Export
      </a>
    </div>
  </div>

  <div class="table-responsive">
    <table class="orders-table">
      <thead>
        <tr>
          <th>Customer ↕</th>
          <th>Status ↕</th>
          <th>Joined ↕</th>
          <th>Orders ↕</th>
          <th>Total Spent ↕</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><div class="customer-cell"><div class="avatar av-purple">EW</div><div><span class="customer-name">Emma Wilson</span><span class="customer-email">emma@example.com</span></div></div></td>
          <td><span class="badge-active">Active</span></td>
          <td class="date-text">Jan 5, 2026</td>
          <td class="orders-count">3</td>
          <td class="spent-text">$898.00</td>
          <td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td><div class="customer-cell"><div class="avatar av-blue">JC</div><div><span class="customer-name">James Chen</span><span class="customer-email">james@company.io</span></div></div></td>
          <td><span class="badge-active">Active</span></td>
          <td class="date-text">Jan 12, 2026</td>
          <td class="orders-count">1</td>
          <td class="spent-text">$599.00</td>
          <td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td><div class="customer-cell"><div class="avatar av-green">SG</div><div><span class="customer-name">Sofia Garcia</span><span class="customer-email">sofia@startup.co</span></div></div></td>
          <td><span class="badge-active">Active</span></td>
          <td class="date-text">Dec 18, 2025</td>
          <td class="orders-count">2</td>
          <td class="spent-text">$1,548.00</td>
          <td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td><div class="customer-cell"><div class="avatar av-amber">AT</div><div><span class="customer-name">Alex Thompson</span><span class="customer-email">alex@dev.com</span></div></div></td>
          <td><span class="badge-active">Active</span></td>
          <td class="date-text">Jan 20, 2026</td>
          <td class="orders-count">1</td>
          <td class="spent-text">$79.00</td>
          <td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td><div class="customer-cell"><div class="avatar av-pink">MS</div><div><span class="customer-name">Maria Santos</span><span class="customer-email">maria@agency.co</span></div></div></td>
          <td><span class="badge-active">Active</span></td>
          <td class="date-text">Dec 2, 2025</td>
          <td class="orders-count">1</td>
          <td class="spent-text">$299.00</td>
          <td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td><div class="customer-cell"><div class="avatar av-teal">DK</div><div><span class="customer-name">David Kim</span><span class="customer-email">david@tech.io</span></div></div></td>
          <td><span class="badge-inactive">Inactive</span></td>
          <td class="date-text">Nov 15, 2025</td>
          <td class="orders-count">1</td>
          <td class="spent-text">$0.00</td>
          <td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td><div class="customer-cell"><div class="avatar av-indigo">LP</div><div><span class="customer-name">Lisa Park</span><span class="customer-email">lisa@design.co</span></div></div></td>
          <td><span class="badge-active">Active</span></td>
          <td class="date-text">Jan 8, 2026</td>
          <td class="orders-count">1</td>
          <td class="spent-text">$299.00</td>
          <td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td><div class="customer-cell"><div class="avatar av-red">RM</div><div><span class="customer-name">Ryan Mitchell</span><span class="customer-email">ryan@startup.io</span></div></div></td>
          <td><span class="badge-active">Active</span></td>
          <td class="date-text">Dec 28, 2025</td>
          <td class="orders-count">1</td>
          <td class="spent-text">$1,499.00</td>
          <td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td><div class="customer-cell"><div class="avatar av-cyan">NP</div><div><span class="customer-name">Nina Patel</span><span class="customer-email">nina@corp.com</span></div></div></td>
          <td><span class="badge-active">Active</span></td>
          <td class="date-text">Jan 15, 2026</td>
          <td class="orders-count">1</td>
          <td class="spent-text">$79.00</td>
          <td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td><div class="customer-cell"><div class="avatar av-orange">TB</div><div><span class="customer-name">Tom Bradley</span><span class="customer-email">tom@agency.io</span></div></div></td>
          <td><span class="badge-active">Active</span></td>
          <td class="date-text">Jan 22, 2026</td>
          <td class="orders-count">1</td>
          <td class="spent-text">$599.00</td>
          <td><a href="#" class="btn-action">···</a></td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="table-footer">
    <span class="footer-info">Rows per page: 10 &nbsp;|&nbsp; 1–10 of 84 customers</span>
    <div class="pagination-btns">
      <a href="#" class="pg-btn">← Prev</a>
      <a href="#" class="pg-btn active">1</a>
      <a href="#" class="pg-btn">2</a>
      <a href="#" class="pg-btn">3</a>
      <a href="#" class="pg-btn">...</a>
      <a href="#" class="pg-btn">9</a>
      <a href="#" class="pg-btn">Next →</a>
    </div>
  </div>
</div>
@endsection