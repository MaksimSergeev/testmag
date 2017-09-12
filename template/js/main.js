$(document).ready(function () {
            
            // MeMenu
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
            
            // FlexSlider
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
                });
            });
        });