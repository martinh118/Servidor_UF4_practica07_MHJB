<h1>CREAR ARTICLE</h1>
<script>
    function confirmCancel() {
        if (confirm("¿Estás seguro de que quieres cancelar la operación?")) {
            location.replace("./dashboard");
        }
    }

    function confirmCreate(id) {
        if (confirm("¿Confirmar datos del articulo?")) {
            document.submit();
        }
    }
</script>

<form action="{{route('createArticle', ['usuario' => Auth::user()->name])}}" method="POST">
    @csrf
    <label for="idArticle">Id Article</label>
    <input type="text" id="idArticle" name="idArt" value="{{ $newId }}" readonly>
    <br><br>
    <label for="">Contingut</label>
    <br><br>
    <textarea name="contentArt" id="content" cols="30" rows="10"></textarea>
    <br><br>

    <input type="submit" value="Crear articulo" onclick="confirmCreate()">

</form>


<button href="" onclick="confirmCancel()"><a href="{{route('dashboard')}}">Cancelar</a></button>