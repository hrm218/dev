<!DOCTYPE html>
<?php $thisPage = 'home' ?>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Graphics by Rin</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
</head>
<body>
    <div id="headcontainer">
        <?php require_once('includes/header.php'); ?>
        <section id="bannerdividertop">
            <p>
                Hi, I'm Rin and I am an <span class="word">interior designer</span><br>
            </p>
        </section>
    </div>
    <main id="maincontainer">
        <section id="introduction">
            <aside class="asidepic">
                <div class="img">
                    <img src="media/introimg.jpg" alt="Profile Picture">
                </div>
            </aside>
            <article class="articleintro">
                <span class="title">...with sickening skills in graphic planning programs.</span>
                <p>
                    When I signed in for an interior design course I was hoping to learn how to match pillows and drapes. <br><br>
                    I soon discovered that interior design is actually about making a home feel cosy and welcoming in a functional way, and for it to function, tools need to come into play. I was immediatelly drawn to AutoCad (pun intended) but I wanted to give my projects more life so I learnt SketchUp too; Photoshop was just a guilty pleasure of mine, for the finishing touches.<br><br>
                    So now, I can draw an interior plan from scratch, render it and retouch it and I can still match pillow to drapes
                </p>
            </article>
        </section>
        <section id="bannerdivider">
            <p>
                Those are <span class="word">my skills.</span><br>
            </p>
        </section>
        <section id="skills">
            <article class="skillbox">
                <div class="skimg">
                    <span class="helper"></span>
                    <img src="https://upload.wikimedia.org/wikipedia/en/e/ec/AutoCAD_2018_icon.png" alt="AutoCAD Logo" height="auto" width="auto">
                </div>
                <span class="boxtitle">AutoCAD</span>
                <p>
                    Autocad is used by architects, engineers, designers and professionals world-wide for creating models, plans of structure, layers of utilities and more. While in constructions it represents the very basis of laying out plans related to materials and structural elements, in interior design it is very useful for modeling furniture, lighting, electrical and plumbing layouts.
                </p>
                <div class="boxcontainer">
                    <div class="progress2 progress-moved">
                        <div class="progress-bar2" >
                        </div>
                    </div>
                    <span class="boxlink"><a href="404.html">Projects with AutoCAD</a></span>
                </div>
            </article>
            <article class="skillbox">
                <div class="skimg">
                    <span class="helper"></span>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9c/SketchUp-Logo.png" alt="SketchUp Logo" height="auto" width="auto">
                </div>
                <span class="boxtitle">SketchUp</span>
                <p>
                    SketchUp is a 3D modeling computer program for a wide range of drawing applications such as architectural, interior design, landscape architecture, civil and mechanical engineering, film and video game design. For interior design it proves to be  great solution when rendering relatively accurate and detailed images in a fairly moderate amount of time, making it one of designer's favourite tool for residential projects.
                </p>
                <div class="boxcontainer">
                    <div class="progress2 progress-moved">
                        <div class="progress-bar2" >
                        </div>
                    </div>
                    <span class="boxlink"><a href="404.html">Projects with SketchUp</a></span>
                </div>
            </article>
            <article class="skillbox">
                <div class="skimg">
                    <span class="helper"></span>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Adobe_Photoshop_CC_icon.svg/616px-Adobe_Photoshop_CC_icon.svg.png" alt="Photoshop Logo" height="auto" width="auto">
                </div>
                <span class="boxtitle">Photoshop</span>
                <p>
                    Photoshop is a raster graphics editor tool that can also compose raster images in multiple layers and supports masks, alpha compositing and several color models. It is a great tool for creating logos, banners, posters but also can prove to be effective in improving images that the rendering tool created.
                </p>
                <div class="boxcontainer">
                    <div class="progress2 progress-moved">
                        <div class="progress-bar2" >
                        </div>
                    </div>
                    <span class="boxlink"><a href="404.html">Projects with Photoshop</a></span>
                </div>
            </article>
        </section>
        <section id="bannerdivider">
            <p>
                This is how <span class="word">I work.</span><br>
            </p>
        </section>
        <section id="portfolio">
            <div class="portbox">
                <aside class="portimg">
                    <div class="portimghldrlft"><img src="media/stepi.jpg" height="auto" width="auto" alt="Step 1"></div>
                </aside>
                <article class="portart">
                    <span class="porttitle">1st: always start with and idea</span>
                    <p>
                        ...and a few details about the home. Note down the numbers, scribble the outline and create an image of what the client wishes to achieve.<br><br>
                        In reality, it's a lot more than that. A designer needs to know every dimension of the location, heating and ventilation type, plumbing position and a lot of other things.<br><br>
                        But the challenge is to get to know the customer and what they truly need and combining the two.
                    </p>
                </article>
            </div>
        </section>
        <section id="portfolio1">
            <div class="portbox">
                <article class="portart">
                    <span class="porttitle">2nd: digitize it</span>
                    <p>
                        While a piece of scribbled notebook sheet may get wrong, AutoCAD's finesse and accuracy will correct and get right.<br><br>
                        Lines are drawn according to dimensions, layers are added containing furniture, sanitary objects, lighting, power sources, switches and sockets.
                        Nothing is left behind.<br><br>
                        And once every file is saved accordingly, the information is transmitted to the respective specialists on the construction site.
                    </p>
                </article>
                <aside class="portimg">
                    <div class="portimghldr"><img src="media/stepii.jpg" height="auto" width="auto" alt="Step 2" ></div>
                </aside>
            </div>
        </section>
        <section id="portfolio2">
            <div class="portbox">
                <aside class="portimg">
                    <div class="portimghldrlft"><img src="media/stepiii.jpg" height="auto" width="auto" alt="Step 3" ></div>
                </aside>
                <article class="portart">
                    <span class="porttitle">3rd: Its ALIVE! :)</span>
                    <p>
                        Now that the techie stuff is out of the way, it's time to focus on the visual.<br><br>
                        By using SketchUp, walls are elevated, textures are added, objects are put in place and the entire floor planning comes to life in a 3D rendering model.<br><br>
                        From ruler to virtual home.
                    </p>
                </article>
            </div>
        </section>
    </main>
    <div id="footcontainer">
        <section id="contactType">
            <aside class="top">
                <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/8/85/Arrow_top_svg.svg" height="auto" width="auto" alt="top"></a>
            </aside>
        </section>
        <section id="banner">
            <p>
                Hope to see you <span class="word">soon :)</span><br>
            </p>
        </section>
        <?php require_once('includes/footer.php'); ?>
    </div>
</body>
</html>
