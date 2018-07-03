@extends('layout.app')

@section('content')

	<div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
                <img src="{{ asset('assets/images/profile.jpg') }}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
              </div>
              <div class="name">
                <h3 class="title">Manuel U. Ortega Jr.</h3>
                <h6>Web Developer / Software Engineer</h6>
                <a href="https://web.facebook.com/jaymanuel13" target="_blank" class="btn btn-just-icon btn-link btn-pinterest" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fab fa-facebook-square"></i></a>
                <a href="https://github.com/JonSnow13" target="_blank" class="btn btn-just-icon btn-link btn-pinterest" data-toggle="tooltip" data-placement="bottom" title="GitHub"><i class="fab fa-github-square"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="#album" role="tab" data-toggle="tab">
                    <i class="material-icons">camera</i> Albums
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="tab-content tab-space">
			<div class="tab-pane active text-center gallery" id="album">
                <div class="row">

                	<div class="col-md-6">
                		<div id="carouselAwards" class="carousel slide" data-ride="carousel">
                			<div class="more-photo-filter">
                				<h3 class="title ml-auto mr-auto" style="color: #fff">
                					11 more photos
                				</h3>
                			</div>
						  	<div class="carousel-inner" style="max-height: 305px; height: 305px;">
						    	<div class="carousel-item carousel-img-panel active">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/achievements/img.jpg') }}" alt="1st slide">
						      		<input type="hidden" class="caption" value="Outstanding On the Job Trainee">
						      		<input type="hidden" class="pageCount" value="1">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/achievements/img1.jpg') }}" alt="2nd slide">
						      		<input type="hidden" class="caption" value="Service Award.">
						      		<input type="hidden" class="pageCount" value="2">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/achievements/img11.jpg') }}" alt="3rd slide">
						      		<input type="hidden" class="caption" value="Top student for ITE Elective IV / Web Development 2018.">
						      		<input type="hidden" class="pageCount" value="3">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/achievements/img12.jpg') }}" alt="4th slide">
						      		<input type="hidden" class="caption" value="Creatice Digital Arts Club (CDAC) service award.">
						      		<input type="hidden" class="pageCount" value="4">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/achievements/img2.jpg') }}" alt="5th slide">
						      		<input type="hidden" class="caption" value="">
						      		<input type="hidden" class="pageCount" value="5">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/achievements/img0.jpg') }}" alt="6th slide">
						      		<input type="hidden" class="caption" value="Academic Excellence award.">
						      		<input type="hidden" class="pageCount" value="6">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/achievements/aw1.jpg') }}" alt="7th slide">
						      		<input type="hidden" class="caption" value="Service Award - May 26, 2017.">
						      		<input type="hidden" class="pageCount" value="7">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/achievements/aw11.jpg') }}" alt="8th slide">
						      		<input type="hidden" class="caption" value="Data Structures & Algorithm Analysis.">
						      		<input type="hidden" class="pageCount" value="8">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/achievements/aw2.jpg') }}" alt="9th slide">
						      		<input type="hidden" class="caption" value="Management Information System - May 26, 2017.">
						      		<input type="hidden" class="pageCount" value="9">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/achievements/aw3.jpg') }}" alt="10th slide">
						      		<input type="hidden" class="caption" value="Database Management System I - May 26, 2017.">
						      		<input type="hidden" class="pageCount" value="10">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/achievements/aw4.jpg') }}" alt="11th slide">
						      		<input type="hidden" class="caption" value="Databse Management System II - May 26, 2017.">
						      		<input type="hidden" class="pageCount" value="11">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/achievements/aw5.jpg') }}" alt="12th slide">
						      		<input type="hidden" class="caption" value="Mobile Application Development - May 26, 2017.">
						      		<input type="hidden" class="pageCount" value="12">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/achievements/aw6.jpg') }}" alt="13th slide">
						      		<input type="hidden" class="caption" value="Data Communication II - May 26, 2017.">
						      		<input type="hidden" class="pageCount" value="13">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/achievements/aw7.jpg') }}" alt="14th slide">
						      		<input type="hidden" class="caption" value="Web Development - April 7, 2016.">
						      		<input type="hidden" class="pageCount" value="14">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/achievements/aw8.jpg') }}" alt="15th slide">
						      		<input type="hidden" class="caption" value="Certificate of  Training Completion - Nov 29, 2017.">
						      		<input type="hidden" class="pageCount" value="15">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/achievements/img8.jpg') }}" alt="16th slide">
						      		<input type="hidden" class="caption" value="Outstanding On the Job Trainee.">
						      		<input type="hidden" class="pageCount" value="16">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/achievements/aw9.jpg') }}" alt="17th slide">
						      		<input type="hidden" class="caption" value="Databse Management System - April 7, 2016.">
						      		<input type="hidden" class="pageCount" value="17">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/achievements/aw10.jpg') }}" alt="18th slide">
						      		<input type="hidden" class="caption" value="Networking I - April 7, 2016.">
						      		<input type="hidden" class="pageCount" value="18">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/achievements/img3.jpg') }}" alt="19th slide">
						      		<input type="hidden" class="caption" value=".">
						      		<input type="hidden" class="pageCount" value="19">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/achievements/img4.jpg') }}" alt="20th slide">
						      		<input type="hidden" class="caption" value="Caption.">
						      		<input type="hidden" class="pageCount" value="20">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/achievements/img6.jpg') }}" alt="21th slide">
						      		<input type="hidden" class="caption" value="Caption.">
						      		<input type="hidden" class="pageCount" value="21">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/achievements/img7.jpg') }}" alt="22th slide">
						      		<input type="hidden" class="caption" value="Caption.">
						      		<input type="hidden" class="pageCount" value="22">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/achievements/img9.jpg') }}" alt="23th slide">
						      		<input type="hidden" class="caption" value="Caption.">
						      		<input type="hidden" class="pageCount" value="23">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/achievements/img10.jpg') }}" alt="24th slide">
						      		<input type="hidden" class="caption" value="Top student for web development.">
						      		<input type="hidden" class="pageCount" value="24">
						    	</div>
						  	</div>
						  	<a class="carousel-control-prev" href="#carouselAwards" role="button" data-slide="prev">
						    	{{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
						    	<span class="sr-only">Previous</span>
						  	</a>
						  	<a class="carousel-control-next" href="#carouselAwards" role="button" data-slide="next">
						    	{{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
						    	<span class="sr-only">Next</span>
						  	</a>
						</div>
						<h4 class="title">Awards</h4>
                	</div>

                	<div class="col-md-6">
                		<div id="carouselIntern" class="carousel slide" data-ride="carousel">
                			<div class="more-photo-filter">
                				<h3 class="title ml-auto mr-auto" style="color: #fff">
                					10 more photos
                				</h3>
                			</div>
						  	<div class="carousel-inner" style="max-height: 305px;">
						    	<div class="carousel-item carousel-img-panel active">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/ojt/intern1.jpg') }}" alt="1st slide">
						      		<input type="hidden" class="caption" value="Certificate & gifts from Ozkez Pty. Ltd / AGuyIKnow.">
						      		<input type="hidden" class="pageCount" value="1">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/ojt/intern2.jpg') }}" alt="2nd slide">
						      		<input type="hidden" class="caption" value="Certificate & gifts from Ozkez Pty. Ltd / AGuyIKnow.">
						      		<input type="hidden" class="pageCount" value="2">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/ojt/intern3.jpg') }}" alt="3rd slide">
						      		<input type="hidden" class="caption" value="Pizza farewell party from Ozkez Pty. Ltd / AGuyIKnow.">
						      		<input type="hidden" class="pageCount" value="3">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/ojt/intern4.jpg') }}" alt="4th slide">
						      		<input type="hidden" class="caption" value="Gifts and Certificate from Ozkez Pty. Ltd / AGuyIKnow.">
						      		<input type="hidden" class="pageCount" value="4">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/ojt/intern5.jpg') }}" alt="5th slide">
						      		<input type="hidden" class="caption" value="Birthday party sponsored by Ozkez Pty. Ltd / AGuyIKnow.">
						      		<input type="hidden" class="pageCount" value="5">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/ojt/intern6.jpg') }}" alt="6th slide">
						      		<input type="hidden" class="caption" value="Noon snack.">
						      		<input type="hidden" class="pageCount" value="6">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/ojt/intern7.jpg') }}" alt="7th slide">
						      		<input type="hidden" class="caption" value="Near midnight snack with our manager (PS. Our manager is the photographer).">
						      		<input type="hidden" class="pageCount" value="7">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/ojt/intern8.jpg') }}" alt="8th slide">
						      		<input type="hidden" class="caption" value="Near midnight snack with our manager (PS. Our manager is the photographer).">
						      		<input type="hidden" class="pageCount" value="8">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/ojt/intern9.jpg') }}" alt="9th slide">
						      		<input type="hidden" class="caption" value="Birthday party prepaired by our nice manager.">
						      		<input type="hidden" class="pageCount" value="9">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/ojt/intern10.jpg') }}" alt="10th slide">
						      		<input type="hidden" class="caption" value="Birthday party prepaired by our nice manager.">
						      		<input type="hidden" class="pageCount" value="10">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/ojt/intern11.jpg') }}" alt="11th slide">
						      		<input type="hidden" class="caption" value="Birthday party prepaired by our nice manager.">
						      		<input type="hidden" class="pageCount" value="11">
						    	</div>
						  	</div>
						  	<a class="carousel-control-prev" href="#carouselIntern" role="button" data-slide="prev">
						    	{{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
						    	<span class="sr-only">Previous</span>
						  	</a>
						  	<a class="carousel-control-next" href="#carouselIntern" role="button" data-slide="next">
						    	{{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
						    	<span class="sr-only">Next</span>
						  	</a>
						</div>
						<h4 class="title">OJT / Internship</h4>
                	</div>

                </div>

                <div class="row">
                	<div class="col-md-6">
                		<div id="carouselGrad" class="carousel slide" data-ride="carousel">
                			<div class="more-photo-filter">
                				<h3 class="title ml-auto mr-auto" style="color: #fff">
                					14 more photos
                				</h3>
                			</div>
						  	<div class="carousel-inner" style="max-height: 305px;">
						    	<div class="carousel-item carousel-img-panel active">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/graduation/g1.jpg') }}" alt="1st slide">
						      		<input type="hidden" class="caption" value="Graduation.">
						      		<input type="hidden" class="pageCount" value="1">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/graduation/g2.jpg') }}" alt="2nd slide">
						      		<input type="hidden" class="caption" value="Graduation.">
						      		<input type="hidden" class="pageCount" value="2">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/graduation/g3.jpg') }}" alt="3rd slide">
						      		<input type="hidden" class="caption" value="Graduation.">
						      		<input type="hidden" class="pageCount" value="3">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/graduation/g4.jpg') }}" alt="4th slide">
						      		<input type="hidden" class="caption" value="Graduation.">
						      		<input type="hidden" class="pageCount" value="4">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/graduation/g5.jpg') }}" alt="5th slide">
						      		<input type="hidden" class="caption" value="Graduation.">
						      		<input type="hidden" class="pageCount" value="5">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/graduation/g6.jpg') }}" alt="6th slide">
						      		<input type="hidden" class="caption" value="Graduation.">
						      		<input type="hidden" class="pageCount" value="6">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/graduation/g7.jpg') }}" alt="7th slide">
						      		<input type="hidden" class="caption" value="Graduation.">
						      		<input type="hidden" class="pageCount" value="6">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/graduation/g8.jpg') }}" alt="8th slide">
						      		<input type="hidden" class="caption" value="Graduation.">
						      		<input type="hidden" class="pageCount" value="7">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/graduation/g9.jpg') }}" alt="9th slide">
						      		<input type="hidden" class="caption" value="Graduation.">
						      		<input type="hidden" class="pageCount" value="8">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/graduation/g10.jpg') }}" alt="10th slide">
						      		<input type="hidden" class="caption" value="Graduation.">
						      		<input type="hidden" class="pageCount" value="9">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/graduation/g11.jpg') }}" alt="11th slide">
						      		<input type="hidden" class="caption" value="Graduation.">
						      		<input type="hidden" class="pageCount" value="10">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/graduation/g11.jpg') }}" alt="12th slide">
						      		<input type="hidden" class="caption" value="Graduation.">
						      		<input type="hidden" class="pageCount" value="11">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/graduation/g12.jpg') }}" alt="13th slide">
						      		<input type="hidden" class="caption" value="Graduation.">
						      		<input type="hidden" class="pageCount" value="12">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/graduation/g13.jpg') }}" alt="14th slide">
						      		<input type="hidden" class="caption" value="Graduation.">
						      		<input type="hidden" class="pageCount" value="13">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/graduation/g14.jpg') }}" alt="15th slide">
						      		<input type="hidden" class="caption" value="Graduation.">
						      		<input type="hidden" class="pageCount" value="14">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/graduation/g15.jpg') }}" alt="16th slide">
						      		<input type="hidden" class="caption" value="Graduation.">
						      		<input type="hidden" class="pageCount" value="15">
						    	</div>
						  	</div>
						  	<a class="carousel-control-prev" href="#carouselGrad" role="button" data-slide="prev">
						    	{{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
						    	<span class="sr-only">Previous</span>
						  	</a>
						  	<a class="carousel-control-next" href="#carouselGrad" role="button" data-slide="next">
						    	{{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
						    	<span class="sr-only">Next</span>
						  	</a>
						</div>
						<h4 class="title">Graduation</h4>
                	</div>

                	<div class="col-md-6">
                		<div id="carouselOthers" class="carousel slide" data-ride="carousel">
                			<div class="more-photo-filter">
                				<h3 class="title ml-auto mr-auto" style="color: #fff">
                					4 more photos
                				</h3>
                			</div>
						  	<div class="carousel-inner" style="max-height: 305px;">
						    	<div class="carousel-item carousel-img-panel active">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/others/others.jpg') }}" alt="1st slide">
						      		<input type="hidden" class="caption" value="Thesis pre-oral defense.">
						      		<input type="hidden" class="pageCount" value="1">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/others/others0.jpg') }}" alt="2nd slide">
						      		<input type="hidden" class="caption" value="IT ball - 2017.">
						      		<input type="hidden" class="pageCount" value="2">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/others/others1.jpg') }}" alt="3rd slide">
						      		<input type="hidden" class="caption" value="CCS Acquaintance party - 2015.">
						      		<input type="hidden" class="pageCount" value="3">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/others/others2.jpg') }}" alt="4th slide">
						      		<input type="hidden" class="caption" value="IT Ball - May 2018.">
						      		<input type="hidden" class="pageCount" value="4">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/others/others3.jpg') }}" alt="5th slide">
						      		<input type="hidden" class="caption" value="IT days - 2016, With my competitor and at the same time my best friend, Kobe. We challenge each other in the field of IT. He was the person who woke my potential in programming with a strong words 'I know your LIMITATION' hahahaha. However, I am very grateful to him, because he challenges me in every way and I was able to improve myself in a great capacity. But, still, he has a brilliant mind than me. PS. In this photo we sang together 'Puros mga yabag' hahahahha ">
						      		<input type="hidden" class="pageCount" value="5">
						    	</div>
						    	<div class="carousel-item carousel-img-panel">
						      		<img class="d-block img-auto-adjust" src="{{ asset('assets/images/others/others4.jpg') }}" alt="6th slide">
						      		<input type="hidden" class="caption" value="CCS Orientation - 2014.">
						      		<input type="hidden" class="pageCount" value="6">
						    	</div>
						  	</div>
						  	<a class="carousel-control-prev" href="#carouselOthers" role="button" data-slide="prev">
						    	{{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
						    	<span class="sr-only">Previous</span>
						  	</a>
						  	<a class="carousel-control-next" href="#carouselOthers" role="button" data-slide="next">
						    	{{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
						    	<span class="sr-only">Next</span>
						  	</a>
						</div>
						<h4 class="title">Others</h4>
                	</div>

                </div>

            </div>

        </div>
      </div>
    </div>

	<!-- Modal for view screenshots med -->
	<div class="modal fade" id="ssModal" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog" role="document" style="max-width: 90%;">
	    <div class="modal-content">
	      <div class="modal-header">
	      	<h5 class="modal-title">Terhea med</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body" style="height: 80%;">
	      		<div class="row">
	      			<div class="col-md-9 carousel-img-panel">
	      				<div id="carouselModal" class="carousel slide" data-interval="false">
						  	<div class="carousel-inner">
						    	<!-- will be inserted by images -->
						  	</div>
						  	<a class="carousel-control-prev" href="#carouselModal" role="button" data-slide="prev">
						    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    	<span class="sr-only">Previous</span>
						  	</a>
						  	<a class="carousel-control-next" href="#carouselModal" role="button" data-slide="next">
						    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
						    	<span class="sr-only">Next</span>
						  	</a>
						</div>
	      			</div>
	      			<div class="col-md-3">
						<p id="carouselPageNumber"></p>
						<h3 id="carouseCaption"></h3>
	      			</div>
	      		</div>
	      </div>
	    </div>
	  </div>
	</div>

	<script type="text/javascript">

		

		$(function(){
			

			$('#carouselAwards').click(function(){
			
				$('#ssModal').modal('show');
				$('#ssModal .modal-title').text('Achievements & Awards');
				// $('#carouselDescription').text('Terhea Shoppe is a shopping web app just like Lazada, but Lazada is much more flexible and good than mine.');
				
				var images = $('#carouselAwards .carousel-inner').html(); //get the element images from carouselTerheamed in carousel-inner
				$('#carouselModal .carousel-inner').html(images);
				setCaption();

			});

			$('#carouselIntern').click(function(){
			
				$('#ssModal').modal('show');
				$('#ssModal .modal-title').text('On the Job Training');
				// $('#carouselDescription').text('Terhea Shoppe is a shopping web app just like Lazada, but Lazada is much more flexible and good than mine.');
				
				var images = $('#carouselIntern .carousel-inner').html(); //get the element images from carouselTerheamed in carousel-inner
				$('#carouselModal .carousel-inner').html(images);
				setCaption();

			});

			$('#carouselGrad').click(function(){
			
				$('#ssModal').modal('show');
				$('#ssModal .modal-title').text('Graduation & Recognition');
				// $('#carouselDescription').text('Terhea Shoppe is a shopping web app just like Lazada, but Lazada is much more flexible and good than mine.');
				
				var images = $('#carouselGrad .carousel-inner').html(); //get the element images from carouselTerheamed in carousel-inner
				$('#carouselModal .carousel-inner').html(images);
				setCaption();

			});

			$('#carouselOthers').click(function(){
			
				$('#ssModal').modal('show');
				$('#ssModal .modal-title').text('Others');
				// $('#carouselDescription').text('Terhea Shoppe is a shopping web app just like Lazada, but Lazada is much more flexible and good than mine.');
				
				var images = $('#carouselOthers .carousel-inner').html(); //get the element images from carouselTerheamed in carousel-inner
				$('#carouselModal .carousel-inner').html(images);
				setCaption();

			});


		});

	</script>

@endsection