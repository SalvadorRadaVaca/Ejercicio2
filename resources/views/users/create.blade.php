@extends('layouts.main')

    @section('content')
        @include('layouts.styles')
        @include('partials.header')
        @include('partials.slidebar')
        @include('alerts.request')
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <!--begin::Form-->
        {!! Form::open(['route' => 'usuarios.store', 'method' => 'POST']) !!}
            @include('users.forms.user')
            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
        <!--end::Form-->
        @include('layouts.scripts')
    @endsection