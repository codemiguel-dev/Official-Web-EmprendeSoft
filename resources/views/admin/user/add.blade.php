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
                            <div class="card-title">Agregar Usuario</div>
                            <hr>
                            <form action="{{ route('User.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="input-1">Nombre</label>
                                    <input type="text" class="form-control" id="input-1" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="input-1">Apellidos</label>
                                    <input type="text" class="form-control" id="input-1" name="lastname">
                                </div>
                                <div class="form-group">
                                    <label for="input-1">Correo</label>
                                    <input type="email" class="form-control" id="input-1" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="input-2">Imagen</label>
                                    <input type="file" class="form-control" id="input-2" name="image">
                                </div>
                                <div class="form-group">
                                    <label for="input-2">Contraseña</label>
                                    <input type="password" class="form-control" id="input-2" name="password">
                                </div>
                                <div class="form-group">
                                    <label for="input-3">Sobre Mí(usuario)</label>
                                    <textarea name="about" class="form-control" id="" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="input-3">Tiempo Libre(usuario)</label>
                                    <textarea name="hobbies" class="form-control" id="" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Seleccionar Rol</label>
                                    <select name="role_as" class="form-control">
                                        <option value="1">Administrador</option>
                                        <option value="2">Vendedor</option>
                                        <option value="3">Cliente</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-round px-5">
                                        <i class="icon-lock"></i>
                                        Registrar
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
