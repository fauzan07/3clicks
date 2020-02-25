<?php
$pagename="contact"; 
include('header.php'); 
?>

<!-- start of contact_banner -->
<section class="contact_banner">
    <div class="container p-5">
        <div class="row">
            <div class="col-md-5 py-2">
                <h2 class="t_contact"><strong>Getting in touch is easy!</strong></h2>
                <p class="p_contact">We are here when you need us.
                    Just Call us or Send us a mail and we will get back to you.</p>
            </div>
        </div>
    </div>
</section>
<!-- end of contact_banner -->

<!-- start of contact_form -->
<main class="page-content my-4">
    <section id="contact-section" class="container">
        <div class="row">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Get in Touch</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12 border-bottom">
                <h1>Get in <span class="text-success">Touch</span></h1>
                <p>Our suite of web security products offer ssl certificates, virus protection, anti-malware, data loss
                    prevention, and hacker protection.</p>
            </div>
            <div class="w-100"></div>
            <div class="col-md-8  my-3">
                <form action="form-action-contact.php" method="post">
                    <div class="form-group"><input type="text" class="form-control" maxlength="40" name="fname"
                            id="fname" placeholder="Your Name" required></div>
                    <div class="form-group"><input type="email" class="form-control" name="email" id="email"
                            placeholder="Your Email Address" required></div>
                    <div class="form-group"><input type="text" class="form-control" maxlength="10"
                            pattern="[789][0-9]{9}" name="mobile" id="mobile" placeholder="Your Mobile Number" required>
                    </div>
                    <div class="form-group"><input type="text" class="form-control" maxlength="50" name="city" id="city"
                            placeholder="Your City"></div>
                    <div class="form-group">
                        <select class="form-control" name="services" required>
                            <option value='' selected disabled>Select Service</option>
                            <option value="Microsite">Cloud Hosting</option>
                            <option value="Business Email">Business Email Hosting</option>
                            <option value="Web Security">Web Security</option>
                        </select>
                    </div>
                    <div class="form-group"><textarea class="form-control" placeholder="Your Message"
                            id="exampleFormControlTextarea1" rows="3" maxlength="90" name="message"></textarea></div>
                    <p>Verify you're a human - Please enter the following code in the box below- 7102</p>
                    <div class="form-group"><input type="text" class="form-control" name="code" placeholder="" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
            <!--end service col-->
            <div class="col-md-6 col-lg-4 my-3">
                <h3>Our <span>Address</span></h3>
                <ul class="fa-ul">
                    <li class="mb-4"><span class="fa-li"><i class="fa fa-building"></i></span> 1/C, 1st Floor, Naaz
                        Cinema Building, DB Marg, Grant Road East, Mumbai, Maharashtra. Pin Code - 400 004</li>
                    <li class="mb-4"><span class="fa-li"><i class="fa fa-phone-square"></i></span> +91 – 22-4003 2965
                    </li>
                    <li class="mb-4"><span class="fa-li"><i class="fa fa-envelope"></i></span> info@wittyweb.in</li>
                    <li><span class="fa-li"><i class="fa fa-map-marker"></i></span> <a
                            href="https://goo.gl/maps/2EEXB8szSC83ofCW7" target="_blank" class="text-success">Get
                            Directions</a></li>
                </ul>
            </div>
            <!--end service col-->
        </div>
        <!--end row-->
    </section>
</main>
<!-- end of contact_form -->


<?php include('footer.php'); ?>