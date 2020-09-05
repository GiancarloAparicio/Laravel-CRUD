<div class="form-group">
    <label class="d-block"> 
        {{ $label ?? "" }}
    <input type="{{ $type ?? 'text' }}" 
           class="form-control {{ ($errors->first($name))?'is-invalid':''}}"
           name="{{ $name?? 'input'}}"
           value="{{ $value ?? old($name) }}"
           placeholder="{{ $placeholder ?? ""}}">
    </label>

    @if($errors->any())  
        <p class="invalid-feedback d-block">
            {{  $errors->first($name) }}  
        </p>
    @endif

    
</div>
