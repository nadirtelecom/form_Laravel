
@extends('layout')

@section('nadir')

<section class="container-sm bg-transparent text-dark m-3 p-5">

    <div id="confirm">
        <div class="alert alert-info">
            <div class="">
                {{$message}}
            </div>

        </div>
    </div>
    

</section>
<div>
    <hr>
    <a href="{{url('layout')}}">Home</a>
</div> 

@endsection


