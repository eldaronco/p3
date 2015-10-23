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

<p><a href='/'>Home</a><p>
  <br />

@section('header')

This is your random user generator.  Please enter the number of names you would like to generate!
@stop

@section('content')


    <form method="POST" action="/random_user">

       <input type='hidden' value='{{ csrf_token() }}' name='_token'>

       <fieldset>
           <label for='numUsers'>Number of Users:</label>
           <input type="text" id='numUsers' name="numUsers" value="<?php if (isset($numUsers)) echo $numUsers; else echo '0'; ?>">
(Max: 99)
       </fieldset>

       <br />
       <button type="submit" class="btn btn-primary btn-lg">Get Users</button>
   </form>

   @if (!isset($name_array[0]))
   <div id='names' name='names' class='no_result_box'>
    <h4>Get some names!</h4>
    @if(count($errors) > 0)
    <ul class='error_message'>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}  Please try again!</li>
        @endforeach
    </ul>
    @endif
    </div>
    @else

   <div id='names' name='names' class='result_box'>
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
