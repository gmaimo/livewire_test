<div class="row my-5 pt-3">

    @foreach ($articles as $article)

    <livewire:article :article="$article"/>

    @endforeach

</div>
