<?php include('header.php'); ?>
<h1 style="text-align: center;color:e8491d">PROJECTS THAT I HAVE DONE </h1>

<?php include('add_project.php');?>

 <br>
 <br>
 <?php $myProjects = array(
                 
                       array(
                           "img"          => "project1",
                           "pName"       =>"first project",
                           "pDescription" => "this the desriaption of my awesome projects",
                           "link"         => "link"
                       ),
                        array(
                            "img"          => "project2",
                            "pName"       =>"Second project",
                            "pDescription" => "this the desripstion of my awesome projects",
                            "link"         => "link"
                      ),
                        array(
                            "img"          => "project3",
                            "pName"        =>"Third project",
                            "pDescription" => "this the desriptifon of my awesome projects",
                            "link"         => "link"
                        ),
                        array(
                            "img"          => "project4",
                            "pName"        =>"Fourth project",
                            "pDescription" => "this the desripation of my awesome projects",
                            "link"         => "link"
                        ),
                    );
                     ?>
                  
                     <?php 
                     foreach($myProjects as $project){
                     ?> <div class="projects">
                        <div class="card" style="width: 18rem;">
                            <img src="images/<?php echo $project['img'];?>.gif" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo $project['pName'];?></h3>
                                <p class="card-text"><?php echo $project['pDescription'];?></p>
                                <a href="<?php $preoject['link'];?>" class="btn btn-primary">Detailed View</a>
                            </div>
                        </div>
                       
                    <?php }?>
                    </div>


       
    </body>
    

</html>

