<?php
$pagename="cloud"; 
include('header.php'); 
?>
<!-- start of cloude_banner -->
<section class="cloude_banner py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 py-5">
                <h1><strong>Shared Hosting</strong></h1>
                <h1><strong>Built on the <span class="cloud">Cloud<span></strong></h1>
                <h3><i class="fa fa-bolt" aria-hidden="true"></i>&nbsp;Twice as fast</h3>
                <h3><i class="fa fa-level-up" aria-hidden="true"></i>&nbsp;Scales with your traffic</h3>
            </div>
            <div class="col-md-5">
                <div class="banner_img float-right">
                    <img src="images/cloud-servers.gif" class="img-fluid" alt="Responsive image">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cloud_pricing py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <p class="pemail"><span class="white-text">Starts at just</span><sup><span
                            class=WebRupee>₹</span></sup><span class="price">799.00</span><span
                        class="year">/month</span></p>
            </div>
            <div class="col-md-2">
                <a href="#Select_plans" class=" btn view_plans mt-2">View
                    Plans</a>
            </div>
        </div>
    </div>
</section>
<!-- start of cloude_banner -->

<!-- start of section cloud_hosting_mean -->
<section class="cloud_hosting_mean py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center wcloudtext my-5">What Does Cloud Hosting mean for your Website?</h2>
                <h3 class="text-center cloudtext mb-5">Next-level Performance and Reliability with Simplified Management
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="text-center mb-3">
                    <img src="images/cloudsites1.png" width="60" alt="">
                </div>
                <h4 class="text-center">Blazing-Fast Load Time</h4>
                <p class="text-center">With top-of-the-line hardware, Varnish caching - which stores your site’s most
                    used pages, and a globally distributed CDN, your site is served upto 2x faster.</p>
            </div>
            <div class="col-md-4">
                <div class="text-center mb-3">
                    <img src="images/cloudsites5.png" width="70" alt="">
                </div>
                <h4 class="text-center">Instant Scaling</h4>
                <p class="text-center">No need to move your hosting as your traffic grows. Ramp up your resources at the
                    click of a button - instantly add RAM and CPU without a reboot.</p>
            </div>
            <div class="col-md-4">
                <div class="text-center mb-3">
                    <img src="images/cloudsites3.png" width="60" alt="">
                </div>
                <h4 class="text-center">cPanel for Management</h4>
                <p class="text-center">Just like Shared Hosting - manage your website and associated services like Email
                    and sub-domains with the simplicity and ease of cPanel.
                </p>
            </div>
            <div class="col-md-4">
                <div class="text-center mb-3">
                    <img src="images/cloudsites6.png" width="70" alt="">
                </div>
                <h4 class="text-center">Your Data - Safeguarded</h4>
                <p class="text-center">Our industry-leading Ceph-based storage system stores your website data across 3
                    distinct devices to ensure redundancy and safety.

                </p>
            </div>
            <div class="col-md-4">
                <div class="text-center mb-3">
                    <img src="images/cloudsites4.png" width="70" alt="">
                </div>
                <h4 class="text-center">Automatic Failover</h4>
                <p class="text-center">If we detect a hardware issue, we automatically move your site to another server,
                    ensuring that your site is always up and you never lose traffic.</p>
            </div>
            <div class="col-md-4">
                <div class="text-center mb-3">
                    <img src="images/cloudsites2.png" width="60" alt="">
                </div>
                <h4 class="text-center">Resource Management</h4>
                <p class="text-center">An intuitive dashboard helps you keep an eye on the resources your website is
                    using and its performance. You can ramp up whenever required.</p>
            </div>
        </div>


</section>
<!-- end of section cloud_hosting_mean -->



<!-- start of section Select a certificate -->
<section class="Select_certificate" id="Select_plans">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mb-4">
                <h2 class="text-center my-5">Select a Plan that works for you </h2>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="bg-dark text-center p-2 text-light">
                                <h5>Personal Cloud</h5>
                                <hr class="new">
                                <h4 class="my-5 text-info"><strong>₹ 1,000.00 /mo</h4></strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text text-center">2 CPU cores<br>Unmetered Disk Space<br>2 GB
                                    RAM<br>Unmetered Bandwidth<br>Host 1 Website<br>Unlimited Email Accounts</p>
                                <hr>
                                <div class="form-group">
                                    <select class="form-control select_box" id="exampleFormControlSelect1">
                                        <option>1 Month - Rs. 1,000.00/mo</option>
                                        <option>6 Month - Rs. 1,000.00/mo</option>
                                        <option>1 Year - Rs. 1,000.00/mo</option>
                                        <option>2 Year - Rs. 1,000.00/mo</option>
                                    </select>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-success" onclick="showModal()" value="Open Model">Buy
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="bg-dark text-center p-2 text-light">
                                <h5>Business Cloud</h5>
                                <hr class="new">
                                <h4 class="my-5 text-info"><strong>₹ 990.00 /mo</h4></strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text text-center">4 CPU cores<br>Unmetered Disk Space<br>4 GB
                                    RAM<br>Unmetered Bandwidth<br>Host Unlimited Websites<br>Unlimited Email Accounts
                                </p>
                                <hr>
                                <div class="form-group">
                                    <select class="form-control select_box" id="exampleFormControlSelect1">
                                        <option>2 Year - Rs. 990.00/mo</option>
                                        <option>1 Year - Rs. 1,080.00/mo</option>
                                        <option>6 Month - Rs. 1,080.00/mo</option>
                                        <option>1 Month - Rs. 1,000.00/mo</option>
                                    </select>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-success" onclick="showModal()" value="Open Model"
                                        data-toggle="modal" data-target=".bd-example-modal-lg">Buy
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="bg-dark text-center p-2 text-light">
                                <h5>Pro Cloud</h5>
                                <hr class="new">
                                <h4 class="my-5 text-info"><strong>₹ 1,440.00 /mo</h4></strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text text-center">6 CPU cores<br>Unmetered Disk Space<br>6 GB
                                    RAM<br>Unmetered Bandwidth<br>Host Unlimited Websites<br>Unlimited Email Accounts
                                </p>
                                <hr>
                                <div class="form-group">
                                    <select class="form-control select_box" id="exampleFormControlSelect1">
                                        <option>2 Year - Rs. 1,440.00/mo</option>
                                        <option>1 Year - Rs. 1,530.00/mo</option>
                                        <option>6 Month - Rs. 1,530.00/mo</option>
                                        <option>1 Month - Rs. 1,530.00/mo</option>
                                    </select>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-success" onclick="showModal()" value="Open Model">Buy
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- start of model -->
            <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Specify a domain name for your order</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <div class="form-check form-check-inline ml-3">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">I already have a Domain
                                            Name</label>
                                    </div>
                                    <div class="form-check form-check-inline ml-3">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">I want to buy a new Domain
                                            Name</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="recipient-name"
                                            placeholder="Enter your Domin Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col">
                                        <a href="#" class="btn btn-success">Continue to Checkout</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of model -->

        </div>

    </div>
</section>
<!-- end of section Select a certificate -->

<!-- start of cloud_faq section -->
<section class="cloud_faq">
    <div class="container my-5">
        <h2 class="text-center mb-4">FAQs</h2>
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            <strong>What is Cloud Hosting?</strong>
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        Cloud hosting is the latest form of hosting that has become extremely popular over the past few
                        years. The main concept of cloud hosting is "Divide and Rule" – the resources required for
                        maintaining your website are spread across a cluster of servers that work together, termed as
                        "the cloud". This greatly reduces chances of any downtimes in case of a server malfunction.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            <strong>What is the difference between Cloud Hosting and Shared Hosting?</strong>
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        When a website is hosted on shared hosting, the website is placed on the same server as many
                        other sites, ranging from a few to hundreds. Typically in this setup, all domains share
                        resources, such as RAM and CPU from the same server. Cloud hosting, on the other hand, offers
                        nearly unlimited ability to handle high traffic spikes. On Cloud, your website is hosted not
                        only on one but on several servers connected to work as one. Your websites don’t depend on only
                        one Server– even if one server is inaccessible, the Data is retrieved and processed by the other
                        available servers with no downtime.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn collapsed" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            <strong>What is Varnish Cache?</strong>
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        Varnish Cache is a powerful web application accelerator that can speed up a website by up to
                        1000 percent. Varnish is typically used for content heavy dynamic websites. It is used by
                        high-profile, high-traffic websites including Wikipedia, online newspaper sites such as The New
                        York Times, The Guardian, The Hindu, Corriere della Sera, social media and content sites such as
                        Facebook, Twitter, Vimeo, and Tumblr. Of the Top 10K sites in the web, around a tenth use this
                        software.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn collapsed" data-toggle="collapse" data-target="#collapseFour"
                            aria-expanded="false" aria-controls="collapseFour">
                            <strong>How Reliable is your Cloud Hosting?</strong>
                        </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        Our cloud hosting offers high reliability. Cloud Sites automatically distributes three mirrored
                        copies of your data across multiple devices to ensure safety and protection. The website is
                        hosted on a virtual partition which draws its resources, such as disk space, from an extensive
                        network of underlying physical servers.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                        <button class="btn collapsed" data-toggle="collapse" data-target="#collapseFive"
                            aria-expanded="false" aria-controls="collapseFive">
                            <strong>What is the storage architecture used by your Cloud Hosting?</strong>
                        </button>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        We use Ceph Storage, which gives 3N level of redundancy. In computing, Ceph is completely
                        distributed without a single point of failure, scalable to the exabyte level, and freely
                        available. Ceph replicates data and makes it fault-tolerant, requiring no specific hardware
                        support. As a result of its design, the system is both self-healing and self-managing, aiming to
                        minimize administration time and other costs.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSix">
                    <h5 class="mb-0">
                        <button class="btn collapsed" data-toggle="collapse" data-target="#collapseSix"
                            aria-expanded="false" aria-controls="collapseSix">
                            <strong>What is the limit for additional CPU and RAM?</strong>
                        </button>
                    </h5>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                    <div class="card-body">
                        Upto 8 GB RAM and 8 cores can be added with any Cloud Hosting Plan.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingSeven">
                    <h5 class="mb-0">
                        <button class="btn collapsed" data-toggle="collapse" data-target="#collapseSeven"
                            aria-expanded="false" aria-controls="collapseSeven">
                            <strong>Is a Dedicated IP available?</strong>
                        </button>
                    </h5>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                    <div class="card-body">
                        For Cloud Hosting (US) packages, you can purchase a Dedicated IP for an additional cost by
                        raising a support ticket. Unfortunately, for Cloud Hosting (IN) packages, we do not provide a
                        Dedicated IP
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingEight">
                    <h5 class="mb-0">
                        <button class="btn collapsed" data-toggle="collapse" data-target="#collapseEight"
                            aria-expanded="false" aria-controls="collapseEight">
                            <strong>How do I install an SSL certificate on my Website?</strong>
                        </button>
                    </h5>
                </div>
                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                    <div class="card-body">
                        To install SSL on your cloud server, you need to get in touch with our support team and we will
                        get it installed for you.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingNine">
                    <h5 class="mb-0">
                        <button class="btn collapsed" data-toggle="collapse" data-target="#collapseNine"
                            aria-expanded="false" aria-controls="collapseNine">
                            <strong>Do you provide any one click install scripts along with Cloud Hosting?</strong>
                        </button>
                    </h5>
                </div>
                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                    <div class="card-body">
                        Yes - we provide 'Quick Install' which is accessible from your cPanel. Quick Install allows you
                        to plug and play various scripts like Wordpress, Drupal, Joomla, shopping carts like Zencart,
                        Magento and various other billing, social networking, support and chat modules.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTen">
                    <h5 class="mb-0">
                        <button class="btn collapsed" data-toggle="collapse" data-target="#collapseTen"
                            aria-expanded="false" aria-controls="collapseTen">
                            <strong>Is Upgrade/Downgrade possible?</strong>
                        </button>
                    </h5>
                </div>
                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                    <div class="card-body">
                        No, an upgrade or downgrade is not possible between the plans. However, you can purchase
                        additional RAM and CPU cores as per your requirement.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingElaven">
                    <h5 class="mb-0">
                        <button class="btn collapsed" data-toggle="collapse" data-target="#collapseElaven"
                            aria-expanded="false" aria-controls="collapseElaven">
                            <strong>What is your backup policy?</strong>
                        </button>
                    </h5>
                </div>
                <div id="collapseElaven" class="collapse" aria-labelledby="headingElaven" data-parent="#accordion">
                    <div class="card-body">
                        You are responsible for your backups and web content. We create our own weekly backups , and can
                        restore your web, email and database content from those per your request. However, this is NOT a
                        procedure you should rely on to keep copies of your content safe; we recommend you make your own
                        backups. You can take a backup from your cPanel or better, use a remote backup solution.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTowvalve">
                    <h5 class="mb-0">
                        <button class="btn collapsed" data-toggle="collapse" data-target="#collapseTwovelve"
                            aria-expanded="false" aria-controls="collapseTwovelve">
                            <strong>Is there a Money Back Guarantee?</strong>
                        </button>
                    </h5>
                </div>
                <div id="collapseTwovelve" class="collapse" aria-labelledby="headingTowvalve" data-parent="#accordion">
                    <div class="card-body">
                        Yes, we do have a 30 day Money Back Guarantee associated with Cloud Hosting.
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end of cloud_faq section -->

<?php include('footer.php'); ?>
<script>
function showModal() {
    $('#myModal').modal('show');
}
</script>