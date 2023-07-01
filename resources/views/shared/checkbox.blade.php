@php

   $class ??= null;
@endphp
<div @class(["form-check form-switch",$class])>
<input type="hidden" value="0" name ="{{$name}}">
    <input @checked(old($name, $value?? false)) type="checkbox" class="form-check-input  @error($name) is-invalid @enderror" role="switch"
     name="{{$name}}" id="{{$name}}"  value="1">
     <label fclass="form-checke-label" for="{{$name}}">{{$label}}</label>
     @error($name)
     <div class="invalid-feedback">
         {{$message}}
     </div>
   @enderror  
</div>  