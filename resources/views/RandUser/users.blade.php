@extends('layouts.master')


@section('title')
    User Generator
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')

@stop


@section('content')


    <form method="POST" action="/random_user">

       <input type='hidden' value='{{ csrf_token() }}' name='_token'>

       <fieldset>
           <label for='numUsers'>Number of Users:</label>
           <input type="text" id='numUsers' name="numUsers">

       </fieldset>

       <br />
       <button type="submit" class="btn btn-primary">Get Users</button>
   </form>
   @if (!isset($name_array))
   <div id='names' name='names'>
    <h4>Get some names!</h4>
    </div>
    @else

   <div id='names' name='names'>
     @foreach ($name_array as $value)
     <p>
       {{$value}}
     </p>

     @endforeach
   </div>
   @endif
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
