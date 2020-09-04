<div class="card">
    <table class="table ">
      <thead class="thead-dark">
        <tr>
          <th class="text-center" scope="col">#</th>
          <th class="text-center" scope="col">Task</th>
          <th class="text-center" scope="col">Description</th>
          <th class="text-center" scope="col">Create at</th>
          <th class="text-center" scope="col"> Options </th>
        </tr>
      </thead>
      <tbody>
        
        @forelse ($data as $item)
          <tr>
            <th class="text-center" scope="row"> {{$item->id}}</th>
            <td class="text-center">{{$item->task}}</td>
            <td class="text-center">{{$item->description}}</td>
            <td class="text-center">{{$item->created_at}}</td>
            <td class="text-center">
                
              <a href="{{route("task.edit",$item->id)}}" class="btn btn-warning">Update</a>
              <form class="d-inline-block" method="POST" action="{{route("task.destroy",$item->id)}}">
                @method("DELETE")
                @csrf
                <input type="submit" class="btn btn-danger" value="Delete" />
              </form>
            </td>
          </tr>
        @empty
          <tr> 
            <td class="text-center" colspan="5">Empty Table</td>
          </tr>
        @endforelse
        
      </tbody>
    </table>
</div>
