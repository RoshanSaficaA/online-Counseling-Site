<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Review</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://assets.calendly.com/assets/external/widget.css'><link rel="stylesheet" href="./review.css">

</head>
<style>
	@media (max-width: 720px) {
  #feedback{
    max-width: 90%;
  }
}

@media (max-width: 500px) {
  #feedback{
    padding: 10px;
  }
}

#feedback {
  max-width: 60%;
  width: 100%;
  margin: 10px auto;
  padding: 20px;
  border: solid 1px #f1f1f1;
  background: #fbfbfb;
  box-shadow: #e6e6e6 0 0 4px ;
  border-radius: 0.25rem;
}

#fh2{
 padding: 2px 15px;
 color: #ff4d4d;
 text-align: center;
 
 
}

@media (max-width: 400px) {
  #fh2{
    font-size: 20px;
  }
}


#fh6 {
 padding: 2px 15px;
 color: black;
 text-align: center;
 font-weight: normal;
}

@media (max-width: 400px) {
  #fh6{
    font-size: 12px;
  }
}

.pinfo {
 margin: 8px auto;
 font-weight: bold;
 line-height: 1.5;
 color: #0d0d0d;
}
.form-group {
  margin-bottom: 1rem;
}
  
.form-control {
  display: block;
  width: 100%;
  padding: 0.5rem 0.75rem;
  font-size: 1rem;
  line-height: 1.25;
  font-weight: bold;
  color: #6C6262;
  background-color: #fff;
  background-image: none;
  -webkit-background-clip: padding-box;
          background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem;
  -webkit-transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
  -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
}

.form-control::-ms-expand {
  background-color: transparent;
  border: 0;
}

.form-control:focus {
  color: #696060;
  background-color: #fff;
  border-color: #5cb3fd;
  outline: none;
}

.form-control::-webkit-input-placeholder {
  color: #F34949;
  opacity: 1;
}

.form-control::-moz-placeholder {
  color: brown;
  opacity: 1;
}

.form-control:-ms-input-placeholder {
  color: blue;
  opacity: 1;
}

.form-control::placeholder {
  color: white;
  opacity: 1;
}

.form-control:disabled, .form-control[readonly] {
  background-color: red;
  opacity: 1;
}

.form-control:disabled {
  cursor: not-allowed;
}

select.form-control:not([size]):not([multiple]) {
  height: calc(2.25rem + 2px);
}

select.form-control:focus::-ms-value {
  color: green;
  background-color: #fff;
}

.form-control-file,
.form-control-range {
  display: block;
}

.input-group {
  position: relative;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
}

.input-group .form-control {
  position: relative;
  z-index: 2;
  -webkit-box-flex: 1;
  -webkit-flex: 1 1 auto;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  width: 1%;
  margin-bottom: 0;
}

.input-group .form-control:focus, .input-group .form-control:active, .input-group .form-control:hover {
  z-index: 3;
}

.input-group-addon,
.input-group-btn,
.input-group .form-control {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.input-group-addon:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child),
.input-group .form-control:not(:first-child):not(:last-child) {
  border-radius: 0;
}

.input-group-addon,
.input-group-btn {
  white-space: nowrap;
  vertical-align: middle;
}

.input-group-addon {
  width: 45px;
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  font-weight: normal;
  line-height: 1.25;
  color: #2e2e2e;
  text-align: center;
  background-color: #eceeef;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem;
}

.input-group-addon.form-control-sm,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .input-group-addon.btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  border-radius: 0.2rem;
}

.input-group-addon.form-control-lg,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .input-group-addon.btn {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem;
  border-radius: 0.3rem;
}

.input-group-addon input[type="radio"],
.input-group-addon input[type="checkbox"] {
  margin-top: 0;
}

.input-group .form-control:not(:last-child),
.input-group-addon:not(:last-child),
.input-group-btn:not(:last-child) > .btn,
.input-group-btn:not(:last-child) > .btn-group > .btn,
.input-group-btn:not(:last-child) > .dropdown-toggle,
.input-group-btn:not(:first-child) > .btn:not(:last-child):not(.dropdown-toggle),
.input-group-btn:not(:first-child) > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}

.input-group-addon:not(:last-child) {
  border-right: 0;
}

.input-group .form-control:not(:first-child),
.input-group-addon:not(:first-child),
.input-group-btn:not(:first-child) > .btn,
.input-group-btn:not(:first-child) > .btn-group > .btn,
.input-group-btn:not(:first-child) > .dropdown-toggle,
.input-group-btn:not(:last-child) > .btn:not(:first-child),
.input-group-btn:not(:last-child) > .btn-group:not(:first-child) > .btn {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}

.form-control + .input-group-addon:not(:first-child) {
  border-left: 0;
}

.btn {
  display: inline-block;
  font-weight: normal;
  line-height: 1.25;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  border: 1px solid transparent;
  padding: 0.5rem 1rem;
  font-size: 1rem;
  border-radius: 0.25rem;
  -webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}

.btn:focus, .btn:hover {
  text-decoration: none;
}

.btn:focus, .btn.focus {
  outline: 0;
  -webkit-box-shadow: 0 0 0 2px rgba(2, 117, 216, 0.25);
          box-shadow: 0 0 0 2px rgba(2, 117, 216, 0.25);
}

.btn.disabled, .btn:disabled {
  cursor: not-allowed;
  opacity: .65;
}

.btn:active, .btn.active {
  background-image: none;
}

a.btn.disabled,
fieldset[disabled] a.btn {
  pointer-events: none;
}

.btn-primary {
  color: #fff;
  background-color: #0275d8;
  border-color: #0275d8;
}

.btn-primary:hover {
  color: #fff;
  background-color: #025aa5;
  border-color: #01549b;
}

.btn-primary:focus, .btn-primary.focus {
  -webkit-box-shadow: 0 0 0 2px rgba(2, 117, 216, 0.5);
          box-shadow: 0 0 0 2px rgba(2, 117, 216, 0.5);
}

.btn-primary.disabled, .btn-primary:disabled {
  background-color: #0275d8;
  border-color: #0275d8;
}

.btn-primary:active, .btn-primary.active,
.show > .btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #025aa5;
  background-image: none;
  border-color: #01549b;
}

</style>
<body>
<!-- partial:index.partial.html -->

<h2 class="section center">Top Most Reviews</h2><br><br>
<section class="section testimonials">
	<div class="testimonials__container">
		
			<div class="testimonial">
				<figure>
					<img src="https://picsum.photos/id/453/100" alt="" class="circle">
				</figure>
				<h3>Jessica(June6,2022)</h3>
				<p>Crystal is a really good therapist. I had trouble with<br> dealing with trauma.I was able to talk things out easily <br>and get good input, on how to handle my trauma response<br>to triggers. Honestly one of the best talk therapists out there.</p>
				<p>⭐ ⭐ ⭐ ⭐ ⭐</p>
			</div>

			<div class="testimonial">
				<figure>
					<img src="https://picsum.photos/id/1027/100" alt="" class="circle">
				</figure>
				<h3>Swetha Vikram(Nov20,2021)</h3>
				<p>John Tallarido is an extremely knowledgeable,compassionate,<br>and sincere therapist. He is personable,and clearly has a lot of<br>experience with a variety of mental health topics, and general life challenges. I’ve only had one therapy session so far, and I feel very comfortable with him as my therapist. Highly recommend!</p>
				<p>⭐ ⭐ ⭐ ⭐</p>
			</div>

			<div class="testimonial">
				<figure>
					<img src="https://picsum.photos/id/883/100" alt="" class="circle">
				</figure>
				<h3>Thomas nelson(Feb23,2022)</h3>
				<p>I've only had 2 sessions with Crystal so far and third one is tomorrow.<br>I cannot wait to talk to her! She is so calming and dependable.<br>I cant thank her enough for helping me stay calm and feel normal and safe through life's tough times. She is a God send.</p>
				<p>⭐ ⭐ ⭐ ⭐ ⭐</p>
			</div>
            
	</div>
</section>
<section id="testimonials">
        <!--heading--->
        <div class="testimonial-heading">
            <span>Read More</span>
            <h4>-----------</h4>
        </div>
        <!--testimonials-box-container------>
        <div class="testimonial-box-container">
            <!--BOX-1-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="rev2.jpg" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Marsha</strong>
                            <span>(Jan5,2022)</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i><!--Empty star-->
                    </div>
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>I've only had a couple of sessions with Joy so far but I feel like I am making a lot of progress already. She is really easy to talk to and genuinely seems to care. I feel like she is the therapist I have been searching for and so thankful to be working with her.</p>
                </div>
            </div>
            <!--BOX-2-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="rev1.jpg" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Richard</strong>
                            <span>(Dec10,2021)</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><!--Empty star-->
                    </div>
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>Erika is kind, understanding, and a wonderful listener. The only reason I will be switching therapists is because I had to move out of state. I will miss our sessions together. Anyone would be lucky to have Erika in their corner. Thank you, Erika! For everything!</p>
                </div>
            </div>
            <!--BOX-3-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="rev3.jpg" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Cynthia</strong>
                            <span>(Aug29,2021)</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i><!--Empty star-->
                    </div>
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>MegAnne is a wonderful listener and supports my journey to healing. She has helped me move from a grey and unknown area in my life towards a path of healing. She is very supportive and uplifting during our sessions and genuinely cares about me and my struggles.</p>
                </div>
            </div>
            <!--BOX-4-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="rev4.jpg" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Mary</strong>
                            <span>(Mar9,2022)</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i><!--Empty star-->
                    </div>
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>Ann is so amazing. She does such a great job of both supporting and uplifting me while also holding me accountable and making sure I’m moving towards my goals. I truly appreciate all her help!</p>
                </div>
            </div>
        </div>
      </section>
    
<!-- partial -->
<script src='https://kit.fontawesome.com/c8e4d183c2.js'></script>
<script src="https://use.fontawesome.com/a6f0361695.js"></script>

<h2 id="fh2">WE APPRECIATE YOUR REVIEW!</h2>
<h6 id="fh6">Your review will help us to improve our web hosting quality products, and customer services.</h6>


<form id="feedback" action="reviewphp.php" method="post">
<div class="rendered-form">
  <div class="pinfo">Your personal info</div>
 
<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  
 <span class="input-group-addon"><i class="fa fa-user"></i></span>
  <input  name="user_name" placeholder="John Doe" class="form-control"  type="text">
    
  </div>
</div>
</div>

<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <input name="email_id" type="email" class="form-control" placeholder="john.doe@yahoo.com">
    
  </div>
</div>
</div>

<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">

  <span class="input-group-addon"><i class="fa fa-globe"></i></span>
  <input  name="password_1"  class="form-control"  type="password">
   
  </div>
</div>
</div>

 <div class="pinfo">Rate our overall services.</div>
  
<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">


        <span class="input-group-addon" ><i class="fa fa-heart"></i></span>
        <select type="number" class="form-control" name="rate_star" id="rate_star">
            <option value="1" >1</option>
            <option value="2" >2</option>
            <option value="3" >3</option>
            <option value="4" >4</option>
            <option value="5" >5</option>
        </select>
    

    </div>
</div>
</div>

 <div class="pinfo">Write your feedback.</div>


<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
  <textarea type="textarea" class="form-control" name="message" access="false" maxlength="150" rows="3" id="message" ></textarea>
 
    </div>
  </div>
</div>
</div>

 <button type="submit" class="btn btn-primary">Submit</button>


</form>
</body>
</html>
