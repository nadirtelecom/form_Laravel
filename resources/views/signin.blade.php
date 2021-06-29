
@extends('layout')

@section('nadir')
   
<section class="container-sm bg-transparent text-dark m-3 p-5">
                 
    <div class="row">
        <div class="col">
            <figure ><img src="images/signin-image.jpg" alt="sing up image"></figure> 
        </div>
        <div class="form-group col">
            <h2>Sign in</h2>
            <form action="{{url ('/users')}}" method="POST">
                @csrf
                  
                <div>
                    <label for="email"></label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="Your Email"/>
                </div>
                <div>
                    <label for="password"></label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Password"/>
                </div>
                <br>
                <div>
                    <input class="btn btn-block btn-success" type="submit" name="signin" id="signin" value="Log in"/>
                </div>
                <br>
             </form>
        </div>
        </div>
</section>
<div>
    <hr>
    <a href="{{url('layout')}}">Home</a>
</div>
@endsection

 
