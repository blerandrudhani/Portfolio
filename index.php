<html>
    <head>
        <title>Portfolio</title>
        <link rel="stylesheet" href="./style/style.css">
    </head>

    <body>
        <?php require("./views/header.php"); ?>

       
       <div class="about" id="about">
        <img src="../Portfolio/images/me.jpg" id="img"/>
        <h2 class="h2">About</h2>
        <p class="paragraphs-ab">
        
        Hi, I am Blerand Rudhani, I am a final year student at FIEK, branch of Computer Engineering. 
        I have completed Node.js training at Beetroot Academy. During studies, as well as during 
        training, I participated in the development of many applications that include technologies 
        such as: Node.js, PHP, JavaScript, JavaFX, etc.
        </p>
        
       </div>

       <div class="education" id="education">
        <h2 class="h2">Education </h2>
   
        <p id="edu-and-skills" class="paragraphs-ab">
            Computer Engineering at University of Prishtina "Hasan Prishtina" <br>
            Node.Js Course at Beetroot Academy</p>
        
        
        
        <div class="skills">
        <h4 class="h4">Skills</h4>
        </div>
        
       
        <div class="skill-content">
        <img src="../Portfolio/images/html.png"> 
        <img src="../Portfolio/images/css.png"> 
        <img src="../Portfolio/images/javascript.png"> </br>
        <img src="../Portfolio/images/nodejs.png"> 
        <img src="../Portfolio/images/php.png"> 
        <img src="../Portfolio/images/mysql.png"> 
        </div>
       </div>
    <div class="contact" id="contact" >
         <h2 class="h2">Contact</h2><!--id="contact-h" -->
        <form action="../Portfolio/controllers/contactController.php"method="post" class="form">

        
            <label for="name" class="form-labels" id="name">Name</label >
                 <input type="text" name="name" id="name" placeholder="Name" required=true class="form-input"></br>

                 <label for="lastname" class="form-labels">Lastname</label >
                <input type="text" name="lastname" id="lastname" placeholder="Lastname" required=true class="form-input"></br>

                <label for="email" class="form-labels" id="email">Email</label >
                <input type="email" name="email" id="email" placeholder="Email" required=true class="form-input"></br>

                <label for="description" class="form-labels">Description</label >
                <textarea name="description" id="description" cols="20" rows="4" required=true placeholder="Description" class="form-input"></textarea></br>

                <button name="submit" id="submit" class="submit-btn">Submit</button>
        </form>
    </div>


    <?php  require("./views/footer.php"); ?>
    </body>
</html>