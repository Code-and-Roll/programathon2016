@extends('layouts.master')
@section('content')


<div class="container">
    <ul class="nav nav-tabs">
        <li class="nav active"><a href="#A" data-toggle="tab">A</a></li>
        <li class="nav"><a href="#B" data-toggle="tab">B</a></li>
        <li class="nav"><a href="#C" data-toggle="tab">C</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade in active" id="A">Content inside tab A</div>
        <div class="tab-pane fade" id="B">Content inside tab B</div>
        <div class="tab-pane fade" id="C">Content inside tab C</div>
    </div>
</div>
@yield('forms')

@endsection


  
 

