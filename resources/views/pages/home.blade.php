@extends('layouts.front')

@section('content')
    <div id="root">
        <div role="region" aria-label="Notifications (F8)" tabindex="-1" style="pointer-events: none;">
            <ol tabindex="-1"
                class="fixed top-0 z-[100] flex max-h-screen w-full flex-col-reverse p-4 sm:bottom-0 sm:right-0 sm:top-auto sm:flex-col md:max-w-[420px]">
            </ol>
        </div>
        <section aria-label="Notifications alt+T" tabindex="-1" aria-live="polite" aria-relevant="additions text"
            aria-atomic="false"></section>
        <div class="min-h-screen bg-background">

            <section id="home"
                class="h-[150vh]  flex items-center justify-center relative overflow-hidden hero-section"
                style="background-image: url('/assets/office.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">

                <div class="overlay"></div>


                <div class="container-custom relative z-10">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center min-h-screen">

                        <!-- left side - content -->
                        <div class="hero-content  ">
                            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-8 leading-tight mt-20 heading">
                                <span class="text-foreground">Enhance</span><br>
                                <span class="text-primary">Your Skills</span><br>
                                <span class="text-foreground">With <br>Technology</span>
                            </h1>
                            <p class=" max-w-3xl paragraph">
                                Gain real-world skills through top-rated<br> courses.
                                 and empower yourself to <br>shape a successful future.
                            </p>

                            <div class="flex flex-col sm:flex-row gap-4 ">
                                <button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md ring-offset-background transition-colors h-9 bg-primary text-primary-foreground hover:bg-primary-glow px-6 py-8 text-lg font-medium shadow-glow">
                                    Browse Courses
                                </button>
                                {{-- <button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md ring-offset-background transition-colors border bg-background hover:text-accent-foreground h-10 border-border hover:bg-accent px-8 py-4 text-lg font-medium">
                                    Learn More
                                </button> --}}
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Floating pulse dots -->
                <div class="absolute top-1/4 right-10 w-4 h-4 bg-primary rounded-full opacity-60 animate-pulse"></div>
                <div
                    class="absolute bottom-1/4 left-10 w-6 h-6 bg-primary/30 rounded-full opacity-40 animate-pulse delay-1000">
                </div>
                <div class="absolute top-1/2 right-1/4 w-2 h-2 bg-primary rounded-full opacity-80 animate-pulse delay-500">
                </div>
            </section>

            <section id="courses" class="section-padding section-light">
                <div class="container-custom">
                    <div class="text-center mb-16 fade-in-up">
                        <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">Our Featured <span
                                class="text-primary">Courses</span></h2>
                        <p class="text-lg text-muted-foreground max-w-2xl mx-auto">Discover cutting-edge courses designed to
                            transform your career and master the latest technologies.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm bg-card border-border hover:shadow-elegant transition-all duration-300 group fade-in-up">
                            <div class="flex flex-col space-y-1.5 p-0 relative">
                                <div class="relative overflow-hidden rounded-t-lg"><img
                                        src="/assets/course-react-BGtL-_n-.jpg" alt="React JS Mastery: Beginner to Advanced"
                                        class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                                    <div class="absolute top-4 left-4">
                                        <div
                                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-destructive/80 bg-primary text-primary-foreground">
                                            BESTSELLER</div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-card-foreground mb-2 line-clamp-2">React JS Mastery:
                                    Beginner to
                                    Advanced</h3>
                                <p class="text-muted-foreground text-sm mb-4 line-clamp-2">Master React.js from fundamentals
                                    to advanced
                                    concepts with hands-on projects.</p>
                                <div class="flex items-center gap-2 mb-4">
                                    <div class="flex items-center gap-1"><i class="fas fa-star text-yellow-400"></i><i
                                            class="fas fa-star text-yellow-400"></i><i
                                            class="fas fa-star text-yellow-400"></i><i
                                            class="fas fa-star text-yellow-400"></i><i
                                            class="fas fa-star-half-alt text-yellow-400"></i></div>
                                    <span class="text-card-foreground font-semibold">4.9</span><span
                                        class="text-muted-foreground text-sm">(234 reviews)</span>
                                </div>
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex items-center gap-2 text-muted-foreground text-sm"><i
                                            class="fas fa-clock"></i><span>12 hours</span></div>
                                    <div class="flex items-center gap-2 text-muted-foreground text-sm"><i
                                            class="fas fa-user"></i><span>Azure Dev</span></div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2"><span
                                            class="text-2xl font-bold text-primary">$199</span><span
                                            class="text-muted-foreground text-sm line-through">$299</span></div>
                                </div>
                            </div>
                            <div class="flex items-center p-6 pt-0"><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-10 px-4 py-2 w-full bg-primary text-primary-foreground hover:bg-primary-glow">Enroll
                                    Now</button></div>
                        </div>
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm bg-card border-border hover:shadow-elegant transition-all duration-300 group fade-in-up">
                            <div class="flex flex-col space-y-1.5 p-0 relative">
                                <div class="relative overflow-hidden rounded-t-lg"><img
                                        src="/assets/course-python-CzgP20S-.jpg" alt="Python Full Stack Development"
                                        class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                                    <div class="absolute top-4 left-4">
                                        <div
                                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-destructive/80 bg-primary text-primary-foreground">
                                            NEW</div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-card-foreground mb-2 line-clamp-2">Python Full Stack
                                    Development
                                </h3>
                                <p class="text-muted-foreground text-sm mb-4 line-clamp-2">Complete Python development
                                    course covering
                                    backend, frontend, and deployment.</p>
                                <div class="flex items-center gap-2 mb-4">
                                    <div class="flex items-center gap-1"><i class="fas fa-star text-yellow-400"></i><i
                                            class="fas fa-star text-yellow-400"></i><i
                                            class="fas fa-star text-yellow-400"></i><i
                                            class="fas fa-star text-yellow-400"></i><i
                                            class="fas fa-star-half-alt text-yellow-400"></i></div>
                                    <span class="text-card-foreground font-semibold">4.8</span><span
                                        class="text-muted-foreground text-sm">(189 reviews)</span>
                                </div>
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex items-center gap-2 text-muted-foreground text-sm"><i
                                            class="fas fa-clock"></i><span>16 hours</span></div>
                                    <div class="flex items-center gap-2 text-muted-foreground text-sm"><i
                                            class="fas fa-user"></i><span>Azure Dev</span></div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2"><span
                                            class="text-2xl font-bold text-primary">$249</span><span
                                            class="text-muted-foreground text-sm line-through">$349</span></div>
                                </div>
                            </div>
                            <div class="flex items-center p-6 pt-0"><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-10 px-4 py-2 w-full bg-primary text-primary-foreground hover:bg-primary-glow">Enroll
                                    Now</button></div>
                        </div>
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm bg-card border-border hover:shadow-elegant transition-all duration-300 group fade-in-up">
                            <div class="flex flex-col space-y-1.5 p-0 relative">
                                <div class="relative overflow-hidden rounded-t-lg"><img
                                        src="/assets/course-data-science-z84cVRPo.jpg"
                                        alt="Data Science &amp; Machine Learning"
                                        class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                                    <div class="absolute top-4 left-4">
                                        <div
                                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-destructive/80 bg-primary text-primary-foreground">
                                            POPULAR</div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-card-foreground mb-2 line-clamp-2">Data Science &amp;
                                    Machine
                                    Learning</h3>
                                <p class="text-muted-foreground text-sm mb-4 line-clamp-2">Comprehensive data science
                                    course with
                                    real-world ML projects and case studies.</p>
                                <div class="flex items-center gap-2 mb-4">
                                    <div class="flex items-center gap-1"><i class="fas fa-star text-yellow-400"></i><i
                                            class="fas fa-star text-yellow-400"></i><i
                                            class="fas fa-star text-yellow-400"></i><i
                                            class="fas fa-star text-yellow-400"></i><i
                                            class="fas fa-star-half-alt text-yellow-400"></i></div>
                                    <span class="text-card-foreground font-semibold">4.9</span><span
                                        class="text-muted-foreground text-sm">(167 reviews)</span>
                                </div>
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex items-center gap-2 text-muted-foreground text-sm"><i
                                            class="fas fa-clock"></i><span>20 hours</span></div>
                                    <div class="flex items-center gap-2 text-muted-foreground text-sm"><i
                                            class="fas fa-user"></i><span>Azure Dev</span></div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2"><span
                                            class="text-2xl font-bold text-primary">$299</span><span
                                            class="text-muted-foreground text-sm line-through">$399</span></div>
                                </div>
                            </div>
                            <div class="flex items-center p-6 pt-0"><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-10 px-4 py-2 w-full bg-primary text-primary-foreground hover:bg-primary-glow">Enroll
                                    Now</button></div>
                        </div>
                    </div>
                    <div class="text-center mt-12 fade-in-up"><button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border bg-background hover:text-accent-foreground h-10 border-border hover:bg-accent px-8 py-3">View
                            All Courses</button></div>
                </div>
            </section>
            <section id="about" class="section-padding bg-accent/30">
                <div class="container-custom">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
                        <div class="fade-in-up">
                            <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-6">About <span
                                    class="text-primary">Azure Dev
                                </span></h2>
                            <p class="text-lg text-muted-foreground mb-6 leading-relaxed">At Azure Dev Academy, we believe
                                that
                                technology education should be accessible, practical, and transformative. Our mission is to
                                bridge the
                                gap between traditional learning and industry demands.</p>
                            <p class="text-lg text-muted-foreground mb-8 leading-relaxed">Founded by industry experts with
                                over a
                                decade of experience, we focus on hands-on learning, real-world projects, and personalized
                                mentorship to
                                ensure our students not only learn but excel in their careers.</p>
                            <div class="grid grid-cols-2 gap-6 mb-8">
                                <div class="text-center p-4 bg-card rounded-lg border border-border">
                                    <div class="text-2xl font-bold text-primary mb-2">500+</div>
                                    <div class="text-muted-foreground text-sm">Students Graduated</div>
                                </div>
                                <div class="text-center p-4 bg-card rounded-lg border border-border">
                                    <div class="text-2xl font-bold text-primary mb-2">95%</div>
                                    <div class="text-muted-foreground text-sm">Placement Rate</div>
                                </div>
                                <div class="text-center p-4 bg-card rounded-lg border border-border">
                                    <div class="text-2xl font-bold text-primary mb-2">50+</div>
                                    <div class="text-muted-foreground text-sm">Corporate Partners</div>
                                </div>
                                <div class="text-center p-4 bg-card rounded-lg border border-border">
                                    <div class="text-2xl font-bold text-primary mb-2">24/7</div>
                                    <div class="text-muted-foreground text-sm">Learning Support</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center fade-in-up">
                            <div class="relative">
                                <div
                                    class="w-80 h-80 rounded-full overflow-hidden shadow-elegant border-4 border-primary/20 bg-card">
                                    <img src="/assets/instructor-1-Bx9X49w3.jpg" alt="Azure Dev Academy Instructor"
                                        class="w-full h-full object-cover">
                                </div>
                                <div
                                    class="absolute -inset-4 rounded-full bg-gradient-to-r from-primary/20 to-primary-glow/20 blur-xl -z-10">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fade-in-up">
                        <div class="text-center mb-12">
                            <h3 class="text-2xl md:text-3xl font-bold text-foreground mb-4">Our <span
                                    class="text-primary">Journey</span></h3>
                            <p class="text-lg text-muted-foreground">Milestones that shaped our academy into what it is
                                today</p>
                        </div>
                        <div class="relative">
                            <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-border hidden md:block"></div>
                            <div class="space-y-8">
                                <div class="relative flex items-start gap-8">
                                    <div
                                        class="hidden md:flex w-16 h-16 bg-primary rounded-full items-center justify-center shadow-glow flex-shrink-0 relative z-10">
                                        <i class="fas fa-rocket text-primary-foreground text-lg"></i>
                                    </div>
                                    <div
                                        class="flex-1 bg-card border border-border rounded-lg p-6 shadow-sm hover:shadow-elegant transition-shadow duration-300">
                                        <div class="flex items-center gap-4 mb-3">
                                            <div
                                                class="md:hidden w-12 h-12 bg-primary rounded-full flex items-center justify-center">
                                                <i class="fas fa-rocket text-primary-foreground"></i>
                                            </div>
                                            <div><span
                                                    class="inline-block px-3 py-1 bg-primary/10 text-primary rounded-full text-sm font-semibold mb-2">2021</span>
                                                <h4 class="text-xl font-semibold text-card-foreground">Started Web
                                                    Development</h4>
                                            </div>
                                        </div>
                                        <p class="text-muted-foreground leading-relaxed">Founded Azure Dev Academy with a
                                            vision to
                                            democratize technology education</p>
                                    </div>
                                </div>
                                <div class="relative flex items-start gap-8">
                                    <div
                                        class="hidden md:flex w-16 h-16 bg-primary rounded-full items-center justify-center shadow-glow flex-shrink-0 relative z-10">
                                        <i class="fas fa-laptop-code text-primary-foreground text-lg"></i>
                                    </div>
                                    <div
                                        class="flex-1 bg-card border border-border rounded-lg p-6 shadow-sm hover:shadow-elegant transition-shadow duration-300">
                                        <div class="flex items-center gap-4 mb-3">
                                            <div
                                                class="md:hidden w-12 h-12 bg-primary rounded-full flex items-center justify-center">
                                                <i class="fas fa-laptop-code text-primary-foreground"></i>
                                            </div>
                                            <div><span
                                                    class="inline-block px-3 py-1 bg-primary/10 text-primary rounded-full text-sm font-semibold mb-2">2022</span>
                                                <h4 class="text-xl font-semibold text-card-foreground">Launched Online
                                                    Courses</h4>
                                            </div>
                                        </div>
                                        <p class="text-muted-foreground leading-relaxed">Expanded to comprehensive online
                                            learning with
                                            interactive projects</p>
                                    </div>
                                </div>
                                <div class="relative flex items-start gap-8">
                                    <div
                                        class="hidden md:flex w-16 h-16 bg-primary rounded-full items-center justify-center shadow-glow flex-shrink-0 relative z-10">
                                        <i class="fas fa-users text-primary-foreground text-lg"></i>
                                    </div>
                                    <div
                                        class="flex-1 bg-card border border-border rounded-lg p-6 shadow-sm hover:shadow-elegant transition-shadow duration-300">
                                        <div class="flex items-center gap-4 mb-3">
                                            <div
                                                class="md:hidden w-12 h-12 bg-primary rounded-full flex items-center justify-center">
                                                <i class="fas fa-users text-primary-foreground"></i>
                                            </div>
                                            <div><span
                                                    class="inline-block px-3 py-1 bg-primary/10 text-primary rounded-full text-sm font-semibold mb-2">2023</span>
                                                <h4 class="text-xl font-semibold text-card-foreground">Trained 500+
                                                    Students</h4>
                                            </div>
                                        </div>
                                        <p class="text-muted-foreground leading-relaxed">Reached milestone of training over
                                            500 successful
                                            developers</p>
                                    </div>
                                </div>
                                <div class="relative flex items-start gap-8">
                                    <div
                                        class="hidden md:flex w-16 h-16 bg-primary rounded-full items-center justify-center shadow-glow flex-shrink-0 relative z-10">
                                        <i class="fas fa-handshake text-primary-foreground text-lg"></i>
                                    </div>
                                    <div
                                        class="flex-1 bg-card border border-border rounded-lg p-6 shadow-sm hover:shadow-elegant transition-shadow duration-300">
                                        <div class="flex items-center gap-4 mb-3">
                                            <div
                                                class="md:hidden w-12 h-12 bg-primary rounded-full flex items-center justify-center">
                                                <i class="fas fa-handshake text-primary-foreground"></i>
                                            </div>
                                            <div><span
                                                    class="inline-block px-3 py-1 bg-primary/10 text-primary rounded-full text-sm font-semibold mb-2">2024</span>
                                                <h4 class="text-xl font-semibold text-card-foreground">Industry
                                                    Partnerships</h4>
                                            </div>
                                        </div>
                                        <p class="text-muted-foreground leading-relaxed">Established partnerships with
                                            leading tech
                                            companies for placements</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="services" class="section-padding bg-background">
                <div class="container-custom">
                    <div class="text-center mb-16 fade-in-up">
                        <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">Our <span
                                class="text-primary">Services</span></h2>
                        <p class="text-lg text-muted-foreground max-w-2xl mx-auto">Comprehensive learning ecosystem
                            designed to
                            transform you into a skilled developer ready for industry challenges.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm bg-card border-border hover:shadow-elegant transition-all duration-300 group fade-in-up">
                            <div class="flex flex-col space-y-1.5 p-6 text-center pb-4">
                                <div
                                    class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/20 transition-colors duration-300">
                                    <i class="fas fa-graduation-cap text-2xl text-primary"></i>
                                </div>
                                <h3 class="tracking-tight text-xl font-semibold text-card-foreground">Live Online Classes
                                </h3>
                            </div>
                            <div class="p-6 pt-0">
                                <p class="text-muted-foreground mb-6 leading-relaxed">Interactive live sessions with
                                    industry experts,
                                    real-time doubt solving, and peer learning opportunities.</p>
                                <ul class="space-y-2">
                                    <li class="flex items-center gap-2 text-sm text-muted-foreground"><i
                                            class="fas fa-check text-primary text-xs"></i><span>Live coding sessions</span>
                                    </li>
                                    <li class="flex items-center gap-2 text-sm text-muted-foreground"><i
                                            class="fas fa-check text-primary text-xs"></i><span>Q&amp;A with
                                            instructors</span></li>
                                    <li class="flex items-center gap-2 text-sm text-muted-foreground"><i
                                            class="fas fa-check text-primary text-xs"></i><span>Peer collaboration</span>
                                    </li>
                                    <li class="flex items-center gap-2 text-sm text-muted-foreground"><i
                                            class="fas fa-check text-primary text-xs"></i><span>Recorded sessions</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm bg-card border-border hover:shadow-elegant transition-all duration-300 group fade-in-up">
                            <div class="flex flex-col space-y-1.5 p-6 text-center pb-4">
                                <div
                                    class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/20 transition-colors duration-300">
                                    <i class="fas fa-user-tie text-2xl text-primary"></i>
                                </div>
                                <h3 class="tracking-tight text-xl font-semibold text-card-foreground">1-on-1 Mentorship
                                </h3>
                            </div>
                            <div class="p-6 pt-0">
                                <p class="text-muted-foreground mb-6 leading-relaxed">Personalized guidance from
                                    experienced developers
                                    to accelerate your learning journey.</p>
                                <ul class="space-y-2">
                                    <li class="flex items-center gap-2 text-sm text-muted-foreground"><i
                                            class="fas fa-check text-primary text-xs"></i><span>Career guidance</span></li>
                                    <li class="flex items-center gap-2 text-sm text-muted-foreground"><i
                                            class="fas fa-check text-primary text-xs"></i><span>Code reviews</span></li>
                                    <li class="flex items-center gap-2 text-sm text-muted-foreground"><i
                                            class="fas fa-check text-primary text-xs"></i><span>Portfolio building</span>
                                    </li>
                                    <li class="flex items-center gap-2 text-sm text-muted-foreground"><i
                                            class="fas fa-check text-primary text-xs"></i><span>Interview
                                            preparation</span></li>
                                </ul>
                            </div>
                        </div>
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm bg-card border-border hover:shadow-elegant transition-all duration-300 group fade-in-up">
                            <div class="flex flex-col space-y-1.5 p-6 text-center pb-4">
                                <div
                                    class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/20 transition-colors duration-300">
                                    <i class="fas fa-robot text-2xl text-primary"></i>
                                </div>
                                <h3 class="tracking-tight text-xl font-semibold text-card-foreground">AI Learning Tools
                                </h3>
                            </div>
                            <div class="p-6 pt-0">
                                <p class="text-muted-foreground mb-6 leading-relaxed">Cutting-edge AI-powered tools to
                                    enhance your
                                    learning experience and track progress.</p>
                                <ul class="space-y-2">
                                    <li class="flex items-center gap-2 text-sm text-muted-foreground"><i
                                            class="fas fa-check text-primary text-xs"></i><span>Personalized learning
                                            paths</span></li>
                                    <li class="flex items-center gap-2 text-sm text-muted-foreground"><i
                                            class="fas fa-check text-primary text-xs"></i><span>AI code assistant</span>
                                    </li>
                                    <li class="flex items-center gap-2 text-sm text-muted-foreground"><i
                                            class="fas fa-check text-primary text-xs"></i><span>Progress analytics</span>
                                    </li>
                                    <li class="flex items-center gap-2 text-sm text-muted-foreground"><i
                                            class="fas fa-check text-primary text-xs"></i><span>Smart
                                            recommendations</span></li>
                                </ul>
                            </div>
                        </div>
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm bg-card border-border hover:shadow-elegant transition-all duration-300 group fade-in-up">
                            <div class="flex flex-col space-y-1.5 p-6 text-center pb-4">
                                <div
                                    class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/20 transition-colors duration-300">
                                    <i class="fas fa-project-diagram text-2xl text-primary"></i>
                                </div>
                                <h3 class="tracking-tight text-xl font-semibold text-card-foreground">Real-World Projects
                                </h3>
                            </div>
                            <div class="p-6 pt-0">
                                <p class="text-muted-foreground mb-6 leading-relaxed">Work on industry-standard projects
                                    that you can
                                    showcase in your portfolio.</p>
                                <ul class="space-y-2">
                                    <li class="flex items-center gap-2 text-sm text-muted-foreground"><i
                                            class="fas fa-check text-primary text-xs"></i><span>Full-stack
                                            applications</span></li>
                                    <li class="flex items-center gap-2 text-sm text-muted-foreground"><i
                                            class="fas fa-check text-primary text-xs"></i><span>Open source
                                            contributions</span></li>
                                    <li class="flex items-center gap-2 text-sm text-muted-foreground"><i
                                            class="fas fa-check text-primary text-xs"></i><span>Client projects</span></li>
                                    <li class="flex items-center gap-2 text-sm text-muted-foreground"><i
                                            class="fas fa-check text-primary text-xs"></i><span>Team collaborations</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm bg-card border-border hover:shadow-elegant transition-all duration-300 group fade-in-up">
                            <div class="flex flex-col space-y-1.5 p-6 text-center pb-4">
                                <div
                                    class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/20 transition-colors duration-300">
                                    <i class="fas fa-certificate text-2xl text-primary"></i>
                                </div>
                                <h3 class="tracking-tight text-xl font-semibold text-card-foreground">Industry
                                    Certification</h3>
                            </div>
                            <div class="p-6 pt-0">
                                <p class="text-muted-foreground mb-6 leading-relaxed">Earn recognized certifications that
                                    boost your
                                    career prospects and validate your skills.</p>
                                <ul class="space-y-2">
                                    <li class="flex items-center gap-2 text-sm text-muted-foreground"><i
                                            class="fas fa-check text-primary text-xs"></i><span>Industry-recognized
                                            certificates</span></li>
                                    <li class="flex items-center gap-2 text-sm text-muted-foreground"><i
                                            class="fas fa-check text-primary text-xs"></i><span>Skill assessments</span>
                                    </li>
                                    <li class="flex items-center gap-2 text-sm text-muted-foreground"><i
                                            class="fas fa-check text-primary text-xs"></i><span>Digital badges</span></li>
                                    <li class="flex items-center gap-2 text-sm text-muted-foreground"><i
                                            class="fas fa-check text-primary text-xs"></i><span>LinkedIn
                                            verification</span></li>
                                </ul>
                            </div>
                        </div>
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm bg-card border-border hover:shadow-elegant transition-all duration-300 group fade-in-up">
                            <div class="flex flex-col space-y-1.5 p-6 text-center pb-4">
                                <div
                                    class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/20 transition-colors duration-300">
                                    <i class="fas fa-briefcase text-2xl text-primary"></i>
                                </div>
                                <h3 class="tracking-tight text-xl font-semibold text-card-foreground">Career Support</h3>
                            </div>
                            <div class="p-6 pt-0">
                                <p class="text-muted-foreground mb-6 leading-relaxed">Comprehensive career assistance
                                    including job
                                    placement, resume building, and interview prep.</p>
                                <ul class="space-y-2">
                                    <li class="flex items-center gap-2 text-sm text-muted-foreground"><i
                                            class="fas fa-check text-primary text-xs"></i><span>Job placement
                                            assistance</span></li>
                                    <li class="flex items-center gap-2 text-sm text-muted-foreground"><i
                                            class="fas fa-check text-primary text-xs"></i><span>Resume optimization</span>
                                    </li>
                                    <li class="flex items-center gap-2 text-sm text-muted-foreground"><i
                                            class="fas fa-check text-primary text-xs"></i><span>Mock interviews</span></li>
                                    <li class="flex items-center gap-2 text-sm text-muted-foreground"><i
                                            class="fas fa-check text-primary text-xs"></i><span>Salary negotiation</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <section id="pricing" class="section-padding bg-accent/30">
                <div class="container-custom">
                    <div class="text-center mb-16 fade-in-up">
                        <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">Choose Your <span
                                class="text-primary">Learning Path</span></h2>
                        <p class="text-lg text-muted-foreground max-w-2xl mx-auto">Flexible pricing plans designed to fit
                            your
                            learning goals and budget. Start your transformation today.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm relative bg-card border-border hover:shadow-elegant transition-all duration-300 fade-in-up">
                            <div class="flex flex-col space-y-1.5 p-6 text-center pb-6">
                                <h3 class="tracking-tight text-2xl font-bold text-card-foreground mb-2">Basic</h3>
                                <p class="text-muted-foreground mb-6">Perfect for beginners starting their coding journey
                                </p>
                                <div class="flex items-baseline justify-center gap-2 mb-2"><span
                                        class="text-4xl font-bold text-primary">$99</span><span
                                        class="text-muted-foreground">/per
                                        month</span></div>
                                <div class="flex items-center justify-center gap-2"><span
                                        class="text-muted-foreground line-through text-sm">$149</span><span
                                        class="text-primary text-sm font-semibold">Save 34%</span></div>
                            </div>
                            <div class="p-6 pt-0">
                                <ul class="space-y-4">
                                    <li class="flex items-start gap-3"><i
                                            class="fas fa-check text-primary text-sm mt-1 flex-shrink-0"></i><span
                                            class="text-card-foreground">Access to 10+ basic courses</span></li>
                                    <li class="flex items-start gap-3"><i
                                            class="fas fa-check text-primary text-sm mt-1 flex-shrink-0"></i><span
                                            class="text-card-foreground">Community forum support</span></li>
                                    <li class="flex items-start gap-3"><i
                                            class="fas fa-check text-primary text-sm mt-1 flex-shrink-0"></i><span
                                            class="text-card-foreground">Basic project templates</span></li>
                                    <li class="flex items-start gap-3"><i
                                            class="fas fa-check text-primary text-sm mt-1 flex-shrink-0"></i><span
                                            class="text-card-foreground">Email support</span></li>
                                    <li class="flex items-start gap-3"><i
                                            class="fas fa-check text-primary text-sm mt-1 flex-shrink-0"></i><span
                                            class="text-card-foreground">Monthly progress reports</span></li>
                                    <li class="flex items-start gap-3"><i
                                            class="fas fa-check text-primary text-sm mt-1 flex-shrink-0"></i><span
                                            class="text-card-foreground">Mobile app access</span></li>
                                </ul>
                            </div>
                            <div class="flex items-center p-6 pt-0"><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:text-accent-foreground h-10 px-4 w-full py-3 font-semibold bg-accent text-accent-foreground hover:bg-accent/80 border border-border">Start
                                    Basic Plan</button></div>
                        </div>
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm relative bg-card hover:shadow-elegant transition-all duration-300 fade-in-up border-primary/50 shadow-glow scale-105">
                            <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                                <div
                                    class="inline-flex items-center border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 bg-primary text-primary-foreground px-4 py-1 rounded-full">
                                    MOST POPULAR</div>
                            </div>
                            <div class="flex flex-col space-y-1.5 p-6 text-center pb-6">
                                <h3 class="tracking-tight text-2xl font-bold text-card-foreground mb-2">Standard</h3>
                                <p class="text-muted-foreground mb-6">Most popular choice for serious learners</p>
                                <div class="flex items-baseline justify-center gap-2 mb-2"><span
                                        class="text-4xl font-bold text-primary">$199</span><span
                                        class="text-muted-foreground">/per
                                        month</span></div>
                                <div class="flex items-center justify-center gap-2"><span
                                        class="text-muted-foreground line-through text-sm">$299</span><span
                                        class="text-primary text-sm font-semibold">Save 33%</span></div>
                            </div>
                            <div class="p-6 pt-0">
                                <ul class="space-y-4">
                                    <li class="flex items-start gap-3"><i
                                            class="fas fa-check text-primary text-sm mt-1 flex-shrink-0"></i><span
                                            class="text-card-foreground">Access to all 50+ courses</span></li>
                                    <li class="flex items-start gap-3"><i
                                            class="fas fa-check text-primary text-sm mt-1 flex-shrink-0"></i><span
                                            class="text-card-foreground">Live coding sessions</span></li>
                                    <li class="flex items-start gap-3"><i
                                            class="fas fa-check text-primary text-sm mt-1 flex-shrink-0"></i><span
                                            class="text-card-foreground">1-on-1 monthly mentorship</span></li>
                                    <li class="flex items-start gap-3"><i
                                            class="fas fa-check text-primary text-sm mt-1 flex-shrink-0"></i><span
                                            class="text-card-foreground">Real-world projects portfolio</span></li>
                                    <li class="flex items-start gap-3"><i
                                            class="fas fa-check text-primary text-sm mt-1 flex-shrink-0"></i><span
                                            class="text-card-foreground">Priority email &amp; chat support</span></li>
                                    <li class="flex items-start gap-3"><i
                                            class="fas fa-check text-primary text-sm mt-1 flex-shrink-0"></i><span
                                            class="text-card-foreground">Career guidance sessions</span></li>
                                    <li class="flex items-start gap-3"><i
                                            class="fas fa-check text-primary text-sm mt-1 flex-shrink-0"></i><span
                                            class="text-card-foreground">Industry certification prep</span></li>
                                    <li class="flex items-start gap-3"><i
                                            class="fas fa-check text-primary text-sm mt-1 flex-shrink-0"></i><span
                                            class="text-card-foreground">Mobile &amp; desktop access</span></li>
                                </ul>
                            </div>
                            <div class="flex items-center p-6 pt-0"><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-10 px-4 w-full py-3 font-semibold bg-primary text-primary-foreground hover:bg-primary-glow shadow-glow">Choose
                                    Standard</button></div>
                        </div>
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm relative bg-card border-border hover:shadow-elegant transition-all duration-300 fade-in-up">
                            <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                                <div
                                    class="inline-flex items-center border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 bg-primary text-primary-foreground px-4 py-1 rounded-full">
                                    BEST VALUE</div>
                            </div>
                            <div class="flex flex-col space-y-1.5 p-6 text-center pb-6">
                                <h3 class="tracking-tight text-2xl font-bold text-card-foreground mb-2">Premium</h3>
                                <p class="text-muted-foreground mb-6">Complete package with job placement guarantee</p>
                                <div class="flex items-baseline justify-center gap-2 mb-2"><span
                                        class="text-4xl font-bold text-primary">$399</span><span
                                        class="text-muted-foreground">/per
                                        month</span></div>
                                <div class="flex items-center justify-center gap-2"><span
                                        class="text-muted-foreground line-through text-sm">$599</span><span
                                        class="text-primary text-sm font-semibold">Save 33%</span></div>
                            </div>
                            <div class="p-6 pt-0">
                                <ul class="space-y-4">
                                    <li class="flex items-start gap-3"><i
                                            class="fas fa-check text-primary text-sm mt-1 flex-shrink-0"></i><span
                                            class="text-card-foreground">Everything in Standard plan</span></li>
                                    <li class="flex items-start gap-3"><i
                                            class="fas fa-check text-primary text-sm mt-1 flex-shrink-0"></i><span
                                            class="text-card-foreground">Weekly 1-on-1 mentorship</span></li>
                                    <li class="flex items-start gap-3"><i
                                            class="fas fa-check text-primary text-sm mt-1 flex-shrink-0"></i><span
                                            class="text-card-foreground">Job placement assistance</span></li>
                                    <li class="flex items-start gap-3"><i
                                            class="fas fa-check text-primary text-sm mt-1 flex-shrink-0"></i><span
                                            class="text-card-foreground">Personal project review</span></li>
                                    <li class="flex items-start gap-3"><i
                                            class="fas fa-check text-primary text-sm mt-1 flex-shrink-0"></i><span
                                            class="text-card-foreground">Direct industry connections</span></li>
                                    <li class="flex items-start gap-3"><i
                                            class="fas fa-check text-primary text-sm mt-1 flex-shrink-0"></i><span
                                            class="text-card-foreground">Mock interview sessions</span></li>
                                    <li class="flex items-start gap-3"><i
                                            class="fas fa-check text-primary text-sm mt-1 flex-shrink-0"></i><span
                                            class="text-card-foreground">Resume &amp; LinkedIn optimization</span></li>
                                    <li class="flex items-start gap-3"><i
                                            class="fas fa-check text-primary text-sm mt-1 flex-shrink-0"></i><span
                                            class="text-card-foreground">Salary negotiation coaching</span></li>
                                    <li class="flex items-start gap-3"><i
                                            class="fas fa-check text-primary text-sm mt-1 flex-shrink-0"></i><span
                                            class="text-card-foreground">Lifetime community access</span></li>
                                    <li class="flex items-start gap-3"><i
                                            class="fas fa-check text-primary text-sm mt-1 flex-shrink-0"></i><span
                                            class="text-card-foreground">Money-back guarantee</span></li>
                                </ul>
                            </div>
                            <div class="flex items-center p-6 pt-0"><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:text-accent-foreground h-10 px-4 w-full py-3 font-semibold bg-accent text-accent-foreground hover:bg-accent/80 border border-border">Go
                                    Premium</button></div>
                        </div>
                    </div>
                    <div class="text-center mt-12 fade-in-up">
                        <div class="bg-card border border-border rounded-lg p-6 max-w-4xl mx-auto">
                            <h3 class="text-xl font-semibold text-card-foreground mb-4">All Plans Include:</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-muted-foreground">
                                <div class="flex items-center gap-2 justify-center"><i
                                        class="fas fa-shield-alt text-primary"></i><span>30-day money-back guarantee</span>
                                </div>
                                <div class="flex items-center gap-2 justify-center"><i
                                        class="fas fa-mobile-alt text-primary"></i><span>Mobile &amp; desktop access</span>
                                </div>
                                <div class="flex items-center gap-2 justify-center"><i
                                        class="fas fa-graduation-cap text-primary"></i><span>Industry-recognized
                                        certificates</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="testimonials" class="section-padding bg-background">
                <div class="container-custom">
                    <div class="text-center mb-16 fade-in-up">
                        <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">What Our <span
                                class="text-primary">Students
                                Say</span></h2>
                        <p class="text-lg text-muted-foreground max-w-2xl mx-auto">Real stories from real students who
                            transformed
                            their careers with Azure Dev Academy.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm bg-card border-border hover:shadow-elegant transition-all duration-300 fade-in-up">
                            <div class="p-6">
                                <div class="flex items-center gap-1 mb-4"><i class="fas fa-star text-yellow-400"></i><i
                                        class="fas fa-star text-yellow-400"></i><i
                                        class="fas fa-star text-yellow-400"></i><i
                                        class="fas fa-star text-yellow-400"></i><i
                                        class="fas fa-star text-yellow-400"></i></div>
                                <p class="text-muted-foreground mb-6 leading-relaxed">"Azure Dev Academy transformed my
                                    career
                                    completely. The hands-on approach and personalized mentorship helped me land my dream
                                    job as a
                                    full-stack developer. The instructors are industry experts who genuinely care about
                                    student success."
                                </p>
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-full overflow-hidden bg-accent"><img
                                            src="/assets/instructor-1-Bx9X49w3.jpg" alt="Sarah Johnson"
                                            class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-card-foreground">Sarah Johnson</h4>
                                        <p class="text-sm text-muted-foreground">Full Stack Developer at Tech Corp</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm bg-card border-border hover:shadow-elegant transition-all duration-300 fade-in-up">
                            <div class="p-6">
                                <div class="flex items-center gap-1 mb-4"><i class="fas fa-star text-yellow-400"></i><i
                                        class="fas fa-star text-yellow-400"></i><i
                                        class="fas fa-star text-yellow-400"></i><i
                                        class="fas fa-star text-yellow-400"></i><i
                                        class="fas fa-star text-yellow-400"></i></div>
                                <p class="text-muted-foreground mb-6 leading-relaxed">"The React course was exceptional!
                                    Real-world
                                    projects, live coding sessions, and continuous support made learning enjoyable and
                                    effective. I went
                                    from beginner to building production-ready applications in just 3 months."</p>
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-full overflow-hidden bg-accent"><img
                                            src="/assets/instructor-1-Bx9X49w3.jpg" alt="Michael Chen"
                                            class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-card-foreground">Michael Chen</h4>
                                        <p class="text-sm text-muted-foreground">Software Engineer at StartupXYZ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm bg-card border-border hover:shadow-elegant transition-all duration-300 fade-in-up">
                            <div class="p-6">
                                <div class="flex items-center gap-1 mb-4"><i class="fas fa-star text-yellow-400"></i><i
                                        class="fas fa-star text-yellow-400"></i><i
                                        class="fas fa-star text-yellow-400"></i><i
                                        class="fas fa-star text-yellow-400"></i><i
                                        class="fas fa-star text-yellow-400"></i></div>
                                <p class="text-muted-foreground mb-6 leading-relaxed">"The Data Science program exceeded my
                                    expectations. The combination of theory and practical implementation with real datasets
                                    prepared me
                                    perfectly for my current role. The career support team was incredibly helpful during my
                                    job search."
                                </p>
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-full overflow-hidden bg-accent"><img
                                            src="/assets/instructor-1-Bx9X49w3.jpg" alt="Emily Rodriguez"
                                            class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-card-foreground">Emily Rodriguez</h4>
                                        <p class="text-sm text-muted-foreground">Data Scientist at DataFlow Inc</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm bg-card border-border hover:shadow-elegant transition-all duration-300 fade-in-up">
                            <div class="p-6">
                                <div class="flex items-center gap-1 mb-4"><i class="fas fa-star text-yellow-400"></i><i
                                        class="fas fa-star text-yellow-400"></i><i
                                        class="fas fa-star text-yellow-400"></i><i
                                        class="fas fa-star text-yellow-400"></i><i
                                        class="fas fa-star text-yellow-400"></i></div>
                                <p class="text-muted-foreground mb-6 leading-relaxed">"Best investment I've made in my
                                    career! The
                                    Service Plus package provided everything I needed - from technical skills to interview
                                    preparation.
                                    The lifetime community access continues to be valuable even after course completion."
                                </p>
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-full overflow-hidden bg-accent"><img
                                            src="/assets/instructor-1-Bx9X49w3.jpg" alt="David Kumar"
                                            class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-card-foreground">David Kumar</h4>
                                        <p class="text-sm text-muted-foreground">Frontend Developer at WebSolutions</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm bg-card border-border hover:shadow-elegant transition-all duration-300 fade-in-up">
                            <div class="p-6">
                                <div class="flex items-center gap-1 mb-4"><i class="fas fa-star text-yellow-400"></i><i
                                        class="fas fa-star text-yellow-400"></i><i
                                        class="fas fa-star text-yellow-400"></i><i
                                        class="fas fa-star text-yellow-400"></i><i
                                        class="fas fa-star text-yellow-400"></i></div>
                                <p class="text-muted-foreground mb-6 leading-relaxed">"Azure Dev Academy's Python course
                                    was
                                    comprehensive and well-structured. The 1-on-1 mentorship sessions were game-changers,
                                    providing
                                    personalized guidance that accelerated my learning exponentially."</p>
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-full overflow-hidden bg-accent"><img
                                            src="/assets/instructor-1-Bx9X49w3.jpg" alt="Jessica Williams"
                                            class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-card-foreground">Jessica Williams</h4>
                                        <p class="text-sm text-muted-foreground">Backend Developer at CloudTech</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm bg-card border-border hover:shadow-elegant transition-all duration-300 fade-in-up">
                            <div class="p-6">
                                <div class="flex items-center gap-1 mb-4"><i class="fas fa-star text-yellow-400"></i><i
                                        class="fas fa-star text-yellow-400"></i><i
                                        class="fas fa-star text-yellow-400"></i><i
                                        class="fas fa-star text-yellow-400"></i><i
                                        class="fas fa-star text-yellow-400"></i></div>
                                <p class="text-muted-foreground mb-6 leading-relaxed">"The practical approach to learning
                                    sets Azure Dev
                                    Academy apart. Working on real client projects during the course gave me the confidence
                                    and portfolio
                                    needed to secure multiple job offers upon graduation."</p>
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-full overflow-hidden bg-accent"><img
                                            src="/assets/instructor-1-Bx9X49w3.jpg" alt="Alex Thompson"
                                            class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-card-foreground">Alex Thompson</h4>
                                        <p class="text-sm text-muted-foreground">Full Stack Developer at Innovation Labs
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-16 fade-in-up">
                        <div class="text-center">
                            <div class="text-3xl md:text-4xl font-bold text-primary mb-2">4.9/5</div>
                            <div class="text-muted-foreground">Average Rating</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl md:text-4xl font-bold text-primary mb-2">500+</div>
                            <div class="text-muted-foreground">Happy Students</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl md:text-4xl font-bold text-primary mb-2">95%</div>
                            <div class="text-muted-foreground">Job Placement</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl md:text-4xl font-bold text-primary mb-2">24/7</div>
                            <div class="text-muted-foreground">Support Available</div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="faqs" class="section-padding bg-accent/30">
                <div class="container-custom">
                    <div class="text-center mb-16 fade-in-up">
                        <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">Frequently Asked <span
                                class="text-primary">Questions</span></h2>
                        <p class="text-lg text-muted-foreground max-w-2xl mx-auto">Got questions? We've got answers. Find
                            everything
                            you need to know about our courses and services.</p>
                    </div>
                    <div class="max-w-4xl mx-auto">
                        <div class="space-y-4">
                            <div class="rounded-lg border text-card-foreground shadow-sm bg-card border-border fade-in-up">
                                <div class="p-0"><button
                                        class="w-full p-6 text-left flex items-center justify-between hover:bg-accent/50 transition-colors duration-200">
                                        <h3 class="text-lg font-semibold text-card-foreground pr-4">What prerequisites do I
                                            need to start
                                            the courses?</h3><i
                                            class="fas fa-chevron-down text-primary transition-transform duration-200 rotate-180"></i>
                                    </button>
                                    <div class="px-6 pb-6">
                                        <div class="border-t border-border pt-4">
                                            <p class="text-muted-foreground leading-relaxed">Most of our courses are
                                                designed for beginners
                                                with no prior experience. For advanced courses, we provide a clear list of
                                                prerequisites. All
                                                you need is a computer, internet connection, and willingness to learn!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg border text-card-foreground shadow-sm bg-card border-border fade-in-up">
                                <div class="p-0"><button
                                        class="w-full p-6 text-left flex items-center justify-between hover:bg-accent/50 transition-colors duration-200">
                                        <h3 class="text-lg font-semibold text-card-foreground pr-4">How long does it take
                                            to complete a
                                            course?</h3><i
                                            class="fas fa-chevron-down text-primary transition-transform duration-200 "></i>
                                    </button></div>
                            </div>
                            <div class="rounded-lg border text-card-foreground shadow-sm bg-card border-border fade-in-up">
                                <div class="p-0"><button
                                        class="w-full p-6 text-left flex items-center justify-between hover:bg-accent/50 transition-colors duration-200">
                                        <h3 class="text-lg font-semibold text-card-foreground pr-4">Do you provide job
                                            placement assistance?
                                        </h3><i
                                            class="fas fa-chevron-down text-primary transition-transform duration-200 "></i>
                                    </button></div>
                            </div>
                            <div class="rounded-lg border text-card-foreground shadow-sm bg-card border-border fade-in-up">
                                <div class="p-0"><button
                                        class="w-full p-6 text-left flex items-center justify-between hover:bg-accent/50 transition-colors duration-200">
                                        <h3 class="text-lg font-semibold text-card-foreground pr-4">What kind of support do
                                            you offer during
                                            the course?</h3><i
                                            class="fas fa-chevron-down text-primary transition-transform duration-200 "></i>
                                    </button></div>
                            </div>
                            <div class="rounded-lg border text-card-foreground shadow-sm bg-card border-border fade-in-up">
                                <div class="p-0"><button
                                        class="w-full p-6 text-left flex items-center justify-between hover:bg-accent/50 transition-colors duration-200">
                                        <h3 class="text-lg font-semibold text-card-foreground pr-4">Are the certificates
                                            industry-recognized?</h3><i
                                            class="fas fa-chevron-down text-primary transition-transform duration-200 "></i>
                                    </button></div>
                            </div>
                            <div class="rounded-lg border text-card-foreground shadow-sm bg-card border-border fade-in-up">
                                <div class="p-0"><button
                                        class="w-full p-6 text-left flex items-center justify-between hover:bg-accent/50 transition-colors duration-200">
                                        <h3 class="text-lg font-semibold text-card-foreground pr-4">Can I access courses on
                                            mobile devices?
                                        </h3><i
                                            class="fas fa-chevron-down text-primary transition-transform duration-200 "></i>
                                    </button></div>
                            </div>
                            <div class="rounded-lg border text-card-foreground shadow-sm bg-card border-border fade-in-up">
                                <div class="p-0"><button
                                        class="w-full p-6 text-left flex items-center justify-between hover:bg-accent/50 transition-colors duration-200">
                                        <h3 class="text-lg font-semibold text-card-foreground pr-4">What is your refund
                                            policy?</h3><i
                                            class="fas fa-chevron-down text-primary transition-transform duration-200 "></i>
                                    </button></div>
                            </div>
                            <div class="rounded-lg border text-card-foreground shadow-sm bg-card border-border fade-in-up">
                                <div class="p-0"><button
                                        class="w-full p-6 text-left flex items-center justify-between hover:bg-accent/50 transition-colors duration-200">
                                        <h3 class="text-lg font-semibold text-card-foreground pr-4">How often is the course
                                            content updated?
                                        </h3><i
                                            class="fas fa-chevron-down text-primary transition-transform duration-200 "></i>
                                    </button></div>
                            </div>
                            <div class="rounded-lg border text-card-foreground shadow-sm bg-card border-border fade-in-up">
                                <div class="p-0"><button
                                        class="w-full p-6 text-left flex items-center justify-between hover:bg-accent/50 transition-colors duration-200">
                                        <h3 class="text-lg font-semibold text-card-foreground pr-4">Do you offer group
                                            discounts or
                                            corporate training?</h3><i
                                            class="fas fa-chevron-down text-primary transition-transform duration-200 "></i>
                                    </button></div>
                            </div>
                            <div class="rounded-lg border text-card-foreground shadow-sm bg-card border-border fade-in-up">
                                <div class="p-0"><button
                                        class="w-full p-6 text-left flex items-center justify-between hover:bg-accent/50 transition-colors duration-200">
                                        <h3 class="text-lg font-semibold text-card-foreground pr-4">What makes Azure Dev
                                            Academy different
                                            from other platforms?</h3><i
                                            class="fas fa-chevron-down text-primary transition-transform duration-200 "></i>
                                    </button></div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-12 fade-in-up">
                        <div class="bg-card border border-border rounded-lg p-8 max-w-2xl mx-auto">
                            <h3 class="text-xl font-semibold text-card-foreground mb-4">Still have questions?</h3>
                            <p class="text-muted-foreground mb-6">Our support team is here to help. Get in touch and we'll
                                respond
                                within 24 hours.</p><button
                                class="bg-primary text-primary-foreground hover:bg-primary-glow px-6 py-3 rounded-lg font-semibold shadow-glow transition-all duration-300">Contact
                                Support</button>
                        </div>
                    </div>
                </div>
            </section>
            <section id="blog" class="section-padding bg-background">
                <div class="container-custom">
                    <div class="text-center mb-16 fade-in-up">
                        <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">Latest from Our <span
                                class="text-primary">Blog</span></h2>
                        <p class="text-lg text-muted-foreground max-w-2xl mx-auto">Stay updated with the latest in tech,
                            career
                            tips, tutorials, and industry insights from our expert team.</p>
                    </div>
                    <div class="flex flex-wrap justify-center gap-2 mb-12 fade-in-up"><button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-primary/90 h-9 rounded-md px-3 bg-primary text-primary-foreground">All</button><button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border bg-background hover:text-accent-foreground h-9 rounded-md px-3 border-border hover:bg-accent">React</button><button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border bg-background hover:text-accent-foreground h-9 rounded-md px-3 border-border hover:bg-accent">Python</button><button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border bg-background hover:text-accent-foreground h-9 rounded-md px-3 border-border hover:bg-accent">Career</button><button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border bg-background hover:text-accent-foreground h-9 rounded-md px-3 border-border hover:bg-accent">Trends</button><button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border bg-background hover:text-accent-foreground h-9 rounded-md px-3 border-border hover:bg-accent">Tutorial</button><button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border bg-background hover:text-accent-foreground h-9 rounded-md px-3 border-border hover:bg-accent">Productivity</button>
                    </div>
                    <div
                        class="rounded-lg border text-card-foreground shadow-sm bg-card border-border hover:shadow-elegant transition-all duration-300 mb-12 fade-in-up">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                            <div class="relative overflow-hidden lg:rounded-l-lg"><img
                                    src="/assets/course-react-BGtL-_n-.jpg"
                                    alt="10 Essential React Hooks Every Developer Should Know"
                                    class="w-full h-64 lg:h-full object-cover hover:scale-105 transition-transform duration-300">
                                <div class="absolute top-4 left-4">
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 bg-primary text-primary-foreground">
                                        FEATURED</div>
                                </div>
                            </div>
                            <div class="p-8 flex flex-col justify-center">
                                <div class="flex items-center gap-4 mb-4 text-sm text-muted-foreground">
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-primary/20 text-primary">
                                        React</div><span>Dec 15, 2024</span><span>5 min read</span>
                                </div>
                                <h3
                                    class="text-2xl font-bold text-card-foreground mb-4 hover:text-primary transition-colors cursor-pointer">
                                    10 Essential React Hooks Every Developer Should Know</h3>
                                <p class="text-muted-foreground mb-6 leading-relaxed">Master the most important React hooks
                                    that will
                                    make you a more efficient developer. From useState to useContext, learn practical
                                    applications...</p>
                                <div class="flex items-center justify-between"><span
                                        class="text-sm text-muted-foreground">By Azure Dev
                                        Team</span><button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-10 px-4 py-2 bg-primary text-primary-foreground hover:bg-primary-glow">Read
                                        More</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm bg-card border-border hover:shadow-elegant transition-all duration-300 group fade-in-up">
                            <div class="flex flex-col space-y-1.5 p-0">
                                <div class="relative overflow-hidden rounded-t-lg"><img
                                        src="/assets/course-python-CzgP20S-.jpg"
                                        alt="Python for Data Science: Complete Beginner's Guide"
                                        class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                                    <div class="absolute top-4 left-4">
                                        <div
                                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-background/80 border-primary/20 text-primary">
                                            Python</div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-4 mb-3 text-xs text-muted-foreground"><span>Dec 12,
                                        2024</span><span>•</span><span>8 min read</span></div>
                                <h3
                                    class="text-lg font-semibold text-card-foreground mb-3 line-clamp-2 hover:text-primary transition-colors cursor-pointer">
                                    Python for Data Science: Complete Beginner's Guide</h3>
                                <p class="text-muted-foreground text-sm mb-4 line-clamp-3">Start your data science journey
                                    with Python.
                                    Learn pandas, numpy, and matplotlib through practical examples and real-world
                                    datasets...</p>
                                <div class="flex items-center justify-between"><span
                                        class="text-xs text-muted-foreground">By Azure Dev
                                        Team</span><button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent h-9 rounded-md px-3 text-primary hover:text-primary-glow">Read
                                        More <i class="fas fa-arrow-right ml-2"></i></button></div>
                            </div>
                        </div>
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm bg-card border-border hover:shadow-elegant transition-all duration-300 group fade-in-up">
                            <div class="flex flex-col space-y-1.5 p-0">
                                <div class="relative overflow-hidden rounded-t-lg"><img
                                        src="/assets/course-data-science-z84cVRPo.jpg"
                                        alt="Machine Learning Career Path: From Zero to Hero"
                                        class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                                    <div class="absolute top-4 left-4">
                                        <div
                                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-background/80 border-primary/20 text-primary">
                                            Career</div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-4 mb-3 text-xs text-muted-foreground"><span>Dec 10,
                                        2024</span><span>•</span><span>12 min read</span></div>
                                <h3
                                    class="text-lg font-semibold text-card-foreground mb-3 line-clamp-2 hover:text-primary transition-colors cursor-pointer">
                                    Machine Learning Career Path: From Zero to Hero</h3>
                                <p class="text-muted-foreground text-sm mb-4 line-clamp-3">Comprehensive roadmap for
                                    aspiring machine
                                    learning engineers. Discover the skills, tools, and projects you need to succeed...</p>
                                <div class="flex items-center justify-between"><span
                                        class="text-xs text-muted-foreground">By Azure Dev
                                        Team</span><button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent h-9 rounded-md px-3 text-primary hover:text-primary-glow">Read
                                        More <i class="fas fa-arrow-right ml-2"></i></button></div>
                            </div>
                        </div>
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm bg-card border-border hover:shadow-elegant transition-all duration-300 group fade-in-up">
                            <div class="flex flex-col space-y-1.5 p-0">
                                <div class="relative overflow-hidden rounded-t-lg"><img
                                        src="/assets/course-react-BGtL-_n-.jpg"
                                        alt="Web Development Trends to Watch in 2025"
                                        class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                                    <div class="absolute top-4 left-4">
                                        <div
                                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-background/80 border-primary/20 text-primary">
                                            Trends</div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-4 mb-3 text-xs text-muted-foreground"><span>Dec 8,
                                        2024</span><span>•</span><span>6 min read</span></div>
                                <h3
                                    class="text-lg font-semibold text-card-foreground mb-3 line-clamp-2 hover:text-primary transition-colors cursor-pointer">
                                    Web Development Trends to Watch in 2025</h3>
                                <p class="text-muted-foreground text-sm mb-4 line-clamp-3">Stay ahead of the curve with the
                                    latest web
                                    development trends. From AI integration to new frameworks, discover what's coming
                                    next...</p>
                                <div class="flex items-center justify-between"><span
                                        class="text-xs text-muted-foreground">By Azure Dev
                                        Team</span><button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent h-9 rounded-md px-3 text-primary hover:text-primary-glow">Read
                                        More <i class="fas fa-arrow-right ml-2"></i></button></div>
                            </div>
                        </div>
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm bg-card border-border hover:shadow-elegant transition-all duration-300 group fade-in-up">
                            <div class="flex flex-col space-y-1.5 p-0">
                                <div class="relative overflow-hidden rounded-t-lg"><img
                                        src="/assets/course-python-CzgP20S-.jpg"
                                        alt="Building Your First Full-Stack Application"
                                        class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                                    <div class="absolute top-4 left-4">
                                        <div
                                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-background/80 border-primary/20 text-primary">
                                            Tutorial</div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-4 mb-3 text-xs text-muted-foreground"><span>Dec 5,
                                        2024</span><span>•</span><span>15 min read</span></div>
                                <h3
                                    class="text-lg font-semibold text-card-foreground mb-3 line-clamp-2 hover:text-primary transition-colors cursor-pointer">
                                    Building Your First Full-Stack Application</h3>
                                <p class="text-muted-foreground text-sm mb-4 line-clamp-3">Step-by-step guide to creating a
                                    complete web
                                    application from scratch. Learn backend, frontend, and deployment best practices...</p>
                                <div class="flex items-center justify-between"><span
                                        class="text-xs text-muted-foreground">By Azure Dev
                                        Team</span><button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent h-9 rounded-md px-3 text-primary hover:text-primary-glow">Read
                                        More <i class="fas fa-arrow-right ml-2"></i></button></div>
                            </div>
                        </div>
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm bg-card border-border hover:shadow-elegant transition-all duration-300 group fade-in-up">
                            <div class="flex flex-col space-y-1.5 p-0">
                                <div class="relative overflow-hidden rounded-t-lg"><img
                                        src="/assets/course-data-science-z84cVRPo.jpg"
                                        alt="Remote Work Tips for Developers"
                                        class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                                    <div class="absolute top-4 left-4">
                                        <div
                                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-background/80 border-primary/20 text-primary">
                                            Productivity</div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-4 mb-3 text-xs text-muted-foreground"><span>Dec 1,
                                        2024</span><span>•</span><span>7 min read</span></div>
                                <h3
                                    class="text-lg font-semibold text-card-foreground mb-3 line-clamp-2 hover:text-primary transition-colors cursor-pointer">
                                    Remote Work Tips for Developers</h3>
                                <p class="text-muted-foreground text-sm mb-4 line-clamp-3">Maximize your productivity as a
                                    remote
                                    developer. Essential tools, communication strategies, and work-life balance
                                    techniques...</p>
                                <div class="flex items-center justify-between"><span
                                        class="text-xs text-muted-foreground">By Azure Dev
                                        Team</span><button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent h-9 rounded-md px-3 text-primary hover:text-primary-glow">Read
                                        More <i class="fas fa-arrow-right ml-2"></i></button></div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-12 fade-in-up"><button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border bg-background hover:text-accent-foreground h-10 border-border hover:bg-accent px-8 py-3">View
                            All Posts</button></div>
                </div>
            </section>
            <section id="contact" class="section-padding bg-accent/30">
                <div class="container-custom">
                    <div class="text-center mb-16 fade-in-up">
                        <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">Get in <span
                                class="text-primary">Touch</span></h2>
                        <p class="text-lg text-muted-foreground max-w-2xl mx-auto">Ready to start your coding journey? Have
                            questions about our courses? We'd love to hear from you.</p>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                        <div class="fade-in-up">
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm bg-card border-border shadow-elegant">
                                <div class="flex flex-col space-y-1.5 p-6">
                                    <h3 class="tracking-tight text-2xl font-bold text-card-foreground">Send us a Message
                                    </h3>
                                    <p class="text-muted-foreground">Fill out the form below and we'll get back to you
                                        within 24 hours.
                                    </p>
                                </div>
                                <div class="p-6 pt-0">
                                    <form class="space-y-6">
                                        <div><label for="name"
                                                class="block text-sm font-medium text-card-foreground mb-2">Full Name
                                                *</label><input type="text"
                                                class="flex h-10 w-full rounded-md border px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm bg-input border-border focus:border-primary focus:ring-primary"
                                                id="name" name="name" required=""
                                                placeholder="Enter your full name" value=""></div>
                                        <div><label for="email"
                                                class="block text-sm font-medium text-card-foreground mb-2">Email Address
                                                *</label><input type="email"
                                                class="flex h-10 w-full rounded-md border px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm bg-input border-border focus:border-primary focus:ring-primary"
                                                id="email" name="email" required=""
                                                placeholder="Enter your email address" value=""></div>
                                        <div><label for="message"
                                                class="block text-sm font-medium text-card-foreground mb-2">Message
                                                *</label>
                                            <textarea
                                                class="flex min-h-[80px] w-full rounded-md border px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 bg-input border-border focus:border-primary focus:ring-primary resize-none"
                                                id="message" name="message" required="" rows="6"
                                                placeholder="Tell us about your goals, questions, or how we can help you..."></textarea>
                                        </div>
                                        <button
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-10 px-4 w-full bg-primary text-primary-foreground hover:bg-primary-glow shadow-glow py-3"
                                            type="submit">Send Message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-6 fade-in-up">
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm bg-card border-border shadow-elegant">
                                <div class="p-0">
                                    <div class="h-64 bg-muted rounded-lg flex items-center justify-center">
                                        <div class="text-center text-muted-foreground"><i
                                                class="fas fa-map-marker-alt text-4xl mb-4 text-primary"></i>
                                            <p class="text-lg font-semibold">Azure Dev Academy</p>
                                            <p class="text-sm">Bharatpur-10, Chitwan, Nepal</p>
                                            <p class="text-sm mt-2">Google Map Integration</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm bg-card border-border shadow-elegant">
                                <div class="flex flex-col space-y-1.5 p-6">
                                    <h3 class="tracking-tight text-xl font-bold text-card-foreground">Contact Information
                                    </h3>
                                </div>
                                <div class="p-6 pt-0 space-y-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
                                            <i class="fas fa-map-marker-alt text-primary"></i>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-card-foreground">Address</p>
                                            <p class="text-muted-foreground text-sm">Bharatpur-10, Chitwan, Nepal</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
                                            <i class="fas fa-envelope text-primary"></i>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-card-foreground">Email</p>
                                            <p class="text-muted-foreground text-sm">hello@azure.com.np</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
                                            <i class="fas fa-phone text-primary"></i>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-card-foreground">Phone</p>
                                            <p class="text-muted-foreground text-sm">+977-98XXXXXXXX</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
                                            <i class="fas fa-clock text-primary"></i>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-card-foreground">Support Hours</p>
                                            <p class="text-muted-foreground text-sm">24/7 Online Support</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm bg-card border-border shadow-elegant">
                                <div class="flex flex-col space-y-1.5 p-6">
                                    <h3 class="tracking-tight text-xl font-bold text-card-foreground">Follow Us</h3>
                                    <p class="text-muted-foreground text-sm">Stay connected with our latest updates and
                                        community</p>
                                </div>
                                <div class="p-6 pt-0">
                                    <div class="flex gap-4"><a href="#"
                                            class="w-12 h-12 bg-primary/10 hover:bg-primary rounded-full flex items-center justify-center transition-all duration-300 hover:shadow-glow group"
                                            aria-label="Facebook"><i
                                                class="fab fa-facebook-f text-primary group-hover:text-primary-foreground transition-colors"></i></a><a
                                            href="#"
                                            class="w-12 h-12 bg-primary/10 hover:bg-primary rounded-full flex items-center justify-center transition-all duration-300 hover:shadow-glow group"
                                            aria-label="Instagram"><i
                                                class="fab fa-instagram text-primary group-hover:text-primary-foreground transition-colors"></i></a><a
                                            href="#"
                                            class="w-12 h-12 bg-primary/10 hover:bg-primary rounded-full flex items-center justify-center transition-all duration-300 hover:shadow-glow group"
                                            aria-label="LinkedIn"><i
                                                class="fab fa-linkedin-in text-primary group-hover:text-primary-foreground transition-colors"></i></a><a
                                            href="#"
                                            class="w-12 h-12 bg-primary/10 hover:bg-primary rounded-full flex items-center justify-center transition-all duration-300 hover:shadow-glow group"
                                            aria-label="Twitter"><i
                                                class="fab fa-twitter text-primary group-hover:text-primary-foreground transition-colors"></i></a><a
                                            href="#"
                                            class="w-12 h-12 bg-primary/10 hover:bg-primary rounded-full flex items-center justify-center transition-all duration-300 hover:shadow-glow group"
                                            aria-label="YouTube"><i
                                                class="fab fa-youtube text-primary group-hover:text-primary-foreground transition-colors"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="fixed bottom-8 right-8 z-40 transition-all duration-300 opacity-0 translate-y-16"><button
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 w-12 h-12 rounded-full bg-secondary hover:bg-secondary/90 text-secondary-foreground shadow-glow hover:shadow-xl transition-all duration-300"><i
                        class="fas fa-chevron-up text-lg"></i></button></div>
        </div>
    </div>
@endsection
