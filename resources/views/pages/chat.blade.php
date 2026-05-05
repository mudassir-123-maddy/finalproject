@extends('welcome')
@push('css')
<style>
.chat-title {
font-size: 1.3rem;
font-weight: 700;
margin-bottom: 0.1rem;
}
.chat-wrapper {
display: flex;
min-height: 580px;
border: 1px solid #e9ecef;
border-radius: 12px;
overflow: hidden;
}
.chat-sidebar {
width: 320px;
flex-shrink: 0;
border-right: 1px solid #e9ecef;
display: flex;
flex-direction: column;
}
.chat-search-wrap {
padding: 1rem;
border-bottom: 1px solid #e9ecef;
}
.search-input-wrap {
position: relative;
display: flex;
align-items: center;
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
.conv-list {
flex: 1;
overflow-y: auto;
}
.conv-item {
display: flex;
align-items: flex-start;
gap: 10px;
padding: 0.85rem 1rem;
border-bottom: 1px solid #f1f3f5;
cursor: pointer;
text-decoration: none;
}
.conv-item.active {
background:var(--bs-body-bg);
}
.conv-item:last-child {
border-bottom: none;
}
.conv-avatar {
width: 38px;
height: 38px;
border-radius: 50%;
background: #e9ecef;
display: flex;
align-items: center;
justify-content: center;
font-size: 11px;
font-weight: 700;
flex-shrink: 0;
position: relative;
}
.conv-avatar-group {
background: #dee2e6;
}
.av-sc {
background: #8b7fd4;
color: #fff;
}
.av-mj {
background: #3dba8c;
color: #fff;
}
.av-ar {
background: #3c96e1;
color: #fff;
}
.av-ps {
background: #d46bbf;
color: #fff;
}
.online-dot {
width: 9px;
height: 9px;
border-radius: 50%;
background: #2f9f3d;
border: 2px solid #fff;
position: absolute;
bottom: 0;
right: 0;
}
.conv-body {
flex: 1;
min-width: 0;
}
.conv-header {
display: flex;
justify-content: space-between;
align-items: center;
margin-bottom: 3px;
}
.conv-name {
font-weight: 600;
font-size: 0.875rem;
color: var(--bs-body-color);
}
.conv-date {
font-size: 11px;
}
.conv-preview {
font-size: 0.78rem;
white-space: nowrap;
overflow: hidden;
text-overflow: ellipsis;
display: flex;
align-items: center;
gap: 4px;
}
.conv-badge {
background: #7367f0;
color: #fff;
border-radius: 20px;
padding: 1px 7px;
font-size: 10px;
font-weight: 700;
flex-shrink: 0;
}
.chat-main {
flex: 1;
display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
}
.chat-empty {
text-align: center;
}
.chat-empty-icon {
width: 56px;
height: 56px;
border-radius: 50%;
border: 2px solid #dee2e6;
display: flex;
align-items: center;
justify-content: center;
margin: 0 auto 1rem;
}
.chat-empty-title {
font-size: 1rem;
font-weight: 600;
margin-bottom: 0.3rem;
}

@media (max-width: 768px) {
  .chat-wrapper {
  flex-direction: column;
  }
  .chat-sidebar {
  width: 100%;
  border-right: none;
  border-bottom: 1px solid #e9ecef;
  }
  .chat-main {
  min-height: 200px;
  padding: 2rem;
  }
}
</style>
@endpush
@section('pages')
<p class="chat-title">Chat</p>
<p class="text-muted mb-3">Messages and conversations.</p>

<div class="chat-wrapper">
  <div class="chat-sidebar">
    <div class="chat-search-wrap">
      <div class="search-input-wrap">
        <svg class="search-icon text-muted" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        <input type="search" class="search-input" placeholder="Search conversations...">
      </div>
    </div>

    <div class="conv-list">
      <a href="#" class="conv-item active">
        <div class="conv-avatar av-sc">SC<span class="online-dot"></span></div>
        <div class="conv-body">
          <div class="conv-header">
            <span class="conv-name">Sarah Chen</span>
            <span class="conv-date text-muted">Feb 22</span>
          </div>
          <div class="conv-preview text-muted">
            <span>•</span><span>Also, I updated the component li...</span>
            <span class="conv-badge">2</span>
          </div>
        </div>
      </a>

      <a href="#" class="conv-item">
        <div class="conv-avatar av-mj">MJ<span class="online-dot"></span></div>
        <div class="conv-body">
          <div class="conv-header">
            <span class="conv-name">Marcus Johnson</span>
            <span class="conv-date text-muted">Feb 22</span>
          </div>
          <div class="conv-preview text-muted">
            <span>•</span><span>Awesome. I'll start on the virtual scroll...</span>
          </div>
        </div>
      </a>

      <a href="#" class="conv-item">
        <div class="conv-avatar av-ar">AR<span class="online-dot"></span></div>
        <div class="conv-body">
          <div class="conv-header">
            <span class="conv-name">Alex Rivera</span>
            <span class="conv-date text-muted">Feb 21</span>
          </div>
          <div class="conv-preview text-muted">
            <span>•</span><span>Will do!</span>
          </div>
        </div>
      </a>

      <a href="#" class="conv-item">
        <div class="conv-avatar conv-avatar-group">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#6c757d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <div class="conv-body">
          <div class="conv-header">
            <span class="conv-name">Design Team</span>
            <span class="conv-date text-muted">Feb 20</span>
          </div>
          <div class="conv-preview text-muted">
            <span>I can handle that. Will open a PR by E...</span>
          </div>
        </div>
      </a>

      <a href="#" class="conv-item">
        <div class="conv-avatar av-ps">PS<span class="online-dot"></span></div>
        <div class="conv-body">
          <div class="conv-header">
            <span class="conv-name">Priya Sharma</span>
            <span class="conv-date text-muted">Feb 19</span>
          </div>
          <div class="conv-preview text-muted">
            <span>•</span><span>Will do. Thanks Priya!</span>
          </div>
        </div>
      </a>

      <a href="#" class="conv-item">
        <div class="conv-avatar conv-avatar-group">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#6c757d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <div class="conv-body">
          <div class="conv-header">
            <span class="conv-name">Sprint Planning</span>
            <span class="conv-date text-muted">Feb 18</span>
          </div>
          <div class="conv-preview text-muted">
            <span>Great. Let's reconvene Thursday for s...</span>
          </div>
        </div>
      </a>
    </div>
  </div>

  <div class="chat-main">
    <div class="chat-empty">
      <div class="chat-empty-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#adb5bd" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
      </div>
      <p class="chat-empty-title">Select a conversation</p>
      <p class="text-muted">Choose a conversation from the list to start messaging.</p>
    </div>
  </div>
</div>
@endsection