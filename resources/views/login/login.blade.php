<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Makin Wellness</title>
     <link rel="icon" type="image/png" href="https://staging.makinwellness.com/assets/image/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://staging.makinwellness.com/assets/css/style.css">
</head>

<body>
    <section class="login-page">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mob-hide">
                    <div class="login-content-box">
                        <h2>Welcome back!</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been when an unknown printer took a it to make a type specimen book.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-card">
                        <div class="logo-box">
                           <a href="https://staging.makinwellness.com">
                            <img src="assets/img/logo.png" alt="">
                             </a>
                        </div>
                        <h4 class="card-heading">Sign <span>in</span></h4>
                         <form id="loginForm" action="https://staging.makinwellness.com/login" method="post">
                             <input type="hidden" name="_token" value="7HmvPzUg26ZrOS7f32T56yOYuSYXMfnSDhXUrSDh" autocomplete="off">                            <div class="mb-lg-4 mb-3">
                                <label for="" class="label-lgn-form">Email</label>
                                <input type="email"  name="email" id="email"  class="form-control input-lgn-form" value=""   placeholder="test1@gmail.com" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="label-lgn-form">Password</label>
                                <div class="icon-input-password">
                                    <input type="password" name="password" id="password" class="form-control input-lgn-form" value=""   autocomplete="new-password" placeholder="*******" />
                                    <span class="eyeIcon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="eyeOpen" width="18" height="18"
                                            viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M17.2602 8.82914C17.2363 8.7743 16.6513 7.47703 15.3449 6.17063C14.1327 4.95984 12.0501 3.51562 8.9999 3.51562C5.94974 3.51562 3.86708 4.95984 2.6549 6.17063C1.34849 7.47703 0.763491 8.77219 0.739585 8.82914C0.715547 8.88314 0.703125 8.94159 0.703125 9.0007C0.703125 9.05981 0.715547 9.11826 0.739585 9.17227C0.763491 9.22641 1.34849 10.5237 2.6549 11.8301C3.86708 13.0409 5.94974 14.4844 8.9999 14.4844C12.0501 14.4844 14.1327 13.0409 15.3449 11.8301C16.6513 10.5237 17.2363 9.22852 17.2602 9.17227C17.2842 9.11826 17.2967 9.05981 17.2967 9.0007C17.2967 8.94159 17.2842 8.88314 17.2602 8.82914ZM8.9999 13.6406C6.79349 13.6406 4.86693 12.8377 3.27294 11.2549C2.60477 10.5908 2.03934 9.83084 1.59529 9C2.03922 8.1693 2.60467 7.40952 3.27294 6.74578C4.86693 5.16234 6.79349 4.35938 8.9999 4.35938C11.2063 4.35938 13.1329 5.16234 14.7268 6.74578C15.3951 7.40952 15.9606 8.1693 16.4045 9C15.9566 9.85852 13.7108 13.6406 8.9999 13.6406ZM8.9999 5.76562C8.3602 5.76562 7.73487 5.95532 7.20298 6.31072C6.67108 6.66611 6.25653 7.17125 6.01172 7.76226C5.76692 8.35326 5.70287 9.00359 5.82767 9.631C5.95247 10.2584 6.26051 10.8347 6.71285 11.287C7.16518 11.7394 7.7415 12.0474 8.3689 12.1722C8.99631 12.297 9.64663 12.233 10.2376 11.9882C10.8286 11.7434 11.3338 11.3288 11.6892 10.7969C12.0446 10.265 12.2343 9.6397 12.2343 9C12.2332 8.14253 11.892 7.32051 11.2857 6.71418C10.6794 6.10786 9.85736 5.76674 8.9999 5.76562ZM8.9999 11.3906C8.52708 11.3906 8.06487 11.2504 7.67174 10.9877C7.2786 10.725 6.97219 10.3517 6.79125 9.91485C6.61031 9.47802 6.56296 8.99735 6.65521 8.53361C6.74745 8.06988 6.97514 7.64391 7.30947 7.30957C7.64381 6.97524 8.06977 6.74755 8.53351 6.65531C8.99725 6.56307 9.47792 6.61041 9.91475 6.79135C10.3516 6.97229 10.7249 7.2787 10.9876 7.67184C11.2503 8.06498 11.3905 8.52718 11.3905 9C11.3905 9.63403 11.1387 10.2421 10.6903 10.6904C10.242 11.1388 9.63393 11.3906 8.9999 11.3906Z"
                                                fill="currentColor" />

                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="eyeClose" width="18" height="18"
                                            viewBox="0 0 18 18" fill="none">
                                            <g clip-path="url(#clip0_315_481)">
                                                <path
                                                    d="M15.029 12.6428C16.9426 10.935 18.0001 9 18.0001 9C18.0001 9 14.6251 2.8125 9.00008 2.8125C7.91952 2.81533 6.85111 3.0405 5.86133 3.474L6.72758 4.34138C7.45627 4.07728 8.22501 3.94066 9.00008 3.9375C11.3851 3.9375 13.364 5.2515 14.8141 6.70163C15.5127 7.40259 16.1384 8.17266 16.6816 9C16.6171 9.0975 16.544 9.2055 16.4622 9.324C16.0853 9.864 15.5285 10.584 14.8141 11.2984C14.6288 11.4844 14.435 11.6666 14.2325 11.8451L15.029 12.6428Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M12.7098 10.3236C12.9608 9.62146 13.0073 8.86243 12.8438 8.13487C12.6804 7.4073 12.3136 6.74111 11.7863 6.21381C11.2591 5.68652 10.5929 5.3198 9.86529 5.15633C9.13773 4.99285 8.3787 5.03934 7.67652 5.29039L8.60239 6.21627C9.03474 6.15438 9.47556 6.19404 9.88992 6.3321C10.3043 6.47016 10.6808 6.70282 10.9896 7.01166C11.2985 7.32049 11.5311 7.697 11.6692 8.11136C11.8072 8.52572 11.8469 8.96654 11.785 9.39889L12.7098 10.3236ZM9.39889 11.785L10.3236 12.7098C9.62146 12.9608 8.86243 13.0073 8.13487 12.8438C7.4073 12.6804 6.74111 12.3136 6.21381 11.7863C5.68652 11.2591 5.3198 10.5929 5.15633 9.86529C4.99285 9.13773 5.03934 8.3787 5.29039 7.67652L6.21627 8.60239C6.15438 9.03474 6.19404 9.47556 6.3321 9.88992C6.47016 10.3043 6.70282 10.6808 7.01166 10.9896C7.32049 11.2985 7.697 11.5311 8.11136 11.6692C8.52572 11.8072 8.96654 11.8469 9.39889 11.785Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M3.76875 6.15356C3.56625 6.33356 3.372 6.51619 3.186 6.70144C2.48734 7.4024 1.86163 8.17247 1.3185 8.99981L1.53787 9.32381C1.91475 9.86381 2.47163 10.5838 3.186 11.2982C4.63613 12.7483 6.61613 14.0623 9 14.0623C9.8055 14.0623 10.5638 13.9127 11.2725 13.6573L12.1388 14.5258C11.149 14.9593 10.0806 15.1845 9 15.1873C3.375 15.1873 0 8.99981 0 8.99981C0 8.99981 1.05638 7.06369 2.97113 5.35706L3.76762 6.15469L3.76875 6.15356ZM15.3517 16.1481L1.85175 2.64806L2.64825 1.85156L16.1483 15.3516L15.3517 16.1481Z"
                                                    fill="currentColor" />
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="mb-4 d-flex gap-3">
                                <div class="form-check checkRembr-lgn-form">
                                    <input class="form-check-input" name="remember" type="checkbox" id="rememberMe" 
                                    >
                                    <label class="form-check-label" for="rememberMe">
                                        Remember me
                                    </label>
                                </div>
                                <a href="https://staging.makinwellness.com/forgot-password" class="forgot-text-link">Forgot password? </a>
                            </div>
                            <div class="mb-lg-4 mb-3 pb-2">
                                <button type="submit" class="btn btn-lgn-submit">
                                    Sign in
                                </button>
                            </div>
                            <div>
                                <span class="info-text-account">Don’t have a account? <a href="https://staging.makinwellness.com/register"
                                        class="text-link-acount">Sign up</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <script>
        let eyeBtn = document.querySelectorAll('.eyeIcon');

        eyeBtn.forEach((e) => {
            e.addEventListener('click', function(){
                const input = this.previousElementSibling;
                if (!input) return;
                input.type = input.type === 'password' ? 'text' : 'password';
                this.classList.toggle('active');
            })
        }); 
    </script>

</body>  

<!-- Include jQuery first, then Toastr JS -->
<script type="text/javascript" src="https://staging.makinwellness.com/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="https://staging.makinwellness.com/assets/js/login-form-validation.js"></script>
<script type="text/javascript" src="https://staging.makinwellness.com/assets/js/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://staging.makinwellness.com/assets/css/toastr.min.css">

</body>
</html>