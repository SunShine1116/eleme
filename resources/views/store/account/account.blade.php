@extends('store.public.parent')
@section('content')
	<!-- 内容区域 -->
     <!-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> -->
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">对账账单</div>
                            </div>
                            <div class="widget-body  ">
                            

                                <form action="{{ url('store/account') }}">
                                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-6">
                                        <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                            <input type="text" class="am-form-field " name="transaction_hour" placeholder="搜索账单">
                                            <span class="am-input-group-btn">
                								<button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="submit"></button>
                                            </span>
                                        </div>
                                    </div>
                                </form>  

                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                                <th>交易时间</th>
                                                <th>交易额</th>
                                                <th>交易单号</th>
                                            </tr>
                                        </thead>
                                         @foreach ($accounts as $account)
                                        <tbody>
                                            <tr class="gradeX">
                                                <td>{{ $account->transaction_hour }}</td>
                                                <td>+￥{{ $account->transaction_amount }}</td>
                                                <td>订单</td>
                                            </tr>
                                            <!-- more data -->
                                        </tbody>
                                         @endforeach
                                    </table>
                                </div>
                                <div class="am-u-lg-12 am-cf">
                                    <div class="am-fr">
                                        <ul class="am-pagination tpl-">
                                            {{ $accounts->appends(['$where'])->links() }}
                                        </ul>
                                    </div>
                                </div>

                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- {!! $accounts->render() !!} -->

@endsection