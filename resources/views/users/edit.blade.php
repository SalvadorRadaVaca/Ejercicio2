@extends('layouts.main')

    @section('content')
        @include('layouts.styles')
        @include('partials.header')
        @include('partials.slidebar')
        @include('alerts.request')
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <!--begin::Form-->
        {!! Form::model($user, ['route' => ['usuarios.update', $user->id], 'method' => 'PUT']) !!}
            @include('users.forms.user')
            {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
        <!--end::Form-->
        @include('layouts.scripts')
    @endsection