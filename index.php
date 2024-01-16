<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IMBD</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      .background{
        background-image: url(././IMG//img5.jpg) !important;
      }
      .carousel{
        border: 2px solid white !important;
      }
      .himym{
        border: 2px solid white;
        border-radius: 1px;
        margin-top: 2px;
      }
      .himym img{
        margin-right: 5px;
      }
    </style>
  </head>
  <body class = "background">
    
    <nav class="navbar navbar-expand-lg bg-black mb-2">
        <div class="container-fluid">
          <a class="navbar-brand text-white name" href="#">IMBD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="./login/login_page.php">Sign In</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="./login/register_process.php">Sign Up</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div>
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="././IMG//Image 1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./IMG/Image 2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./IMG//Image 3.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./IMG//imgae 4.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </div>
      
      <div class="text-white">
        <ul class="list">
            <li class="himym d-flex">
                <img src="././IMG//Image 1.jpg" class="img-thumbnail immg" alt="">
                <b class="p-5"><span class="summery">Summery:</span> 
Directed by James Cameron, "Avatar" is a groundbreaking science fiction film released in 2009. The story is set in the mid-22nd century on the lush, habitable moon of Pandora. The film follows Jake Sully, a paraplegic former Marine, who takes on the mission of infiltrating the Na'vi, the indigenous humanoid species of Pandora, by using an Avatar—a genetically engineered Na'vi-human hybrid controlled by his consciousness.

As Jake becomes increasingly involved in the Na'vi community, he grapples with conflicting loyalties when faced with the human military's exploitative agenda for Pandora's valuable resources. The film explores themes of environmentalism, corporate greed, and the clash between indigenous cultures and technological expansion.</b>
            </li>
            <li class="himym d-flex">
                <img src="./IMG//Image 2.jpg" class="img-thumbnail immg" alt="">
                <b class="p-5"><span class="summery">Summery:</span> 
                "Avengers: Endgame" is an epic superhero film that marks the culmination of the Marvel Cinematic Universe's Infinity Saga. Directed by Anthony and Joe Russo, the movie was released in 2019. Building on the events of previous Marvel films, the storyline revolves around the aftermath of "Avengers: Infinity War," where the villain Thanos wiped out half of all life in the universe.

In a bid to reverse the devastating effects, the surviving Avengers, including iconic characters like Iron Man (Tony Stark), Captain America (Steve Rogers), Thor, Black Widow, Hulk (Bruce Banner), and Hawkeye (Clint Barton), embark on a time-traveling mission. The narrative unfolds across different timelines, offering nostalgic glimpses into earlier Marvel movies.</b>
            </li>
            <li class="himym d-flex">
                <img src="./IMG//Image 3.jpg" class="img-thumbnail immg" alt="">
                <b class="p-5"><span class="summery">Summery:</span> "How I Met Your Mother" is an American sitcom that aired on CBS from 2005 to 2014. Created by Carter Bays and Craig Thomas, the show is presented in a unique narrative style. The main character, Ted Mosby, recounts the events of his life to his children, leading up to the moment he met their mother. <br> The series revolves around Ted's close-knit group of friends living in New York City, including Marshall, Lily, Barney, and Robin. Throughout the seasons, Ted's quest for true love is interwoven with the group's adventures, relationships, and professional pursuits.</b>
            </li>
            <li class="himym d-flex">
                <img src="./IMG//imgae 4.jpg" class="img-thumbnail immg" alt="">
                <b class="p-5"><span class="summery">Summery:</span> "Doctor Who" is a long-running British science fiction TV series featuring the Doctor, a time-traveling alien with the ability to regenerate into a new form. The Doctor travels in the TARDIS, a time machine shaped like a police box, and, along with companions, faces various adversaries while exploring time and space. The show is known for its imaginative storytelling, iconic villains, and the Doctor's ability to change appearance over the years. <br>Accompanied by various companions, the Doctor confronts a myriad of extraterrestrial threats, historical figures, and moral dilemmas. The show incorporates a mix of genres, combining science fiction, fantasy, adventure, and drama. Iconic adversaries like the Daleks and Cybermen have become staples of the series, contributing to its cultural significance. </b>
            </li>
        </ul>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>