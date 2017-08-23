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
                    	<span>用户修改</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" action="/admin/user/{{ $data['id'] }}"method="post">

                            <input type="hidden"name="_method"value="PUT">
                    				{{ csrf_field() }}
                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">用户名</label>
                    				<div class="mws-form-item">
                    					<input class="small" type="text"name="username"value="{{ $data['username'] }}"placeholder="用户名" readonly >
                    				</div>
                    			</div>
                    			
                    		
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">邮箱</label>
                    				<div class="mws-form-item">
                    					<input class="small" type="text"name="email"value="{{ $data['email'] }}"placeholder="邮箱">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">手机号</label>
                    				<div class="mws-form-item">
                    					<input class="small" type="text"name="phone"value="{{ $data['phone'] }}"placeholder="手机号">
                    				</div>
                    			</div>
                    			
                    			</div>
                    			
                    			
                    		
                    		<div class="mws-button-row">
                    			<input value="修改" class="btn btn-success" type="submit">
                    			
                    		</div>
                    	</form>
                    </div>    	
                </div>

@endsection