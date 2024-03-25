@if($project->exists)
<form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
@csrf
@method('PUT')

@else
<form action="{{ route('admin.projects.store') }}" method="POST">
    @csrf
    @endif   
    <div class="form-row">
        <label for="title">Inserisci titolo</label>
        <input type="text" id="title" name="title">
        <label for="description">Inserisci una breve parola</label>
        <textarea type="text" id="description" name="description"></textarea>
        <label for="image"></label>
        <input type="file" id="image" name="image">

    </div>
</form>
