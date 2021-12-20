<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 display-4">
                <h5> Hi, I am Rasyid Mishbahuddin</h5>
                <h1>Web Developer</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos magni laboriosam sunt dignissimos quae dolorum?</p>
                <a href="#" class=" btn tombol ">Click Me!</a>
            </div>
            <div class="col-lg-6">
                <img src="img/jumbo_img.png" class="jumbo-img" />
            </div>
        </div>
    </div>
</div>


<section>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="img/head.png" class="source" />
                </div>
                <div class="col-lg-6">
                    <h1>My Awesome Services</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque dolor natus, quod, perspiciatis, alias vel odit dolorum neque pariatur aspernatur necessitatibus. Ducimus cumque repellat commodi. Consequuntur libero sunt veniam officia provident temporibus mollitia, amet itaque, eveniet corporis voluptates doloremque blanditiis commodi cupiditate eius tenetur beatae. Sequi odit aliquid quaerat laudantium.</p>
                    <button href="#" class="btn tombol"><img href="img/vector.png" />You Can Acess My CV here</button>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="content">
        <div class="container ">
            <div class="row">
                <h2>Company Experience</h2>
            </div>
            <div class="wrapper">
                <div class="row justify-content-center">
                    <img src="img/smpn174.png" alt="smpn174" class="img-sqr">
                    <img src="img/yml.png" alt="smpn174" class="img-sqr">
                    <img src="img/glolingo.png" alt="smpn174" class="img-sqr">
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<section>
    <div class="content">
        <div class="container">
            <h2>Latest Project</h2>
            <div class="row-scroll">
                <div class="owl-carousel">
                    <div class="card">
                        <img src="https://picsum.photos/300/200">
                        <h5 class="card-text">Rating on Glolingo</h5>
                        <p>My team and I built a product to manage finances on a mobile</p>
                    </div>
                    <div class="card">
                        <img src="https://picsum.photos/300/200">
                        <h5 class="card-text">YML Company Profile</h5>
                        <p>My team and I built a product to manage finances on a mobile</p>
                    </div>
                    <div class="card">
                        <img src="https://picsum.photos/300/200">
                        <h5 class="card-text">DSS System SMPN 174 JKT</h5>
                        <p>my team and I built a product to manage finances on a mobile</p>
                    </div>
                    <div class="card">
                        <img src="https://picsum.photos/300/200">
                        <h5 class="card-text">Rating on Glolingo</h5>
                        <p>My team and I built a product to manage finances on a mobile</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section>
    <div class="content">
        <div class="container">
            <div class="row-title">
                <h2> Get In Touch </h2>
                <p>Interest on working together?<br />
                    Feel Free to contact me on any project or collaboration </p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="shape"><img src="img/jumbo_img.png" class="form-img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="form-sheet">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Name</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Email</label>
                                <input type="email" class="form-control" id="inputPassword4" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Subject</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Messages</label>
                            <textarea class="form-control" id="text-area" rows="7" placeholder="Messages"></textarea>
                        </div>
                        <button type="submit" class="btn tombol">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>




<?= $this->endsection(); ?>