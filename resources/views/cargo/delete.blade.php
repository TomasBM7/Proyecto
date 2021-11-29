
<div id="modal-delete-{{$cargo->id}}" class="flex items-center justify-center fixed left-0 bottom-0 w-full h-full bg-gray-800">
  <div class="bg-white rounded-lg w-1/2">
  <form action="{{route('cargo.destroy',$cargo->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <div class="flex flex-col items-start p-4">
      <div class="flex items-center w-full">
        <div class="text-gray-900 font-medium text-lg">Eliminar Registro</div>
		<svg class="ml-auto fill-current text-gray-700 w-6 h-6 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
			<path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"/>
     	</svg>
      </div>
      <hr>
      <div class="">¿Desea eliminar {{$cargo->apellidos." ".$cargo->nombre}} del registro del cargos?</div>
      <hr>
      <div class="ml-auto">
        <button class="bg-transparent hover:bg-gray-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
          Cancelar
        </button>
        <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
      </div>
    </div>
    </form>
  </div>
</div>
