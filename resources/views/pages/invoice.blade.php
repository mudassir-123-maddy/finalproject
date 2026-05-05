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
.tab-bar { 
display: flex;
justify-content: end;
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
.badge-paid { 
background: #40b776; 
color:var(--bs-body-color); 
border-radius: 20px; 
padding: 3px 12px; 
font-size: 10px; 
font-weight: 600; 
display: inline-block; 
}
.badge-pending { 
background: #ea7b3b; 
color: var(--bs-body-color); 
border-radius: 20px; 
padding: 3px 12px; 
font-size: 10px; 
font-weight: 600; 
display: inline-block; }
.badge-overdue { 
background: #df3d3d; 
color:var(--bs-body-color); 
border-radius: 20px; 
padding: 3px 12px; 
font-size: 10px; 
font-weight: 600; 
display: inline-block; }
.badge-cancelled { 
background: #fee2e2; 
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
        <p class="orders-title">Invoice</p>
        <p class="orders-sub text-muted">View and manage your invoice</p>
        </div>
    </div>
    <div class="invoices d-flex justify-content-between">
     <div class="allinvoice pt-1">All Invoices</div>
     <div class="tab-bar">
       <input type="search" placeholder="search order..." class="text-muted border border-secondary-subtle w-20 rounded-2">
        <a href="{{ route('all') }}" class="tab-btn active">All</a>
        <a href="#" class="tab-btn">Paid</a>
        <a href="#" class="tab-btn">Pending</a>
        <a href="#" class="tab-btn">Overdue</a>
     </div>
   </div>
   <div class="table-responsive">
      <table class="orders-table text-muted">
        <thead>
          <tr>
            <th>Invoice</th><th>Customer</th><th>Order</th>
            <th>Status</th><th>issued</th><th>Due</th><th>Amount</th><th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="order-id">ORD-7891</td>
            <td><div class="customer-cell"></div><div><span class="customer-name">Emma Wilson</span><span class="customer-email">emma@example.com</span></div></div></td>
            <td>ORD-7891</td><td><span class="badge-paid">Paid</span></td>
            <td class="date-text">Feb 14, 2026</td>
            <td>Mar 14, 2026</td>
            <td class="amount-text">$299.00</td><td><a href="#" class="btn-action">···</a></td>
          </tr>
          <tr>
            <td class="order-id">ORD-7890</td>
            <td><div class="customer-cell"></div><div><span class="customer-name">James Chen</span><span class="customer-email">james@company.io</span></div></div></td>
            <td>ORD-7890</td><td><span class="badge-pending">Pending</span></td>
            <td class="date-text">Feb 14, 2026</td>
            <td>Mar 19, 2026</td>
            <td class="amount-text">$599.00</td><td><a href="#" class="btn-action">···</a></td>
          </tr>
          <tr>
            <td class="order-id">ORD-7889</td>
            <td><div class="customer-cell"></div><div><span class="customer-name">Sofia Garcia</span><span class="customer-email">sofia@startup.co</span></div></div></td>
            <td>ORD-7891</td><td><span class="badge-paid">Paid</span></td>
            <td class="date-text">Feb 13, 2026</td>
            <td>Mar 14, 2026</td>
            <td class="amount-text">$1,499.00</td><td><a href="#" class="btn-action">···</a></td>
          </tr>
          <tr>
            <td class="order-id">ORD-7888</td>
            <td><div class="customer-cell"></div><div><span class="customer-name">Alex Thompson</span><span class="customer-email">alex@dev.com</span></div></div></td>
            <td>ORD-7878</td><td><span class="badge-paid">Paid</span></td>
            <td class="date-text">Feb 13, 2026</td>
            <td>Mar 14, 2026</td>
            <td class="amount-text">$99.00</td><td><a href="#" class="btn-action">···</a></td>
          </tr>
          <tr>
            <td class="order-id">ORD-7887</td>
            <td><div class="customer-cell"></div><div><span class="customer-name">Maria Santos</span><span class="customer-email">maria@agency.co</span></div></div></td>
            <td>ORD-767</td><td><span class="badge-paid">Paid</span></td>
            <td class="date-text">Feb 12, 2026</td>
            <td>Mar 14, 2026</td>
            <td class="amount-text">$299.00</td><td><a href="#" class="btn-action">···</a></td>
          </tr>
          <tr>
            <td class="order-id">ORD-7886</td>
            <td><div class="customer-cell"></div><div><span class="customer-name">David Kim</span><span class="customer-email">david@tech.io</span></div></div></td>
            <td>ORD-7891</td><td><span class="badge-pending">Pending</span></td>
            <td class="date-text">Feb 12, 2026</td>
            <td>Mar 14, 2026</td>
            <td class="amount-text">$599.00</td><td><a href="#" class="btn-action">···</a></td>
          </tr>
          <tr>
            <td class="order-id">ORD-7885</td>
            <td><div class="customer-cell"></div><div><span class="customer-name">Lisa Park</span><span class="customer-email">lisa@design.co</span></div></div></td>
            <td>ORD-7866</td><td><span class="badge-overdue">Overdue</span></td>
            <td class="date-text">Feb 11, 2026</td>
            <td>Mar 5, 2026</td>
            <td class="amount-text">$299.00</td><td><a href="#" class="btn-action">···</a></td>
          </tr>
          <tr>
            <td class="order-id">ORD-7884</td>
            <td><div class="customer-cell"></div><div><span class="customer-name">Ryan Mitchell</span><span class="customer-email">ryan@startup.io</span></div></div></td>
            <td>ORD-78917</td><td><span class="badge-overdue">Overdue</span></td>
            <td class="date-text">Feb 11, 2026</td>
            <td>Mar 30, 2026</td>
            <td class="amount-text">$1,499.00</td><td><a href="#" class="btn-action">···</a></td>
          </tr>
          <tr>
            <td class="order-id">ORD-7883</td>
            <td><div class="customer-cell"></div><div><span class="customer-name">Nina Patel</span><span class="customer-email">nina@corp.com</span></div></div></td>
            <td>ORD-7898</td><td><span class="badge-paid">Paid</span></td>
            <td class="date-text">Feb 10, 2026</td>
            <td>Mar 23, 2026</td>
            <td class="amount-text">$99.00</td><td><a href="#" class="btn-action">···</a></td>
          </tr>
          <tr>
            <td class="order-id">ORD-7882</td>
            <td><div class="customer-cell"></div><div><span class="customer-name">Tom Bradley</span><span class="customer-email">tom@agency.io</span></div></div></td>
            <td>ORD-7891</td><td><span class="badge-paid">Paid</span></td>
            <td class="date-text">Feb 10, 2026</td>
            <td>Mar 14, 2026</td>
            <td class="amount-text">$599.00</td><td><a href="#" class="btn-action">···</a></td>
          </tr>
        </tbody>
      </table>
   </div>
 </div>
</div>
@endsection