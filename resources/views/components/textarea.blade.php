<div class="form-group">
      <label class="d-block"> {{ $label }}
        <textarea class="form-control {{ ($errors->first($name))?'is-invalid':''}}" 
				  name="{{$name}}" 
				  >{{  old($name) ?? $slot }}</textarea>
	  </label>     
	  @if($errors->any())  
        <p class="invalid-feedback d-block">
            {{  $errors->first($name) }}  
        </p>
    @endif
</div>