<template>
<div class="container">
<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Register Today</h3>
                        <p>Fill in the data below.</p>
<div v-if="errors.length" style="color: red;">
<b>Please correct following error</b>

	<ul>
	<li v-for="e in errors" v-bind:key="e.id">
		{{e}}
	</li>

	</ul>
</div>



<form @submit="checkfrmsubmit" method="post">
  

  
	<div class="form-group">
    <label for="title">Title: </label>
    <input class="form-control" type="text" v-model="title">
</div>

<div class="form-group">
    <label for="priority">Priority: </label>
    <select class="form-control" name="priority" id="priority" v-model="priority">
      <option>low</option>
      <option>medium</option>
      <option>high</option>
    </select>
</div>


<div class="form-group">
    <label for="due_date">Due Date: </label>
    <input class="form-control" type="date" name="due_date" id="due_date" v-model="due_date" min="0">
</div>



<div class="form-button mt-3">
    <input type="submit" class="btn btn-primary" value="Submit">  
</div>

</form>
</div>
</div>
</div>
</div>
</div>
</div>
</template>

<script>

import axios from 'axios'

export default {
	name:"HelloWorld",
	data(){
		return {
		
			errors:[],
			values:[],
			title:null,
			priority:null,
			due_date:null
		}

	
	},methods:{
		checkfrmsubmit(e){
			this.values = [];
			if(this.title && this.priority && this.due_date){ 
				this.values.push(this.title);
				this.values.push(this.priority);
				this.values.push(this.due_date);
				axios.post('http://127.0.0.1:8000/api/task/create',this.values).then(res =>{
					console.log('res');
					console.log(res);
				}).catch(err =>{
					console.log(err);
				})
			
				//return true;
			}
			this.errors = [];
			if(!this.title){
				this.errors.push("title is required.");
			}
			if(!this.priority){
				this.errors.push("priority is required.");
			}
			if(!this.due_date){
				this.errors.push("due date is required.");
			}
			console.warn("Hello",this.errors);
			e.preventDefault();
		
		}
	
	}

}

</script>
