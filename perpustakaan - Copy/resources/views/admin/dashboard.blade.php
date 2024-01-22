@extends('partials.app')
@section('content')
<body>
    <div class=" d-flex" id="wrapper">

        <!-- Sidebar-->
        @include('admin.sidebaradmin')
        {{-- end sidebar --}}

        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
              
            {{-- menu button --}}
              <div class="container-fluid" id="buttonMenu ">
                  <button class="btn mt-3" id="sidebarToggle">Menu</button>
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

            <div class="" style="margin-top: 30px">
                <center><h2>CRUD - Manajemen Buku</h2></center>
            </div><br>
            <div class="" style="padding-left: 10px">
                <a class="btn btn-success" href="{{ route('createbuku') }}"> Tambah Buku</a>
               
            </div>

           
            <div class="table-responsive  mt-3 " >
                <table class="table table-striped table-hover table-bordered">
                    <tr class="table-light" style="text-align: center">
                        <th>No</th>
                        <th>Judul</th>
                        <th>Jilid</th>
                        <th>Tahun</th>
                        <th>NoLemari</th>
                        <th>Bagian</th>
                        <th width="280px">Action</th>
                    </tr>
                    @if ($index->count())
                    @foreach ($index as $i)
                    
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>                 
                        <td >{{ $i->Judul }}</td>
                        <td class="text-center">{{ $i->Jilid }}</td>
                        <td class="text-center">{{ $i->Tahun }}</td>
                        <td class="text-center">{{ $i->NoLemari }}</td>
                        <td class="text-center">{{ $i->Bagian }}</td>
                        
                        <td>
                            <form action="{{ route('destroy',$i->id) }}" method="POST">
                
                                {{-- <a class="btn btn-info bg-primary text-light" href="{{ route('detailPost',$post->id) }}">Detail</a> --}}
                
                                <a class="btn btn-primary bg-warning text-dark" href="{{ route('edit',$i->id) }}">Edit</a>
                
                                @csrf
                                @method('DELETE')
                
                                <button type="submit" class="btn btn-danger bg-danger text-dark" onclick="return confirm('Hapus data?')")>Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                </div>
                
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