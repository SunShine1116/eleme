@extends('store.public.parent')

@section('content')
	<!-- 内容区域 -->
    <div class="tpl-content-wrapper">
        <div class="row-content am-cf">
            <div class="row">
                <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                    <div class="widget am-cf">
                        <div class="widget-body am-fr">

                            <form class="am-form tpl-form-border-form">

                                <div class="am-form-group">
                                    <div class="am-u-sm-12">
                                        <span>女王大人</span>
                                        <p style="border:1px solid #666;font-size:12px;padding:6px">这个真的吼吼吃啊</p>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-intro" class="am-u-sm-12 am-form-label  am-text-left">举报</label>
                                    <div class="am-u-sm-12 am-margin-top-xs">
                                        <textarea class="" rows="10" id="user-intro" placeholder="请输入您的举报理由"></textarea>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <div class="am-u-sm-12 am-u-sm-push-12">
                                        <button type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success ">确认举报</button>
                                        <button type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success ">取消举报</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection