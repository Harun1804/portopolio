@extends('layouts.master')

@section('content')
@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
<section class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
            <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
                <div class="text text-center">
                    <span class="subheading">Hey! My Name Is</span>
                    <h1>Harun Ar - Rasyid</h1>
                    <h2>I'm a
                        <span class="txt-rotate" data-period="2000"
                            data-rotate='[ "Web Developer.", "Backend Developer.", "PHP Developer.", "Laravel Developer"]'></span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="mouse">
        <a href="#" class="mouse-icon">
            <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
        </a>
    </div>
</section>

<section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 col-lg-6 d-flex">
                <div class="img-about img d-flex align-items-stretch">
                    <div class="overlay"></div>
                    <div class="img d-flex align-self-stretch align-items-center"
                        style="background-image:url({{ asset('assets/images/about.jpg') }});">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 pl-md-5 py-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h1 class="big">About</h1>
                        <h2 class="mb-4">About Me</h2>
                        <p>“It’s Not Easy to Give Up” is the right sentence to describe myself and “Hard Worker” has become part of me</p>
                        <ul class="about-info mt-4 px-md-0 px-2">
                            <li class="d-flex"><span>Name :</span> <span>Harun Ar - Rasyid</span></li>
                            <li class="d-flex"><span>Email :</span> <span>Harun.arrasyid1804@gmail.com</span></li>
                            <li class="d-flex"><span>Phone Number: </span> <span>+62-851-5632-0812</span></li>
                        </ul>
                    </div>
                </div>
                <div class="counter-wrap ftco-animate d-flex mt-md-3">
                    <div class="text">
                        <p class="mb-4">
                            <span class="number" data-number="{{ $projects->count() }}">0</span>
                            <span>Project complete</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb goto-here" id="resume-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <nav id="navi">
                    <ul>
                        <li><a href="#page-1">Education</a></li>
                        <li><a href="#page-2">Organization Experience</a></li>
                        <li><a href="#page-3">Work Experience</a></li>
                        <li><a href="#page-4">Skills</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-9">
                <div id="page-1" class="page one">
                    <h2 class="heading">Education</h2>
                    @forelse ($educations as $education)
                    <div class="resume-wrap d-flex ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-ideas"></span>
                        </div>
                        <div class="text pl-3">
                            <span class="date">{{ \Carbon\Carbon::parse($education->in)->year }} - {{ ($education->out == null) ? 'NOW' : \Carbon\Carbon::parse($education->out)->year }}</span>
                            <h2>{{ $education->position }}</h2>
                            <span class="position">{{ $education->subposition }}</span>
                            <p>{{ $education->desc }}</p>
                        </div>
                    </div>
                    @empty
                    <div class="resume-wrap d-flex ftco-animate">
                        <div class="text pl-3">
                            <h2 style="text-align: center">No Data Found</h2>
                        </div>
                    </div>
                    @endforelse
                </div>
                <div id="page-2" class="page two">
                    <h2 class="heading">Organization Experience</h2>
                    @forelse ($organizations as $organization)
                    <div class="resume-wrap d-flex ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-ideas"></span>
                        </div>
                        <div class="text pl-3">
                            <span class="date">{{ \Carbon\Carbon::parse($organization->in)->year }} - {{ ($organization->out == null) ? 'NOW' : \Carbon\Carbon::parse($organization->out)->year }}</span>
                            <h2>{{ $organization->position }}</h2>
                            <span class="position">{{ $organization->subposition }}</span>
                            <p>{{ $organization->desc }}</p>
                        </div>
                    </div>
                    @empty
                    <div class="resume-wrap d-flex ftco-animate">
                        <div class="text pl-3">
                            <h2 style="text-align: center">No Data Found</h2>
                        </div>
                    </div>
                    @endforelse
                </div>
                <div id="page-3" class="page three">
                    <h2 class="heading">Work Experience</h2>
                    @forelse ($works as $work)
                    <div class="resume-wrap d-flex ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-ideas"></span>
                        </div>
                        <div class="text pl-3">
                            <span class="date">{{ \Carbon\Carbon::parse($work->in)->format('F Y') }} - {{ ($work->out == null) ? 'NOW' : \Carbon\Carbon::parse($work->out)->format('F Y') }}</span>
                            <h2>{{ $work->position }}</h2>
                            <span class="position">{{ $work->subposition }}</span>
                            <p>{{ $work->desc }}</p>
                        </div>
                    </div>
                    @empty
                    <div class="resume-wrap d-flex ftco-animate">
                        <div class="text pl-3">
                            <h2 style="text-align: center">No Data Found</h2>
                        </div>
                    </div>
                    @endforelse
                </div>
                <div id="page-4" class="page four">
                    <h2 class="heading">Skills</h2>
                    <div class="row">
                        @forelse ($mainSkills as $skill)
                            <div class="row progress-circle mb-5">
                                <div class="col-lg-12 mb-4 mr-3">
                                    <div class="bg-white rounded-lg p-4">
                                        <!-- Progress bar 1 -->
                                        <div class="progress mx-auto" data-value={{ $skill->value }}>
                                            <span class="progress-left">
                                                <span class="progress-bar border-primary"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar border-primary"></span>
                                            </span>
                                            <div
                                                class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                                <div class="h2 font-weight-bold">{{ $skill->name }}</div>
                                            </div>
                                        </div>
                                        <!-- END -->
                                    </div>
                                </div>
                            </div>
                        @empty
                        <div class="col-md-12" style="text-align: center">
                            No Data Found
                        </div>
                        @endforelse

                        @forelse ($skills as $skill)
                        <div class="col-md-6 animate-box">
                            <div class="progress-wrap ftco-animate">
                                <h3>{{ $skill->name }}</h3>
                                {{-- <div class="progress">
                                    <div class="progress-bar color-2" role="progressbar" aria-valuenow="{{ $skill->value }}"
                                        aria-valuemin="0" aria-valuemax="100" style="width:{{ $skill->value }}%">
                                        <span></span>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        @empty
                        <div class="col-md-12" style="text-align: center">
                            No Data Found
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section" id="services-section">
    <div class="container-fluid px-md-5">
        <div class="row justify-content-center py-5 mt-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">Services</h1>
                <h2 class="mb-4">Services</h2>
                <p>Everyone has different abilities. Not taking advantage of one's abilities means being ready to accept the harshness of the world</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-center d-flex ftco-animate">
                <a href="#" class="services-1 shadow">
                    <span class="icon">
                        <i class="icon-globe"></i>
                    </span>
                    <div class="desc">
                        <h3 class="mb-5">WEB DEVELOPER</h3>
                        <p>Create a simple website or higher and target the required business processes</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 text-center d-flex ftco-animate">
                <a href="#" class="services-1 shadow">
                    <span class="icon">
                        <i class="flaticon-ux-design"></i>
                    </span>
                    <div class="desc">
                        <h3 class="mb-5">DATABASE DESIGNER</h3>
                        <p>Knowing the requirements needed to manage the data that will be used so that they are able to build the data structures required by the application.</p>
                    </div>
                </a>
            </div>

            <div class="col-md-6 text-center d-flex ftco-animate">
                <a href="#" class="services-1 shadow">
                    <span class="icon">
                        <i class="flaticon-innovation"></i>
                    </span>
                    <div class="desc">
                        <h3 class="mb-5">APP DEVELOPMENT</h3>
                        <p>Build applications according to the needs needed</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 text-center d-flex ftco-animate">
                <a href="#" class="services-1 shadow">
                    <span class="icon">
                        <i class="flaticon-ideas"></i>
                    </span>
                    <div class="desc">
                        <h3 class="mb-5">SOURCE CODE MANAGEMENT</h3>
                        <p>Able to manage every line of code that is made and made with aesthetics</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-project" id="projects-section">
    <div class="container-fluid px-md-0">
        <div class="row no-gutters justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">Projects</h1>
                <h2 class="mb-4">Finished Project</h2>
                <p>Web Based Application Project</p>
            </div>
        </div>
        <div class="row no-gutters">
            @forelse ($projects as $project)
            <div class="col-md-4">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                    style="background-image: url({{ $project->thumbnail }});">
                    <div class="overlay"></div>
                    <div class="text text-center p-4">
                        <h3><a href="#">{{ $project->name }}</a></h3>
                        <span>{{ $project->tech }}</span>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-md-12" style="text-align: center">
                No Data Found
            </div>
            @endforelse
        </div>
    </div>
</section>

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h1 class="big big-2">Contact</h1>
                <h2 class="mb-4">Contact Me</h2>
                <p>If you have any questions, please contact</p>
            </div>
        </div>

        <div class="row d-flex contact-info mb-5">
            <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                <div class="align-self-stretch box text-center p-4 shadow">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-phone2"></span>
                    </div>
                    <div>
                        <h3 class="mb-4">Phone Number</h3>
                        <p><a href="tel://+6285156320812">+62-851-5632-0812</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                <div class="align-self-stretch box text-center p-4 shadow">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-paper-plane"></span>
                    </div>
                    <div>
                        <h3 class="mb-4">Email Address</h3>
                        <p><a href="mailto:harun.arrasyid1804@gmail.com">harun.arrasyid1804@gmail.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                <div class="align-self-stretch box text-center p-4 shadow">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-globe"></span>
                    </div>
                    <div>
                        <h3 class="mb-4">Website</h3>
                        <p><a href="#">https://harun1804.github.io/Portolio-Site/</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
