<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;600&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!--CSS Stylesheets-->
    <link rel="stylesheet" href="styles/homepageStyles.css">
    <title>The Health Makeover</title>
</head>

<body>
    
    <?php include 'navbar.php'; ?>

    <section class="about">
        <div class="about__left">
            <h1 class="about__left__motto">Eat clean, stay fit – have some pizza, but just a bit</h2>
                <p class="about__left__text">The Health Makeover crew wants to encourage you to make your first
                    steps
                    towards your life transformation achieving better quality of sleep, more energy and become
                    the greatest version of yourself. Small steps and consistency can go a long way in your
                    journey and our team is here to support you with our fitness programs, meal plans and more.
                </p>
                <div class="about__btns">
                    <div class="about__btn__container">
                        <button class="about__btn" onclick="location.href='trainers.php'">Workouts & Trainers</button>
                    </div>
                    <div class="about__btn__container">
                        <button class="about__btn" onclick="location.href='food-articles.php'">Healthy
                            Eating</button>
                    </div>
                    <div class="about__btn__container">
                        <button class="about__btn" onclick="location.href=' #memberships'">Memberships</button>
                    </div>

                </div>
        </div>
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
            type="module"></script><dotlottie-player
            src="https://lottie.host/f2f97a57-0e57-4c51-ba8d-70ead364d12c/9ATjsKPfmP.json" background="transparent"
            speed="1" style="width: 100%; height: 100%" direction="1" playMode="normal" loop
            autoplay></dotlottie-player>
    </section>


    <section class="latest-articles">
        <h2 class="latest-articles__title">Here is out latest articles, check it out!</h2>
        <div class="latest-articles__posts">
            <div class="latest-articles__post">
                <div class="latest-articles__post__top">
                    <img class="latest-articles__post__img" src="images/diet.jpg" alt="Article Image " width=""
                        height="">
                </div>
                <div class="latest-articles__post__bottom">
                    <div class="latest-articles__post__text">
                        <h4 class="latest-articles__post_title">Benefits of eating healthy</h3>
                            <p class="latest-articles__post_description">A healthy diet is essential for good health
                                and nutrition. It protects you against many chronic noncommunicable diseases, such
                                as heart disease, diabetes and cancer...</p>
                    </div>
                    <button class="latest-articles__post__btn" onclick="location.href='fullArticlePage.html'"><img
                            src="images/arrow-right.svg" alt="Arrow Image" width="30px" height="30px"></button>
                </div>
            </div>
            <div class="latest-articles__post">
                <div class="latest-articles__post__top">
                    <img class="latest-articles__post__img" src="images/exercise.jpg" alt="Article Image" width=""
                        height="">
                </div>
                <div class="latest-articles__post__bottom">
                    <div class="latest-articles__post__text">
                        <h4 class="latest-articles__post_title">Why is exercise wise</h3>
                            <p class="latest-articles__post_description">Exercise helps people keep a healthy weight
                                and lower their risk of some diseases. Exercising regularly can help prevent weight
                                gain, type 2 diabetes, heart disease, and high blood pressure..</p>
                    </div>
                    <button class="latest-articles__post__btn" onclick="location.href='fullArticlePage.html'"><img
                            src="images/arrow-right.svg" alt="Arrow Image" width="30px" height="30px"></button>

                </div>
            </div>
            <div class="latest-articles__post">
                <div class="latest-articles__post__top">
                    <img class="latest-articles__post__img" src="images/yoga.jpg" alt="Article Image" width=""
                        height="">
                </div>
                <div class="latest-articles__post__bottom">
                    <div class="latest-articles__post__text">
                        <h4 class="latest-articles__post_title">10 benefits of yoga</h4>
                        <p class="latest-articles__post_description">Yoga improves strength, balance and
                            flexibility. Slow movements and deep breathing increase blood flow and warm up muscles,
                            while holding a pose can build ...</p>
                    </div>
                    <button class="latest-articles__post__btn" onclick="location.href='fullArticlePage.html'"><img
                            src="images/arrow-right.svg" alt="Arrow Image" width="30px" height="30px"></button>
                </div>
            </div>
        </div>
    </section>

    <section id="memberships">
        <div class="memberships__offer">
            <div class="memberships__offer__top premium">
                <h3 class="memberships__offer__title">PREMIUM</h3>
            </div>
            <div class="memberships__offer__middle premium">
                <p class="memberships__offer__price price__premium">180$</p>
            </div>
            <div class="memberships__offer__bottom premium">
            </div>
            <div class="memberships__offer__content">
                <p><img class="memberships__offer__content__icon" src="images/check.png" alt="Check Image">Nutrition plan</p>
                <p><img class="memberships__offer__content__icon" src="images/check.png" alt="Check Image">Access to exclusive
                    workout videos</p>
                <p><img class="memberships__offer__content__icon" src="images/check.png" alt="Check Image">Weekly progress
                    tracking and analysis</p>
            </div>
            <div class="memberships__offer__btn">
                <button class="memberships__btn btn__premium" onclick="location.href='logIn.html'">Buy
                    now</button>
            </div>
        </div>
        <div class="memberships__offer">
            <div class="memberships__offer__top standard">
                <h3 class="memberships__offer__title">STANDARD</h3>
            </div>
            <div class="memberships__offer__middle standard">
                <p class="memberships__offer__price price__standard">130$</p>
            </div>
            <div class="memberships__offer__bottom standard">
            </div>
            <div class="memberships__offer__content">
                <p><img class="memberships__offer__content__icon" src="images/check.png" alt="Check Image">Access to exclusive
                    workout videos</p>
                <p><img class="memberships__offer__content__icon" src="images/check.png" alt="Check Image">Monthly check-ups on
                    progress and advices</p>
                <p><img class="memberships__offer__content__icon" src="images/delete.png" alt="Not included Image">Nutrition plan</p>
            </div>
            <div class="memberships__offer__btn">
                <button class="memberships__btn btn__standard" onclick="location.href='logIn.html'">Buy
                    now</button>
            </div>
        </div>
        <div class="memberships__offer">
            <div class="memberships__offer__top basic">
                <h3 class="memberships__offer__title">BASIC</h3>
            </div>
            <div class="memberships__offer__middle basic">
                <p class="memberships__offer__price price__basic">70$</p>
            </div>
            <div class="memberships__offer__bottom basic">
            </div>
            <div class="memberships__offer__content">
                <p><img class="memberships__offer__content__icon" src="images/check.png" alt="Check Image">Limited access to
                    select fitness programs</p>
                <p><img class="memberships__offer__content__icon" src="images/delete.png" alt="Not included Image">Weekly progress
                    tracking and analysis</p>
                <p><img class="memberships__offer__content__icon" src="images/delete.png" alt="Not included Image">Nutrition plan</p>
            </div>
            <div class="memberships__offer__btn">
                <button class="memberships__btn btn__basic" onclick="location.href='logIn.html'">Buy
                    now</button>
            </div>
        </div>
    </section>

    <section class="subscribe">

        <div class="subscribe__left">
            <img class="subscribe__left__img" src="images/subscribe.jpg" alt="Subscribe Image">
        </div>
        <div class="subscribe__right">
            <h2 class="subscribe__title">Join our squad!</h2>
            <h3 class="subscribe__message">Reach your best self through a body and soul makeover!</h3>
            <form class="subscribe__form">
                <label for="fname">First name:</label>
                <input type="text" id="fname" name="fname">
                <label for="lname">Last name:</label>
                <input type="text" id="lname" name="lname">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email">
                <div class="btn__outlined__wrapper subscribe__wrapper">
                    <button class="subscribe__form__btn btn__outlined" type="submit">Get notified</button>
                </div>
            </form>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>

</html>