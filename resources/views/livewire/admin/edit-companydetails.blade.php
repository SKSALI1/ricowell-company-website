<div class="mb-4">
    <label class="block text-gray-700 font-bold mb-2">Company Name</label>
    <input type="text" wire:model="name" class="w-full border rounded px-3 py-2">
    @error('name')
        <span class="text-red-500 text-sm">{{ $message }}</span>
    @enderror
</div>
