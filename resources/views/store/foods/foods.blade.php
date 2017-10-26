@extends('store.public.parent')

@section('content')
	<!-- 内容区域 -->
	<div class="tpl-content-wrapper">

            <div class="container-fluid am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-6">
                        <div class="page-header-heading"> 菜品管理 </div>
                    </div>
					<div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                        <div class="am-form-group tpl-table-list-select">
                            <select data-am-selected="{btnSize: 'sm'}">
                                <option value="option1">所有类别</option>
                                <option value="option2">主食</option>
                                <option value="option2">小菜</option>
                            </select>
                        </div>
                    </div>
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                        <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
	                        <input type="text" class="am-form-field " placeholder="搜索菜品">
	                        <span class="am-input-group-btn">
	                        	<button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="button"></button>
	                        </span>
                     	</div>
                    </div>
                </div>

            </div>

            <div class="row-content am-cf">
                <div class="row  am-cf">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-4" style="float:left">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">无敌好吃草莓甜心</div>
                                <div class="widget-fluctuation-description-amount text-success" am-cf style="float:right">
                                        ￥160
                                </div>
                            </div>
                            <span style="float:right;margin-right:16px">库存：1000/1000</span>
                            <div class="widget-body am-fr">
                                <div class="am-fl">
                                    <div class="widget-fluctuation-period-text">
                                        <a href="{{ url('store/foodEdit') }}"><button class="widget-fluctuation-tpl-btn">
					                        编辑
					                    </button></a>
                                        <button class="widget-fluctuation-tpl-btn">
					                        沽清
					                    </button>
                                        <button class="widget-fluctuation-tpl-btn">
					                        置满
					                    </button>
                                        <button class="widget-fluctuation-tpl-btn">
					                        下架
					                    </button>
                                    </div>
                                </div>
                                <div class="am-fr am-cf">
                                    <div class="widget-fluctuation-description-text am-text-right">
                                        <img src="{{ asset('assets/img/cake.jpg') }}" style="width:180px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="am-u-lg-12 am-cf">
					<div class="am-fr">
                        <ul class="am-pagination tpl-pagination">
                            <li class="am-disabled"><a href="#">«</a></li>
                            <li class="am-active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>

@endsection