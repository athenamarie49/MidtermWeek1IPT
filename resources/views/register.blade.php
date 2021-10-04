@extends('base')

@section('content')

<style>
    p{
        text-align: center;
    }
    body{
        background-image:url('register.gif');
        background-repeat: no-repeat;
  background-size: cover;
    }

    .mb-3{
        background: linear-gradient(
            rgba(0,0,0,0,7);
        )
    }

</style>

<br><br>
<body>
    <div class = "container">
        <div class="row mt-5">
            <div class="col-md-4 offset-md-5">

                <form action="{{url('/register')}}" method="post">
                    {{csrf_field()}}
                    
                    <div class="card">
                        <div class="card-body">
                            <div class="class d-flex justify-content-center">
                                <img src="user.jpg"  class="rounded-circle" style="height: 100px">
                            </div>
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="submit">Register</button>
                                </div>
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

@stop