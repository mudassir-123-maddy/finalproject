@extends('welcome')
@push('css')
<style>
.fm-title {
font-size: 1.3rem;
font-weight: 700;
margin-bottom: 0.1rem;
}
.fm-wrapper {
display: flex;
min-height: 620px;
gap: 0;
}
.fm-sidebar {
width: 200px;
flex-shrink: 0;
padding-right: 1rem;
display: flex;
flex-direction: column;
justify-content: space-between;
}
.fm-nav-item {
display: flex;
align-items: center;
gap: 10px;
padding: 0.5rem 0.75rem;
border-radius: 8px;
font-size: 0.875rem;
text-decoration: none;
margin-bottom: 2px;
}
.fm-nav-item:hover {
background: #f1f3f5;
}
.fm-nav-item.active {
background: #eeecfe;
font-weight: 600;
color: #7367f0;
}
.fm-nav-item.active svg {
stroke: #7367f0;
}
.fm-storage {
border-top: 1px solid #e9ecef;
padding-top: 1rem;
}
.fm-storage-label {
font-size: 0.82rem;
font-weight: 600;
margin-bottom: 0.4rem;
}
.fm-storage-bar {
height: 5px;
background: #e9ecef;
border-radius: 10px;
margin-bottom: 0.4rem;
}
.fm-storage-fill {
height: 5px;
background: linear-gradient(to right, #7367f0, #3c96e1);
border-radius: 10px;
width: 12%;
}
.fm-main {
flex: 1;
border-left: 1px solid #e9ecef;
padding-left: 1.5rem;
}
.fm-topbar {
display: flex;
align-items: center;
gap: 10px;
margin-bottom: 1rem;
padding-bottom: 1rem;
border-bottom: 1px solid #e9ecef;
flex-wrap: wrap;
}
.search-input-wrap {
position: relative;
display: flex;
align-items: center;
flex: 1;
min-width: 180px;
}
.search-icon {
position: absolute;
left: 10px;
}
.search-input {
border: 1px solid #dee2e6;
border-radius: 8px;
padding: 7px 12px 7px 32px;
font-size: 0.82rem;
width: 100%;
outline: none;
background: #fff;
}
.search-input:focus {
border-color: #7367f0;
}
.fm-view-btns {
display: flex;
gap: 4px;
}
.fm-view-btn {
background: none;
border: 1px solid #dee2e6;
border-radius: 6px;
padding: 5px 8px;
cursor: pointer;
text-decoration: none;
display: inline-flex;
align-items: center;
}
.fm-view-btn.active {
background: #eeecfe;
border-color: #7367f0;
}
.btn-new-folder {
display: inline-flex;
align-items: center;
gap: 5px;
background: none;
border: 1px solid #dee2e6;
border-radius: 8px;
padding: 6px 12px;
font-size: 0.82rem;
text-decoration: none;
white-space: nowrap;
}
.btn-upload {
display: inline-flex;
align-items: center;
gap: 6px;
background: linear-gradient(to right, #7367f0, #3c96e1);
color: #fff;
border: none;
border-radius: 8px;
padding: 7px 16px;
font-size: 0.82rem;
font-weight: 600;
text-decoration: none;
white-space: nowrap;
}
.btn-upload:hover {
opacity: 0.9;
color: #fff;
}
.fm-section-label {
display: flex;
align-items: center;
gap: 6px;
font-size: 0.82rem;
font-weight: 600;
margin-bottom: 1rem;
}
.fm-grid {
display: grid;
grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
gap: 16px;
}
.fm-item {
position: relative;
display: flex;
flex-direction: column;
align-items: center;
padding: 1rem 0.5rem 0.75rem;
border-radius: 12px;
border: 1px solid #e9ecef;
background: #fff;
cursor: pointer;
text-decoration: none;
}
.fm-item:hover {
background: #f8f9fa;
border-color: #dee2e6;
}
.fm-star {
position: absolute;
top: 8px;
left: 10px;
color: #f59e0b;
font-size: 13px;
}
.fm-share {
position: absolute;
bottom: 30px;
right: 8px;
}
.fm-share-badge {
background: #e9ecef;
border-radius: 20px;
padding: 1px 6px;
font-size: 10px;
color: #6c757d;
display: flex;
align-items: center;
gap: 3px;
}
.fm-icon {
margin-bottom: 0.6rem;
}
.fm-name {
font-size: 12px;
font-weight: 600;
text-align: center;
color: var(--bs-body-color);
margin-bottom: 2px;
word-break: break-word;
}
.fm-meta {
font-size: 11px;
text-align: center;
}

@media (max-width: 768px) {
.fm-wrapper {
flex-direction: column;
}
.fm-sidebar {
width: 100%;
padding-right: 0;
flex-direction: row;
flex-wrap: wrap;
gap: 4px;
border-bottom: 1px solid #e9ecef;
padding-bottom: 1rem;
margin-bottom: 1rem;
}
.fm-storage {
border-top: none;
padding-top: 0;
width: 100%;
}
.fm-main {
border-left: none;
padding-left: 0;
}
.fm-grid {
grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
}
}
</style>
@endpush
@section('pages')
<p class="fm-title">File Manager</p>
<p class="text-muted mb-3">Manage your files and folders</p>
<div class="fm-wrapper">
  <div class="fm-sidebar">
    <div>
      <a href="#" class="fm-nav-item active">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/></svg>
        All Files
      </a>
      <a href="#" class="fm-nav-item text-muted">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        Recent
      </a>
      <a href="#" class="fm-nav-item text-muted">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        Starred
      </a>
      <a href="#" class="fm-nav-item text-muted">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        Shared
      </a>
    </div>
    <div class="fm-storage">
      <p class="fm-storage-label">Storage</p>
      <div class="fm-storage-bar"><div class="fm-storage-fill"></div></div>
      <p class="text-muted mb-0" style="font-size:11px">124.1 MB of 10 GB used</p>
    </div>
  </div>

  <div class="fm-main">
    <div class="fm-topbar">
      <div class="search-input-wrap">
        <svg class="search-icon text-muted" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        <input type="search" class="search-input" placeholder="Search files...">
      </div>
      <div class="fm-view-btns">
        <a href="#" class="fm-view-btn active">
        <a href="#" class="fm-view-btn"></a>
        <a href="#" class="fm-view-btn"></a>
      </div>
      <a href="#" class="btn-new-folder text-muted">+ New Folder</a>
      <a href="#" class="btn-upload"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-upload me-2 h-4 w-4" aria-hidden="true"><path d="M12 3v12"></path><path d="m17 8-5-5-5 5"></path><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path></svg> Upload</a>
    </div>
    <div class="fm-grid">
    </div>
  </div>
</div>
@endsection