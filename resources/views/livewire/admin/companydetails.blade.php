<div>
    <div class="mt-8 ml-8 w-full overflow-auto">
        <h1 class="text-2xl font-bold text-shadow-md text-slate-500">Control your company details from here.</h1>
        <div class="flex flex-col gap-8 mt-8 bg-sky-200 w-full p-4">
            @forelse ($company_details as $item)
                <p>
                    <span class="text-xs">Company Name :</span><br>
                    {{ $item['name'] }}
                </p>
                <p>
                    <span class="text-xs">Adress:</span><br>
                    {{ $item['address_line_1'] }},{{ $item['address_line_2'] }},{{ $item['address_line_3'] }}
                </p>
                <p>
                    <span class="text-xs">Contact Number :</span><br>
                    {{ $item['mobile'] }}
                </p>
                <p>
                    <span class="text-xs">Email :</span> <br>{{ $item['email'] }}
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
                    <a href="{{ $item->id }}" class="bg-blue-900 text-white p-4 rounded mt-4">Edit</a>
                </div>
            @empty
                <p class="text-black">No data input done</p>
            @endforelse
        </div>
    </div>
</div>
