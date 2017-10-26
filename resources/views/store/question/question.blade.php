@extends('store.public.parent')

@section('content')
	<!-- 内容区域 -->
    <div class="tpl-content-wrapper">
        <div class="row-content am-cf">
            <div class="row">
                <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                    <div class="widget am-cf">
                        <div class="widget-head am-cf">
                            <div class="widget-title am-fl">向饱否提交您遇到的的问题</div>
                        </div>
                        <div class="widget-body am-fr">

                            <form class="am-form tpl-form-border-form">

                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-12 am-form-label  am-text-left">问题概况</label>
                                    <div class="am-u-sm-12">
                                        <input type="text" id="user-weibo" class="am-margin-top-xs" placeholder="您遇到的问题简述">
                                        <div>

                                        </div>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-intro" class="am-u-sm-12 am-form-label  am-text-left">问题详情</label>
                                    <div class="am-u-sm-12 am-margin-top-xs">
                                        <textarea class="" rows="10" id="user-intro" placeholder="您遇到问题的具体流程"></textarea>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <div class="am-u-sm-12 am-u-sm-push-12">
                                        <button type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
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