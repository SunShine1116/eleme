<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">
    <title>输入提示后查询</title>
    <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css"/>
    <script type="text/javascript" src="http://webapi.amap.com/maps?v=1.4.0&key=c0090976e9747905e3a3b4d39235e17b&plugin=AMap.Autocomplete,AMap.PlaceSearch"></script>
    <script type="text/javascript" src="http://cache.amap.com/lbs/static/addToolbar.js"></script>
</head>
<body>
<div id="container"></div>
<div id="myPageTop">
    <table style="width: 500;height: 500">
        <tr>
            <td>
                <label >请输入关键字：</label>
            </td>
        </tr>
        <tr>
            <td>
                <input id="tipinput" />
            </td>
        </tr>
    </table>
</div>
<script type="text/javascript">
    //地图加载
    var map = new AMap.Map("container", {
        resizeEnable: true
    });
    //输入提示
    var autoOptions = {
        input: "tipinput"
    };

    var auto = new AMap.Autocomplete(autoOptions);
    var placeSearch = new AMap.PlaceSearch({
        map: map
    });  //构造地点查询类
    AMap.event.addListener(auto, "select", select);//注册监听，当选中某条记录时会触发
    function select(e) {
        // alert(e.poi.name);
        placeSearch.setCity(e.poi.adcode);
        placeSearch.search(e.poi.name);  //关键字查询查询
        window.location = '/home/doCity?cityname='+e.poi.name;
      
    }

   
</script>
</body>
</html>