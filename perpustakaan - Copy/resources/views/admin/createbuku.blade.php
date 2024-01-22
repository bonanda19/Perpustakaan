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
                <center><h2>CRUD - Upload Buku</h2></center>
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
            <form method="post" action="/createbuku" enctype="multipart/form-data"> 
                @csrf
                <div class="form">
                    <label for="">Judul Buku :</label>
                    <input  type="text" name="Judul" id="Judul" class="input form-control" type="text" value="{{ old('Judul') }}">
                </div>
                
                <div class="form">
                    <label for="">Slug :</label>
                    <input  type="text" name="slug" id="slug" class="input form-control" type="text" value="{{ old('slug') }}">
                </div>
        
                <div class="form">
                    <label for="">Jilid Buku :</label>
                    <input  type="text" name="Jilid" class="input form-control" type="text" value="{{ old('Jilid') }}">
                </div>

                <div class="form">
                    <label for="">Tahun :</label>
                    <input  type="text" name="Tahun" class="input form-control" type="text" value="{{ old('Tahun') }}">
                </div>

                <div class="form">
                    <label for="">No.Lemari/Rak :</label>
                    <input  type="text" name="NoLemari" class="input form-control" type="text" value="{{ old('NoLemari') }}">
                </div>

                <div class="form">
                    <label for="">Bagian :</label>
                    <input  type="text" name="Bagian" class="input form-control" type="text" value="{{ old('Bagian') }}">
                </div>

                <div class="formm"> 
                    <label for="image" class="form-label">Sampul Buku :</label>
                    <input class="sampul form-control" type="file" id="image" name="image">
                </div>
                <button type="submit" class="btn mt-3">Upload</button>
                <a class="btn btn-primary mt-3" href="{{ route('dashboard') }}">Kembali</a>
            </form> 
           </div>
        </div>
    </div>

   
</body>
@endsection