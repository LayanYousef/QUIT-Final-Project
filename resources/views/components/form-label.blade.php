<!--merge is used to define the default attributes-->
<label  {{ $attributes->merge(['class' => 'block text-sm font-medium leading-6 text-gray-500']) }}>{{$slot}}</label>
