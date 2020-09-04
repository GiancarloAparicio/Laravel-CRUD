<div class="form-group">
    <label class="d-block"> {{ $label ?? "" }}
    <input type="{{ $type ?? "text" }}" 
           class="form-control" 
           name="{{ $name?? "input"}}"
           value="{{ $value ?? old($name) }}"
           placeholder="{{ $placeholder ?? ""}}">
    </label>
    
    @if(isset($message))
        <small class="form-text text-muted">{{ $message }}</small>
    @endif
</div>