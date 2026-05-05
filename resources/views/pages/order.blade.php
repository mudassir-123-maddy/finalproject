@extends('welcome')
@push('css')
<style>
.orders-wrapper {
background: var(--bs-body); 
border-radius: 12px; 
margin-left: 10px;
}
.orders-title { 
font-size: 15px; 
font-weight: 700; 
margin-bottom: 0.2rem; 
}
.orders-sub { 
font-size: 0.875rem; 
margin-bottom: 1.2rem;
}
.orders-topbar { 
display: flex; 
justify-content: space-between; 
align-items: flex-start; 
flex-wrap: wrap; 
gap: 0.75rem; 
margin-bottom: 1.2rem; 
}
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
background: #333; 
color: #fff; 
}
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
margin-bottom: -1px; }
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
.orders-table 
{ width: 100%; 
border-collapse: collapse; 
font-size: 0.875rem; 
}
.orders-table thead th 
{ font-size: 11px; 
font-weight: 600; 
color:var(--bs-body-color); 
text-transform: uppercase; 
letter-spacing: 0.5px; 
padding: 0.6rem 0.75rem; 
border-bottom: 1px solid #e9ecef; 
white-space: nowrap; }
.orders-table tbody td 
{   padding: 8px; 
border-bottom: 1px solid #f1f3f5; 
vertical-align: middle; 
color:var(--bs-body-color);
font-size: 10px; 
}
.orders-table tbody tr:last-child td { 
border-bottom: none; 
}
.avatar { 
width: 32px; 
height: 32px; 
border-radius: 50%; 
display: inline-flex; 
align-items: center; 
justify-content: center; 
font-size: 0.7rem; 
font-weight: 700; 
color: #fff; 
margin-right: 8px; 
flex-shrink: 0; 
}
.av-purple { 
background: #8b7fd4;
} 
.av-blue { 
background: #5bc4e8; 
} 
.av-green { 
background: #3dba8c; 
}
.av-orange {
background: #f0853a; 
} 
.av-pink { 
background: #d46bbf; 
} 
.av-teal { 
background: #0f9e84; 
}
.av-red { 
background: #e05c5c; 
} 
.av-indigo { 
background: #5c6bc0; 
} 
.av-cyan { background: #26a69a; 
} 
.av-amber { 
background: #f59e0b; 
}
.customer-cell { 
display: flex; 
align-items: center; 
}
.customer-name 
{ font-weight: 600; 
font-size: 10px; 
color:var(--bs-body-color); 
display: block; 
}
.customer-email { 
font-size: 0.78rem; 
color:var(--bs-body-color); }
.order-id { font-weight: 600; 
color:var(--bs-body-color);
font-family: monospace; 
font-size: 0.85rem; }
.badge-completed { 
background:var(--bs-body-bg); 
color:var(--bs-body-color); 
border-radius: 20px; 
padding: 3px 12px; 
font-size: 10px; 
font-weight: 600; 
display: inline-block; 
}
.badge-processing { 
background:var(--bs-body-bg); 
color: var(--bs-body-color); 
border-radius: 20px; 
padding: 3px 12px; 
font-size: 10px; 
font-weight: 600; 
display: inline-block; }
.badge-pending { 
background:var(--bs-body-bg); 
color:var(--bs-body-color); 
border-radius: 20px; 
padding: 3px 12px; 
font-size: 10px; 
font-weight: 600; 
display: inline-block; }
.badge-cancelled { 
background:var(--bs-body-bg); 
color:var(--bs-body-color); 
border-radius: 20px; 
padding: 3px 12px; 
font-size: 10px; 
font-weight: 600; 
display: inline-block; }
.date-text { 
color:var(--bs-body-color); 
font-size: 0.82rem; 
white-space: nowrap; }
.amount-text { 
font-weight: 700; 
color: #1a1a1a; 
white-space: nowrap; 
}
.trend-line { 
width: 60px; 
height: 28px; 
}
.btn-action { 
background: none; 
border: 1px solid #e9ecef; 
border-radius: 6px; 
padding: 3px 8px; 
color: #6c757d; 
font-size: 0.78rem; 
cursor: pointer; 
text-decoration: none; 
}
.btn-action:hover { 
background: #f8f9fa; 
color: #1a1a1a; 
}
</style>
@endpush
@section('pages')
<div class="orders-wrapper">
  <div class="orders-topbar">
        <div class="orders-info">
        <p class="orders-title">Orders</p>
        <p class="orders-sub text-muted">Manage and track all customer orders.</p>
        </div>
        <a href="#" class="btn-new-order">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <line x1="12" y1="5" x2="12" y2="19"/>
            <line x1="5" y1="12" x2="19" y2="12"/>
        </svg>
        New Order
        </a>
  </div>
  <div class="tab-bar">
        <a href="{{ route('all') }}" class="tab-btn active">All</a>
        <a href="#" class="tab-btn">Completed</a>
        <a href="#" class="tab-btn">Processing</a>
        <a href="#" class="tab-btn">Pending</a>
        <a href="#" class="tab-btn">Cancelled</a>
  </div>
  <input type="search" placeholder="search order..." class="text-muted border border-secondary-subtle p-2 mt-4 w-50">

  <div class="table-responsive">
    <table class="orders-table">
      <thead>
        <tr>
          <th>Order ↕</th><th>Customer ↕</th><th>Product ↕</th>
          <th>Status ↕</th><th>Date ↕</th><th>Trend</th><th>Amount</th><th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="order-id">ORD-7891</td>
          <td><div class="customer-cell"><div class="avatar av-purple">EW</div><div><span class="customer-name">Emma Wilson</span><span class="customer-email">emma@example.com</span></div></div></td>
          <td>Pro Dashboard License</td><td><span class="badge-completed">Completed</span></td>
          <td class="date-text">Feb 14, 2026</td>
          <td><svg class="trend-line" viewBox="0 0 60 28"><polyline points="0,20 15,14 30,16 45,8 60,10" fill="none" stroke="#3dba8c" stroke-width="2"/></svg></td>
          <td class="amount-text">$299.00</td><td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td class="order-id">ORD-7890</td>
          <td><div class="customer-cell"><div class="avatar av-blue">JC</div><div><span class="customer-name">James Chen</span><span class="customer-email">james@company.io</span></div></div></td>
          <td>Team Plan Upgrade</td><td><span class="badge-processing">Processing</span></td>
          <td class="date-text">Feb 14, 2026</td>
          <td><svg class="trend-line" viewBox="0 0 60 28"><polyline points="0,22 15,18 30,20 45,12 60,14" fill="none" stroke="#5bc4e8" stroke-width="2"/></svg></td>
          <td class="amount-text">$599.00</td><td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td class="order-id">ORD-7889</td>
          <td><div class="customer-cell"><div class="avatar av-green">SG</div><div><span class="customer-name">Sofia Garcia</span><span class="customer-email">sofia@startup.co</span></div></div></td>
          <td>Enterprise License</td><td><span class="badge-completed">Completed</span></td>
          <td class="date-text">Feb 13, 2026</td>
          <td><svg class="trend-line" viewBox="0 0 60 28"><polyline points="0,18 15,12 30,14 45,6 60,8" fill="none" stroke="#3dba8c" stroke-width="2"/></svg></td>
          <td class="amount-text">$1,499.00</td><td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td class="order-id">ORD-7888</td>
          <td><div class="customer-cell"><div class="avatar av-amber">AT</div><div><span class="customer-name">Alex Thompson</span><span class="customer-email">alex@dev.com</span></div></div></td>
          <td>Single License</td><td><span class="badge-pending">Pending</span></td>
          <td class="date-text">Feb 13, 2026</td>
          <td><svg class="trend-line" viewBox="0 0 60 28"><polyline points="0,10 15,14 30,12 45,18 60,16" fill="none" stroke="#f0853a" stroke-width="2"/></svg></td>
          <td class="amount-text">$99.00</td><td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td class="order-id">ORD-7887</td>
          <td><div class="customer-cell"><div class="avatar av-pink">MS</div><div><span class="customer-name">Maria Santos</span><span class="customer-email">maria@agency.co</span></div></div></td>
          <td>Pro Dashboard License</td><td><span class="badge-completed">Completed</span></td>
          <td class="date-text">Feb 12, 2026</td>
          <td><svg class="trend-line" viewBox="0 0 60 28"><polyline points="0,20 15,14 30,10 45,6 60,4" fill="none" stroke="#3dba8c" stroke-width="2"/></svg></td>
          <td class="amount-text">$299.00</td><td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td class="order-id">ORD-7886</td>
          <td><div class="customer-cell"><div class="avatar av-teal">DK</div><div><span class="customer-name">David Kim</span><span class="customer-email">david@tech.io</span></div></div></td>
          <td>Team Plan Upgrade</td><td><span class="badge-cancelled">Cancelled</span></td>
          <td class="date-text">Feb 12, 2026</td>
          <td><svg class="trend-line" viewBox="0 0 60 28"><polyline points="0,6 15,10 30,14 45,20 60,22" fill="none" stroke="#e05c5c" stroke-width="2"/></svg></td>
          <td class="amount-text">$599.00</td><td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td class="order-id">ORD-7885</td>
          <td><div class="customer-cell"><div class="avatar av-indigo">LP</div><div><span class="customer-name">Lisa Park</span><span class="customer-email">lisa@design.co</span></div></div></td>
          <td>Pro Dashboard License</td><td><span class="badge-completed">Completed</span></td>
          <td class="date-text">Feb 11, 2026</td>
          <td><svg class="trend-line" viewBox="0 0 60 28"><polyline points="0,22 15,16 30,12 45,8 60,6" fill="none" stroke="#3dba8c" stroke-width="2"/></svg></td>
          <td class="amount-text">$299.00</td><td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td class="order-id">ORD-7884</td>
          <td><div class="customer-cell"><div class="avatar av-red">RM</div><div><span class="customer-name">Ryan Mitchell</span><span class="customer-email">ryan@startup.io</span></div></div></td>
          <td>Enterprise License</td><td><span class="badge-completed">Completed</span></td>
          <td class="date-text">Feb 11, 2026</td>
          <td><svg class="trend-line" viewBox="0 0 60 28"><polyline points="0,18 15,14 30,10 45,6 60,4" fill="none" stroke="#3dba8c" stroke-width="2"/></svg></td>
          <td class="amount-text">$1,499.00</td><td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td class="order-id">ORD-7883</td>
          <td><div class="customer-cell"><div class="avatar av-cyan">NP</div><div><span class="customer-name">Nina Patel</span><span class="customer-email">nina@corp.com</span></div></div></td>
          <td>Single License</td><td><span class="badge-processing">Processing</span></td>
          <td class="date-text">Feb 10, 2026</td>
          <td><svg class="trend-line" viewBox="0 0 60 28"><polyline points="0,14 15,16 30,12 45,14 60,10" fill="none" stroke="#5bc4e8" stroke-width="2"/></svg></td>
          <td class="amount-text">$99.00</td><td><a href="#" class="btn-action">···</a></td>
        </tr>
        <tr>
          <td class="order-id">ORD-7882</td>
          <td><div class="customer-cell"><div class="avatar av-orange">TB</div><div><span class="customer-name">Tom Bradley</span><span class="customer-email">tom@agency.io</span></div></div></td>
          <td>Team Plan Upgrade</td><td><span class="badge-pending">Pending</span></td>
          <td class="date-text">Feb 10, 2026</td>
          <td><svg class="trend-line" viewBox="0 0 60 28"><polyline points="0,10 15,14 30,16 45,18 60,20" fill="none" stroke="#f0853a" stroke-width="2"/></svg></td>
          <td class="amount-text">$599.00</td><td><a href="#" class="btn-action">···</a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection