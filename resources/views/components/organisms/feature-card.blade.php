@props(['title', 'description'])

<div class="bg-white p-4 rounded-xl shadow">
    <div class="flex gap-3">
        <div class="h-[20px] text-primary">
            {{ $slot }}
        </div>
        <p class="font-semibold mb-2">
            {{ $title }}
        </p>

    </div>
    <p class="text-sm">
        {{ $description }}
    </p>
</div>
