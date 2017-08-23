@extends('admin.layout.index')
@section('content')

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span>用户添加</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" action="/admin/user"method="post">
                    				{{ csrf_field() }}
                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">用户名</label>
                    				<div class="mws-form-item">
                    					<input class="small" type="text"name="username"value=""placeholder="用户名">
                    				</div>
                    			</div>
                    			
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">密码</label>
                    				<div class="mws-form-item">
                    					<input class="small" type="password"name="password"value=""placeholder="密码">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">确认密码</label>
                    				<div class="mws-form-item">
                    					<input class="small" type="password"name="repassword"value=""placeholder="确认密码">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">邮箱</label>
                    				<div class="mws-form-item">
                    					<input class="small" type="text"name="email"value=""placeholder="邮箱">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">手机号</label>
                    				<div class="mws-form-item">
                    					<input class="small" type="text"name="phone"value=""placeholder="手机号">
                    				</div>
                    			</div>
                    			
                    			</div>
                    			
                    			
                    		
                    		<div class="mws-button-row">
                    			<input value="添加" class="btn btn-success" type="submit">
                    			<input value="重置" class="btn " type="reset">
                    		</div>
                    	</form>
                    </div>    	
                </div>

@endsection