<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/aastyle.css">

</head>
<body>
    @include("inc.header")
    <div class="aa-video" style="padding-bottom: 50px">
        <div class="aa-video-player__warpper" style="background-color: #002333;">
            <section class="aa-video-player container">
                <div class="row">
                    <div class="col-12">
                        <div class="aa-video-player__title"><h1 class="text-white h1 mb-0">Fundamentals of DSLR Photography</h1></div>
                        <div class="aa-video-player__desc"><span class="text-white">Fundamentals of DSLR Photography</span></div>
                    </div>
                </div>

                <div class="aa-video-player__vedio row mt-3">
                    <div class="col-8">
                        <div class="embed-responsive">
                            <!-- <img class="img-fluid" src="assets/imgs/w1.jpg" alt="" width="800px" height="600px"> -->
                            <video id="aa-video-js-id" style="fill: cover;" preload="auto" width="100%" height="100%" poster="assets/imgs/w1.jpg"
                                data-setup='{}'>


                            </video>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="aa-video__class-list d-inline-block p-2" style="background-color: #001924;">
                            <div class="aa-video__class-list__title fw-bold text-white  ml-1">12 Lessons (1h 19m)</div>

                            <div class="aa-video__class-list__item">
                                <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px">    <path d="M 12 1 C 8.6761905 1 6 3.6761905 6 7 L 6 8 C 4.9 8 4 8.9 4 10 L 4 20 C 4 21.1 4.9 22 6 22 L 18 22 C 19.1 22 20 21.1 20 20 L 20 10 C 20 8.9 19.1 8 18 8 L 18 7 C 18 3.6761905 15.32381 1 12 1 z M 12 3 C 14.27619 3 16 4.7238095 16 7 L 16 8 L 8 8 L 8 7 C 8 4.7238095 9.7238095 3 12 3 z M 12 13 C 13.1 13 14 13.9 14 15 C 14 16.1 13.1 17 12 17 C 10.9 17 10 16.1 10 15 C 10 13.9 10.9 13 12 13 z"/></svg>
                                <a class="text-decoration-none text-white" href="#">
                                    <span class="title">1. Introduction</span>
                                    <span class="time">1:20</span>
                                </a>
                            </div>
                            <div class="aa-video__class-list__item">
                                <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px">    <path d="M 12 1 C 8.6761905 1 6 3.6761905 6 7 L 6 8 C 4.9 8 4 8.9 4 10 L 4 20 C 4 21.1 4.9 22 6 22 L 18 22 C 19.1 22 20 21.1 20 20 L 20 10 C 20 8.9 19.1 8 18 8 L 18 7 C 18 3.6761905 15.32381 1 12 1 z M 12 3 C 14.27619 3 16 4.7238095 16 7 L 16 8 L 8 8 L 8 7 C 8 4.7238095 9.7238095 3 12 3 z M 12 13 C 13.1 13 14 13.9 14 15 C 14 16.1 13.1 17 12 17 C 10.9 17 10 16.1 10 15 C 10 13.9 10.9 13 12 13 z"/></svg>
                                <a class="text-decoration-none text-white" href="#">
                                    <span class="title">2. Understanding Your DSLR</span>
                                    <span class="time">10:07</span>
                                </a>
                            </div>
                            <div class="aa-video__class-list__item">
                                <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px">    <path d="M 12 1 C 8.6761905 1 6 3.6761905 6 7 L 6 8 C 4.9 8 4 8.9 4 10 L 4 20 C 4 21.1 4.9 22 6 22 L 18 22 C 19.1 22 20 21.1 20 20 L 20 10 C 20 8.9 19.1 8 18 8 L 18 7 C 18 3.6761905 15.32381 1 12 1 z M 12 3 C 14.27619 3 16 4.7238095 16 7 L 16 8 L 8 8 L 8 7 C 8 4.7238095 9.7238095 3 12 3 z M 12 13 C 13.1 13 14 13.9 14 15 C 14 16.1 13.1 17 12 17 C 10.9 17 10 16.1 10 15 C 10 13.9 10.9 13 12 13 z"/></svg>
                                <a class="text-decoration-none text-white" href="#">
                                    <span class="title">3. Balancing the Exposure Triangle</span>
                                    <span class="time">05:25</span></a>
                            </div>
                            <div class="aa-video__class-list__item">
                                <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px">    <path d="M 12 1 C 8.6761905 1 6 3.6761905 6 7 L 6 8 C 4.9 8 4 8.9 4 10 L 4 20 C 4 21.1 4.9 22 6 22 L 18 22 C 19.1 22 20 21.1 20 20 L 20 10 C 20 8.9 19.1 8 18 8 L 18 7 C 18 3.6761905 15.32381 1 12 1 z M 12 3 C 14.27619 3 16 4.7238095 16 7 L 16 8 L 8 8 L 8 7 C 8 4.7238095 9.7238095 3 12 3 z M 12 13 C 13.1 13 14 13.9 14 15 C 14 16.1 13.1 17 12 17 C 10.9 17 10 16.1 10 15 C 10 13.9 10.9 13 12 13 z"/></svg>
                                <a class="text-decoration-none text-white" href="#">
                                    <span class="title">4. Preparing to Shoot</span><span class="time">14:50</span></a>
                            </div>
                            <div class="aa-video__class-list__item">
                                <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px">    <path d="M 12 1 C 8.6761905 1 6 3.6761905 6 7 L 6 8 C 4.9 8 4 8.9 4 10 L 4 20 C 4 21.1 4.9 22 6 22 L 18 22 C 19.1 22 20 21.1 20 20 L 20 10 C 20 8.9 19.1 8 18 8 L 18 7 C 18 3.6761905 15.32381 1 12 1 z M 12 3 C 14.27619 3 16 4.7238095 16 7 L 16 8 L 8 8 L 8 7 C 8 4.7238095 9.7238095 3 12 3 z M 12 13 C 13.1 13 14 13.9 14 15 C 14 16.1 13.1 17 12 17 C 10.9 17 10 16.1 10 15 C 10 13.9 10.9 13 12 13 z"/></svg>
                                <a class="text-decoration-none text-white" href="#">
                                    <span class="title">5. Studio Demonstration</span><span class="time">5:10</span></a>
                            </div>
                            <div class="aa-video__class-list__item">
                                <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px">    <path d="M 12 1 C 8.6761905 1 6 3.6761905 6 7 L 6 8 C 4.9 8 4 8.9 4 10 L 4 20 C 4 21.1 4.9 22 6 22 L 18 22 C 19.1 22 20 21.1 20 20 L 20 10 C 20 8.9 19.1 8 18 8 L 18 7 C 18 3.6761905 15.32381 1 12 1 z M 12 3 C 14.27619 3 16 4.7238095 16 7 L 16 8 L 8 8 L 8 7 C 8 4.7238095 9.7238095 3 12 3 z M 12 13 C 13.1 13 14 13.9 14 15 C 14 16.1 13.1 17 12 17 C 10.9 17 10 16.1 10 15 C 10 13.9 10.9 13 12 13 z"/></svg>
                                <a class="text-decoration-none text-white" href="#">
                                    <span class="title">6. Deep Dive: Shutter Speed</span><span class="time">8:14</span>
                                </a>
                            </div>
                            <div class="aa-video__class-list__item">
                                <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px">    <path d="M 12 1 C 8.6761905 1 6 3.6761905 6 7 L 6 8 C 4.9 8 4 8.9 4 10 L 4 20 C 4 21.1 4.9 22 6 22 L 18 22 C 19.1 22 20 21.1 20 20 L 20 10 C 20 8.9 19.1 8 18 8 L 18 7 C 18 3.6761905 15.32381 1 12 1 z M 12 3 C 14.27619 3 16 4.7238095 16 7 L 16 8 L 8 8 L 8 7 C 8 4.7238095 9.7238095 3 12 3 z M 12 13 C 13.1 13 14 13.9 14 15 C 14 16.1 13.1 17 12 17 C 10.9 17 10 16.1 10 15 C 10 13.9 10.9 13 12 13 z"/></svg>
                                <a class="text-decoration-none text-white" href="#">
                                    <span class="title">7. Deep Dive: Aperture</span><span class="time">20:5</span>
                                </a>
                            </div>
                            <div class="aa-video__class-list__item">
                                <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px">    <path d="M 12 1 C 8.6761905 1 6 3.6761905 6 7 L 6 8 C 4.9 8 4 8.9 4 10 L 4 20 C 4 21.1 4.9 22 6 22 L 18 22 C 19.1 22 20 21.1 20 20 L 20 10 C 20 8.9 19.1 8 18 8 L 18 7 C 18 3.6761905 15.32381 1 12 1 z M 12 3 C 14.27619 3 16 4.7238095 16 7 L 16 8 L 8 8 L 8 7 C 8 4.7238095 9.7238095 3 12 3 z M 12 13 C 13.1 13 14 13.9 14 15 C 14 16.1 13.1 17 12 17 C 10.9 17 10 16.1 10 15 C 10 13.9 10.9 13 12 13 z"/></svg>
                                <a class="text-decoration-none text-white" href="#">
                                    <span class="title">8. Deep Dive: ISO</span><span class="time">17:08</span>
                                </a>
                            </div>
                            <div class="aa-video__class-list__item">
                                <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px">    <path d="M 12 1 C 8.6761905 1 6 3.6761905 6 7 L 6 8 C 4.9 8 4 8.9 4 10 L 4 20 C 4 21.1 4.9 22 6 22 L 18 22 C 19.1 22 20 21.1 20 20 L 20 10 C 20 8.9 19.1 8 18 8 L 18 7 C 18 3.6761905 15.32381 1 12 1 z M 12 3 C 14.27619 3 16 4.7238095 16 7 L 16 8 L 8 8 L 8 7 C 8 4.7238095 9.7238095 3 12 3 z M 12 13 C 13.1 13 14 13.9 14 15 C 14 16.1 13.1 17 12 17 C 10.9 17 10 16.1 10 15 C 10 13.9 10.9 13 12 13 z"/></svg>
                                <a class="text-decoration-none text-white" href="#">
                                    <span class="title">9. Editing Tips & Tricks</span><span class="time">6:42</span>
                                </a>
                            </div>
                            <div class="aa-video__class-list__item">
                                <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px">    <path d="M 12 1 C 8.6761905 1 6 3.6761905 6 7 L 6 8 C 4.9 8 4 8.9 4 10 L 4 20 C 4 21.1 4.9 22 6 22 L 18 22 C 19.1 22 20 21.1 20 20 L 20 10 C 20 8.9 19.1 8 18 8 L 18 7 C 18 3.6761905 15.32381 1 12 1 z M 12 3 C 14.27619 3 16 4.7238095 16 7 L 16 8 L 8 8 L 8 7 C 8 4.7238095 9.7238095 3 12 3 z M 12 13 C 13.1 13 14 13.9 14 15 C 14 16.1 13.1 17 12 17 C 10.9 17 10 16.1 10 15 C 10 13.9 10.9 13 12 13 z"/></svg>
                                <a class="text-decoration-none text-white" href="#">
                                    <span class="title">10. Final Thoughts</span><span class="time">14:03</span>
                                </a>
                            </div>
                            <div class="aa-video__class-list__item">
                                <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px">    <path d="M 12 1 C 8.6761905 1 6 3.6761905 6 7 L 6 8 C 4.9 8 4 8.9 4 10 L 4 20 C 4 21.1 4.9 22 6 22 L 18 22 C 19.1 22 20 21.1 20 20 L 20 10 C 20 8.9 19.1 8 18 8 L 18 7 C 18 3.6761905 15.32381 1 12 1 z M 12 3 C 14.27619 3 16 4.7238095 16 7 L 16 8 L 8 8 L 8 7 C 8 4.7238095 9.7238095 3 12 3 z M 12 13 C 13.1 13 14 13.9 14 15 C 14 16.1 13.1 17 12 17 C 10.9 17 10 16.1 10 15 C 10 13.9 10.9 13 12 13 z"/></svg>
                                <a class="text-decoration-none text-white" href="#">
                                    <span class="title">11. Bonus: Buying Cameras & Lenses</span>
                                    <span class="time">13:05</span>
                                </a>
                            </div>
                            <div class="aa-video__class-list__item">
                                <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px">    <path d="M 12 1 C 8.6761905 1 6 3.6761905 6 7 L 6 8 C 4.9 8 4 8.9 4 10 L 4 20 C 4 21.1 4.9 22 6 22 L 18 22 C 19.1 22 20 21.1 20 20 L 20 10 C 20 8.9 19.1 8 18 8 L 18 7 C 18 3.6761905 15.32381 1 12 1 z M 12 3 C 14.27619 3 16 4.7238095 16 7 L 16 8 L 8 8 L 8 7 C 8 4.7238095 9.7238095 3 12 3 z M 12 13 C 13.1 13 14 13.9 14 15 C 14 16.1 13.1 17 12 17 C 10.9 17 10 16.1 10 15 C 10 13.9 10.9 13 12 13 z"/></svg>
                                <a class="text-decoration-none text-white" href="#">
                                    <span class="title">12. Learn More from Justin</span>
                                    <span class="time">10:10</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section class="aa-content container mt-5">
            <div class="row">
                <div class="col-8">

                    <div class="aa-top-badg d-flex justify-content-around">
                        <div class="px-2 py-3 bg-gradient bg-dark text-light text-center rounded" style="width: 128px;">
                            <p class="fw-bold m-1"><img src="assets/imgs/yes-check-blue.svg" alt=""></p>
                            <p class="m-0" style="color: #b2b3b5;">Beginner level</p>
                        </div>
                        <div class="px-2 py-3 bg-gradient bg-dark text-light text-center rounded" style="width: 128px;">
                            <p class="fw-bold m-1">97,137</p>
                            <p class="m-0" style="color: #b2b3b5;">Students</p>
                        </div>
                        <div class="px-2 py-3 bg-gradient bg-dark text-light text-center rounded" style="width: 128px;">
                            <p class="fw-bold m-1">275</p>
                            <p class="m-0" style="color: #b2b3b5;">Projects</p>
                        </div>
                    </div>

                    <div class="aa-content__about mt-5">
                        <div class="h3">About This Class</div>
                        New to DSLR cameras? Learn fundamentals for your best photos yet!

                        This introductory photography class is a smart, inspiring way to get
                         up to speed quickly. Taught by photographer Justin Bridges, you'll learn how to manually balance
                         shutter speed, aperture, and ISO to achieve perfect exposure, every time — and then hit the NYC
                         streets to see it all in action.

                        Easy-to-follow lessons include how to:

                        Balance shutter speed, aperture, and ISO for perfect exposure (and conquer fear of "manual" mode)
                        Freeze and blur motion via shutter speed
                        Control background blur via aperture
                        Edit your photos in 5 minutes or less
                        Plus, you'll also learn Justin's go-to camera settings, must-have gear, and recommendations on a
                        budget. By the end, you'll know how to master your settings, shoot in manual mode for total control, and create the pro-level photos you've always imagined.
                    </div>
                    <hr class="my-4">
                    <section class="aa-related-skills">
                        <div class="aa-related-skills__header mb-2">
                            <span class="h3">Related Skills</span>
                        </div>
                        <div class="aa-related-skills__badge">
                            <a href="#">
                                <div class="px-3 border rounded d-inline-block">Photography</div>
                            </a>
                            <a href="#">
                                <div class="px-3 border rounded d-inline-block">Digital Photography</div>
                            </a>
                            <a href="#">
                                <div class="px-3 border rounded d-inline-block">Dslr</div>
                            </a>
                            <a href="#">
                                <div class="px-3 border rounded d-inline-block">Creative</div>
                            </a>
                            <a href="#">
                                <div class="px-3 border rounded d-inline-block">Camera</div>
                            </a>

                        </div>
                    </section>

                    <section class="aa-related-classess mt-5">
                        <div class="row">
                            <div class="col-6">
                                <div class="aa-related-classess__warpper">
                                    <div class="aa-related-classess__card card shadow-sm">
                                        <img src="assets/imgs/ACHHVDI53NGFNPVCUPHTMVVO7Y.jpg" alt="Daniel Fakharzadeh" class="aa-related-classess__img img-fluid">
                                        <div class="aa-related-classess__card-content p-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="aa-related-classess__card-tilte">Daniel Fakharzadeh</div>
                                                <div class="aa-related-classess__card-likes">110 Like</div>
                                            </div>
                                            <div class="aa-related-classess__card-commont mt-2">3 comments</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="aa-related-classess__warpper">
                                    <div class="aa-related-classess__card card shadow-sm">
                                        <img src="assets/imgs/jpg.jpg" alt="Daniel Fakharzadeh" class="aa-related-classess__img img-fluid">
                                        <div class="aa-related-classess__card-content p-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="aa-related-classess__card-tilte">Bill Antonucci</div>
                                                <div class="aa-related-classess__card-likes">110 Like</div>
                                            </div>
                                            <div class="aa-related-classess__card-commont mt-2">3 comments</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="aa-related-classess__warpper">
                                    <div class="aa-related-classess__card card shadow-sm">
                                        <img src="assets/imgs/Best-DSLR-Photography-course-tutorial-class-certification-training-online.jpg" alt="Daniel Fakharzadeh" class="aa-related-classess__img img-fluid">
                                        <div class="aa-related-classess__card-content p-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="aa-related-classess__card-tilte">Steven D. Elliott</div>
                                                <div class="aa-related-classess__card-likes">110 Like</div>
                                            </div>
                                            <div class="aa-related-classess__card-commont mt-2">3 comments</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="aa-related-classess__warpper">
                                    <div class="aa-related-classess__card card shadow-sm">
                                        <img src="assets/imgs/Online-Photography-Courses-for-Nikon-Canon-Cameras.jpg" alt="Daniel Fakharzadeh" class="aa-related-classess__img img-fluid">
                                        <div class="aa-related-classess__card-content p-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="aa-related-classess__card-tilte">January Jaxon</div>
                                                <div class="aa-related-classess__card-likes">110 Like</div>
                                            </div>
                                            <div class="aa-related-classess__card-commont mt-2">3 comments</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                <div class="col-4"></div>
            </div>
        </section>

    </div>
    @include("inc.footer")
    <script src="assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
