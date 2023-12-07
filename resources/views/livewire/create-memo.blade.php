<div class="col-6">
    {{-- Do your work, then step back. --}}
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form wire:submit.prevent='store'>
        <div class="mb-3">
          <label for="myTitle" class="form-label">Titolo Memo</label>
          <input wire:model.live='title' type="text" class="form-control" id="myTitle">
        </div>
        <div class="form-floating mb-3">
            <textarea wire:model.live='text' class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Testo Memo</label>
          </div>
          <div class="form-floating mb-3">
            <textarea wire:model.live='ps' class="form-control" placeholder="Leave a comment here" id="floatingTextarea3" style="height: 10px"></textarea>
            <label for="floatingTextarea3">Post Scriptum</label>
          </div>
        <button type="submit" class="btn btn-primary">Aggiungi Memo</button>
    </form>

</div>
