@extends('back.layouts.main')

@section('title')
    <div class="d-sm-flex align-items-center justify-content-between mg-lg-b-30">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                    <li class="breadcrumb-item"><a href="#">lantana</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Publicaciones</li>
                </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">Publicaciones</h4>
        </div>
        @if (auth()->user()->can('admin_access'))
            <div class="d-none d-md-block">
                <a href="{{ route('posts.create') }}" class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5">
                    <i class="fas fa-plus"></i> Crear nuevo Publicaciones
                </a>
            </div>
        @endif
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            @if ($posts->count() == 0)
                <div class="card card-body text-center" style="padding:80px 0px 100px 0px;">
                    <img src="{{ asset('assets/img/group_7.svg') }}" class="wd-20p ml-auto mr-auto mb-5">
                    <h4>¡No hay publicaciones guardadas en la base de datos!</h4>
                    <p class="mb-4">Empieza a cargar publicaciones en tu plataforma usando el botón superior.</p>
                    <a href="{{ route('posts.create') }}"
                        class="btn btn-sm btn-primary btn-uppercase wd-200 ml-auto mr-auto">Crear nueva publicación</a>
                </div>
            @else
                <div class="card mg-b-10">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Categorias</th>
                                    <th>Estatus</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif

        </div>
        <div class="col-md-4">
            @if ($categories->count() != 0)
                <div class="card card-body mb-4">
                    <h4>Lista de Categorías</h4>
                    @foreach ($categories as $category)
                        <ul>
                            <li>
                                <span class="badge text-bg-secondary" style="">{{ $category->name }}</span>
                            </li>
                        </ul>
                    @endforeach
                </div>
            @endif
            <div class="card card-body">
                <h4 class="mt-0 header-title mb-4">Crear Nueva Categoría</h4>
                <form action="{{ route('categories.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Nombre de categoría<span class="text-danger">*</span></label>
                            <input class="form-control " name="name" required="" type="text">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Color</label>
                            <input class="form-control " name="color" required="" type="hex">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Prioridad</label>
                            <input class="form-control " name="color" required="" type="text">
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
