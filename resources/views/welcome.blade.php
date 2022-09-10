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

        <livewire:article-create />
        <livewire:article-list />

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
