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
                <center><h2>CRUD - Tambah Jilid</h2></center>
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
            <form method="post" action="/createjilid" enctype="multipart/form-data"> 
                @csrf
                <div class="form col-8">
                    <label for="">Jilid Buku :</label>
                    <input  type="text" name="name" id="name" class="input form-control" type="text" value="{{ old('name') }}">
                </div>
                
                {{-- <div class="form">
                    <label for="">Slug :</label>
                    <input  type="text" name="slug" id="slug" class="input form-control" type="text" value="{{ old('slug') }}">
                </div> --}}
        
                {{-- <div class="form">
                    <label for="">Jilid Buku :</label>
                    <select class="form-select" name="Jilid_id">
                        @foreach ($jilid as $ji)
                            <option value="{{ $ji->id }}">{{ $ji->Jilid_buku }}</option>
                        @endforeach
                    </select>  
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
                </div> --}}
                <button type="submit" class="btn mt-3 btn-primary">Tambah</button>
                <a class="btn btn-primary mt-3" href="{{ route('dashboard') }}">Kembali</a>
            </form> 
           </div>
        </div>
    </div>

   
</body>
@endsection