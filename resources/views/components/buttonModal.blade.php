<!-- Button trigger modal -->
<button class="btn btn-{{ $btn ?? "success" }}" 
        data-toggle="modal" 
        data-target="#{{ $id ?? "modal"}}" >
  {{ $slot }}
</button>