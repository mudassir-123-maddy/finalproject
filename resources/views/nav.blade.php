<!-- 
<style>
body{ 
background-color:var(--bs-body-bg); 
color: var(--bs-body-color);; 
font-family: sans-serif; 
}
.navbar{
  position: sticky;
  z-index:999;
}
.form-control:focus {
box-shadow: none;
border-color: #007bff;
}
.darkmode{
background-color:transparent;
color: var(--bs-body-color);
}
.input-group{
width: 280px; 
border-radius: 15px;
}
.sidebar-toggle-btn {
display: none;
align-items: center;
justify-content: center;
width: 36px;
height: 36px;
border-radius: 8px;
border: 0.5px solid #d4d4d0;
background: transparent;
cursor: pointer;
text-decoration: none;
color: #666;
font-size: 16px;
}
.btn-gradient {
background: linear-gradient(to right, #7367f0, #3c96e1);
color: white; 
padding: 6px 10px; 
}
.sidebar-overlay {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background: rgba(0, 0, 0, 0.3);
  z-index: 998;
}
.sidebar-overlay.open {
  display: block;
}
.app-sidebar {
  transition: transform 0.25s ease;
}

@media (max-width: 768px) {
  .sidebar-toggle-btn {
    display: inline-flex;
  }
  .app-sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    z-index: 999;
    background: #fff;
    box-shadow: 2px 0 12px rgba(0, 0, 0, 0.1);
    transform: translateX(-100%);
  }
  .app-sidebar.open {
    transform: translateX(0);
  }
}
</style>
<nav class="navbar navbar-expand-lg bg-body border-bottom p-3">
    <div class="container-fluid">
        <div class="input-group border ml-2">
          <span class="input-group-text bg-transparent border-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search absolute ltr:left-3 rtl:right-3 top-1/2 h-4 w-4 -translate-y-1/2 text-muted-foreground/60" aria-hidden="true"><path d="m21 21-4.34-4.34"></path><circle cx="11" cy="11" r="8"></circle></svg></i></span>
          <input type="text" class="form-control border-0" placeholder="Search anything...">
          <span class="input-group-text text-muted  bg-transparent border-0">⌘K</span>
        </div>

        <div class="ms-auto d-flex align-items-center gap-3">
            <button class="btn btn-gradient btn-sm border-0 border-0 rounded-pill">+ New Order</button>

            <button class="darkmode border-0">
                <span class="me-0 text-muted">
                <svg xmlns="http://www.w3 .org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-moon h-4 w-4" aria-hidden="true"><path d="M20.985 12.486a9 9 0 1 1-9.473-9.472c.405-.022.617.46.402.803a6 6 0 0 0 8.268 8.268c.344-.215.825-.004.803.401"></path></svg>
                <a href="" class="bi bi-palette text-muted"></a>
            </span>
            </button>
                <span class="me-0 text-muted">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-palette h-4 w-4" aria-hidden="true"><path d="M12 22a1 1 0 0 1 0-20 10 9 0 0 1 10 9 5 5 0 0 1-5 5h-2.25a1.75 1.75 0 0 0-1.4 2.8l.3.4a1.75 1.75 0 0 1-1.4 2.8z"></path><circle cx="13.5" cy="6.5" r=".5" fill="currentColor"></circle><circle cx="17.5" cy="10.5" r=".5" fill="currentColor"></circle><circle cx="6.5" cy="12.5" r=".5" fill="currentColor"></circle><circle cx="8.5" cy="7.5" r=".5" fill="currentColor"></circle></svg>
            </span>
            <div class="position-relative">
            <span class="me-0 text-muted">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell h-4 w-4" aria-hidden="true"><path d="M10.268 21a2 2 0 0 0 3.464 0"></path><path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326"></path></svg>
            </span>
                
                <span class="position-absolute top-10 start-100 translate-middle p-1 bg-danger border border-light rounded-circle"></span>
            </div>
            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 35px; height: 35px; font-size: 12px;">M</div>
        </div>
    </div>
</nav>   -->

<style>
.navbar {
  position: sticky;
  top: 0;
  z-index: 999;
}
.darkmode {
  background-color: transparent;
  color: var(--bs-body-color);
  border: none;
}
.btn-gradient {
  background: linear-gradient(to right, #7367f0, #3c96e1);
  color: #fff;
}
.btn-gradient:hover {
  opacity: 0.9;
  color: #fff;
}
.sidebar-toggle-btn {
  display: none;
  width: 36px;
  height: 36px;
  border-radius: 8px;
  border: 0.5px solid #d4d4d0;
  background: transparent;
  cursor: pointer;
  text-decoration: none;
  color: #666;
  font-size: 16px;
}
.sidebar-overlay {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background: rgba(0, 0, 0, 0.3);
  z-index: 998;
}
.sidebar-overlay.open {
  display: block;
}
.app-sidebar {
  transition: transform 0.25s ease;
}

@media (max-width: 768px) {
  .sidebar-toggle-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
  }
  .app-sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    z-index: 999;
    background: #fff;
    box-shadow: 2px 0 12px rgba(0, 0, 0, 0.1);
    transform: translateX(-100%);
  }
  .app-sidebar.open {
    transform: translateX(0);
  }
}
</style>

<div class="sidebar-overlay" id="sidebarOverlay"></div>

<nav class="navbar bg-body border-bottom px-3 py-2">
  <div class="container-fluid gap-3">

    <!-- Toggle btn mobile -->
    <a href="#" class="sidebar-toggle-btn" id="sidebarToggle">&#9776;</a>

    <!-- Search -->
    <div class="input-group" style="width:280px;">
      <span class="input-group-text bg-transparent border-end-0">
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m21 21-4.34-4.34"></path><circle cx="11" cy="11" r="8"></circle></svg>
      </span>
      <input type="text" class="form-control border-start-0 border-end-0" placeholder="Search anything...">
      <span class="input-group-text bg-transparent border-start-0 text-muted">⌘K</span>
    </div>

    <!-- Right side -->
    <div class="ms-auto d-flex align-items-center gap-3">

      <!-- New Order -->
      <a href="#" class="btn btn-gradient btn-sm rounded-pill text-decoration-none">+ New Order</a>

      <!-- Dark mode -->
      <a href="#" class="darkmode text-muted">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.985 12.486a9 9 0 1 1-9.473-9.472c.405-.022.617.46.402.803a6 6 0 0 0 8.268 8.268c.344-.215.825-.004.803.401"></path></svg>
      </a>

      <!-- Palette -->
      <a href="#" class="text-muted">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22a1 1 0 0 1 0-20 10 9 0 0 1 10 9 5 5 0 0 1-5 5h-2.25a1.75 1.75 0 0 0-1.4 2.8l.3.4a1.75 1.75 0 0 1-1.4 2.8z"></path><circle cx="13.5" cy="6.5" r=".5" fill="currentColor"></circle><circle cx="17.5" cy="10.5" r=".5" fill="currentColor"></circle><circle cx="6.5" cy="12.5" r=".5" fill="currentColor"></circle><circle cx="8.5" cy="7.5" r=".5" fill="currentColor"></circle></svg>
      </a>

      <!-- Bell -->
      <div class="position-relative">
        <a href="#" class="text-muted">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10.268 21a2 2 0 0 0 3.464 0"></path><path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326"></path></svg>
        </a>
        <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle"></span>
      </div>

      <!-- Avatar -->
      <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center fw-semibold" style="width:35px; height:35px; font-size:12px;">M</div>

    </div>
  </div>
</nav>

<script>
  const toggle = document.getElementById('sidebarToggle');
  const overlay = document.getElementById('sidebarOverlay');
  const sidebar = document.getElementById('appSidebar');

  toggle.addEventListener('click', function(e) {
    e.preventDefault();
    sidebar.classList.toggle('open');
    overlay.classList.toggle('open');
  });

  overlay.addEventListener('click', function() {
    sidebar.classList.remove('open');
    overlay.classList.remove('open');
  });
</script>