<template>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="name">{{name}}</label>
        <div class="col-sm-10">
            <input required name="name" type="text" class="form-control" placeholder="World Name" value=""/>
            <small class="form-text text-muted">{{desc}}</small>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: {
            name: String,
            value: String,
            desc: String
        }
    }
</script>
