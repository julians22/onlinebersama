<div
    x-cloak
    x-data="{ isAccepted: @entangle('isAccepted'), showOverlay: false }" x-show="!isAccepted" class="absolute inset- z-10 w-full h-full">
    <div
        style="--ns-overlay-max-width: min(43.5rem, calc(100cqw - 2rem));"
        @click="showOverlay = true"
        class="ns-overlay-max-width mx-auto h-full cursor-pointer">
    </div>


    <!-- Accept Modal Popup -->
    <div
        x-show="showOverlay"
        @click.away="showOverlay = false"
        class="fixed inset-0 flex items-center justify-center z-20 bg-black/50">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-2xl">
            <div>
                <p class="paragraph-sm text-navy-blue-300 text-center mb-4">Saya memahami dan menyetujui ketentuan dari <a href="https://www.verisign.com/id-id/privacy/" class="text-magenta-300 underline">Pernyataan Privasi.</a></p>
            </div>
            <button @click="$wire.accept(); showOverlay = false;" class="px-4 lg:px-6 py-0.5 lg:py-2 font-medium text-navy-blue-300 btn-primary mx-auto cursor-pointer">Setujui</button>
        </div>
    </div>

</div>
