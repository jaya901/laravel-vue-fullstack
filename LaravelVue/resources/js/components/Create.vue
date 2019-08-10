<template>
    <div class="container">
        <div class="card">
            <div class="card-header" style="text-align:center">Create New</div>

            <div class="card-body">
                <form>
                    <div class="form-group">
                        <input type="text" name="" placeholder="Title" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea rows="5" type="text" name="" placeholder="Description" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <router-link class="btn btn-warning" to="/">Cancel</router-link>
                        <button class="btn btn-success">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
