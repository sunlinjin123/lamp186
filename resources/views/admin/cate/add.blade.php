@extends('admin.layout.index')



@section('content')
<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span>Inline Form</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" action="form_layouts.html">
                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">分类名称</label>
                    				<div class="mws-form-item">
                    					<input class="small" type="text" name="">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">父类名称</label>
                    				<div class="mws-form-item">
                    					<input class="medium" type="text" name="">
                    				</div>
                    			</div>
                    			
                    			
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">Dropdown List</label>
                    				<div class="mws-form-item">
                    					<select class="large">
                    						<option>Option 1</option>
                    						<option>Option 3</option>
                    						<option>Option 4</option>
                    						<option>Option 5</option>
                    					</select>
                    				</div>
                    			</div>
                    			
                    			
                    			
                    		</div>
                    		<div class="mws-button-row">
                    			<input value="添加" class="btn btn-danger" type="submit">
                    			<input value="重置" class="btn " type="reset">
                    		</div>
                    	</form>
                    </div>    	
                </div>



@endsection