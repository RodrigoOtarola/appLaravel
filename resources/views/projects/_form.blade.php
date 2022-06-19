@csrf
<div class="input-group">
    <input name="image" type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04"
           aria-label="Upload">
    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button>
</div>
<div class="form-group">
    <label for="title">Título del proyecto</label>
        <br><input class="form-control border-0 bg-light shadow-sm"
                   id="title"
                   type="text"
                   name="title"
                   value="{{old('title', $project->title)}}">
        <!--Para recirbir el ultimo valor ingresado-->
    <br>
    <label for="">URL
        <br><input type="text" name="url" value="{{old('url',$project->url)}}">
    </label><br>
    <label for="">Descripción
        <br><textarea name="description">{{old('description',$project->description)}}</textarea>
    </label><br>
    <input type="submit" value="{{$btnText}}">
</div>
