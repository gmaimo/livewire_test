<div class="row my-5 pt-3">

    <h1 class="text-center mb-3">Article List</h1>

    @foreach ($articles as $article)

    <livewire:article :article="$article" :wire:key="$article->id"/>

    @endforeach

</div>
