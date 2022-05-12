<?php header("Content-type: text/css"); ?>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
.footer {
  max-height: 200px;
  bottom: 0px;
  width: 100%;
  position: static;
  display: flex;
}
.Headers {
  font-size: 30px;
}
.mainDiv {
  min-height: 350px;
}
.halfCover {
  background-image: url("pizza.jpeg");
  background-repeat: repeat;
  background-attachment: fixed;
  background-size: cover;
}
#imageBackground {
  background-image: url("images/resturant.jpg");
  /* Half height */
  height: 40%;
  box-shadow: inset 0 0 0 1000px rgba(255, 255, 255, 0.2);
  /* Center and scale the image nicely */
  background-repeat: repeat;
  background-attachment: fixed;
  background-size: cover;
}
#bg {
  /* The image used */
  background-image: url("images/pizza.jpeg");
  /* Half height */
  height: 30%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.imageHolder {
  max-width: 20px;
  max-height: 20px;
  background-image: url("images/signup.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

#loginForm {
  max-width: 350px;
  max-height: 450px;
  margin: 80px auto;
  padding: 40px 30px 30px 30px;
  background-color: #ecf0f3;
  border-radius: 15px;
  box-shadow: 5px 5px 5px #cbced1, -3px -3px 2px #fff;
}
#RegisterForm {
  max-width: 350px;
  max-height: 550px;
  margin: 80px auto;
  padding: 40px 30px 30px 30px;
  background-color: #ecf0f3;
  border-radius: 15px;
  box-shadow: 5px 5px 5px #cbced1, -3px -3px 2px #fff;
}
.logo {
  width: 80px;
  margin: auto;
}
.logo img {
  width: 100%;
  height: 80px;
  object-fit: cover;
  border-radius: 50%;
  box-shadow: 0px 0px 3px #5f5f5f, 0px 0px 0px 5px #ecf0f3, 8px 8px 15px #a7aaa7,
    -8px -8px 15px #fff;
}

#loginForm .name {
  font-weight: 600;
  font-size: 0.5rem;
  letter-spacing: 1px;
  padding-left: 10px;
  color: #555;
}

.wrapper .form-field input {
  width: 100%;
  display: block;
  border: none;
  outline: none;
  background: none;
  font-size: 0.5rem;
  color: #666;
  padding: 10px 15px 10px 10px;
}

.wrapper .form-field {
  padding-left: 10px;
  margin-bottom: 20px;
  border-radius: 20px;
  box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
}

.wrapper .form-field .fas {
  color: #555;
}

.wrapper .btn {
  box-shadow: none;
  width: 100%;
  height: 40px;
  background-color: #1c2123;
  color: #fff;
  border-radius: 25px;
  box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
  letter-spacing: 1.3px;
}

.wrapper .btn:hover {
  background-color: #7c878c;
}

.wrapper a {
  text-decoration: none;
  font-size: 0.8rem;
  color: #03a9f4;
}

.wrapper a:hover {
  color: #039be5;
}

@media (max-width: 380px) {
  .wrapper {
    margin: 30px 20px;
    padding: 40px 15px 15px 15px;
  }
}

:root {
  --jumbotron-padding-y: 3rem;
}

.jumbotron {
  padding-top: var(--jumbotron-padding-y);
  padding-bottom: var(--jumbotron-padding-y);
  margin-bottom: 0;
  background-color: #fff;
}
@media (min-width: 768px) {
  .jumbotron {
    padding-top: calc(var(--jumbotron-padding-y) * 2);
    padding-bottom: calc(var(--jumbotron-padding-y) * 2);
  }
}

.jumbotron p:last-child {
  margin-bottom: 0;
}

.jumbotron-heading {
  font-weight: 300;
}

/* .jumbotron .container {
  max-width: 40rem;
} */

.box-shadow {
  box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.05);
}
.recepie_details_area {
  padding-top: 100px;
}
.recepie_details_area .recepies_thumb img {
  width: 90%;
}
.recepie_details_area .recepies_thumb {
  margin-bottom: 50px;
}
.recepie_details_area .recepies_info {
  padding-left: 68px;
}
.recepie_details_area .recepies_info {
  padding-left: 30px;
  margin-bottom: 30px;
}
.recepie_details_area .recepies_info {
  padding-left: 0px;
}
.recepie_details_area {
  padding-top: 100px;
}
.recepie_details_area .recepies_info h3 {
  font-size: 30px;
  color: #222222;
  margin-bottom: 23px;
}
.recepie_details_area .recepies_info p {
  color: #777777;
  font-size: 14px;
}
.recepie_details_area .recepies_info .resepies_details {
  margin-top: 38px;
  margin-bottom: 30px;
}
/* line 41, ../../Arafath/CL/CL October/220 Tasty Recipes/HTML/scss/_recipe_details.scss */
.recepie_details_area .recepies_info .resepies_details ul li p {
  color: #777777;
  margin-bottom: 0;
  font-size: 14px;
  font-weight: 400;
  line-height: 24px;
}

/* line 47, ../../Arafath/CL/CL October/220 Tasty Recipes/HTML/scss/_recipe_details.scss */
.recepie_details_area .recepies_info .resepies_details ul li p strong {
  width: 100px;
  color: #000000;
  font-size: 14px;
  font-weight: 300;
  display: inline-block;
}

/* line 54, ../../Arafath/CL/CL October/220 Tasty Recipes/HTML/scss/_recipe_details.scss */
.recepie_details_area .recepies_info .resepies_details ul li p i {
  color: #ffcc00;
}

/* line 62, ../../Arafath/CL/CL October/220 Tasty Recipes/HTML/scss/_recipe_details.scss */
.recepie_details_area .recepies_info .links a {
  color: #cccccc;
  font-size: 14px;
  margin-right: 10px;
}

/* line 66, ../../Arafath/CL/CL October/220 Tasty Recipes/HTML/scss/_recipe_details.scss */
.recepie_details_area .recepies_info .links a:hover {
  color: #000;
}

/* line 73, ../../Arafath/CL/CL October/220 Tasty Recipes/HTML/scss/_recipe_details.scss */
.recepie_details_area .recepies_text p {
  font-size: 14px;
  color: #777777;
  line-height: 30px;
  margin-bottom: 30px;
}

/* line 78, ../../Arafath/CL/CL October/220 Tasty Recipes/HTML/scss/_recipe_details.scss */
.recepie_details_area .recepies_text p:last-child {
  margin-bottom: 0;
}
#withBackground {
  background-image: url("images/resBackground.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
