@props(['name'])<!--take an argument (name)-->

@error($name)
 <p class="text-red-500 text-sm">{{ $message }}</p>
@enderror
