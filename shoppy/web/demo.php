

<?Php
require "upper.php";
?>
            <!-- /script-for sticky-nav -->
            <!--inner block start here-->
<div class="inner-block">
    <div class="blank">
        <h2>product upload</h2>
        <div class="blankpage-main">
            <p> </p>
            <form  action="product.php" method="post" id="signUP_form" novalidate  enctype="multipart/form-data">
                <input type="text" name="prod_name" placeholder="Product name" id=""><br><br>
                <input type="text" name="prod_price" placeholder="Product price "  id=""><br><br>
                <input type="text" name="prod_qty" class="" placeholder="Product Quantity" id=""><br><br>
                <input type="file" name="prod_img[]" class="" placeholder="Product image" id="" multiple><br>
                <select name="prod_cate" >
                    <option value="">Select Category</option>
                    <option value="Gents_cloths">Gents cloths</option>
                    <option value="Ladies_cloths">Ladies cloths</option>
                    <option value="Gents_shoes">Gents shoes</option>
                    <option value="ladies_cloths">ladies cloths</option>

                </select>
                <br><br>
                <textarea cols="45" rows="10" name="prod_desp"></textarea><br>
                <input type="submit" name="upload" value="upload" id="">
            </form>


        </div>
    </div>
</div>
            <!--inner block end here-->
            <!--copy rights start here-->
<div class="copyrights">
    <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>
            <!--COPY rights end here-->
        </div></div>
<?php
require "side.php";
?>
<!-- mother grid end here-->
</body>
</html>