@extends('layouts.default')

@section('content')
<style>
/* FONTS */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");
/*===== VARIABLES CSS =====*/
:root{
  --header-height: 3rem;
  --font-semi: 600;
}

/* Colors */
:root{
  --first-color: #67b668;
  --second-color: #0E2431;
}

/* Font Style */
:root{
  --body-font: 'Poppins', sans-serif;
  --big-font-size: 2rem;
  --h2-font-size: 1.25rem;
  --normal-font-size: 0.938rem;
}
@media screen and (min-width: 768px){
  :root{
    --big-font-size: 3.5rem;
    --h2-font-size: 2rem;
    --normal-font-size: 1rem;
  }
}

/* Margin */
:root{
  --mb-1: 0.5rem;
  --mb-2: 1rem;
  --mb-3: 1.5rem;
  --mb-4: 2rem;
  --mb-5: 2.5rem;
  --mb-6: 3rem;
}

/* index */
:root{
  --z-back: -10;
  --z-normal: 1;
  --z-tooltip: 10;
  --z-fixed: 100;
}

/* BASE */
*,::before,::after{
  box-sizing: border-box;
}
html{
  scroll-behavior: smooth;
}
body{
  margin: var(--header-height) 0 0 0;
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
  color: var(--second-color);
}
h1,h2,p{
  margin: 0;
}
ul{
  margin: 0;
  padding: 0;
  list-style: none;
}
a{
  text-decoration: none;
}
img{
  max-width: 100%;
  height: auto;
  display: block;
}

/* CSS */
.section-title{
  position: relative;
  font-size: var(--h2-font-size);
  color: var(--first-color);
  margin-top: var(--mb-2);
  margin-bottom: var(--mb-4);
  text-align: center;
}
.section-title::after{
  position: absolute;
  content: "";
  width: 64px;
  height: 0.18rem;
  left: 0;
  right: 0;
  margin: auto;
  top: 2rem;
  background-color: var(--first-color);
}
.section{
  padding-top: 3rem;
  padding-bottom: 2rem;
}

/* LAYOUT */
.bd-grid{
  max-width: 1024px;
  display: grid;
  grid-template-columns: 100%;
  grid-column-gap: 2rem;
  width: calc(100% - 2rem);
  margin-left: var(--mb-2);
  margin-right: var(--mb-2);
}
.l-header{
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  z-index: var(--z-fixed);
  background-color: #c8e1cc;
  box-shadow: 0 1px 4px rgba(146,161,176,.15);
}

/* NAVIGATION */
.nav{
  height: var(--header-height);
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-weight: var(--font-semi);
}
@media screen and (max-width: 768px){
  .nav__menu{
    position: fixed;
    top: var(--header-height);
    right: -100%;
    width: 80%;
    height: 100%;
    padding: 2rem;
    background-color: var(--second-color);
    transition: .5s;
  }
}
.nav__item{
  margin-bottom: var(--mb-4);
}
.nav__link{
  position: relative;
  color: #fff;
}
.nav__link:hover{
  position: relative;
}
.nav__link:hover::after{
  position: absolute;
  content: "";
  width: 100%;
  height: 0.18rem;
  left: 0;
  top: 2rem;
  background-color: var(--first-color);
}
.nav__logo{
  color: var(--second-color);
}
.nav__toggle{
  color: var(--second-color);
  font-size: 1.5rem;
  cursor: pointer;
}

/* menu */
.active::after{
  position: absolute;
  content: "";
  width: 100%;
  height: 0.18rem;
  left: 0;
  top: 2rem;
  background-color: var(--first-color);
}

/* Show menu */
.show{
  right: 0;
}

/* HOME */
.home{
  height: calc(100vh - 3rem);
  row-gap: 1rem;
}
.home__data{
  align-self: center;
}
.home__title{
  font-size: 50px;
  margin-bottom: var(--mb-5);
  margin-left: 25%;
  margin-right: auto;
}
.home__title-color{
  color: var(--first-color);
}
.home__social{
  display: flex;
  flex-direction: column;
}

/* BUTTONS */
.button{
  display: inline-block;
  background-color: var(--first-color);
  color: #fff;
  padding: .75rem 2.5rem;
  font-weight: var(--font-semi);
  border-radius: .5rem;
}
.button:hover{
  box-shadow: 0 10px 36px rgba(0,0,0,.15);
}

/* ABOUT */
.about__container{
  row-gap: 2rem;
  text-align: center;
}
.about__subtitle{
  margin-bottom: var(--mb-2);
  margin-left: 670px;
}
.about__text{
  justify-content: center;
  margin-left: 100px;
  margin-right: 100px;
  text-align: justify;
}

/* DREAM */
.dream__container{
  row-gap: 2rem;
  text-align: center;
}
.dream__subtitle{
  margin-bottom: var(--mb-2);
  margin-left: 710px;
  margin-right: 100px;
  text-align: justify;
}
.dream__text{
  justify-content: center;
  margin-left: 100px;
  margin-right: 100px;
  text-align: justify;
}

/*  WORK */
.work__container{
  row-gap: 2rem;
}

/* YEAR */
.year__container{
  row-gap: 2rem;
  text-align: center;
}
.year__subtitle{
  margin-bottom: var(--mb-2);
  margin-left: 690px;
  margin-right: 100px;
  text-align: justify;
}
.year__text{
  justify-content: center;
  margin-left: 100px;
  margin-right: 100px;
  text-align: justify;
}

/* FOOTER */
.footer{
  background-color: var(--first-color);
  color: #fff;
  text-align: center;
  font-weight: var(--font-semi);
  padding: 2rem 0;
}
.footer__title{
  font-size: 2rem;
  margin-bottom: var(--mb-4);
}

/* MEDIA */
@media screen and (min-width: 768px){
  body{
    margin: 0;
  }
  .section{
    padding-top: 4rem;
    padding-bottom: 3rem;
  }
  .section-title{
    margin-bottom: var(--mb-6);
  }
  .section-title::after{
    width: 80px;
    top: 3rem;
  }

  .nav{
    height: calc(var(--header-height) + 1rem);
  }
  .nav__list{
    display: flex;
    padding-top: 0;
  }
  .nav__item{
    margin-left: var(--mb-6);
    margin-bottom: 0;
  }
  .nav__toggle{
    display: none;
  }
  .nav__link{
    color: var(--second-color);
  }

  .home{
    height: 100vh;
  }
  .home__data{
    align-self: flex-end;
  }

  .about__container, .skills__container{
    grid-template-columns: repeat(2,1fr);
    align-items: center;
    text-align: initial;
  }

  .work__container{
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: repeat(2,1fr);
    column-gap: 2rem;
  }
  .contact__container{
    justify-items: center;
  }
}

@media screen and (min-width: 1024px){
  .bd-grid{
    margin-left: auto;
    margin-right: auto;
  }
  .home__img{
    right: 10%;
  }
}
</style>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="attributes/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>John Paul Castro</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">John Paul Castro </a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#dream" class="nav__link">CS202</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">CS405</a></li>
                        <li class="nav__item"><a href="#year" class="nav__link">6 years from now</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Hello,<br>I am <span class="home__title-color">John Paul Castro.</span>


                </div>

    
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>


                    <div>
                        <h2 class="about__subtitle">I am John Paul</h2>
                        <p class="about__text">Hello, I am John Paul Castro, 22 years old, 3rd student of Pamantasan ng Lungsod ng Pasig, taking up a Bachelor of Science in Computer Science. To tell everyone honestly, I am an emotionally-driven person. I tend to let my emotions drive my actions and reactions, which sometimes results in being misunderstood. But despite that, I'm adjusting to make myself more capable of befriending. I despise insensitive people who can't control their mouth and actions, I hate people that don't respect one another's restrictions and ruin someone's peace.</p>
                    </div>
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="dream section" id=dream>
                <h2 class="section-title"> CS202:Parallel and Distributed Programming</h2>

                    <div>
                        <h2 class="dream__subtitle">GITHUB</h2>
                        <p class="dream__text"> GitHub has various advantages but many people often have a doubt as to why not use dropbox or any cloud based system? Let’s take the same example forward to answer this question:
Say more than two software developers are working on the same file and they want to update it simultaneously. Unfortunately, the person who save the file first will get precedence over the others.
While in Github, this is not the case. Github document the changes and reflect them in an organized manner to avoid any chaos between any of the files uploaded. Therefore using GitHub centralized repository, it avoids all the confusion and working on the same code becomes very easy. GitHub is a central repository and Git is a tool which allows you to create a local repository. 
Now people usually get confused between git and GitHub but its actually very different. Git is a version control tool that will allow you to perform all kinds of operations to fetch data from the central server or push data to it whereas GitHub is a core hosting platform for version control collaboration. 
GitHub is a company that allows you to host a central repository in a remote server. 
</p>
                </div>
            </section>

            <!--===== WORK =====-->
            <section class="work section" id="work">
                <h2 class="section-title">CS405: Open Source Programming with Framework</h2>
                <h2 class="dream__subtitle">LARAVEL</h2>
                        <p class="dream__text"> Laravel is a web application framework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details.
Laravel strives to provide an amazing developer experience, while providing powerful features such as thorough dependency injection, an expressive database abstraction layer, queues and scheduled jobs, unit and integration testing, and more. Laravel is a robust framework that provides easy development of PHP web applications with features like a modular packaging system with a dedicated dependency manager, access to relational databases, and other utilities for application deployment and maintenance. </p>
                </div>
                <div class="work__container bd-grid">
                    
                </div>
            </section>

            <!--===== CONTACT =====-->

                <section class="year section " id=year>
                    <h2 class="section-title">6 Years from now</h2>

                        <div>
                            <h2 class="year__subtitle">Successful</h2>
                            <p class="year__text">Six years from now, I bet, I'd be successful and happy in the field that I chose, which is being an educator. Before deciding to pursue this field, I had no vision of what my future would be. But seeing  a lot of people with lack of knowledge not because they don't want to, but because efficient and effective educators are hard to find. I want these people to realize how important education is. I want to engrave the wisdom that education has to offer. A makes them believe that they are deserving of a good education and a bright future.</p>
                          </div>
                      </section>
        </main>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="attributes/js/main.js"></script>
    </body>
</html>


@stop
