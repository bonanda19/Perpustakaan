<div class="bgside border-end " id="sidebar-wrapper">
    <button class="toggleclose" id="sidebarToggleClose">Close</button>
      <div class="logo">
          <img class="img" src="../image/dprd.png" />
          <div class="jd">Perpustakaan DPRD<br/>Sumatera Selatan</div>
        </div>
     
      <div class="sidebar list-group">
          <a class="{{ ($title === 'Dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">Dashboard</a>
          <a class="{{ ($title === 'Upload Buku') ? 'active' : '' }}" href="{{ route('createbuku') }}">Upload buku</a>
          <a class="{{ ($title === 'Tambah Jilid') ? 'active' : '' }}" href="{{ route('dashboardjilid') }}">Tambah Jilid Buku</a>
          <a class="{{ ($title === 'Login Admin') ? 'active' : '' }}" href="/logout">Logout</a>
          
        </div>
  </div>