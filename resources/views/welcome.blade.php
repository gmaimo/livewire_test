<x-layout>

    <div class="container mt-5">

        <div class="row sticky-top">
            <div class="col-12 mb-5 h4 ">
                <p class="text-center"><span id="seconds">00</span>:<span id="tens">00</span></p>
                <div class="text-center">
                    <button id="button-start" class="btn btn-outline-warning">Start</button>
                    <button id="button-stop" class="btn btn-outline-warning">Stop</button>
                    <button id="button-reset" class="btn btn-outline-warning">Reset</button>
                </div>
            </div>
        </div>

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

        <div class="row my-5 pt-3">

            @foreach ($articles as $article)

            <div class="col-md-4 col-12">
                <div class="card m-3" style="width: 18rem;">
                    <img src="https://picsum.photos/300?a={{ $loop->index }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <h5 class="card-title">{{ $article->subtitle }}</h5>
                        <p class="card-text">{{ $article->text }}</p>
                        <a href="#" class="btn btn-primary">Show more</a>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>



    <script>
        window.onload = function () {

            var seconds = 00;
            var tens = 00;
            var appendTens = document.getElementById("tens")
            var appendSeconds = document.getElementById("seconds")
            var buttonStart = document.getElementById('button-start');
            var buttonStop = document.getElementById('button-stop');
            var buttonReset = document.getElementById('button-reset');
            var Interval ;

            buttonStart.onclick = function() {

                clearInterval(Interval);
                Interval = setInterval(startTimer, 10);
            }

            buttonStop.onclick = function() {
                clearInterval(Interval);
            }

            buttonReset.onclick = function() {
                clearInterval(Interval);
                tens = "00";
                seconds = "00";
                appendTens.innerHTML = tens;
                appendSeconds.innerHTML = seconds;
            }

            function startTimer () {
                tens++;

                if(tens <= 9){
                    appendTens.innerHTML = "0" + tens;
                }

                if (tens > 9){
                    appendTens.innerHTML = tens;

                }

                if (tens > 99) {
                    console.log("seconds");
                    seconds++;
                    appendSeconds.innerHTML = "0" + seconds;
                    tens = 0;
                    appendTens.innerHTML = "0" + 0;
                }

                if (seconds > 9){
                    appendSeconds.innerHTML = seconds;
                }
            }
        }
    </script>

</x-layout>
