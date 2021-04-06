@extends('layouts.main')

    @section('content')
        @include('layouts.styles')
        @include('partials.header')
        @include('partials.slidebar')
        @include('alerts.request')
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <!--begin::Form-->
        {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'PUT']) !!}
            <div class="form-group">
                {!! Form::label('Nombre:') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el rol']) !!}
            </div>
            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
        <!--end::Form-->
        @include('layouts.scripts')
    @endsection