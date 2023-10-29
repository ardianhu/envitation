<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{ asset('storage/assets/jquery.js') }}"></script>
    <link src="https://fonts.googleapis.com/css?family=Elsie"></link>
    @vite('resources/css/app.css')
    <style>
        /* * {
            border: red 1px solid;
        } */
    </style>
</head>

<body class="">
    <div class="w-screen h-screen fixed top-0 left-0 z-10 transition-transform transform translate-y-0" id="cover" style='background-image: url("/storage/images/sample.jpeg"); background-position: center; background-size: cover;'>
        <div class="w-full h-full text-white">
            <div class="absolute top-32 left-32">
                <div id="male" class="text-4xl font-elsie" style="text-transform: uppercase;">{{ $invitation->male }} & {{ $invitation->female }}</div>
                <!-- <div id="female" class="text-4xl" style="text-transform: uppercase;"></div> -->
            </div>
            <div class="absolute bottom-44 w-full">
                <div class="flex justify-center">
                    <button id="open" class="border border-white rounded-full px-4 py-2">Buka Undangan</button>
                </div>
            </div>
        </div>
    </div>
    <div id="title">{{ $invitation->title }}</div>
    <div id="location">{{ $invitation->location }}</div>
    <div id="date">{{ $invitation->date }}</div>
    <div id="time">{{ $invitation->time }}</div>
    <div id="url">{{ $invitation->url }}</div>
    <div id="music">{{ $invitation->music }}</div>
    <script>
        $(document).ready(function() {
            $("#open").click(function() {
                // Hide the div with the ID 'myDiv'
                // $("#cover").hide();
                $("#cover").removeClass("translate-y-0").addClass("translate-y-[-1080px]");
            });
            // var male = @json($invitation->male) + ' &';
            // var female = @json($invitation->female);
            // male_first = male.charAt(0);
            // female_first = female.charAt(0);
            // console.log(male_first);
            // console.log(female_first);
            // $('#male').html(male);
            // $('#female').html(female);
        });
    </script>
</body>

</html>