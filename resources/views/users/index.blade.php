@extends('layouts.main')

    @section('content')
        @include('partials.header')
        @include('partials.slidebar')
        @include('layouts.styles')
        @include('alerts.success')

        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">Tabla de usuarios</h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a href="{{ route('usuarios.create') }}" class="btn btn-primary font-weight-bolder">
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
                    </span>Crear usuario</a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <!--begin: Search Form-->
                <div class="mb-7">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-xl-8">
                            <div class="row align-items-center">
                                <div class="col-md-4 my-2 my-md-0">
                                    <div class="input-icon">
                                        <input type="text" class="form-control" placeholder="Buscar..." id="kt_datatable_search_query">
                                        <span>
                                            <i class="flaticon2-search-1 text-muted"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-4 mt-7 mt-lg-0">
                            <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Buscar</a>
                        </div>
                    </div>
                </div>
                <!--end::Search Form-->
                <!--begin: Datatable-->
                <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="kt_datatable" style>
                    <table class="datatable-table" style="display: block;">
                        <thead class="datatable-head">
                            <tr class="datatable-row" style="left: 0px;">
                                <th data-field="OrderID" class="datatable-cell datatable-cell-sort">
                                    <span style="width: 255px;">Nombre</span>
                                </th>
                                <th data-field="Country" class="datatable-cell datatable-cell-sort">
                                    <span style="width: 255px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correo electrónico</span>
                                </th>
                                <th data-field="Actions" data-autohide-disabled="false" class="datatable-cell datatable-cell-sort">
                                    <span style="width: 255px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Acciones</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="datatable-body">
                            @foreach($users as $user)
                            <tr data-row="0" class="datatable-row" style="left: 0px;">
                                <td data-field="OrderID" aria-label="64616-103" class="datatable-cell" style="left: 10px;">
                                    <span style="width: 205px;">{{ $user->name }}</span>
                                </td>
                                <td data-field="Country" aria-label="Brazil" class="datatable-cell">
                                    <span style="width: 205px;">{{ $user->email }}</span>
                                </td>
                                <td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell">
                                    <span style="overflow: visible; position: relative; width: 125px;">  
                                        <a href="/roles">  
                                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
                                                        <path d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z" fill="#000000"></path>
                                                    </g>
                                                </svg>
                                            </span> 
                                        </a>                 
                                        <a href="/usuarios/{{ $user->id }}/edit" class="btn btn-sm btn-clean btn-icon mr-2" title="Editar usuario">                            
                                            <span class="svg-icon svg-icon-md">                                
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">                                    
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">                                        
                                                        <rect x="0" y="0" width="24" height="24"></rect>                                        
                                                        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>                                        
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>                                    
                                                    </g>                                
                                                </svg>                            
                                            </span>                        
                                        </a>                        
                                        <a href="/usuarios" class="btndelete btn-sm btn-clean btn-icon" data-id="{{ $user->id }}" title="Eliminar usuario">                            
                                            <span class="svg-icon svg-icon-md">                                
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">                                    
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">                                        
                                                        <rect x="0" y="0" width="24" height="24"></rect>                                        
                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>                                        
                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>                                    
                                                    </g>                                
                                                </svg>                            
                                            </span>                       
                                        </a>                    
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="datatable-pager datatable-paging-loaded">
                        <ul class="datatable-pager-nav my-2 mb-sm-0">
                            <li>
                                <a title="First" class="datatable-pager-link datatable-pager-link-first datatable-pager-link-disabled" data-page="1" disabled="disabled">
                                    <i class="flaticon2-fast-back"></i>
                                </a>
                            </li>
                            <li>
                                <a title="Previous" class="datatable-pager-link datatable-pager-link-prev datatable-pager-link-disabled" data-page="1" disabled="disabled">
                                    <i class="flaticon2-back"></i>
                                </a>
                            </li>
                            <li style="display: none;">
                                <input type="text" class="datatable-pager-input form-control" title="Page number">
                            </li>
                            <li>
                                <a class="datatable-pager-link datatable-pager-link-number datatable-pager-link-active" data-page="1" title="1">1</a>
                            </li>
                            <li>
                                <a class="datatable-pager-link datatable-pager-link-number" data-page="2" title="2">2</a>
                            </li>
                            <li>
                                <a class="datatable-pager-link datatable-pager-link-number" data-page="3" title="3">3</a>
                            </li>
                            <li>
                                <a class="datatable-pager-link datatable-pager-link-number" data-page="4" title="4">4</a>
                            </li>
                            <li>
                                <a class="datatable-pager-link datatable-pager-link-number" data-page="5" title="5">5</a>
                            </li>
                            <li>
                                <a title="Next" class="datatable-pager-link datatable-pager-link-next" data-page="2">
                                    <i class="flaticon2-next"></i>
                                </a>
                            </li>
                            <li>
                                <a title="Last" class="datatable-pager-link datatable-pager-link-last" data-page="70">
                                    <i class="flaticon2-fast-next"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="datatable-pager-info my-2 mb-sm-0">
                            <div class="dropdown bootstrap-select datatable-pager-size" style="width: 60px;">
                                <select class="selectpicker datatable-pager-size" title="Select page size" data-width="60px" data-container="body" data-selected="5">
                                    <option class="bs-title-option" value=""></option>
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                            <span class="datatable-pager-detail">Mostrando 1 - 5 de 350</span>
                        </div>
                    </div>
                </div>
                <!--end: Datatable-->
            </div>
        </div> 

        <script language="JavaScript" type="text/javascript" src="/assets/js/jquery-3.6.0.js"></script>
        <script language="JavaScript" type="text/javascript" src="/assets/js/jquery-3.6.0.min.js"></script>
        <script language="JavaScript" type="text/javascript" src="/assets/js/jquery-3.6.0.slim.js"></script>
        <script language="JavaScript" type="text/javascript" src="/assets/js/jquery-3.6.0.slim.min.js"></script>
        <script>
            $(document).on('click', '.btndelete', function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                Swal.fire({
                    title: "¿Estas seguro?",
                    text: "!No podrás revertir esto!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Si, ¡borralo!",
                    cancelButtonText: "No, !cancela!",
                    reverseButtons: true
                }).then(function(result) {
                    if (result.value) {
                        $.ajax({
                            type: 'DELETE',
                            url: '{{ url("/usuarios") }}/' + id,
                            data:{
                                "_token": "{{ csrf_token() }}",
                            },
                            success:function(data) {
                                if (data.success){
                                    Swal.fire(
                                        '¡Borrado!',
                                        'El usuario a sido borrado.',
                                        "success"
                                    );
                                    $("#"+id+"").remove();
                                }
                            }
                        });
                    } else if (result.dismiss === "cancel") {
                        Swal.fire(
                            "Cancelado",
                            "El usuario sigue registrado",
                            "error"
                        )
                    }
                });
            });

        </script>

        @include('layouts.scripts')
        
    @endsection