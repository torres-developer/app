<input type="{{$type}}" name="{{$name}}" @if($value) value="{{$value}}" @endif placeholder="@lang($placeholder)" class="p-4 bg-black/[.10] text-black rounded-lg placeholder:text-black" @if($multiple) multiple @endif>
