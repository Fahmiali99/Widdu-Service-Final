<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/about/style.css') }}">

    <!-- Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Pacifico -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <!-- Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <!-- M Plus 1p -->
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@500&display=swap" rel="stylesheet">
    <!-- Lobster -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    @stack('css')
    <title>Home</title>
</head>

<body>
    <!-- -------------------- NAV BAR -------------------- -->
    <header>
        <nav class="logo">
            <div class="containerLogo">
                <a href="/"></a><img src="img/about/widdu.jpg" width="10%">
            </div>
            <ul class="slide">
                <li><a href="/">Home</a></li>
                <li><a class="active" href="/about">About</a></li>
                <li><a href="/portfolio">Portfolio</a></li>
                <li><a href="/contact">Contact</a></li>

            </ul>
            <div class="menu-toggle">
                <input type="checkbox" />
                <span></span> <!-- Buat gasis -->
                <span></span> <!-- Buat gasis -->
                <span></span> <!-- Buat gasis -->
            </div>
            <div class="containerCari">
                <div class="searching">
                    <div class="iconSearch">
                        <img
                            src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggc3R5bGU9ImZpbGw6I0IwNjMyODsiIGQ9Ik01MTIsNDcxLjI3M0w1MTIsNDcxLjI3M0M1MTIsNDkzLjM4Miw0OTMuMzgyLDUxMiw0NzEuMjczLDUxMmwwLDANCgljLTExLjYzNiwwLTIyLjEwOS00LjY1NS0zMC4yNTUtMTIuOEwzMTAuNjkxLDM1Ny4yMzZjLTQuNjU1LTQuNjU1LTQuNjU1LTExLjYzNiwwLTE2LjI5MWwzMC4yNTUtMzAuMjU1DQoJYzQuNjU1LTQuNjU1LDExLjYzNi00LjY1NSwxNi4yOTEsMEw0OTkuMiw0NDIuMTgyQzUwNy4zNDUsNDQ5LjE2NCw1MTIsNDYwLjgsNTEyLDQ3MS4yNzN6Ii8+DQo8cmVjdCB4PSIyOTIuMDY1IiB5PSIyODMuOTI4IiB0cmFuc2Zvcm09Im1hdHJpeCgtMC43MDcxIDAuNzA3MSAtMC43MDcxIC0wLjcwNzEgNzQ0LjQ0MTcgMzA4LjM2OTQpIiBzdHlsZT0iZmlsbDojQjBDNEQ4OyIgd2lkdGg9IjMyLjU4MSIgaGVpZ2h0PSI0OC44NzIiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiM5OUI0Q0Q7IiBkPSJNMzIwLDMyMGw1LjgxOCw1LjgxOGwxMS42MzYtMTEuNjM2bC0zNC45MDktMzQuOTA5bC0yMy4yNzMsMjMuMjczTDI5Ni43MjcsMzIwbDAsMA0KCUMzMDMuNzA5LDMxMy4wMTgsMzEzLjAxOCwzMTMuMDE4LDMyMCwzMjB6Ii8+DQo8cGF0aCBzdHlsZT0iZmlsbDojQzREN0U1OyIgZD0iTTE3NC41NDUsMEM3Ny45NjQsMCwwLDc3Ljk2NCwwLDE3NC41NDVzNzcuOTY0LDE3NC41NDUsMTc0LjU0NSwxNzQuNTQ1DQoJczE3NC41NDUtNzcuOTY0LDE3NC41NDUtMTc0LjU0NVMyNzEuMTI3LDAsMTc0LjU0NSwweiBNMTc0LjU0NSwzMTQuMTgyYy03Ni44LDAtMTM5LjYzNi02Mi44MzYtMTM5LjYzNi0xMzkuNjM2DQoJUzk3Ljc0NSwzNC45MDksMTc0LjU0NSwzNC45MDlzMTM5LjYzNiw2Mi44MzYsMTM5LjYzNiwxMzkuNjM2UzI1MS4zNDUsMzE0LjE4MiwxNzQuNTQ1LDMxNC4xODJ6Ii8+DQo8Y2lyY2xlIHN0eWxlPSJmaWxsOiM3MEI3RTU7IiBjeD0iMTc0LjU0NSIgY3k9IjE3NC41NDUiIHI9IjEzOS42MzYiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiM5MkM1RUI7IiBkPSJNMTA1Ljg5MSwxOTAuODM2YzUuODE4LTQ0LjIxOCw0MC43MjctNzkuMTI3LDg0Ljk0NS04NC45NDVIMTkyDQoJYzE5Ljc4Mi0yLjMyNywyMC45NDUtMzAuMjU1LDIuMzI3LTMzLjc0NWMtMTEuNjM2LTIuMzI3LTIzLjI3My0yLjMyNy0zNC45MDktMS4xNjRjLTQ1LjM4Miw2Ljk4Mi04MS40NTUsNDMuMDU1LTg3LjI3Myw4Ny4yNzMNCgljLTIuMzI3LDExLjYzNi0xLjE2NCwyNC40MzYsMS4xNjQsMzQuOTA5YzMuNDkxLDE5Ljc4MiwzMS40MTgsMTcuNDU1LDMzLjc0NS0yLjMyN0MxMDUuODkxLDE5MiwxMDUuODkxLDE5MC44MzYsMTA1Ljg5MSwxOTAuODM2eiINCgkvPg0KPHBhdGggc3R5bGU9ImZpbGw6IzRDOUNENjsiIGQ9Ik00Ni41NDUsMTg2LjE4MmMwLTc2LjgsNjIuODM2LTEzOS42MzYsMTM5LjYzNi0xMzkuNjM2YzM2LjA3MywwLDY3LjQ5MSwxMy45NjQsOTMuMDkxLDM0LjkwOQ0KCWMtMjUuNi0yOS4wOTEtNjIuODM2LTQ2LjU0NS0xMDQuNzI3LTQ2LjU0NWMtNzYuOCwwLTEzOS42MzYsNjIuODM2LTEzOS42MzYsMTM5LjYzNmMwLDQxLjg5MSwxOC42MTgsNzkuMTI3LDQ2LjU0NSwxMDQuNzI3DQoJQzYwLjUwOSwyNTMuNjczLDQ2LjU0NSwyMjIuMjU1LDQ2LjU0NSwxODYuMTgyeiIvPg0KPHBhdGggc3R5bGU9ImZpbGw6I0IwQzlEQjsiIGQ9Ik0xNzQuNTQ1LDM0OS4wOTFMMTc0LjU0NSwzNDkuMDkxYzk2LjU4MiwwLDE3NC41NDUtNzcuOTY0LDE3NC41NDUtMTc0LjU0NWwwLDANCgljLTUuODE4LDAtMTEuNjM2LDQuNjU1LTExLjYzNiwxMS42MzZjLTIuMzI3LDM5LjU2NC0xOS43ODIsNzUuNjM2LTQ2LjU0NSwxMDIuNGMtMjYuNzY0LDI3LjkyNy02NCw0NS4zODItMTA0LjcyNyw0OC44NzMNCglDMTc5LjIsMzM3LjQ1NSwxNzQuNTQ1LDM0My4yNzMsMTc0LjU0NSwzNDkuMDkxeiIvPg0KPHBhdGggc3R5bGU9ImZpbGw6I0UyRTdGMDsiIGQ9Ik0xNzQuNTQ1LDBMMTc0LjU0NSwwQzc3Ljk2NCwwLDAsNzcuOTY0LDAsMTc0LjU0NWwwLDBjNS44MTgsMCwxMS42MzYtNC42NTUsMTEuNjM2LTExLjYzNg0KCUMxMy45NjQsMTI0LjUwOSwzMC4yNTUsODkuNiw1NC42OTEsNjRjMjcuOTI3LTI5LjA5MSw2Ni4zMjctNDguODczLDEwOC4yMTgtNTIuMzY0QzE2OS44OTEsMTEuNjM2LDE3NC41NDUsNS44MTgsMTc0LjU0NSwweiIvPg0KPHBhdGggc3R5bGU9ImZpbGw6I0EzNTQyNTsiIGQ9Ik00OTguMDM2LDQ0MS4wMThsLTYuOTgyLTUuODE4YzUuODE4LDYuOTgyLDkuMzA5LDE2LjI5MSw5LjMwOSwyNS42bDAsMA0KCWMwLDE1LjEyNy0xOC42MTgsMjAuOTQ1LTI5LjA5MSwxMC40NzNMMzQ5LjA5MSwzNDkuMDkxYy02Ljk4Mi02Ljk4Mi0xNy40NTUtNi45ODItMjQuNDM2LDBsLTExLjYzNiwxMS42MzZsMTI2LjgzNiwxMzYuMTQ1DQoJYzYuOTgyLDYuOTgyLDE2LjI5MSwxMi44LDI1LjYsMTMuOTY0YzEyLjgsMS4xNjQsMjUuNi0zLjQ5MSwzMy43NDUtMTEuNjM2YzguMTQ1LTguMTQ1LDEyLjgtMjAuOTQ1LDExLjYzNi0zMy43NDUNCglDNTEwLjgzNiw0NTYuMTQ1LDUwNS4wMTgsNDQ4LDQ5OC4wMzYsNDQxLjAxOHoiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiNDOTc2Mjk7IiBkPSJNMzc4LjE4MiwzNjAuNzI3Yy0xLjE2NCwwLTMuNDkxLDAtNC42NTUtMS4xNjRsLTI5LjA5MS0yOS4wOTFjLTIuMzI3LTIuMzI3LTIuMzI3LTUuODE4LDAtOC4xNDUNCgljMi4zMjctMi4zMjcsNS44MTgtMi4zMjcsOC4xNDUsMGwyOS4wOTEsMjkuMDkxYzIuMzI3LDIuMzI3LDIuMzI3LDUuODE4LDAsOC4xNDVDMzgxLjY3MywzNjAuNzI3LDM3OS4zNDUsMzYwLjcyNywzNzguMTgyLDM2MC43Mjd6DQoJIi8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />
                    </div>
                </div>
                <input type="cari" id="cari">
            </div>
            </div>
        </nav>
        <script src="{{ asset('js/about/script.js') }}"></script>
    </header>

    <!-- -------------------- ISI -------------------- -->
    <main>
        @yield('content');
    </main>

    <!-- -------------------- FOOTER -------------------- -->
    <footer>
        <div class="isiContentFooter">
            <div class="kiriFooter"></div>

            <div class="tengahFooter">
                <div class="containerPopulerFooter">
                    <div class="containerPopuler">
                        <div class="populer">
                            <h3>RECENT POST</h3>
                        </div>
                        <div class="pop1">
                            <div class="pop2">
                                <ul class="populerPost">
                                    <li><a id="p5" href="https://widduservice.com/work/covid19app/">Applikasi Covid -
                                            Dekstop</a></li>
                                    <li><a id="p6" href="https://widduservice.com/work/videoediting/">Video Editing</a>
                                    </li>
                                    <li><a id="p7" href="https://widduservice.com/work/mixingmastering/">Mixing
                                            Mastering</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="containerContactFooter">
                    <div class="containerContact">
                        <div class="contact">
                            <h3>CONTACT INFORMATION</h3>
                        </div>
                        <div class="con1">
                            <div class="con2">
                                <div class="contactA">
                                    <i id="call" class="fas fa-phone"></i>
                                    <p id="p3"> (+62)82131715623 </p>
                                </div>

                                <div class="contactB">
                                    <i id="latter" class="far fa-envelope"></i>
                                    <p><a id="p4" href="https://mail.google.com/mail/u/2/#inbox">
                                            widduservice62@gmail.com </a></p>
                                </div>

                                <div class="contactC">
                                    <i id="clock" class="far fa-clock"></i>
                                    <p id="p45"> 07:00 - 21:00 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="containerAboutFooter">
                    <div class="containerWhy">
                        <div class="why">
                            <h3>WHY WIDDU SERVICE</h3>
                        </div>

                        <div class="why1">
                            <div class="why2">
                                <p id="p1">Widdu Service adalah penerimaan jasa </p>
                                <p id="p2">tugas-tugas atau project tertentu.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="containerLogoFooter">
                    <div class="logFot">
                        <img src="img/about/LogoWiddu.jpg" alt="" style="
                            max-width: 85%;
                            height: 85%;
                            width: 100;
                            height: 100;
                            ">
                    </div>
                </div>
            </div>

            <div class="kananFooter"></div>
        </div>

        <div class="isiSosmedFooter">
            <div class="containerKiriSosmedFooter"></div>
            <div class="containerTengahSosmedFooter">
                <div class="iconSosmed">
                    <div class="sosmedDalam">
                        <ul class="sosmed">
                            <li><a id="aa" href="https://www.instagram.com/widduservice/"><i
                                        class="fab fa-instagram"></i></a>
                            </li>
                            <li><a id="bb" href="https://www.facebook.com/we.do.7528"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a id="cc" href="https://twitter.com/ServiceWiddu"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a id="dd" href="whatsapp://send?text=Hello&phone=+6282131715623"><i
                                        class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="containerKananSosmedFooter"></div>
        </div>
    </footer>
</body>

</html>