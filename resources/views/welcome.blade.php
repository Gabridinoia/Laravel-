<x-layout>
    {{-- <livewire:counter /> --}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 ">
                <h1 class="text-center display-2">Memo</h1>
            </div>
            <livewire:create-memo />

        </div>
        <div class="row mt-2">
            <div class="col-12">
                <livewire:memo-table />
            </div>
        </div>
    </div>

</x-layout>