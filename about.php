<?php
    ob_start();
    //set the page title
    $page_title = null;
    $page_title = 'About';
    require_once('header.php');
?>

    <main role="main">
        <div class="container">
            
            <div class="jumbotron">
                <div class="col-sm-8 mx-auto">
                <h1 class="jumbotron-heading">Freelance Developer and 3D Artist</h1>
                <p class="lead">Passionate about emerging technologies</p>
                <p class="lead">Living in Toronto, Ontario, Canada, I specialize in a variety of technical disciplines. I have a background ranging from game design, application development, databases, and web platforms.</p>
                <p class="lead">Any inquiries for project work please reach out below. I am always available to discuss your project on Skype, phone or email.</p>
                <p><a class="btn btn-lg btn-primary" href="contact.php" role="button">Contact Bryan</a></p>
                    <p class="lead">View some of my previous projects on my Git Hub below!</p>
                <p class="lead"><a href="https://github.com/LegendOfTheFox">https://github.com/LegendOfTheFox</a></p>
                    </div>
            </div>
                
            <h2>Programming Languages / Frameworks</h2>
            <table class="table table-striped table-dark">
              <tbody>
                <tr>
                    <th scope="row">Java</th>
                    <th scope="row">Django</th>
                    <th scope="row">PHP</th>
                </tr>
                <tr>
                    <th scope="row">Python</th>
                    <th scope="row">Bootstrap</th>
                    <th scope="row">C/C++</th>
                </tr>
                <tr>
                    <th scope="row">HTML/CSS</th>
                    <th scope="row">Javascript</th>
                    <th scope="row">MYSQL</th>
                </tr>
              </tbody>
            </table>
       </div>
        
        <div class="container">
            <h2>Creative Tools</h2>
            <table class="table table-striped table-dark">
              <tbody>
                <tr>
                    <th scope="row">3D Studio Max</th>
                    <th scope="row">Maya</th>
                    <th scope="row">Unreal Engine</th>
                </tr>
                <tr>
                    <th scope="row">Adobe Photoshop</th>
                    <th scope="row">ZBrush</th>
                    <th scope="row">Substance Painter</th>
                </tr>
                <tr>
                    <th scope="row">3D Coat</th>
                    <th scope="row">Renderman</th>
                    <th scope="row">Shadermap</th>
                </tr>
              </tbody>
            </table>
       </div>
        
        <div class="container">
            <div class="jumbotron">
                <div class="col-sm-8 mx-auto">
            <h1 class="jumbotron-heading">Education</h1>
            <h3>Georgian College / Computer Programmer</h3>
            <h4>January 2017 - August 2018, Barrie Ont.</h4>
                <ul>
                    <li>Use documented solutions to troubleshoot problems associated with software installation
                    and customization</li>
                    <li>Develop, test, document, deploy, and maintain secure program code based on specifications</li>
                    <li>Apply knowledge of networking concepts to develop, deploy, and maintain program code</li>
                    <li>Use relevant methodologies, policies, and standards to develop secure program code</li>
                </ul>
            <h3>International Academy of Design and Technology / Video Game Design and
            Development</h3>
            <h4>July 2004 - Dec 2005, Toronto Ont.</h4>
                <ul>
                    <li>Programming gaming software in C / C++, leveraging OpenGL / DirectX</li>
                    <li>3D Asset creation through a variety of methods</li>
                    <li>2D texture development utilizing Adobe software suite</li>
                    <li>Create animation routines for characters and objects</li>
                    <li>Project development and milestone tracking</li>
                </ul>
            <h3>Huron Heights Secondary School/ OSSD</h3>
            <h4>Sept 2000 - June 2004, Newmarket Ont.</h4>
                <ul>
                    <li>Calculus, Math Advanced Functions, Non-Linear Algebra</li>
                    <li>Programming, 3D Animation</li>
                </ul>
        </div>
        </div>
            </div>


<?php
    require_once('footer.php');
?>