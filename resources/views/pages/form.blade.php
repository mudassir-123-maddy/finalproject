@extends('welcome')
@push('css')
<style>
.fc-title {
font-size: 21px;
font-weight: 700;
margin-bottom: 2px;
}
.fc-section {
border: 1px solid #e9ecef;
border-radius: 12px;
padding: 24px;
background-color: var(--bs-body-bg);
margin-bottom: 19px;
}
.fc-section-title {
font-size: 15px;
font-weight: 700;
margin-bottom: 2px;
}
.fc-section-sub {
font-size: 12px;
margin-bottom: 19px;
}
.fc-row {
display: grid;
grid-template-columns: 1fr 1fr;
gap: 24px;
}
.fc-group {
display: flex;
flex-direction: column;
}
.fc-label {
font-size: 13px;
font-weight: 600;
margin-bottom: 5px;
}
.fc-hint {
font-size: 12px;
margin-top: 5px;
}
.fc-input {
width: 100%;
border: 1px solid #dee2e6;
border-radius: 8px;
padding: 8px 12px;
font-size: 14px;
outline: none;
background: #fff;
color: var(--bs-body-color);
}
.fc-input:focus {
border-color: #7367f0;
}
.fc-select {
width: 100%;
border: 1px solid #dee2e6;
border-radius: 8px;
padding: 8px 12px;
font-size: 14px;
outline: none;
background: #fff;
color: #6c757d;
}
.fc-select:focus {
border-color: #7367f0;
}
.fc-date-wrap {
display: flex;
align-items: center;
gap: 8px;
border: 1px solid #dee2e6;
border-radius: 8px;
padding: 7px 12px;
background: #fff;
}
.fc-date-input {
border: none;
outline: none;
font-size: 14px;
width: 100%;
background: transparent;
color: #6c757d;
}
.phone-wrap {
display: flex;
align-items: center;
border: 1px solid #dee2e6;
border-radius: 8px;
overflow: hidden;
background: #fff;
}
.phone-flag {
display: flex;
align-items: center;
gap: 5px;
padding: 8px 10px;
border-right: 1px solid #dee2e6;
font-size: 13px;
cursor: pointer;
background: #f8f9fa;
text-decoration: none;
white-space: nowrap;
}
.phone-flag:hover {
background: #f1f3f5;
}
.phone-input {
border: none;
outline: none;
padding: 8px 12px;
font-size: 14px;
width: 100%;
}
.color-wrap {
display: flex;
align-items: center;
gap: 10px;
border: 1px solid #dee2e6;
border-radius: 8px;
padding: 7px 12px;
background: #fff;
}
.color-swatch {
width: 20px;
height: 20px;
border-radius: 50%;
background: #3b82f6;
flex-shrink: 0;
cursor: pointer;
border: 2px solid #fff;
box-shadow: 0 0 0 1px #dee2e6;
}
.color-hex-input {
border: none;
outline: none;
font-size: 14px;
width: 100%;
background: transparent;
}
.otp-wrap {
display: flex;
align-items: center;
gap: 8px;
}
.otp-group {
display: flex;
gap: 4px;
}
.otp-input {
width: 36px;
height: 40px;
border: 1px solid #dee2e6;
border-radius: 8px;
text-align: center;
font-size: 14px;
font-weight: 600;
outline: none;
}
.otp-input:focus {
border-color: #7367f0;
}
.otp-sep {
font-size: 19px;
color: #adb5bd;
}
.tags-wrap {
display: flex;
flex-wrap: wrap;
align-items: center;
gap: 5px;
border: 1px solid #dee2e6;
border-radius: 8px;
padding: 6px 10px;
min-height: 40px;
background: #fff;
}
.tag-badge {
display: inline-flex;
align-items: center;
gap: 4px;
background: #ede9fe;
color: #5b21b6;
border-radius: 20px;
padding: 2px 10px;
font-size: 11px;
font-weight: 600;
}
.tag-remove {
background: none;
border: none;
cursor: pointer;
padding: 0;
color: #7367f0;
font-size: 12px;
text-decoration: none;
}
.tags-input {
border: none;
outline: none;
font-size: 14px;
min-width: 80px;
background: transparent;
}
.upload-zone {
display: block;
border: 2px dashed #dee2e6;
border-radius: 10px;
padding: 40px 16px;
text-align: center;
cursor: pointer;
background-color: var(--bs-body-bg);
text-decoration: none;
}
.upload-zone:hover {
border-color: #7367f0;
background: #f5f3ff;
}
.upload-icon {
margin: 0 auto 12px;
display: flex;
justify-content: center;
}
.upload-title {
font-size: 14px;
font-weight: 500;
margin-bottom: 3px;
color: var(--bs-body-color);
}
.upload-sub {
font-size: 12px;
}
.upload-hint {
font-size: 12px;
margin-top: 12px;
}
.fc-footer {
display: flex;
align-items: center;
gap: 10px;
margin-top: 8px;
}
.btn-submit {
display: inline-flex;
align-items: center;
gap: 6px;
background: linear-gradient(to right, #7367f0, #3c96e1);
color: #fff;
border: none;
border-radius: 8px;
padding: 8px 22px;
font-size: 14px;
font-weight: 600;
text-decoration: none;
}
.btn-submit:hover {
opacity: 0.9;
color: #fff;
}
.btn-reset {
display: inline-flex;
align-items: center;
gap: 6px;
background: none;
border: 1px solid #dee2e6;
border-radius: 8px;
padding: 8px 19px;
font-size: 14px;
font-weight: 500;
text-decoration: none;
}
.btn-reset:hover {
background: #f8f9fa;
}

@media (max-width: 768px) {
  .fc-row {
  grid-template-columns: 1fr;
  }
}
</style>
@endpush
@section('pages')
<p class="fc-title">Form Components</p>
<p class="text-muted mb-3">Advanced form elements showcase with validation</p>
<div class="fc-section">
  <p class="fc-section-title">Date Selection</p>
  <p class="fc-section-sub text-muted">Calendar-based date picker with popover trigger</p>
  <div class="fc-row">
    <div class="fc-group">
      <label class="fc-label">Date</label>
      <div class="fc-date-wrap">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#6c757d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
        <input type="date" class="fc-date-input">
      </div>
      <span class="fc-hint text-muted">Single date selection with calendar UI</span>
    </div>
    <div class="fc-group">
      <label class="fc-label">Your Name</label>
      <input type="text" class="fc-input" placeholder="John Doe">
      <span class="fc-hint text-muted">Standard text input for comparison</span>
    </div>
  </div>
</div>
<div class="fc-section">
  <p class="fc-section-title">Selection Components</p>
  <p class="fc-section-sub text-muted">Searchable dropdowns for single and multiple selection</p>
  <div class="fc-row">
    <div class="fc-group">
      <label class="fc-label">Framework</label>
      <select class="fc-select">
        <option value="" disabled selected>Select framework...</option>
        <option>React</option><option>Vue</option><option>Angular</option><option>Svelte</option>
      </select>
      <span class="fc-hint text-muted">Searchable single-select combobox</span>
    </div>
    <div class="fc-group">
      <label class="fc-label">Tags</label>
      <div class="tags-wrap">
        <span class="tag-badge">design <a href="#" class="tag-remove">×</a></span>
        <span class="tag-badge">frontend <a href="#" class="tag-remove">×</a></span>
        <input type="text" class="tags-input" placeholder="Select tags...">
      </div>
      <span class="fc-hint text-muted">Badge-based multi-select with search</span>
    </div>
  </div>
</div>
<div class="fc-section">
  <p class="fc-section-title">Specialized Inputs</p>
  <p class="fc-section-sub text-muted">Purpose-built input components for specific data types</p>
  <div class="fc-row">
    <div class="fc-group">
      <label class="fc-label">Phone Number</label>
      <div class="phone-wrap">
        <a href="#" class="phone-flag text-muted">🇺🇸 +1 ▾</a>
        <input type="tel" class="phone-input" placeholder="(555) 123-4567">
      </div>
      <span class="fc-hint text-muted">Formatted input with country selector</span>
    </div>
    <div class="fc-group">
      <label class="fc-label">Brand Color</label>
      <div class="color-wrap">
        <div class="color-swatch"></div>
        <input type="text" class="color-hex-input" value="#3B82F6">
      </div>
      <span class="fc-hint text-muted">Color picker with presets and hex input</span>
    </div>
  </div>
  <div class="fc-group mt-3">
    <label class="fc-label">Verification Code</label>
    <div class="otp-wrap">
      <div class="otp-group">
        <input type="text" class="otp-input" maxlength="1" placeholder="—">
        <input type="text" class="otp-input" maxlength="1" placeholder="—">
        <input type="text" class="otp-input" maxlength="1" placeholder="—">
      </div>
      <span class="otp-sep">—</span>
      <div class="otp-group">
        <input type="text" class="otp-input" maxlength="1" placeholder="—">
        <input type="text" class="otp-input" maxlength="1" placeholder="—">
        <input type="text" class="otp-input" maxlength="1" placeholder="—">
      </div>
    </div>
    <span class="fc-hint text-muted">6-digit OTP input with grouped slots</span>
  </div>
</div>
<div class="fc-section">
  <p class="fc-section-title">File Upload</p>
  <p class="fc-section-sub text-muted">Drag-and-drop file upload zone with file list</p>
  <a href="#" class="upload-zone">
    <div class="upload-icon">
      <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#adb5bd" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 16 12 12 8 16"/><line x1="12" y1="12" x2="12" y2="21"/><path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"/></svg>
    </div>
    <p class="upload-title">Drag & drop files here, or click to browse</p>
    <p class="upload-sub text-muted">Max 5MB · Up to 5 files</p>
  </a>
  <p class="upload-hint text-muted">Images & PDFs, max 5MB each, up to 5 files</p>
</div>
<div class="fc-footer">
  <a href="#" class="btn-submit">Submit Form</a>
  <a href="#" class="btn-reset text-muted">Reset</a>
</div>
@endsection