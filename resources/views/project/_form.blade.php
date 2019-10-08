@csrf

<label for="">
    <input type="text" name="title" placeholder="Titulo..." value="{{ old('title', $project->title) }}">            
</label>

<br>

<label for="">
    <input type="text" name="url" placeholder="Url..." value="{{ old('url', $project->url) }}">            
</label>

<br>

<label for="">
    <textarea name="description" placeholder="Descripcion...">{{ old('description', $project->description) }}</textarea><br>
</label>

<button>{{ $botonText }}</button>