<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Confirm OTP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- App CSS -->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

    <style>
        .form-control {
            width: 10%;
            text-align: center;
            padding: 0.5rem;
        }
    </style>
</head>

<body>
    <div class="account-pages mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="bg-success">
                            <div class="text-primary text-center p-4">
                                <h3 class="text-white">Confirm OTP</h3>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <div class="p-3">
                                <div class="row justify-content-center">
                                    @if (session('success'))
                                        <span
                                            class="alert alert-success w-100 rounded-0 text-center">{{ session('success') }}</span>
                                    @endif
                                    @if (session('fail'))
                                        <span
                                            class="alert alert-danger w-100 rounded-0 text-center">{{ session('fail') }}</span>
                                    @endif
                                    <form method="POST" id="otp-form">
                                        @csrf
                                        <div class="row justify-content-between">
                                            @for ($i = 1; $i <= 6; $i++)
                                                <input inputmode="numeric" required name="otp"
                                                    class="form-control m-1 otp-input" minlength="1" maxlength="1"
                                                    pattern="\d*" id="otp{{ $i }}" required>
                                            @endfor
                                        </div>
                                    </form>
                                    <button type="submit" class="btn btn-success mt-4 w-100" id="submit-btn"
                                        disabled>Confirm OTP &#8594;</button>
                                    <div class="mt-5">
                                        <a href="send-otp-phone">Send by phone &#8594;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/app.js"></script>

    <script>
        const otpInputs = document.querySelectorAll(".otp-input");
        const submitBtn = document.getElementById("submit-btn");

        otpInputs.forEach((input, index) => {
            input.addEventListener("input", (e) => {
                if (e.target.value.length > 0) {
                    if (index < otpInputs.length - 1) {
                        otpInputs[index + 1].focus();
                    } else {
                        submitBtn.removeAttribute("disabled");
                    }
                } else {
                    submitBtn.setAttribute("disabled", "disabled");
                }
            });
        });
    </script>
</body>

</html>
