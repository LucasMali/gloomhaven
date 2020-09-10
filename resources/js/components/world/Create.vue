<template>
    <form :action="`${storeRoute}`" method="POST">
        <Name name="World Name" desc="Name of your world."/>
        <div class="form-group row">
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Create New World</button>
            </div>
            <div class="col-sm-9">
                <a :href="`${indexRoute}`" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </form>
</template>

<script>
    import Name from './FieldName'
    export default {
        name: 'Create',
        mounted() {
            console.log('Component mounted.')
        },
        components: {
            Name
        },
        props: {
            storeRoute: String,
            indexRoute: String
        }
    }
</script>
