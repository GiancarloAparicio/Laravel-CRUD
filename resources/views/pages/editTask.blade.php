@extends('layouts.app')

@section('content')


    <div class="row">
        <div class="col-md-8 mx-auto">
            <form  action="{{route("task.update",$task->id)}}" 
                   method="POST" 
                   class="p-4 card">

                <legend>Update Task:</legend>

                @csrf
                @method("PUT")

                <x-input label="Task name:" name="task" value="{{ $task->task }}"/>
                <x-textarea label="Task description:" name="description" >
                    {{$task->description }}
                </x-textarea>

                <div class="form-group mx-auto">
                    <button type="reset" class="btn btn-danger">Cancel</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>


@endsection