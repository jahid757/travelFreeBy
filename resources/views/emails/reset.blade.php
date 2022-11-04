<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Reset Password</title>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/4b5d72e539.js"></script>
        <style>
            *{font-family: Arial, Helvetica, sans-serif;}
            .container{
                max-width: 650px;
            }
            .icon {
                width: 70px;
                height: 70px;
                background: #908a95;
                padding-top: 16px;
                border-radius: 50%;
                font-size: 35px;
                color:#fff;
            }
            .header{
                background-color: #7e6990
            }
            .color{
                color: #282828;
            }
            .p{
               color: #888888
            }
            .confirm_btn,
            .confirm_btn:hover {
                padding: 10px;
                display: block;
                background: #7e6990;
                color: white;
                border-radius: 5px;
                text-decoration: none;
                font-weight: 700;
                margin-bottom: 15px;
                margin-top: 3px;
            }
            .footer {
                color: #888888;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header text-center py-4">
                <i class="icon fas fa-unlock-alt"></i>
                <h2 style="color: #fff">Hi! {{$name}}</h2>
            </div>

            <div class="body_text p-5 pb-2 text-center">
                <h3 class="color">You have requested to reset your password</h3>
                <p class="mt-3 p">We cannot simply send you your old password. A unique link to reset your password has been genereted for you. To reset your password.  Click the following link and follow the instructions.</p>
                <a href="javascript:void(0)" class="confirm_btn"
                        >Reset Password</a
                    >
            </div>
            <div class="footer px-5 pb-4 text-center">
                <p>
                    Get in touch if you have any questions regarding our new
                    product. Feel free to contact us 24/7. we are here to
                    help
                </p>
                <p class="pb-0 mb-0">All The Best</p>
                <p class="pb-0 mb-0">Team</p>
                <a style="text-decoration: none; color: #7e6990" href="#"
                    >Send Us Message!</a
                >
            </div>
        </div>
    </body>
</html>
