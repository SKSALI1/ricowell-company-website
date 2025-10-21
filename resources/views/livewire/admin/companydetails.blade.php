<div class="relative">
    <div class="w-full overflow-auto">
        <h1 class="text-2xl font-bold text-shadow-md text-slate-500">Control your company details from here.</h1>


        {{-- Flash messages --}}
        @if (session('success'))
        <p class="messages mt-8 p-4 bg-lime-100 text-lime-800 rounded">
            {{ session('success') }}
        </p>
        @endif
        {{-- Flash messages --}}


        @forelse ($company_details as $item)
            <div class="grid grid-cols-4  gap-8 mt-2 bg-indigo-50 w-full p-4">
                <p>
                    <span class="text-xs">Company Name :</span><br>
                    {{ $item['name'] }}
                </p>
                <p>
                    <span class="text-xs">Adress:</span><br>
                    {{ $item['address_line_1'] }},<br>{{ $item['address_line_2'] }},<br>{{ $item['address_line_3'] }}
                </p>
                <p>
                    <span class="text-xs">Gst :</span><br>
                    {{ $item['gst'] }}
                </p>
                <p>
                    <span class="text-xs">Udyam :</span><br>
                    {{ $item['udyam'] }}
                </p>
                <p>
                    <span class="text-xs">Contact Number :</span><br>
                    {{ $item['mobile'] }}
                </p>
                <p>
                    <span class="text-xs">Email :</span> <br>{{ $item['email'] }}
                </p>
                <p>
                    <span class="text-xs">Whatsapp :</span><br>{{ $item['whatsapp'] }}
                </p>
                <p>
                    <span class="text-xs">Facebook :</span><br>{{ $item['facebook'] }}
                </p>
                <p>
                    <span class="text-xs">Linkedin :</span><br> {{ $item['linkedin'] }}
                </p>
                <p>
                    <span class="text-xs">Instagram :</span> <br> {{ $item['instagram'] }}
                </p>
                <p>
                    <span class="text-xs">Twitter :</span> <br> {{ $item['twitter'] }}
                </p>
                <div>
                    <label class="bg-indigo-700 text-xs p-1 rounded-xl text-white">Youtube</label>
                    <br>
                    <span>{{ $item['youtube'] }}</span>
                </div>
                <div>
                    <a href="/admin/company-details/edit/{{ $item->id }}" wire:navigate.hover class="bg-blue-900 text-white p-4 rounded my-4  " >Edit</a>
                    <button type="button" class="bg-red-400 text-white p-4 rounded my-4" 
                        wire:click="delete({{ $item->id }})"
                        wire:confirm="Are you sure you want to delete this post?"> Delete Post
                    </button>
                </div>
            </div>
        @empty
            <p class="mt-8 p-4 text-indigo-900 border bg-indigo-100 border-indigo-900">No data input done</p>
        @endforelse
    </div>
</div>
