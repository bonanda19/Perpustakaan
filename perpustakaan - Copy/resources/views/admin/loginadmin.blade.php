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

           <div class="container">
            <h1 class="h1-lgn mb-3">Login Admin</h1>
            <div class="row justify-content-center">
              <div class="col-md-4">
                 <main class="formlogin">
                  @if(session('success'))
                  <p class="alert alert-success">{{ session('success') }}</p>
                  @endif
                  @if($errors->any())
                  @foreach($errors->all() as $err)
                  <p class="alert alert-danger">{{ $err }}</p>
                  @endforeach
                  @endif  
                <form action="/loginadmin" method="POST">
                  @csrf
                  <div class="form-floating-login">
                    <input type="username" name="username" class="form-control" id="floatingInput" placeholder="username" value="{{ old('username') }}" required>
                    
                  </div>
                  <div class="form-floating-login">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                  
                  </div>
              
                  <button class="btnlogin w-100 btn btn-lg btn-primary" type="submit">Login</button>
                  
                </form>
              </main>
              </div>
            </div>
           
           </div>
        </div>
    </div>

</body>
@endsection