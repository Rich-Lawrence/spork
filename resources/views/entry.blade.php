<x-layout>

    <div class="flexContainer" id="logoutDiv">
{{--        <div id="logoutDiv">--}}
{{--            <form action="/logout" method="POST">--}}
{{--                @csrf--}}
{{--                <button id="logoutButton" type="submit" class="buttonHelp">logout</button>--}}
{{--            </form>--}}
{{--        </div>--}}
        {{-- readme button --}}
        <div id="logoutDiv">
            <button id="logoutButton" data-bs-toggle="modal" data-bs-target="#helperModal" class="buttonHelp">helper
            </button>
        </div>
    </div>

    <x-helperModal :$testData>
        <x-slot name="title">Test Modal Component</x-slot>
        <x-slot name="content">another slot</x-slot>
    </x-helperModal>

    <div id="titleDiv" onmouseover="dead()" onmouseout="withered()">
        <a class="linkDec" href="/spork/public/func"><h1 id="font"><span>Test</span><span id="dead">balls</span></h1></a>
    </div>

    <script>

        let elem = document.getElementById("dead");

        let dead = () => {
            elem.innerHTML = "poo";
        }

        let withered = () => {
            elem.innerHTML = "balls";
        }

    </script>

</x-layout>
