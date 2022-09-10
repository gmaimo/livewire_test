<div class="row">
    <div class="col-12">

        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif

        <h1 class="text-center">Create an article</h1>
        <form wire:submit.prevent="store">
            <label for="">Title</label>
            <input class="form-control mb-3" type="text" name="title" wire:model="title">
            @error('title') <div class="error text-danger">{{ $message }} </div> @enderror
            <label for="">Subtitle</label>
            <input class="form-control mb-3" type="text" name="subtitle" wire:model="subtitle">
            @error('subtitle') <div class="error text-danger">{{ $message }} </div> @enderror
            <label for="">Text</label>
            <textarea class="form-control" name="text" id="text" cols="30" rows="1" wire:model="text"></textarea>
            @error('text') <div class="error text-danger">{{ $message }} </div> @enderror
            <div class="d-flex justify-content-center"><button class="mt-3 btn btn-outline-primary">Create</button></div>
        </form>
    </div>
</div>
