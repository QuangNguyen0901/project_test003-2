<?php include('./includes/head.php'); ?>
<body>

<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<?php
echo getcwd() . "AAA";
?>
<?php
echo str_replace("\\","/",getcwd());
?>
<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

<div id="container">
    <?php include('./includes/header.php'); ?>
    <div id="content">
        <?php include('./includes/sidebar_a.php'); ?>
        <div id="main_content">
            <div id="filter_bar">
                <p>Chủ đề:</p>
                <form>
                    <select name="catalog">
                        <option value="Shopping">Shopping</option>
                        <option value="eating_drinking">Ẩm thực</option>
                        <option value="event_ticket">Vé sự kiện</option>
                        <option value="Other">Khác</option>
                    </select>
                </form>
                <p>Địa điểm:</p>
                <form>
                    <select name="add">
                        <option value="Hanoi">Hà Nội</option>
                        <option value="Hochiminh">Hồ Chí Minh</option>
                        <option value="Danang">Đà Nẵng</option>
                        <option value="Other">Khác</option>
                    </select>
                </form>
            </div><!--end div "filter_bar"-->
            <div id="news">
                <div class="news_record">
                    <div class="news_logo">
                        <img src="/images/news_logo/news_logo_0.jpg" alt="new logo 0"
                             style="width: 150px;height: 150px;">
                    </div><!--end div "news_logo"-->
                    <div class="news_content">
                        <h3 class="news_title">Thời trang GOSTO khuyến mãi mua 1 tặng 1 giày dép, túi xách</h3>

                        <p>KHUYẾN MÃI CUỐI MÙA – MUA 1 TẶNG 1 GIÀY DÉP GOSTO Cuối tuần này điều cần làm của các cô nàng
                            ưa
                            thích shopping chính là ghé qua hệ thống cửa hàng GOSTO vì chương trình khuyến mãi vô…</p>

                    </div><!--end div "news_content"-->
                    <div id="news_bottom_bar" class="clear_both">
                        <p>13/6/2016~ 15/8/2016</p>
                        <p>9 comments</p>
                    </div><!--end div "news_botton_bar"-->
                </div><!--end div "news_record"-->
            </div><!--end div "news"-->
            <div id="news">
                <div class="news_record">
                    <div class="news_logo">
                        <img src="/images/news_logo/news_logo_0.jpg" alt="new logo 0"
                             style="width: 150px;height: 150px;">
                    </div><!--end div "news_logo"-->
                    <div class="news_content">
                        <h3 class="news_title">Thời trang GOSTO khuyến mãi mua 1 tặng 1 giày dép, túi xách</h3>
                        <p>KHUYẾN MÃI CUỐI MÙA – MUA 1 TẶNG 1 GIÀY DÉP GOSTO Cuối tuần này điều cần làm của các cô nàng
                            ưa
                            thích shopping chính là ghé qua hệ thống cửa hàng GOSTO vì chương trình khuyến mãi vô…</p>
                    </div><!--end div "news_content"-->
                    <div id="news_bottom_bar" class="clear_both">
                        <p>13/6/2016~ 15/8/2016</p>
                        <p>9 comments</p>
                    </div><!--end div "news_botton_bar"-->
                </div><!--end div "news_record"-->
            </div><!--end div "news"-->
            <div id="news">
                <div class="news_record">
                    <div class="news_logo">
                        <img src="images/news_logo/news_logo_0.jpg" alt="new logo 0"
                             style="width: 150px;height: 150px;">
                    </div><!--end div "news_logo"-->
                    <div class="news_content">
                        <h3 class="news_title">Thời trang GOSTO khuyến mãi mua 1 tặng 1 giày dép, túi xách</h3>
                        <p>KHUYẾN MÃI CUỐI MÙA – MUA 1 TẶNG 1 GIÀY DÉP GOSTO Cuối tuần này điều cần làm của các cô nàng
                            ưa
                            thích shopping chính là ghé qua hệ thống cửa hàng GOSTO vì chương trình khuyến mãi vô…</p>
                    </div><!--end div "news_content"-->
                    <div id="news_bottom_bar" class="clear_both">
                        <p>13/6/2016~ 15/8/2016</p>
                        <p>9 comments</p>
                    </div><!--end div "news_botton_bar"-->
                </div><!--end div "news_record"-->
            </div><!--end div "news"-->
        </div><!--end div "main_content"-->
        <?php include('./includes/sidebar_b.php'); ?>
        <div class="clear_both"></div>
    </div><!--end div "content"-->
    <?php include('./includes/footer.php'); ?>
</div><!--end div "container"-->
</body>
</html>





