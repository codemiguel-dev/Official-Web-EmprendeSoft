<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="text" class="text-dark" id="buscador">
          <ul id="listaArticulos">
            <li class="articulo"><a href="{{ route('User.index') }}" class="text-dark">Usuarios</a></li>
            <li class="articulo"><a href="{{ route('Category.index') }}" class="text-dark">Categoría</a></li>
        </ul>
        <p id="mensajeNoEncontrado" style="display: none; color: red;">No se encontraron resultados.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
        </div>
      </div>
    </div>
  </div>