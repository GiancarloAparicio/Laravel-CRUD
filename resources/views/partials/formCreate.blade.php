<form action={{ route("task.store") }} method="POST" class="card p-4">
    @method("POST")
    @csrf
    <legend>Create Task:</legend>

    <x-input type="text" name="task" label="Name task:" />
    <x-textarea name="description" label="Description task:" />
    
    <div class="form-group mx-auto">
        <button type="reset" class="btn btn-danger">Cancel</button>
        <button type="submit" class="btn btn-success">Save</button>
    </div>
</form>