<!-- partial:index.partial.html -->
<style>
    textarea {
    resize: none;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  white-space: nowrap;
}

@charset "UTF-8";

.svg-inline--fa {
  vertical-align: -0.200em;
}

.rounded-social-buttons {
  text-align: center;
}

.rounded-social-buttons .social-button {
  display: inline-block;
  position: relative;
  cursor: pointer;
  width: 3.125rem;
  height: 3.125rem;
  border: 0.125rem solid transparent;
  padding: 0;
  text-decoration: none;
  text-align: center;
  color: #fefefe;
  font-size: 1.5625rem;
  font-weight: normal;
  line-height: 2em;
  border-radius: 1.6875rem;
  transition: all 0.5s ease;
  margin-right: 0.25rem;
  margin-bottom: 0.25rem;
}

.rounded-social-buttons .social-button:hover, .rounded-social-buttons .social-button:focus {
  -webkit-transform: rotate(360deg);
      -ms-transform: rotate(360deg);
          transform: rotate(360deg);
}

.rounded-social-buttons .fa-twitter, .fa-facebook-f, .fa-linkedin, .fa-youtube, .fa-instagram {
  font-size: 25px;
}

.rounded-social-buttons .social-button.facebook {
  background: #3b5998;
}

.rounded-social-buttons .social-button.facebook:hover, .rounded-social-buttons .social-button.facebook:focus {
  color: #3b5998;
  background: #fefefe;
  border-color: #3b5998;
}

.rounded-social-buttons .social-button.twitter {
  background: #55acee;
}

.rounded-social-buttons .social-button.twitter:hover, .rounded-social-buttons .social-button.twitter:focus {
  color: #55acee;
  background: #fefefe;
  border-color: #55acee;
}

.rounded-social-buttons .social-button.linkedin {
  background: #007bb5;
}

.rounded-social-buttons .social-button.linkedin:hover, .rounded-social-buttons .social-button.linkedin:focus {
  color: #007bb5;
  background: #fefefe;
  border-color: #007bb5;
}

.rounded-social-buttons .social-button.youtube {
  background: #bb0000;
}

.rounded-social-buttons .social-button.youtube:hover, .rounded-social-buttons .social-button.youtube:focus {
  color: #bb0000;
  background: #fefefe;
  border-color: #bb0000;
}

.rounded-social-buttons .social-button.instagram {
  background: #125688;
}

.rounded-social-buttons .social-button.instagram:hover, .rounded-social-buttons .social-button.instagram:focus {
  color: #125688;
  background: #fefefe;
  border-color: #125688;
}

.social-media {
    background: #f0f8ff;
}
</style>

<footer class="d-flex flex-column py-3 social-media footer-margin">
    <div class="row justify-content-center w-100">
        <div class="col-lg-8 text-center">
            <h3 class="mt-0">Follow us on!</h3>
            <hr class="divider my-4" />
        </div>
    </div>
    <div class="rounded-social-buttons d-flex m-auto row w-100 justify-content-center">
        <div class="col-md-1 col-sm-2 col-2">
            <a class="social-button facebook d-flex " href="https://www.facebook.com/Seekheed-104251228550231" target="_blank"><i class="fab fa-facebook-f m-auto"></i></a>
        </div>
        <div class="col-md-1 col-sm-2 col-2">
            <a class="social-button twitter d-flex" href="https://twitter.com/seekheed" target="_blank"><i class="fab fa-twitter m-auto"></i></a>
        </div>
        <div class="col-md-1 col-sm-2 col-2">
            <a class="social-button youtube d-flex" href="https://www.pinterest.com/seekheed/" target="_blank"><i class="fab fa-pinterest m-auto"></i></a>
        </div>
        <div class="col-md-1 col-sm-2 col-2">
            <a class="social-button instagram d-flex p-2" href="https://www.instagram.com/seekheed" target="_blank"><img src="{{asset('public/resource/assets/img/icons/linktree.png')}}" alt=""></a>
        </div>
        <div class="col-md-1 col-sm-2 col-2">
            <a class="social-button linkedin d-flex" href="https://www.linkedin.com/company/seekheed/" target="_blank"><i class="fab fa-linkedin m-auto"></i></a>
        </div>
        <div class="col-md-1 col-sm-2 col-2">
            <a class="social-button youtube d-flex" href="https://www.youtube.com/channel/UCL8dB8RM1HsDHXwOicRN-7g" target="_blank"><i class="fab fa-youtube m-auto"></i></a>
        </div>
        <div class="col-md-1 col-sm-2 col-2">
            <a class="social-button instagram d-flex" href="https://www.instagram.com/seekheed" target="_blank"><i class="fab fa-instagram m-auto"></i></a>
        </div>
        <div class="col-md-1 col-sm-2 col-2">
            <a class="social-button linkedin d-flex " style="padding: 3px;" href="https://www.snapchat.com/add/seekheed" target="_blank"><img src="{{asset('public/resource/assets/img/icons/snap1.png')}}" alt=""></a>
        </div>
        <div class="col-md-1 col-sm-2 col-2">
            <a class="social-button twitter d-flex " href="https://www.tiktok.com/@seekheed?lang=en" target="_blank"><img src="{{asset('public/resource/assets/img/icons/tiktok.png')}}" alt=""></a>
        </div>
    </div>
</footer>
<!-- partial -->
<!-- Footer-->
<footer class="bg-light py-5">
    <div class="container">
        <div class="small text-center text-muted">
            Copyright &copy;
            <!-- This script automatically adds the current year to your website footer-->
            <!-- (credit: https://updateyourfooter.com/)-->
            <script>
                document.write(new Date().getFullYear());
            </script>
            - SEEKHEED
        </div>
    </div>
</footer>
