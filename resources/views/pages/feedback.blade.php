<!-- <style>
    .new-order-btn {
        background-color: rgb(129, 54, 243);
        color: white;
        box-shadow: 0 0 8px rgba(0,0,0,0.08);
        /* color: black;     */
        padding: 10px 20px;
        font-size: 16px;
        font-weight: 600;
        border: none;
        border-radius: 15px;
        cursor: pointer;
        transition: 0.3s ease;
        text-decoration: none;
    }
    .wee{
        width: 98%;
    }
    .card{
        background: #ffffff;
        box-shadow: 0 0 8px rgba(0,0,0,0.08);
        border: none;
        border-radius: 20px;
    }
    .thunder{
        background-color: rgb(252, 209, 252);
        color: purple;
        height: 50px;
        width: 50px;
        margin-top: 10px;
        margin-right: 20px;
        border-radius: 20px;
    }
    .thunder2{
        background-color: rgb(208, 208, 249);
        color: blue;
        height: 50px;
        width: 50px;
        margin-top: 10px;
        margin-right: 20px;
        border-radius: 20px;
    }
    .thunder3{
        background-color: rgb(247, 236, 217);
        color: orange;
        height: 50px;
        width: 50px;
        margin-top: 10px;
        margin-right: 20px;
        border-radius: 20px;
    }
    .thunder4{
        background-color: rgb(210, 245, 210);
        color: green;
        height: 50px;
        width: 50px;
        margin-top: 10px;
        margin-right: 20px;
        border-radius: 20px;
    }
    .tabs-container{
        width: fit-content;
        background: #f2f4f7;
        padding: 6px;
        border-radius: 20px;
        display: flex;
        gap: 15px;
        align-items: center;
        /* margin-left: 20px; */
    }

    .tab{
        padding: 6px 18px;
        border-radius: 20px;
        cursor: pointer;
        color: #555;
        font-size: 15px;
        transition: 0.2s;
        user-select: none;
        text-decoration: none;
    }

    .tab.active{
        background: #ffffff;
        box-shadow: 0 0 8px rgba(0,0,0,0.08);
        font-weight: 600;
        color: #000;
        text-decoration: none;
    }
    .activity-card{
      background: #fff;
      border: 1px solid #e8e8ef;
      border-radius: 20px;
      padding: 28px 24px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }
    .btn-outline-primary{
        font-size: 13px;
        padding-top: 12px;
    }
    .btn-group{
        border: 1px solid grey;
        border: none;
    }
    #tabb{
        font-size: 12px;
    }
    .feature-card {
      background: #ffffff;
      border: 1px solid #e0e0ec;
      border-radius: 16px;
      padding: 1.5rem 1.25rem;
      display: flex;
      gap: 1rem;
    }

    .vote-section {
      display: flex;
      flex-direction: column;
      align-items: center;
      min-width: 40px;
      padding-top: 4px;
    }

    .vote-btn {
      background: none;
      border: none;
      cursor: pointer;
      color: #6b6b80;
      font-size: 20px;
      padding: 0;
      line-height: 1;
    }

    .vote-count {
      font-size: 1.1rem;
      font-weight: 600;
      color: #1a1a2e;
    }

    .card-title-text {
      font-size: 1rem;
      font-weight: 600;
      color: #1a1a2e;
      margin-bottom: 6px;
    }

    .card-desc {
      font-size: 13px;
      color: #6b6b80;
      line-height: 1.6;
      margin-bottom: 14px;
    }

    .badge-feature {
      background: #EEEDFE;
      color: #3C3489;
      border-radius: 20px;
      font-size: 12px;
      padding: 4px 12px;
      display: inline-flex;
      align-items: center;
      gap: 4px;
    }

    .badge-progress {
      background: #FAEEDA;
      color: #633806;
      border-radius: 20px;
      font-size: 12px;
      padding: 4px 12px;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .badge-planned {
      background: #EEEDFE;
      color: #3C3489;
      border-radius: 20px;
      font-size: 12px;
      padding: 4px 12px;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .dot {
      display: inline-block;
      width: 8px;
      height: 8px;
      border-radius: 50%;
    }

    .dot-orange { background: #EF9F27; }
    .dot-purple { background: #7F77DD; }

    .avatar {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 11px;
      font-weight: 600;
    }

    .avatar-dk { background: #EEEDFE; color: #3C3489; }
    .avatar-sc { background: #E1F5EE; color: #085041; }

    .meta-text { font-size: 13px; color: #6b6b80; }
    .meta-divider { color: #c0c0d0; }
    @media (max-width: 426px) {
    .feedback-section {
        flex-direction: column;
        align-items: stretch;
    }

    .search-box {
        width: 100%;
    }

    .vote-tabs {
        justify-content: center;
    }
    .tabs-container{
        width: 100%;
        gap: 6px;
            margin-bottom: 10px;

    }

    .tab{
        font-size: 12px;
        padding: 7px 12px;
    }
    }

    @media (max-width: 376px) {
        .tab {
            font-size: 12px;
            padding: 6px 10px;
        }

        .tabs-container{
            gap: 5px;
            margin-bottom: 10px;

        }
        

        .tab{
            font-size: 10px;
            padding: 6px 10px;
        }
    }

    @media (max-width: 320px) {
        .tab {
            font-size: 11px;
            padding: 5px 8px;
        }

        .search-input {
            font-size: 12px;
        }
        .tabs-container{
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            width: 100%;
            gap: 6px;
            margin-bottom: 10px;
        }

        .tab{
            text-align: center;
            font-size: 11px;
            padding: 6px 8px;
        }
    }
</style>
<div class="container-fluid d-flex justify-content-between mt-3">
    <h4 class="fw-bold ms-2 mt-1">Feedback Board</h4>
    <a href="#" class="new-order-btn me-3">+ Submit Feedback</a>
</div>
<div class="container-fluid">
    <p class="ms-2 mw text-secondary">Vote on feature requests and help shape the product roadmap.</p>
</div>
<div class="container-fluid wee">
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
            <div class="card mb-4">
            <div class="card-body d-flex justify-content-between">
                <div>
                    <p class="text-secondary">TOTAL SUBMISSIONS</p>
                    <h3 class="fw-bold">15</h3>
                </div>
                <div class="thunder text-center align-content-center align-items-center">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-5 w-5 text-primary" aria-hidden="true"><path d="M16 7h6v6"></path><path d="m22 7-8.5 8.5-5-5L2 17"></path></svg></span>
                </div>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
            <div class="card mb-4">
            <div class="card-body d-flex justify-content-between">
                <div>
                    <p class="text-secondary">OPEN</p>
                    <h3 class="fw-bold">6</h3>
                </div>
                <div class="thunder2 text-center align-content-center align-items-center">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-dot h-5 w-5 text-blue-600 dark:text-blue-400" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="1"></circle></svg></span>
                </div>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
            <div class="card mb-4">
            <div class="card-body d-flex justify-content-between">
                <div>
                    <p class="text-secondary">PLANNED</p>
                    <h3 class="fw-bold">4</h3>
                </div>
                <div class="thunder3 text-center align-content-center align-items-center">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-5 w-5 text-violet-600 dark:text-violet-400" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg></span>
                </div>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
            <div class="card mb-4">
            <div class="card-body d-flex justify-content-between">
                <div>
                    <p class="text-secondary">COMPLETED</p>
                    <h3 class="fw-bold">2</h3>
                </div>
                <div class="thunder4 text-center align-content-center align-items-center">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check h-5 w-5 text-green-600 dark:text-green-400" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg></span>
                </div>
            </div>
            </div>
        </div>  
    </div>
</div>
<div class="container-fluid wee">
   <div class="row"> 
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
        <div class="tabs-container">
        <a href="#" class="tab active">All</a>
        <a href="#" class="tab">Features</a>
        <a href="#" class="tab">Improvements</a>
        <a href="#" class="tab">Bugs</a>
        <a href="#" class="tab">Integerations</a>
        </div>
    </div>    
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex justify-content-between">
            <input type="text" class="form-control rounded-5 w-50" placeholder="Search Feedback" aria-label="Username" aria-describedby="basic-addon1">
            <div class="tabs-container">
            <a href="#" class="tab active" id="tabb">Most Voted</a>
            <a href="#" class="tab" id="tabb">Newest</a>
            <a href="#" class="tab" id="tabb">Most</a>
            </div>
    </div>
   </div>  
</div>  
<div class="container-fluid wee mt-4">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="feature-card">
            <div class="vote-section">
            <button class="vote-btn">&#8963;</button>
            <span class="vote-count">203</span>
            </div>
            <div class="flex-grow-1">
            <div class="card-title-text">Two-factor authentication</div>
            <p class="card-desc">Support TOTP-based 2FA and hardware security keys for team accounts. This is a blocker for enterprise adoption and SOC2 compliance requirements.</p>
            <div class="d-flex gap-2 flex-wrap mb-3">
            <span class="badge-feature">&#9902; Feature</span>
            <span class="badge-progress"><span class="dot dot-orange"></span> In Progress</span>
            </div>
            <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-2">
            <div class="avatar avatar-dk">DK</div>
            <span class="meta-text">David Kim</span>
            <span class="meta-divider">|</span>
            <span class="meta-text">Jan 15</span>
            </div>
            <span class="meta-text">&#128172; 31</span>
            </div>
            </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="feature-card">
            <div class="vote-section">
            <button class="vote-btn">&#8963;</button>
            <span class="vote-count">203</span>
            </div>
            <div class="flex-grow-1">
            <div class="card-title-text">Two-factor authentication</div>
            <p class="card-desc">Support TOTP-based 2FA and hardware security keys for team accounts. This is a blocker for enterprise adoption and SOC2 compliance requirements.</p>
            <div class="d-flex gap-2 flex-wrap mb-3">
            <span class="badge-feature">&#9902; Feature</span>
            <span class="badge-progress"><span class="dot dot-orange"></span> In Progress</span>
            </div>
            <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-2">
            <div class="avatar avatar-dk">DK</div>
            <span class="meta-text">David Kim</span>
            <span class="meta-divider">|</span>
            <span class="meta-text">Jan 15</span>
            </div>
            <span class="meta-text">&#128172; 31</span>
            </div>
            </div>
            </div>    
        </div>
    </div>
</div>
<div class="container-fluid wee mt-4">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="feature-card">
            <div class="vote-section">
            <button class="vote-btn">&#8963;</button>
            <span class="vote-count">203</span>
            </div>
            <div class="flex-grow-1">
            <div class="card-title-text">Two-factor authentication</div>
            <p class="card-desc">Support TOTP-based 2FA and hardware security keys for team accounts. This is a blocker for enterprise adoption and SOC2 compliance requirements.</p>
            <div class="d-flex gap-2 flex-wrap mb-3">
            <span class="badge-feature">&#9902; Feature</span>
            <span class="badge-progress"><span class="dot dot-orange"></span> In Progress</span>
            </div>
            <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-2">
            <div class="avatar avatar-dk">DK</div>
            <span class="meta-text">David Kim</span>
            <span class="meta-divider">|</span>
            <span class="meta-text">Jan 15</span>
            </div>
            <span class="meta-text">&#128172; 31</span>
            </div>
            </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="feature-card">
            <div class="vote-section">
            <button class="vote-btn">&#8963;</button>
            <span class="vote-count">203</span>
            </div>
            <div class="flex-grow-1">
            <div class="card-title-text">Two-factor authentication</div>
            <p class="card-desc">Support TOTP-based 2FA and hardware security keys for team accounts. This is a blocker for enterprise adoption and SOC2 compliance requirements.</p>
            <div class="d-flex gap-2 flex-wrap mb-3">
            <span class="badge-feature">&#9902; Feature</span>
            <span class="badge-progress"><span class="dot dot-orange"></span> In Progress</span>
            </div>
            <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-2">
            <div class="avatar avatar-dk">DK</div>
            <span class="meta-text">David Kim</span>
            <span class="meta-divider">|</span>
            <span class="meta-text">Jan 15</span>
            </div>
            <span class="meta-text">&#128172; 31</span>
            </div>
            </div>
            </div>    
        </div>
    </div>
</div>
<div class="container-fluid wee mt-4">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="feature-card">
            <div class="vote-section">
            <button class="vote-btn">&#8963;</button>
            <span class="vote-count">203</span>
            </div>
            <div class="flex-grow-1">
            <div class="card-title-text">Two-factor authentication</div>
            <p class="card-desc">Support TOTP-based 2FA and hardware security keys for team accounts. This is a blocker for enterprise adoption and SOC2 compliance requirements.</p>
            <div class="d-flex gap-2 flex-wrap mb-3">
            <span class="badge-feature">&#9902; Feature</span>
            <span class="badge-progress"><span class="dot dot-orange"></span> In Progress</span>
            </div>
            <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-2">
            <div class="avatar avatar-dk">DK</div>
            <span class="meta-text">David Kim</span>
            <span class="meta-divider">|</span>
            <span class="meta-text">Jan 15</span>
            </div>
            <span class="meta-text">&#128172; 31</span>
            </div>
            </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="feature-card">
            <div class="vote-section">
            <button class="vote-btn">&#8963;</button>
            <span class="vote-count">203</span>
            </div>
            <div class="flex-grow-1">
            <div class="card-title-text">Two-factor authentication</div>
            <p class="card-desc">Support TOTP-based 2FA and hardware security keys for team accounts. This is a blocker for enterprise adoption and SOC2 compliance requirements.</p>
            <div class="d-flex gap-2 flex-wrap mb-3">
            <span class="badge-feature">&#9902; Feature</span>
            <span class="badge-progress"><span class="dot dot-orange"></span> In Progress</span>
            </div>
            <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-2">
            <div class="avatar avatar-dk">DK</div>
            <span class="meta-text">David Kim</span>
            <span class="meta-divider">|</span>
            <span class="meta-text">Jan 15</span>
            </div>
            <span class="meta-text">&#128172; 31</span>
            </div>
            </div>
            </div>    
        </div>
    </div>
</div>
<div class="container-fluid wee mt-4">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="feature-card">
            <div class="vote-section">
            <button class="vote-btn">&#8963;</button>
            <span class="vote-count">203</span>
            </div>
            <div class="flex-grow-1">
            <div class="card-title-text">Two-factor authentication</div>
            <p class="card-desc">Support TOTP-based 2FA and hardware security keys for team accounts. This is a blocker for enterprise adoption and SOC2 compliance requirements.</p>
            <div class="d-flex gap-2 flex-wrap mb-3">
            <span class="badge-feature">&#9902; Feature</span>
            <span class="badge-progress"><span class="dot dot-orange"></span> In Progress</span>
            </div>
            <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-2">
            <div class="avatar avatar-dk">DK</div>
            <span class="meta-text">David Kim</span>
            <span class="meta-divider">|</span>
            <span class="meta-text">Jan 15</span>
            </div>
            <span class="meta-text">&#128172; 31</span>
            </div>
            </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="feature-card">
            <div class="vote-section">
            <button class="vote-btn">&#8963;</button>
            <span class="vote-count">203</span>
            </div>
            <div class="flex-grow-1">
            <div class="card-title-text">Two-factor authentication</div>
            <p class="card-desc">Support TOTP-based 2FA and hardware security keys for team accounts. This is a blocker for enterprise adoption and SOC2 compliance requirements.</p>
            <div class="d-flex gap-2 flex-wrap mb-3">
            <span class="badge-feature">&#9902; Feature</span>
            <span class="badge-progress"><span class="dot dot-orange"></span> In Progress</span>
            </div>
            <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-2">
            <div class="avatar avatar-dk">DK</div>
            <span class="meta-text">David Kim</span>
            <span class="meta-divider">|</span>
            <span class="meta-text">Jan 15</span>
            </div>
            <span class="meta-text">&#128172; 31</span>
            </div>
            </div>
            </div>    
        </div>
    </div>
</div>
<div class="container-fluid wee mt-4">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="feature-card">
            <div class="vote-section">
            <button class="vote-btn">&#8963;</button>
            <span class="vote-count">203</span>
            </div>
            <div class="flex-grow-1">
            <div class="card-title-text">Two-factor authentication</div>
            <p class="card-desc">Support TOTP-based 2FA and hardware security keys for team accounts. This is a blocker for enterprise adoption and SOC2 compliance requirements.</p>
            <div class="d-flex gap-2 flex-wrap mb-3">
            <span class="badge-feature">&#9902; Feature</span>
            <span class="badge-progress"><span class="dot dot-orange"></span> In Progress</span>
            </div>
            <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-2">
            <div class="avatar avatar-dk">DK</div>
            <span class="meta-text">David Kim</span>
            <span class="meta-divider">|</span>
            <span class="meta-text">Jan 15</span>
            </div>
            <span class="meta-text">&#128172; 31</span>
            </div>
            </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="feature-card">
            <div class="vote-section">
            <button class="vote-btn">&#8963;</button>
            <span class="vote-count">203</span>
            </div>
            <div class="flex-grow-1">
            <div class="card-title-text">Two-factor authentication</div>
            <p class="card-desc">Support TOTP-based 2FA and hardware security keys for team accounts. This is a blocker for enterprise adoption and SOC2 compliance requirements.</p>
            <div class="d-flex gap-2 flex-wrap mb-3">
            <span class="badge-feature">&#9902; Feature</span>
            <span class="badge-progress"><span class="dot dot-orange"></span> In Progress</span>
            </div>
            <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-2">
            <div class="avatar avatar-dk">DK</div>
            <span class="meta-text">David Kim</span>
            <span class="meta-divider">|</span>
            <span class="meta-text">Jan 15</span>
            </div>
            <span class="meta-text">&#128172; 31</span>
            </div>
            </div>
            </div>    
        </div>
    </div>
</div>
<div class="container-fluid wee mt-4 mb-5">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="feature-card">
            <div class="vote-section">
            <button class="vote-btn">&#8963;</button>
            <span class="vote-count">203</span>
            </div>
            <div class="flex-grow-1">
            <div class="card-title-text">Two-factor authentication</div>
            <p class="card-desc">Support TOTP-based 2FA and hardware security keys for team accounts. This is a blocker for enterprise adoption and SOC2 compliance requirements.</p>
            <div class="d-flex gap-2 flex-wrap mb-3">
            <span class="badge-feature">&#9902; Feature</span>
            <span class="badge-progress"><span class="dot dot-orange"></span> In Progress</span>
            </div>
            <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-2">
            <div class="avatar avatar-dk">DK</div>
            <span class="meta-text">David Kim</span>
            <span class="meta-divider">|</span>
            <span class="meta-text">Jan 15</span>
            </div>
            <span class="meta-text">&#128172; 31</span>
            </div>
            </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="feature-card">
            <div class="vote-section">
            <button class="vote-btn">&#8963;</button>
            <span class="vote-count">203</span>
            </div>
            <div class="flex-grow-1">
            <div class="card-title-text">Two-factor authentication</div>
            <p class="card-desc">Support TOTP-based 2FA and hardware security keys for team accounts. This is a blocker for enterprise adoption and SOC2 compliance requirements.</p>
            <div class="d-flex gap-2 flex-wrap mb-3">
            <span class="badge-feature">&#9902; Feature</span>
            <span class="badge-progress"><span class="dot dot-orange"></span> In Progress</span>
            </div>
            <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-2">
            <div class="avatar avatar-dk">DK</div>
            <span class="meta-text">David Kim</span>
            <span class="meta-divider">|</span>
            <span class="meta-text">Jan 15</span>
            </div>
            <span class="meta-text">&#128172; 31</span>
            </div>
            </div>
            </div>    
        </div>
    </div>
</div> -->