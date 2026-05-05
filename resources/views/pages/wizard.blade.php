@extends('welcome')
@push('css')
<style>
.wizard-title{
font-size: 1.3rem; 
font-weight: 700; 
margin-bottom: 0.1rem; 
}
.wizard-card{ 
border: 1px solid #e9ecef; 
border-radius: 12px; 
padding: 1.5rem;
background-color: var(--bs-body-bg); 
margin-bottom: 1rem; 
}
.steps-wrapper{ 
display: flex; 
align-items: flex-start; 
justify-content: center; 
gap: 0; 
position: relative; 
}
.step-item{ 
display: flex; 
flex-direction:column; 
align-items: center; 
flex: 1; 
position: relative; 
text-decoration: none; 
}
.step-line{ 
position: absolute; 
top: 18px; 
left: 50%; 
width: 100%; 
height: 1px; 
background: #e9ecef; 
z-index: 0; 
}
.step-item:last-child .step-line {
display: none; 
}
.step-circle{ 
width: 36px; 
height: 36px; 
border-radius: 50%; 
border: 2px solid #e9ecef; 
display: flex; 
align-items: center; 
justify-content: center; 
font-size: 13px; 
font-weight: 700; 
background: #fff; 
position: relative; 
z-index: 1; 
color: #6c757d; 
}
.step-item.active .step-circle { 
background: linear-gradient(to right, #7367f0, #3c96e1);
border-color: transparent; 
color: #fff; }
.step-label { 
font-size: 11px; 
margin-top: 6px;
text-align: center; 
font-weight: 500; 
}
.step-item.active .step-label { 
color: #7367f0; 
font-weight: 700; 
}
.form-card { 
border: 1px solid #e9ecef; 
border-radius: 12px; 
padding: 1.5rem; 
background-color: var(--bs-body-bg);
}
.form-card-title { 
font-size: 1rem; 
font-weight: 700; 
margin-bottom: 0.2rem; 
}
.form-label-custom{ 
font-size: 0.82rem; 
font-weight: 600; 
margin-bottom: 0.3rem; 
display: block; 
}
.form-input { 
width: 100%; 
border: 1px solid #dee2e6; 
border-radius: 8px; 
padding: 8px 12px; 
font-size: 0.875rem; 
outline: none;
background: #fff; 
color: var(--bs-body-color); 
}
.form-input:focus { 
border-color: #7367f0; 
}
.form-textarea { 
width: 100%; 
border: 1px solid #dee2e6; 
border-radius: 8px; 
padding: 8px 12px; 
font-size: 0.875rem; 
outline: none; 
background: #fff; 
resize: vertical; 
min-height: 110px; 
color: var(--bs-body-color); 
}
.form-textarea:focus { 
border-color: #7367f0; 
}
.form-select-custom { 
width: 100%; 
border: 1px solid #dee2e6; 
border-radius: 8px; 
padding: 8px 12px; 
font-size: 0.875rem; 
outline: none; 
background: #fff; 
color: #6c757d; 
}
.form-select-custom:focus { 
    border-color: #7367f0; 
}
.form-group { 
margin-bottom: 1rem; 
}
.wizard-footer { 
display: flex; 
justify-content: flex-end; 
margin-top: 1.2rem; 
}
.btn-next { 
display: inline-flex; 
align-items: center; 
gap: 6px; 
background: linear-gradient(to right, #7367f0, #3c96e1); 
color: #fff; 
border: none; 
border-radius: 8px; 
padding: 0.5rem 1.4rem; 
font-size: 0.875rem; 
font-weight: 600; 
text-decoration: none; 
}
.btn-next:hover { 
opacity: 0.9; color: #fff; 
}
</style>
@endpush
@section('pages')
<p class="wizard-title">Project Setup Wizard</p>
<p class="text-muted mb-3">Create a new project in just a few steps</p>
<div class="wizard-card">
  <div class="steps-wrapper">
    <a href="#" class="step-item active">
      <div class="step-line"></div>
      <div class="step-circle">1</div>
      <span class="step-label">Project Details</span>
    </a>
    <a href="#" class="step-item">
      <div class="step-line"></div>
      <div class="step-circle">2</div>
      <span class="step-label text-muted">Team Setup</span>
    </a>
    <a href="#" class="step-item">
      <div class="step-line"></div>
      <div class="step-circle">3</div>
      <span class="step-label text-muted">Preferences</span>
    </a>
    <a href="#" class="step-item">
      <div class="step-line"></div>
      <div class="step-circle">4</div>
      <span class="step-label text-muted">Review</span>
    </a>
  </div>
</div>
<div class="form-card">
  <p class="form-card-title">Project Details</p>
  <p class="text-muted mb-3">Tell us about your project</p>

  <div class="form-group">
    <label class="form-label-custom">Project Name</label>
    <input type="text" class="form-input" placeholder="My Awesome Project">
  </div>
  <div class="form-group">
    <label class="form-label-custom">Project Description</label>
    <textarea class="form-textarea" placeholder="Describe what this project is about..."></textarea>
  </div>
  <div class="form-group">
    <label class="form-label-custom">Category</label>
    <select class="form-select-custom">
      <option value="" disabled selected>Select a category</option>
      <option>Design</option>
      <option>Development</option>
      <option>Marketing</option>
      <option>Research</option>
      <option>Operations</option>
    </select>
  </div>

  <div class="wizard-footer">
    <a href="#" class="btn-next">
      Next →
    </a>
  </div>
</div>
@endsection