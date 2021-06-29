
@extends('layout')

@section ('nadir')

<section class="container-sm bg-transparent text-dark m-3 p-5">

            <div class="container">
                <div class="row" >
                    <div class="col">
                        <figure ><img src="images/signup-image.jpg" alt="sing up image"></figure>
                    </div>
                    <div class="form-group col">
                        <h2>Sign up </h2>
                        <div>
                            <div>
                                @if ($errors ->any ()) 
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li class="text-danger"> {{$error}}</li>
                                        @endforeach
                                    </ul>
                                @endif

                            </div>
                            @if($message=Session::get('success'))
                            <div class="alert alert-light alert-block">
                                <h4>{{ $message}}</h4>
                            </div>
                            @endif
                        </div>
                            <form action="{{url ('users') }}" method="POST" >
                            @csrf
                            
                            <div>
                                <label for="name">First Name : </label>
                                <input class="form-control @error('first') is-invalid @enderror" type="text" name="first" id="first"value="{{old('first')}}"/>
                                                            
                            </div>
                            <div>
                                <label for="name">Last Name : </label>
                                <input class="form-control @error('last') is-invalid @enderror" type="text" name="last" id="last" value="{{old('last')}}"/>
                             
                            </div>
                            <div>
                                <label for="email">Your Email : </label>
                                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email"
                                value="{{old('email')}}" />
                            
                            </div>
                            <div>
                                <label for="phone">Your Phone Number : </label>
                                <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" id="phone" value="{{old('phone')}}" />
                           
                            </div>
                            <div>
                                <label for="date_start">Training start date :</label>
                                <input class="form-control @error('date_start') is-invalid @enderror" type="date" name="date_start" id="date1" value="{{old('date_start')}}" />
                            
                            </div>
                            <div>
                                <label for="date_end">Training end date : </label>
                                <input class="form-control @error('date_end') is-invalid @enderror" type="date" name="date_end" id="date2" value="{{old('date_end')}}"/>
                        
                            </div> <br>
                           
                            <div>
                                <input class="btn btn-block btn-primary" type="submit" name="signup" id="signup"  value="Register"/>
                            </div>
                            <br>
                            
                        </form>
                       
                        
                    </div>
                    
                </div>
            </div>
</section>
            <div>
                <hr>
                <a href="{{url('layout')}}">Home</a>
            </div> 
@endsection