<hmtl>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
        </script>
    <head>
         <link rel="stylesheet" href="style2.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">
        <script type="text/javascript"></script>
        <title> Admin Page </title>
    
    </head>
    <body>
        <nav>
            <section class="nav-container">
            
            <aside class="menu">
                <div class="menu-content">
                 <button class="modal-btn">LOGOUT</button>
                    </div>
                <div class="arrow-up"></div>
                </aside>

            
            </section>
        <ul>
            <li><a href="#section1">Home</a></li>
             <li><a href="#section2">Search and View Student</a></li>
             <li><a href="#section3">Add Student</a></li>
             <li><a href="#section4">Add Books</a></li>
            <li><a href="#section5">Update / Delete Books</a></li>
             <li><a href="#section6">Contact</a></li>
            
            </ul>
        
        </nav>
        
    <script type="text/javascript">
        </script>
      
        
   <div id="section1">
        <p>
       

       </p>
         </div>
       
         <div id="section2">
             
             <div>
                 <p></p><br>
                 <p></p><br>
             <p></p><br>
        <h1>Search / View / Update Student Details</h1>
           
                 <div>
                 <center>
                 <a href="view.php">Click Here To Perform This Operation</a>

                 </center>
                 </div>
               <br>  
                 
          </div> 
        </div> 
        <p></p><br>
                 <p></p><br>
             <p></p><br>
        
        
        <div id="section3">
             
             <div>
                 <p></p><br>
        <h1>Insert Student</h1>
           <form action="insert_student.php" method="POST">
                <center>
                    <h3>Enter The Name Of The Student</h3>
                    <p></p><br>
           <input class="radius" name="firstname" type="name" placeholder="first Name"><br>
                    <p></p><br>
           <input class="radius" name="lastname" type="name" placeholder="last name"><br>
                    <p></p><br>
            <input class="radius" name="phonenumber" type="text" placeholder="Phone Number"><br>
                    <p></p><br>
                    
          <input class="radius" name="email" type="text" placeholder="Email"><br>
                    <p></p><br>
            <input class="radius" name="password" type="Password" placeholder="Password"><br>
               
                    <p>
                    <input type="submit" value="Insert" name="submit1"><br>
                   </p>
               </center>
           </form>
                 
                 
          </div> 
        </div> 
        <p></p><br>
                 <p></p><br>
             <p></p><br>
         <div id="section4">
             
             <p></p><br>
             <p></p><br>
        <h1>Add Books</h1>
             
           <form action="insert_book.php" method="POST">
                <center>
                    <h3>Enter The details Of The book To Be Inserted </h3><br>
                    
           <input class="radius" name="name" type="name" placeholder="Book Name"><br>
                    <p></p><br>
                    <input class="radius" name="authors" type="name" placeholder="authors"><br>
                    <p></p><br>
                    <input class="radius" name="edition" type="name" placeholder="edition"><br>
                    <p></p><br>
                    <input class="radius" name="status" type="name" placeholder="status"><br>
                    <p></p><br>
                    <input class="radius" name="quantity" type="name" placeholder="quantity"><br>
                    <p></p><br>
                    <input class="radius" name="department" type="name" placeholder="department"><br>
                    <p></p><br>
                    
               
                    <p>
                    <input type="submit" name="update_details"><br>
                   
               </p>
               </center>
           </form>
              <p></p><br>
             <p></p><br>
             <p></p><br>
             <p></p><br>
             
        </div>
     <p></p><br>
                 <p></p><br>
             <p></p><br>
         <div id="section5">
             
             <p></p><br>
             <p></p><br>
             <p></p><br>
             
            
      <br>  <h1>Update / Delete Books</h1>
             
           <form action="delete_books.php" method="POST">
                 <center>
                 <a href="book_view.php">Click Here To Update and Delete Books</a>
            
                 </center>
               
             </form>
             <p></p><br>
             <p></p><br>
             </div>
        <p></p><br>
        <p></p><br>
        <p></p><br>
         <div id="section6">
             
              <p></p><br>
             <p></p><br>
             <p></p><br>
             <p></p><br>
            <p></p><br>
             <p></p><br>
             <p></p><br>
    <div class="contact-box">

        <h1>CONTACT US</h1>
             
             
                 <center>
        <form>
           
<input type="text" name="name" class="form-control" placeholder="Enter Your Name"required><br>
             
<input type="email" name="name" class="form-control" placeholder="Enter Your Email"required><br>
            
            <textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea><br>
            
            <input type="submit" name="" id="form-control submit" value="SEND MESSAGE">
            
             
        </form>
        </center>
        </div>
         </div>
   <a class="gotobtn" href="#"><i class="fas fa-chevron-circle-up"></i></a>
        
        <div class="modal-bg">
        <div class="modal">
            <form action="logout.php" method="POST">
            <center>
        <img src="images/admin.png" width="30" height="40"class="logout-img" > <br>
              
                <p></p><br>
                <p></p><br>
                <h2>ADMIN</h2>
                <h3>Are You Sure You Want To Logout? </h3>
                <center>
            <button>LOGOUT</button>
                    </center>
            </center>
             </form>
                
            <span class="modal-close">X</span>
            </div>
        
        
        
        </div>
      <script src="app.js"></script> 
  
    </body>
    
</hmtl>