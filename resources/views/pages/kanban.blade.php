@extends('welcome')
@push('css')
<style>
.kb-title {
font-size: 1.4rem;
font-weight: 700;
margin-bottom: 0.1rem;
}
.kb-topbar {
display: flex;
justify-content: space-between;
align-items: flex-start;
margin-bottom: 1.5rem;
flex-wrap: wrap;
gap: 0.5rem;
}
.btn-new-task {
display: inline-flex;
align-items: center;
gap: 6px;
background: linear-gradient(to right, #7367f0, #3c96e1);
color: #fff;
border: none;
border-radius: 8px;
padding: 0.5rem 1.2rem;
font-size: 0.875rem;
font-weight: 600;
text-decoration: none;
white-space: nowrap;
}
.btn-new-task:hover {
opacity: 0.9;
color: #fff;
}
.card-high {
box-shadow: 0px 1px 1px 0px;
border-radius: 10px;
cursor: pointer;
}
.designs {
font-size: 10px;
padding-left: 15px;
padding-right: 15px;
}
.ux {
font-size: 10px;
padding-left: 15px;
padding-right: 15px;
}
.onboarding {
font-size: 12px;
}
.text-muted {
font-size: 12px;
margin-bottom: 5px;
}
.high {
font-size: 10px;
padding-left: 15px;
padding-right: 15px;
background-color: rgb(224, 62, 62);
}
.calender2 {
font-size: 10px;
}
</style>
@endpush
@section('pages')
<div class="kb-topbar">
  <div>
    <p class="kb-title">Kanban Board</p>
    <p class="text-muted mb-0">Organize and track project tasks</p>
  </div>
  <a href="#" class="btn-new-task">+ New Task</a>
</div>
<div class="container-fluid">
    <div class="row justify-content-between">
        <div class="col-3">
            <span>Blacklog</span>
            <div class="card-high border w-100 mt-3 p-1">
                <div class="design d-flex mt-2">
                    <div class="designs bg-primary-subtle rounded-3 ms-2">designs</div>
                    <div class="ux bg-warning-subtle rounded-3 ms-2">ux</div>
                </div>
                <strong class="onboarding ms-2">Design new onboarding flow</strong>
                <p class="text-muted ms-2">Create wireframes and high-fidelity mockups for the updated user onboarding experience...</p>
                <div class="footer d-flex align-items-center ms-2">
                    <div class="high rounded-3">high</div>
                    <div class="calender d-flex align-items-center ms-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar h-3 w-3" aria-hidden="true"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg>
                    </div>
                    <span class="calender2 ms-1">Mar 5</span>
                </div>
            </div>
            <div class="card-high border w-100 mt-3 p-1">
                <div class="design d-flex mt-2">
                    <div class="designs bg-warning-subtle rounded-3 ms-2">Research</div>
                </div>
                <strong class="onboarding ms-2">Design new onboarding flow</strong>
                <p class="text-muted ms-2">Create wireframes and high-fidelity mockups for the updated user onboarding experience...</p>
                <div class="footer d-flex align-items-center ms-2">
                    <div class="high rounded-3 bg-warning">Medium</div>
                    <div class="calender d-flex align-items-center ms-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar h-3 w-3" aria-hidden="true"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg>
                    </div>
                    <span class="calender2 ms-1">Mar 5</span>
                </div>
            </div>
            <div class="card-high border w-100 mt-3 p-1">
                <div class="design d-flex mt-2">
                    <div class="designs bg-success-subtle rounded-3 ms-2">i8n</div>
                    <div class="ux bg-warning-subtle rounded-3 ms-2">ux</div>
                </div>
                <strong class="onboarding ms-2">Design new onboarding flow</strong>
                <p class="text-muted ms-2">Create wireframes and high-fidelity mockups for the updated user onboarding experience...</p>
                <div class="footer d-flex align-items-center ms-2">
                    <div class="high rounded-3 bg-secondary-subtle">Low</div>
                    <div class="calender d-flex align-items-center ms-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar h-3 w-3" aria-hidden="true"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg>
                    </div>
                    <span class="calender2 ms-1">Mar 5</span>
                </div>
            </div>
            <div class="card-high border w-100 mt-3 p-1">
                <div class="design d-flex mt-2">
                    <div class="designs bg-success-subtle rounded-3 ms-2">Backend</div>
                    <div class="ux bg-primary-subtle rounded-3 ms-2">Security</div>
                </div>
                <strong class="onboarding ms-2">Design new onboarding flow</strong>
                <p class="text-muted ms-2">Create wireframes and high-fidelity mockups for the updated user onboarding experience...</p>
                <div class="footer d-flex align-items-center ms-2">
                    <div class="high rounded-3 bg-warning-subtle">Medium</div>
                    <div class="calender d-flex align-items-center ms-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar h-3 w-3" aria-hidden="true"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg>
                    </div>
                    <span class="calender2 ms-1">Mar 5</span>
                </div>
            </div>
        </div>
        <div class="col-3">
            <p>In Progress</p>
            <div class="card-high border w-100 mt-3 p-1">
                <div class="design d-flex mt-2">
                    <div class="designs bg-success-subtle rounded-3 ms-2">Backend</div>
                    <div class="ux bg-primary-subtle rounded-3 ms-2">Security</div>
                </div>
                <strong class="onboarding ms-2">Design new onboarding flow</strong>
                <p class="text-muted ms-2">Create wireframes and high-fidelity mockups for the updated user onboarding experience...</p>
                <div class="footer d-flex align-items-center ms-2">
                    <div class="high rounded-3 bg-warning-subtle">Medium</div>
                    <div class="calender d-flex align-items-center ms-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar h-3 w-3" aria-hidden="true"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg>
                    </div>
                    <span class="calender2 ms-1">Mar 5</span>
                </div>
            </div>
            <div class="card-high border w-100 mt-3 p-1">
                <div class="design d-flex mt-2">
                    <div class="designs bg-success-subtle rounded-3 ms-2">Backend</div>
                    <div class="ux bg-primary-subtle rounded-3 ms-2">Security</div>
                </div>
                <strong class="onboarding ms-2">Design new onboarding flow</strong>
                <p class="text-muted ms-2">Create wireframes and high-fidelity mockups for the updated user onboarding experience...</p>
                <div class="footer d-flex align-items-center ms-2">
                    <div class="high rounded-3 bg-warning-subtle">Medium</div>
                    <div class="calender d-flex align-items-center ms-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar h-3 w-3" aria-hidden="true"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg>
                    </div>
                    <span class="calender2 ms-1">Mar 5</span>
                </div>
            </div>
            <div class="card-high border w-100 mt-3 p-1">
                <div class="design d-flex mt-2">
                    <div class="designs bg-success-subtle rounded-3 ms-2">Backend</div>
                    <div class="ux bg-primary-subtle rounded-3 ms-2">Security</div>
                </div>
                <strong class="onboarding ms-2">Design new onboarding flow</strong>
                <p class="text-muted ms-2">Create wireframes and high-fidelity mockups for the updated user onboarding experience...</p>
                <div class="footer d-flex align-items-center ms-2">
                    <div class="high rounded-3 bg-warning-subtle">Medium</div>
                    <div class="calender d-flex align-items-center ms-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar h-3 w-3" aria-hidden="true"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg>
                    </div>
                    <span class="calender2 ms-1">Mar 5</span>
                </div>
            </div>
        </div>
        <div class="col-3">
            <p>In Review</p>
            <div class="card-high border w-100 mt-3 p-1">
                <div class="design d-flex mt-2">
                    <div class="designs bg-success-subtle rounded-3 ms-2">Backend</div>
                    <div class="ux bg-primary-subtle rounded-3 ms-2">Security</div>
                </div>
                <strong class="onboarding ms-2">Design new onboarding flow</strong>
                <p class="text-muted ms-2">Create wireframes and high-fidelity mockups for the updated user onboarding experience...</p>
                <div class="footer d-flex align-items-center ms-2">
                    <div class="high rounded-3 bg-warning-subtle">Medium</div>
                    <div class="calender d-flex align-items-center ms-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar h-3 w-3" aria-hidden="true"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg>
                    </div>
                    <span class="calender2 ms-1">Mar 5</span>
                </div>
            </div>
            <div class="card-high border w-100 mt-3 p-1">
                <div class="design d-flex mt-2">
                    <div class="designs bg-success-subtle rounded-3 ms-2">Backend</div>
                    <div class="ux bg-primary-subtle rounded-3 ms-2">Security</div>
                </div>
                <strong class="onboarding ms-2">Design new onboarding flow</strong>
                <p class="text-muted ms-2">Create wireframes and high-fidelity mockups for the updated user onboarding experience...</p>
                <div class="footer d-flex align-items-center ms-2">
                    <div class="high rounded-3 bg-warning-subtle">Medium</div>
                    <div class="calender d-flex align-items-center ms-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar h-3 w-3" aria-hidden="true"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg>
                    </div>
                    <span class="calender2 ms-1">Mar 5</span>
                </div>
            </div>
        </div>
        <div class="col-3">
            <p>Done</p>
            <div class="card-high border w-100 mt-3 p-1">
                <div class="design d-flex mt-2">
                    <div class="designs bg-success-subtle rounded-3 ms-2">Backend</div>
                    <div class="ux bg-primary-subtle rounded-3 ms-2">Security</div>
                </div>
                <strong class="onboarding ms-2">Design new onboarding flow</strong>
                <p class="text-muted ms-2">Create wireframes and high-fidelity mockups for the updated user onboarding experience...</p>
                <div class="footer d-flex align-items-center ms-2">
                    <div class="high rounded-3 bg-warning-subtle">Medium</div>
                    <div class="calender d-flex align-items-center ms-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar h-3 w-3" aria-hidden="true"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg>
                    </div>
                    <span class="calender2 ms-1">Mar 5</span>
                </div>
            </div>
            <div class="card-high border w-100 mt-3 p-1">
                <div class="design d-flex mt-2">
                    <div class="designs bg-success-subtle rounded-3 ms-2">Backend</div>
                    <div class="ux bg-primary-subtle rounded-3 ms-2">Security</div>
                </div>
                <strong class="onboarding ms-2">Design new onboarding flow</strong>
                <p class="text-muted ms-2">Create wireframes and high-fidelity mockups for the updated user onboarding experience...</p>
                <div class="footer d-flex align-items-center ms-2">
                    <div class="high rounded-3 bg-warning-subtle">Medium</div>
                    <div class="calender d-flex align-items-center ms-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar h-3 w-3" aria-hidden="true"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg>
                    </div>
                    <span class="calender2 ms-1">Mar 5</span>
                </div>
            </div>
            <div class="card-high border w-100 mt-3 p-1">
                <div class="design d-flex mt-2">
                    <div class="designs bg-success-subtle rounded-3 ms-2">Backend</div>
                    <div class="ux bg-primary-subtle rounded-3 ms-2">Security</div>
                </div>
                <strong class="onboarding ms-2">Design new onboarding flow</strong>
                <p class="text-muted ms-2">Create wireframes and high-fidelity mockups for the updated user onboarding experience...</p>
                <div class="footer d-flex align-items-center ms-2">
                    <div class="high rounded-3 bg-warning-subtle">Medium</div>
                    <div class="calender d-flex align-items-center ms-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar h-3 w-3" aria-hidden="true"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg>
                    </div>
                    <span class="calender2 ms-1">Mar 5</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection