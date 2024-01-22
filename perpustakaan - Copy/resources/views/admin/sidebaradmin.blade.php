<div class="bgside border-end " id="sidebar-wrapper">
    <button class="toggleclose" id="sidebarToggleClose">Close</button>
      <div class="logo">
          <img class="img" src="../image/dprd.png" />
          <div class="jd">Perpustakaan DPRD<br/>Sumatera Selatan</div>
        </div>
     
      <div class="sidebar list-group">
          <a class="{{ ($title === 'Home') ? 'active' : '' }}" href="{{ route('dashboard') }}">dashboard</a>
          <a class="{{ ($title === 'Upload Buku') ? 'active' : '' }}" href="{{ route('createbuku') }}">Upload buku</a>
          <a class="{{ ($title === 'Login Admin') ? 'active' : '' }}" href="/logout">Logout</a>
          
        </div>
  </div>