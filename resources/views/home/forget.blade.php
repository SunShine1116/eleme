<!DOCTYPE html>
<html class="no-js" lang="zh">
 <head> 
  <meta charset="utf-8" /> 
  <title>忘记密码-forget.html</title> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <meta name="description" content="饿了么是中国最专业的网上订餐平台，提供各类中式、日式、韩式、西式等优质美食。" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 


  
  


  <script>
  // 不支持的跳到 mobile 站
  if(navigator.userAgent.indexOf("MSIE")!=-1 && !window.localStorage){window.location.href="http://m.ele.me/download";}

  // 开始时间
  var startTime = new Date().getTime();

  // 全局变量
  var ELEME = window.ELEME || {};
  ELEME.baseUrl = "";
  ELEME.formerBaseUrl = "http://ele.me";
  ELEME.route = "account_forget_password";
  ELEME.fussHost = "https://fuss.ele.me";
  ELEME.staticHost = "https://static2.ele.me";
  ELEME.rootHost = "ele.me";
  ELEME.mainHost = "v5.ele.me";
  ELEME.payHost = "p.ele.me";
  ELEME.accountHost = "account.ele.me";
    ELEME.csrfToken = "b3c56e4bbd43c2e5b03fcbe3ff32534863ea2912";
    ELEME.timeDelta = 1427461829 - new Date().getTime()/1000;
  ELEME.payHost = "p.ele.me";
  </script> 
  <link class="usemin" rel="stylesheet" href="home/css/global_rebuild.a739f3af.css" /> 
  <link class="usemin" rel="stylesheet" href="home/css/account_rebuild.54cf8909.css" /> 
 </head> 
 <body class="page-account"> 
  <header class="header"> 
   <h1 class="header-hd" title="ele.me | 叫外卖？上饿了么!"> <a class="logo" role="logo" href="http://ele.me"> 
     <svg class="logo-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="306px" height="36px" fill="#0097ec" viewbox="0 0 306 36"> 
      <g> 
       <path d="M9.477,18.946c-0.937,0.003-1.696,0.763-1.696,1.7c0,0.939,0.763,1.7,1.702,1.7c0.021,0,0.043-0.002,0.065-0.004l10.933,0.004c0.094-0.558,0.145-1.129,0.145-1.713c0-5.695-4.618-10.312-10.312-10.312C4.617,10.321,0,14.938,0,20.634s4.617,10.312,10.313,10.312c2.695,0,5.146-1.035,6.983-2.729l-1.039-1.33c-0.303-0.375-0.762-0.619-1.282-0.619c-0.319,0-0.615,0.095-0.868,0.252c-0.017,0.001-0.032,0.007-0.048,0.018c-1.083,0.688-2.367,1.088-3.746,1.088c-3.861,0-6.991-3.13-6.991-6.991s3.13-6.991,6.991-6.991c3.279,0,6.03,2.259,6.785,5.304H9.477L9.477,18.946z" /> 
       <path d="M40.309,18.946c-0.936,0.003-1.695,0.763-1.695,1.7c0,0.939,0.761,1.7,1.701,1.7c0.022,0,0.043-0.002,0.065-0.004l10.934,0.004c0.093-0.558,0.144-1.129,0.144-1.713c0-5.695-4.618-10.312-10.312-10.312s-10.312,4.617-10.312,10.312s4.617,10.312,10.312,10.312c2.695,0,5.146-1.035,6.983-2.729l-1.039-1.33c-0.304-0.375-0.762-0.619-1.282-0.619c-0.32,0-0.615,0.095-0.869,0.252c-0.016,0.001-0.031,0.007-0.047,0.018c-1.082,0.688-2.367,1.088-3.746,1.088c-3.861,0-6.991-3.13-6.991-6.991s3.13-6.991,6.991-6.991c3.28,0,6.03,2.259,6.785,5.304H40.309L40.309,18.946z" /> 
       <path d="M96.951,19.591c-0.81,0.47-1.087,1.508-0.618,2.319c0.47,0.813,1.509,1.092,2.323,0.622c0.019-0.012,0.036-0.023,0.055-0.036l9.47-5.463c-0.198-0.53-0.439-1.05-0.732-1.556c-2.848-4.933-9.155-6.622-14.086-3.775c-4.933,2.848-6.624,9.155-3.775,14.088c2.847,4.932,9.155,6.623,14.087,3.774c2.334-1.348,3.939-3.471,4.682-5.854l-1.564-0.634c-0.451-0.172-0.97-0.155-1.419,0.104c-0.278,0.16-0.486,0.391-0.627,0.652c-0.013,0.011-0.023,0.022-0.032,0.04c-0.594,1.138-1.506,2.125-2.7,2.815c-3.344,1.931-7.621,0.785-9.551-2.559c-1.931-3.345-0.785-7.621,2.56-9.551c2.839-1.64,6.35-1.06,8.528,1.2L96.95,19.59L96.951,19.591z" /> 
       <path d="M84.807,17.01c0-3.321-2.694-6.015-6.016-6.015c-2.038,0-3.835,1.016-4.924,2.564c-1.088-1.549-2.886-2.564-4.923-2.564c-1.488,0-2.846,0.542-3.896,1.437v-0.415l0.001-0.001c-0.001-0.936-0.759-1.693-1.693-1.694h-1.697v20.625h3.408V16.87h0.017c0.299-1.487,1.611-2.608,3.185-2.608s2.889,1.121,3.187,2.608h0.008l0.007,14.076h3.49V17.083h-0.002c0-0.023,0.002-0.049,0.002-0.073c0-0.068-0.009-0.135-0.01-0.203c0.322-1.455,1.615-2.545,3.167-2.545c1.575,0,2.889,1.121,3.186,2.608h0.008l0.007,14.076h3.489V17.083h-0.003C84.804,17.06,84.807,17.034,84.807,17.01z" /> 
       <path d="M27.431,1.701c0-0.936-0.757-1.696-1.693-1.7V0h-1.71v30.946h3.402L27.43,3.401V1.71l0,0C27.43,1.707,27.431,1.704,27.431,1.701z" /> 
       <path d="M58.258,27.543h-3.403v3.403h1.693v-0.001c0.003,0,0.006,0.001,0.009,0.001c0.94,0,1.702-0.762,1.702-1.701c0-0.004,0-0.007,0-0.01l0,0V27.543z" /> 
       <rect x="116.965" y="0.748" width="1.219" height="35.252" /> 
       <path d="M201.104,24.71l-3.774-1.155l0.567-2.031c0.038-0.251,0.146-0.567,0.318-0.947c0.174-0.38,0.381-0.751,0.623-1.11c0.243-0.359,0.582-0.698,1.019-1.017c0.436-0.319,0.995-0.572,1.675-0.76c0.678-0.187,1.109-0.367,1.295-0.536c0.183-0.171,0.352-0.477,0.508-0.92c0.153-0.441,0.124-0.866-0.091-1.271c-0.166-0.201-0.399-0.396-0.699-0.581c-0.302-0.187-0.596-0.334-0.883-0.441c-0.289-0.105-0.646-0.075-1.075,0.095c-0.35,0.157-0.618,0.358-0.807,0.602c-0.188,0.244-0.35,0.591-0.487,1.039l-0.237,0.774l-3.774-1.155c0.159-0.517,0.297-0.974,0.419-1.371c0.121-0.395,0.364-0.849,0.727-1.358c0.364-0.511,0.832-0.933,1.406-1.266c0.574-0.334,1.323-0.537,2.252-0.612c0.926-0.073,1.908,0.047,2.941,0.363c1.437,0.479,2.497,1.143,3.18,1.992c0.68,0.85,1.057,1.652,1.127,2.409c0.069,0.757,0.022,1.431-0.139,2.021c-0.163,0.592-0.405,1.103-0.724,1.532c-0.365,0.454-0.731,0.784-1.095,0.992c-0.366,0.209-0.829,0.397-1.388,0.565c-0.561,0.167-0.966,0.317-1.213,0.447c-0.249,0.133-0.446,0.316-0.593,0.554c-0.149,0.238-0.355,0.787-0.618,1.648L201.104,24.71z M196.613,25.711l3.826,1.172l-1.139,3.721l-3.826-1.171L196.613,25.711z" /> 
       <path d="M303.441,12.026l-1.264,6.559l-1.551,5.877l-2.976-0.574l0.843-6.012l1.264-6.56L303.441,12.026z M296.94,25.949l3.683,0.709l-0.699,3.632l-3.683-0.709L296.94,25.949z" /> 
       <path d="M127.561,10.438h8.802v16.726c-0.058,1.407-0.822,2.142-2.288,2.2h-6.515V10.438z M133.282,26.019V13.256h-2.64v13.644h1.936C133.048,26.899,133.282,26.606,133.282,26.019z M143.318,26.548V10.175h3.257v16.373h0.969v2.816h-1.058v0.968h-3.081v-0.968h-6.602v-2.816h0.88V10.967h3.082v15.581H143.318z" /> 
       <path d="M150.271,17.04v-2.992h0.705c0.469,0.059,0.762-0.058,0.88-0.353l1.232-3.521h3.257l-0.352,1.145h5.897v2.641l-3.345,10.123l1.144,1.496c0.234,0.352,0.558,0.499,0.97,0.439h1.231v2.729h-2.464c-0.764,0-1.232-0.147-1.408-0.44l-0.793-0.792l-0.616,1.409c-0.234,0.526-0.822,0.821-1.76,0.879h-4.666v-2.64h3.257c0.234,0.059,0.411-0.088,0.528-0.44l0.792-2.377l-1.673-2.816h-0.087c-0.119-0.293-0.294-0.44-0.528-0.44h-2.202V18.36h3.962c0.41,0.06,0.704,0.207,0.88,0.441l1.056,1.76l1.849-6.25h-2.817l-0.792,2.025c-0.176,0.527-0.705,0.763-1.584,0.703H150.271z M166.116,30.245h-3.344v-20.07h3.344v4.225l3.17,9.243c0.116,0.234,0.233,0.352,0.352,0.352h0.265v2.642h-1.849c-0.528,0.059-0.88-0.117-1.058-0.528l-0.88-1.849V30.245z" /> 
       <path d="M171.838,19.946h2.906l0.615,0.527c0.116,0.176,0.322,0.234,0.616,0.176h5.898v1.761h-7.307c-0.646,0.06-1.057-0.058-1.232-0.353L171.838,19.946z M172.102,11.055h8.187v-0.704h3.345v0.704h8.451v2.289h-8.451v1.056h8.451v6.162h-2.993v-3.785h-16.989v-2.377h8.187v-1.056h-8.187V11.055z M173.951,19.505l-1.849-2.112h3.433l0.44,0.528c0.176,0.176,0.353,0.235,0.528,0.176h5.281v1.761h-6.513C174.566,19.916,174.126,19.8,173.951,19.505z M184.337,23.467v-5.634h2.993v5.634h4.842v2.464h-4.402l1.673,1.938c0.176,0.294,0.44,0.439,0.792,0.439h1.938v2.114h-3.521c-0.471,0-0.881-0.208-1.233-0.618l-2.2-2.728l-5.546,3.08c-0.646,0.293-1.204,0.44-1.673,0.44h-5.898v-2.289h4.578c0.293,0,0.586-0.028,0.88-0.088l4.049-2.289h-9.418v-2.464H184.337z" /> 
       <path d="M215.281,27.516V10.087h3.344v4.489h10.414v2.816h-10.414v10.123h10.916v2.729h-20.158v-2.729H215.281z" /> 
       <path d="M268.903,12.816h-14.865v-2.729h19.442v2.376l-3.346,3.962v11.267c0.059,1.76-0.851,2.61-2.729,2.554h-11.558v-2.642h10.062c0.527,0.059,0.792-0.265,0.792-0.968v-7.834h-6.076v-2.729h5.372L268.903,12.816z" /> 
       <path d="M274.64,26.987l14.964-16.46h3.872v0.175l-14.26,15.757l0.089,0.177h10.738c0.409,0.059,0.617-0.177,0.617-0.705v-3.583h3.079v4.903c0.059,1.585-0.615,2.347-2.023,2.289H274.64V26.987z" /> 
       <polygon points="280.801,10.438 273.922,17.984 277.689,17.922 284.763,10.438" /> 
       <path d="M231.925,13.256h0.265c0.293,0.059,0.498-0.088,0.615-0.439l0.617-2.555h2.729l-0.353,1.321h2.817v4.754h-2.642v-2.201h-0.704l-0.176,0.616c-0.061,0.587-0.529,0.823-1.409,0.704h-1.761V13.256z M232.806,28.484V16.601h3.257v10.915c0,0.353,0.176,0.499,0.528,0.44h1.057v2.466h-3.168C233.304,30.479,232.748,29.833,232.806,28.484z M238.879,13.52v-2.553h3.081c0.293,0.118,0.44-0.029,0.44-0.439v-0.266h2.201v1.938c0.058,0.88-0.263,1.292-0.968,1.232v1.673h2.112l-0.175-4.843h2.904l0.176,4.843h3.082v2.553h-2.994l0.265,6.513h0.263c0.234,0.06,0.352-0.057,0.352-0.352v-4.841h2.113v5.81c0,1.352-0.528,1.967-1.585,1.849h-0.968l0.087,0.792c-0.058,0.411,0.117,0.587,0.528,0.528h1.85v2.552h-2.465c-1.761,0-2.641-0.559-2.641-1.672l-0.176-2.2h-1.848V24.17h1.76l-0.265-6.513h-2.376v1.496h0.881v2.553h-0.881v6.514c0,1.526-0.646,2.259-1.937,2.202h-2.993v-2.466h1.761c0.352,0.118,0.498-0.029,0.44-0.44V24.61l-0.353,0.617c-0.294,0.47-0.647,0.675-1.056,0.615h-1.232v-2.2h0.352c0.293,0.06,0.585-0.205,0.88-0.793l1.409-2.552v-2.641h-2.025v-2.553h2.025V13.52H238.879z" /> 
       <rect x="249.722" y="10.702" width="2.01" height="3.267" /> 
      </g> 
     </svg> <img class="logo-img" src="home/images/logo.b38593f4.png" alt="ele.me| 叫外卖？上饿了么！" /> </a> </h1> 
  </header> 
  <div class="container clrfix"> 
   <aside class="banner"> 
    <img class="img" src="home/images/banner-app.75596728.png" alt="随时随地轻松订餐" /> 
   </aside> 
   <div class="panel"> 
    <div class="panel-hd"> 
     <h2 class="title">忘记密码</h2> 
     <p class="sub-title-long">请选择验证身份方式</p> 
    </div> 
    <div class="panel-bd"> 
     <div class="tab clrfix"> 
      <a class="tab-item active" href="#forget_password_form">注册邮箱</a> 
      <a class="tab-item tabl-item" href="#forget_password_mobile_form">已绑定手机</a> 
     </div> 
     <form id="forget_password_form" class="form hide block" action="" method=""> 
      <fieldset class="account-field"> 
       <div class="form-item"> 
        <input id="email_input" class="inputbox" name="email" type="email" placeholder="注册邮箱" required="" /> 
        <div class="g-error-tip hide"></div> 
       </div> 
       <div class="form-item clrfix"> 
        <input id="captcha_input" class="inputbox input-captcha" type="text" name="captcha" minlength="4" maxlength="4" placeholder="验证码" autocomplete="off" required="" /> 
        <div class="g-error-tip hide"></div> 
        <img id="captcha_img" class="captcha-img" data-action="forget_password" src="//v5.ele.me/captcha?action=forget_password" alt="验证码" title="请填写验证码" /> 
       </div> 
      </fieldset> 
      <button class="g-btn g-btn-l g-btn-submit btn-individual" type="submit">确认</button> 
     </form> 
     <form id="forget_password_mobile_form" class="form hide" action="" method=""> 
      <fieldset class="account-field"> 
       <div class="form-item"> 
        <input id="mobile_input" class="inputbox" name="mobile" type="mobile" placeholder="手机号码" maxlength="13" required="" /> 
        <div class="g-error-tip hide"></div> 
       </div> 
       <div id="verify_code" class="form-item"> 
        <button id="sms_btn" type="button" class="g-btn g-btn-m g-btn-send">发送验证码</button> 
        <input id="verify_code_input" class="inputbox" name="code" type="text" placeholder="短信验证码" minlength="6" maxlength="6" autocomplete="off" required="" /> 
        <div class="g-error-tip hide"></div> 
       </div> 
       <div class="form-item"> 
        <input class="inputbox" name="password" type="password" placeholder="新密码" minlength="6" maxlength="20" required="" /> 
        <div class="g-error-tip hide"></div> 
       </div> 
       <div class="form-item"> 
        <input class="inputbox" name="repeat" type="password" placeholder="确认密码" minlength="6" maxlength="20" required="" /> 
        <div class="g-error-tip hide"></div> 
       </div> 
       <div class="form-helper form-text"> 
        <p>收不到短信？使用 <a id="voice_btn" class="">语音验证码<span class="voice-time hide">60秒</span></a> </p> 
        <p id="voice_tip_first" class="tip hide">接通中…请留意来自<span class="dialing-number">021-54332216</span>的电话</p> 
       </div> 
      </fieldset> 
      <button class="g-btn g-btn-l g-btn-submit btn-individual" type="submit">确认</button> 
     </form> 
    </div> 
    <div class="panel-ft"> 
     <a class="g-link" href="/login">返回登录</a> 
    </div> 
    <div id="loading_mask" class="ui-wave-loader-mask hide"> 
     <i class="ui-wave-loader left"></i> 
     <i class="ui-wave-loader middle"></i> 
     <i class="ui-wave-loader right"></i> 
    </div> 
   </div> 
   <div id="hidetip" class="panel panel-success hide"> 
    <div class="panel-hd clrfix"> 
     <h2 class="title"><em class="icon-success"></em>重设密码邮件发送成功</h2> 
    </div> 
    <div class="panel-bd"> 
     <div class="form-item">
      请您移驾去注册邮箱查阅来自饿了么的邮件,重设您的密码
     </div> 
     <div class="form-item">
      感谢您对饿了么的支持。^_^
     </div> 
    </div> 
   </div> 
  </div> 
  <footer class="site-footer group" role="contentinfo"> 
   <div class="container"> 
    <p class="sfooter-line"> <a class="sfooter-link" href="http://kaidian.ele.me">我要开店</a> | <a class="sfooter-link" href="contact.html">联系我们</a> | <a class="sfooter-link" href="http://ele.me/about/agreement">服务条款和协议</a> | <a class="sfooter-link" href="sitemaps.html">站点地图</a> | <a class="sfooter-link" href="http://ele.me/jobs">加入我们</a> </p> 
    <p class="sfooter-line"> 增值电信业务许可证：<a class="sfooter-link sfooter-link-zero" target="_blank" rel="nofollow" href="http://www.shca.gov.cn">沪B2-20150033</a> <a class="sfooter-link" target="_blank" rel="nofollow" href="http://www.miibeian.gov.cn">沪ICP备 09007032</a> <a class="sfooter-link" target="_blank" rel="nofollow" href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&amp;entyId=20120305173227823">上海工商行政管理</a> Copyright &copy;2008-2015 ele.me, All Rights Reserved. </p> 
   </div> 
  </footer> 
  <script class="usemin" src="home/js/vendor_rebuild.e3fae7ec.js"></script> 
  <script class="usemin" src="home/js/account_rebuild.9e3ebcc8.js"></script> 
  <!-- UBT --> 
  <script>
  UBT.send('PV', {
    resolution: window.screen ? screen.width + 'x' + screen.height : null,
    location: location.href,
    referrer: document.referrer
  });
  </script> 
  <!-- fingerprint --> 
  <script>
  // fingerprint
  void function() {
    // 已存在 fingerprint 则不做处理
    var fingerprint = document.cookie.match(/(?:^|; )track_fingerprint_1=(.*?)(?:; |$)|$/)[1];
    if(fingerprint) return;
    // 发送 fingerprint data
    var fin = new Fingerprint();
    var data = fin.get();
    var track_id = document.cookie.match(/(?:^|; )track_id=(.*?)(?:; |$)|$/)[1];
    var xhr = !-[1,] ? new XDomainRequest() : new XMLHttpRequest();
    xhr.open('POST', '//restapi.ele.me/v1/browser_fingerprints', true);
    var package = { track_id: track_id, json_string: JSON.stringify(data) };
    xhr.send(JSON.stringify(package));
    // 计算 fingerprint 种下 cookie
    var fingerprint = fin.murmurhash3_32_gc(JSON.stringify(package), 31);
    var domain = document.domain.match(/[\w-]+\.?[\w-]+$/)[0];
    document.cookie = 'track_fingerprint_1=' + fingerprint + '; Expires=Wed, 31 Dec 2098 16:00:00 GMT; Domain=' + domain + '; Path=/';
  }();
  </script>   
 </body>
</html>