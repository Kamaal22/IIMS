<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <title>Example</title>
    <style>
        body {
            background-color: #fff;
            color: #222222;
            margin: 0px auto;
            padding: 0px;
            height: 100%;
            width: 100%;
            font-weight: 400;
            font-size: 15px;
            line-height: 1.8;
        }

        .container {
            width: 400px;
            margin-left: auto;
            margin-right: auto;
            background-color: #efefef;
            padding: 30px;
        }

        .btn {
            padding: 5px 15px;
            display: inline-block;
        }

        .btn-primary {
            /* border-radius: 3px; */
            /* background: blue; */
            color: #02a499;
            text-decoration: none;
        }

        .btn-primary:hover {
            /* border-radius: 3px; */
            /* background: navy; */
            color: #015c56;
            text-decoration: none;
        }

        .pointer {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 style="background-color: #02a499; text-align: center; color: white;">Your OTP for Password Reset</h1>
        </p>
        <div style="border: 1px solid #02a499; padding: 2rem;">
            <p>
                Use the following OTP to reset your password:
            <p id="otp" style="color: blue; cursor: pointer;">{{ $otp }}</p>
            </p>
            <br>
            <hr>
            <i style="margin-top: 1rem;">
                "If you did not request a password reset, no further action is required."
            </i>
            <br>
            <hr>
            {{-- <a class="btn btn-primary pointer" style="margin-top: 2rem;">Reset Password &#8594;</a> --}}

            <p style="margin-top: 5rem">Regards, <strong>MMS</strong></p>
        </div>
    </div>

    <script>
        // Get the OTP element
        const otpElement = document.getElementById("otp");

        // Add a click event listener to the OTP element
        otpElement.addEventListener("click", function() {
            // Create a temporary input element to copy the OTP to the clipboard
            const tempInput = document.createElement("input");
            tempInput.value = otpElement.textContent;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand("copy");
            document.body.removeChild(tempInput);

            // Alert the user that the OTP has been copied
            alert("OTP copied to clipboard: " + otpElement.textContent);
        });
    </script>
</body>

</html>
