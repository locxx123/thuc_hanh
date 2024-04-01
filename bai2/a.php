<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD Basics</title>
  <link rel="stylesheet" href="a.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
  <h1>Social Media App</h1>
  <div class="container">
    <div class="left">
      <form id="form">
        <!-- <label for="">Write your post here</label>
        <br><br>
        <textarea name="" id="input" cols="30" rows="10"></textarea>
        <br><br> -->
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control add_name" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control add_email" required>
        </div>
        <div class="form-group">
            <label>Address</label>
            <textarea class="form-control add_address" required></textarea>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control add_phone" required>
        </div>
        <div id="msg"></div>
        <button type="submit">Post</button>
      </form>
    </div>
    <div class="right">
      <h3>Your posts here</h3>
      <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="tbody" id="posts">
        </tbody>
    </table>
      <!-- <div id="posts">
        <div>
          <p>Post 1</p>
          <span class="options">
            <i onClick="editPost(this)" class="fas fa-edit"></i>
            <i onClick="deletePost(this)" class="fas fa-trash-alt"></i>
          </span>
        </div>
        <div>
          <p>Post 2</p>
          <span class="options">
            <i onClick="editPost(this)" class="fas fa-edit"></i>
            <i onClick="deletePost(this)" class="fas fa-trash-alt"></i>
          </span>
        </div>
      </div> -->
    </div>
  </div>
</body>
<script src="a1.js"></script>

</html>