@extends('partials.app')
@section('content')

<body>
    <div class=" d-flex" id="wrapper">
      
        <!-- Sidebar-->
        @include('partials.sidebar')
        {{-- end sidebar --}}

        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
              
                {{-- menu button --}}
                  <div class="container-fluid" id="buttonMenu ">
                      <button class="btn btn-success mt-3" id="sidebarToggle">Menu</button>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                  </div>
            
                <!-- Page content-->
                {{-- searchbar --}}
                  <div class="container">
                      <div class="row justify-content-center align-items-center">        
                        <div class="col-md-6">        
                          <form action="/ "> 
                            <div class="search">
                                {{-- <span class="search-icon material-symbols-outlined">search</span> --}}
                                <input class="search-input" type="search" placeholder="Search" name="search" value="{{ request('search') }}">
                                <button class="searchbtn" type="submit"><span class="search-icon material-symbols-outlined">search</span></button>
                            </div>
                        </form>                         
                        </div>                      
                      </div>                    
                  </div>
                {{-- end searchbar --}}

                {{-- CardBook --}}
                  <div id="large-th">
                    <div class="container">
                      <h1> Daftar Buku</h1>
                      <br>
                      <div class="choose">
                        <a href="#list-th"><i class="fa fa-th-list" aria-hidden="true"></i></a>
                        <a href="#large-th"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                      </div>
                      {{-- page number  --}}
                        <div class="page d-flex justify-content-center">
                          {{ $index->links() }}
                        </div>
                      {{-- end page number  --}}
                      @if ($index->count())
                      <div id="list-th">
                        @foreach ($index as $i)
                            <div class="book read">
                                <div class="cover">
                                    <a href="/index/{{ $i->slug }}"><img src="{{ asset('storage/' . $i->image) }}"></a>
                                </div>
                                <div class="description">
                                  <a href="/index/{{ $i->slug }}"><p class="title">{{ $i->Judul }}<br>
                                  <span class="author">{{ $i->Jilid }}</span></p></a>
                                </div>
                            </div>
                        @endforeach
                    
                {{-- page number  --}}
                        <div class="d-flex justify-content-center">
                            {{ $index->links() }}
                        </div>
                {{-- end page number  --}}

                      </div>
                    </div>
                  </div>

              @else
              <p class="searchhsl text-center fs-4 mt-5">Buku Tidak Ditemukan</p>
              @endif

              {{-- end CardBook --}}

        </div>
    </div>
</body>
@endsection