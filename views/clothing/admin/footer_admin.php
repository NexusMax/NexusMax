</div>
<script src="/views/clothing/js/vendor/jquery-1.12.0.min.js"></script>
<!-- Bootstrap framework js -->
<script src="/views/clothing/js/bootstrap.min.js"></script>
<!-- Slider js -->
<script src="/views/clothing/js/slider/jquery.nivo.slider.pack.js"></script>
<script src="/views/clothing/js/slider/nivo-active.js"></script>
<!-- counterUp-->
<script src="/views/clothing/js/jquery.countdown.min.js"></script>
<!-- All js plugins included in this file. -->
<script src="/views/clothing/js/plugins.js"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="/views/clothing/js/main.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $(".add-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addajax/" + id , {}, function (data) {
                $("#cart-count").html(data);
                $('input[name="qtybutton"]').val(data);
            });
            return false;
        });
        $(".inc").click(function () {
            var id = $(this).prev().attr("data-id");
            $.post("/cart/inc/" + id, {}, function (data) {
                //   $("#cart-count").html(data);
                id.val(data);
            });
            return false;
        });
    });
</script>

</body>

</html>