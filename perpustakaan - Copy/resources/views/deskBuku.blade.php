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
            
        
            <div class="containerdesk">
                <div class="headerdesk">
                    <div class="icon-container">
                        <div class="icon"></div>
                    </div>
                    <div class="title-container">
                        <div class="title">Detail Buku</div>
                    </div>
                </div>

                <div id="list-th">
                    <div class="bookdesk read">
                        <div class="coverdesk">
                          <img src="{{ asset('storage/' . $desk->image) }}">
                        </div>
                        <div class="description">
                          <p class="titledesk">{{ $desk["Judul"] }}<br>
                            <span class="authordesk">{{ $desk["Jilid"] }}</span><br>
                            <span class="authordesk">Tahun : {{ $desk["Tahun"] }}</span><br>
                            <span class="authordesk">No.lemari : {{ $desk["NoLemari"] }}</span><br>
                            <span class="authordesk">Bagian : {{ $desk["Bagian"] }}</span><br>
                        </p>
                        </div>
                      </div>
                </div>
            </div> 

        </div>
    </div>

</body>
@endsection