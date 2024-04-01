let form = document.getElementById("form");
let input = document.getElementById("input");
let input2 = document.getElementById("input2");
let input3 = document.getElementById("input3");
let input4 = document.getElementById("input4");
let msg = document.getElementById("msg");
let posts = document.getElementById("posts");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  console.log("button clicked");
  formValidation();
});

let formValidation = () => {
  if (input.value === "") {
    msg.innerHTML = "Post cannot be blank";
    console.log("failure");
  } else {
    console.log("successs");
    msg.innerHTML = "";
    acceptData();
  }
};

let data = {};

let acceptData = () => {
  data["name"] = input.value;
  data["email"] = input2.value;
  data["address"] = input3.value;
  data["phone"] = input4.value;
  console.log(data);
  createPost();
};

let createPost = () => {
  posts.innerHTML += `
  <tr>
        <td>${data.name}</td>
        <td>${data.email}</td>
        <td>${data.address}</td>
        <td>${data.phone}</td>
        <td>
            <i onClick="editPost(this)" class="fas fa-edit"></i>
            <i onClick="deletePost(this)" class="fas fa-trash-alt"></i>
        </td>
    </tr>
  `;
  input.value = "";
  input2.value = "";
  input3.value = "";
  input4.value = "";
};

let deletePost = (e) => {
  e.parentElement.parentElement.remove();
};

let editPost = (e) => {
  input.value = e.parentElement.previousElementSibling.innerHTML;
  input2.value = e.parentElement.previousElementSibling.innerHTML;
  input3.value = e.parentElement.previousElementSibling.innerHTML;
  input4.value = e.parentElement.previousElementSibling.innerHTML;
  e.parentElement.parentElement.remove();
};

