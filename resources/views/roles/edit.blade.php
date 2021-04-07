@extends('layouts.main')

    @section('content')
        @include('layouts.styles')
        @include('partials.header')
        @include('partials.slidebar')
        @include('alerts.request')
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Registrar usuarios</h3>
                <div class="card-toolbar">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="" data-original-title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="" data-original-title="Copy code"></span>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'PUT']) !!}
                <div class="form-group">
                    {!! Form::label('Nombre:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el rol']) !!}
                </div>
                {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
            <!--end::Form-->
        </div>
        @include('layouts.scripts')
    @endsection