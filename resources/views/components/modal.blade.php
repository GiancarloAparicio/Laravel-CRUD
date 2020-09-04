
<!-- Modal -->
<form class="modal fade" 
      action="{{ $action ?? "" }}" 
      method="{{ $method  }}" 
      id="{{$id ?? "modal"}}" 
      aria-hidden="true">

  @csrf
  @method("{{ $method}}")
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >{{ $title ?? "Modal" }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{ $slot }}
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
        @if(isset( $footer))
          {{ $footer }}
        @endif
      </div>
    </div>
  </div>
</form>