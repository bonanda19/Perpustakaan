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

           <div class="containerlogin ">
            <div class="kotak">
              <div class="row justify-content-center">
               <h1 class="login-teks">Login Admin</h1>
               <div class=" formlogin">
                  <main >
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
                   <div class="form-group1 ">
                     <input type="username" name="username" class="form-control" id="floatingInput" placeholder="Username" value="{{ old('username') }}" required>
                     
                   </div>
                   <div class="form-group2">
                     <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                   
                   </div>
               
                   <button class="form-group2 btn btn-primary" type="submit">Continue</button>
                   
                 </form>
               </main>
               </div>
             </div>
            </div>
           
           </div>
        </div>
    </div>

</body>
@endsection