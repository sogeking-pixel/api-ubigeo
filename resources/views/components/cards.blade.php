<div class="rounded-lg border px-4 my-20 shadow-sm w-full">
    <div class="space-y-1.5 p-6 flex flex-row items-center border-b">
        <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">{{ $title }}</h3>    </div>
    <div class="overflow-auto">
        <div class="p-6 grid gap-6">
            @forelse ($data as $item)
                <div class="flex md:items-center flex-col md:flex-row justify-between gap-4">
                    <div class="flex items-center gap-4">
                        <div class="text-muted-foreground text">{{ $item['token'] }}</div>
                    </div>
                    <div class="flex items-center gap-2 text-sm">
                        <div class="text-muted-foreground">Creado: {{ $item['created'] }}</div>
                        <div class="shrink-0 bg-border w-[1px] h-5">
                        </div>
                        <div class="text-muted-foreground">Expira: {{ $item['expires'] }}</div>
                        <div class="shrink-0 bg-border w-[1px] h-5">
                        </div>
                        <div class="text-muted-foreground">Ultimo uso: {{ $item['expires'] }}</div>
                    </div>
                </div>
            @empty
                <div class="flex items-center justify-between gap-4">
                    <div class="font-normal">No cuentas con un tokken, porfavor genere uno</div>
                </div>
            @endforelse
        </div>



    </div>
</div>
