<div class="card">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h4 class="text-white">Cambiar contraseña</h4>
    <form action="{{ route('Update.Password', Auth::user()->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="password" class="text-white">Ingresar Contraseña actual</label>
        <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" required>
        </div>
        <label for="password_new" class="text-white">Ingresar Nueva Contraseña</label>
        <div class="form-group">
            <input type="password" class="form-control" name="password_new" id="password_new" required>
        </div>
        <label for="password_new_confirmation" class="text-white">Repetir Contraseña</label>
        <div class="form-group">
            <input type="password" class="form-control" name="password_new_confirmation" id="password_new_confirmation"
                required>
        </div>
        <button type="submit" class="btn btn-danger">Actualizar Contraseña</button>
    </form>
</div>
