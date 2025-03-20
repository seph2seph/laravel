<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        <!-- Styles / Scripts -->
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <nav class="navbar">
                        <div class="navbar-brand">
                            <img src="{{ asset('assets/image/image_no_bg.png') }}" style="max-width: 67px" alt="Laravel 11 Logo">
                            <span style="position:relative; top:-15px;  font-size: 24px; font-weight: bold; color: #3490dc;">BlueBox</span>
                        </div>
                        <button class="navbar-toggle" id="navbar-toggle">
                            ☰
                        </button>

                        <ul class="navbar-menu" id="navbar-menu">
                            @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                       
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                       
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>
                    

                            <li><a href="#footer-bottom">About</a></li>
                            <li><a href="#footer-contact">Contact</a></li>
                        </ul>
                 </nav>
        <div >
            <br><br><br>
            <section class="hero">
        <h1>Empowering Students, One Step at a Time</h1>
            <p>Welcome to BlueBox, your go-to platform for comprehensive student information. Explore our resources and tools to enhance your learning experience.</p>
            <a href="#txt1" class="cta-button">Go to Student's info</a>
      </section>
      
<br><br><br><br><br><br><br><br>

    <section class="background_level">
      <br><br><br>
      <div id="txt1"><h1>Student Level</h1></div>
      <br><br>
      <section class="level-selection">
        
        <div class="container">

          <div class="level-box">
            <a href="{{ route('login') }}" class="level-link">
              <div class="student_img"><img src="{{ asset('assets/image/elem.png')}}" alt="Elementary"></div>
              <h2>Elementary</h2>
            </a>
          </div>
          <div class="level-box" onclick="comingSoon()">
            <a href="#" class="level-link">
              <div class="student_imgs"><img src="{{ asset('assets/image/hs.png')}}" alt="Elementary"></div>
              <h2>Coming Soon</h2>
            </a>
          </div>
          <div class="level-box" onclick="comingSoon()">
            <a href="#" class="level-link">
              <div class="student_img1"><img src="{{ asset('assets/image/shs.png') }}" alt="Elementary"></div>
              <h2>Coming Soon</h2>
            </a>
          </div>
        </div>
      </section>
      <br><br><br><br>
    </section>

    <script>
    const toggle = document.getElementById('navbar-toggle');
    const menu = document.getElementById('navbar-menu');

    toggle.addEventListener('click', () => {
        menu.classList.toggle('show');
    });

    function comingSoon('') {
        alert("Coming Soon!");
    }
    </script>
    <br><br><br><br><br><br><br>
<footer class="footer">
      <div class="footer-container">
        <div class="footer-about">
          <h3>About BlueBox</h3>
          <p>BlueBox is your trusted platform for seamless student information management. Empowering students and educators every step of the way.</p>
        </div>
        <div id="footer-contact">
          <h3>Contact Us</h3>
          <p>Email: support@bluebox.com</p>
          <p>Phone: +1 234 567 890</p>
          <p>Address: 123 BlueBox Lane, Learning City</p>
        </div>
      </div>
      <div id="footer-bottom">
        <p>&copy; 2025 BlueBox. All rights reserved.</p>
      </div>
    </footer>
        </div>
    </body>
</html>
