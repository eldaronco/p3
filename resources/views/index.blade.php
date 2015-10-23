@extends('layouts.master')
<!--Another child view - this one for the main landing page-->
@section('title')
    Developers Best Friend
@stop

@section('content')
    <h2>Lorem Ipsum Generator</h2>
    <blockquote>
      <p>The lorem ipsum text is placeholder text traditionally used to demonstrate the various elements of a document layout.  This
        generator tool will produce up to 99 paragraphs of the text for your use.</p>
        <a href='/lorem_ipsum'>Generate some text...</a>
    </blockquote>
    <br>

    <h2>Random User Generator</h2>
    <blockquote>
      <p>Create random user names for your application.  Generate up to 99 names at a time!</p>
      <a href='/random_user'>Generate some user names...</a>
    </blockquote>
@stop
