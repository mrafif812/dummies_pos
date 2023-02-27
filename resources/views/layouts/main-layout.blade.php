<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body id="body-pd">
    @include('includes.side-menu')

    <div class="container mt-100px">
        @yield('content')
    </div>


    @yield('inner-scripts')

    <script type="module">
        $(document).ready(function() {
            // adding active calss to currently active link on page load
            var currentUrl = window.location.href;
            $('.nav_link.active').removeClass('active');
            // Loop through all the links on the page
            $('.nav_link').each(function() {
                var link = $(this);

                // Check if the href attribute matches the current URL
                if (link.attr('href') === currentUrl) {
                    // Add the active class to the link
                    link.addClass('active');
                }
            });
        })
        // nav bar toggle script
        document.addEventListener("DOMContentLoaded", function (event) {

            const showNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)

                // Validate that all variables exist
                if (toggle && nav && bodypd && headerpd) {
                    toggle.addEventListener('click', () => {
                        // show navbar
                        nav.classList.toggle('nav-show')
                        // change icon
                        toggle.classList.toggle('bx-x')
                        // add padding to body
                        bodypd.classList.toggle('body-pd')
                        // add padding to header
                        headerpd.classList.toggle('body-pd')
                    })
                }
            }

            showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

            /*===== LINK ACTIVE =====*/
            // const linkColor = document.querySelectorAll('.nav_link')

            // function colorLink() {
            //     if (linkColor) {
            //         linkColor.forEach(l => l.classList.remove('active'))
            //         this.classList.add('active')
            //     }
            // }
            // linkColor.forEach(l => l.addEventListener('click', colorLink))

            // Your code to run since DOM is loaded and ready
        });


    </script>
</body>

</html>
