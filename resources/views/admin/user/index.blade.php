@extends('admin.layout.index')
@section('content')




<div class="mws-panel-body no-padding">
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
    
    <form action="/admin/user" method = "get">
    <div id="DataTables_Table_1_length" class="dataTables_length">
    <label>显示
    <select size="1" name="count" aria-controls="DataTables_Table_1">
    <option value="10"@if(!empty($request['count']) && $request['count'] == 10 ) selected     @endif>10</option>
    <option value="20" @if(!empty($request['count']) && $request['count'] == 10 ) selected     @endif>20</option>
    <option value="30" @if(!empty($request['count']) && $request['count'] == 10 ) selected     @endif>30</option>
    <option value="50" @if(!empty($request['count']) && $request['count'] == 10 ) selected     @endif>50</option>
    </select> 条</label>
    </div>
    <div class="dataTables_filter" id="DataTables_Table_1_filter">
    <label>搜素: <input type="text" name="search"value="{{ $request['search'] or '' }}" aria-controls="DataTables_Table_1">
                  <input type="submit"name=""value="搜索" class="btn btn-success">
    </label>

    </div>
    <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
        <thead>
           <tr>
           	<th>ID</th>
           	<th>用户名</th>      	
           	<th>手机</th>
           	<th>邮箱</th>
           	<th>操作</th>
           </tr>
        </thead>
     </form>   
    <tbody role="alert" aria-live="polite" aria-relevant="all">

    		@foreach($data as $k=>$v)
				<tr class="odd">
	                <td class="  sorting_1">{{ $v['id'] }}</td>
	                <td class=" ">{{ $v['username'] }}</td>	                
	                <td class=" ">{{ $v['phone'] }}</td>
	                <td class=" ">{{ $v['email'] }}</td>
	                <td class=" ">
                  <form action="/admin/user/{{ $v['id'] }}"method="post">
                            {{ csrf_field() }}
                    <input type="hidden"name="_method"value="DELETE">
                    <input type="submit"value="删除" class="btn btn-warning">
                  </form>
	                	
	                	<button class="btn btn-success"><a href="/admin/user/{{ $v['id'] }}/edit">修改</a></button>
	                </td>
	            </tr>
    		@endforeach
    		
            </tbody>
            </table>
          <!--  <div class="dataTables_info" id="DataTables_Table_1_info">Showing 1 to 10 of 57 entries</div>
           <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
            <a tabindex="0" class="first paginate_button paginate_button_disabled" id="DataTables_Table_1_first">First</a>
            <a tabindex="0" class="previous paginate_button paginate_button_disabled" id="DataTables_Table_1_previous">Previous</a>
            <span>
            <a tabindex="0" class="paginate_active">1</a>
            <a tabindex="0" class="paginate_button">2</a>
            <a tabindex="0" class="paginate_button">3</a>
            <a tabindex="0" class="paginate_button">4</a>
            <a tabindex="0" class="paginate_button">5</a>
            </span>
            <a tabindex="0" class="next paginate_button" id="DataTables_Table_1_next">Next</a>
            <a tabindex="0" class="last paginate_button" id="DataTables_Table_1_last">Last</a> -->
          
           <!-- </div> -->
           <div id="ssssss" >
           	 	{!! $data->appends(['request'=>$request])->render() !!}
           	
           </div>
           </div>
</div>
@endsection