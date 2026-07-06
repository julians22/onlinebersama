<div
    x-cloak
    x-data="{ isAccepted: @entangle('isAccepted'), showOverlay: false }" x-show="!isAccepted" class="absolute inset- z-10 w-full h-full">
    <div
        style="--ns-overlay-max-width: min(860px, calc(100cqw - 2rem));"
        @click="showOverlay = true"
        class="ns-overlay-max-width mx-auto h-full cursor-pointer">
    </div>


    <!-- Accept Modal Popup -->
    <div
        x-show="showOverlay"
        @keydown.escape.window="showOverlay = false"
        @click.away="showOverlay = false"
        class="fixed inset-0 flex items-center justify-center z-100 px-4 bg-black/50 md:px-16">
        <div class="relative bg-white p-8 rounded-[10px] shadow-lg max-w-full w-full space-y-8 md:max-w-2xl md:p-10 md:space-y-10">
            <button type="button" @click="showOverlay = false" class="absolute top-3 right-3 cursor-pointer">
                <x-icons.close width="24" height="24" fill="#A7127E" class="w-8 h-8" />
            </button>
            <p class="paragraph-md text-navy-blue-300 text-[20px]! font-bold! md:text-[24px]!">Saya memahami dan menyetujui ketentuan dari <a target="_blank" href="https://www.verisign.com/id-id/privacy/" class="text-magenta-300 underline">Pernyataan Privasi.</a></p>
            <button @click="$wire.accept(); showOverlay = false;" class="px-4 py-2 font-medium mx-auto cursor-pointer text-navy-blue-300 text-[20px] btn-primary">Saya Setuju</button>
        </div>
    </div>

</div>
