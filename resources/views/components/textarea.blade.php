<div class="form-group">
      <label class="d-block"> {{ $label }}
        <textarea class="form-control" name="{{$name}}" >{{  old($name) ?? $slot }}</textarea>
      </label>     
</div>