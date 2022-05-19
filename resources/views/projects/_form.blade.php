@csrf
<label for="">Título del proyecto
    <br><input type="text" name="title" value="{{old('title', $project->title)}}"><!--Para recirbir el ultimo valor ingresado-->
</label><br>
<label for="">URL
    <br><input type="text" name="url" value="{{old('url',$project->url)}}">
</label><br>
<label for="">Descripción
    <br><textarea name="description">{{old('description',$project->description)}}</textarea>
</label><br>
<input type="submit" value="{{$btnText}}">
