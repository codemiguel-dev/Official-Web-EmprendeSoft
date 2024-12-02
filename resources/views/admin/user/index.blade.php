<x-app-layout>
    @livewire('sidebaradmin')
    @livewire('navadmin')
    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Mostrar mensaje de éxito -->
            @if (session('success'))
                <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <div class="alert-icon">
                        <i class="icon-info"></i>
                    </div>
                    <div class="alert-message">
                        <span><strong>Info!</strong> {{ session('success') }}</span>
                    </div>
                </div>
            @endif
            <!--Start Dashboard Content-->
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">Usuarios</div>
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-success dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Acciones
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('User.create') }}">Agregar</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="table-responsive table-dark">
                            <table class="table align-items-center table-flush table-borderless" id="example">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>Imagen</th>
                                        <th>Correo</th>
                                        <th>Rol</th>
                                        <th>Creado</th>
                                        <th>Actualizado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($user as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                @if ($item->lastname)
                                                    {{ $item->lastname }}
                                                @else
                                                    no agregó dato
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->profile_photo_path)
                                                    <img class="align-self-start mr-3"
                                                        src="{{ asset($item->profile_photo_path) }}" alt="user avatar"
                                                        height="110px" width="110px">
                                                @else
                                                    <img src="https://via.placeholder.com/110x110" class="product-img"
                                                        alt="product img">
                                                @endif
                                            </td>
                                            <td>
                                                {{ $item->email }}
                                            </td>
                                            <td>
                                                @if ($item->role_as == '1')
                                                    Administrador
                                                @elseif ($item->role_as == '2')
                                                    Vendedor
                                                @else
                                                    Cliente
                                                @endif
                                            </td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>{{ $item->updated_at }}</td>
                                            <td>
                                                <a href="{{ route('User.edit', $item->id) }}"
                                                    class="btn btn-success">Editar</a>
                                                <a href="{{ route('User.show', $item->id) }}"
                                                    class="btn btn-danger">Eliminar</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <!--
                                         <div class="text-center">
                                            <h3 class="text-white">No hay categoría en la base de datos</h3>
                                        </div>
                                        -->
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div><!-- End Row -->

            <!-- End Dashboard Content -->

            <!--start overlay-->
            <div class="overlay toggle-menu"></div>
            <!--end overlay-->

        </div>
        <!-- End container-fluid-->
    </div><!-- End content-wrapper -->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
</x-app-layout>
