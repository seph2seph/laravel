<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">

        <!-- Styles / Scripts --> 
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <nav class="navbar">
                        <div class="navbar-brand">
                            <img src="{{ asset('assets/image/image_no_bg.png') }}" style="max-width: 67px" alt="Laravel 11 Logo">
                            <span style="position:relative; top:-15px;  font-size: 24px; font-weight: bold; color: #3490dc;">BlueBox</span>
                        </div>
                        
                        <ul class="navbar-menu" id="navbar-menu">
                            @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        
                                    >
                                        Student List
                                    </a>
                                    <a
                                        href="{{ url('admin/dashboard') }}"
                                        
                                    >
                                        Admin
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                       
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                           
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>
    
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    

                            
                        </ul>
                 </nav>
        <div >
            <br><br><br>
            <section class="hero">

      </section>
      
<br><br><br><br><br>

    <section class="background_level">
      <br><br><br>
      <h1 class="h1_text">ELEMENTARY VISION</h1>
      <p class="ptext">A relevant quality basic education.</p>

      <h1 class="h1_text">ELEMENTARY MISSION</h1>
      <p class="ptext">Render quality Christian instructional services.</p>

      <h1 class="h1_text">GOAL</h1>
      <p class="ptext">The FCU Elementary School aims for the total development of the child for the attainment of the highest quality of life.</p>

      <h1 class="h1_text">PROGRAM EDUCATIONAL OBJECTIVES</h1>
       <ol class="objectives">
        <li>To manifest the Christian faith, beliefs, and love in the life of the pupils in line with the Christian Mission of the school.</li>
        <li>To equip children with the basic skills in Reading, Language, Writing, Mathematics, and other subject areas in preparation for the next higher-level education in search of academic excellence.</li>
        <li>To instill in them moral values, love of country, countrymen, and culture, and to train them to be morally upright citizens and responsible leaders of the school, community, and nation.</li>
        <li>To expose pupils and let them participate in religious, cultural, and civic activities to develop their potentials as mature, responsible individuals.</li>
        <li>To provide opportunities for pupils to learn and practice basic health habits, cleanliness, and develop skills and attitudes of good workmanship, following simple directions to develop a wholesome, healthy, wise, and competent personality.</li>
        <li>To promote and maintain a wholesome pupil-parent-teacher relationship in the school and community.</li>
    </ol>

    
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
