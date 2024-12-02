<x-app-layout>
    @livewire('sidebaradmin')
    @livewire('navadmin')
    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Agregar Categoría</div>
                            <hr>
                            <form action="{{ route('Category.destroy', $category->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                <div class="form-group">
                                    <label for="input-1">Nombre</label>
                                    <input type="text" class="form-control" id="input-1" name="name"
                                        value="{{ $category->name }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="input-2">Imagen</label>
                                    @if ($category->image)
                                        <div>
                                            <img src="{{ asset($category->image) }}" alt="Imagen de la categoría"
                                                style="max-width: 200px; max-height: 200px;">
                                        </div>
                                    @else
                                        <p>No hay imagen disponible.</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="input-3">Descripción</label>
                                    <textarea name="description" class="form-control" id="" cols="30" rows="10" disabled>{{$category->description}}</textarea>
                                </div>
                                <div class="form-group py-2">
                                    <div class="icheck-material-white">
                                        <input type="checkbox" id="user-checkbox1" disabled name="status" {{ $category->status == '1' ? 'checked':'' }} />
                                        <label for="user-checkbox1">Estado </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-danger btn-round px-5">
                                        <i class="icon-lock"></i>
                                        Eliminar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--End Row-->

            <!--start overlay-->
            <div class="overlay toggle-menu"></div>
            <!--end overlay-->
        </div>
        <!-- End container-fluid-->
    </div><!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <!--Start footer-->
    <footer class="footer">
        <div class="container">
            <div class="text-center">
                Copyright © 2018 Dashtreme Admin
            </div>
        </div>
    </footer>
    <!--End footer-->

</x-app-layout>
