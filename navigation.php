<?php ?>

<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="includes/navigation-style.css">
        <link rel="stylesheet" href="includes/modal-style.css">

        <title>Navigation</title>
    </head>
    <body>
        <section class="navigation">
            <div class="topnav" id="myTopnav">
                <a href="index.html" target="" class="home-logo"><i class="fa fa-home" style="font-size:22px"></i></a>
                <a href="#about">About</a>

                <a href="#our-team">Our Team</a>
                <div class="dropdown">
                    <button class="dropbtn">
                        Services
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="#rent">For Rent</a>
                        <a href="#">For Sale</a>
                    </div>
                </div>
                <a href="#contact" class="contact-link">Contact</a>

                <a id="btnLogin" class="cursor-pointer float-right login-btn">Log in</a>
                <a id="btnRegister" class="cursor-pointer float-right "> Register</a>

                <a href="" style="font-size:15px;" class="toggle-icon">&#9776;</a
                >
            </div>
        </section>


        <div id="modalLogin" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="form-container">
                    <form class="form-register">
                        <h3>Welcome!</h3>
                        <div>
                            <!-- <label for="name">Name</label> -->
                            <input type="text" id="email" name="email" placeholder="Email" />
                        </div>

                        <div>
                            <!-- <label for="weight">Repeat Password</label> -->
                            <input type="password" id="password" name="password" placeholder="Password"/>
                        </div>
                        <div>
                            <label class="remember-password">
                                <input class="modal-text" type="checkbox" checked="checked" name="remember"/>
                                <a class="modal-text">Remember me</a>
                            </label>

                            <label class="forgot-password">
                                <a class="modal-text" href="#">Forgot password?</a>
                            </label>
                        </div>

                        <input class="btn-submit submit-registration" type="submit" value="Login"/>
                    </form>
                </div>
            </div>
        </div>

        <div id="modalRegister" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="form-container">
                    <form class="form-register">
                        <h3>Welcome!</h3>

                        <div>
                            <!-- <label for="name">Name</label> -->
                            <input type="text" id="name" name="name" placeholder="Name" />
                        </div>

                        <div>
                            <!-- <label for="name">Name</label> -->
                            <input type="text" id="surname" name="surname" placeholder="Surname"/>
                        </div>

                        <div>
                            <!-- <label for="name">Name</label> -->
                            <input type="text" id="email" name="email" placeholder="Email" />
                        </div>

                        <div>
                            <label class="remember-password">
                                <input class="modal-text" type="checkbox" checked="checked" name="remember"/>
                                <a class="modal-text">Remember me </a>
                            </label>

                            <label class="forgot-password"
                                   ><a class="modal-text" href="#">Forgot password?</a>
                            </label>
                        </div>

                        <input class="btn-submit submit-registration" type="submit" value="Login"/>
                    </form>
                </div>
            </div>
        </div>


        <script src="javascript/scripts.js"></script>
    </body>
</html>

