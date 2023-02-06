
  <div class="background">
    <section class="contact_top_sec">
        <div class="contact_top">
            <div class="container">
                <h1 class="contact_header">Get in touch with our team</h1>
                <p class="contact_text">Leave your information below and our team will be in touch!</p>
            </div>
            <div class="contact_form">
              <div class="container">
                <form>
                    <div class="input-field">
                        <input type="text" id="fname" required />
                        <label for="fname">First name</label>
                    </div>
                    <div class="input-field">
                        <input type="text" id="lname" required />
                        <label for="lname">Last name</label>
                    </div>
                    <div class="input-field">
                        <input type="text" id="email" required />
                        <label for="email">Email address</label>
                    </div>
                    <div class="input-field">
                        <input type="text" id="cname" required />
                        <label for="cname">Your company name</label>
                    </div>
                    <div class="input-field">
                        <textarea rows="5" id="message" name="text" required></textarea>
                        <label for="message">Type your message here...</label>
                    </div>
                    <button class="btn submit_btn" data-toggle="modal" href="#ignismyModal">Submit</button>
                    <div class="modal fade" id="ignismyModal" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="thank-you-pop">
                                        <h1>Your message has been submitted!</h1>
                                        <p>Thank you for contacting us. A representative from our team will be in
                                            touch with you.</p>
                                        <button type="button" class="btn okay" data-dismiss="modal"
                                            aria-label=""><span>OKAY</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
              </div>
            </div>
        </div>
    </section>
  </div>