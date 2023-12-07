<div class="container"> 
    {{--! TUTTO IL COMPONENTE DEVE ESSERE RACCHIUSO IN UN DIV  --}}
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="row">
        <div class="col-2">
            <h3 class="display-3">{{$counter}}</h3>
        </div>
        <div class="col-2">
            <button wire:click='increment(5)' class="btn btn-primary">+1</button>
        </div>
    </div>
</div>
