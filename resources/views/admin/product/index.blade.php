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
                        <div class="card-header">Productos</div>
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-success dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Acciones
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('Product.create') }}">Agregar</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="table-responsive table-dark">
                            <table class="table align-items-center table-flush table-borderless" id="example">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Precio</th>
                                        <th>Nombre</th>
                                        <th>Imagen</th>
                                        <th>Descripción</th>
                                        <th>Categoría</th>
                                        <th>Estado</th>
                                        <th>Creado</th>
                                        <th>Actualizado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($product as $item)
                                        <tr>
                                            <td>{{ $item->price }} CLP</td>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                @if ($item->image)
                                                    <img class="align-self-start mr-3" src="{{ asset($item->image) }}"
                                                        alt="user avatar" height="110px" width="110px">
                                                @else
                                                    <img src="https://via.placeholder.com/110x110" class="product-img"
                                                        alt="product img">
                                                @endif
                                            </td>
                                            <td>
                                                <div class="dropdown-center">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Descripción
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <p>{{ $item->description }}</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                {{ $item->category->name }}
                                            </td>
                                            <td>
                                                @if ($item->status == 1)
                                                    Visible
                                                @else
                                                    Invisible
                                                @endif
                                            </td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>{{ $item->updated_at }}</td>
                                            <td>
                                                <a href="{{ route('Product.edit', $item->id) }}"
                                                    class="btn btn-success">Editar</a>
                                                <a href="{{ route('Product.show', $item->id) }}"
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
