@props(['trigger'])

<div x-data="{show: false }" class="relative w-32" @click.away="show = false">
    
    <div @click="show = !show">
        {{ $trigger }}
    </div>
    
    <div x-show="show" class="py-2 absolute w-full bg-gray-100 mt-2 rounded-xl" style="display: none;">
        {{ $slot }}
    </div>
</div>
