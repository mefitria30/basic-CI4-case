<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Heebo:400,500,700|Fira+Sans:600" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets-landing-page/dist/css/style.css">
    <script src="https://unpkg.com/animejs@2.2.0/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>

<body class="is-boxed has-animations">
    <div class="body-wrap boxed-container">
        <header class="site-header">
            <div class="header-shape header-shape-1">
                <svg width="337" height="222" viewBox="0 0 337 222" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient x1="50%" y1="55.434%" x2="50%" y2="0%" id="header-shape-1">
                            <stop stop-color="#E0E1FE" stop-opacity="0" offset="0%" />
                            <stop stop-color="#E0E1FE" offset="100%" />
                        </linearGradient>
                    </defs>
                    <path d="M1103.21 0H1440v400h-400c145.927-118.557 166.997-251.89 63.21-400z"
                        transform="translate(-1103)" fill="url(#header-shape-1)" fill-rule="evenodd" />
                </svg>
            </div>
            <div class="header-shape header-shape-2">
                <svg width="128" height="128" viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg"
                    style="overflow:visible">
                    <defs>
                        <linearGradient x1="93.05%" y1="19.767%" x2="15.034%" y2="85.765%" id="header-shape-2">
                            <stop stop-color="#FF3058" offset="0%" />
                            <stop stop-color="#FF6381" offset="100%" />
                        </linearGradient>
                    </defs>
                    <circle class="anime-element fadeup-animation" cx="64" cy="64" r="64" fill="url(#header-shape-2)"
                        fill-rule="evenodd" />
                </svg>
            </div>
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="#">
                                <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg">
                                    <title>April</title>
                                    <defs>
                                        <linearGradient x1="114.674%" y1="39.507%" x2="-52.998%" y2="39.507%"
                                            id="logo-a">
                                            <stop stop-color="#8D92FA" offset="0%" />
                                            <stop stop-color="#8D92FA" stop-opacity="0" offset="100%" />
                                        </linearGradient>
                                        <linearGradient x1="93.05%" y1="19.767%" x2="15.034%" y2="85.765%" id="logo-b">
                                            <stop stop-color="#FF3058" offset="0%" />
                                            <stop stop-color="#FF6381" offset="100%" />
                                        </linearGradient>
                                        <linearGradient x1="32.716%" y1="-20.176%" x2="32.716%" y2="148.747%"
                                            id="logo-c">
                                            <stop stop-color="#FF97AA" offset="0%" />
                                            <stop stop-color="#FF97AA" stop-opacity="0" offset="100%" />
                                        </linearGradient>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd">
                                        <path
                                            d="M31.12 7.482C28.327 19.146 19.147 28.326 7.483 31.121A12.04 12.04 0 0 1 .88 24.518C3.674 12.854 12.854 3.674 24.518.879a12.04 12.04 0 0 1 6.603 6.603z"
                                            fill="#312ECA" />
                                        <path
                                            d="M28.874 3.922l-24.91 24.99a12.026 12.026 0 0 1-3.085-4.394C3.674 12.854 12.854 3.674 24.518.879a12.025 12.025 0 0 1 4.356 3.043z"
                                            fill="url(#logo-a)" />
                                        <g opacity=".88">
                                            <path
                                                d="M31.12 24.518a12.04 12.04 0 0 1-6.602 6.603C12.854 28.326 3.674 19.146.879 7.482A12.04 12.04 0 0 1 7.482.88c11.664 2.795 20.844 11.975 23.639 23.639z"
                                                fill="url(#logo-b)" />
                                            <path
                                                d="M24.518 31.12C12.854 28.327 3.674 19.147.879 7.483A12.015 12.015 0 0 1 3.46 3.57L28.47 28.5a12.016 12.016 0 0 1-3.951 2.62z"
                                                fill="url(#logo-c)" />
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="testimonials section">
                <div class="testimonials-shape testimonials-shape-1">
                    <svg width="280" height="280" viewBox="0 0 280 280" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient x1="100%" y1="0%" x2="0%" y2="100%" id="testimonials-shape-1">
                                <stop stop-color="#261FB6" offset="0%" />
                                <stop stop-color="#4950F6" offset="100%" />
                            </linearGradient>
                        </defs>
                        <circle cx="140" cy="685" r="140" transform="translate(0 -545)"
                            fill="url(#testimonials-shape-1)" fill-rule="evenodd" />
                    </svg>
                </div>
                <div class="testimonials-shape testimonials-shape-2">
                    <svg width="125" height="107" viewBox="0 0 125 107" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none" fill-rule="evenodd">
                            <circle fill="#C6FDF3" cx="48" cy="59" r="48" />
                            <path
                                d="M58.536 39.713c0-6.884 1.72-14.007 5.163-21.368 3.443-7.36 8.167-13.458 14.173-18.292l11.645 7.91c-3.589 4.98-6.262 10.016-8.02 15.106S78.86 33.598 78.86 39.384v13.623H58.536V39.713z"
                                fill="#55EBD0" />
                            <path
                                d="M93.252 39.713c0-6.884 1.722-14.007 5.164-21.368 3.442-7.36 8.166-13.458 14.172-18.292l11.646 7.91c-3.589 4.98-6.262 10.016-8.02 15.106s-2.637 10.529-2.637 16.315v13.623H93.252V39.713z"
                                fill="#1ADAB7" />
                        </g>
                    </svg>
                </div>
                <div class="testimonials-shape testimonials-shape-3">
                    <svg width="48" height="48" viewBox="0 0 48 48" mlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient x1="93.05%" y1="19.767%" x2="15.034%" y2="85.765%"
                                id="testimonials-shape-3">
                                <stop stop-color="#FF3058" offset="0%" />
                                <stop stop-color="#FF6381" offset="100%" />
                            </linearGradient>
                        </defs>
                        <circle cx="24" cy="434" r="24" transform="translate(0 -410)" fill="url(#testimonials-shape-3)"
                            fill-rule="evenodd" />
                    </svg>
                </div>
                <div class="container">
                    <div class="testimonials-inner section-inner">
                        <h2 class="section-title mt-0 text-center">Testimonials</h2>
                        <div class="testimonials-wrap">
                            <?php 
                                foreach($testimonial as $key => $row)
                                {
                            ?>
                            <div class="testimonial text-xs is-revealing">
                                <div class="testimonial-inner">
                                    <div class="testimonial-main">
                                        <div class="testimonial-header">
                                            <img class="mb-16" src="<?= base_url('uploads/'.$row['image'])?>"
                                                alt="Testimonial">
                                        </div>
                                        <div class="testimonial-body">
                                            <p class="mb-0"><?= $row['deskripsi']?></p>
                                        </div>
                                    </div>
                                    <div class="testimonial-footer">
                                        <div class="testimonial-link">
                                            <a href="#"><?= $row['username']?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="site-footer-inner has-top-divider">
                    <div class="brand footer-brand">
                        <a href="#">
                            <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg">
                                <title>April</title>
                                <defs>
                                    <linearGradient x1="114.674%" y1="39.507%" x2="-52.998%" y2="39.507%"
                                        id="logo-footer-a">
                                        <stop stop-color="#8D92FA" offset="0%" />
                                        <stop stop-color="#8D92FA" stop-opacity="0" offset="100%" />
                                    </linearGradient>
                                    <linearGradient x1="93.05%" y1="19.767%" x2="15.034%" y2="85.765%"
                                        id="logo-footer-b">
                                        <stop stop-color="#FF3058" offset="0%" />
                                        <stop stop-color="#FF6381" offset="100%" />
                                    </linearGradient>
                                    <linearGradient x1="32.716%" y1="-20.176%" x2="32.716%" y2="148.747%"
                                        id="logo-footer-c">
                                        <stop stop-color="#FF97AA" offset="0%" />
                                        <stop stop-color="#FF97AA" stop-opacity="0" offset="100%" />
                                    </linearGradient>
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                    <path
                                        d="M31.12 7.482C28.327 19.146 19.147 28.326 7.483 31.121A12.04 12.04 0 0 1 .88 24.518C3.674 12.854 12.854 3.674 24.518.879a12.04 12.04 0 0 1 6.603 6.603z"
                                        fill="#312ECA" />
                                    <path
                                        d="M28.874 3.922l-24.91 24.99a12.026 12.026 0 0 1-3.085-4.394C3.674 12.854 12.854 3.674 24.518.879a12.025 12.025 0 0 1 4.356 3.043z"
                                        fill="url(#logo-footer-a)" />
                                    <g opacity=".88">
                                        <path
                                            d="M31.12 24.518a12.04 12.04 0 0 1-6.602 6.603C12.854 28.326 3.674 19.146.879 7.482A12.04 12.04 0 0 1 7.482.88c11.664 2.795 20.844 11.975 23.639 23.639z"
                                            fill="url(#logo-footer-b)" />
                                        <path
                                            d="M24.518 31.12C12.854 28.327 3.674 19.147.879 7.483A12.015 12.015 0 0 1 3.46 3.57L28.47 28.5a12.016 12.016 0 0 1-3.951 2.62z"
                                            fill="url(#logo-footer-c)" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <ul class="footer-links list-reset">
                        <li>
                            <a href="#">Contact</a>
                        </li>
                        <li>
                            <a href="#">About us</a>
                        </li>
                        <li>
                            <a href="#">FAQ's</a>
                        </li>
                        <li>
                            <a href="#">Support</a>
                        </li>
                    </ul>
                    <ul class="footer-social-links list-reset">
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Facebook</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z"
                                        fill="#FFF" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Twitter</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z"
                                        fill="#FFF" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Google</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z"
                                        fill="#FFF" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="footer-copyright">&copy; 2018 April, all rights reserved</div>
                </div>
            </div>
        </footer>
    </div>

    <script src="<?= base_url(); ?>/assets-landing-page/dist/js/main.min.js"></script>
</body>

</html>