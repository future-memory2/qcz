<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">
    <title>兑换商城</title>
    <meta content="telephone=no" name="format-detection">
    <script>
        // mzbbsClient.needWait();
    </script>

    <link rel="stylesheet" href="../../src/static_new/css/common.css">
    <link rel="stylesheet" href="../../src/static_new/css/thread/swiper.min.css">
    <link rel="stylesheet" href="../../src/static_new/css/shop/shop-index.css">

</head>
<body>
    <div class="container" id="container">
        <div id="bannerWrap">
            <swipe-banner :banner-data="bannerData"></swipe-banner>
        </div>
        <div class="fun-link">
            <a href="/index.php?mod=shop&action=mycoin" class="fun-link-i my-coin"><i></i>我的煤球</a>
            <a href="/index.php?mod=shop&action=myorders" class="fun-link-i record"><i></i>兑换记录</a>
        </div>
        <div id="goodsList">
            <goods-list :list-data="listData" :has-more="hasMore"></goods-list>
        </div>
    </div>

    <script type="text/template" id="swipeBannerTemplate">
        <div class="banner swiper-container" id="banner">
            <ul class="swiper-wrapper">
                <li v-for="item in bannerData" class="swiper-slide"><a href="{{item.url}}"><img :src="item.pic" alt=""></a></li>
            </ul>
            <div class="swiper-pagination"></div>
        </div>
    </script>

    <script type="text/template" id="goodsListTemplate">
        <ul class="list clearfix">
            <li v-for="item in listData" class="goods">
                <a href="/index.php?mod=shop&action=view&id={{item.id}}">
                    <div class="goods-pic"><img :src="item.cover_pic" alt=""></div>
                    <div class="goods-text">
                        <h2 class="goods-name">{{item.name}}</h2>
                        <p class="goods-price"><span>{{item.price}}</span> 煤球</p>
                    </div>
                    <span v-if="item.extraInfo" class="goods-extra goods-extra--{{item.extraInfo.type}}">{{item.extraInfo.txt}}</span>
                </a>
            </li>
        </ul>
        <div class="load-more">{{hasMore?'加载更多..':'没有更多数据..'}}</div>
    </script>

    <script>
        var api_url = '/index.php';
        var promote_data = JSON.parse('<?php echo json_encode($promote_data); ?>');
        var uid = parseInt("<?php echo isset($member['uid']) ? intval($member['uid']) : 0; ?>");
    </script>

    <!-- build:js ../src/static_new/js/vendor.js -->
    <script src="../../src/static_new/js/lib/underscore-min.js"></script>
    <script src="../../src/static_new/js/lib/zepto.min.js"></script>
    <script src="../../src/static_new/js/lib/vue.js"></script>
    <!-- endbuild -->

    <script src="../../src/static_new/js/lib/swiper.min.js"></script>
    <script src="../../src/static_new/js/shop/shop-index.js"></script>
</body>
</html>