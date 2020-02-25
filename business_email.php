<?php
$pagename="email"; 
include('header.php'); 
?>

<!-- start of emial_banner -->
<section class="email_banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <h1 class="text-center"><strong>Simple, Powerful Email for Small Businesses</strong></h1>
                <p class="text-center">Give your business a professional makeover with <b>email@yourbrand.com</b></p>
                <div class="text-center">
                    <img src="images/business_email_banner.png" class="img-fluid mt-4" alt="Responsive image">
                </div>
            </div>
        </div>
    </div>
    <div class="text-block">
        <div class="email_pricing">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex mt-2 p-2">
                            <ul class="list-inline mx-auto justify-content-center">
                                <li class="list-inline-item"><a href="" class="nav_price1 mr-3"> 5GB Storage Per
                                        Account</a></li>
                                <li class="list-inline-item"><a href="" class="nav_price2 mr-3"> Inbuilt Virus
                                        Protection</a></li>
                                <li class="list-inline-item"><a href="" class="nav_price3"> Works on Mobile and
                                        Tablets</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="email_pricing_month p-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <p class="pemail"><span class="white-text">Starts at just</span><sup><span
                                    class=WebRupee>₹</span></sup><span class="price">40.00</span><span
                                class="year">/account/month</span></p>
                    </div>
                    <div class="col-md-2">
                        <a href="#" target="_blank" class="btn view_plans mt-2">Preview</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- start of emial_banner -->


<!-- start of amazing_about -->
<section class="amazing_about my-5">
    <div class="container">
        <h2 class="text-center mb-4">What's amazing about Business Email</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="text-center mb-3">
                    <img src="images/amazing1.png" width="70" alt="">
                </div>
                <h4 class="text-center">Intuitive and Responsive Design</h4>
                <p class="text-center">Beautifully designed and delivered with the power of OpenXchange. You can also
                    access your email on your smartphone or tablet.</p>
            </div>
            <div class="col-md-4">
                <div class="text-center mb-3">
                    <img src="images/amazing2.png" width="70" alt="">
                </div>
                <h4 class="text-center">Inbuilt Virus Protection</h4>
                <p class="text-center">Our advanced anti-virus technology secured your inbox and ensures that you are
                    protected from downloading malware and viruses.</p>
            </div>
            <div class="col-md-4">
                <div class="text-center mb-3">
                    <img src="images/amazing3.png" width="70" alt="">
                </div>
                <h4 class="text-center">5GB Storage Plus Backup</h4>
                <p class="text-center">In addition to 5GB mail storage, your emails are backed up in our
                    state-of-the-art infrastructure so that you never lose important mails.
                </p>
            </div>
            <div class="col-md-4">
                <div class="text-center mb-3">
                    <img src="images/amazing4.png" width="70" alt="">
                </div>
                <h4 class="text-center">100% Uptime and Security</h4>
                <p class="text-center">Our high-end NetApp mail storage guarantees zero data loss and redundancy, along
                    with 100% network uptime.</p>
            </div>
            <div class="col-md-4">
                <div class="text-center mb-3">
                    <img src="images/amazing5.png" width="70" alt="">
                </div>
                <h4 class="text-center">Calendars, Contacts and Tasks</h4>
                <p class="text-center">Manage contacts, create to-do lists and keep track of all your meetings in one
                    place with OpenXchange's productivity tools.</p>
            </div>
            <div class="col-md-4">
                <div class="text-center mb-3">
                    <img src="images/amazing6.png" width="70" alt="">
                </div>
                <h4 class="text-center">Social Media in your Inbox</h4>
                <p class="text-center">Now view your Twitter, Google+ feeds in your Inbox itself. OpenXchange brings all
                    your social media under one roof.</p>
            </div>
        </div>
    </div>
</section>

<!-- end of amazing_about -->

<!-- start of email_input -->
<section class="email_input">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="text-center get_started my-5">Get started with just the number of email accounts you need</h2>
                <form>
                    <div class="form-row align-items-center p-5 border">
                        <div class="col-md-3 mr-3">
                            <label for="inlineFormInput">NO.OF ACCOUNTS</label>
                            <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="No. of Account">
                        </div>
                        <div class="col-auto mr-3">
                            <label for="inlineFormInput">DURATION</label>
                            <select id="inputState" class="form-control mb-2">
                                <option selected>1 Month(s) - Rs.60.00/Acc/Mo</option>
                                <option>12 Month(s) - Rs.60.00/Acc/Mo</option>
                            </select>
                        </div>
                        <div class="col-md-2 mr-5">
                            <label for="inlineFormInput">TOTAL</label>
                            <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Rs.12,000.00" readonly>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="btn btn-success mt-3" onclick="showModal()" value="Open Model">Buy
                                Now</a>
                        </div>
                    </div>
                </form>
                <p class="my-3 text-center">Need more space and advanced features? <a
                        href="/web-hosting/enterprise-email-hosting.php">Try Enterprise Email instead</a></p>
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
                                        <label class="form-check-label" for="inlineRadio2">I want to buy a new
                                            Domain Name</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="Enter your Domin Name"
                                            id="recipient-name">
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

<!-- end of email_input -->



<!-- start of faq section -->
<div class="container my-5">
    <h2 class="text-center mb-4">FAQs</h2>
    <div class="row">
        <div class="col-md-12 mt-4">
            <h6><strong>Q. How will purchasing Business Email benefit me?</strong></h6>
            <p class="p_faq">As opposed to free email solutions, you can give your business a more professional image
                with Business Email by getting email that is branded with your company's domain name (ex.
                sales@mybrand.com). In addition, you also benefit from our advanced email technology that gives you the
                least latency and industry-best uptime, scalability and reliability. An email service being served out
                of the cloud also means no IT, hardware, software, bandwidth or people costs. And the best part is that
                you can add email accounts as and when your team grows.</p>
        </div>
        <div class="col-md-12 mt-4">
            <h6><strong>Q. Which Email Clients and protocols are supported?</strong></h6>
            <p class="p_faq">You can send and receive emails using any desktop-based email client such as Microsoft
                Outlook, Outlook Express, Mozilla Thunderbird, Eudora, Entourage 2004, Windows Mail, etc. We also have a
                guide on how you can configure different email clients to send/receive emails. The enterprise email
                product supports the POP, IMAP and MAPI protocols.</p>
        </div>
        <div class="col-md-12 mt-4">
            <h6><strong>Q. How do I use my Webmail Interface?</strong></h6>
            <p class="p_faq">To access your Webmail Interface, you can use the white-labelled URL:
                http://webmail.yourdomainname.com. Once on the log in page, you would need to login with your email
                address and the corresponding password.</p>
        </div>
        <div class="col-md-12 mt-4">
            <h6><strong>Q. Which mobile phones can I access my mail from?</strong></h6>
            <p class="p_faq">Your email can be accessed using any Smartphone or Tablet. Our fluidic webmail, built on
                HTML 5 & Javascript, is compatible on all major Operating systems such as iOS, Android, Windows Mobile,
                Symbian and Blackberry.</p>
        </div>
        <div class="col-md-12 mt-4">
            <h6><strong>Q. What is the space provided per Email Account?</strong></h6>
            <p class="p_faq">Each email account comes with 5 GB space dedicated to emails.</p>
        </div>
        <div class="col-md-12 mt-4">
            <h6><strong>Q. What ports do I need to use for Email Hosting?</strong></h6>
            <p class="p_faq">Usually, the port used for the Outgoing Mail Server/SMTP Service is 25. However, there
                might be a situation where your ISP might be blocking the use of port 25 for SMTP service. To circumvent
                this you can use an alternate port 587 for sending mails.</p>
        </div>
        <div class="col-md-12 mt-4">
            <h6><strong>Q. Can I create mailing lists?</strong></h6>
            <p class="p_faq">Yes, you can create mailing lists and add/delete users, select a moderator, restrict people
                from joining a list or even ban users from a list. More information on this can be found in our
                knowledgebase.</p>
        </div>
        <div class="col-md-12 mt-4">
            <h6><strong>Q. What is your SPAM policy?</strong></h6>
            <p class="p_faq">We take a zero tolerance stance against sending of unsolicited email, bulk emailing, and
                spam. "Safe lists", purchased lists, and selling of lists will be treated as spam. Any user who sends
                out spam will have their account terminated with or without notice.</p>
        </div>
        <div class="col-md-12 mt-4">
            <h6><strong>Q. Can I use Auto Responders?</strong></h6>
            <p class="p_faq">Yes, you can. An auto-responder is a program that, when setup for your email address, sends
                out an automatic, pre-set reply to an email, as soon as it is received at this email address. You can
                find out more about setting up an auto-responder from our knowledge base.</p>
        </div>
    </div>
</div>
<!-- end of faq section -->



<?php include('footer.php'); ?>

<script>
function showModal() {
    $('#myModal').modal('show');
}
</script>