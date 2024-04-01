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
        <label for="">Write your post here</label>
        <br><br>
        <textarea name="" id="input" cols="15" rows="2"></textarea>
        <textarea name="" id="input2" cols="15" rows="2"></textarea>
        <textarea name="" id="input3" cols="15" rows="2"></textarea>
        <textarea name="" id="input4" cols="15" rows="2"></textarea>
        <br><br>
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
    </div>
  </div>
</body>
<script src="a1.js"></script>

</html>