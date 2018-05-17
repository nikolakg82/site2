<template>
    <div id="app">
        <div>
            Header
        </div>
        <div>
            <router-view/>
        </div>
    </div>
</template>
<script>
    export default {
        created(){
            this.$http.get('http://site2.loc/user/get-admin-user.json', {
                before(request) {

                }

            }).then(response => {
                console.log('aa');
            }, response => {
                // error callback
            });
        }
    }
</script>