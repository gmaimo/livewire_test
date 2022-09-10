<x-layout>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Create an article</h1>
                <form action="{{ route ('articles.store') }}" method="POST">

                    @csrf

                    <label for="">Title</label>
                    <input class="form-control mb-3" type="text" name="title" id="title">
                    <label for="">Subtitle</label>
                    <input class="form-control mb-3" type="text" name="subtitle" id="subtitle">
                    <label for="">Text</label>
                    <textarea class="form-control" name="text" id="text" cols="30" rows="10"></textarea>
                    <div class="d-flex justify-content-center"><button class="mt-3 btn btn-outline-primary">Create</button></div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
