@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            @include('partials.formCreate')  
        </div>
        <div class="col-md-8 ">      
            @include('components.table', $data)        
        </div>
    </div>
</div>


@endsection
