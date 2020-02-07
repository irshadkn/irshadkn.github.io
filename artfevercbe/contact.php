<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Oil painting, Pencil art in Coimbatore - Contact | Art Fever</title>
        <meta charset="UTF-8">
        <meta name="description" content="Oil painting in coimbatore, Pencil art in coimbatore, Color pencil art in coimbatore, Buy painting in coimbatore, Best painting artist in coimbatore.">
        <meta name="author" content="Irshad">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/stylesheet.css">
        <link rel="stylesheet" href="css/menu.css">
		<script src="js/menu.js"></script>
    </head>
    <body>
        <div class="img_container1">
            <img class="seperator" src="images/tool1.png" alt="Painting Tools">
        </div>
        <div class="img_container2">
            <img class="seperator" src="images/tool2.png" alt="Painting Tools">
        </div>
        <header id="top">
            <img id="logo" src="images\artfever.png" alt="Art Fever Logo"/>
        </header>
        <nav class="topnav" id="myTopnav">
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="gallery.php">Gallery</a>
            <a href="#" class="active">Contact Us</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
        </nav>
        <main>
            <h2 class="box_title centered">Contact Us</h2>
            <section id="contact-content">
                <div id="cc1">
                    <form action="send.php">
                            <label for="fname">Name</label>
                            <input type="text" id="fname" name="name" placeholder="Your Name" required>
                            <label for="fmail">Email</label>
                            <input type="email" id="fmail" name="mail" placeholder="Your Email ID" required>
                            <label for="fnumber">Mobile Number</label>
                            <input type="tel" id="fnumber" name="number" placeholder="Your Mobile Number" required>
                            <label for="fquery">Required Service</label>
                            <select id="fquery" name="query">
                                <option value="Pencil Art">Pencil Art</option>
                                <option value="Oil Painting">Oil Painting</option>
                                <option value="Colour Pencil Art">Colour Pencil Art</option>
                                <option value="Art for Sale">Art for Sale</option>
                                <option value="Other">Other</option>
                            </select>
                            <input type="submit" value="Submit">
                    </form>
                </div>
                <div id="cc2">
                    <h2 class="box_title">Mobile</h2>
                    <p class="contact_text">+91 6383562747</p>
                    <h2 class="box_title">WhatsApp</h2>
                    <p class="contact_text">+91 9952231085</p> 
                    <h2 class="box_title">Email</h2>
                    <p class="contact_text">artfevery@gmail.com</p>
                    <h2 class="box_title">Address</h2>
                    <p class="contact_text">21, Chinnakani Konar Street,<br>
                    E.B. Colony, Kovaipudur Pirivu,<br>
                    Kuniyamuthur, Coimbatore - 641 008.<br>
                    Tamilnadu.</p>
                </div>
            </section>
            <div style="text-align: center;">
                <a href="https://facebook.com/"><img src="images/fb.png" alt="facebook icon" class="icon"> </a>
                <a href="https://instagram.com/"><img src="images/insta.png" alt="instagram icon" class="icon"></a>
            </div>
            </main>      
        <footer id="bottom">
            <p>Copyright © ArtFever</p>
        </footer>
    </body>
</html>