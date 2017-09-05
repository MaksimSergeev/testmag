<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="contact">

    <div class="container">
        <h1>Contact</h1>
        <div class="contact-form">

            <div class="col-md-offset-3 col-md-6 contact-grid">
                <form>
                    <input type="text" value="Name" onfocus="this.value='';"
                           onblur="if (this.value == '') {this.value ='Name';}">

                    <input type="text" value="Email" onfocus="this.value='';"
                           onblur="if (this.value == '') {this.value ='Email';}">
                    <input type="text" value="Subject" onfocus="this.value='';"
                           onblur="if (this.value == '') {this.value ='Subject';}">

                    <textarea cols="77" rows="6" value=" " onfocus="this.value='';"
                              onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
                    <div class="send">
                        <input type="submit" class="pull-right" value="Send">
                    </div>
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>