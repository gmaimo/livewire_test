<div class="col-md-4 col-12">
    <div class="card m-3" style="width: 18rem;">
        <img src="https://picsum.photos/300" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $article->title }}</h5>
            <h5 class="card-title">{{ $article->subtitle }}</h5>
            <p class="card-text">{{ $article->text }}</p>
            <a href="#" class="btn btn-outline-success">Show more</a>
            <button class="btn btn-outline-danger" wire:click="delete">Delete</button>
        </div>
    </div>
</div>
