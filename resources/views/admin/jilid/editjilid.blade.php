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

           <div class="container">
            <div class="" style="margin-top: 30px">
                <center><h2>CRUD - Edit Jilid</h2></center>
            </div><br>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <form method="post" action="{{  route('updatejilid',$index->id)  }}" enctype="multipart/form-data"> 
                @csrf
                @method('PUT')
                <div class="form">
                    <label for="">Judul Buku :</label>
                    <input  type="text" name="name" id="name" class="input form-control"  value="{{ old('name', $index->name) }}">
                </div>
        
                
                
                <button type="submit" class="btn mt-3  btn-primary">Simpan</button>
                <a class="btn btn-primary mt-3" href="{{ route('dashboardjilid') }}">Kembali</a>
            </form> 
           </div>
        </div>
    </div>

   
</body>
@endsection