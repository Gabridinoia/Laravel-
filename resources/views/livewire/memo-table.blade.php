<div>
    {{-- The whole world belongs to you. --}}
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Testo</th>
            <th scope="col">Ps</th>
            <th scope="col">Modifica</th>
            <th scope="col">Elimina</th>
          </tr>
        </thead>
        <tbody>
            @foreach($memos as $memo)
          <tr>
            <th scope="row">1</th>
            <td>{{$memo->title}}</td> d>
            <td><a class="btn btn-warning" href="{{route('memo_edit', compact('memo'))}}">Modifica Memo</a></td>
            <td><button wire:confirm="Sei sicuro?" wire:click='delete({{$memo}})' class="btn btn-danger">Elimina Memo</button></td>
          </tr>
            @endforeach
        </tbody>
      </table>
</div>
