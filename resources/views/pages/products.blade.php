@extends('welcome')
@push('css')
<style>
.orders-wrapper { 
background: var(--bs-body); 
border-radius: 12px; 
}
.orders-title {
font-size: 15px; 
font-weight: 700; 
margin-bottom: 0.2rem;
}
.orders-sub { 
font-size: 0.875rem; 
}
.orders-topbar { 
display: flex; 
justify-content: space-between; 
align-items: flex-start; 
flex-wrap: wrap; 
gap: 0.75rem; 
margin-bottom: 1.2rem; }
.orders-info { 
display: flex; 
flex-direction: column;
}
.btn-new-order { 
background: linear-gradient(to right, #7367f0, #3c96e1); 
color: #fff;
border: none; 
border-radius: 8px; 
padding: 0.5rem 1.2rem; 
font-size: 0.875rem; 
font-weight: 600; 
text-decoration: none; 
display: inline-flex; 
align-items: center; 
gap: 6px; 
white-space: nowrap; 
}
.btn-new-order:hover {
opacity: 0.9; 
color:var(--bs-body-color); }
.tab-bar { 
display: flex;
gap: 0.25rem; 
flex-wrap: wrap; 
border-bottom: 1px solid #e9ecef; 
padding-bottom: 0; }
.tab-btn { 
background: none; 
border: none; 
border-radius: 8px 8px 0 0; 
padding: 0.45rem 1rem; 
font-size: 0.875rem; 
font-weight: 500; 
color: #6c757d; 
cursor: pointer; 
text-decoration: none; 
border-bottom: 2px solid transparent; 
margin-bottom: -1px; 
}
.tab-btn:hover { 
color: #1a1a1a; 
background: #f8f9fa; 
}
.tab-btn.active { 
color: #1a1a1a; 
font-weight: 700; 
border: 1px solid #e9ecef; 
border-bottom: 2px solid #fff; 
background: #fff; 
border-radius: 8px 8px 0 0; 
}
.search-filter-bar { 
display: flex; 
align-items: center; 
gap: 10px; 
margin-top: 1rem; 
margin-bottom: 0.5rem; 
flex-wrap: wrap; 
}
.search-input-wrap { 
position: relative; 
display: flex; 
align-items: center;
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
width: 220px; 
outline: none; 
background: #fff; 
}
.search-input:focus { 
border-color: #7367f0; 
}
.btn-category { 
display: inline-flex; 
align-items: center; 
gap: 5px; 
background: none; 
border: 1px solid #dee2e6; 
border-radius: 8px; 
padding: 7px 14px; 
font-size: 0.82rem; 
color: #6c757d; 
cursor: pointer; 
text-decoration: none; 
}
.btn-category:hover { 
background: #f8f9fa; 
color: #1a1a1a; 
}
.top-right-actions { 
display: flex; 
gap: 6px; 
margin-left: auto; 
}
.btn-sm-action { 
display: inline-flex; 
align-items: center;
gap: 5px; 
background: none; 
border: 1px solid #dee2e6; 
border-radius: 8px; 
padding: 6px 12px; 
font-size: 0.78rem; 
color: #6c757d; 
cursor: pointer; 
text-decoration: none; 
}
.btn-sm-action:hover { 
background: #f8f9fa; 
color: #1a1a1a; }
.orders-table { 
width: 100%; 
border-collapse: collapse; 
font-size: 0.875rem; 
}
.orders-table thead th {
font-size: 11px;
font-weight: 600; 
color: var(--bs-body-color); 
text-transform: uppercase;
letter-spacing: 0.5px; 
padding: 0.6rem 0.75rem; 
border-bottom: 1px solid #e9ecef; 
white-space: nowrap; 
}
.orders-table tbody td { 
padding: 10px 5px; 
border-bottom: 1px solid #f1f3f5; 
vertical-align: middle; 
color: var(--bs-body-color); 
font-size: 13px; 
}
.orders-table tbody tr:last-child td { 
border-bottom: none; 
}
.prod-icon { 
width: 34px; 
height: 34px; 
border-radius: 8px; 
background: #f1f3f5; 
display: inline-flex; 
align-items: center; 
justify-content: center; 
flex-shrink: 0;
margin-right: 10px; 
}
.prod-cell { 
display: flex; 
align-items: center; 
}
.prod-name { 
font-weight: 600; 
font-size: 13px; 
color: var(--bs-body-color); 
display: block; 
}
.prod-desc { 
font-size: 11px;
color: #6c757d; 
display: block; 
max-width: 320px; 
white-space: nowrap; 
overflow: hidden; 
text-overflow: ellipsis; 
}
.badge-active { 
background: #2f9f3d; 
color: var(--bs-body-color); 
border-radius: 20px; 
padding: 3px 14px; 
font-size: 11px; 
font-weight: 600; 
display: inline-block; }
.badge-draft { 
background: #ed9a00; 
color: var(--bs-body-color); 
border-radius: 20px; 
padding: 3px 14px; 
font-size: 11px; 
font-weight: 600; 
display: inline-block;
}
.badge-archived { 
background: #f1f3f5; 
color: #6c757d; 
border-radius: 20px; 
padding: 3px 14px; 
font-size: 11px; 
font-weight: 600; 
display: inline-block; }
.cat-text { 
font-size: 13px; 
color: var(--bs-body-color); }
.stock-text { 
font-size: 13px; 
color: var(--bs-body-color); }
.price-text { 
font-weight: 700; 
color: var(--bs-body-color); 
white-space: nowrap; font-size: 13px; }
.date-text { 
color: #6c757d;
font-size: 12px; 
white-space: nowrap; }
.btn-action { 
background: none;
border: 1px solid #e9ecef;
border-radius: 6px; 
padding: 3px 8px; 
color: #6c757d; 
font-size: 0.78rem; 
cursor: pointer; 
text-decoration: none; }
.btn-action:hover { background: #f8f9fa; color: #1a1a1a; }
</style>
@endpush
@section('pages')
<div class="orders-wrapper">
  <div class="orders-topbar">
    <div class="orders-info">
      <p class="orders-title">Products</p>
      <p class="orders-sub text-muted">Browse and manage your product catalog.</p>
    </div>
    <a href="#" class="btn-new-order">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
      </svg>
      Add Products
    </a>
  </div>

  <div class="tab-bar">
    <a href="#" class="tab-btn active">All</a>
    <a href="#" class="tab-btn">Active</a>
    <a href="#" class="tab-btn">Draft</a>
    <a href="#" class="tab-btn">Archived</a>
  </div>

  <div class="search-filter-bar">
    <div class="search-input-wrap">
      <svg class="search-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
      <input type="search" class="search-input" placeholder="Search products...">
    </div>
    <a href="#" class="btn-category">
      <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14"/><path d="M4.93 4.93a10 10 0 0 0 0 14.14"/></svg>
      Category
    </a>
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
          <th>Product ↕</th>
          <th>Category ↕</th>
          <th>Status ↕</th>
          <th>Stock ↕</th>
          <th>Price ↕</th>
          <th>Created</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div class="prod-cell">
              <div class="prod-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#62626f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package h-5 w-5 text-muted-foreground" aria-hidden="true"><path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"></path><path d="M12 22V12"></path><polyline points="3.29 7 12 12 20.71 7"></polyline><path d="m7.5 4.27 9 5.15"></path></svg></div>
              <div>
                <span class="prod-name">Pro Dashboard License</span>
                <span class="prod-desc">Full-featured admin dashboard template with all components and pages.</span>
              </div>
            </div>
          </td>
          <td class="cat-text">Templates</td>
          <td><span class="badge-active">Active</span></td>
          <td class="stock-text">300</td>
          <td class="price-text">$299.00</td>
          <td class="date-text">Jan 15, 2026</td>
          <td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td>
            <div class="prod-cell">
              <div class="prod-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#62626f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package h-5 w-5 text-muted-foreground" aria-hidden="true"><path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"></path><path d="M12 22V12"></path><polyline points="3.29 7 12 12 20.71 7"></polyline><path d="m7.5 4.27 9 5.15"></path></svg>
              </div>
              <div>
                <span class="prod-name">Team Plan Upgrade</span>
                <span class="prod-desc">Upgrade to team plan with shared access and collaboration features.</span>
              </div>
            </div>
          </td>
          <td class="cat-text">Plans</td>
          <td><span class="badge-active">Active</span></td>
          <td class="stock-text">300</td>
          <td class="price-text">$599.00</td>
          <td class="date-text">Jan 10, 2026</td>
          <td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td>
            <div class="prod-cell">
              <div class="prod-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#62626f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package h-5 w-5 text-muted-foreground" aria-hidden="true"><path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"></path><path d="M12 22V12"></path><polyline points="3.29 7 12 12 20.71 7"></polyline><path d="m7.5 4.27 9 5.15"></path></svg>
              </div>
              <div>
                <span class="prod-name">Enterprise License</span>
                <span class="prod-desc">Enterprise-grade license with priority support and custom branding.</span>
              </div>
            </div>
          </td>
          <td class="cat-text">Licenses</td>
          <td><span class="badge-active">Active</span></td>
          <td class="stock-text">300</td>
          <td class="price-text">$1,499.00</td>
          <td class="date-text">Dec 28, 2025</td>
          <td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td>
            <div class="prod-cell">
              <div class="prod-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#62626f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package h-5 w-5 text-muted-foreground" aria-hidden="true"><path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"></path><path d="M12 22V12"></path><polyline points="3.29 7 12 12 20.71 7"></polyline><path d="m7.5 4.27 9 5.15"></path></svg>
              </div>
              <div>
                <span class="prod-name">Single License</span>
                <span class="prod-desc">Single-use license for personal or single-client projects.</span>
              </div>
            </div>
          </td>
          <td class="cat-text">Licenses</td>
          <td><span class="badge-active">Active</span></td>
          <td class="stock-text">300</td>
          <td class="price-text">$79.00</td>
          <td class="date-text">Dec 15, 2025</td>
          <td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td>
            <div class="prod-cell">
              <div class="prod-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#62626f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package h-5 w-5 text-muted-foreground" aria-hidden="true"><path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"></path><path d="M12 22V12"></path><polyline points="3.29 7 12 12 20.71 7"></polyline><path d="m7.5 4.27 9 5.15"></path></svg>
              </div>
              <div>
                <span class="prod-name">Starter Plan</span>
                <span class="prod-desc">Affordable starter plan with essential dashboard components.</span>
              </div>
            </div>
          </td>
          <td class="cat-text">Plans</td>
          <td><span class="badge-active">Active</span></td>
          <td class="stock-text">300</td>
          <td class="price-text">$49.00</td>
          <td class="date-text">Nov 28, 2025</td>
          <td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td>
            <div class="prod-cell">
              <div class="prod-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#62626f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package h-5 w-5 text-muted-foreground" aria-hidden="true"><path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"></path><path d="M12 22V12"></path><polyline points="3.29 7 12 12 20.71 7"></polyline><path d="m7.5 4.27 9 5.15"></path></svg>
              </div>
              <div>
                <span class="prod-name">UI Component Pack</span>
                <span class="prod-desc">50+ pre-built UI components for rapid prototyping.</span>
              </div>
            </div>
          </td>
          <td class="cat-text">Templates</td>
          <td><span class="badge-active">Active</span></td>
          <td class="stock-text">300</td>
          <td class="price-text">$149.00</td>
          <td class="date-text">Nov 15, 2025</td>
          <td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td>
            <div class="prod-cell">
              <div class="prod-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#62626f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package h-5 w-5 text-muted-foreground" aria-hidden="true"><path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"></path><path d="M12 22V12"></path><polyline points="3.29 7 12 12 20.71 7"></polyline><path d="m7.5 4.27 9 5.15"></path></svg>
              </div>
              <div>
                <span class="prod-name">E-commerce Module</span>
                <span class="prod-desc">Add-on module with product catalog, cart, and checkout components.</span>
              </div>
            </div>
          </td>
          <td class="cat-text">Modules</td>
          <td><span class="badge-active">Active</span></td>
          <td class="stock-text">300</td>
          <td class="price-text">$199.00</td>
          <td class="date-text">Oct 30, 2025</td>
          <td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td>
            <div class="prod-cell">
              <div class="prod-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#62626f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package h-5 w-5 text-muted-foreground" aria-hidden="true"><path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"></path><path d="M12 22V12"></path><polyline points="3.29 7 12 12 20.71 7"></polyline><path d="m7.5 4.27 9 5.15"></path></svg>
              </div>
              <div>
                <span class="prod-name">Analytics Dashboard</span>
                <span class="prod-desc">Specialized analytics dashboard with advanced chart components.</span>
              </div>
            </div>
          </td>
          <td class="cat-text">Templates</td>
          <td><span class="badge-active">Active</span></td>
          <td class="stock-text">300</td>
          <td class="price-text">$249.00</td>
          <td class="date-text">Oct 15, 2025</td>
          <td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td>
            <div class="prod-cell">
              <div class="prod-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#62626f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package h-5 w-5 text-muted-foreground" aria-hidden="true"><path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"></path><path d="M12 22V12"></path><polyline points="3.29 7 12 12 20.71 7"></polyline><path d="m7.5 4.27 9 5.15"></path></svg>
              </div>
              <div>
                <span class="prod-name">CRM Module</span>
                <span class="prod-desc">Customer relationship management module with pipeline and contacts.</span>
              </div>
            </div>
          </td>
          <td class="cat-text">Modules</td>
          <td><span class="badge-draft">Draft</span></td>
          <td class="stock-text">300</td>
          <td class="price-text">$349.00</td>
          <td class="date-text">Sep 25, 2025</td>
          <td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td>
            <div class="prod-cell">
              <div class="prod-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#62626f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package h-5 w-5 text-muted-foreground" aria-hidden="true"><path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"></path><path d="M12 22V12"></path><polyline points="3.29 7 12 12 20.71 7"></polyline><path d="m7.5 4.27 9 5.15"></path></svg>
              </div>
              <div>
                <span class="prod-name">Email Template Pack</span>
                <span class="prod-desc">20+ responsive email templates for transactional and marketing emails.</span>
              </div>
            </div>
          </td>
          <td class="cat-text">Templates</td>
          <td><span class="badge-active">Active</span></td>
          <td class="stock-text">300</td>
          <td class="price-text">$99.00</td>
          <td class="date-text">Sep 10, 2025</td>
          <td><a href="#" class="btn-action">···</a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection