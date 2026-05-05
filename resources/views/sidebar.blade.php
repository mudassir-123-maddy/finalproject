<!-- <style>
body{
background: var(--bs-body-bg);
color: var(--bs-body-color);
}
.dashbord{
font-size: 12px;
}
.sidebar {
height: 100vh;
width: 250px;
background: var(--bs-body-bg);            
border-right: 1px solid var(--bs-border-color);
padding: 20px;
overflow-y: auto;
position: fixed;
top: 0%;
z-index: 1000;
}
.main-content-wrapper{
margin-left:260px;
width: calc(100%-260px);
}
.overview{
font-size: 11px;
}
.nav-link {
color:var(--bs-body-color);
padding: 10px 15px;
border-radius: 8px;
margin-bottom: 5px;
display: flex;
align-items: center;
}
.nav-link.active {
background-color: var(--bs-primary-bg-subtle);
color: var(--bs-primary);
font-weight: 600;
}
[data-bs-theme="dark"] .nav-link.active {
background-color:var(--bs-secondary-bg);
color:var(--bs-white);
}
.nav-link i { 
margin-right: 12px; 
font-size: 1.1rem; 
}
.main-content { 
margin-left: 0; 
}
.sub-menu{
list-style: none;
}
.sub-menu li a{
text-decoration: none;
}
.logo{
width: 35px;
height: 38px;
background: linear-gradient(to right, #5046c3, #3c96e1);
}
</style>
<div class="main">
    <div class="sidebar d-flex flex-column">
        <div class="d-flex align-items-center mb-4 ps-2">
            <div class="bg-primary rounded-circle p-2 me-2 logo">
                <span class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles h-4 w-4 text-white" aria-hidden="true"><path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"></path><path d="M20 2v4"></path><path d="M22 4h-4"></path><circle cx="4" cy="20" r="2"></circle></svg>
                </span>
        </div>
        <div>
                <h6 class="mb-0 fw-bold">Flux</h6>
                <small class="text-muted dashbord">DASHBOARD</small>
        </div>
        </div>
        <span class="text-uppercase text-muted fw-bold mb-2 overview d-flex justify-content-between">Overview
            <button class="dropdown border-0 bg-transparent p-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right size-3 transition-transform duration-200 rotate-90" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg>
            </button>
        </span>
        <nav class="nav flex-column">
            <div class="togle">
                <a class="nav-link {{$page =='Dashbord'?'active':''}}" href="{{ route('dashbord')}}">
                    <span class="me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-dashboard h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-primary" aria-hidden="true"><rect width="7" height="9" x="3" y="3" rx="1"></rect><rect width="7" height="5" x="14" y="3" rx="1"></rect><rect width="7" height="9" x="14" y="12" rx="1"></rect><rect width="7" height="5" x="3" y="16" rx="1"></rect></svg>
                    </span>
                </i>Dashboard</a>
            

            <a class="nav-link  {{$page =='Analytics'?'active':''}}" href="{{route('analysis')}}">
                <span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-column h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><path d="M3 3v16a2 2 0 0 0 2 2h16"></path><path d="M18 17V9"></path><path d="M13 17V5"></path><path d="M8 17v-3"></path></svg>
                </span> Analytics</a>
            <a class="nav-link {{$page=='Ecomerce'?'active':''}}" href="{{route('ecomerce')}}">
                <span class="me-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-store h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><path d="M15 21v-5a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v5"></path><path d="M17.774 10.31a1.12 1.12 0 0 0-1.549 0 2.5 2.5 0 0 1-3.451 0 1.12 1.12 0 0 0-1.548 0 2.5 2.5 0 0 1-3.452 0 1.12 1.12 0 0 0-1.549 0 2.5 2.5 0 0 1-3.77-3.248l2.889-4.184A2 2 0 0 1 7 2h10a2 2 0 0 1 1.653.873l2.895 4.192a2.5 2.5 0 0 1-3.774 3.244"></path><path d="M4 10.95V19a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8.05"></path></svg>
                </span> eCommerce</a>
            <a class="nav-link {{$page=='CRM'?'active':''}}" href="{{route('crmpage')}}">
                <span class="me-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-handshake h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><path d="m11 17 2 2a1 1 0 1 0 3-3"></path><path d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4"></path><path d="m21 3 1 11h-2"></path><path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3"></path><path d="M3 4h8"></path></svg> 
            </span> CRM</a>
            <a class="nav-link {{$page=='Saas'?'active':''}}" href="{{route('Saas')}}">
                <span class="me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rocket h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"></path><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path></svg>
            </span> SaaS</a>
            <a class="nav-link {{$page=='Charts'?'active':''}}" href="{{route('charts')}}">
                <span class="me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-no-axes-combined h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><path d="M12 16v5"></path><path d="M16 14v7"></path><path d="M20 10v11"></path><path d="m22 3-8.646 8.646a.5.5 0 0 1-.708 0L9.354 8.354a.5.5 0 0 0-.707 0L2 15"></path><path d="M4 18v3"></path><path d="M8 14v7"></path></svg>
            </span>Charts</a>
            </div>

        <div class="menuitem">
                <div class="menu-header d-flex justify-content-between">
                    <p class="text-uppercase text-muted fw-bold mb-2 overview">COMMERCE</p>
                    <button class="dropdown2 border-0 bg-transparent p-0">
                    <span class="arrow-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right size-3 transition-transform duration-200 rotate-90" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg></span></button>
                </div>
        <ul class="sub-menu p-0">
                <li>
                    <a class="nav-link {{$page=='Order'?'active':''}}" href="{{route('orders')}}">
                        <span class="me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><circle cx="8" cy="21" r="1"></circle><circle cx="19" cy="21" r="1"></circle><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path></svg>
                        </span>Orders
                    </a>
                </li>
                <li>
                <a class="nav-link {{$page=='products'?'active':''}}" href="{{route('product')}}">
                        <span class="me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"></path><path d="M12 22V12"></path><polyline points="3.29 7 12 12 20.71 7"></polyline><path d="m7.5 4.27_9_5.15"></path></svg>
                        </span>
                    Products
                </a>
                </li>
                    <li>
                    <a  class="nav-link {{$page=='customer'?'active':''}}" href="{{route('customer')}}">
                        <span class="me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><path d="M16 3.128a4 4 0 0 1 0 7.744"></path><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><circle cx="9" cy="7" r="4"></circle></svg>
                        </span>Customers
                        </a>
                    </li>
                    <li>
                    <a  class="nav-link {{$page=='invoice'?'active':''}}" href="{{route('invoice')}}">
                        <span class="me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z"></path><path d="M14 2v5a1 1 0 0 0 1 1h5"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg>
                        </span>Invoices
                        </a>
                    </li>
            </ul>
        </div>
        
        <div class="menuitem">
            <div class="menu-header d-flex justify-content-between">
                <p class="text-uppercase text-muted fw-bold mb-2 overview">APPS</p>
                <span class="arrow-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right size-3 transition-transform duration-200 rotate-90" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg></span>
            </div>
        <ul class="sub-menu p-0">
            <li>
                <a class="nav-link {{$page=='mails'?'active':''}}" href="{{route('mail')}}">
                    <span class="me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path><rect x="2" y="4" width="20" height="16" rx="2"></rect></svg>
                    </span>Mails
                </a>
            </li>
                <li>
                <a class="nav-link {{$page=='chat'?'active':''}}" href="{{route('chats')}}">
                    <span class="me-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><path d="M2.992 16.342a2 2 0 0 1 .094 1.167l-1.065 3.29a1 1 0 0 0 1.236 1.168l3.413-.998a2 2 0 0 1 1.099.092 10 10 0 1 0-4.777-4.719"></path></svg>
                    </span>
                    Chats
                </a>
                </li>
                <li>
                <a  class="nav-link {{$page=='files'?'active':''}}" href="{{route('file')}}">
                    <span class="me-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-folder-open h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><path d="m6 14 1.5-2.9A2 2 0 0 1 9.24 10H20a2 2 0 0 1 1.94 2.5l-1.54 6a2 2 0 0 1-1.95 1.5H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h3.9a2 2 0 0 1 1.69.9l.81 1.2a2 2 0 0 0 1.67.9H18a2 2 0 0 1 2 2v2"></path></svg>
                    </span>Files
                    </a>
                </li>
                <li>
                <a  class="nav-link {{$page=='kanban'?'active':''}}" href="{{route('kanban')}}">
                    <span class="me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-kanban h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><path d="M5 3v14"></path><path d="M12 3v8"></path><path d="M19 3v18"></path></svg>
                    </span>Kanban
                    </a>
                </li>
                <li>
                <a  class="nav-link {{$page=='calender'?'active':''}}" href="{{route('calender')}}">
                    <span class="me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg>
                    </span>Calendar
                    </a>
                </li>
                <li>
                <a  class="nav-link {{$page=='wizard'?'active':''}}" href="{{route('wiz')}}">
                    <span class="me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-checks h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><path d="M13 5h8"></path><path d="M13 12h8"></path><path d="M13 19h8"></path><path d="m3 17 2 2 4-4"></path><path d="m3 7 2 2 4-4"></path></svg>
                    </span>Wizard
                    </a>
                </li>
                <li>
                    <a  class="nav-link {{$page=='form'?'active':''}}" href="{{route('form')}}">
                    <span class="me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-input h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><path d="M4 11V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.706.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-1"></path><path d="M14 2v5a1 1 0 0 0 1 1h5"></path><path d="M2 15h10"></path><path d="m9 18 3-3-3-3"></path></svg>
                    </span>Form
                    </a>
                </li>
        </ul>
    </div>

    <div class="menuitem">
            <div class="menu-header d-flex justify-content-between">
                <p class="text-uppercase text-muted fw-bold mb-2 overview">DEV TOOLS</p>
                <span class="arrow-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right size-3 transition-transform duration-200 rotate-90" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg></span>
            </div>
            <ul class="sub-menu p-0">
                <li>
                    <a class="nav-link {{$page=='roadmap'?'active':''}}" href="{{route('roadmap')}}">
                        <span class="me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><path d="M14.106 5.553a2 2 0 0 0 1.788 0l3.659-1.83A1 1 0 0 1 21 4.619v12.764a1 1 0 0 1-.553.894l-4.553 2.277a2 2 0 0 1-1.788 0l-4.212-2.106a2 2 0 0 0-1.788 0l-3.659 1.83A1 1 0 0 1 3 19.381V6.618a1 1 0 0 1 .553-.894l4.553-2.277a2 2 0 0 1 1.788 0z"></path><path d="M15 5.764v15"></path><path d="M9 3.236v15"></path></svg>
                        </span>Roadmap
                    </a>
                </li>
                <li>
                    <a class="nav-link{{$page=='feature'?'active':''}}" href="{{route('feature')}}">
                        <span class="me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-toggle-left h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><circle cx="9" cy="12" r="3"></circle><rect width="20" height="14" x="2" y="5" rx="7"></rect></svg>
                        </span>Feature Flags
                    </a>
                </li>
                <li>
                    <a class="nav-link {{$page=='deployment'?'active':''}}" href="{{route('deployments')}}">
                        <span class="me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cloud-upload h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><path d="M12 13v8"></path><path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242"></path><path d="m8 17 4-4 4 4"></path></svg>
                        </span>Deployments
                    </a>
                </li>
                <li>
                    <a class="nav-link {{$page=='activity'?'active':''}}" href="{{route('activity')}}">
                        <span class="me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-activity h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2"></path></svg>
                        </span>Activity
                    </a>
                </li>
                <li>
                    <a class="nav-link {{$page=='feedback'?'active':''}}" href="{{route('feedback')}}">
                        <span class="me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square-text h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><path d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z"></path><path d="M7 11h10"></path><path d="M7 15h6"></path><path d="M7 7h8"></path></svg>
                        </span>Feedback
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="">
                        <span class="me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-timer h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><line x1="10" x2="14" y1="2" y2="2"></line><line x1="12" x2="15" y1="14" y2="11"></line><circle cx="12" cy="14" r="8"></circle></svg>
                        </span>Sprints
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="">
                        <span class="me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scroll-text h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><path d="M15 12h-5"></path><path d="M15 8h-5"></path><path d="M19 17V5a2 2 0 0 0-2-2H4"></path><path d="M8 21h12a2 2 0 0 0 2-2v-1a1 1 0 0 0-1-1H11a1 1 0 0 0-1 1v1a2 2 0 1 1-4 0V5a2 2 0 1 0-4 0v2a1 1 0 0 0 1 1h3"></path></svg>
                        </span>changelog
                    </a>
                </li>
            </ul>
    </div>

    <div class="menuitem">
            <div class="menu-header d-flex justify-content-between">
                <p class="text-uppercase text-muted fw-bold mb-2 overview">FINANACE</p>
                <span class="arrow-icon"><span class="arrow-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right size-3 transition-transform duration-200 rotate-90" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg></span></span>
            </div>
            <ul class="sub-menu p-0">
            <li>
                <a class="nav-link border-bottom" href="">
                    <span class="me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><rect width="20" height="14" x="2" y="5" rx="2"></rect><line x1="2" x2="22" y1="10" y2="10"></line></svg>
                    </span>Billing
                </a>
            </li>
            </ul>
    </div>

    <div class="menuitem">
            <div class="menu-header d-flex justify-content-between">
                <p class="text-uppercase text-muted fw-bold mb-2 overview">FINANACE</p>
                <span class="arrow-icon"><span class="arrow-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right size-3 transition-transform duration-200 rotate-90" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg></span></span>
            </div>
            <ul class="sub-menu p-0 border-bottom">
                <li>
                    <a class="nav-link" href="">
                        <span class="me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-cog h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><path d="M10 15H6a4 4 0 0 0-4 4v2"></path><path d="m14.305 16.53.923-.382"></path><path d="m15.228 13.852-.923-.383"></path><path d="m16.852 12.228-.383-.923"></path><path d="m16.852 17.772-.383.924"></path><path d="m19.148 12.228.383-.923"></path><path d="m19.53 18.696-.382-.924"></path><path d="m20.772 13.852.924-.383"></path><path d="m20.772 16.148.924.383"></path><circle cx="18" cy="15" r="3"></circle><circle cx="9" cy="7" r="4"></circle></svg>
                        </span>Users
                    </a>
                </li>

            <li>
                <a class="nav-link" href="">
                    <span class="me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><path d="M10.268 21a2 2 0 0 0 3.464 0"></path><path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326"></path></svg>
                    </svg>Notifications
                </a>
            </li>

            <li>
                <a class="nav-link" href="">
                    <span class="me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><path d="M10.268 21a2 2 0 0 0 3.464 0"></path><path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326"></path></svg>
                    </svg>Settings
                </a>
            </li>

            <li>
                <a class="nav-link" href="">
                    <span class="me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-question-mark h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><path d="M12 17h.01"></path></svg>
                    </svg>Help&Support
                </a>
            </li>
            </ul>
    </div>

    <div class="menuitem">
            <div class="menu-header d-flex justify-content-between">
                <p class="text-uppercase text-muted fw-bold mb-2 overview">FINANACE</p>
                <span class="arrow-icon"><span class="arrow-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right size-3 transition-transform duration-200 rotate-90" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg></span></span>
            </div>
            <ul class="sub-menu p-0 border-bottom">
                <li>
                    <a class="nav-link" href="">
                        <span class="me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open h-[18px] w-[18px] shrink-0 transition-colors text-sidebar-foreground/40 group-hover:text-sidebar-foreground/70" aria-hidden="true"><path d="M12 7v14"></path><path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path></svg>
                        </span>Documentation
                    </a>
                </li>
            </ul>
    </div>
    </div>
</div> -->
    
<style>
.sidebar {
  height: 100vh;
  width: 250px;
  border-right: 1px solid var(--bs-border-color);
  position: fixed;
  top: 0;
  z-index: 1000;
  overflow-y: auto;
}
.main-content-wrapper {
  margin-left: 260px;
  width: calc(100% - 260px);
}
.nav-link {
  color: var(--bs-body-color);
  border-radius: 8px;
  margin-bottom: 5px;
  display: flex;
  align-items: center;
}
.nav-link.active {
  background-color: var(--bs-primary-bg-subtle);
  color: var(--bs-primary);
  font-weight: 600;
}
[data-bs-theme="dark"] .nav-link.active {
  background-color: var(--bs-secondary-bg);
  color: var(--bs-white);
}
.logo {
  width: 35px;
  height: 38px;
  background: linear-gradient(to right, #5046c3, #3c96e1);
}
.sub-menu {
  list-style: none;
}
.sub-menu li a {
  text-decoration: none;
}
</style>

<div class="main">
  <div class="sidebar d-flex flex-column bg-body p-3">

    <!-- Brand -->
    <div class="d-flex align-items-center mb-4 ps-2">
      <div class="rounded-circle p-2 me-2 logo d-flex align-items-center justify-content-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"></path><path d="M20 2v4"></path><path d="M22 4h-4"></path><circle cx="4" cy="20" r="2"></circle></svg>
      </div>
      <div>
        <h6 class="mb-0 fw-bold">Flux</h6>
        <small class="text-muted" style="font-size:11px;">DASHBOARD</small>
      </div>
    </div>

    <!-- Overview -->
    <div class="d-flex justify-content-between align-items-center mb-2">
      <span class="text-uppercase text-muted fw-bold" style="font-size:11px;">Overview</span>
      <button class="border-0 bg-transparent p-0">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg>
      </button>
    </div>

    <nav class="nav flex-column mb-2">
      <a class="nav-link px-3 py-2 {{$page=='Dashbord'?'active':''}}" href="{{ route('dashbord')}}">
        <span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="7" height="9" x="3" y="3" rx="1"></rect><rect width="7" height="5" x="14" y="3" rx="1"></rect><rect width="7" height="9" x="14" y="12" rx="1"></rect><rect width="7" height="5" x="3" y="16" rx="1"></rect></svg></span>Dashboard
      </a>
      <a class="nav-link px-3 py-2 {{$page=='Analytics'?'active':''}}" href="{{route('analysis')}}">
        <span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 3v16a2 2 0 0 0 2 2h16"></path><path d="M18 17V9"></path><path d="M13 17V5"></path><path d="M8 17v-3"></path></svg></span>Analytics
      </a>
      <a class="nav-link px-3 py-2 {{$page=='Ecomerce'?'active':''}}" href="{{route('ecomerce')}}">
        <span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 21v-5a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v5"></path><path d="M17.774 10.31a1.12 1.12 0 0 0-1.549 0 2.5 2.5 0 0 1-3.451 0 1.12 1.12 0 0 0-1.548 0 2.5 2.5 0 0 1-3.452 0 1.12 1.12 0 0 0-1.549 0 2.5 2.5 0 0 1-3.77-3.248l2.889-4.184A2 2 0 0 1 7 2h10a2 2 0 0 1 1.653.873l2.895 4.192a2.5 2.5 0 0 1-3.774 3.244"></path><path d="M4 10.95V19a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8.05"></path></svg></span>eCommerce
      </a>
      <a class="nav-link px-3 py-2 {{$page=='CRM'?'active':''}}" href="{{route('crmpage')}}">
        <span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m11 17 2 2a1 1 0 1 0 3-3"></path><path d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4"></path><path d="m21 3 1 11h-2"></path><path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3"></path><path d="M3 4h8"></path></svg></span>CRM
      </a>
      <a class="nav-link px-3 py-2 {{$page=='Saas'?'active':''}}" href="{{route('Saas')}}">
        <span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"></path><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path></svg></span>SaaS
      </a>
      <a class="nav-link px-3 py-2 {{$page=='Charts'?'active':''}}" href="{{route('charts')}}">
        <span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 16v5"></path><path d="M16 14v7"></path><path d="M20 10v11"></path><path d="m22 3-8.646 8.646a.5.5 0 0 1-.708 0L9.354 8.354a.5.5 0 0 0-.707 0L2 15"></path><path d="M4 18v3"></path><path d="M8 14v7"></path></svg></span>Charts
      </a>
    </nav>

    <!-- Commerce -->
    <div class="mb-2">
      <div class="d-flex justify-content-between align-items-center mb-2">
        <span class="text-uppercase text-muted fw-bold" style="font-size:11px;">Commerce</span>
        <button class="border-0 bg-transparent p-0"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg></button>
      </div>
      <ul class="sub-menu p-0">
        <li><a class="nav-link px-3 py-2 {{$page=='Order'?'active':''}}" href="{{route('orders')}}"><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="8" cy="21" r="1"></circle><circle cx="19" cy="21" r="1"></circle><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path></svg></span>Orders</a></li>
        <li><a class="nav-link px-3 py-2 {{$page=='products'?'active':''}}" href="{{route('product')}}"><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"></path><path d="M12 22V12"></path><polyline points="3.29 7 12 12 20.71 7"></polyline></svg></span>Products</a></li>
        <li><a class="nav-link px-3 py-2 {{$page=='customer'?'active':''}}" href="{{route('customer')}}"><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.128a4 4 0 0 1 0 7.744"></path></svg></span>Customers</a></li>
        <li><a class="nav-link px-3 py-2 {{$page=='invoice'?'active':''}}" href="{{route('invoice')}}"><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z"></path><path d="M14 2v5a1 1 0 0 0 1 1h5"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg></span>Invoices</a></li>
      </ul>
    </div>

    <!-- Apps -->
    <div class="mb-2">
      <div class="d-flex justify-content-between align-items-center mb-2">
        <span class="text-uppercase text-muted fw-bold" style="font-size:11px;">Apps</span>
        <button class="border-0 bg-transparent p-0"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg></button>
      </div>
      <ul class="sub-menu p-0">
        <li><a class="nav-link px-3 py-2 {{$page=='mails'?'active':''}}" href="{{route('mail')}}"><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path><rect x="2" y="4" width="20" height="16" rx="2"></rect></svg></span>Mails</a></li>
        <li><a class="nav-link px-3 py-2 {{$page=='chat'?'active':''}}" href="{{route('chats')}}"><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2.992 16.342a2 2 0 0 1 .094 1.167l-1.065 3.29a1 1 0 0 0 1.236 1.168l3.413-.998a2 2 0 0 1 1.099.092 10 10 0 1 0-4.777-4.719"></path></svg></span>Chats</a></li>
        <li><a class="nav-link px-3 py-2 {{$page=='files'?'active':''}}" href="{{route('file')}}"><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 14 1.5-2.9A2 2 0 0 1 9.24 10H20a2 2 0 0 1 1.94 2.5l-1.54 6a2 2 0 0 1-1.95 1.5H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h3.9a2 2 0 0 1 1.69.9l.81 1.2a2 2 0 0 0 1.67.9H18a2 2 0 0 1 2 2v2"></path></svg></span>Files</a></li>
        <li><a class="nav-link px-3 py-2 {{$page=='kanban'?'active':''}}" href="{{route('kanban')}}"><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 3v14"></path><path d="M12 3v8"></path><path d="M19 3v18"></path></svg></span>Kanban</a></li>
        <li><a class="nav-link px-3 py-2 {{$page=='calender'?'active':''}}" href="{{route('calender')}}"><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg></span>Calendar</a></li>
        <li><a class="nav-link px-3 py-2 {{$page=='wizard'?'active':''}}" href="{{route('wiz')}}"><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 5h8"></path><path d="M13 12h8"></path><path d="M13 19h8"></path><path d="m3 17 2 2 4-4"></path><path d="m3 7 2 2 4-4"></path></svg></span>Wizard</a></li>
        <li><a class="nav-link px-3 py-2 {{$page=='form'?'active':''}}" href="{{route('form')}}"><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 11V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.706.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-1"></path><path d="M14 2v5a1 1 0 0 0 1 1h5"></path><path d="M2 15h10"></path><path d="m9 18 3-3-3-3"></path></svg></span>Form</a></li>
      </ul>
    </div>

    <!-- Dev Tools -->
    <div class="mb-2">
      <div class="d-flex justify-content-between align-items-center mb-2">
        <span class="text-uppercase text-muted fw-bold" style="font-size:11px;">Dev Tools</span>
        <button class="border-0 bg-transparent p-0"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg></button>
      </div>
      <ul class="sub-menu p-0">
        <li><a class="nav-link px-3 py-2 {{$page=='roadmap'?'active':''}}" href="{{route('roadmap')}}"><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.106 5.553a2 2 0 0 0 1.788 0l3.659-1.83A1 1 0 0 1 21 4.619v12.764a1 1 0 0 1-.553.894l-4.553 2.277a2 2 0 0 1-1.788 0l-4.212-2.106a2 2 0 0 0-1.788 0l-3.659 1.83A1 1 0 0 1 3 19.381V6.618a1 1 0 0 1 .553-.894l4.553-2.277a2 2 0 0 1 1.788 0z"></path><path d="M15 5.764v15"></path><path d="M9 3.236v15"></path></svg></span>Roadmap</a></li>
        <li><a class="nav-link px-3 py-2 {{$page=='feature'?'active':''}}" href="{{route('feature')}}"><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="9" cy="12" r="3"></circle><rect width="20" height="14" x="2" y="5" rx="7"></rect></svg></span>Feature Flags</a></li>
        <li><a class="nav-link px-3 py-2 {{$page=='deployment'?'active':''}}" href="{{route('deployments')}}"><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 13v8"></path><path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242"></path><path d="m8 17 4-4 4 4"></path></svg></span>Deployments</a></li>
        <li><a class="nav-link px-3 py-2 {{$page=='activity'?'active':''}}" href="{{route('activity')}}"><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2"></path></svg></span>Activity</a></li>
        <li><a class="nav-link px-3 py-2 {{$page=='feedback'?'active':''}}" href="{{route('feedback')}}"><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z"></path><path d="M7 11h10"></path><path d="M7 15h6"></path><path d="M7 7h8"></path></svg></span>Feedback</a></li>
        <li><a class="nav-link px-3 py-2" href=""><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="10" x2="14" y1="2" y2="2"></line><line x1="12" x2="15" y1="14" y2="11"></line><circle cx="12" cy="14" r="8"></circle></svg></span>Sprints</a></li>
        <li><a class="nav-link px-3 py-2" href=""><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 12h-5"></path><path d="M15 8h-5"></path><path d="M19 17V5a2 2 0 0 0-2-2H4"></path><path d="M8 21h12a2 2 0 0 0 2-2v-1a1 1 0 0 0-1-1H11a1 1 0 0 0-1 1v1a2 2 0 1 1-4 0V5a2 2 0 1 0-4 0v2a1 1 0 0 0 1 1h3"></path></svg></span>Changelog</a></li>
      </ul>
    </div>

    <!-- Finance -->
    <div class="mb-2">
      <div class="d-flex justify-content-between align-items-center mb-2">
        <span class="text-uppercase text-muted fw-bold" style="font-size:11px;">Finance</span>
        <button class="border-0 bg-transparent p-0"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg></button>
      </div>
      <ul class="sub-menu p-0">
        <li><a class="nav-link px-3 py-2" href=""><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="20" height="14" x="2" y="5" rx="2"></rect><line x1="2" x2="22" y1="10" y2="10"></line></svg></span>Billing</a></li>
      </ul>
    </div>

    <!-- Settings -->
    <div class="mb-2">
      <div class="d-flex justify-content-between align-items-center mb-2">
        <span class="text-uppercase text-muted fw-bold" style="font-size:11px;">Settings</span>
        <button class="border-0 bg-transparent p-0"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg></button>
      </div>
      <ul class="sub-menu p-0">
        <li><a class="nav-link px-3 py-2" href=""><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10 15H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><circle cx="18" cy="15" r="3"></circle></svg></span>Users</a></li>
        <li><a class="nav-link px-3 py-2" href=""><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10.268 21a2 2 0 0 0 3.464 0"></path><path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326"></path></svg></span>Notifications</a></li>
        <li><a class="nav-link px-3 py-2" href=""><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10.268 21a2 2 0 0 0 3.464 0"></path><path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326"></path></svg></span>Settings</a></li>
        <li><a class="nav-link px-3 py-2" href=""><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><path d="M12 17h.01"></path></svg></span>Help & Support</a></li>
      </ul>
    </div>

    <!-- Docs -->
    <div class="mb-2">
      <div class="d-flex justify-content-between align-items-center mb-2">
        <span class="text-uppercase text-muted fw-bold" style="font-size:11px;">Docs</span>
        <button class="border-0 bg-transparent p-0"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg></button>
      </div>
      <ul class="sub-menu p-0">
        <li><a class="nav-link px-3 py-2" href=""><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 7v14"></path><path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path></svg></span>Documentation</a></li>
      </ul>
    </div>

  </div>
</div>
    
    