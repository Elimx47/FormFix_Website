<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormFix</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

    <style>
        body {
            font-family: "Poppins", sans-serif;
        }

        h1,
        h2,
        h3 {
            font-family: "Montserrat", sans-serif;
        }

        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 0;
            height: 2px;
            background-color: #183048;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .feature-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .pop-out {
            font-size: 3xl;
            font-weight: 700;
            display: inline-block;
            color: #ffffff;

        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logo-img {
            height: 50px;
            width: 50px;
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: bold;
            color: black;
        }


        .text-pop {
            text-shadow:
                3px 3px 0 rgba(0, 0, 0, 0.8),
                -3px -3px 0 rgba(0, 0, 0, 0.8),
                3px -3px 0 rgba(0, 0, 0, 0.8),
                -3px 3px 0 rgba(0, 0, 0, 0.8);
            letter-spacing: 0.05em;
        }

        .text-shadow {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        }

        html {
            scroll-behavior: smooth;
        }

        .feature-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-left: none;
            border-left: 8px solid transparent;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        #feature-card-1 {
            border-color: #4299e1;
            /* Blue */
        }

        #feature-card-2 {
            border-color: #48bb78;
            /* Green */
        }

        #feature-card-3 {
            border-color: #ecc94b;
            /* Yellow */
        }

        #feature-card-4 {
            border-color: #9f7aea;
            /* Purple */
        }

        #feature-card-5 {
            border-color: #ff6b6b;
            /* Red */
        }
    </style>
</head>

<body class="bg-gray-100">
    <header class="bg-white py-4 px-4 sm:px-6 lg:px-8 shadow-lg" style="background-color: white;">
        <nav class="flex items-center justify-between max-w-7xl mx-auto">
            <div class="logo-container">
                <a href="#" class="flex items-center">
                    <img src="logo.jpeg" alt="FormFix" class="logo-img">
                    <span class="logo-text">FORMFIX</span>
                </a>
            </div>
            <div class=" flex items-center space-x-6">
                <a href="#features" class="nav-link text-[#28405c] font-bold transition">FEATURES</a>
                <a href="#footer" class="nav-link text-[#28405c] font-bold transition">ABOUT</a>
                <a href="#download" class="text-white px-4 py-2 rounded-md font-semibold transition" style="background-color: #28405c;" onmouseover="this.style.backgroundColor='#183048';" onmouseout="this.style.backgroundColor='#28405c';">DOWNLOAD</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-b from-[#28405c] to-gray-900 opacity-80 z-10"></div>
            <img src="https://images.unsplash.com/photo-1598971457999-ca4ef48a9a71?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHB1c2h1cHxlbnwwfHwwfHx8MA%3D%3D"
                alt="Person doing bodyweight exercises"
                class="absolute inset-0 w-full h-full object-cover object-center filter blur-sm scale-105 z-0">
            <div class="relative z-20 text-center text-white px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto">
                <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold leading-tight mb-6 text-pop">
                    FORMFIX
                </h1>
                <p class="text-lg sm:text-xl lg:text-2xl mb-8 font-semibold text-shadow">
                    Elevate your fitness journey with
                    <span class="block mt-2">personalized workout plans and</span>
                    <span class="block mt-2">real-time form feedback.</span>
                </p>
                <a href="#" class="inline-block">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Google_Play_Store_badge_EN.svg/2560px-Google_Play_Store_badge_EN.svg.png"
                        alt="Get it on Google Play"
                        class="w-48 sm:w-56 mx-auto">
                </a>
            </div>
        </section>

        <section id="features" class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-5xl font-extrabold text-[#28405c] leading-tight">Explore Our Features</h2>
                    <p class="mt-6 text-xl text-gray-600 leading-relaxed">
                        Discover how FormFix can elevate your fitness journey with personalized tools and real-time feedback.
                    </p>
                </div>

                <!-- Personalized Workouts Feature -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                    <div class="feature-card p-8 bg-white rounded-lg shadow-lg" id="feature-card-1" data-aos="zoom-in" data-aos-delay="100">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-blue-500 text-white rounded-full flex items-center justify-center mr-6">
                                <i class="fas fa-dumbbell text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-semibold text-[#28405c] leading-snug">Workout Planning</h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            Create personalized workout plans that align perfectly with your fitness level and goals, or create your own customized routines. Our platform keeps you accountable by adapting to your progress and sending notifications to remind you about your scheduled workouts for the day. Stay consistent and motivated with visual guidance and timely reminders that help you stick to your fitness journey.
                        </p>
                    </div>
                    <div class="mt-16 text-center" data-aos="zoom-in">
                        <img src="https://via.placeholder.com/600x400" alt="FormFix App Screenshot" class="mx-auto rounded-lg shadow-lg">
                    </div>
                </div>

                <!-- Real-Time Feedback Feature -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center mt-16">
                    <div class="mt-16 text-center" data-aos="zoom-in">
                        <img src="https://via.placeholder.com/600x400" alt="FormFix App Screenshot" class="mx-auto rounded-lg shadow-lg">
                    </div>
                    <div class="feature-card p-8 bg-white rounded-lg shadow-lg" id="feature-card-2" data-aos="zoom-in" data-aos-delay="200">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-green-500 text-white rounded-full flex items-center justify-center mr-6">
                                <i class="fas fa-video text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-semibold text-[#28405c] leading-snug">Instant Feedback</h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            Receive immediate, precise feedback on your form and technique during every workout. Our system identifies posture errors and guides you with real-time suggestions to enhance your safety and performance. Maximize your results while reducing the risk of injury corrections.
                        </p>
                    </div>
                </div>

                <!-- Progress Tracking Feature -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center mt-16">
                    <div class="feature-card p-8 bg-white rounded-lg shadow-lg" id="feature-card-3" data-aos="zoom-in" data-aos-delay="300">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-yellow-500 text-white rounded-full flex items-center justify-center mr-6">
                                <i class="fas fa-chart-line text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-semibold text-[#28405c] leading-snug">Progress Tracking</h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            Monitor your fitness journey with detailed metrics and analytics tailored to your goals. Track your achievements over time and identify areas for improvement through insightful data visualization. Stay motivated by celebrating your milestones and reaching new heights in your performance.
                        </p>
                    </div>
                    <div class="mt-16 text-center" data-aos="zoom-in">
                        <img src="https://via.placeholder.com/600x400" alt="FormFix App Screenshot" class="mx-auto rounded-lg shadow-lg">
                    </div>
                </div>

                <!-- BMI Calculator Feature -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center mt-16">
                    <div class="mt-16 text-center" data-aos="zoom-in">
                        <img src="https://via.placeholder.com/600x400" alt="FormFix App Screenshot" class="mx-auto rounded-lg shadow-lg">
                    </div>
                    <div class="feature-card p-8 bg-white rounded-lg shadow-lg" id="feature-card-4" data-aos="zoom-in" data-aos-delay="400">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-purple-500 text-white rounded-full flex items-center justify-center mr-6">
                                <i class="fas fa-calculator text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-semibold text-[#28405c] leading-snug">BMI Calculator</h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            Quickly calculate your Body Mass Index (BMI) to understand your current fitness level. Use our tool to set realistic goals and measure your progress towards achieving them. Keep track of your health stats effortlessly with this easy-to-use feature.
                        </p>
                    </div>
                </div>

                <!-- Fitness Journal Feature -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center mt-16">
                    <div class="feature-card p-8 bg-white rounded-lg shadow-lg" id="feature-card-5" data-aos="zoom-in" data-aos-delay="500">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-red-500 text-white rounded-full flex items-center justify-center mr-6">
                                <i class="fas fa-book text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-semibold text-[#28405c] leading-snug">Fitness Journal</h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            Keep track of your fitness journey with our detailed fitness journal feature. Easily view the exercises you've completed each day or week, along with the total minutes or hours of activity. Gain insights into your routine and stay motivated by tracking your consistency and progress over time.
                        </p>
                    </div>
                    <div class="mt-16 text-center" data-aos="zoom-in">
                        <img src="https://via.placeholder.com/600x400" alt="FormFix App Screenshot" class="mx-auto rounded-lg shadow-lg">
                    </div>
                </div>
            </div>
        </section>



        <section id="download" class="bg-gray-100 py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-6xl font-extrabold text-[#28405c] mb-8" data-aos="fade-up">FORMFIX</h2>
                <p class="text-3xl font-bold text-gray-700 mb-12" data-aos="fade-up" data-aos-delay="200">
                    Perfect your form<br>Elevate your performance
                </p>
                <div class="flex justify-center space-x-6 mb-16">
                    <a href="https://play.google.com/store" class="inline-block" data-aos="fade-up" data-aos-delay="400">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Google_Play_Store_badge_EN.svg/2560px-Google_Play_Store_badge_EN.svg.png" alt="Get it on Google Play" class="w-48">
                    </a>
                    <a href="https://github.com" class="inline-flex items-center bg-gray-800 text-white px-6 py-3 rounded-md shadow-md hover:bg-gray-700 transition" data-aos="fade-up" data-aos-delay="600">
                        <i class="fab fa-github text-2xl mr-2"></i>
                        <span class="text-lg">View on GitHub</span>
                    </a>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
                    <div class="p-4" data-aos="fade-up" data-aos-delay="200">
                        <img src="https://via.placeholder.com/250x500" alt="App Screen 1" class="w-full h-auto mx-auto rounded-lg shadow-md">
                    </div>
                    <div class="p-4" data-aos="fade-up" data-aos-delay="400">
                        <img src="https://via.placeholder.com/250x500" alt="App Screen 2" class="w-full h-auto mx-auto rounded-lg shadow-md">
                    </div>
                    <div class="p-4" data-aos="fade-up" data-aos-delay="600">
                        <img src="https://via.placeholder.com/250x500" alt="App Screen 3" class="w-full h-auto mx-auto rounded-lg shadow-md">
                    </div>
                </div>
            </div>
        </section>

        <footer id="footer" class="bg-[#28405c] py-12" style="background-color: #28405c;">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
                <h3 class="text-2xl font-semibold mb-6">Connect with Us</h3>
                <div class="flex justify-center space-x-8 mb-8">
                    <a href="https://x.com/form_fix" class="hover:text-gray-300 transition">
                        <i class="fab fa-twitter text-3xl"></i>
                    </a>
                    <a href="https://www.instagram.com/formfixteam/" class="hover:text-gray-300 transition">
                        <i class="fab fa-instagram text-3xl"></i>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=61569055390121" class="hover:text-gray-300 transition">
                        <i class="fab fa-facebook-f text-3xl"></i>
                    </a>
                </div>
                <p class="text-lg mb-2">&copy; 2024 FormFix. All rights reserved.</p>
                <p class="text-sm text-gray-300">Elevate your fitness journey with FormFix - the ultimate mobile app for personalized workout plans, real-time form feedback, and seamless tracking.</p>
            </div>
        </footer>
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>

</html>