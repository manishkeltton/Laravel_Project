
<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
    <!-- Navigation -->
    
 <?php include "includes/navigation.php"; ?>


    <!-- Page Content -->
    <div class="container">

        <div class="row">



          <!-- Blog Entries Column -->
          <div class="col-md-8">

     <?php 

        if(isset($_GET['p_id'])){

           $the_post_id = $_GET['p_id'];
           $the_post_author = $_GET['author'];

        }

         $query = "SELECT * FROM posts WHERE post_author = '{$the_post_author}' ";
         $select_all_posts_query = mysqli_query($connection, $query);
         while($row = mysqli_fetch_assoc($select_all_posts_query)){
         $post_title = $row['post_title'];
         $post_author = $row['post_author'];
         $post_date = $row['post_date'];
         $post_image = $row['post_image'];
         $post_content = $row['post_content'];


     ?>

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>


             <!-- First Blog Post -->
             <h2>
                    <a href="#"><?php echo $post_title ?></a>
                </h2>
                <p class="lead">
                  All post by<?php echo $post_author ?>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
                <hr>

                <a href="post.php?p_id=<?php echo $post_id; ?>">
                <img class="img-responsive" src="images/<?php echo $post_image; ?>"alt="">
                </a>
                
                
                <hr>
                <p><?php echo $post_content ?></p>
                <a class="btn btn-primary" href="post.php?p_id=<?php echo $post_id; ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
            
            
            <?php  } ?>

           
            
                <!-- Blog Comments -->


                <?php
                
                   
                    if(isset($_POST['create_comment'])){

                        $the_post_id = $_GET['p_id'];
                 
                        $comment_author =  $_POST['comment_author'];
                        $comment_email =  $_POST['comment_email'];
                        $comment_content =  $_POST['comment_content'];


                        // echo $the_post_id . "-----" . $comment_author . "-----" 
                        // . $comment_email . "-----" . $comment_content;
                        
                        //  exit;
                        $query = "INSERT INTO comments (comment_post_id, comment_author, comment_email,
                        comment_content, comment_status, comment_date)";

                        $query .= "VALUES ($the_post_id , '{$comment_author}', '{$comment_email}',
                          '{$comment_content}', 'unapproved', now())";


                        // $query .= "VALUES (1, 'ABC', 'A@gmail.com',
                        //   'HGHGHG', 'unapproved', now())";

                          $create_comment_query = mysqli_query($connection,$query);
                               if(!$create_comment_query){

                                  die('QUERY FAILED' . mysqli_error($connection));

                               }

            $query = "UPDATE posts SET post_comment_count = post_comment_count + 1";
            $query .= "WHERE post_id = $the_post_id ";
            $update_comment_count = mysqli_query($connection,$query);


                    }



                ?>



                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form action="" method= "post" role="form">
                        
                    <div class="form-group">
                            <label for="Author">Author</label>
                            <input type="text" name= "comment_author" class="form-control" name="comment_author">
                    </div>

                     
                    <div class="form-group">
                    <label for="Author">Email</label>
                            <input type="email" name= "comment_email" class="form-control" name="comment_email">
                    </div>

                        <div class="form-group">
                        <label for="comment">Your Comment</label>
                            <textarea  name= "comment_content"  class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" name = "create_comment"class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <?php

                  if(isset($the_post_id)){

                $query = "SELECT * FROM comments WHERE comment_post_id = {$the_post_id}";
                $query .= " AND comment_status = 'approved' ";
                $query .= "ORDER BY comment_id DESC";


                $select_comment_query = mysqli_query($connection, $query);
                if(!$select_comment_query){

                   die('Query Failed' . mysqli_error($connection));

                }

                while($row = mysqli_fetch_assoc($select_comment_query)){
                    $comment_date = $row['comment_date'];
                    $comment_content = $row['comment_content'];
                    $comment_author = $row['comment_author'];
              
                    ?>

      
               <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $comment_author ?>
                            <small><?php echo $comment_date ?></small>
                        </h4>
                        <?php echo $comment_content ?>
                    </div>
                </div>

              
               <?php } } ?>

  

            </div>

            <!-- Blog Sidebar Widgets Column -->
          

            <?php include "includes/sidebar.php"; ?>


             </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>