<form class="d-inline" onsubmit="return confirm('Elimina')" action="{{ route('comics.destroy', $comic) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" title="elimina"><i class="fa-solid fa-trash"></i></button>
</form>
