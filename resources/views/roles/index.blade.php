@extends('layouts.main')

    @section('content')
        @include('partials.header')
        @include('partials.slidebar')
        @include('layouts.styles')
        @include('alerts.success')

        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">Roles</h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a href="/usuarios" class="btn btn-primary font-weight-bolder">
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <circle fill="#000000" cx="9" cy="15" r="6"></circle>
                                <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"></path>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>Usuarios</a>
                    <!--end::Button-->
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a href="{{ route('roles.create') }}" class="btn btn-primary font-weight-bolder">
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <circle fill="#000000" cx="9" cy="15" r="6"></circle>
                                <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"></path>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>Crear rol</a>
                    <!--end::Button-->
                </div>
            </div>
            {!! Form::open() !!}
                @csrf
                <div class="checkbox-list">
                    @foreach($roles as $role)
                        <label class="checkbox">
                            <input type="checkbox" name="cbxRole[]">&nbsp;<span></span>{{ $role->name }}
                            <input type="hidden" name="cbxRole[]" id="cbxRoleid[]" value="{{ $role->id }}">
                        </label>
                    @endforeach
                </div>
                <br/>
                <div class="checkbox-inline">
                    {!! link_to('/usuarios', $title = 'Guardar', $attributes = ['id' => 'save', 'class' => 'btn btn-primary'], $secure = null) !!}
                    &nbsp;&nbsp;
                    {!! link_to('/roles', $title = 'Cancelar', $attributes = ['id' => 'cancel', 'class' => 'btn btn-primary'], $secure = null) !!}
                </div>
            {!! Form::close() !!}
        </div>

        @include('layouts.scripts')
        
    @endsection