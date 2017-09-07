<!--footer-->
<div class="footer-class">
    <div class="container">
                <p>CONTACT US</p>
                <p>Phone number: +380663550068</p>
                <div class="social">
                <ul class="social">
                    <li><a href="https://www.facebook.com/profile.php?id=100021547880453"><i class="facebook"> </i></a></li>
                    <li><a href="#"><i class="twitter"> </i></a></li>
                    <li><a href="#"><i class="gmail"> </i></a></li>
                </ul>
                <div>
    </div>
    <div>
        <p>© 2017 TestMag . All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a>
            and Sergeev M.V.</p>
        <p>Данный сайт является моим практическим обучением. С версткой еще нужно поработать. Серверная часть пока в приоритете.</p>
    </div>
</div>


        <script>
            $(document).ready(function () {
                $(".memenu").memenu();
            });
                //AJAX
                $(".item_add").click(function () {
                    var id = $(this).attr("data-id");
                    $.post("/cart/addAjax/"+id, {}, function (data) {
                        $(".simpleCart_quantity").html(data);
                    });
                    return false;
                });
                $(".memenu").memenu();
            });
        </script>
</body>
</html>
