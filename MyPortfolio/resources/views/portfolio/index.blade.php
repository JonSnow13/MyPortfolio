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

        <div class="text-center">
            <p>A graduate of Bachelor of Science in information Technology at <b>DMC College Foundation, a De La Salle</b> supervised school in Dipolog City, Philippines 7100.</p>
            <p>A passionate web developer with specific awards in the field of Information Technology from his school.</p>
        </div>
        <div class="text-center">
        	<h6>
        		<b>Objectives</b> 
        	</h6>
        	<p>To be a skilled and well-experienced <b>Information Technology Expert</b> with emphasis on programming</p>
        	<p>To be an IT professional specifically as a web developer and software developer.</p>
        	<p>To be in any leadership related work that requires computer skills, promotes creativity and allows personal development.</p>
        </div>

        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="#album" role="tab" data-toggle="tab">
                    <i class="material-icons">camera</i> Album
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="tab-content tab-space">
			<div class="tab-pane active text-center gallery" id="album">
                <div class="row">
					<div class="col-md-6 ml-auto">
						<img src="assets/images/img1.jpg" class="rounded" />
						<img src="assets/images/img2.jpg" class="rounded" />
					</div>
					<div class="col-md-6 ml-auto">
						<img src="assets/images/img3.jpg" class="rounded" />
						<img src="assets/images/img4.jpg" class="rounded" />
					</div>
                </div>
                <div class="row">
                	<div class="col-md-6 ml-auto">
						<img src="assets/images/img5.jpg" class="rounded" />
					</div>
					<div class="col-md-6 ml-auto">
						<img src="assets/images/img6.jpg" class="rounded" />
					</div>
					<div class="col-md-6 ml-auto mr-auto">
						<img src="assets/images/img7.jpg" class="rounded" />
					</div>
                </div>
            </div>

        </div>
      </div>
    </div>

@endsection