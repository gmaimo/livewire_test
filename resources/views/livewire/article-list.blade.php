<div class="row my-5 pt-3">

    <h1 class="text-center mb-3">Article List</h1>

    <div class="col-12 mb-3">
        <label for="">Search by refefernce: {{ $search }}</label>
        <input type="text" placeholder="Search" class="form-control" wire:model.debounce.500ms="search">
    </div>

    @foreach ($articles as $article)

    <livewire:article :article="$article" :wire:key="$article->id"/>

    @endforeach

</div>
