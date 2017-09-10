<!--footer-->
<div class="footer-class">
    <div class="container">

        <div class="col-md-12 social">
            <ul class="social">
                <li><p>Contacts: Tel.: +380663550068</p></li>
                <li><a href="https://www.facebook.com/profile.php?id=100021547880453"><i class="facebook"> </i></a></li>
                <li><a href="#"><i class="twitter"> </i></a></li>
                <li><a href="#"><i class="gmail"> </i></a></li>
            </ul>
        </div>
        <div class="col-md-12">
            <p>© 2017 TestMag . All Rights Reserved | Design by
                <a href="http://w3layouts.com/" target="_blank">W3layouts</a>
                and Sergeev M.V.
            </p>
        </div>
    </div>
</div>
    <script>
        $(document).ready(function () {
            $(".memenu").memenu();

            // AJAX add
            $(".item_add").click(function () {
                var id = $(this).attr("data-id");
                $.post("/cart/add/" + id, {}, function (data) {
                    $(".cart-count").html(data);
                });
                return false;
            });
            // AJAX delete
            $(".close1").click(function(){
                var b_id = $(this).attr("b-id");
                $.ajax({
                        url:"/cart/delete/" + b_id,
                        method:"POST",
                        success:function(data)
                        {
                            var obj = jQuery.parseJSON(data);
                            $(".cart-count").html(obj.countItems);
                            $(".t-price").html(obj.totalPrice);
                            $(".cart-header#"+b_id).fadeOut('slow', function () {
                                $(".cart-header#"+b_id).remove();
                            });
                        }
                    });
                return false;
            });
        });
    </script>
    </body>
    </html>

