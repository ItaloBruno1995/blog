<form action="{{route('posts.store')}}" method="post"><!-- Chamar uma rota pelo seu apilido-->

@csrf
    <div class="form-group">
        <label>Titulo</label>
        <input type="text" name="title" class="form-control">
    </div>

     <div class="form-group">
        <label>Descrição</label>
        <input type="text" name="description" class="form-control">
    </div>

      <div class="form-group">
        <label>Conteúdo</label>
        <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>

     <div class="form-group">
        <label>Slug</label>
        <input type="text" name="slug" class="form-control">
    </div>

    <button class="btn btn-lg btn-success">Criar Postagem </button>
 
</form>

