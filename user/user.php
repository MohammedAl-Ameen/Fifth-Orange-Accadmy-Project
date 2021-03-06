<?php 
include_once "../connect.php";


function user_name($id , $arr){
  foreach($arr as $value){
      if($value ["user_id"] == $id){
          return $value["name"];
      }
  }

  return -1;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>

   <?php require_once "../assets/PHP_File/css.php"; ?>

</head>




<?php 

$sql = 'SELECT * FROM user';

$statement = $db->prepare($sql);


?>

<body>
<div id="app">
        <?php include_once "../assets/PHP_File/Bars.php"?>
        <li class="menu-header">Admin user</li>
                    <li id="Dashboard" ><a href="../index.php" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
                        <li id="Users" class="active"><a href="../user/user.php" class="nav-link" style='color:#F28123'><i class="far fa-user"></i><span>Users</span></a></li>
                        <li id="Orders"><a href="../order/order.php" class="nav-link"><i class="far fa-file-alt" ></i><span>Orders</span></a></li>
                        <li><a href="../category/category.php" class="nav-link"><i class="fas fa-bicycle" id="Categories"></i><span>Categories</span></a></li>
                        <li><a href="../product/product.php" class="nav-link"><i class="fas fa-fire" id="Products"></i><span>Products</span></a></li>
                        <li><a href="../comment/comment.php" class="nav-link"><i class="fas fa-pencil-ruler" id="Comments"></i><span>Comments</span></a></li>
                </aside>
            </div>
        <div class="main-wrapper main-wrapper-1">
            <div class="main-content" style="min-height: 668px;">
                <section class="section">
                    <div class="section-header" style="margin-left:-32px;">
                          <h1>User</h1>
                      </div>
                      <div class="col-12 col-md-6 col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      <h4>User</h4>
                    </div>
                    <div class="card-body p-0">
                      <div class="table-responsive">
                        <table class="table table-striped table-md">
                          <tbody><tr>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th></th>
                            <th></th>
                          </tr>
                          <?php
                          if($user_data){
                          foreach($user_data as $value){

                            ?>
                          <tr>
                          
                            <td><?php echo $value["user_id"] ?></td>
                            <td><?php echo $value["name"] ?></td>
                            <td><img src="../library-origin/images/<?php echo $value["url_image"] ?>" style="width: 100px;"></td>
                            <td><?php echo $value["role"] ?></td>
                            <td><?php echo $value["email"] ?></td>
                            <td><a href="edit_user.php?user_id=<?php echo $value['user_id'] ."&mode=edit";?>" class="btn btn-secondary" style="height: 60%;" >Edit</a></td>
                            <td><button class="btn btn-danger" style="height: 60%;" data-toggle="modal" data-target="#confirm<?php echo $value['user_id'];?>">Delete</button></td>
                          </tr>
                          <?php  } ?>
                          <?php }else{ ?> 
                            <tr> <td colspan="8">
                              <div class="col-12 col-md-12 col-sm-12">
                                <div class="card">
                                  <div class="card-body">
                                    <div class="empty-state" data-height="200" style="height: 200px;">
                                      <div class="empty-state-icon">
                                        <i class="fas fa-question"></i>
                                      </div>
                                      <h2>We couldn't find any data</h2>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </td></tr> <?php }?>
                        </tbody></table>
                        
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <nav class="d-inline-block" style="display: flex;">
                        <ul class="pagination mb-0">
                          <li style="margin-right: 20px;"><a href="../index.php" class="btn"style='background-color:#F28123;color:white'>Back</a></li>
                          <li><a href="edit_user.php?mode=add" class="btn "style='background-color:#F28123;color:white'>Add</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </section>
            </div>
        </div>
</div>

<?php foreach($user_data as $value){ ?>
<div class="modal fade" id="confirm<?php echo $value['user_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="top: 27vh;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="edit_user.php?user_id=<?php echo $value['user_id'] ."&mode=delete";?>" type="button" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>

<?php } include_once "../assets/PHP_File/footer.php"?>
</body>

<?php require_once "../assets/PHP_File/js.php"; ?>