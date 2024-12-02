<form>
    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Nombre</label>
        <div class="col-lg-9">
            <input class="form-control" type="text" value="{{ auth()->user()->name }}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Appelidos</label>
        <div class="col-lg-9">
            <input class="form-control" type="text" value="Jhonsan">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Correo</label>
        <div class="col-lg-9">
            <input class="form-control" type="email" value="{{ auth()->user()->email }}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Imagen de Perfil</label>
        <div class="col-lg-9">
            <input class="form-control" type="file">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Sobre mí</label>
        <div class="col-lg-9">
            <textarea class="form-control" type="url" value=""  cols="30" rows="10"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Actividades de tiempo libre</label>
        <div class="col-lg-9">
            <textarea class="form-control" type="url" value=""  cols="10" rows="10"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Address</label>
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

    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Username</label>
        <div class="col-lg-9">
            <input class="form-control" type="text" value="jhonsanmark">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Password</label>
        <div class="col-lg-9">
            <input class="form-control" type="password" value="11111122333">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Confirm
            password</label>
        <div class="col-lg-9">
            <input class="form-control" type="password" value="11111122333">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label"></label>
        <div class="col-lg-9">
            <input type="reset" class="btn btn-secondary" value="Cancel">
            <input type="button" class="btn btn-primary" value="Save Changes">
        </div>
    </div>
</form>