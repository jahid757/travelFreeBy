<!DOCTYPE html>
<html>
    <head>
        <title>Welcome Email</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <script
            src="https://kit.fontawesome.com/4b5d72e539.js"
            crossorigin="anonymous"
        ></script>
        <style>
            .user_icon {
                width: 70px;
                height: 70px;
                background: #908a95;
                padding-top: 16px;
                border-radius: 50%;
            }
            .welcome_message,
            .footer {
                color: #888888;
            }
            .container {
                max-width: 650px;
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
        </style>
    </head>

    <body>
        <div class="container">
            <div class="d-flex flex-column text-center">
                <div
                    style="background-color: #7e6990"
                    class="top_background py-4"
                >
                    <div class="user text-white">
                        <i
                            style="font-size: 35px"
                            class="fas fa-user user_icon"
                        ></i>
                        <p class="text-uppercase my-1">congratulation updated</p>
                        <h2 ml-4 style="color: #fff">{{$name}} is updated</h2>
                        <p>{{$email}}</p>
                    </div>
                </div>
                <div class="welcome_message p-5 pb-0">
                    <p>
                        Congratulation! Your account has been successfully
                        created. Just follow this link below to confirm your
                        email address and you will be able to continue purchase
                        our publication in no time:
                    </p>
                    <a style="text-decoration: none; color: #7200d3" href="#"
                        >http://localhost/resources/views/welcome.blade.php</a
                    >
                    <h3 style="color: #282828" class="py-4">What do you get</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Sequi voluptas nisi doloribus voluptate odit quasi
                        facilis libero, eos, repellendus pariatur tenetur
                        maiores sapiente vel commodi..
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Odio, maxime. Expedita ipsum nemo doloremque
                        perferendis!
                    </p>
                    <a href="javascript:void(0)" class="confirm_btn"
                        >Confirm Your Mail!</a
                    >
                </div>
                <div class="footer px-5 pb-4">
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
        </div>
    </body>
</html>
