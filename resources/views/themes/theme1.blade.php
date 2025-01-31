<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="{{ asset('storage/assets/jquery.js') }}"></script> -->
    <link src="https://fonts.googleapis.com/css?family=Elsie">
    </link>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* * {
            border: red 1px solid;
        } */
    </style>
</head>

<body class="">
    <div class="bg-[#0A1124] w-screen h-screen fixed top-0 left-0 z-10 transition-transform transform translate-y-0" id="cover">
        <div class="w-full h-full text-[#D1AA69] flex flex-col justify-center items-center relative">
            <div id="cover-text-container" class="font-elsie text-center px-6 md:px-20 lg:px-32">
                <h1 class="text-3xl md:text-5xl lg:text-6xl mb-8">Dear, {{ $penerima }}</h1>
                <p class="text-lg md:text-2xl lg:text-3xl mb-16">Dengan penuh suka cita dan kegembiraan, kami mengundang Anda untuk bergabung bersama kami dalam merayakan resepsi pernikahan kami</p>
                <h1 class="text-4xl md:text-7xl lg:text-9xl mb-16" style="text-transform: uppercase;">{{ $invitation->male }} & {{ $invitation->female }}</h1>
                <p class="text-2xl md:text-4xl lg:text-5xl mb-16">{{ $formattedDate }}</p>
                <div class="flex justify-center">
                    <button id="open" onclick="openInvitation()" class="border border-[#D1AA69] rounded-full px-6 py-3 md:text-2xl md:px-10 md:py-5 transition-transform transform hover:scale-105">Buka Undangan</button>
                </div>
            </div>
            <div class="absolute -top-10 -left-8 w-80 md:w-96 lg:w-[30rem] xl:w-[500px]"><img src="{{ asset('assets/theme_1/cover_1Asset_1.png') }}" alt=""></div>
            <div class="absolute -bottom-10 -right-8 w-80 md:w-96 lg:w-[30rem] xl:w-[500px]"><img src="{{ asset('assets/theme_1/cover_1Asset_2.png') }}" alt=""></div>
        </div>
    </div>
    </div>
    <div id="title">{{ $invitation->title }}</div>
    <div id="location">{{ $invitation->location }}</div>
    <div id="date">{{ $invitation->date }}</div>
    <div id="time">{{ $invitation->time }}</div>
    <div id="url">{{ $invitation->url }}</div>
    <div id="music">{{ $invitation->music }}</div>
    <script type="module">
        $(document).ready(function() {
            // $("#open").click(function() {
            //     // Hide the div with the ID 'myDiv'
            //     // $("#cover").hide();
            //     $("#cover").removeClass("translate-y-0").addClass("translate-y-[-1080px]");
            // });

            function openInvitation() {
                $("#cover").removeClass("translate-y-0").addClass("translate-y-[-2000px]");
            }
            window.openInvitation = openInvitation;
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