@extends('welcome')
@push('css')
<style>
    .text-muted{
        font-size:15px;
    }
    .fw-bold{
        font-size: 12px;
        margin-top: 10px;
    }
    .span{
        font-size: 12px;
    }
    .charts{
     border: 1px solid #dae1e8; 
    }
    .treemap-wrapper { 
        background: #fff; 
        border-radius: 16px; 
        border: 1px solid #dae1e8; 
        padding: 14px; 
    }
.treemap-title { 
    font-size: 15px; 
    font-weight: 600;
    margin-bottom: 0.2rem; 
    }
.treemap-sub { 
    font-size: 11px; 
    margin-bottom: 1.2rem; }
.treemap-grid { display: flex; gap: 8px; width: 100%; }
.col-left { display: flex; flex-direction: column; gap: 8px; width: 38%; }
.col-mid { display: flex; flex-direction: column; gap: 8px; width: 33%; }
.col-right { display: flex; flex-direction: column; gap: 8px; width: 29%; }
.tm-cell { border-radius: 10px; display: flex; flex-direction: column; align-items: center; justify-content: center; color: #fff; padding: 1rem 0.5rem; flex: 1; min-height: 80px; }
.tm-name { 
    font-size: 13px; 
    font-weight: 600; 
    margin-bottom: 4px; 
    text-align: center; 
}
.tm-val 
{ font-size: 13px; 
    font-weight: 500; 
    opacity: 0.92; 
    text-align: center; 
}
.tm-cell-xl { flex: 3; }
.tm-cell-lg { flex: 2.2; }
.tm-cell-md { flex: 2; }
.tm-cell-sm { flex: 1.5; }
.tm-cell-xs { flex: 1; }
.bg-purple { background: #8b7fd4; }
.bg-sky { background: #5bc4e8; }
.bg-teal { background: #3dba8c; }
.bg-orange { background: #f0853a; }
.bg-pink { background: #d46bbf; }
.bg-lavender { background: #9d9de8; }
.bg-ltblue { background: #5abce0; }
.bg-green { background: #3dba6e; }

@media (max-width: 768px) {
  .treemap-grid { flex-direction: column; }
  .col-left, .col-mid, .col-right { width: 100%; flex-direction: row; }
  .tm-cell { min-height: 100px; }
  .tm-name { font-size: 0.85rem; }
  .tm-val { font-size: 0.8rem; }
}

@media (max-width: 480px) {
  .col-left, .col-mid, .col-right { flex-direction: column; }
  .tm-cell { min-height: 70px; flex: unset; height: auto; padding: 0.75rem; }
  .tm-cell-xl, .tm-cell-lg, .tm-cell-md, .tm-cell-sm, .tm-cell-xs { flex: unset; }
}
</style>
@endpush
@section('pages')
<div class="chart mt-2 ps-2">
    <h1 class="fs-5 fw-semibold">Charts</h1>
    <span class="text-muted">Explore different chart types available in the dashboard.</span>
</div>
<div class="container-fluid">
    <div class="row mt-5 justify-content-evenly">
        <div class="col-lg-5 col-md-12 col-sm-12 bg-light rounded-2 charts">
            <div id="chart3"></div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-1 bg-light rounded-2 charts">
            <div id="chart4">
                <p class="fw-bold">Device Usage</p>
                <span class="span text-muted">Session distribution by device type</span>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-lg-7 col-md-12 col-sm-12">
            <div id="chart5"></div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12">

<div class="treemap-wrapper">
  <p class="treemap-title">Budget Allocation</p>
  <p class="treemap-sub">Department spending distribution</p>

  <div class="treemap-grid">
    <div class="col-left">
      <div class="tm-cell bg-purple tm-cell-xl">
        <span class="tm-name">Engineering</span>
        <span class="tm-val">$420k</span>
      </div>
      <div class="tm-cell bg-sky tm-cell-md">
        <span class="tm-name">Marketing</span>
        <span class="tm-val">$280k</span>
      </div>
    </div>
    <div class="col-mid">
      <div class="tm-cell bg-teal tm-cell-lg">
        <span class="tm-name">Sales</span>
        <span class="tm-val">$240k</span>
      </div>
      <div class="tm-cell bg-pink tm-cell-sm">
        <span class="tm-name">Design</span>
        <span class="tm-val">$150k</span>
      </div>
      <div class="tm-cell bg-lavender tm-cell-xs">
        <span class="tm-name">Support</span>
        <span class="tm-val">$120k</span>
      </div>
    </div>
    <div class="col-right">
      <div class="tm-cell bg-orange tm-cell-lg">
        <span class="tm-name">Operations</span>
        <span class="tm-val">$180k</span>
      </div>
      <div class="tm-cell bg-ltblue tm-cell-sm">
        <span class="tm-name">HR</span>
        <span class="tm-val">$95k</span>
      </div>
      <div class="tm-cell bg-green tm-cell-xs">
        <span class="tm-name">Legal</span>
        <span class="tm-val">$65k</span>
      </div>
    </div>
  </div>
</div>
 </div>
</div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div id="chart6">
      <p>Revenue & Orders Trend</p>
      <span>Combined view of revenue (area), orders (bars), and growth rate (line)</span>
      </div>
    </div>
  </div>
</div>
@endsection