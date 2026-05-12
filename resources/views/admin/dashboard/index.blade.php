<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  :root {
    --primary: #4CB6B6;
    --deep-primary: #35a6a6;
    --secondary: #EAF6F6;
    --light: #F6FBFB;
    --dark: #2C3E50;
    --border: #dfdfdf;
    --muted: #6c757d;
    --white: #ffffff;
    --sidebar-w: 200px;
    --header-h: 54px;
  }

  #ap {
    display: flex;
    height: 600px;
    font-family: 'Segoe UI', system-ui, sans-serif;
    background: var(--light);
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid var(--border);
    font-size: 13px;
  }

  .sidebar {
    width: var(--sidebar-w);
    background: var(--white);
    border-right: 1px solid var(--border);
    display: flex;
    flex-direction: column;
    flex-shrink: 0;
  }

  .sidebar-logo {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 16px 18px;
    border-bottom: 1px solid var(--border);
    height: var(--header-h);
  }

  .logo-icon {
    width: 28px;
    height: 28px;
    background: var(--primary);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 14px;
    font-weight: 700;
  }

  .logo-text {
    font-weight: 700;
    font-size: 14px;
    color: var(--dark);
  }

  .nav {
    flex: 1;
    padding: 12px 0;
  }

  .nav-label {
    font-size: 10px;
    font-weight: 600;
    color: var(--muted);
    text-transform: uppercase;
    letter-spacing: 0.8px;
    padding: 10px 18px 4px;
  }

  .nav-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 9px 18px;
    color: var(--muted);
    cursor: pointer;
    border-radius: 0;
    transition: all 0.15s;
    border-left: 3px solid transparent;
    font-size: 13px;
    font-weight: 500;
  }

  .nav-item:hover {
    background: var(--secondary);
    color: var(--primary);
  }

  .nav-item.active {
    background: var(--secondary);
    color: var(--primary);
    border-left: 3px solid var(--primary);
    font-weight: 600;
  }

  .nav-item i {
    font-size: 16px;
    width: 18px;
  }

  .nav-badge {
    margin-left: auto;
    background: var(--primary);
    color: #fff;
    font-size: 10px;
    border-radius: 10px;
    padding: 1px 6px;
    font-weight: 700;
  }

  .main {
    flex: 1;
    display: flex;
    flex-direction: column;
    overflow: hidden;
  }

  .header {
    height: var(--header-h);
    background: var(--white);
    border-bottom: 1px solid var(--border);
    display: flex;
    align-items: center;
    padding: 0 20px;
    gap: 12px;
    flex-shrink: 0;
  }

  .header-title {
    font-size: 16px;
    font-weight: 700;
    color: var(--dark);
    flex: 1;
  }

  .header-search {
    display: flex;
    align-items: center;
    gap: 8px;
    background: var(--light);
    border: 1px solid var(--border);
    border-radius: 8px;
    padding: 6px 12px;
    width: 180px;
  }

  .header-search input {
    border: none;
    background: transparent;
    outline: none;
    font-size: 12px;
    color: var(--dark);
    width: 100%;
  }

  .header-search i {
    color: var(--muted);
    font-size: 14px;
  }

  .btn-primary {
    background: var(--primary);
    color: #fff;
    border: none;
    border-radius: 8px;
    padding: 7px 14px;
    font-size: 12px;
    font-weight: 600;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 6px;
  }

  .btn-ghost {
    background: transparent;
    border: 1px solid var(--border);
    border-radius: 8px;
    padding: 7px 10px;
    cursor: pointer;
    color: var(--muted);
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 12px;
  }

  .notif-btn {
    position: relative;
    background: var(--light);
    border: 1px solid var(--border);
    border-radius: 8px;
    width: 34px;
    height: 34px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    color: var(--dark);
  }

  .notif-dot {
    position: absolute;
    top: 4px;
    right: 4px;
    width: 8px;
    height: 8px;
    background: #e74c3c;
    border-radius: 50%;
    border: 2px solid #fff;
  }

  .avatar {
    width: 32px;
    height: 32px;
    background: var(--deep-primary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 12px;
    font-weight: 700;
    cursor: pointer;
  }

  .content {
    flex: 1;
    overflow-y: auto;
    padding: 20px;
  }

  .page {
    display: none;
  }

  .page.active {
    display: block;
  }

  .stats-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 14px;
    margin-bottom: 20px;
  }

  .stat-card {
    background: var(--white);
    border-radius: 10px;
    border: 1px solid var(--border);
    padding: 14px 16px;
  }

  .stat-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 8px;
  }

  .stat-label {
    font-size: 11px;
    color: var(--muted);
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }

  .stat-icon {
    width: 30px;
    height: 30px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
  }

  .stat-icon.teal {
    background: var(--secondary);
    color: var(--primary);
  }

  .stat-icon.orange {
    background: #FEF3E2;
    color: #f39c12;
  }

  .stat-icon.red {
    background: #FEE8E8;
    color: #e74c3c;
  }

  .stat-value {
    font-size: 24px;
    font-weight: 700;
    color: var(--dark);
    line-height: 1;
  }

  .stat-sub {
    font-size: 11px;
    color: #27ae60;
    margin-top: 4px;
    display: flex;
    align-items: center;
    gap: 4px;
  }

  .two-col {
    display: grid;
    grid-template-columns: 1fr 300px;
    gap: 14px;
  }

  .card {
    background: var(--white);
    border-radius: 10px;
    border: 1px solid var(--border);
    padding: 16px;
  }

  .card-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 14px;
  }

  .card-title {
    font-size: 13px;
    font-weight: 700;
    color: var(--dark);
  }

  .card-link {
    font-size: 11px;
    color: var(--primary);
    cursor: pointer;
    font-weight: 600;
  }

  .chart-wrap {
    height: 140px;
    display: flex;
    align-items: flex-end;
    gap: 6px;
    padding-top: 10px;
  }

  .bar-group {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 4px;
    flex: 1;
  }

  .bar {
    width: 100%;
    border-radius: 4px 4px 0 0;
    background: var(--secondary);
    transition: background 0.2s;
    cursor: pointer;
    min-height: 4px;
  }

  .bar:hover {
    background: var(--primary);
  }

  .bar.active {
    background: var(--primary);
  }

  .bar-lbl {
    font-size: 9px;
    color: var(--muted);
  }

  .quick-actions {
    display: flex;
    flex-direction: column;
    gap: 8px;
  }

  .qa-btn {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 12px;
    border-radius: 8px;
    border: 1px solid var(--border);
    background: var(--light);
    cursor: pointer;
    font-size: 12px;
    font-weight: 600;
    color: var(--dark);
    transition: all 0.15s;
  }

  .qa-btn:hover {
    background: var(--secondary);
    border-color: var(--primary);
    color: var(--primary);
  }

  .qa-btn i {
    font-size: 16px;
    color: var(--primary);
  }

  .activity-list {
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .activity-item {
    display: flex;
    align-items: flex-start;
    gap: 10px;
  }

  .act-dot {
    width: 28px;
    height: 28px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    flex-shrink: 0;
  }

  .act-info {
    flex: 1;
  }

  .act-info p {
    font-size: 12px;
    color: var(--dark);
    font-weight: 500;
  }

  .act-info span {
    font-size: 11px;
    color: var(--muted);
  }

  .table-wrap {
    overflow-x: auto;
  }

  table {
    width: 100%;
    border-collapse: collapse;
  }

  th {
    font-size: 11px;
    font-weight: 600;
    color: var(--muted);
    text-transform: uppercase;
    letter-spacing: 0.5px;
    border-bottom: 1px solid var(--border);
    padding: 8px 10px;
    text-align: left;
    white-space: nowrap;
  }

  td {
    padding: 10px 10px;
    border-bottom: 1px solid #f4f4f4;
    font-size: 12px;
    color: var(--dark);
    vertical-align: middle;
  }

  tr:last-child td {
    border-bottom: none;
  }

  tr:hover td {
    background: var(--light);
  }

  .badge {
    display: inline-flex;
    align-items: center;
    padding: 3px 10px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
  }

  .badge.published {
    background: #EAFAF1;
    color: #1e8449;
  }

  .badge.draft {
    background: #FEF9E7;
    color: #9a7d0a;
  }

  .badge.pending {
    background: #EEF0F5;
    color: #555;
  }

  .proj-thumb {
    width: 34px;
    height: 34px;
    border-radius: 6px;
    object-fit: cover;
    background: var(--secondary);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    color: var(--primary);
  }

  .actions-cell {
    display: flex;
    gap: 6px;
  }

  .action-lnk {
    font-size: 11px;
    font-weight: 600;
    cursor: pointer;
  }

  .action-lnk.edit {
    color: var(--primary);
  }

  .action-lnk.del {
    color: #e74c3c;
  }

  .action-lnk.prev {
    color: var(--muted);
  }

  .search-bar {
    display: flex;
    align-items: center;
    gap: 8px;
    background: var(--white);
    border: 1px solid var(--border);
    border-radius: 8px;
    padding: 7px 12px;
  }

  .search-bar input {
    border: none;
    background: transparent;
    outline: none;
    font-size: 12px;
    color: var(--dark);
    width: 160px;
  }

  .filter-row {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 14px;
    flex-wrap: wrap;
  }

  .filter-select {
    border: 1px solid var(--border);
    border-radius: 8px;
    padding: 6px 10px;
    font-size: 12px;
    color: var(--dark);
    background: var(--white);
    outline: none;
    cursor: pointer;
  }

  .msg-layout {
    display: grid;
    grid-template-columns: 220px 1fr 200px;
    gap: 0;
    height: 100%;
  }

  .msg-list {
    border-right: 1px solid var(--border);
    overflow-y: auto;
    background: var(--white);
  }

  .msg-list-header {
    padding: 12px 14px;
    border-bottom: 1px solid var(--border);
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .msg-item {
    padding: 10px 14px;
    border-bottom: 1px solid #f4f4f4;
    cursor: pointer;
    display: flex;
    align-items: flex-start;
    gap: 10px;
    transition: background 0.15s;
  }

  .msg-item:hover,
  .msg-item.active {
    background: var(--secondary);
  }

  .msg-av {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: 700;
    flex-shrink: 0;
  }

  .msg-info {
    flex: 1;
    min-width: 0;
  }

  .msg-info .name {
    font-size: 12px;
    font-weight: 600;
    color: var(--dark);
  }

  .msg-info .preview {
    font-size: 11px;
    color: var(--muted);
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    margin-top: 2px;
  }

  .msg-time {
    font-size: 10px;
    color: var(--muted);
    white-space: nowrap;
  }

  .chat-area {
    display: flex;
    flex-direction: column;
    background: var(--light);
  }

  .chat-header {
    padding: 12px 16px;
    background: var(--white);
    border-bottom: 1px solid var(--border);
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .chat-body {
    flex: 1;
    overflow-y: auto;
    padding: 14px 16px;
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .bubble {
    max-width: 75%;
    padding: 8px 12px;
    border-radius: 10px;
    font-size: 12px;
    line-height: 1.5;
  }

  .bubble.them {
    background: var(--white);
    color: var(--dark);
    border: 1px solid var(--border);
    align-self: flex-start;
    border-radius: 4px 10px 10px 10px;
  }

  .bubble.me {
    background: var(--primary);
    color: #fff;
    align-self: flex-end;
    border-radius: 10px 4px 10px 10px;
  }

  .chat-footer {
    padding: 10px 14px;
    background: var(--white);
    border-top: 1px solid var(--border);
    display: flex;
    gap: 10px;
    align-items: center;
  }

  .chat-footer input {
    flex: 1;
    border: 1px solid var(--border);
    border-radius: 8px;
    padding: 8px 12px;
    font-size: 12px;
    outline: none;
    background: var(--light);
  }

  .contact-panel {
    border-left: 1px solid var(--border);
    background: var(--white);
    padding: 16px;
    display: flex;
    flex-direction: column;
    gap: 12px;
    overflow-y: auto;
  }

  .contact-av-big {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    font-weight: 700;
    margin: 0 auto 6px;
  }

  .contact-name {
    text-align: center;
    font-weight: 700;
    font-size: 14px;
    color: var(--dark);
  }

  .contact-role {
    text-align: center;
    font-size: 11px;
    color: var(--muted);
  }

  .contact-info {
    border-top: 1px solid var(--border);
    padding-top: 12px;
    display: flex;
    flex-direction: column;
    gap: 8px;
  }

  .contact-row {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 12px;
    color: var(--dark);
  }

  .contact-row i {
    color: var(--primary);
    font-size: 14px;
    width: 16px;
  }

  .form-group {
    margin-bottom: 14px;
  }

  .form-label {
    font-size: 12px;
    font-weight: 600;
    color: var(--dark);
    margin-bottom: 5px;
    display: block;
  }

  .form-input {
    width: 100%;
    border: 1px solid var(--border);
    border-radius: 8px;
    padding: 8px 12px;
    font-size: 12px;
    color: var(--dark);
    outline: none;
    background: var(--white);
  }

  .form-input:focus {
    border-color: var(--primary);
    box-shadow: 0 0 0 3px var(--secondary);
  }

  .form-textarea {
    width: 100%;
    border: 1px solid var(--border);
    border-radius: 8px;
    padding: 8px 12px;
    font-size: 12px;
    color: var(--dark);
    outline: none;
    background: var(--white);
    resize: vertical;
    min-height: 80px;
    font-family: inherit;
  }

  .form-textarea:focus {
    border-color: var(--primary);
  }

  .upload-zone {
    border: 2px dashed var(--border);
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    cursor: pointer;
    background: var(--light);
    transition: all 0.15s;
  }

  .upload-zone:hover {
    border-color: var(--primary);
    background: var(--secondary);
  }

  .upload-zone i {
    font-size: 24px;
    color: var(--muted);
    display: block;
    margin-bottom: 6px;
  }

  .upload-zone p {
    font-size: 12px;
    color: var(--muted);
  }

  .two-col-form {
    display: grid;
    grid-template-columns: 1fr 280px;
    gap: 16px;
  }
</style>

<div id="ap">
  <aside class="sidebar">
    <div class="sidebar-logo">
      <div class="logo-icon">P</div>
      <span class="logo-text">PortAdmin</span>
    </div>
    <nav class="nav">
      <div class="nav-label">মেনু</div>
      <div class="nav-item active" onclick="showPage('dashboard',this)">
        <i class="ti ti-layout-dashboard" aria-hidden="true"></i> Dashboard
      </div>
      <div class="nav-item" onclick="showPage('projects',this)">
        <i class="ti ti-folder" aria-hidden="true"></i> Projects
      </div>
      <div class="nav-item" onclick="showPage('services',this)">
        <i class="ti ti-tool" aria-hidden="true"></i> Services
      </div>
      <div class="nav-item" onclick="showPage('blog',this)">
        <i class="ti ti-file-text" aria-hidden="true"></i> Blog
      </div>
      <div class="nav-item" onclick="showPage('messages',this)">
        <i class="ti ti-message-circle" aria-hidden="true"></i> Messages
        <span class="nav-badge">3</span>
      </div>
      <div class="nav-label">সিস্টেম</div>
      <div class="nav-item" onclick="showPage('settings',this)">
        <i class="ti ti-settings" aria-hidden="true"></i> Settings
      </div>
    </nav>
    <div style="padding:14px 18px; border-top: 1px solid var(--border);">
      <div style="display:flex;align-items:center;gap:10px;">
        <div class="avatar">AA</div>
        <div>
          <div style="font-size:12px;font-weight:700;color:var(--dark);">Admin</div>
          <div style="font-size:11px;color:var(--muted);">Super Admin</div>
        </div>
      </div>
    </div>
  </aside>

  <main class="main">
    <header class="header">
      <span class="header-title" id="page-title">Dashboard</span>
      <div class="header-search">
        <i class="ti ti-search" aria-hidden="true"></i>
        <input type="text" placeholder="Search...">
      </div>
      <div class="notif-btn"><i class="ti ti-bell" aria-hidden="true"></i><span class="notif-dot"></span></div>
      <div class="avatar">AA</div>
      <span style="font-size:12px;font-weight:600;color:var(--dark);">Admin Admin</span>
      <i class="ti ti-chevron-down" style="color:var(--muted);font-size:14px;" aria-hidden="true"></i>
    </header>

    <div class="content">

      <!-- DASHBOARD -->
      <div class="page active" id="page-dashboard">
        <div class="stats-grid">
          <div class="stat-card">
            <div class="stat-top">
              <span class="stat-label">Total Projects</span>
              <div class="stat-icon teal"><i class="ti ti-folder" aria-hidden="true"></i></div>
            </div>
            <div class="stat-value">240</div>
            <div class="stat-sub"><i class="ti ti-trending-up" style="font-size:11px" aria-hidden="true"></i> +12% এই
              মাসে</div>
          </div>
          <div class="stat-card">
            <div class="stat-top">
              <span class="stat-label">Website Visits</span>
              <div class="stat-icon orange"><i class="ti ti-eye" aria-hidden="true"></i></div>
            </div>
            <div class="stat-value">18.4k</div>
            <div class="stat-sub"><i class="ti ti-trending-up" style="font-size:11px" aria-hidden="true"></i> +8.2% এই
              মাসে</div>
          </div>
          <div class="stat-card">
            <div class="stat-top">
              <span class="stat-label">New Messages</span>
              <div class="stat-icon red"><i class="ti ti-message-circle" aria-hidden="true"></i></div>
            </div>
            <div class="stat-value">2</div>
            <div class="stat-sub"><i class="ti ti-point" style="font-size:11px;color:#e74c3c" aria-hidden="true"></i>
              অপেক্ষায় আছে</div>
          </div>
        </div>

        <div class="two-col">
          <div>
            <div class="card" style="margin-bottom:14px;">
              <div class="card-header">
                <span class="card-title">Monthly Website Traffic</span>
                <select class="filter-select" style="font-size:11px;padding:4px 8px;">
                  <option>Last Monthly</option>
                  <option>Last 3 Months</option>
                  <option>Last Year</option>
                </select>
              </div>
              <div class="chart-wrap" id="bar-chart"></div>
            </div>

            <div class="card">
              <div class="card-header">
                <span class="card-title">Recent Activity</span>
                <span class="card-link">See all</span>
              </div>
              <div class="activity-list">
                <div class="activity-item">
                  <div class="act-dot" style="background:var(--secondary);color:var(--primary);"><i class="ti ti-plus"
                      style="font-size:12px"></i></div>
                  <div class="act-info">
                    <p>Add new <strong>blog post</strong> on feed</p><span>17 hours ago</span>
                  </div>
                </div>
                <div class="activity-item">
                  <div class="act-dot" style="background:#FEF9E7;color:#f39c12;"><i class="ti ti-refresh"
                      style="font-size:12px"></i></div>
                  <div class="act-info">
                    <p>Read new actions <strong>Project</strong></p><span>11 hours ago</span>
                  </div>
                </div>
                <div class="activity-item">
                  <div class="act-dot" style="background:#EAFAF1;color:#27ae60;"><i class="ti ti-check"
                      style="font-size:12px"></i></div>
                  <div class="act-info">
                    <p>Read new <strong>blog post</strong></p><span>11 hours ago</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header"><span class="card-title">Quick Actions</span></div>
            <div class="quick-actions">
              <div class="qa-btn" onclick="showPage('projects',document.querySelector('[onclick*=projects]'))">
                <i class="ti ti-plus" aria-hidden="true"></i> Add New Project
              </div>
              <div class="qa-btn" onclick="showPage('blog',document.querySelector('[onclick*=blog]'))">
                <i class="ti ti-pencil" aria-hidden="true"></i> Write Blog Post
              </div>
              <div class="qa-btn">
                <i class="ti ti-file" aria-hidden="true"></i> Write Blog Post
              </div>
              <div class="qa-btn">
                <i class="ti ti-edit" aria-hidden="true"></i> Edit Project
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PROJECTS -->
      <div class="page" id="page-projects">
        <div class="two-col-form">
          <div>
            <div class="filter-row">
              <div class="search-bar">
                <i class="ti ti-search" style="color:var(--muted);font-size:14px" aria-hidden="true"></i>
                <input type="text" placeholder="Search projects...">
              </div>
              <select class="filter-select">
                <option>By Category</option>
                <option>Web</option>
                <option>Mobile</option>
              </select>
              <select class="filter-select">
                <option>Status</option>
                <option>Published</option>
                <option>Draft</option>
              </select>
              <select class="filter-select">
                <option>By Client</option>
              </select>
            </div>
            <div class="card" style="padding:0;overflow:hidden;">
              <div class="table-wrap">
                <table>
                  <thead>
                    <tr>
                      <th><input type="checkbox"></th>
                      <th>Project Name</th>
                      <th>Client</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody id="projects-tbody"></tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header"><span class="card-title">Add New Project</span></div>
            <div class="form-group">
              <label class="form-label">Project Title</label>
              <input class="form-input" type="text" placeholder="Project Project">
            </div>
            <div class="form-group">
              <label class="form-label">Description</label>
              <textarea class="form-textarea" placeholder="Enter project for meta and description..."></textarea>
            </div>
            <div class="form-group">
              <label class="form-label">Media Upload</label>
              <div class="upload-zone">
                <i class="ti ti-upload" aria-hidden="true"></i>
                <p>Upload media</p>
              </div>
            </div>
            <button class="btn-primary" style="width:100%;justify-content:center;">
              <i class="ti ti-check" aria-hidden="true"></i> Upload
            </button>
          </div>
        </div>
      </div>

      <!-- SERVICES -->
      <div class="page" id="page-services">
        <div class="card">
          <div class="card-header">
            <span class="card-title">Services</span>
            <button class="btn-primary"><i class="ti ti-plus" aria-hidden="true"></i> Add Service</button>
          </div>
          <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin-top:4px;">
            <div class="stat-card" style="border-left:3px solid var(--primary);">
              <div class="stat-icon teal" style="margin-bottom:8px;"><i class="ti ti-code" aria-hidden="true"></i></div>
              <div style="font-weight:700;font-size:13px;color:var(--dark);margin-bottom:4px;">Web Development</div>
              <div style="font-size:11px;color:var(--muted);">Frontend & Backend solutions</div>
              <div style="margin-top:10px;display:flex;gap:8px;">
                <span class="action-lnk edit">Edit</span>
                <span class="action-lnk del">Delete</span>
              </div>
            </div>
            <div class="stat-card" style="border-left:3px solid #f39c12;">
              <div class="stat-icon orange" style="margin-bottom:8px;"><i class="ti ti-device-mobile"
                  aria-hidden="true"></i></div>
              <div style="font-weight:700;font-size:13px;color:var(--dark);margin-bottom:4px;">Mobile Apps</div>
              <div style="font-size:11px;color:var(--muted);">iOS & Android Development</div>
              <div style="margin-top:10px;display:flex;gap:8px;">
                <span class="action-lnk edit">Edit</span>
                <span class="action-lnk del">Delete</span>
              </div>
            </div>
            <div class="stat-card" style="border-left:3px solid #9b59b6;">
              <div class="stat-icon" style="background:#F3E8FF;color:#9b59b6;margin-bottom:8px;"><i
                  class="ti ti-palette" aria-hidden="true"></i></div>
              <div style="font-weight:700;font-size:13px;color:var(--dark);margin-bottom:4px;">UI/UX Design</div>
              <div style="font-size:11px;color:var(--muted);">Creative interface design</div>
              <div style="margin-top:10px;display:flex;gap:8px;">
                <span class="action-lnk edit">Edit</span>
                <span class="action-lnk del">Delete</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- BLOG -->
      <div class="page" id="page-blog">
        <div class="filter-row">
          <div class="search-bar">
            <i class="ti ti-search" style="color:var(--muted);font-size:14px" aria-hidden="true"></i>
            <input type="text" placeholder="Search posts...">
          </div>
          <button class="btn-primary"><i class="ti ti-plus" aria-hidden="true"></i> New Post</button>
        </div>
        <div class="card" style="padding:0;overflow:hidden;">
          <table>
            <thead>
              <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Date</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Getting Started with React</strong></td>
                <td>Admin</td>
                <td>29-01-2021</td>
                <td><span class="badge published">Published</span></td>
                <td>
                  <div class="actions-cell"><span class="action-lnk edit">Edit</span><span
                      class="action-lnk del">Delete</span></div>
                </td>
              </tr>
              <tr>
                <td><strong>Top UI Design Trends 2024</strong></td>
                <td>Admin</td>
                <td>15-03-2021</td>
                <td><span class="badge draft">Draft</span></td>
                <td>
                  <div class="actions-cell"><span class="action-lnk edit">Edit</span><span
                      class="action-lnk del">Delete</span></div>
                </td>
              </tr>
              <tr>
                <td><strong>Node.js Best Practices</strong></td>
                <td>Admin</td>
                <td>22-04-2021</td>
                <td><span class="badge published">Published</span></td>
                <td>
                  <div class="actions-cell"><span class="action-lnk edit">Edit</span><span
                      class="action-lnk del">Delete</span></div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- MESSAGES -->
      <div class="page" id="page-messages">
        <div
          style="height:480px;display:grid;grid-template-columns:220px 1fr 190px;border-radius:10px;overflow:hidden;border:1px solid var(--border);">
          <div style="background:var(--white);border-right:1px solid var(--border);display:flex;flex-direction:column;">
            <div
              style="padding:10px 12px;border-bottom:1px solid var(--border);display:flex;align-items:center;justify-content:space-between;">
              <span style="font-weight:700;font-size:13px;color:var(--dark);">Messages</span>
              <i class="ti ti-pencil" style="color:var(--muted);font-size:15px;cursor:pointer;" aria-hidden="true"></i>
            </div>
            <div style="padding:8px 12px;border-bottom:1px solid var(--border);">
              <div class="search-bar" style="border-radius:6px;padding:5px 10px;">
                <i class="ti ti-search" style="color:var(--muted);font-size:13px" aria-hidden="true"></i>
                <input type="text" placeholder="Search..." style="font-size:11px;">
              </div>
            </div>
            <div style="overflow-y:auto;flex:1;" id="msg-list"></div>
          </div>
          <div style="display:flex;flex-direction:column;background:var(--light);">
            <div
              style="padding:10px 14px;background:var(--white);border-bottom:1px solid var(--border);display:flex;align-items:center;gap:10px;">
              <div class="msg-av" style="background:var(--secondary);color:var(--primary);">SN</div>
              <div>
                <div style="font-weight:700;font-size:12px;color:var(--dark);">Sender Name</div>
                <div style="font-size:11px;color:var(--muted);">Recent inquiry</div>
              </div>
              <div style="margin-left:auto;display:flex;gap:8px;">
                <i class="ti ti-phone" style="color:var(--muted);font-size:16px;cursor:pointer;" aria-hidden="true"></i>
                <i class="ti ti-dots" style="color:var(--muted);font-size:16px;cursor:pointer;" aria-hidden="true"></i>
              </div>
            </div>
            <div style="flex:1;overflow-y:auto;padding:14px;display:flex;flex-direction:column;gap:10px;">
              <div class="bubble them">Hi, Sienem. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
              <div class="bubble me">Not message!</div>
            </div>
            <div
              style="padding:10px 12px;background:var(--white);border-top:1px solid var(--border);display:flex;gap:8px;align-items:center;">
              <input class="form-input" type="text" placeholder="Reply your message..."
                style="font-size:12px;padding:7px 12px;">
              <button class="btn-ghost">Cancel</button>
              <button class="btn-primary">Reply</button>
            </div>
          </div>
          <div style="background:var(--white);border-left:1px solid var(--border);padding:16px;overflow-y:auto;">
            <div style="text-align:center;margin-bottom:12px;">
              <div class="contact-av-big"
                style="background:var(--secondary);color:var(--primary);width:50px;height:50px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:18px;font-weight:700;margin:0 auto 8px;">
                SN</div>
              <div style="font-weight:700;font-size:13px;color:var(--dark);">Sender Name</div>
              <div style="font-size:11px;color:var(--muted);">Confuser</div>
            </div>
            <div style="border-top:1px solid var(--border);padding-top:12px;">
              <div
                style="font-size:11px;font-weight:700;color:var(--muted);text-transform:uppercase;letter-spacing:0.5px;margin-bottom:10px;">
                Contact</div>
              <div style="display:flex;flex-direction:column;gap:8px;">
                <div style="display:flex;align-items:center;gap:8px;font-size:11px;color:var(--dark);"><i
                    class="ti ti-phone" style="color:var(--primary);font-size:13px;" aria-hidden="true"></i>+1123 456
                  7898</div>
                <div style="display:flex;align-items:center;gap:8px;font-size:11px;color:var(--dark);"><i
                    class="ti ti-phone" style="color:var(--primary);font-size:13px;" aria-hidden="true"></i>+1 1523 456
                  7890</div>
                <div style="display:flex;align-items:center;gap:8px;font-size:11px;color:var(--dark);"><i
                    class="ti ti-mail" style="color:var(--primary);font-size:13px;"
                    aria-hidden="true"></i>sonrian@gmail.com</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- SETTINGS -->
      <div class="page" id="page-settings">
        <div style="max-width:560px;">
          <div class="card" style="margin-bottom:14px;">
            <div class="card-header"><span class="card-title">Profile Settings</span></div>
            <div class="form-group">
              <label class="form-label">Full Name</label>
              <input class="form-input" type="text" value="Admin Admin">
            </div>
            <div class="form-group">
              <label class="form-label">Email Address</label>
              <input class="form-input" type="email" value="admin@example.com">
            </div>
            <div class="form-group">
              <label class="form-label">Profile Photo</label>
              <div class="upload-zone" style="padding:14px;">
                <i class="ti ti-user-circle" aria-hidden="true"></i>
                <p>Upload photo</p>
              </div>
            </div>
            <button class="btn-primary">Save Changes</button>
          </div>
          <div class="card">
            <div class="card-header"><span class="card-title">Change Password</span></div>
            <div class="form-group">
              <label class="form-label">Current Password</label>
              <input class="form-input" type="password" placeholder="••••••••">
            </div>
            <div class="form-group">
              <label class="form-label">New Password</label>
              <input class="form-input" type="password" placeholder="••••••••">
            </div>
            <button class="btn-primary">Update Password</button>
          </div>
        </div>
      </div>

    </div>
  </main>
</div>

<script>
  const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
  const vals = [120, 95, 160, 140, 180, 200, 155, 175, 190, 130, 210, 195];
  const maxV = Math.max(...vals);
  const chart = document.getElementById('bar-chart');
  months.forEach((m, i) => {
    const h = Math.round((vals[i] / maxV) * 120);
    const g = document.createElement('div');
    g.className = 'bar-group';
    g.innerHTML = `<div class="bar${i === 10 ? ' active' : ''}" style="height:${h}px;"></div><span class="bar-lbl">${m}</span>`;
    chart.appendChild(g);
  });

  const projects = [
    { name: 'Portfolio Project', client: 'Kamtile', date: '29-01-2021', status: 'published' },
    { name: 'Portfolio Neck Steck', client: 'Apartmmon', date: '29-04-2021', status: 'published' },
    { name: 'Portfolio Nash Kosties', client: 'Apartmmon', date: '19-04-2021', status: 'published' },
    { name: 'Project Project', client: 'Berosha', date: '24-01-2021', status: 'draft' },
    { name: 'Project Name', client: 'Patotile', date: '29-01-2021', status: 'published' },
    { name: 'Portfolio Name', client: 'Consulteam', date: '29-01-2021', status: 'draft' },
  ];
  const tbody = document.getElementById('projects-tbody');
  const icons = ['📁', '🎨', '🖼️', '💼', '📊', '🗂️'];
  projects.forEach((p, i) => {
    tbody.innerHTML += `<tr>
    <td><input type="checkbox"></td>
    <td><div style="display:flex;align-items:center;gap:8px;">
      <div class="proj-thumb">${icons[i]}</div>
      <div><div style="font-weight:600;">${p.name}</div></div>
    </div></td>
    <td style="color:var(--muted);">${p.client}</td>
    <td style="color:var(--muted);">${p.date}</td>
    <td><span class="badge ${p.status}">${p.status === 'published' ? 'Published' : 'Draft'}</span></td>
    <td><div class="actions-cell"><span class="action-lnk edit">Edit</span><span class="action-lnk del">Delete</span><span class="action-lnk prev">Preview</span></div></td>
  </tr>`;
  });

  const senders = [
    { initials: 'SN', name: 'Sender Name', preview: 'Recent inquiry message?', time: '12:33 AM', bg: '#EAF6F6', c: '#4CB6B6', active: true },
    { initials: 'SS', name: 'Sarimt Steman', preview: 'What is other project foresom...', time: '13:35 AM', bg: '#FEF3E2', c: '#f39c12', active: false },
    { initials: 'DB', name: 'Denis Baker', preview: 'What ifo soncsetem?', time: '12:23 AM', bg: '#EAFAF1', c: '#27ae60', active: false },
    { initials: 'MA', name: 'Marisia Allam', preview: 'Wiveks caresses of the string you...', time: '19:35 AM', bg: '#F3E8FF', c: '#9b59b6', active: false },
    { initials: 'JR', name: 'Joha Raam', preview: 'Hello, convenator?', time: '19:39 PM', bg: '#FEE8E8', c: '#e74c3c', active: false },
  ];
  const ml = document.getElementById('msg-list');
  senders.forEach(s => {
    ml.innerHTML += `<div class="msg-item${s.active ? ' active' : ''}">
    <div class="msg-av" style="background:${s.bg};color:${s.c};">${s.initials}</div>
    <div class="msg-info"><div class="name">${s.name}</div><div class="preview">${s.preview}</div></div>
    <span class="msg-time">${s.time}</span>
  </div>`;
  });

  function showPage(id, el) {
    document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
    document.querySelectorAll('.nav-item').forEach(n => n.classList.remove('active'));
    document.getElementById('page-' + id).classList.add('active');
    if (el) el.classList.add('active');
    const titles = { dashboard: 'Dashboard', projects: 'Projects', services: 'Services', blog: 'Blog', messages: 'Messages', settings: 'Settings' };
    document.getElementById('page-title').textContent = titles[id] || id;
  }
</script>
