<div>
    @if (auth()->user()->roleAs('1'))
        @livewire('sidebaradmin')
        @livewire('navadmin')
    @elseif(auth()->user()->roleAs('2'))
        @livewire('sidebarseller')
        @livewire('navseller')
    @elseif(auth()->user()->roleAs('3'))
        @livewire('sidebarclient')
        @livewire('navclient')
    @endif

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
            <div class="row mt-3">
                <div class="col-lg-4">
                    <div class="card profile-card-2">
                        <div class="card-img-block">
                            <img class="img-fluid" src="https://via.placeholder.com/800x500" alt="Card image cap">
                        </div>
                        <div class="card-body pt-5">

                            @if (auth()->user()->profile_photo_path)
                                <img src="{{ asset(auth()->user()->profile_photo_path) }}" alt="profile-image"
                                    class="user avatar">
                            @else
                                <img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar">
                            @endif

                            <h5 class="card-title">{{ auth()->user()->name }}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <div class="icon-block">
                                <a href="javascript:void();"><i class="fa fa-facebook bg-facebook text-white"></i></a>
                                <a href="javascript:void();"> <i class="fa fa-twitter bg-twitter text-white"></i></a>
                                <a href="javascript:void();"> <i
                                        class="fa fa-google-plus bg-google-plus text-white"></i></a>
                            </div>
                        </div>

                        <div class="card-body border-top border-light">
                        </div>
                    </div>

                </div>

                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                                <li class="nav-item">
                                    <a href="javascript:void();" data-target="#profile" data-toggle="pill"
                                        class="nav-link active"><i class="icon-user"></i> <span
                                            class="hidden-xs">Perfil</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void();" data-target="#messages" data-toggle="pill"
                                        class="nav-link"><i class="zmdi zmdi-devices"></i><span
                                            class="hidden-xs">Dispositivos Conectados</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void();" data-target="#edit" data-toggle="pill"
                                        class="nav-link"><i class="icon-note"></i> <span
                                            class="hidden-xs">Editar</span></a>
                                </li>
                            </ul>
                            <div class="tab-content p-3">
                                <div class="tab-pane active" id="profile">
                                    <h5 class="mb-3">Perfil de Uusario</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6>Sobre mí</h6>
                                            <p>
                                                Web Designer, UI/UX Engineer
                                            </p>
                                            <h6>Tiempo libre</h6>
                                            <p>
                                                Indie music, skiing and hiking. I love the great outdoors.
                                            </p>

                                        </div>

                                        <!--
                                        <div class="col-md-6">
                                            <h6>Recent badges</h6>
                                            <a href="javascript:void();" class="badge badge-dark badge-pill">html5</a>
                                            <a href="javascript:void();" class="badge badge-dark badge-pill">react</a>
                                            <a href="javascript:void();"
                                                class="badge badge-dark badge-pill">codeply</a>
                                            <a href="javascript:void();"
                                                class="badge badge-dark badge-pill">angularjs</a>
                                            <a href="javascript:void();" class="badge badge-dark badge-pill">css3</a>
                                            <a href="javascript:void();"
                                                class="badge badge-dark badge-pill">jquery</a>
                                            <a href="javascript:void();"
                                                class="badge badge-dark badge-pill">bootstrap</a>
                                            <a href="javascript:void();"
                                                class="badge badge-dark badge-pill">responsive-design</a>
                                            <hr>
                                            <span class="badge badge-primary"><i class="fa fa-user"></i> 900
                                                Followers</span>
                                            <span class="badge badge-success"><i class="fa fa-cog"></i> 43
                                                Forks</span>
                                            <span class="badge badge-danger"><i class="fa fa-eye"></i> 245
                                                Views</span>
                                        </div>
                                           <div class="col-md-12">
                                            <h5 class="mt-2 mb-3"><span
                                                    class="fa fa-clock-o ion-clock float-right"></span> Recent Activity
                                            </h5>
                                            <div class="table-responsive">

                                                <table class="table table-hover table-striped">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <strong>Abby</strong> joined ACME Project Team in
                                                                <strong>`Collaboration`</strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <strong>Gary</strong> deleted My Board1 in
                                                                <strong>`Discussions`</strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <strong>Kensington</strong> deleted MyBoard3 in
                                                                <strong>`Discussions`</strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <strong>John</strong> deleted My Board1 in
                                                                <strong>`Discussions`</strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <strong>Skell</strong> deleted his post Look at Why this
                                                                is.. in <strong>`Discussions`</strong>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        -->

                                    </div>
                                    <!--/row-->
                                </div>
                                <div class="tab-pane" id="messages">
                                    @livewire('profile.logout-other-browser-sessions-form')

                                    <!--
                        <div class="alert alert-info alert-dismissible" role="alert">
                       <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <div class="alert-icon">
                         <i class="icon-info"></i>
                        </div>
                        <div class="alert-message">
                          <span><strong>Info!</strong> Lorem Ipsum is simply dummy text.</span>
                        </div>
                      </div>


                       <div class="table-responsive">
                                        <table class="table table-hover table-striped">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="float-right font-weight-bold">3 hrs ago</span>
                                                        Here is your a link to the latest summary report from the..
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="float-right font-weight-bold">Yesterday</span>
                                                        There has been a request on your account since that was..
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="float-right font-weight-bold">9/10</span>
                                                        Porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis
                                                        lacinia rhoncus.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="float-right font-weight-bold">9/4</span>
                                                        Vestibulum tincidunt ullamcorper eros eget luctus.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="float-right font-weight-bold">9/4</span>
                                                        Maxamillion ais the fix for tibulum tincidunt ullamcorper eros.
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                        -->
                                </div>
                                <div class="tab-pane" id="edit">

                                    <form action="{{ route('Update.Information', Auth::user()->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Nombre</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text"
                                                    value="{{ auth()->user()->name }}" name="name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Appelidos</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" value=""
                                                    name="lastname">
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Correo</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="email"
                                                    value="{{ auth()->user()->email }}" name="email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Imagen de
                                                Perfil</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="file" name="profile_photo_path">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Sobre mí</label>
                                            <div class="col-lg-9">
                                                <textarea class="form-control" type="url" value="" cols="30" rows="10" name="about"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Actividades de
                                                tiempo libre</label>
                                            <div class="col-lg-9">
                                                <textarea class="form-control" type="url" value="" cols="10" rows="10" name="hobbies"></textarea>
                                            </div>
                                        </div>
                                        <!--
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Dirección</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" value=""
                                                    placeholder="Street">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label"></label>
                                            <div class="col-lg-6">
                                                <input class="form-control" type="text" value=""
                                                    placeholder="City">
                                            </div>
                                            <div class="col-lg-3">
                                                <input class="form-control" type="text" value=""
                                                    placeholder="State">
                                            </div>
                                        </div>
                                        -->
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label"></label>
                                            <div class="col-lg-9">
                                                <button type="submit" class="btn btn-info">Guardar
                                                    Información</button>
                                            </div>
                                        </div>
                                    </form>

                                    @livewire('profile.update-password-form')

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!--start overlay-->
            <div class="overlay toggle-menu"></div>
            <!--end overlay-->

        </div>
        <!-- End container-fluid-->
    </div><!--End content-wrapper-->
</div>
